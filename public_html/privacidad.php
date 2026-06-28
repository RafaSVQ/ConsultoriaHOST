<?php
/**
 * CONSULTORÍA HOST — Política de Privacidad
 * Archivo: privacidad.php
 *
 * Conforme al RGPD (UE) 2016/679 y la LOPDGDD española.
 * IMPORTANTE: revisar y completar los datos del responsable
 * antes de publicar en producción.
 */

$depth            = 0;
$nav_active       = '';
$page_robots      = 'noindex, follow';
$page_title       = 'Política de Privacidad';
$page_description = 'Política de privacidad de Consultoría HOST. Información sobre el tratamiento de datos personales conforme al RGPD.';
$page_canonical   = 'https://consultoriahost.es/privacidad';

require_once __DIR__ . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';

$fecha_actualizacion = 'junio de 2026';
?>

<main id="main-content">

  <div class="page-header">
    <div class="container page-header__inner">
      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Política de privacidad</span>
      </nav>
      <h1 class="page-header__title">Política de Privacidad</h1>
      <p class="page-header__subtitle">
        Última actualización: <?= $fecha_actualizacion ?>
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
        /* Estilos inline reutilizables para los bloques de contenido legal */
        $h2_style = 'font-size:var(--text-2xl);color:var(--color-navy);margin-top:var(--space-10);margin-bottom:var(--space-4);padding-top:var(--space-6);border-top:1px solid var(--color-border);';
        $h3_style = 'font-size:var(--text-lg);color:var(--color-navy);margin-top:var(--space-6);margin-bottom:var(--space-3);';
        $p_style  = 'font-size:var(--text-base);color:var(--color-text-secondary);line-height:var(--line-height-loose);margin-bottom:var(--space-4);max-width:none;';
        $li_style = 'font-size:var(--text-base);color:var(--color-text-secondary);line-height:var(--line-height-loose);margin-bottom:var(--space-2);padding-left:var(--space-4);position:relative;';
        ?>

        <div style="
          background:rgba(232,98,26,.07);border:1px solid rgba(232,98,26,.2);
          border-radius:var(--radius-lg);padding:var(--space-5);
          margin-bottom:var(--space-8);
        ">
          <p style="<?= $p_style ?> margin:0;color:var(--color-orange);font-weight:600;">
            <span aria-hidden="true">📋</span> Esta política explica cómo tratamos tus datos personales cuando
            utilizas nuestra web o contactas con nosotros. Léela con tranquilidad;
            no usamos el lenguaje legal para esconder nada.
          </p>
        </div>


        <!-- 1. Responsable del tratamiento -->
        <h2 style="<?= $h2_style ?> border-top:none;margin-top:0;padding-top:0;">
          1. Responsable del tratamiento
        </h2>
        <p style="<?= $p_style ?>">
          En cumplimiento del Reglamento (UE) 2016/679 (RGPD) y la Ley Orgánica 3/2018
          de Protección de Datos Personales (LOPDGDD), te informamos de que el responsable
          del tratamiento de tus datos personales es:
        </p>
        <div style="
          background:var(--color-off-white);border-radius:var(--radius-lg);
          padding:var(--space-6);margin-bottom:var(--space-4);
        ">
          <?php
          $responsable = [
            'Denominación social' => SITE_LEGAL_NAME,
            'Nombre comercial'    => SITE_NAME,
            'Dirección'           => SITE_LOCATION,
            'Teléfono'         => SITE_PHONE_INTL,
            'Email de contacto'=> SITE_EMAIL,
            'Web'              => SITE_URL,
          ];
          foreach ($responsable as $clave => $valor): ?>
          <div style="
            display:grid;grid-template-columns:180px 1fr;gap:var(--space-3);
            padding:var(--space-2) 0;
            border-bottom:1px solid var(--color-border);
            font-size:var(--text-sm);
          ">
            <span style="font-weight:600;color:var(--color-text-primary);"><?= $clave ?></span>
            <span style="color:var(--color-text-secondary);"><?= $valor ?></span>
          </div>
          <?php endforeach; ?>
        </div>


        <!-- 2. Datos que recogemos -->
        <h2 style="<?= $h2_style ?>">2. Datos personales que recogemos</h2>
        <p style="<?= $p_style ?>">
          Recogemos únicamente los datos necesarios para cada finalidad concreta:
        </p>

        <h3 style="<?= $h3_style ?>">Formulario de contacto</h3>
        <p style="<?= $p_style ?>">
          Cuando rellenas el formulario de contacto recogemos: nombre, apellidos (opcionales),
          email, teléfono (opcional) y el contenido de tu mensaje. Estos datos son necesarios
          para responderte.
        </p>

        <h3 style="<?= $h3_style ?>">Datos de navegación</h3>
        <p style="<?= $p_style ?>">
          Como cualquier web, nuestro servidor registra automáticamente datos técnicos de
          navegación (dirección IP, tipo de navegador, páginas visitadas, hora de acceso).
          Estos datos no se vinculan a tu identidad y se usan únicamente para mantener
          la seguridad y el funcionamiento de la web.
        </p>


        <!-- 3. Finalidades -->
        <h2 style="<?= $h2_style ?>">3. Para qué usamos tus datos (finalidades)</h2>
        <?php
        $finalidades = [
          ['Atender tu consulta','Responder a los mensajes que nos envíes a través del formulario de contacto o por teléfono.','Ejecución de una relación precontractual (art. 6.1.b RGPD)'],
          ['Enviarte información','Si nos lo solicitas, enviarte información sobre nuestros servicios, actividades o publicaciones.','Consentimiento (art. 6.1.a RGPD)'],
          ['Cumplimiento legal','Cumplir con nuestras obligaciones legales en materia fiscal, contable y de protección de datos.','Obligación legal (art. 6.1.c RGPD)'],
        ];
        foreach ($finalidades as $f): ?>
        <div style="
          display:grid;grid-template-columns:180px 1fr;gap:var(--space-4);
          padding:var(--space-4);background:var(--color-off-white);
          border-radius:var(--radius-lg);margin-bottom:var(--space-3);
          border:1px solid var(--color-border);
        ">
          <div>
            <div style="font-weight:700;font-size:var(--text-sm);color:var(--color-navy);margin-bottom:4px;"><?= $f[0] ?></div>
            <span class="badge badge--orange" style="font-size:.6rem;"><?= $f[2] ?></span>
          </div>
          <p style="<?= $p_style ?> margin:0;font-size:var(--text-sm);"><?= $f[1] ?></p>
        </div>
        <?php endforeach; ?>


        <!-- 4. Conservación -->
        <h2 style="<?= $h2_style ?>">4. Cuánto tiempo conservamos tus datos</h2>
        <p style="<?= $p_style ?>">
          Conservamos tus datos durante el tiempo necesario para la finalidad para la que
          fueron recogidos:
        </p>
        <ul style="margin-bottom:var(--space-6);">
          <li style="<?= $li_style ?>">
            <strong>Consultas y contactos:</strong> hasta que nos indiques que no deseas
            recibir más comunicaciones nuestra, o transcurridos 2 años desde el último
            contacto sin que se haya establecido relación profesional.
          </li>
          <li style="<?= $li_style ?>">
            <strong>Datos de clientes:</strong> durante la vigencia de la relación
            profesional y, posteriormente, durante los plazos legalmente exigidos
            (generalmente 5-6 años para obligaciones fiscales y mercantiles).
          </li>
        </ul>


        <!-- 5. Tus derechos -->
        <h2 style="<?= $h2_style ?>">5. Tus derechos</h2>
        <p style="<?= $p_style ?>">
          El RGPD te reconoce los siguientes derechos sobre tus datos personales,
          que puedes ejercer escribiéndonos a <strong><?= SITE_EMAIL ?></strong>:
        </p>
        <?php
        $derechos = [
          ['Acceso','Saber qué datos tenemos sobre ti.'],
          ['Rectificación','Corregir datos inexactos o incompletos.'],
          ['Supresión','Solicitar que eliminemos tus datos ("derecho al olvido").'],
          ['Oposición','Oponerte a que tratemos tus datos para determinadas finalidades.'],
          ['Limitación','Solicitar que suspendamos el tratamiento en determinadas circunstancias.'],
          ['Portabilidad','Recibir tus datos en un formato estructurado y legible por máquina.'],
        ];
        ?>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-3);margin-bottom:var(--space-6);">
          <?php foreach ($derechos as $d): ?>
          <div style="
            background:var(--color-off-white);border:1px solid var(--color-border);
            border-radius:var(--radius-lg);padding:var(--space-4);
          ">
            <div style="font-weight:700;font-size:var(--text-sm);color:var(--color-navy);margin-bottom:4px;">
              ⚖️ <?= $d[0] ?>
            </div>
            <div style="font-size:var(--text-xs);color:var(--color-text-secondary);"><?= $d[1] ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <p style="<?= $p_style ?>">
          También tienes derecho a presentar una reclamación ante la
          <a href="https://www.aepd.es" target="_blank" rel="noopener noreferrer">
            Agencia Española de Protección de Datos (AEPD)
          </a>
          si consideras que el tratamiento de tus datos no es conforme a la normativa.
        </p>


        <!-- 6. Cookies -->
        <h2 style="<?= $h2_style ?>">6. Cookies</h2>
        <p style="<?= $p_style ?>">
          Esta web utiliza cookies técnicas estrictamente necesarias para su funcionamiento.
          Solo si das tu consentimiento explícito activamos también Google Analytics 4
          (Google Ireland Limited) con fines estadísticos. Puedes aceptar, rechazar o
          retirar tu consentimiento en cualquier momento.
          Consulta nuestra <a href="cookies">política de cookies</a> para más información.
        </p>


        <!-- 7. Seguridad -->
        <h2 style="<?= $h2_style ?>">7. Medidas de seguridad</h2>
        <p style="<?= $p_style ?>">
          Aplicamos medidas técnicas y organizativas apropiadas para proteger tus datos
          personales contra el acceso no autorizado, la pérdida accidental o la destrucción,
          en cumplimiento del artículo 32 del RGPD.
        </p>


        <!-- 8. Cambios -->
        <h2 style="<?= $h2_style ?>">8. Cambios en esta política</h2>
        <p style="<?= $p_style ?>">
          Podemos actualizar esta política de privacidad cuando sea necesario.
          La fecha de la última actualización aparece al inicio del documento.
          Te recomendamos revisarla periódicamente.
        </p>

        <div style="
          margin-top:var(--space-10);padding-top:var(--space-6);
          border-top:1px solid var(--color-border);
          text-align:center;
        ">
          <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;">
            ¿Tienes dudas sobre esta política?
            <a href="contacto" style="color:var(--color-orange);font-weight:600;">
              Escríbenos
            </a>
            o llámanos al
            <a href="tel:<?= SITE_PHONE_E164 ?>" style="color:var(--color-orange);font-weight:600;">
              <?= SITE_PHONE ?>
            </a>.
          </p>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
