<?php
/**
 * CONSULTORÍA HOST — Política de Cookies
 * Archivo: cookies.php
 *
 * Conforme al RGPD y la LSSI-CE.
 * Incluye también el fragmento JS del banner de cookies
 * que se cargará en todas las páginas vía footer.php.
 */

$depth            = 0;
$nav_active       = '';
$page_robots      = 'noindex, follow';
$page_title       = 'Política de Cookies';
$page_description = 'Política de cookies de Consultoría HOST. Información sobre las cookies utilizadas en el sitio web.';
$page_canonical   = 'https://consultoriahost.es/cookies';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Política de cookies', null],
];

require_once __DIR__ . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">

  <div class="page-header">
    <div class="container page-header__inner">
      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Política de cookies</span>
      </nav>
      <h1 class="page-header__title">Política de Cookies</h1>
      <p class="page-header__subtitle">Última actualización: junio de 2026</p>
    </div>
  </div>

  <section class="section section--white">
    <div class="container container--narrow">
      <div class="reveal" style="
        background:white;border:1px solid var(--color-border);
        border-radius:var(--radius-2xl);padding:var(--space-12);
        box-shadow:var(--shadow-card);
      ">

        <?php
        $h2 = 'font-size:var(--text-2xl);color:var(--color-navy);margin-top:var(--space-10);margin-bottom:var(--space-4);padding-top:var(--space-6);border-top:1px solid var(--color-border);';
        $p  = 'font-size:var(--text-base);color:var(--color-text-secondary);line-height:var(--line-height-loose);margin-bottom:var(--space-4);max-width:none;';
        ?>

        <h2 style="<?= $h2 ?> border-top:none;margin-top:0;padding-top:0;">¿Qué son las cookies?</h2>
        <p style="<?= $p ?>">
          Las cookies son pequeños archivos de texto que los sitios web guardan en tu
          navegador cuando los visitas. Sirven para que el sitio funcione correctamente,
          para recordar tus preferencias y, en algunos casos, para recopilar información
          estadística sobre el uso del sitio.
        </p>

        <h2 style="<?= $h2 ?>">Cookies que usamos</h2>
        <p style="<?= $p ?>">Esta web utiliza las siguientes cookies:</p>

        <div style="overflow-x:auto;margin-bottom:var(--space-6);">
          <table style="
            width:100%;border-collapse:collapse;
            font-size:var(--text-sm);
          ">
            <thead>
              <tr style="background:var(--color-navy);color:white;">
                <th style="padding:var(--space-3) var(--space-4);text-align:left;border-radius:var(--radius-md) 0 0 0;">Nombre</th>
                <th style="padding:var(--space-3) var(--space-4);text-align:left;">Tipo</th>
                <th style="padding:var(--space-3) var(--space-4);text-align:left;">Duración</th>
                <th style="padding:var(--space-3) var(--space-4);text-align:left;border-radius:0 var(--radius-md) 0 0;">Finalidad</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $cookies = [
                ['host_cookie_consent','Propia / Funcional','1 año','Guarda tu decisión sobre las cookies para no volverte a preguntar.'],
                ['PHPSESSID','Propia / Técnica','Sesión','Cookie técnica de PHP necesaria para el funcionamiento del sitio.'],
                ['_ga','Tercero / Analítica (opcional)','2 años','Google Analytics 4 — distingue usuarios únicos. Solo se instala si aceptas cookies analíticas.'],
                ['_ga_*','Tercero / Analítica (opcional)','2 años','Google Analytics 4 — mantiene el estado de la sesión. Solo se instala si aceptas cookies analíticas.'],
              ];
              foreach ($cookies as $i => $c): ?>
              <tr style="background:<?= $i % 2 === 0 ? 'var(--color-off-white)' : 'white' ?>;">
                <td style="padding:var(--space-3) var(--space-4);font-weight:600;color:var(--color-navy);"><?= $c[0] ?></td>
                <td style="padding:var(--space-3) var(--space-4);color:var(--color-text-secondary);"><?= $c[1] ?></td>
                <td style="padding:var(--space-3) var(--space-4);color:var(--color-text-secondary);"><?= $c[2] ?></td>
                <td style="padding:var(--space-3) var(--space-4);color:var(--color-text-secondary);"><?= $c[3] ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div style="
          background:var(--color-green-light);border:1px solid var(--color-green);
          border-radius:var(--radius-lg);padding:var(--space-5);margin-bottom:var(--space-6);
        ">
          <p style="<?= $p ?> margin:0;color:var(--color-green);font-weight:600;">
            ✅ Esta web <strong>no usa</strong> cookies de publicidad. Solo utilizamos
            Google Analytics 4 con fines estadísticos, y únicamente si das tu consentimiento
            explícito pulsando "Aceptar" en el aviso de cookies — nunca antes. Puedes rechazarlo
            o retirarlo en cualquier momento desde esta página.
          </p>
        </div>

        <h2 style="<?= $h2 ?>">Google Analytics 4</h2>
        <p style="<?= $p ?>">
          Si aceptas las cookies analíticas, usamos Google Analytics 4 (Google Ireland Limited)
          para conocer de forma agregada y anónima cómo se usa el sitio: páginas visitadas,
          tiempo de permanencia y origen del tráfico. Google Analytics 4 no recopila ni
          almacena la dirección IP completa de los usuarios.
          Google puede transferir estos datos a servidores en Estados Unidos bajo las
          cláusulas contractuales tipo de la UE. Más información en la
          <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">
            política de privacidad de Google
          </a>.
        </p>

        <h2 style="<?= $h2 ?>">Cómo gestionar las cookies</h2>
        <p style="<?= $p ?>">
          Puedes gestionar o eliminar las cookies desde la configuración de tu navegador:
        </p>
        <ul style="margin-bottom:var(--space-6);">
          <?php
          $navegadores = [
            ['Chrome','https://support.google.com/chrome/answer/95647'],
            ['Firefox','https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies'],
            ['Safari','https://support.apple.com/es-es/guide/safari/sfri11471/mac'],
            ['Edge','https://support.microsoft.com/es-es/windows/eliminar-y-administrar-cookies'],
          ];
          foreach ($navegadores as $nav): ?>
          <li style="
            font-size:var(--text-sm);color:var(--color-text-secondary);
            margin-bottom:var(--space-2);padding-left:var(--space-4);
          ">
            <a href="<?= $nav[1] ?>" target="_blank" rel="noopener noreferrer"
               style="color:var(--color-blue);">
              Configurar cookies en <?= $nav[0] ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>

        <h2 style="<?= $h2 ?>">Cambiar tu preferencia de cookies</h2>
        <p style="<?= $p ?>">
          Puedes cambiar tu preferencia de cookies en cualquier momento pulsando el botón
          de abajo. Se recargará la página y aparecerá de nuevo el aviso de cookies.
        </p>
        <button
          onclick="localStorage.removeItem('host_cookie_consent');location.reload();"
          class="btn btn--outline"
        >
          Restablecer preferencias de cookies
        </button>

        <div style="
          margin-top:var(--space-10);padding-top:var(--space-6);
          border-top:1px solid var(--color-border);text-align:center;
        ">
          <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;">
            <a href="privacidad" style="color:var(--color-orange);">Política de privacidad</a> ·
            <a href="aviso-legal" style="color:var(--color-orange);">Aviso legal</a>
          </p>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
