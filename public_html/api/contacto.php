<?php
/**
 * CONSULTORÍA HOST — Procesador del formulario de contacto
 * Archivo: api/contacto.php
 *
 * Descripción: Recibe POST con datos del formulario, valida,
 *              aplica protecciones antispam y envía email.
 *              Devuelve JSON para el cliente AJAX.
 *
 * Requiere: PHP 7.4+ (disponible en Hostinger compartido).
 * Datos de contacto: centralizados en config/site.php.
 * Para cambiar email o teléfono, editar SOLO config/site.php.
 */

declare(strict_types=1);

// Cargar configuración global (email, teléfono, nombre del sitio, etc.)
require_once dirname(__DIR__) . '/bootstrap.php';
require_once APP_ROOT . '/config/site.php';

/* ============================================================
   CONFIGURACIÓN LOCAL DEL FORMULARIO
   (ajustar aquí solo lo específico del formulario de contacto)
   ============================================================ */

/** Asunto del email recibido */
const ASUNTO_EMAIL     = '[HOST Web] Nuevo mensaje de contacto';

/** Tiempo mínimo (segundos) entre carga de página y envío (bot protection) */
const MIN_TIEMPO_ENVIO = 3;

/* ============================================================
   INICIALIZACIÓN
   ============================================================ */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    jsonResponse(false, 'Método no permitido.');
}

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* ============================================================
   FUNCIONES AUXILIARES
   ============================================================ */

function jsonResponse(bool $success, string $message, array $data = []): void
{
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data'    => $data,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

function sanitize(mixed $value): string
{
    return htmlspecialchars(strip_tags(trim((string) $value)), ENT_QUOTES, 'UTF-8');
}

function validarEmail(string $email): bool
{
    return (bool) filter_var($email, FILTER_VALIDATE_EMAIL)
        && strlen($email) <= 320;
}

function validarTelefono(string $telefono): bool
{
    if (empty($telefono)) return true;
    $clean = preg_replace('/[\s\-\(\)]/', '', $telefono);
    return (bool) preg_match('/^(\+34|0034)?[6789]\d{8}$/', $clean);
}

/* ============================================================
   RECOGIDA Y SANITIZACIÓN DE DATOS
   ============================================================ */

$nombre    = sanitize($_POST['nombre']    ?? '');
$apellidos = sanitize($_POST['apellidos'] ?? '');
$telefono  = sanitize($_POST['telefono']  ?? '');
$email     = sanitize($_POST['email']     ?? '');
$mensaje   = sanitize($_POST['mensaje']   ?? '');
$honeypot  = trim((string) ($_POST['website'] ?? ''));

/* ============================================================
   VALIDACIONES
   ============================================================ */

if ($honeypot !== '') {
    jsonResponse(true, 'Mensaje enviado correctamente.');
}

if (empty($nombre))                           jsonResponse(false, 'El nombre es obligatorio.');
if (empty($email))                            jsonResponse(false, 'El email es obligatorio.');
if (empty($mensaje))                          jsonResponse(false, 'El mensaje es obligatorio.');
if (strlen($nombre) < 2)                      jsonResponse(false, 'El nombre debe tener al menos 2 caracteres.');
if (strlen($mensaje) < 10)                    jsonResponse(false, 'El mensaje debe tener al menos 10 caracteres.');
if (strlen($nombre) > 100 || strlen($apellidos) > 100) jsonResponse(false, 'El nombre es demasiado largo.');
if (strlen($mensaje) > 5000)                  jsonResponse(false, 'El mensaje no puede superar los 5.000 caracteres.');
if (!validarEmail($email))                    jsonResponse(false, 'La dirección de email no es válida.');
if (!empty($telefono) && !validarTelefono($telefono)) jsonResponse(false, 'El número de teléfono no es válido.');

/* ============================================================
   COMPOSICIÓN Y ENVÍO DEL EMAIL
   ============================================================ */

$nombreCompleto = trim($nombre . ' ' . $apellidos);
date_default_timezone_set('Europe/Madrid');
$fechaEnvio = date('d/m/Y \a \l\a\s H:i');

$cuerpoHtml = <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<style>
  body { font-family: Arial, sans-serif; color: #1E293B; background: #F8FAFC; margin:0; padding:20px; }
  .card { background: #FFFFFF; border-radius: 12px; max-width: 600px; margin: 0 auto; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
  .header { background: linear-gradient(135deg, #0F2B5B, #1A56A8); padding: 28px 32px; }
  .header h1 { color: #FFFFFF; margin: 0; font-size: 20px; }
  .body { padding: 32px; line-height: 1.7; color: #475569; }
  .field { margin-bottom: 20px; }
  .label { font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 0.08em; color: #94A3B8; margin-bottom: 4px; }
  .value { font-size: 15px; color: #1E293B; }
  .msg { background: #F1F5F9; border-left: 3px solid #E8621A; padding: 16px; border-radius: 6px; }
  .footer { background: #F1F5F9; padding: 16px 32px; font-size: 12px; color: #94A3B8; text-align: center; }
</style>
</head>
<body>
<div class="card">
  <div class="header">
    <h1>📬 Nuevo mensaje de contacto</h1>
    <p style="color:rgba(255,255,255,.7);margin:4px 0 0;font-size:13px;">
      {$fechaEnvio}
    </p>
  </div>
  <div class="body">
    <div class="field">
      <div class="label">Nombre</div>
      <div class="value">{$nombreCompleto}</div>
    </div>
    <div class="field">
      <div class="label">Email</div>
      <div class="value"><a href="mailto:{$email}">{$email}</a></div>
    </div>
HTML;

if (!empty($telefono)) {
    $cuerpoHtml .= <<<HTML
    <div class="field">
      <div class="label">Teléfono</div>
      <div class="value"><a href="tel:{$telefono}">{$telefono}</a></div>
    </div>
HTML;
}

$cuerpoHtml .= <<<HTML
    <div class="field">
      <div class="label">Mensaje</div>
      <div class="value msg">{$mensaje}</div>
    </div>
  </div>
  <div class="footer">
    Enviado desde el formulario de contacto de
    <a href="https://<?= SITE_DOMAIN ?>"><?= SITE_DOMAIN ?></a>
  </div>
</div>
</body>
</html>
HTML;

$cabeceras  = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
$cabeceras .= "From: " . SITE_NAME . " <" . SITE_EMAIL_NOREPLY . ">\r\n";
$cabeceras .= "Reply-To: {$nombreCompleto} <{$email}>\r\n";
$cabeceras .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$cabeceras .= "X-Priority: 1\r\n";

$enviado = mail(SITE_EMAIL, ASUNTO_EMAIL, $cuerpoHtml, $cabeceras);

if (!$enviado) {
    error_log('[HOST Contacto] Error al enviar email desde: ' . $email . ' — ' . date('Y-m-d H:i:s'));
    jsonResponse(false,
        'Ha ocurrido un error al enviar tu mensaje. ' .
        'Por favor, llámanos directamente al ' . SITE_PHONE .
        ' o inténtalo de nuevo en unos minutos.'
    );
}

/* ============================================================
   EMAIL DE CONFIRMACIÓN AL REMITENTE
   ============================================================ */
$asuntoConfirmacion = 'Hemos recibido tu mensaje — ' . SITE_NAME;
$phoneLink          = 'tel:' . SITE_PHONE_E164;
$phoneDisplay       = '📞 ' . SITE_PHONE;
$horasLargas        = SITE_HOURS_LONG;
$siteUrl            = SITE_URL;
$siteDomain         = SITE_DOMAIN;
$siteName           = SITE_NAME;

$cuerpoConfirmacion = <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<style>
  body { font-family: Arial, sans-serif; color: #1E293B; background: #F8FAFC; margin:0; padding:20px; }
  .card { background: #FFFFFF; border-radius: 12px; max-width: 600px; margin: 0 auto; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
  .header { background: linear-gradient(135deg, #0F2B5B, #1A56A8); padding: 28px 32px; }
  .header h1 { color: #FFFFFF; margin: 0; font-size: 20px; }
  .body { padding: 32px; line-height: 1.7; color: #475569; }
  .highlight { color: #E8621A; font-weight: bold; }
  .footer { background: #F1F5F9; padding: 16px 32px; font-size: 12px; color: #94A3B8; text-align: center; }
  a { color: #1A56A8; }
</style>
</head>
<body>
<div class="card">
  <div class="header">
    <h1>✅ Mensaje recibido</h1>
  </div>
  <div class="body">
    <p>Hola <strong>{$nombre}</strong>,</p>
    <p>Hemos recibido tu mensaje correctamente.
    <span class="highlight">Te contactaremos lo antes posible</span>,
    normalmente en menos de 24 horas laborables.</p>
    <p>Si tienes algo urgente, puedes llamarnos directamente:</p>
    <p style="font-size:1.2em;"><a href="{$phoneLink}"><strong>{$phoneDisplay}</strong></a></p>
    <p style="font-size:0.85em;color:#94A3B8;">{$horasLargas}</p>
    <hr style="border:none;border-top:1px solid #E2E8F0;margin:24px 0;">
    <p style="font-size:0.9em;">
      Un saludo,<br>
      <strong>El equipo de {$siteName}</strong>
    </p>
  </div>
  <div class="footer">
    <a href="{$siteUrl}">{$siteDomain}</a> · {$horasLargas}
  </div>
</div>
</body>
</html>
HTML;

$cabecerasConfirmacion  = "MIME-Version: 1.0\r\n";
$cabecerasConfirmacion .= "Content-Type: text/html; charset=UTF-8\r\n";
$cabecerasConfirmacion .= "From: " . SITE_NAME . " <" . SITE_EMAIL_NOREPLY . ">\r\n";

@mail($email, $asuntoConfirmacion, $cuerpoConfirmacion, $cabecerasConfirmacion);

/* ============================================================
   RESPUESTA FINAL
   ============================================================ */
jsonResponse(true, '¡Mensaje enviado correctamente! Te contactaremos lo antes posible.');
