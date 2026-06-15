<?php
/**
 * CONSULTORÍA HOST — Índice de servicios
 * Archivo: servicios/index.php
 *
 * Página de aterrizaje de categoría para /servicios/.
 * Presenta los 4 departamentos HOST (H·O·S·T) como visión
 * de conjunto antes de que el usuario entre en cada uno.
 *
 * Valor SEO propio: posiciona /servicios/ para búsquedas
 * genéricas de consultoría sin competir con la home.
 */

$depth            = 1;
$nav_active       = 'servicios';
$page_title       = 'Qué hacemos — Los 4 departamentos HOST';
$page_description = 'Los servicios de Consultoría HOST: departamentos Humano, Organizacional, Social y Técnico. Cuatro perspectivas integradas para personas y empresas. Sevilla, España.';
$page_keywords    = 'servicios consultoría HOST, departamento humano, organizacional, social, técnico, consultoría empresarial Sevilla';
$page_canonical   = 'https://consultoriahost.es/servicios/';

require_once dirname(__DIR__) . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">

  <!-- =====================================================
       CABECERA
       ===================================================== -->
  <div class="page-header">
    <div class="container page-header__inner">

      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="../index.php">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Qué hacemos</span>
      </nav>

      <h1 class="page-header__title">Qué hacemos</h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        Cuatro departamentos. Cuatro perspectivas.
        Un único objetivo: que las cosas cambien de verdad
        para <strong style="color:var(--color-amber);">personas y empresas</strong>.
      </p>

    </div>
  </div>


  <!-- =====================================================
       INTRO — POR QUÉ 4 DEPARTAMENTOS
       ===================================================== -->
  <section class="section section--white" aria-labelledby="servicios-intro-title">
    <div class="container container--narrow">
      <div class="reveal" style="text-align:center;">
        <span class="eyebrow">La metodología HOST</span>
        <h2 id="servicios-intro-title">
          Cuatro perspectivas que trabajan juntas
        </h2>
        <p style="margin-top:var(--space-4);margin-inline:auto;">
          La mayoría de los problemas de personas y empresas no son
          solo humanos, o solo organizativos, o solo técnicos.
          Son las cuatro cosas a la vez, en proporciones distintas
          según cada caso.
        </p>
        <p style="margin-inline:auto;">
          Por eso HOST no actúa desde una sola perspectiva.
          Los cuatro departamentos comparten metodología, se coordinan
          entre sí y se aplican de forma integrada en cada proyecto.
          No son cuatro consultorías separadas — son cuatro ángulos
          del mismo foco.
        </p>
      </div>

      <!-- Pilares H·O·S·T compactos como navegación visual -->
      <div class="host-pillars reveal" style="margin-top:var(--space-10);">

        <a href="humano.php" class="host-pillar host-pillar--h"
           style="text-decoration:none;cursor:pointer;"
           aria-label="Ir al Departamento Humano">
          <span class="host-pillar__bg-letter" aria-hidden="true">H</span>
          <span class="host-pillar__letter" aria-hidden="true">H</span>
          <h2 class="host-pillar__title">Humana</h2>
          <p class="host-pillar__desc">
            Personas: desarrollo, bienestar y crecimiento
            profesional, personal y social.
          </p>
          <span style="
            display:inline-flex;align-items:center;gap:var(--space-1);
            font-size:var(--text-xs);font-weight:700;
            color:rgba(255,255,255,.7);margin-top:var(--space-4);
            letter-spacing:.05em;text-transform:uppercase;
          ">
            Ver servicios
            <svg width="12" height="12" viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </span>
        </a>

        <a href="organizacional.php" class="host-pillar host-pillar--o"
           style="text-decoration:none;cursor:pointer;"
           aria-label="Ir al Departamento Organizacional">
          <span class="host-pillar__bg-letter" aria-hidden="true">O</span>
          <span class="host-pillar__letter" aria-hidden="true">O</span>
          <h2 class="host-pillar__title">Organizacional</h2>
          <p class="host-pillar__desc">
            Empresas: procesos efectivos, resultados reales
            incluso con pocos recursos.
          </p>
          <span style="
            display:inline-flex;align-items:center;gap:var(--space-1);
            font-size:var(--text-xs);font-weight:700;
            color:rgba(255,255,255,.7);margin-top:var(--space-4);
            letter-spacing:.05em;text-transform:uppercase;
          ">
            Ver servicios
            <svg width="12" height="12" viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </span>
        </a>

        <a href="social.php" class="host-pillar host-pillar--s"
           style="text-decoration:none;cursor:pointer;"
           aria-label="Ir al Departamento Social">
          <span class="host-pillar__bg-letter" aria-hidden="true">S</span>
          <span class="host-pillar__letter" aria-hidden="true">S</span>
          <h2 class="host-pillar__title">Social</h2>
          <p class="host-pillar__desc">
            Responsabilidad social e impacto positivo
            en la comunidad: de las palabras a los hechos.
          </p>
          <span style="
            display:inline-flex;align-items:center;gap:var(--space-1);
            font-size:var(--text-xs);font-weight:700;
            color:rgba(255,255,255,.7);margin-top:var(--space-4);
            letter-spacing:.05em;text-transform:uppercase;
          ">
            Ver servicios
            <svg width="12" height="12" viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </span>
        </a>

        <a href="tecnologico.php" class="host-pillar host-pillar--t"
           style="text-decoration:none;cursor:pointer;"
           aria-label="Ir al Departamento Técnico">
          <span class="host-pillar__bg-letter" aria-hidden="true">T</span>
          <span class="host-pillar__letter" aria-hidden="true">T</span>
          <h2 class="host-pillar__title">Tecnológica</h2>
          <p class="host-pillar__desc">
            Ingeniería y tecnología al servicio del desarrollo
            humano y sostenible.
          </p>
          <span style="
            display:inline-flex;align-items:center;gap:var(--space-1);
            font-size:var(--text-xs);font-weight:700;
            color:rgba(255,255,255,.7);margin-top:var(--space-4);
            letter-spacing:.05em;text-transform:uppercase;
          ">
            Ver servicios
            <svg width="12" height="12" viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </span>
        </a>

      </div>
    </div>
  </section>


  <!-- =====================================================
       LAS 4 SERVICE-CARDS — Mismo componente que la home
       ===================================================== -->
  <section class="section section--alt" aria-labelledby="cards-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Los 4 departamentos</span>
        <h2 id="cards-title">Elige tu departamento</h2>
        <p>
          Cada departamento tiene sus propios servicios, sus propios programas
          y su propio equipo. Pero todos comparten el mismo principio:
          actuar, no solo asesorar.
        </p>
      </div>

      <div class="grid grid-2 gap-6">

        <!-- Dpto. H — Humano -->
        <article class="service-card service-card--h reveal"
                 aria-labelledby="idx-service-h-title">
          <span class="service-card__bg" aria-hidden="true">H</span>
          <div class="service-card__icon" aria-hidden="true">
            <span class="service-card__letter">H</span>
          </div>
          <h3 class="service-card__title" id="idx-service-h-title">
            Departamento Humano
          </h3>
          <p class="service-card__desc">
            Orientado a las personas: su desarrollo, bienestar y
            crecimiento profesional, personal y social.
          </p>
          <ul class="service-card__list"
              aria-label="Servicios del departamento Humano">
            <li class="service-card__list-item">Optimización de la actividad profesional</li>
            <li class="service-card__list-item">Apoyo a la mujer comerciante y empresaria</li>
            <li class="service-card__list-item">Programas #MadresSolteras y #MujerRural</li>
            <li class="service-card__list-item">Personas en situación de quemado (burnout)</li>
            <li class="service-card__list-item">Empleo 3.0 y reinserción laboral</li>
          </ul>
          <a href="humano.php" class="service-card__link">
            Ver todos los servicios
            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </article>

        <!-- Dpto. O — Organizacional -->
        <article class="service-card service-card--o reveal reveal--delay-1"
                 aria-labelledby="idx-service-o-title">
          <span class="service-card__bg" aria-hidden="true">O</span>
          <div class="service-card__icon" aria-hidden="true">
            <span class="service-card__letter">O</span>
          </div>
          <h3 class="service-card__title" id="idx-service-o-title">
            Departamento Organizacional
          </h3>
          <p class="service-card__desc">
            Para empresas y organizaciones que necesitan
            optimizar procesos, reorientarse o dar un salto cualitativo.
          </p>
          <ul class="service-card__list"
              aria-label="Servicios del departamento Organizacional">
            <li class="service-card__list-item">Recolocación y Outplacement</li>
            <li class="service-card__list-item">Servicios empresariales integrales</li>
            <li class="service-card__list-item">Atención y fidelización de clientes</li>
            <li class="service-card__list-item">Interim Management (dirección temporal)</li>
            <li class="service-card__list-item">Grandes Soluciones para empresas</li>
          </ul>
          <a href="organizacional.php" class="service-card__link">
            Ver todos los servicios
            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </article>

        <!-- Dpto. S — Social -->
        <article class="service-card service-card--s reveal reveal--delay-2"
                 aria-labelledby="idx-service-s-title">
          <span class="service-card__bg" aria-hidden="true">S</span>
          <div class="service-card__icon" aria-hidden="true">
            <span class="service-card__letter">S</span>
          </div>
          <h3 class="service-card__title" id="idx-service-s-title">
            Departamento Social
          </h3>
          <p class="service-card__desc">
            Responsabilidad social, redes sociales y proyectos
            de impacto positivo en la comunidad.
          </p>
          <ul class="service-card__list"
              aria-label="Servicios del departamento Social">
            <li class="service-card__list-item">Estrategia en redes sociales</li>
            <li class="service-card__list-item">Proyectos Sociales HOST</li>
            <li class="service-card__list-item">Pobreza energética — Proyecto HOST</li>
            <li class="service-card__list-item">Proyecto IRiS</li>
            <li class="service-card__list-item">Economía colaborativa y feminismo empresarial</li>
          </ul>
          <a href="social.php" class="service-card__link">
            Ver todos los servicios
            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </article>

        <!-- Dpto. T — Técnico -->
        <article class="service-card service-card--t reveal reveal--delay-3"
                 aria-labelledby="idx-service-t-title">
          <span class="service-card__bg" aria-hidden="true">T</span>
          <div class="service-card__icon" aria-hidden="true">
            <span class="service-card__letter">T</span>
          </div>
          <h3 class="service-card__title" id="idx-service-t-title">
            Departamento Técnico
          </h3>
          <p class="service-card__desc">
            Ingeniería sostenible, proyectos medioambientales
            y tecnología aplicada al desarrollo responsable.
          </p>
          <ul class="service-card__list"
              aria-label="Servicios del departamento Técnico">
            <li class="service-card__list-item">Proyectos medioambientales I+D+i</li>
            <li class="service-card__list-item">Depuración de aguas y desalación</li>
            <li class="service-card__list-item">Reciclaje y tratamiento de residuos</li>
            <li class="service-card__list-item">Generación de energía sostenible</li>
            <li class="service-card__list-item">Seguridad informática</li>
          </ul>
          <a href="tecnologico.php" class="service-card__link">
            Ver todos los servicios
            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </a>
        </article>

      </div>
    </div>
  </section>


  <!-- =====================================================
       DIFERENCIAL — Lo que tienen en común los 4
       ===================================================== -->
  <section class="section section--white" aria-labelledby="comun-title">
    <div class="container container--narrow">

      <div class="section-header reveal">
        <span class="eyebrow">Lo que une los 4 departamentos</span>
        <h2 id="comun-title">El denominador común</h2>
      </div>

      <div class="grid grid-2 gap-4 reveal">
        <?php
        $comun = [
          ['Actuamos, no solo aconsejamos',
           'Salimos del despacho y trabajamos codo con codo hasta que el objetivo está conseguido.'],
          ['Solución-solución, sin daños colaterales',
           'Cada solución se verifica para que no genere nuevos problemas. Si algo colateral genera, son beneficios.'],
          ['Fórmulas personalizadas, siempre',
           'No existen recetas genéricas. Cada caso tiene su situación particular y merece una respuesta a medida.'],
          ['Tiempo y coste ajustados',
           'Para microempresas y autónomos, el tiempo y el dinero son limitados. Trabajamos con la máxima eficiencia.'],
        ];
        foreach ($comun as $c): ?>
        <div style="
          background:var(--color-off-white);
          border:1px solid var(--color-border);
          border-radius:var(--radius-xl);
          padding:var(--space-5) var(--space-6);
          display:flex;gap:var(--space-4);align-items:flex-start;
        ">
          <span style="
            color:var(--color-orange);font-weight:800;
            font-size:var(--text-xl);flex-shrink:0;line-height:1.2;
          ">✓</span>
          <div>
            <strong style="display:block;font-size:var(--text-base);color:var(--color-navy);margin-bottom:var(--space-1);">
              <?= htmlspecialchars($c[0], ENT_QUOTES, 'UTF-8') ?>
            </strong>
            <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.65;max-width:none;margin:0;">
              <?= htmlspecialchars($c[1], ENT_QUOTES, 'UTF-8') ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- =====================================================
       CTA DOBLE — Método HOST + Contacto
       ===================================================== -->
  <section class="section section--alt">
    <div class="container">
      <div class="grid grid-2 gap-6">

        <!-- CTA Método HOST -->
        <div class="reveal" style="
          background:var(--gradient-hero);
          border-radius:var(--radius-2xl);
          padding:var(--space-10);
          position:relative;overflow:hidden;
          display:flex;flex-direction:column;justify-content:space-between;
          min-height:280px;
        ">
          <div style="
            position:absolute;inset:0;
            background-image:radial-gradient(circle at 80% 20%, rgba(232,98,26,.25) 0%, transparent 50%);
            pointer-events:none;
          " aria-hidden="true"></div>
          <div style="position:relative;z-index:1;">
            <span class="eyebrow" style="color:var(--color-amber);">
              ¿Tienes un proyecto?
            </span>
            <h3 style="
              font-family:var(--font-display);font-weight:800;
              font-size:var(--text-2xl);color:white;
              margin-top:var(--space-3);margin-bottom:var(--space-4);
            ">Evalúa su viabilidad<br>con el Método HOST</h3>
            <p style="color:rgba(255,255,255,.75);font-size:var(--text-base);max-width:none;margin-bottom:var(--space-6);">
              En 3 sesiones sabrás si tu proyecto tiene base real
              antes de comprometer dinero y tiempo.
            </p>
            <a href="../metodo-host.php" class="btn btn--primary">
              Conocer el Método HOST
            </a>
          </div>
        </div>

        <!-- CTA Contacto -->
        <div class="reveal reveal--delay-1" style="
          background:white;
          border:1px solid var(--color-border);
          border-radius:var(--radius-2xl);
          padding:var(--space-10);
          display:flex;flex-direction:column;justify-content:space-between;
          min-height:280px;
          box-shadow:var(--shadow-card);
        ">
          <div>
            <span class="eyebrow">¿No sabes cuál es tu departamento?</span>
            <h3 style="
              font-family:var(--font-display);font-weight:800;
              font-size:var(--text-2xl);color:var(--color-navy);
              margin-top:var(--space-3);margin-bottom:var(--space-4);
            ">Cuéntanos tu situación.<br>Nosotros la encajamos.</h3>
            <p style="color:var(--color-text-secondary);font-size:var(--text-base);margin-bottom:var(--space-6);">
              La primera consulta es gratuita y sin compromiso.
              Sin necesidad de saber qué departamento te corresponde.
            </p>
          </div>
          <div style="display:flex;flex-wrap:wrap;gap:var(--space-3);">
            <a href="../contacto.php" class="btn btn--secondary">
              Contactar ahora
            </a>
            <a href="tel:<?= SITE_PHONE_E164 ?>" class="btn btn--outline">
              📞 <?= SITE_PHONE ?>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
