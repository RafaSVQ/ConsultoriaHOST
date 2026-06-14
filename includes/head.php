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

/**
 * Cache-busting con filemtime().
 *
 * Calcula la ruta física a /assets/ desde __DIR__ (/includes/),
 * subiendo exactamente un nivel. Funciona igual para páginas
 * en raíz (depth=0) y en subcarpetas (depth=1).
 *
 * Uso: assets/css/main.css<?= asset_v('css/main.css') ?>
 */
$_assets_root = realpath(__DIR__ . '/../assets');

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

  <title><?= htmlspecialchars($full_title, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="keywords"    content="<?= htmlspecialchars($page_keys, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="author"      content="<?= SITE_NAME ?>">
  <meta name="robots"      content="index, follow">
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

  <!-- Tipografías -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Estilos con cache-busting automático -->
  <link rel="stylesheet" href="<?= $base_path ?>assets/css/main.css<?= asset_v('css/main.css') ?>">
  <link rel="stylesheet" href="<?= $base_path ?>assets/css/components.css<?= asset_v('css/components.css') ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="<?= $base_path ?>assets/img/favicon.svg<?= asset_v('img/favicon.svg') ?>">
</head>
<body>
