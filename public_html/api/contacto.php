<?php
/**
 * CONSULTORÍA HOST — Procesador del formulario de contacto
 * Archivo: public_html/api/contacto.php
 *
 * Recibe POST, valida, aplica antispam y envía el correo vía
 * SMTP (clase Mailer + PHPMailer). Devuelve JSON para el cliente AJAX.
 *
 * Configuración SMTP: en el .env (cargado por bootstrap.php).
 * Datos de marca: en config/site.php.
 */

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';
require_once APP_ROOT . '/config/site.php';
require_once APP_ROOT . '/includes/Mailer.php';

/* ============================================================
   CONFIGURACIÓN LOCAL
   ============================================================ */
const ASUNTO_EMAIL = '[HOST Web] Nuevo mensaje de contacto';

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
    return (bool) filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) <= 320;
}

function validarTelefono(string $telefono): bool
{
    if (empty($telefono)) return true;
    $clean = preg_replace('/[\s\-\(\)\+]/', '', $telefono);
    // Admitir prefijo +34/0034 → queda 9 dígitos
    if (str_starts_with($clean, '34') && strlen($clean) === 11) {
        $clean = substr($clean, 2);
    }
    return ctype_digit($clean) && strlen($clean) === 9;
}

/**
 * Plantilla HTML del correo que recibe HOST con el mensaje del cliente.
 */
function plantillaAviso(string $nombreCompleto, string $email, string $telefono, string $mensaje, string $fecha): string
{
    $dominio   = SITE_DOMAIN;
    $telBloque = '';
    if (!empty($telefono)) {
        $telBloque = '<div class="field"><div class="label">Teléfono</div>'
            . '<div class="value"><a href="tel:' . $telefono . '">' . $telefono . '</a></div></div>';
    }

    return <<<HTML
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><style>
  body { font-family: Arial, sans-serif; color:#1E293B; background:#F8FAFC; margin:0; padding:20px; }
  .card { background:#FFF; border-radius:12px; max-width:600px; margin:0 auto; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,.08); }
  .header { background:linear-gradient(135deg,#0F2B5B,#1A56A8); padding:28px 32px; }
  .header h1 { color:#FFF; margin:0; font-size:20px; }
  .header p { color:rgba(255,255,255,.7); margin:4px 0 0; font-size:13px; }
  .body { padding:32px; }
  .field { margin-bottom:20px; }
  .label { font-size:11px; font-weight:bold; text-transform:uppercase; letter-spacing:.08em; color:#94A3B8; margin-bottom:4px; }
  .value { font-size:15px; color:#1E293B; }
  .msg { background:#F1F5F9; border-left:3px solid #E8621A; padding:16px; border-radius:6px; white-space:pre-wrap; }
  .footer { background:#F1F5F9; padding:16px 32px; font-size:12px; color:#94A3B8; text-align:center; }
</style></head><body>
<div class="card">
  <div class="header">
    <h1>Nuevo mensaje de contacto</h1>
    <p>{$fecha}</p>
  </div>
  <div class="body">
    <div class="field"><div class="label">Nombre</div><div class="value">{$nombreCompleto}</div></div>
    <div class="field"><div class="label">Email</div><div class="value"><a href="mailto:{$email}">{$email}</a></div></div>
    {$telBloque}
    <div class="field"><div class="label">Mensaje</div><div class="value msg">{$mensaje}</div></div>
  </div>
  <div class="footer">Enviado desde el formulario de contacto de <a href="https://{$dominio}">{$dominio}</a></div>
</div></body></html>
HTML;
}

/**
 * Plantilla HTML del correo de confirmación que recibe el cliente.
 */
function plantillaConfirmacion(string $nombre): string
{
    $phoneLink = 'tel:' . SITE_PHONE_E164;
    $phone     = SITE_PHONE;
    $horas     = SITE_HOURS_LONG;
    $url       = SITE_URL;
    $dominio   = SITE_DOMAIN;
    $siteName  = SITE_NAME;

    return <<<HTML
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><style>
  body { font-family: Arial, sans-serif; color:#1E293B; background:#F8FAFC; margin:0; padding:20px; }
  .card { background:#FFF; border-radius:12px; max-width:600px; margin:0 auto; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,.08); }
  .header { background:linear-gradient(135deg,#0F2B5B,#1A56A8); padding:28px 32px; }
  .header h1 { color:#FFF; margin:0; font-size:20px; }
  .body { padding:32px; line-height:1.7; color:#475569; }
  .highlight { color:#E8621A; font-weight:bold; }
  .footer { background:#F1F5F9; padding:16px 32px; font-size:12px; color:#94A3B8; text-align:center; }
  a { color:#1A56A8; }
</style></head><body>
<div class="card">
  <div class="header"><h1>Mensaje recibido</h1></div>
  <div class="body">
    <p>Hola <strong>{$nombre}</strong>,</p>
    <p>Hemos recibido tu mensaje correctamente. <span class="highlight">Te contactaremos lo antes posible.</span></p>
    <p>Si tienes algo urgente, puedes llamarnos directamente:</p>
    <p style="font-size:1.2em;"><a href="{$phoneLink}"><strong>{$phone}</strong></a></p>
    <p style="font-size:.85em;color:#94A3B8;">{$horas}</p>
    <hr style="border:none;border-top:1px solid #E2E8F0;margin:24px 0;">
    <p style="font-size:.9em;">Un saludo,<br><strong>El equipo de {$siteName}</strong></p>
  </div>
  <div class="footer"><a href="{$url}">{$dominio}</a> · {$horas}</div>
</div></body></html>
HTML;
}

/* ============================================================
   RECOGIDA Y SANITIZACIÓN
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
    jsonResponse(true, 'Mensaje enviado correctamente.');  // Simular éxito al bot
}

if (empty($nombre))                                    jsonResponse(false, 'El nombre es obligatorio.');
if (empty($email))                                     jsonResponse(false, 'El email es obligatorio.');
if (empty($mensaje))                                   jsonResponse(false, 'El mensaje es obligatorio.');
if (strlen($nombre) < 2)                               jsonResponse(false, 'El nombre debe tener al menos 2 caracteres.');
if (strlen($mensaje) < 10)                             jsonResponse(false, 'El mensaje debe tener al menos 10 caracteres.');
if (strlen($nombre) > 100 || strlen($apellidos) > 100) jsonResponse(false, 'El nombre es demasiado largo.');
if (strlen($mensaje) > 5000)                           jsonResponse(false, 'El mensaje no puede superar los 5.000 caracteres.');
if (!validarEmail($email))                             jsonResponse(false, 'La dirección de email no es válida.');
if (!empty($telefono) && !validarTelefono($telefono))  jsonResponse(false, 'El número de teléfono no es válido.');

/* ============================================================
   ENVÍO VÍA SMTP
   ============================================================ */
$nombreCompleto = trim($nombre . ' ' . $apellidos);
date_default_timezone_set('Europe/Madrid');
$fechaEnvio = date('d/m/Y \a \l\a\s H:i');

$mailer = new Mailer();

// Destinatario: leído del .env, con fallback a SITE_EMAIL
$toAddress = trim((string) ($_ENV['MAIL_TO_ADDRESS'] ?? '')) ?: SITE_EMAIL;
$toName    = trim((string) ($_ENV['MAIL_TO_NAME'] ?? '')) ?: SITE_NAME;

// 1) Aviso a HOST (con Reply-To al cliente, para responder directamente)
$enviado = $mailer->send(
    toAddress: $toAddress,
    toName:    $toName,
    subject:   ASUNTO_EMAIL,
    htmlBody:  plantillaAviso($nombreCompleto, $email, $telefono, $mensaje, $fechaEnvio),
    replyTo:   $email,
    replyName: $nombreCompleto
);

if (!$enviado) {
    error_log('[HOST Contacto] Fallo al enviar: ' . $mailer->getLastError());
    jsonResponse(false,
        'Ha ocurrido un error al enviar tu mensaje. ' .
        'Por favor, llámanos directamente al ' . SITE_PHONE .
        ' o inténtalo de nuevo en unos minutos.'
    );
}

// 2) Confirmación al cliente (no crítica: si falla, no afecta al éxito)
$mailer->send(
    toAddress: $email,
    toName:    $nombreCompleto,
    subject:   'Hemos recibido tu mensaje — ' . SITE_NAME,
    htmlBody:  plantillaConfirmacion($nombre)
);

/* ============================================================
   RESPUESTA FINAL
   ============================================================ */
jsonResponse(true, '¡Mensaje enviado correctamente! Te contactaremos lo antes posible.');
