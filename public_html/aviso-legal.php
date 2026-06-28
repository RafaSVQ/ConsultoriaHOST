<?php
/**
 * CONSULTORÍA HOST — Aviso Legal
 * Archivo: aviso-legal.php
 *
 * Conforme a la Ley 34/2002 (LSSI-CE) española.
 */

$depth            = 0;
$nav_active       = '';
$page_robots      = 'noindex, follow';
$page_title       = 'Aviso Legal';
$page_description = 'Aviso legal de Consultoría HOST. Información legal conforme a la LSSI-CE.';
$page_canonical   = 'https://consultoriahost.es/aviso-legal';

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
        <span class="page-header__breadcrumb-current">Aviso legal</span>
      </nav>
      <h1 class="page-header__title">Aviso Legal</h1>
      <p class="page-header__subtitle">
        Información legal conforme a la Ley 34/2002 de Servicios de la Sociedad de la Información.
      </p>
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

        <h2 style="<?= $h2 ?> border-top:none;margin-top:0;padding-top:0;">1. Identificación del titular</h2>
        <p style="<?= $p ?>">
          En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios
          de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), se informa:
        </p>
        <div style="background:var(--color-off-white);border-radius:var(--radius-lg);padding:var(--space-6);margin-bottom:var(--space-6);">
          <?php
          $datos = [
            'Denominación social' => SITE_LEGAL_NAME,
            'Nombre comercial'    => SITE_NAME,
            'NIF / CIF'           => SITE_CIF,
            'Domicilio'           => SITE_LOCATION,
            'Teléfono'            => SITE_PHONE_INTL,
            'Email'               => SITE_EMAIL,
            'Web'                 => SITE_URL,
          ];
          foreach ($datos as $k => $v): ?>
          <div style="
            display:grid;grid-template-columns:180px 1fr;gap:var(--space-3);
            padding:var(--space-2) 0;border-bottom:1px solid var(--color-border);
            font-size:var(--text-sm);
          ">
            <span style="font-weight:600;color:var(--color-text-primary);"><?= $k ?></span>
            <span style="color:var(--color-text-secondary);"><?= $v ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <h2 style="<?= $h2 ?>">2. Objeto y ámbito de aplicación</h2>
        <p style="<?= $p ?>">
          El presente aviso legal regula el acceso y uso del sitio web
          <strong><?= SITE_DOMAIN ?></strong> (en adelante, "el sitio web"), del que es
          titular Consultoría HOST. El acceso al sitio web implica la aceptación plena
          de las condiciones establecidas en este aviso legal.
        </p>

        <h2 style="<?= $h2 ?>">3. Propiedad intelectual e industrial</h2>
        <p style="<?= $p ?>">
          Todos los contenidos del sitio web (textos, imágenes, gráficos, logotipos,
          iconos, diseño gráfico, código fuente y demás elementos) son propiedad de
          Consultoría HOST o de terceros que han autorizado su uso, y están protegidos
          por la legislación española e internacional sobre propiedad intelectual e industrial.
        </p>
        <p style="<?= $p ?>">
          Queda expresamente prohibida la reproducción, distribución, comunicación pública
          o transformación de cualquier elemento del sitio web sin autorización expresa
          y por escrito del titular.
        </p>

        <h2 style="<?= $h2 ?>">4. Exclusión de responsabilidad</h2>
        <p style="<?= $p ?>">
          Consultoría HOST no se responsabiliza de los daños o perjuicios derivados del
          uso del sitio web, incluyendo errores u omisiones en los contenidos, falta
          de disponibilidad del sitio o la transmisión de virus o programas maliciosos.
        </p>
        <p style="<?= $p ?>">
          Los contenidos del sitio web tienen carácter informativo general. Para cualquier
          consulta profesional específica, te recomendamos contactar directamente con
          Consultoría HOST.
        </p>

        <h2 style="<?= $h2 ?>">5. Política de enlaces</h2>
        <p style="<?= $p ?>">
          El sitio web puede contener enlaces a sitios de terceros. Consultoría HOST
          no controla ni es responsable del contenido, políticas de privacidad
          ni prácticas de dichos sitios externos.
        </p>

        <h2 style="<?= $h2 ?>">6. Legislación aplicable y jurisdicción</h2>
        <p style="<?= $p ?>">
          Las presentes condiciones se rigen por la legislación española.
          Para la resolución de cualquier controversia relacionada con el sitio web,
          las partes se someten a los juzgados y tribunales de Sevilla,
          renunciando expresamente a cualquier otro fuero que pudiera corresponderles.
        </p>

        <div style="
          margin-top:var(--space-10);padding-top:var(--space-6);
          border-top:1px solid var(--color-border);text-align:center;
        ">
          <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;">
            Última actualización: junio de 2026 ·
            <a href="privacidad" style="color:var(--color-orange);">Política de privacidad</a> ·
            <a href="cookies" style="color:var(--color-orange);">Cookies</a>
          </p>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
