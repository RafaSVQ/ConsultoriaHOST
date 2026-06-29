<?php
/**
 * CONSULTORÍA HOST — Empleo 3.0
 * Archivo: empleo.php
 *
 * El empleo visto con perspectiva 3.0: personas en búsqueda,
 * empresas que necesitan talento, emprendimiento, talleres,
 * ofertas de empleo HOST y colaboraciones.
 */

$depth            = 0;
$nav_active       = 'empleo';
$page_title       = 'Empleo 3.0 — Una nueva forma de entender el empleo';
$page_description = 'HOST Empleo 3.0: orientación laboral, taller de empleo, ofertas en HOST, emprendimiento y colaboraciones. Para personas y empresas. Sevilla, España.';
$page_keywords    = 'empleo, búsqueda empleo, taller de empleo, orientación laboral, ofertas empleo Sevilla, emprendimiento, HOST';
$page_canonical   = 'https://consultoriahost.es/empleo';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Empleo 3.0', null],
];

require_once __DIR__ . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">

  <!-- CABECERA -->
  <div class="page-header">
    <div class="container page-header__inner">
      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Empleo 3.0</span>
      </nav>
      <h1 class="page-header__title">Empleo 3.0</h1>
      <p class="page-header__subtitle">
        El empleo ha cambiado. Las formas de buscarlo, de conseguirlo
        y de gestionarlo también. HOST lo aborda con una visión
        <strong class="text-amber">moderna, humana y efectiva</strong>.
      </p>
    </div>
  </div>


  <!-- INTRO / TABS DE PERFIL -->
  <section class="section section--white" aria-labelledby="empleo-intro-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Una visión diferente del empleo</span>
        <h2 id="empleo-intro-title">¿Eres persona o empresa?</h2>
        <p>
          Empleo 3.0 en HOST tiene programas específicos para cada perfil.
          Elige el tuyo para ir directamente a lo que te interesa.
        </p>
      </div>

      <!-- Selector de perfil visual -->
      <div class="grid grid-2 gap-6" style="max-width:700px;margin-inline:auto;margin-bottom:var(--space-12);">
        <a href="#personas" class="reveal hover-lift" style="
          display:flex;flex-direction:column;align-items:center;justify-content:center;
          gap:var(--space-3);
          padding:var(--space-8);
          background:white;
          border:2px solid var(--color-orange);
          border-radius:var(--radius-2xl);
          text-decoration:none;
          box-shadow:var(--shadow-card);
        "
        >
          <?= icon('user', size: 48) ?>
          <span style="
            font-family:var(--font-display);font-weight:700;
            font-size:var(--text-xl);color:var(--color-navy);
          ">Soy persona</span>
          <span style="
            font-size:var(--text-sm);color:var(--color-text-secondary);text-align:center;
          ">Busco empleo, quiero emprender<br>o necesito orientación</span>
          <span class="badge badge--orange">Ver opciones →</span>
        </a>

        <a href="#empresas" class="reveal reveal--delay-1 hover-lift" style="
          display:flex;flex-direction:column;align-items:center;justify-content:center;
          gap:var(--space-3);
          padding:var(--space-8);
          background:white;
          border:2px solid var(--color-blue);
          border-radius:var(--radius-2xl);
          text-decoration:none;
          box-shadow:var(--shadow-card);
        "
        >
          <?= icon('building', size: 48) ?>
          <span style="
            font-family:var(--font-display);font-weight:700;
            font-size:var(--text-xl);color:var(--color-navy);
          ">Soy empresa</span>
          <span style="
            font-size:var(--text-sm);color:var(--color-text-secondary);text-align:center;
          ">Necesito talento, quiero publicar<br>una oferta o colaborar con HOST</span>
          <span class="badge badge--blue">Ver opciones →</span>
        </a>
      </div>

    </div>
  </section>


  <!-- PARA PERSONAS -->
  <section class="section section--alt" id="personas" aria-labelledby="personas-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="badge badge--orange" style="margin-bottom:var(--space-4);font-size:var(--text-sm);">
          Para personas
        </span>
        <h2 id="personas-title">Si estás buscando trabajo<br>o quieres emprender</h2>
        <p>
          No estás solo/a. HOST tiene programas específicos para
          acompañarte en cada situación.
        </p>
      </div>

      <div class="grid grid-3 gap-6">

        <?php
        $prog_personas = [
          [
            'icono' => icon('target', size: 36),
            'titulo'=> 'Taller de empleo HOST',
            'desc'  => 'Un taller práctico e intensivo para aprender a buscar empleo de forma efectiva en el mercado actual. CV actualizado, LinkedIn, entrevistas, estrategia de búsqueda activa y red de contactos.',
            'items' => ['CV y perfil profesional moderno','Estrategia de búsqueda activa','Preparación de entrevistas','LinkedIn y marca personal'],
            'cta'   => 'Apuntarse al taller',
            'color' => 'var(--color-orange)',
            'badge' => 'badge--orange',
            'tag'   => 'Taller grupal',
          ],
          [
            'icono' => icon('compass', size: 36),
            'titulo'=> 'Orientación profesional',
            'desc'  => 'Para quienes están en un momento de transición o incertidumbre: han perdido el empleo, quieren cambiar de sector, o simplemente no saben qué camino tomar. HOST ayuda a encontrar el camino.',
            'items' => ['Evaluación de perfil y competencias','Identificación de oportunidades','Plan de acción personalizado','Seguimiento continuo'],
            'cta'   => 'Solicitar orientación',
            'color' => 'var(--color-orange)',
            'badge' => 'badge--orange',
            'tag'   => 'Individual',
          ],
          [
            'icono' => icon('rocket', size: 36),
            'titulo'=> 'Emprendimiento personal',
            'desc'  => 'Tienes una idea y quieres convertirla en negocio. HOST te acompaña desde la validación con el Método HOST hasta la puesta en marcha, evitando los errores más comunes.',
            'items' => ['Validación con el Método HOST','Plan de empresa realista','Búsqueda de financiación','Primeros pasos del negocio'],
            'cta'   => 'Validar mi idea',
            'color' => 'var(--color-orange)',
            'badge' => 'badge--orange',
            'tag'   => 'Emprendimiento',
            'anchor'=> 'emprender',
          ],
        ];
        foreach ($prog_personas as $i => $p): ?>

        <article class="card reveal <?= $i>0?'reveal--delay-'.min($i,2):'' ?>"
                 <?= isset($p['anchor']) ? 'id="' . $p['anchor'] . '"' : '' ?>
                 style="box-shadow:var(--shadow-card);border-top:4px solid <?= $p['color'] ?>;">
          <div class="card__body" style="display:flex;flex-direction:column;height:100%;">
            <div style="
              display:flex;align-items:center;justify-content:space-between;
              margin-bottom:var(--space-4);
            ">
              <span style="font-size:2rem;"><?= $p['icono'] ?></span>
              <span class="badge <?= $p['badge'] ?>"><?= $p['tag'] ?></span>
            </div>
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-3);color:var(--color-navy);">
              <?= $p['titulo'] ?>
            </h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);flex-grow:1;"><?= $p['desc'] ?></p>
            <ul style="display:flex;flex-direction:column;gap:var(--space-2);margin-bottom:var(--space-5);">
              <?php foreach ($p['items'] as $item): ?>
              <li style="
                display:flex;align-items:flex-start;gap:var(--space-2);
                font-size:var(--text-sm);color:var(--color-text-secondary);
              ">
                <span style="color:<?= $p['color'] ?>;font-weight:700;flex-shrink:0;">✓</span>
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <a href="contacto" class="btn btn--primary btn--sm" style="align-self:flex-start;">
              <?= $p['cta'] ?>
            </a>
          </div>
        </article>

        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- PARA EMPRESAS -->
  <section class="section section--white" id="empresas" aria-labelledby="empresas-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="badge badge--blue" style="margin-bottom:var(--space-4);font-size:var(--text-sm);">
          Para empresas
        </span>
        <h2 id="empresas-title">Si necesitas talento<br>o quieres publicar una oferta</h2>
        <p>
          HOST conecta a empresas con el talento adecuado.
          Sin procesos interminables. Con criterio y acompañamiento.
        </p>
      </div>

      <div class="grid grid-2 gap-6">

        <?php
        $prog_empresas = [
          [
            'icono' => icon('search', size: 36),
            'titulo'=> 'Publica una oferta en HOST',
            'anchor'=> 'ofertas',
            'tag'   => 'Ofertas de empleo',
            'tcolor'=> 'badge--blue',
            'desc'  => 'HOST dispone de una red de candidatos cualificados en diferentes perfiles. Si necesitas incorporar talento a tu equipo, publica tu oferta con HOST y accede a candidatos que ya conocemos y hemos valorado.',
            'items' => ['Publicación en la red HOST','Preselección de candidatos','Acompañamiento en el proceso','Incorporación exitosa'],
          ],
          [
            'icono' => icon('map-pin', size: 36),
            'titulo'=> 'Empleo en Internacionalización',
            'tag'   => 'Especializado',
            'tcolor'=> 'badge--blue',
            'desc'  => 'Perfiles especializados en internacionalización empresarial: export managers, técnicos de comercio exterior, responsables de desarrollo internacional y otros perfiles con experiencia en mercados globales.',
            'items' => ['Perfiles de comercio exterior','Export managers','Técnicos de internacionalización','Gestión de mercados globales'],
          ],
          [
            'icono' => icon('graduation', size: 36),
            'titulo'=> 'Empleo en Formación',
            'tag'   => 'Especializado',
            'tcolor'=> 'badge--blue',
            'desc'  => 'Formadores, coordinadores de formación, técnicos de RRHH y otros perfiles relacionados con la formación continua, la gestión del talento y el desarrollo de personas en las organizaciones.',
            'items' => ['Formadores y tutores','Coordinadores de formación','Técnicos de RRHH','Gestores del talento'],
          ],
          [
            'icono' => icon('handshake', size: 36),
            'titulo'=> 'Colaboraciones con HOST',
            'tag'   => 'Red HOST',
            'tcolor'=> 'badge--blue',
            'desc'  => 'Si eres empresa y quieres colaborar con HOST, ya sea como proveedor de servicios, como partner de proyectos o como parte de la red HOST, cuéntanoslo. La colaboración es uno de los principios fundamentales de HOST.',
            'items' => ['Partnership en proyectos','Acuerdos de colaboración','Red de proveedores HOST','Proyectos conjuntos'],
          ],
        ];
        foreach ($prog_empresas as $i => $p): ?>

        <article class="card reveal <?= $i>0?'reveal--delay-'.min($i,3):'' ?>"
                 <?= isset($p['anchor']) ? 'id="' . $p['anchor'] . '"' : '' ?>
                 style="box-shadow:var(--shadow-card);border-top:4px solid var(--color-blue);">
          <div class="card__body">
            <div style="
              display:flex;align-items:center;justify-content:space-between;
              margin-bottom:var(--space-4);
            ">
              <span style="font-size:2rem;"><?= $p['icono'] ?></span>
              <span class="badge <?= $p['tcolor'] ?>"><?= $p['tag'] ?></span>
            </div>
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-3);color:var(--color-navy);">
              <?= $p['titulo'] ?>
            </h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);"><?= $p['desc'] ?></p>
            <ul style="display:flex;flex-direction:column;gap:var(--space-2);margin-bottom:var(--space-5);">
              <?php foreach ($p['items'] as $item): ?>
              <li style="
                display:flex;align-items:flex-start;gap:var(--space-2);
                font-size:var(--text-sm);color:var(--color-text-secondary);
              ">
                <span style="color:var(--color-blue);font-weight:700;flex-shrink:0;">✓</span>
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <a href="contacto" class="btn btn--ghost btn--sm" style="color:var(--color-blue);border:1px solid var(--color-blue);">
              Contactar para más información
            </a>
          </div>
        </article>

        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- COLABORACIONES / UNIRSE -->
  <section class="section section--alt" id="colaboraciones" aria-labelledby="colaboraciones-title">
    <div class="container container--narrow">

      <div class="section-header reveal">
        <span class="eyebrow">Red HOST</span>
        <h2 id="colaboraciones-title">Únete a la red HOST</h2>
        <p>
          HOST es más que una consultoría: es una red de profesionales comprometidos
          con generar valor real para las personas y las empresas.
          Si compartes esta visión, hay un sitio para ti.
        </p>
      </div>

      <div class="grid grid-3 gap-6">
        <?php
        $unirse_opciones = [
          ['briefcase','Como consultor/a HOST','Tienes experiencia y quieres aplicarla para ayudar a personas y empresas. HOST te ofrece proyectos, red y metodología.','Ser consultor HOST'],
          ['megaphone','Como colaborador/a','Conoces proyectos o clientes que pueden beneficiarse de HOST. La colaboración es siempre reconocida y valorada.','Colaborar con HOST'],
          ['sprout','Como emprendedor/a','Tienes una idea y quieres hacerla realidad dentro del ecosistema HOST. La red te aporta lo que necesitas para arrancar.','Emprender con HOST'],
        ];
        foreach ($unirse_opciones as $i => $o): ?>
        <div class="card reveal <?= $i>0?'reveal--delay-'.min($i,2):'' ?>" style="box-shadow:var(--shadow-card);text-align:center;">
          <div class="card__body">
            <div style="margin-bottom:var(--space-4);color:var(--color-orange);"><?= icon($o[0], size: 40) ?></div>
            <h3 style="font-size:var(--text-lg);margin-bottom:var(--space-3);"><?= $o[1] ?></h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-5);"><?= $o[2] ?></p>
            <a href="contacto#unirse" class="btn btn--outline btn--sm">
              <?= $o[3] ?>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- CTA -->
  <section class="section section--white">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">El primer paso es siempre el más difícil.</h2>
          <p class="cta-banner__subtitle">
            Da ese primer paso con HOST. Te acompañamos desde el principio.
          </p>
          <div class="cta-banner__actions">
            <a href="contacto" class="btn btn--primary btn--xl">Contactar ahora</a>
            <a href="tel:<?= SITE_PHONE_E164 ?>" class="btn btn--outline-white btn--xl">📞 <?= SITE_PHONE ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
