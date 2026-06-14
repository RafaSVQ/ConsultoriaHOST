<?php
/**
 * CONSULTORÍA HOST — Departamento (H) Humano
 * Archivo: servicios/humano.php
 *
 * El pilar Humano de HOST: orientación profesional, colectivos
 * con necesidades específicas, burnout, mujer emprendedora,
 * optimización de la actividad y emprendimiento personal.
 */

$depth            = 1;
$nav_active       = 'servicios';
$page_title       = 'Departamento (H) Humano — Personas y desarrollo profesional';
$page_description = 'El Departamento Humano de HOST acompaña a personas en su desarrollo profesional: orientación laboral, mujer comerciante, madres solteras, mujer rural, burnout y Empleo 3.0. Sevilla.';
$page_keywords    = 'orientación laboral, mujer comerciante, madres solteras, mujer rural, burnout, empleo 3.0, Sevilla, consultoría humana';
$page_canonical   = 'https://consultoriahost.es/servicios/humano';

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
        <span class="page-header__breadcrumb-current">Departamento (H) Humano</span>
      </nav>
      <div style="display:flex;align-items:center;gap:var(--space-4);margin-bottom:var(--space-4);">
        <div style="
          width:64px;height:64px;border-radius:var(--radius-xl);
          background:var(--gradient-orange);
          display:flex;align-items:center;justify-content:center;
          font-family:var(--font-display);font-weight:800;font-size:2rem;color:white;
        " aria-hidden="true">H</div>
        <span class="badge badge--orange" style="font-size:var(--text-sm);">Departamento Humano</span>
      </div>
      <h1 class="page-header__title">Las personas, primero.</h1>
      <p class="page-header__subtitle">
        Porque toda empresa es, ante todo, un grupo de personas.
        Y el desarrollo de las personas y el de sus proyectos
        están <strong style="color:var(--color-amber);">profundamente unidos</strong>.
      </p>
    </div>
  </div>


  <!-- INTRO -->
  <section class="section section--white" aria-labelledby="h-intro-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">El pilar H de HOST</span>
          <h2 id="h-intro-title">Consultoría centrada<br>en <span class="text-orange">las personas</span></h2>
          <p style="margin-top:var(--space-4);">
            El Departamento Humano de HOST nace de una convicción firme: los problemas
            de las empresas son, en el fondo, <strong>problemas de personas</strong>.
            Y los problemas de las personas tienen solución cuando se abordan con
            la experiencia, el método y el acompañamiento adecuados.
          </p>
          <p>
            Trabajamos con personas en situaciones muy diversas: desde quien acaba de
            perder su empleo hasta quien lleva años quemado en el suyo, desde la mujer
            que quiere montar su negocio hasta el profesional que necesita reorientar
            su carrera. <strong>Cada caso tiene su camino.</strong>
          </p>
          <p>
            Nuestro enfoque es siempre <strong>práctico y personalizado</strong>:
            no planes genéricos, sino soluciones concretas adaptadas a cada persona
            y a su contexto real.
          </p>
        </div>

        <!-- Tarjetas de valores -->
        <div class="reveal reveal--delay-1">
          <div class="grid grid-2 gap-4">
            <?php
            $valores = [
              ['target','Sin recetas genéricas','Cada persona tiene su situación única. Trabajamos solo con soluciones personalizadas.'],
              ['handshake','Acompañamiento real','No te dejamos solo/a con un informe. Estamos hasta que el objetivo está conseguido.'],
              ['lightbulb','Actuación inmediata','Las urgencias personales no esperan. Cuando hay una situación crítica, actuamos ya.'],
              ['compass','Visión 360°','Combinamos perspectiva humana, organizacional, social y tecnológica en cada caso.'],
            ];
            foreach ($valores as $v): ?>
            <div style="
              background:var(--color-off-white);
              border-radius:var(--radius-xl);
              padding:var(--space-5);
              border:1px solid var(--color-border);
            ">
              <div style="margin-bottom:var(--space-2);color:var(--color-orange);"><?= icon($v[0], size: 26) ?></div>
              <div style="font-weight:600;font-size:var(--text-sm);color:var(--color-text-primary);margin-bottom:4px;"><?= $v[1] ?></div>
              <div style="font-size:var(--text-xs);color:var(--color-text-secondary);line-height:1.5;"><?= $v[2] ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- SERVICIOS ESPECÍFICOS -->
  <section class="section section--alt" aria-labelledby="h-servicios-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Qué ofrecemos</span>
        <h2 id="h-servicios-title">Servicios del Departamento Humano</h2>
        <p>Programas específicos para situaciones específicas.<br>
        Siempre con el mismo objetivo: que la persona avance.</p>
      </div>

      <!-- Grid de servicios detallados -->
      <div class="grid grid-2 gap-6">

        <?php
        $servicios_h = [
          [
            'icono'  => 'lightbulb',
            'titulo' => 'Optimizar tu actividad profesional',
            'badge'  => 'Profesionales y autónomos',
            'color'  => 'badge--orange',
            'desc'   => 'Si sientes que trabajas mucho pero avanzas poco, que el día no da para lo que debería dar, o que tu actividad se ha estancado, este programa es para ti. Analizamos cómo gestionas tu tiempo, tus recursos y tu energía, e identificamos los cambios que marcan la diferencia.',
            'lista'  => ['Diagnóstico de situación actual','Identificación de ineficiencias y bloqueos','Plan de optimización personalizado','Seguimiento y ajuste continuo'],
          ],
          [
            'icono'  => 'user-circle',
            'titulo' => 'Mujer comerciante y empresaria',
            'badge'  => 'Colectivo específico',
            'color'  => 'badge--orange',
            'desc'   => 'La mujer que regenta un comercio o dirige una microempresa se enfrenta a retos únicos: conciliación, visibilidad, digitalización, acceso a financiación... HOST tiene un programa específico para acompañar a la mujer empresaria con soluciones reales y sin paternalismos.',
            'lista'  => ['Diagnóstico empresarial personalizado','Estrategia de negocio adaptada','Formación práctica y mentoring','Red de apoyo y contactos'],
          ],
          [
            'icono'  => 'sprout',
            'titulo' => '#MadresSolteras',
            'badge'  => 'Programa HOST',
            'color'  => 'badge--orange',
            'desc'   => 'Las madres solteras enfrentan una triple jornada (laboral, doméstica y emocional) que hace que el desarrollo profesional sea un reto enorme. HOST tiene un programa específico de apoyo al emprendimiento y al empleo para madres solteras con recursos ajustados a su realidad.',
            'lista'  => ['Orientación laboral personalizada','Apoyo al emprendimiento con recursos mínimos','Gestión del tiempo con cargas familiares','Acceso a ayudas y subvenciones disponibles'],
          ],
          [
            'icono'  => 'wheat',
            'titulo' => '#MujerRural',
            'badge'  => 'Programa HOST',
            'color'  => 'badge--orange',
            'desc'   => 'La mujer en entornos rurales dispone de menos oportunidades, menos visibilidad y menos acceso a recursos de desarrollo profesional. HOST trabaja para revertir esta brecha con programas de emprendimiento rural, digitalización y acceso al mercado laboral.',
            'lista'  => ['Diagnóstico de oportunidades en el entorno rural','Emprendimiento y negocios locales sostenibles','Digitalización y presencia online','Conexión con redes y recursos regionales'],
          ],
          [
            'icono'  => 'target',
            'titulo' => 'Persona quemada (burnout)',
            'badge'  => 'Situación crítica',
            'color'  => 'badge--orange',
            'desc'   => 'El burnout no es "estar cansado": es un estado de agotamiento físico, emocional y mental que puede tener consecuencias graves si no se aborda a tiempo. HOST acompaña a personas en situación de quemado para identificar las causas, recuperar el equilibrio y diseñar un nuevo camino.',
            'lista'  => ['Evaluación de la situación con total confidencialidad','Identificación de causas y factores de riesgo','Plan de recuperación y reorientación','Apoyo continuo durante el proceso'],
          ],
          [
            'icono'  => 'rocket',
            'titulo' => 'Emprendimiento personal',
            'badge'  => 'Emprender con cabeza',
            'color'  => 'badge--orange',
            'desc'   => 'Tienes una idea y quieres convertirla en realidad. Antes de firmar nada, antes de pedir créditos, antes de contárselo a todo el mundo... aplica el Método HOST. Validamos la viabilidad de tu proyecto y te acompañamos en cada paso del camino emprendedor.',
            'lista'  => ['Validación de la idea con el Método HOST','Plan de empresa realista y viable','Acompañamiento en los primeros pasos','Acceso a la red HOST de emprendedores'],
          ],
        ];
        foreach ($servicios_h as $i => $s): ?>

        <article class="card reveal <?= $i>0?'reveal--delay-'.min($i%3,3):'' ?>"
                 style="box-shadow:var(--shadow-card);"
                 aria-labelledby="h-servicio-<?= $i ?>">
          <div class="card__body">
            <div style="
              display:flex;align-items:flex-start;
              justify-content:space-between;gap:var(--space-4);
              margin-bottom:var(--space-4);
            ">
              <div style="color:var(--color-orange);"><?= icon($s['icono'], size: 32) ?></div>
              <span class="badge <?= $s['color'] ?>"><?= $s['badge'] ?></span>
            </div>
            <h3 id="h-servicio-<?= $i ?>" style="
              font-size:var(--text-xl);
              margin-bottom:var(--space-3);
              color:var(--color-navy);
            "><?= $s['titulo'] ?></h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);"><?= $s['desc'] ?></p>
            <ul style="
              display:flex;flex-direction:column;gap:var(--space-2);
              margin-bottom:var(--space-5);
            ">
              <?php foreach ($s['lista'] as $item): ?>
              <li style="
                display:flex;align-items:flex-start;gap:var(--space-2);
                font-size:var(--text-sm);color:var(--color-text-secondary);
              ">
                <span style="
                  display:block;width:6px;height:6px;
                  border-radius:50%;background:var(--color-orange);
                  flex-shrink:0;margin-top:6px;
                " aria-hidden="true"></span>
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <a href="../contacto.php" class="btn btn--outline btn--sm">
              Solicitar información
            </a>
          </div>
        </article>

        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- EMPLEO 3.0 — DESTACADO -->
  <section class="section section--white" aria-labelledby="empleo-h-title">
    <div class="container">
      <div style="
        background: var(--gradient-hero);
        border-radius: var(--radius-2xl);
        padding: var(--space-12);
        display: grid;
        grid-template-columns: 1fr auto;
        gap: var(--space-8);
        align-items: center;
        position: relative;
        overflow: hidden;
      ">
        <div style="
          position:absolute;inset:0;
          background-image:radial-gradient(circle at 80% 50%, rgba(232,98,26,.25) 0%, transparent 50%);
          pointer-events:none;
        " aria-hidden="true"></div>

        <div style="position:relative;z-index:1;" class="reveal">
          <span class="badge" style="background:rgba(245,166,35,.2);color:var(--color-amber);margin-bottom:var(--space-4);">
            Programa estrella
          </span>
          <h2 id="empleo-h-title" style="
            font-family:var(--font-display);font-weight:800;
            font-size:var(--text-4xl);color:white;
            margin-bottom:var(--space-4);letter-spacing:var(--letter-spacing-tight);
          ">Empleo 3.0</h2>
          <p style="color:rgba(255,255,255,.8);font-size:var(--text-lg);max-width:520px;line-height:var(--line-height-loose);">
            El empleo ha cambiado. Las formas de buscarlo, de conseguirlo y de gestionarlo también.
            HOST acompaña a personas y empresas con una visión moderna, humana y efectiva.
          </p>
        </div>
        <div style="position:relative;z-index:1;flex-shrink:0;" class="reveal reveal--delay-1">
          <a href="../empleo.php" class="btn btn--primary btn--xl">
            Ver Empleo 3.0
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
              <path d="M4 10h12M10 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- CTA -->
  <section class="section section--alt">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">¿Reconoces tu situación aquí?</h2>
          <p class="cta-banner__subtitle">
            Cuéntanosla. Sin etiquetas, sin juicios. Solo con ganas de encontrar el camino.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto.php" class="btn btn--primary btn--xl">Contactar</a>
            <a href="../que-es-host.php" class="btn btn--outline-white btn--xl">Conocer HOST</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
