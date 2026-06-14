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

require_once dirname(__DIR__) . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';

/* =============================================================
   DEFINICIÓN DE ARTÍCULOS
   Para añadir un artículo: crear el archivo en /blog/
   y añadir una entrada en este array.
   ============================================================= */
$articulos = [
  [
    'slug'      => 'que-es-la-consultoria-3-0',
    'titulo'    => '¿Qué es la Consultoría 3.0 y por qué importa?',
    'extracto'  => 'La consultoría tradicional llena cajones de informes. La consultoría 3.0 de HOST sale a la calle y genera resultados reales. Te explicamos la diferencia.',
    'categoria' => 'Consultoría',
    'catcolor'  => 'badge--orange',
    'fecha'     => '2025-03-10',
    'lectura'   => '5 min',
    'destacado' => true,
  ],
  [
    'slug'      => 'errores-emprendimiento-evitar',
    'titulo'    => '7 errores de emprendimiento que puedes evitar con el Método HOST',
    'extracto'  => 'El 90% de quienes emprendan sin validar previamente su proyecto acaban en la ruina. Conoce los errores más comunes y cómo el Método HOST te ayuda a esquivarlos.',
    'categoria' => 'Emprendimiento',
    'catcolor'  => 'badge--blue',
    'fecha'     => '2025-02-18',
    'lectura'   => '7 min',
    'destacado' => true,
  ],
  [
    'slug'      => 'vertedero-sesena-solucion-real',
    'titulo'    => 'El vertedero de Seseña tiene solución. Y es gratuita para las arcas públicas.',
    'extracto'  => 'El mayor vertedero de neumáticos de Europa lleva décadas esperando una solución real. HOST la tiene. Sin coste para la administración, con beneficios medioambientales y generación de empleo.',
    'categoria' => 'Medioambiente',
    'catcolor'  => 'badge--green',
    'fecha'     => '2025-01-22',
    'lectura'   => '6 min',
    'destacado' => false,
  ],
  [
    'slug'      => 'networking-efectivo-consejos',
    'titulo'    => 'Networking efectivo: 5 claves que marcan la diferencia',
    'extracto'  => 'El networking mal entendido es publicidad de uno mismo. El networking efectivo es construir relaciones de valor. Te damos las 5 claves que HOST aplica en sus encuentros.',
    'categoria' => 'Networking',
    'catcolor'  => 'badge--navy',
    'fecha'     => '2024-12-05',
    'lectura'   => '4 min',
    'destacado' => false,
  ],
  [
    'slug'      => 'mujer-rural-emprendimiento',
    'titulo'    => 'Mujer rural y emprendimiento: oportunidades que no se ven',
    'extracto'  => 'La mujer en entornos rurales tiene menos acceso a recursos de desarrollo profesional. Pero también tiene ventajas competitivas únicas que HOST ayuda a identificar y aprovechar.',
    'categoria' => 'Social',
    'catcolor'  => 'badge--green',
    'fecha'     => '2024-11-14',
    'lectura'   => '5 min',
    'destacado' => false,
  ],
  [
    'slug'      => 'interim-management-espana',
    'titulo'    => 'Interim Management: el servicio que España aún no conoce bien',
    'extracto'  => 'En otros países es la primera opción cuando una empresa necesita resolver una situación crítica. En España aún se desconoce. Te explicamos qué es y por qué puede salvarte el negocio.',
    'categoria' => 'Empresas',
    'catcolor'  => 'badge--blue',
    'fecha'     => '2024-10-28',
    'lectura'   => '6 min',
    'destacado' => false,
  ],
];

/* Separar destacados del resto */
$destacados = array_filter($articulos, fn($a) => $a['destacado']);
$resto      = array_filter($articulos, fn($a) => !$a['destacado']);

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
        <a href="../index.php">Inicio</a>
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
            $grads = ['Consultoría'=>'var(--gradient-orange)','Emprendimiento'=>'var(--gradient-card)','Medioambiente'=>'var(--gradient-green)','Networking'=>'linear-gradient(135deg,#1E293B,#334155)','Social'=>'var(--gradient-green)','Empresas'=>'var(--gradient-card)'];
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
              <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>.php"
                 style="color:inherit;text-decoration:none;">
                <?= htmlspecialchars($art['titulo'], ENT_QUOTES, 'UTF-8') ?>
              </a>
            </h3>
            <p class="blog-card__excerpt">
              <?= htmlspecialchars($art['extracto'], ENT_QUOTES, 'UTF-8') ?>
            </p>
            <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>.php"
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
            <?= count($articulos) ?> artículos publicados
          </h2>
        </div>
        <!-- Filtro de categorías (decorativo — para funcionalidad completa
             se necesitaría JS o una nueva página por categoría) -->
        <div style="display:flex;flex-wrap:wrap;gap:var(--space-2);">
          <?php
          $categorias = array_unique(array_column($articulos, 'categoria'));
          foreach ($categorias as $cat): ?>
          <span class="badge badge--navy" style="cursor:default;"><?= $cat ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="grid grid-3 gap-6">
        <?php foreach ($articulos as $i => $art): ?>
        <article class="blog-card reveal <?= $i>0?'reveal--delay-'.min($i%3,3):'' ?>"
                 aria-labelledby="blog-art-<?= $i ?>">
          <div class="blog-card__image" style="<?php
            $grads = ['Consultoría'=>'var(--gradient-orange)','Emprendimiento'=>'var(--gradient-card)','Medioambiente'=>'var(--gradient-green)','Networking'=>'linear-gradient(135deg,#1E293B,#334155)','Social'=>'var(--gradient-green)','Empresas'=>'var(--gradient-card)'];
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
              <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>.php"
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
              <a href="<?= htmlspecialchars($art['slug'], ENT_QUOTES, 'UTF-8') ?>.php"
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
          <a href="../contacto.php" class="btn btn--primary btn--lg">
            Contactar para suscribirse
          </a>
          <p style="
            font-size:var(--text-xs);color:rgba(255,255,255,.4);
            margin-top:var(--space-4);max-width:none;
          ">
            Puedes darte de baja en cualquier momento.
            Consulta nuestra <a href="../privacidad.php" style="color:rgba(255,255,255,.5);">política de privacidad</a>.
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
