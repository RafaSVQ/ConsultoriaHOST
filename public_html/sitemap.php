<?php
declare(strict_types=1);

/**
 * CONSULTORÍA HOST — Sitemap dinámico
 * Archivo: public_html/sitemap.php
 *
 * Servido como /sitemap.xml gracias a la rewrite rule en .htaccess.
 * Lee config/articulos.php para que el sitemap se actualice
 * automáticamente al publicar nuevos artículos.
 */

require_once __DIR__ . '/bootstrap.php';
require_once APP_ROOT . '/config/articulos.php';

header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: public, max-age=3600');

$base       = 'https://consultoriahost.es';
$publicados = array_filter($articulos, fn(array $a): bool => $a['publicado'] ?? false);

/* Páginas estáticas: [ruta, lastmod, changefreq, priority] */
$paginas = [
  ['/',                         '2026-06-13', 'monthly', '1.0'],
  ['/consultoria',              '2026-06-13', 'monthly', '0.9'],
  ['/que-es-host',              '2026-06-13', 'monthly', '0.9'],
  ['/metodo-host',              '2026-06-13', 'monthly', '0.8'],
  ['/empleo',                   '2026-06-13', 'monthly', '0.8'],
  ['/networking',               '2026-06-13', 'monthly', '0.7'],
  ['/contacto',                 '2026-06-13', 'yearly',  '0.7'],
  ['/servicios/humano',         '2026-06-13', 'monthly', '0.7'],
  ['/servicios/organizacional', '2026-06-13', 'monthly', '0.7'],
  ['/servicios/social',         '2026-06-13', 'monthly', '0.7'],
  ['/servicios/tecnologico',    '2026-06-13', 'monthly', '0.7'],
  ['/blog',                     '2026-06-13', 'weekly',  '0.6'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">

<?php foreach ($paginas as [$path, $lastmod, $freq, $prio]): ?>
  <url>
    <loc><?= $base . $path ?></loc>
    <lastmod><?= $lastmod ?></lastmod>
    <changefreq><?= $freq ?></changefreq>
    <priority><?= $prio ?></priority>
  </url>
<?php endforeach; ?>

<?php foreach ($publicados as $art): ?>
  <url>
    <loc><?= $base ?>/blog/<?= htmlspecialchars($art['slug'], ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= htmlspecialchars($art['fecha'], ENT_XML1, 'UTF-8') ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.6</priority>
<?php if (!empty($art['imagen'])): ?>
    <image:image>
      <image:loc><?= $base ?>/assets/img/<?= htmlspecialchars($art['imagen'], ENT_XML1, 'UTF-8') ?></image:loc>
      <image:title><?= htmlspecialchars($art['titulo'], ENT_XML1, 'UTF-8') ?></image:title>
    </image:image>
<?php endif; ?>
  </url>
<?php endforeach; ?>

</urlset>
