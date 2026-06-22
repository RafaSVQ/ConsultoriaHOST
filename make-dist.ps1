# ============================================================
# make-dist.ps1 — Sincroniza el proyecto local → DIST/
# ============================================================
# Uso: clic derecho en VSCode → "Ejecutar en terminal"
#      o desde PowerShell: .\make-dist.ps1
#
# Resultado: DIST/ queda lista para subir por FTP a Hostinger
#   DIST/ → u671378533/ (raíz del hosting)
# ============================================================

$root = $PSScriptRoot
$dist = Join-Path $root "DIST"

# Exclusiones para public_html (scripts de diagnóstico locales)
$excluir = @("test-smtp.php", "test-*.php", "link_checker.php", "*_checker.php")

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  Consultoría HOST — make-dist" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# ── 1. config/ ──────────────────────────────────────────────
Write-Host "[ 1/5 ] Sincronizando config/..." -ForegroundColor Yellow
$src = Join-Path $root "config"
$dst = Join-Path $dist "config"
if (Test-Path $src) {
    Copy-Item -Path "$src\*" -Destination $dst -Recurse -Force
    Write-Host "        OK — config/" -ForegroundColor Green
} else {
    Write-Host "        AVISO: config/ no encontrado" -ForegroundColor Red
}

# ── 2. includes/ ────────────────────────────────────────────
Write-Host "[ 2/5 ] Sincronizando includes/..." -ForegroundColor Yellow
$src = Join-Path $root "includes"
$dst = Join-Path $dist "includes"
if (Test-Path $src) {
    Copy-Item -Path "$src\*" -Destination $dst -Recurse -Force
    Write-Host "        OK — includes/" -ForegroundColor Green
} else {
    Write-Host "        AVISO: includes/ no encontrado" -ForegroundColor Red
}

# ── 3. docs/ (solo PDF finales — los .docx/.md de trabajo no se suben) ──
Write-Host "[ 3/5 ] Sincronizando docs/ (solo *.pdf)..." -ForegroundColor Yellow
$src = Join-Path $root "docs"
$dst = Join-Path $dist "docs"
if (Test-Path $src) {
    New-Item -ItemType Directory -Force -Path $dst | Out-Null
    $pdfs = Get-ChildItem -Path $src -Filter "*.pdf" -File
    foreach ($pdf in $pdfs) {
        Copy-Item -Path $pdf.FullName -Destination $dst -Force
    }
    Write-Host "        OK — docs/ ($($pdfs.Count) PDF)" -ForegroundColor Green
} else {
    Write-Host "        (sin docs/ — nada que sincronizar)" -ForegroundColor DarkGray
}

# ── 4. public_html/ (excluyendo scripts de diagnóstico) ─────
Write-Host "[ 4/5 ] Sincronizando public_html/..." -ForegroundColor Yellow
$src = Join-Path $root "public_html"
$dst = Join-Path $dist "public_html"
if (Test-Path $src) {
    # Copiar todo primero
    Copy-Item -Path "$src\*" -Destination $dst -Recurse -Force

    # Eliminar scripts de diagnóstico del DIST
    foreach ($patron in $excluir) {
        Get-ChildItem -Path $dst -Filter $patron -Recurse | Remove-Item -Force
    }
    Write-Host "        OK — public_html/ (scripts de diagnóstico excluidos)" -ForegroundColor Green
} else {
    Write-Host "        AVISO: public_html/ no encontrado" -ForegroundColor Red
}

# ── 5. vendor/ ──────────────────────────────────────────────
Write-Host "[ 5/5 ] Sincronizando vendor/..." -ForegroundColor Yellow
$src = Join-Path $root "vendor"
$dst = Join-Path $dist "vendor"
if (Test-Path $src) {
    Copy-Item -Path "$src\*" -Destination $dst -Recurse -Force
    Write-Host "        OK — vendor/" -ForegroundColor Green
} else {
    Write-Host "        AVISO: vendor/ no encontrado — ejecuta: composer install" -ForegroundColor Red
}

# ── Recordatorio .env ────────────────────────────────────────
Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  DIST/ sincronizada correctamente" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "RECUERDA subir también a Hostinger:" -ForegroundColor Yellow
$envDist = Join-Path $dist ".env"
if (Test-Path $envDist) {
    Write-Host "  [OK]  DIST/.env existe" -ForegroundColor Green
} else {
    Write-Host "  [!!]  DIST/.env no existe — copia .env y edita MAIL_PASSWORD" -ForegroundColor Red
    Write-Host "        El .env de produccion debe tener APP_ENV=production" -ForegroundColor Red
}
Write-Host ""
Write-Host "Estructura lista para FTP:" -ForegroundColor Cyan
Write-Host "  DIST/ → u671378533/ (raiz de Hostinger)" -ForegroundColor White
Write-Host ""
