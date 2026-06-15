#!/usr/bin/env python3
"""
CONSULTORÍA HOST — Script de auditoría del proyecto
Archivo: audit.py

Detecta y reporta:
  1. BOM UTF-8 en archivos PHP/CSS/JS (causa "headers already sent")
  2. CRLF en archivos de código (ruido en git, problemas en Linux)
  3. Anclajes internos rotos (href="pagina.php#seccion" sin id="seccion")
  4. Sintaxis PHP estructural (llaves desbalanceadas, falta <?php)

Uso:
  python audit.py              # Auditar desde la raíz del proyecto
  python audit.py --fix-bom   # Eliminar BOM de todos los archivos afectados
  python audit.py --fix-crlf  # Convertir CRLF → LF en todos los afectados

El script ignora automáticamente:
  - Carpeta .git/
  - hrefs con expresiones PHP dinámicas (<?= $var ?>, <?php ... ?>)
  - Atributos id generados dinámicamente via arrays PHP ('anchor'=>)
"""

import os
import re
import sys
import argparse
from pathlib import Path


# ── Configuración ──────────────────────────────────────────────
ROOT        = Path(__file__).parent
WEBROOT     = ROOT / 'public_html'
PHP_EXT     = {'.php'}
CODE_EXT    = {'.php', '.css', '.js', '.html', '.htaccess'}
BOM         = b'\xef\xbb\xbf'
SKIP_DIRS   = {'.git', 'vendor', 'node_modules', 'DIST'}
SKIP_FILES  = {'test-smtp.php', 'link_checker.php', 'audit.py'}


# ── Utilidades ─────────────────────────────────────────────────
def iter_files(root: Path, extensions: set) -> list[Path]:
    """Recorre el árbol de directorios devolviendo archivos con las extensiones dadas."""
    result = []
    for dp, dirnames, filenames in os.walk(root):
        # Excluir carpetas ignoradas en sitio (modifica dirnames in-place)
        dirnames[:] = [d for d in dirnames if d not in SKIP_DIRS]
        for fn in sorted(filenames):
            if fn in SKIP_FILES:
                continue
            if Path(fn).suffix in extensions or fn == '.htaccess':
                result.append(Path(dp) / fn)
    return result


def rel(path: Path) -> str:
    """Ruta relativa desde ROOT para mostrar en el informe."""
    try:
        return str(path.relative_to(ROOT))
    except ValueError:
        return str(path)


def contains_php_expr(text: str) -> bool:
    """True si el texto contiene una expresión PHP (<?= o <?php)."""
    return '<?=' in text or '<?php' in text.lower()


# ── Check 1: BOM ───────────────────────────────────────────────
def check_bom(files: list[Path], fix: bool = False) -> list[str]:
    issues = []
    for fp in files:
        raw = fp.read_bytes()
        if raw.startswith(BOM):
            issues.append(rel(fp))
            if fix:
                fp.write_bytes(raw[3:])
    return issues


# ── Check 2: CRLF ──────────────────────────────────────────────
def check_crlf(files: list[Path], fix: bool = False) -> list[str]:
    issues = []
    for fp in files:
        raw = fp.read_bytes()
        if b'\r\n' in raw:
            issues.append(rel(fp))
            if fix:
                fp.write_bytes(raw.replace(b'\r\n', b'\n'))
    return issues


# ── Check 3: Anclajes internos ─────────────────────────────────
def collect_ids(fp: Path) -> set[str]:
    """
    Recoge todos los id= definidos en un archivo PHP/HTML,
    incluyendo los generados dinámicamente desde arrays PHP
    ('anchor' => 'nombre').
    """
    text = fp.read_text(encoding='utf-8', errors='ignore')
    # id="valor" o id='valor' estáticos
    ids = set(re.findall(r'\bid=["\']([^"\'<>]+)["\']', text))
    # 'anchor' => 'valor' en arrays PHP (renderizados con isset)
    ids |= set(re.findall(r"['\"]anchor['\"]\s*=>\s*['\"]([^'\"]+)['\"]", text))
    return ids


def resolve_href(src: Path, href: str) -> tuple[Path | None, str]:
    """
    Dada la ruta del archivo fuente y un href con #,
    devuelve (ruta_absoluta_del_destino, nombre_del_anclaje).
    Devuelve (None, '') si el href contiene expresiones PHP dinámicas.
    """
    if contains_php_expr(href):
        return None, ''

    if '#' not in href:
        return None, ''

    page_part, anchor = href.split('#', 1)

    if not anchor:
        return None, ''

    if not page_part:
        # Anclaje en la misma página
        return src, anchor

    # Resolver la ruta relativa desde el directorio del archivo fuente
    target = (src.parent / page_part).resolve()

    # Si no tiene extensión, asumir .php
    if not target.suffix:
        target = target.with_suffix('.php')

    return target, anchor


def check_anchors(php_files: list[Path]) -> list[str]:
    """
    Verifica que todos los href="pagina#seccion" tienen su id="seccion"
    correspondiente en la página destino.
    """
    # Construir índice de ids por archivo
    id_index: dict[Path, set[str]] = {}
    for fp in php_files:
        id_index[fp.resolve()] = collect_ids(fp)

    issues = []
    href_pattern = re.compile(r'href=["\']([^"\']*#[^"\']+)["\']')

    for fp in php_files:
        text = fp.read_text(encoding='utf-8', errors='ignore')
        for m in href_pattern.finditer(text):
            href = m.group(1)

            # Ignorar hrefs con PHP dinámico
            if contains_php_expr(href):
                continue

            target_path, anchor = resolve_href(fp, href)
            if target_path is None:
                continue

            target_resolved = target_path.resolve()

            if not target_resolved.exists():
                # El archivo destino no existe — es un 404, no un anclaje roto
                # Lo reportamos solo si está dentro de nuestro webroot
                if str(WEBROOT) in str(target_resolved):
                    issues.append(
                        f"{rel(fp)}: enlace a archivo inexistente → {href}"
                    )
                continue

            defined_ids = id_index.get(target_resolved, set())
            if anchor not in defined_ids:
                issues.append(
                    f"{rel(fp)}: #{anchor} no encontrado en "
                    f"{rel(target_resolved)} → href=\"{href}\""
                )

    return issues


# ── Check 4: Sintaxis PHP estructural ──────────────────────────
def check_php_structure(php_files: list[Path]) -> list[str]:
    issues = []
    for fp in php_files:
        text = fp.read_text(encoding='utf-8', errors='ignore')
        probs = []

        # Debe empezar con <?php (ignorar BOM si queda alguno)
        clean = text.lstrip('\ufeff')
        if not clean.startswith('<?php'):
            probs.append('no empieza con <?php')

        # Llaves balanceadas (aproximado — no detecta errores dentro de strings)
        open_b  = text.count('{')
        close_b = text.count('}')
        if open_b != close_b:
            probs.append(f'llaves: {open_b} {{ vs {close_b} }}')

        if probs:
            issues.append(f"{rel(fp)}: {', '.join(probs)}")

    return issues


# ── Informe ─────────────────────────────────────────────────────
def report(title: str, issues: list[str], fix_applied: bool = False) -> bool:
    print(f"\n{'='*58}")
    print(f"  {title}")
    print(f"{'='*58}")
    if not issues:
        print("  ✅ Sin problemas")
        return True
    for iss in issues:
        action = "(corregido)" if fix_applied else ""
        status = "✅" if fix_applied else "❌"
        print(f"  {status} {iss} {action}")
    return fix_applied  # True si se aplicó fix (ya no es un error)


# ── Main ────────────────────────────────────────────────────────
def main():
    parser = argparse.ArgumentParser(
        description='Auditoría del proyecto Consultoría HOST'
    )
    parser.add_argument('--fix-bom',  action='store_true',
                        help='Eliminar BOM de los archivos afectados')
    parser.add_argument('--fix-crlf', action='store_true',
                        help='Convertir CRLF → LF en los archivos afectados')
    args = parser.parse_args()

    print()
    print("╔══════════════════════════════════════════════════════╗")
    print("║     CONSULTORÍA HOST — Auditoría del proyecto        ║")
    print(f"║     Raíz: {str(ROOT):<43}║")
    print("╚══════════════════════════════════════════════════════╝")

    code_files = iter_files(ROOT, CODE_EXT)
    php_files  = [f for f in code_files if f.suffix == '.php']

    # 1. BOM
    bom_issues  = check_bom(code_files, fix=args.fix_bom)
    bom_ok      = report("1. BOM UTF-8", bom_issues, fix_applied=args.fix_bom)

    # 2. CRLF
    crlf_issues = check_crlf(code_files, fix=args.fix_crlf)
    crlf_ok     = report("2. CRLF", crlf_issues, fix_applied=args.fix_crlf)

    # 3. Anclajes
    anchor_issues = check_anchors(php_files)
    anchor_ok     = report("3. Anclajes internos (#...)", anchor_issues)

    # 4. Sintaxis PHP
    php_issues = check_php_structure(php_files)
    php_ok     = report("4. Sintaxis PHP estructural", php_issues)

    # Resumen
    total_issues = (
        (0 if (args.fix_bom  or not bom_issues)  else len(bom_issues))  +
        (0 if (args.fix_crlf or not crlf_issues) else len(crlf_issues)) +
        len(anchor_issues) +
        len(php_issues)
    )

    print(f"\n{'='*58}")
    if total_issues == 0:
        print("  ✅ PROYECTO LIMPIO — sin problemas detectados")
    else:
        print(f"  ❌ {total_issues} problema(s) sin resolver")
        print()
        if bom_issues and not args.fix_bom:
            print("     → Ejecuta:  python audit.py --fix-bom")
        if crlf_issues and not args.fix_crlf:
            print("     → Ejecuta:  python audit.py --fix-crlf")
    print(f"{'='*58}\n")

    sys.exit(0 if total_issues == 0 else 1)


if __name__ == '__main__':
    main()
