<?php
/**
 * CONSULTORÍA HOST — Blog
 * Archivo: blog/index.php
 *
 * Índice del blog HOST. Estructura lista para añadir artículos.
 * En este punto no hay CMS; los artículos se definen en el
 * array $articulos y cada uno tiene su propio archivo .php
 * en la carpeta blog/.
 *
 * Para escalar: integrar con una base de datos MySQL
 * (disponible en Hostinger) cuando el volumen de contenido lo requiera.
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = 'Blog — Consultoría HOST';
$page_description = 'El blog de Consultoría HOST: artículos sobre emprendimiento, empleo, medioambiente, responsabilidad social y consultoría 3.0. Sevilla, España.';
$page_keywords    = 'blog consultoría, emprendimiento, empleo, medioambiente, responsabilidad social, HOST';
$page_canonical   = 'https://consultoriahost.es/blog/';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Blog', null],
];

require_once dirname(__DIR__) . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';

/* Catálogo de artículos — fuente única en config/articulos.php */
require_once APP_ROOT . '/config/articulos.php';

/* Filtrar publicados y separar por destacado */
$publicados = array_values(array_filter($articulos, fn(array $a): bool => $a['publicado'] ?? false));
$destacados = array_filter($publicados, fn(array $a): bool => $a['destacado']);
$resto      = array_filter($publicados, fn(array $a): bool => !$a['destacado']);

/**
 * Formatea una fecha ISO a formato español legible.
 */
function formatearFecha(string $fecha): string {
  $meses = ['ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic'];
  [$y, $m, $d] = explode('-', $fecha);
  return intval($d) . ' ' . $meses[intval($m) - 1] . '. ' . $y;
}
?>

<main id="main-content">

  <!-- CABECERA -->
  <div class="page-header">
    <div class="container page-header__inner">
      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Blog</span>
      </nav>
      <h1 class="page-header__title">Blog HOST</h1>
      <p class="page-header__subtitle">
        Ideas, análisis y reflexiones sobre consultoría, emprendimiento,
        empleo, medioambiente y desarrollo sostenible.
      </p>
    </div>
  </div>


  <!-- ARTÍCULOS DESTACADOS -->
  <?php if (!empty($destacados)): ?>
  <section class="section section--white" aria-labelledby="destacados-title">
    <div class="container">

      <div class="section-header reveal" style="text-align:left;margin-bottom:var(--space-8);">
        <span class="eyebrow">Más leídos</span>
        <h2 id="destacados-title" style="text-align:left;">Artículos destacados</h2>
      </div>

      <div class="grid grid-2 gap-6">
        <?php foreach ($destacados as $i => $art): ?>
        <article class="blog-card reveal <?= $i>0?'reveal--delay-1':'' ?>"
                 aria-labelledby="blog-dest-<?= $i ?>">
          <!-- Imagen placeholder con gradiente según categoría -->
          <div class="blog-card__image" style="<?php
            $grads = ['Consultoría'=>'var(--gradient-orange)','Emprendimiento'=>'var(--gradient-card)','Medioambiente'=>'var(--gradient-green)','Networking'=>'linear-gradient(135deg,#1E293B,#334155)','Social'=>'var(--gradient-green)','Empresas'=>'var(--gradient-card)','Formación'=>'linear-gradient(135deg,#B07800,#F5A623)'];
            $grad = $grads[$art['categoria']] ?? 'var(--gradient-card)';
            echo "background:$grad;";
          ?> display:flex;align-items:center;justify-content:center;">
            <span style="
              font-family:var(--font-display);font-weight:800;
              font-size:4rem;color:rgba(255,255,255,.15);
              user-select:none;
            " aria-hidden="true"><?= mb_substr($art['categoria'], 0, 1) ?></span>
          </div>
          <div class="blog-card__body">
            <div class="blog-card__meta">
              <span class="blog-card__category">
                <span class="badge <?= $art['catcolor'] ?>" style="font-size:.65rem;">
                  <?= $art['categoria'] ?>
                </span>
              </span>
              <span class="blog-card__date">
                <?= formatearFecha($art['fecha']) ?> · <?= $art['lectura'] ?> lectura
              </span>
            </div>
            <h3 class="blog-card__title" id="blog-dest-<?= $i ?>">
              <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>"
                 style="color:inherit;text-decoration:none;">
                <?= htmlspecialchars($art['titulo'], ENT_QUOTES, 'UTF-8') ?>
              </a>
            </h3>
            <p class="blog-card__excerpt">
              <?= htmlspecialchars($art['extracto'], ENT_QUOTES, 'UTF-8') ?>
            </p>
            <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>"
               class="btn btn--ghost btn--sm" style="color:var(--color-blue);padding-left:0;">
              Leer artículo →
            </a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
  <?php endif; ?>


  <!-- TODOS LOS ARTÍCULOS -->
  <section class="section section--alt" aria-labelledby="todos-title">
    <div class="container">

      <div style="
        display:flex;align-items:center;justify-content:space-between;
        margin-bottom:var(--space-8);
        flex-wrap:wrap;gap:var(--space-4);
      " class="reveal">
        <div>
          <span class="eyebrow">Todos los artículos</span>
          <h2 id="todos-title" style="margin-top:var(--space-2);">
            <?= count($publicados) ?> artículos publicados
          </h2>
        </div>
        <!-- Filtro de categorías (decorativo — para funcionalidad completa
             se necesitaría JS o una nueva página por categoría) -->
        <div style="display:flex;flex-wrap:wrap;gap:var(--space-2);">
          <?php
          $categorias = array_unique(array_column($publicados, 'categoria'));
          foreach ($categorias as $cat): ?>
          <span class="badge badge--navy" style="cursor:default;"><?= $cat ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="grid grid-3 gap-6">
        <?php foreach ($publicados as $i => $art): ?>
        <article class="blog-card reveal <?= $i>0?'reveal--delay-'.min($i%3,3):'' ?>"
                 aria-labelledby="blog-art-<?= $i ?>">
          <div class="blog-card__image" style="<?php
            $grads = ['Consultoría'=>'var(--gradient-orange)','Emprendimiento'=>'var(--gradient-card)','Medioambiente'=>'var(--gradient-green)','Networking'=>'linear-gradient(135deg,#1E293B,#334155)','Social'=>'var(--gradient-green)','Empresas'=>'var(--gradient-card)','Formación'=>'linear-gradient(135deg,#B07800,#F5A623)'];
            $grad = $grads[$art['categoria']] ?? 'var(--gradient-card)';
            echo "background:$grad;";
          ?> display:flex;align-items:center;justify-content:center;aspect-ratio:16/7;">
            <span style="
              font-family:var(--font-display);font-weight:800;
              font-size:3rem;color:rgba(255,255,255,.15);
              user-select:none;
            " aria-hidden="true"><?= mb_substr($art['categoria'], 0, 1) ?></span>
            <?php if ($art['destacado']): ?>
            <div style="
              position:absolute;top:var(--space-3);right:var(--space-3);
              background:var(--color-amber);
              border-radius:var(--radius-full);
              padding:var(--space-1) var(--space-3);
              font-size:.65rem;font-weight:700;color:white;
            ">Destacado</div>
            <?php endif; ?>
          </div>
          <div class="blog-card__body">
            <div class="blog-card__meta">
              <span class="badge <?= $art['catcolor'] ?>" style="font-size:.65rem;">
                <?= $art['categoria'] ?>
              </span>
              <span class="blog-card__date">
                <?= formatearFecha($art['fecha']) ?>
              </span>
            </div>
            <h3 class="blog-card__title" id="blog-art-<?= $i ?>">
              <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>"
                 style="color:inherit;text-decoration:none;">
                <?= htmlspecialchars($art['titulo'], ENT_QUOTES, 'UTF-8') ?>
              </a>
            </h3>
            <p class="blog-card__excerpt">
              <?= htmlspecialchars($art['extracto'], ENT_QUOTES, 'UTF-8') ?>
            </p>
            <div style="
              display:flex;align-items:center;justify-content:space-between;
              margin-top:var(--space-3);
            ">
              <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>"
                 class="btn btn--ghost btn--sm" style="color:var(--color-blue);padding-left:0;">
                Leer →
              </a>
              <span style="font-size:var(--text-xs);color:var(--color-text-muted);">
                <?= $art['lectura'] ?> lectura
              </span>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- NEWSLETTER / SUSCRIPCIÓN -->
  <section class="section section--white" aria-labelledby="newsletter-title">
    <div class="container container--narrow">
      <div class="reveal" style="
        background:var(--color-navy);
        border-radius:var(--radius-2xl);
        padding:var(--space-10);
        text-align:center;
        position:relative;overflow:hidden;
      ">
        <div style="
          position:absolute;inset:0;
          background-image:radial-gradient(circle at 30% 70%, rgba(232,98,26,.2) 0%, transparent 50%);
          pointer-events:none;
        " aria-hidden="true"></div>
        <div style="position:relative;z-index:1;">
          <div style="margin-bottom:var(--space-4);color:var(--color-amber);"><?= icon('mailbox', size: 40) ?></div>
          <h2 id="newsletter-title" style="
            font-family:var(--font-display);font-weight:800;
            font-size:var(--text-3xl);color:white;margin-bottom:var(--space-4);
          ">¿Quieres recibir los nuevos artículos?</h2>
          <p style="color:rgba(255,255,255,.7);margin-bottom:var(--space-6);max-width:480px;margin-inline:auto;">
            Cuando publiquemos algo nuevo, puedes ser de los primeros en leerlo.
            Sin spam, sin frecuencia forzada. Solo cuando hay algo que vale la pena leer.
          </p>
          <a href="../contacto" class="btn btn--primary btn--lg">
            Contactar para suscribirse
          </a>
          <p style="
            font-size:var(--text-xs);color:rgba(255,255,255,.4);
            margin-top:var(--space-4);max-width:none;
          ">
            Puedes darte de baja en cualquier momento.
            Consulta nuestra <a href="../privacidad" style="color:rgba(255,255,255,.5);">política de privacidad</a>.
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
