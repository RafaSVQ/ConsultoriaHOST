<?php
/**
 * CONSULTORÍA HOST — Departamento (O) Organizacional / Empresarial
 * Archivo: servicios/organizacional.php
 *
 * Servicios para empresas y organizaciones: optimización,
 * outplacement, interim management, atención al cliente,
 * grandes soluciones y consultoría empresarial integral.
 */

$depth            = 1;
$nav_active       = 'servicios';
$page_title       = 'Departamento (O) Organizacional — Consultoría empresarial HOST';
$page_description = 'Consultoría organizacional HOST para empresas: optimización de procesos, outplacement, interim management, atención al cliente y grandes soluciones. Sevilla, España.';
$page_keywords    = 'consultoría empresarial, outplacement, interim manager, optimización empresa, microempresa, pyme, Sevilla';
$page_canonical   = 'https://consultoriahost.es/servicios/organizacional';

require_once dirname(__DIR__) . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">

  <!-- CABECERA -->
  <div class="page-header">
    <div class="container page-header__inner">
      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="../index.php">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <a href="../index.php#servicios">Servicios</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Departamento (O) Organizacional</span>
      </nav>
      <div style="display:flex;align-items:center;gap:var(--space-4);margin-bottom:var(--space-4);">
        <div style="
          width:64px;height:64px;border-radius:var(--radius-xl);
          background:var(--gradient-card);
          display:flex;align-items:center;justify-content:center;
          font-family:var(--font-display);font-weight:800;font-size:2rem;color:white;
        " aria-hidden="true">O</div>
        <span class="badge badge--blue" style="font-size:var(--text-sm);">Departamento Organizacional</span>
      </div>
      <h1 class="page-header__title">Organización que genera resultados.</h1>
      <p class="page-header__subtitle">
        Un desarrollo organizado garantiza más éxito.
        Procesos efectivos, recursos optimizados y resultados reales,
        <strong style="color:var(--color-amber);">incluso con pocos medios</strong>.
      </p>
    </div>
  </div>


  <!-- INTRO -->
  <section class="section section--white" aria-labelledby="o-intro-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">El pilar O de HOST</span>
          <h2 id="o-intro-title">
            Para empresas que quieren<br>
            <span class="text-blue">funcionar mejor</span>
          </h2>
          <p style="margin-top:var(--space-4);">
            El Departamento Organizacional de HOST trabaja con empresas de todos los tamaños,
            pero especialmente con <strong>microempresas, autónomos y pymes</strong>:
            ese 95% del tejido empresarial español que tiene menos de 10 personas
            y que rara vez ha contado con asesoramiento profesional de verdad.
          </p>
          <p>
            No somos una consultoría que llega, genera un informe de 200 páginas
            y desaparece. <strong>Nos implicamos</strong>, identificamos los puntos
            de mejora, diseñamos el plan y lo ejecutamos codo con codo.
            Y si la situación lo requiere, nos integramos en la empresa de forma
            temporal (Interim Management) para resolver desde dentro.
          </p>
          <p>
            El objetivo siempre es el mismo: que la empresa funcione mejor,
            con menos esfuerzo, en menos tiempo y de forma sostenible.
          </p>
        </div>

        <!-- Stats empresa -->
        <div class="reveal reveal--delay-1">
          <div style="
            background: var(--gradient-card);
            border-radius: var(--radius-2xl);
            padding: var(--space-10);
            position: relative;
            overflow: hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 80% 20%, rgba(255,255,255,.08) 0%, transparent 50%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <h3 style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-2xl);color:white;
                margin-bottom:var(--space-8);
              ">El tejido empresarial español en datos</h3>
              <?php
              $datos = [
                ['95%','de las empresas tienen menos de 10 personas'],
                ['+40','años de experiencia acumulada del equipo HOST'],
                ['3','pasos del Método HOST para evaluar viabilidad'],
                ['0','proyectos HOST abandonados sin solución'],
              ];
              foreach ($datos as $d): ?>
              <div style="
                display:flex;align-items:baseline;gap:var(--space-3);
                margin-bottom:var(--space-5);
                padding-bottom:var(--space-5);
                border-bottom:1px solid rgba(255,255,255,.1);
              ">
                <span style="
                  font-family:var(--font-display);font-weight:800;
                  font-size:var(--text-4xl);color:var(--color-amber);
                  line-height:1;flex-shrink:0;
                "><?= $d[0] ?></span>
                <span style="
                  font-size:var(--text-sm);color:rgba(255,255,255,.7);
                  line-height:1.4;
                "><?= $d[1] ?></span>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- SERVICIOS ORGANIZACIONALES -->
  <section class="section section--alt" aria-labelledby="o-servicios-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Nuestros servicios</span>
        <h2 id="o-servicios-title">Servicios del Departamento Organizacional</h2>
        <p>Desde la optimización de procesos hasta la dirección temporal integrada.
        Soluciones concretas para cada tipo de situación empresarial.</p>
      </div>

      <!-- Interim Management — destacado -->
      <article class="reveal" style="
        background: white;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        margin-bottom: var(--space-8);
        box-shadow: var(--shadow-lg);
        border: 2px solid var(--color-blue);
      " aria-labelledby="interim-o-title">
        <div style="
          background: var(--color-blue);
          padding: var(--space-3) var(--space-6);
          display: flex;
          align-items: center;
          gap: var(--space-3);
        ">
          <span style="
            font-size:.7rem;font-weight:800;
            letter-spacing:.1em;text-transform:uppercase;
            color:white;
          ">⭐ Servicio estrella del Departamento O</span>
        </div>
        <div style="padding:var(--space-8);display:grid;grid-template-columns:1fr 1fr;gap:var(--space-8);">
          <div>
            <h3 id="interim-o-title" style="font-size:var(--text-3xl);margin-bottom:var(--space-4);color:var(--color-navy);">
              Interim Management
            </h3>
            <p style="margin-bottom:var(--space-4);">
              La consultoría HOST <strong>"a domicilio"</strong>. Nos integramos en tu empresa
              de forma temporal ocupando el puesto de dirección, gestión o cualquier otro
              que sea necesario para resolver la situación desde dentro.
            </p>
            <p style="margin-bottom:var(--space-5);">
              Un servicio muy habitual en otros países y aún poco conocido en España.
              Ideal cuando la situación requiere <strong>acción inmediata desde dentro</strong>,
              sin el coste de una contratación indefinida y con la flexibilidad de
              definir exactamente el alcance y la duración.
            </p>
            <a href="../contacto.php" class="btn btn--secondary">
              Solicitar información sobre Interim Management
            </a>
          </div>
          <div>
            <h4 style="font-size:var(--text-base);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-4);">
              ¿Cuándo se usa el Interim Management?
            </h4>
            <?php
            $cuando = [
              '<span style="color:var(--color-orange);"><?= icon('chart-bar', size: 16) ?></span> Empresa en situación de crisis o declive',
              '<span style="color:var(--color-orange);"><?= icon('refresh', size: 16) ?></span> Cambio de dirección o reestructuración',
              '<span style="color:var(--color-orange);"><?= icon('chart-bar', size: 16) ?></span> Crecimiento rápido que supera la capacidad de gestión',
              '<span style="color:var(--color-orange);"><?= icon('users', size: 16) ?></span> Ausencia temporal del director o gerente',
              '<span style="color:var(--color-orange);"><?= icon('rocket', size: 16) ?></span> Lanzamiento de un nuevo producto o mercado',
              '<span style="color:var(--color-orange);"><?= icon('target', size: 16) ?></span> Problemas operativos que no se resuelven internamente',
            ];
            foreach ($cuando as $c): ?>
            <div style="
              display:flex;align-items:flex-start;gap:var(--space-3);
              padding:var(--space-3);
              border-radius:var(--radius-md);
              margin-bottom:var(--space-2);
              background:var(--color-off-white);
              font-size:var(--text-sm);
              color:var(--color-text-secondary);
            "><?= htmlspecialchars($c, ENT_QUOTES, 'UTF-8') ?></div>
            <?php endforeach; ?>
          </div>
        </div>
      </article>

      <!-- Resto de servicios -->
      <div class="grid grid-2 gap-6">

        <?php
        $servicios_o = [
          [
            'icono'  => 'refresh',
            'titulo' => 'Recolocación — Outplacement',
            'badge'  => 'Para empresas con ERE',
            'color'  => 'badge--blue',
            'desc'   => 'Cuando una empresa necesita prescindir de personas, hacerlo bien marca la diferencia. HOST gestiona el proceso de outplacement con profesionalidad y respeto: acompañamos a los trabajadores en su transición hacia nuevas oportunidades, protegiendo la imagen de la empresa y el bienestar de las personas.',
            'lista'  => ['Gestión del proceso de desvinculación','Orientación profesional individualizada','Actualización de perfil y búsqueda de empleo','Apoyo psicológico durante la transición'],
          ],
          [
            'icono'  => 'building',
            'titulo' => 'Servicios Empresariales Integrales',
            'badge'  => 'Para microempresas y pymes',
            'color'  => 'badge--blue',
            'desc'   => 'Un paquete completo de servicios de consultoría empresarial adaptado a las necesidades y posibilidades de la microempresa española: diagnóstico, planificación estratégica, optimización de procesos, gestión de equipos, digitalización y mucho más.',
            'lista'  => ['Diagnóstico empresarial 360°','Plan estratégico realista y ejecutable','Optimización de procesos clave','Acompañamiento en la implementación'],
          ],
          [
            'icono'  => 'users',
            'titulo' => 'Atención a TU cliente',
            'badge'  => 'Fidelización y captación',
            'color'  => 'badge--blue',
            'desc'   => 'El cliente es el activo más valioso de cualquier negocio. HOST analiza cómo estás atendiendo a tus clientes, identifica los puntos de mejora y diseña un sistema de atención que fidelice a los que tienes y atraiga a los que necesitas.',
            'lista'  => ['Auditoría de la experiencia del cliente','Diseño del proceso de atención ideal','Formación del equipo de contacto','Sistemas de seguimiento y fidelización'],
          ],
          [
            'icono'  => 'lightbulb',
            'titulo' => 'Grandes Soluciones HOST',
            'badge'  => 'Proyectos de alto impacto',
            'color'  => 'badge--blue',
            'desc'   => 'Para situaciones que requieren soluciones de gran alcance: reestructuraciones completas, cambios de modelo de negocio, expansiones, fusiones, internacionalización o cualquier proyecto que suponga un antes y un después para la organización.',
            'lista'  => ['Análisis de viabilidad del proyecto','Diseño de la solución integral','Coordinación de todos los recursos necesarios','Ejecución con seguimiento continuo'],
          ],
        ];
        foreach ($servicios_o as $i => $s): ?>

        <article class="card reveal <?= $i>0?'reveal--delay-'.min($i,3):'' ?>"
                 style="box-shadow:var(--shadow-card);"
                 aria-labelledby="o-servicio-<?= $i ?>">
          <div class="card__body">
            <div style="
              display:flex;align-items:flex-start;
              justify-content:space-between;gap:var(--space-4);
              margin-bottom:var(--space-4);
            ">
              <div style="color:var(--color-blue);"><?= icon($s['icono'], size: 32) ?></div>
              <span class="badge <?= $s['color'] ?>"><?= $s['badge'] ?></span>
            </div>
            <h3 id="o-servicio-<?= $i ?>" style="
              font-size:var(--text-xl);margin-bottom:var(--space-3);color:var(--color-navy);
            "><?= $s['titulo'] ?></h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);"><?= $s['desc'] ?></p>
            <ul style="display:flex;flex-direction:column;gap:var(--space-2);margin-bottom:var(--space-5);">
              <?php foreach ($s['lista'] as $item): ?>
              <li style="
                display:flex;align-items:flex-start;gap:var(--space-2);
                font-size:var(--text-sm);color:var(--color-text-secondary);
              ">
                <span style="
                  display:block;width:6px;height:6px;border-radius:50%;
                  background:var(--color-blue);flex-shrink:0;margin-top:6px;
                " aria-hidden="true"></span>
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <a href="../contacto.php" class="btn btn--ghost btn--sm" style="color:var(--color-blue);border:1px solid var(--color-blue);">
              Solicitar información
            </a>
          </div>
        </article>

        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- CTA -->
  <section class="section section--white">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">¿Tu empresa necesita un giro?</h2>
          <p class="cta-banner__subtitle">
            Cuéntanos la situación. La primera consulta es gratuita y sin compromiso.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto.php" class="btn btn--primary btn--xl">Hablar con HOST</a>
            <a href="tel:<?= SITE_PHONE_E164 ?>" class="btn btn--outline-white btn--xl">📞 <?= SITE_PHONE ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
