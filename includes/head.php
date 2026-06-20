<?php
/**
 * CONSULTORÍA HOST — Fragmento reutilizable: <head> HTML
 * Archivo: includes/head.php
 *
 * Uso: include al inicio de cada página .php, definiendo antes:
 *   $page_title       — Título de la pestaña (sin sufijo)
 *   $page_description — Meta description
 *   $page_keywords    — Meta keywords (opcional)
 *   $page_canonical   — URL canónica completa
 *   $page_og_image    — Ruta imagen Open Graph (opcional)
 *
 * La profundidad de ruta se ajusta con $depth (0 = raíz, 1 = subcarpeta).
 */

// -------------------------------------------------------------
// Cargar configuración global (único require en todo el sitio)
// __DIR__ apunta siempre a /includes/, subimos un nivel a la raíz
// -------------------------------------------------------------
require_once __DIR__ . '/../config/site.php';
require_once __DIR__ . '/../config/icons.php';

$depth        = $depth        ?? 0;
$base_path    = str_repeat('../', $depth);

// Metadatos de página con fallback a las constantes globales
$page_title   = $page_title       ?? SITE_NAME;
$page_desc    = $page_description ?? SITE_DESCRIPTION;
$page_keys    = $page_keywords    ?? SITE_KEYWORDS;
$page_canon   = $page_canonical   ?? SITE_URL . '/';
$page_og_img  = $page_og_image    ?? SITE_OG_IMAGE;
$full_title   = $page_full_title  ?? ($page_title . ' — ' . SITE_NAME);

$_assets_root = APP_ROOT . '/public_html/assets';

/**
 * Devuelve el querystring de versión para un activo estático.
 *
 * @param  string $rel  Ruta relativa desde /assets/ (p.ej. 'css/main.css')
 * @return string       '?v=1710000000' o '' si el archivo no se encuentra
 */
function asset_v(string $rel): string {
    global $_assets_root;
    $ts = @filemtime($_assets_root . '/' . $rel);
    return $ts ? '?v=' . $ts : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Consent Mode v2 — denegado por defecto hasta aceptación del usuario -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('consent', 'default', {
      'analytics_storage': 'denied',
      'ad_storage': 'denied',
      'ad_user_data': 'denied',
      'ad_personalization': 'denied'
    });
  </script>

  <title><?= htmlspecialchars($full_title, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="keywords"    content="<?= htmlspecialchars($page_keys, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="author"      content="<?= SITE_NAME ?>">
  <meta name="robots"      content="<?= htmlspecialchars($page_robots ?? 'index, follow', ENT_QUOTES, 'UTF-8') ?>">
  <link rel="canonical"    href="<?= htmlspecialchars($page_canon, ENT_QUOTES, 'UTF-8') ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?= htmlspecialchars($page_canon, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:title"       content="<?= htmlspecialchars($full_title, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image"       content="<?= htmlspecialchars($page_og_img, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:locale"      content="es_ES">
  <meta property="og:site_name"   content="<?= SITE_NAME ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($full_title, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:image"       content="<?= htmlspecialchars($page_og_img, ENT_QUOTES, 'UTF-8') ?>">

  <meta name="google-site-verification" content="vqXm3DVGvRmgJkZabNJoSgUXKbBpvnYZp6_-RlcYB6M">

  <!-- Tipografías self-hosted: preload antes del CSS para evitar FOIT -->
  <link rel="preload" href="<?= $base_path ?>assets/fonts/outfit.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?= $base_path ?>assets/fonts/inter.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Estilos con cache-busting automático -->
  <link rel="stylesheet" href="<?= $base_path ?>assets/css/main.css<?= asset_v('css/main.css') ?>">
  <link rel="stylesheet" href="<?= $base_path ?>assets/css/components.css<?= asset_v('css/components.css') ?>">

  <!-- Bloque extra en <head> (Schema.org, scripts adicionales, etc.) -->
  <?php if (!empty($page_extra_head)) echo $page_extra_head; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="<?= $base_path ?>assets/img/favicon.svg<?= asset_v('img/favicon.svg') ?>">
</head>
<body>
