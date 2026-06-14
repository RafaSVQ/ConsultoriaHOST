<?php
/**
 * CONSULTORÍA HOST — Página de error 404
 * Archivo: 404.php
 */

$depth            = 0;
$nav_active       = '';
$page_title       = 'Página no encontrada (404)';
$page_description = 'La página que buscas no existe. Consultoría HOST.';
$page_canonical   = 'https://consultoriahost.es/404';

require_once __DIR__ . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">
  <section class="section" style="min-height:70vh;display:flex;align-items:center;">
    <div class="container" style="text-align:center;">

      <div class="reveal">
        <div style="
          font-family:var(--font-display);
          font-weight:800;
          font-size:clamp(6rem,15vw,12rem);
          color:var(--color-gray-100);
          line-height:1;
          margin-bottom:var(--space-4);
          user-select:none;
        " aria-hidden="true">404</div>

        <h1 style="font-size:var(--text-4xl);margin-bottom:var(--space-4);">
          Esta página no existe
        </h1>
        <p style="
          font-size:var(--text-lg);
          color:var(--color-text-secondary);
          margin-inline:auto;
          margin-bottom:var(--space-10);
          max-width:480px;
        ">
          Puede que la URL esté mal escrita o que la página
          haya sido movida. Te llevamos a donde necesitas.
        </p>

        <div style="
          display:flex;flex-wrap:wrap;gap:var(--space-4);
          justify-content:center;margin-bottom:var(--space-12);
        ">
          <a href="index.php"       class="btn btn--primary btn--lg">Ir al inicio</a>
          <a href="contacto.php"    class="btn btn--outline btn--lg">Contactar</a>
          <a href="javascript:history.back()" class="btn btn--ghost btn--lg">← Volver atrás</a>
        </div>

        <!-- Accesos directos rápidos -->
        <div style="
          display:grid;
          grid-template-columns:repeat(auto-fit,minmax(160px,1fr));
          gap:var(--space-4);
          max-width:700px;
          margin-inline:auto;
        ">
          <?php
          $quick_links = [
            ['que-es-host.php','¿Qué es HOST?','🔤'],
            ['consultoria.php','Consultoría 3.0','lightbulb'],
            ['metodo-host.php','Método HOST','target'],
            ['empleo.php','Empleo 3.0','rocket'],
          ];
          foreach ($quick_links as $l): ?>
          <a href="<?= $l[0] ?>" class="hover-card-raise" style="
            display:flex;flex-direction:column;align-items:center;gap:var(--space-2);
            padding:var(--space-4);
            background:var(--color-off-white);
            border:1px solid var(--color-border);
            border-radius:var(--radius-xl);
            text-decoration:none;
            color:var(--color-text-secondary);
            font-size:var(--text-sm);font-weight:500;
          "
          >
            <span style="color:var(--color-orange);"><?= icon($l[2], size: 24) ?></span>
            <?= $l[1] ?>
          </a>
          <?php endforeach; ?>
        </div>

      </div>

    </div>
  </section>
</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
