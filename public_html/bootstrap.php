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
 */

if (!defined('APP_ROOT')) {
    // dirname(__DIR__) sube de public_html/ → consultoriahost/ (root real)
    define('APP_ROOT', dirname(__DIR__));
}

// Cargar .env solo una vez
if (!defined('_ENV_LOADED')) {
    $__env = APP_ROOT . '/.env';
    if (file_exists($__env)) {
        foreach (file($__env, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $__line) {
            $__line = trim($__line);
            if ($__line === '' || str_starts_with($__line, '#') || !str_contains($__line, '=')) {
                continue;
            }
            [$__k, $__v] = explode('=', $__line, 2);
            $__k = trim($__k);
            $__v = trim($__v);
            if (!array_key_exists($__k, $_ENV)) {
                $_ENV[$__k] = $__v;
                putenv("$__k=$__v");
            }
        }
    }
    define('_ENV_LOADED', true);
    unset($__env, $__line, $__k, $__v);
}
