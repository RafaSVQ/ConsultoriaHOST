<?php
/**
 * bootstrap.php — Punto de entrada único para todas las páginas.
 *
 * Define APP_ROOT (ruta absoluta a la carpeta root, fuera del webroot)
 * y carga las variables de entorno desde el fichero .env.
 *
 * Incluir al inicio de cada página:
 *   require_once __DIR__ . '/bootstrap.php';          // páginas en public_html/
 *   require_once dirname(__DIR__) . '/bootstrap.php'; // páginas en subcarpetas
 *
 * Compatible con PHP 8.0 – 8.5.
 */

if (!defined('APP_ROOT')) {
    // dirname(__DIR__) sube de public_html/ → consultoriahost/ (root real)
    define('APP_ROOT', dirname(__DIR__));
}

// Cargar .env solo una vez
if (!defined('_ENV_LOADED')) {
    $__env = APP_ROOT . '/.env';
    if (is_readable($__env)) {
        foreach (file($__env, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $__line) {
            $__line = trim($__line);

            // Saltar comentarios y líneas sin '='
            if ($__line === '' || str_starts_with($__line, '#') || !str_contains($__line, '=')) {
                continue;
            }

            // Separar solo en el primer '=' (la contraseña puede contener '=')
            [$__k, $__v] = explode('=', $__line, 2);
            $__k = trim($__k);
            $__v = trim($__v);

            // Quitar comillas envolventes ("valor" o 'valor')
            $__len = strlen($__v);
            if ($__len >= 2) {
                $__first = $__v[0];
                $__last  = $__v[$__len - 1];
                if (($__first === '"' && $__last === '"') ||
                    ($__first === "'" && $__last === "'")) {
                    $__v = substr($__v, 1, -1);
                }
            }

            // No sobrescribir variables ya definidas en el entorno real del servidor
            if (!array_key_exists($__k, $_ENV) && getenv($__k) === false) {
                $_ENV[$__k] = $__v;
                putenv("$__k=$__v");
            }
        }
    }
    define('_ENV_LOADED', true);
    unset($__env, $__line, $__k, $__v, $__len, $__first, $__last);
}
