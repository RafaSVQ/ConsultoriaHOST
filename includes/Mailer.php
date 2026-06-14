<?php
/**
 * CONSULTORÍA HOST — Servicio de envío de correo
 * Archivo: includes/Mailer.php
 *
 * Encapsula PHPMailer con SMTP autenticado. Lee toda la
 * configuración del .env (cargado por bootstrap.php), de modo
 * que las credenciales nunca están en el código.
 *
 * Requiere: PHPMailer vía Composer (vendor/autoload.php).
 *
 * Uso:
 *   require_once APP_ROOT . '/includes/Mailer.php';
 *   $mailer = new Mailer();
 *   $ok = $mailer->send(
 *       toAddress: 'destino@ejemplo.com',
 *       toName:    'Nombre Destino',
 *       subject:   'Asunto',
 *       htmlBody:  '<p>Contenido HTML</p>',
 *       replyTo:   'cliente@ejemplo.com',
 *       replyName: 'Cliente'
 *   );
 *   if (!$ok) { echo $mailer->getLastError(); }
 */

declare(strict_types=1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

final class Mailer
{
    /** @var string Último error registrado (para depuración) */
    private string $lastError = '';

    /** @var bool Si la librería PHPMailer está disponible */
    private bool $available;

    public function __construct()
    {
        // Cargar el autoloader de Composer si existe
        $autoload = APP_ROOT . '/vendor/autoload.php';
        $this->available = file_exists($autoload);
        if ($this->available) {
            require_once $autoload;
        }
    }

    /**
     * Indica si el sistema de correo está operativo
     * (PHPMailer instalado y credenciales presentes).
     */
    public function isAvailable(): bool
    {
        return $this->available
            && class_exists(PHPMailer::class)
            && $this->env('MAIL_HOST') !== ''
            && $this->env('MAIL_USERNAME') !== ''
            && $this->env('MAIL_PASSWORD') !== '';
    }

    /**
     * Envía un correo HTML vía SMTP.
     *
     * @param string      $toAddress  Destinatario
     * @param string      $toName     Nombre del destinatario
     * @param string      $subject    Asunto
     * @param string      $htmlBody   Cuerpo en HTML
     * @param string|null $replyTo    Email de respuesta (opcional)
     * @param string|null $replyName  Nombre de respuesta (opcional)
     * @return bool                   true si se envió correctamente
     */
    public function send(
        string  $toAddress,
        string  $toName,
        string  $subject,
        string  $htmlBody,
        ?string $replyTo   = null,
        ?string $replyName = null
    ): bool {
        if (!$this->isAvailable()) {
            $this->lastError = 'Sistema de correo no configurado (falta PHPMailer o credenciales en .env).';
            return false;
        }

        $mail = new PHPMailer(true); // true = lanzar excepciones

        try {
            // --- Configuración del servidor SMTP ---
            $mail->isSMTP();
            $mail->Host       = $this->env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = $this->env('MAIL_USERNAME');
            $mail->Password   = $this->env('MAIL_PASSWORD');
            $mail->Port       = (int) ($this->env('MAIL_PORT') ?: 465);
            $mail->CharSet    = 'UTF-8';

            // Cifrado: ssl (puerto 465) o tls (puerto 587)
            $encryption = strtolower($this->env('MAIL_ENCRYPTION') ?: 'ssl');
            $mail->SMTPSecure = $encryption === 'tls'
                ? PHPMailer::ENCRYPTION_STARTTLS
                : PHPMailer::ENCRYPTION_SMTPS;

            // Nivel de depuración (0 producción, 2 desarrollo)
            $mail->SMTPDebug = (int) ($this->env('MAIL_DEBUG') ?: 0);
            if ($mail->SMTPDebug > 0) {
                // Capturar el debug en lastError en vez de imprimirlo
                $mail->Debugoutput = function ($str, $level) {
                    $this->lastError .= $str . "\n";
                };
            }

            // --- Remitente ---
            $fromAddress = $this->env('MAIL_FROM_ADDRESS') ?: $this->env('MAIL_USERNAME');
            $fromName    = $this->env('MAIL_FROM_NAME')    ?: 'Consultoría HOST';
            $mail->setFrom($fromAddress, $fromName);

            // --- Destinatario ---
            $mail->addAddress($toAddress, $toName);

            // --- Responder a (el cliente que rellenó el formulario) ---
            if ($replyTo) {
                $mail->addReplyTo($replyTo, $replyName ?? '');
            }

            // --- Contenido ---
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlBody;
            $mail->AltBody = $this->htmlToText($htmlBody);

            $mail->send();
            return true;

        } catch (PHPMailerException $e) {
            $this->lastError = 'Error PHPMailer: ' . $mail->ErrorInfo;
            error_log('[HOST Mailer] ' . $this->lastError);
            return false;
        } catch (\Throwable $e) {
            $this->lastError = 'Error general: ' . $e->getMessage();
            error_log('[HOST Mailer] ' . $this->lastError);
            return false;
        }
    }

    /**
     * Devuelve el último error registrado.
     */
    public function getLastError(): string
    {
        return $this->lastError;
    }

    /**
     * Lee una variable de entorno cargada por bootstrap.php.
     */
    private function env(string $key): string
    {
        return trim((string) ($_ENV[$key] ?? getenv($key) ?: ''));
    }

    /**
     * Convierte HTML a texto plano para la versión AltBody.
     * Mejora la entregabilidad (clientes de correo sin HTML).
     */
    private function htmlToText(string $html): string
    {
        $text = preg_replace('/<br\s*\/?>/i', "\n", $html);
        $text = preg_replace('/<\/(p|div|h[1-6]|tr)>/i', "\n", $text);
        $text = strip_tags($text);
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
        $text = preg_replace('/\n{3,}/', "\n\n", $text);
        return trim($text);
    }
}
