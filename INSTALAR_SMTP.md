# Instalación del envío de correo SMTP — Consultoría HOST

Sistema: PHPMailer + SMTP de Hostinger (contactoweb@consultoriahost.es)
Compatible con PHP 8.5.

## Archivos de este paquete

- `composer.json` → raíz del proyecto (junto a config/, includes/)
- `.env.example` → raíz del proyecto (plantilla)
- `includes/Mailer.php` → clase de envío
- `public_html/api/contacto.php` → procesador del formulario (actualizado)
- `public_html/bootstrap.php` → parser .env mejorado (actualizado)

## Pasos en Hostinger

### 1. Crear el .env real (NO se sube a git)
En la RAÍZ del proyecto (la carpeta que contiene config/, includes/,
public_html/ — NO dentro de public_html), crea un archivo `.env`
copiando `.env.example` y rellena la contraseña:

    MAIL_HOST=smtp.hostinger.com
    MAIL_PORT=465
    MAIL_ENCRYPTION=ssl
    MAIL_USERNAME=contactoweb@consultoriahost.es
    MAIL_PASSWORD=tu_contraseña_real_aquí
    MAIL_FROM_ADDRESS=contactoweb@consultoriahost.es
    MAIL_FROM_NAME="Consultoría HOST"
    MAIL_TO_ADDRESS=contactoweb@consultoriahost.es
    MAIL_TO_NAME="Consultoría HOST"
    MAIL_DEBUG=0

### 2. Instalar PHPMailer con Composer

OPCIÓN A — Tienes acceso SSH en Hostinger (plan Business o superior):
    cd ~/domains/consultoriahost.es   (o la ruta de tu proyecto)
    composer install --no-dev --optimize-autoloader

OPCIÓN B — Sin SSH:
    1. En tu PC con Composer instalado, en la raíz del proyecto:
       composer install --no-dev --optimize-autoloader
    2. Sube la carpeta vendor/ completa por FTP a la raíz del proyecto
       (al mismo nivel que config/ e includes/, NO dentro de public_html)

### 3. Verificar la estructura final en el servidor

    consultoriahost/              ← raíz (fuera del webroot)
    ├── .env                      ← credenciales (lo creaste tú)
    ├── composer.json
    ├── vendor/                   ← PHPMailer (de composer install)
    │   └── autoload.php
    ├── config/
    ├── includes/
    │   └── Mailer.php
    └── public_html/              ← webroot (lo que ve el navegador)
        └── api/contacto.php

### 4. Probar
- Rellena el formulario de contacto en la web.
- Debe llegar el correo a contactoweb@consultoriahost.es
- El remitente debe ser "Consultoría HOST <contactoweb@consultoriahost.es>"
- Debe llegar un correo de confirmación a quien rellenó el formulario.

### 5. Si algo falla
- Pon MAIL_DEBUG=2 en el .env temporalmente.
- Revisa el log de errores en hPanel → Avanzado → Logs de errores.
- Error "could not authenticate" → contraseña incorrecta en .env.
- Error "could not connect" → revisa que el puerto 465 no esté bloqueado;
  prueba puerto 587 con MAIL_ENCRYPTION=tls.

## Leer los correos desde Gmail (consultoriahost.es.web@gmail.com)

Esto se configura en Gmail, no en el código:
- Recibir: Gmail → Configuración → Cuentas → "Consultar correo de otras
  cuentas" → añade contactoweb@consultoriahost.es por IMAP (imap.hostinger.com:993, SSL)
- Enviar como: Gmail → Configuración → Cuentas → "Enviar como" → añade
  contactoweb@consultoriahost.es (SMTP smtp.hostinger.com:465, SSL)
  Así respondes desde Gmail pero el cliente ve tu dominio.
