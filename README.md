# Consultoría HOST

Web corporativa de **Red de Redes Tecnológica S.L.U.** (CIF: B73326811).
Dominio: [consultoriahost.es](https://consultoriahost.es)

---

## Entorno local

| Elemento | Valor |
|---|---|
| Servidor local | Laragon |
| URL local | `http://consultoriahost.test` |
| PHP | 8.5 |
| Servidor de producción | Hostinger (shared hosting, CloudLinux) |
| Repo | [github.com/RafaSVQ/ConsultoriaHOST](https://github.com/RafaSVQ/ConsultoriaHOST) |

---

## Estructura del proyecto

```
consultoriahost/
├── config/            ← Configuración global (fuera del webroot)
│   ├── site.php       ← Punto único de verdad: datos del sitio, constantes
│   └── icons.php      ← Función icon() para SVG inline
├── includes/          ← Fragmentos PHP reutilizables (fuera del webroot)
│   ├── head.php
│   ├── nav.php
│   ├── footer.php
│   └── Mailer.php     ← Wrapper PHPMailer (lee .env)
├── public_html/       ← Raíz web pública
│   ├── assets/
│   │   ├── css/       ← main.css, components.css
│   │   ├── js/        ← main.js, cookies.js
│   │   └── img/
│   ├── api/
│   │   └── contacto.php
│   ├── blog/
│   ├── servicios/
│   ├── bootstrap.php  ← Carga .env + config/site.php (incluir en cada página)
│   └── *.php          ← Páginas del sitio
├── vendor/            ← Composer (gitignored — subir manualmente)
├── DIST/              ← Copia lista para FTP a Hostinger (gitignored)
├── .env               ← Variables SMTP y entorno (gitignored — NUNCA al repo)
├── audit.py           ← Auditoría automática del proyecto
├── make-dist.ps1      ← Sincroniza proyecto → DIST/ para deploy
├── DEPLOY.txt         ← Estado y checklist de despliegue
└── AUDITORIA.md       ← Auditoría forense del proyecto
```

---

## Flujo de trabajo diario

### 1. Desarrollar en local
- Editar archivos en el proyecto normalmente
- Previsualizar en `http://consultoriahost.test`

### 2. Auditar antes de cualquier commit o deploy
```bash
python audit.py
```
Detecta: BOM UTF-8, CRLF, anclajes `#` rotos, llaves PHP desbalanceadas.
El proyecto debe quedar **LIMPIO** antes de continuar.

Para autocorregir problemas de encoding:
```bash
python audit.py --fix-bom
python audit.py --fix-crlf
```

### 3. Actualizar el repositorio (GitHub)
Desde VSCode: `Ctrl+Shift+G` → añadir archivos → mensaje → Commit → Sync.

O desde terminal:
```bash
git add archivo.php
git commit -m "descripción del cambio"
git push
```

### 4. Preparar deploy a Hostinger
```powershell
.\make-dist.ps1
```
Copia `config/`, `includes/`, `public_html/` y `vendor/` a `DIST/`,
excluyendo scripts de diagnóstico local.

Después subir por FTP:
- Todo el contenido de `DIST/` → raíz de Hostinger (`u671378533/`)
- `DIST/.env` con `APP_ENV=production` y la contraseña SMTP real

---

## Archivos que NUNCA van al repo

| Archivo | Motivo |
|---|---|
| `.env` | Credenciales SMTP — sensible |
| `vendor/` | Dependencias Composer — se instalan con `composer install` |
| `DIST/` | Copia de deploy local — temporal |
| `test-smtp.php` | Script de diagnóstico local |
| `link_checker.php` | Script de diagnóstico local |

---

## Variables de entorno (.env)

```ini
APP_ENV=development          # producción: APP_ENV=production
APP_DEBUG=true               # producción: false

MAIL_HOST=smtp.hostinger.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=contactoweb@consultoriahost.es
MAIL_PASSWORD=<contraseña del buzón Hostinger>
MAIL_FROM_ADDRESS=contactoweb@consultoriahost.es
MAIL_FROM_NAME=Consultoría HOST
MAIL_DEBUG=0

MAIL_TO_ADDRESS=contactoweb@consultoriahost.es
MAIL_TO_NAME=Consultoría HOST Web
```

---

## Documentación de referencia

| Documento | Contenido |
|---|---|
| `DEPLOY.txt` | Estado actual del despliegue y checklist de producción |
| `AUDITORIA.md` | Auditoría forense completa — errores, soluciones y mejoras |
| `PHP_disponible.md` | Extensiones PHP disponibles en Hostinger y configuración OPcache |
| `INSTALAR_SMTP.md` | Guía de configuración SMTP con PHPMailer |
