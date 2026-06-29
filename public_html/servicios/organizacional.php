<?php
/**
 * CONSULTORÍA HOST — Departamento (O) Organizacional / Empresarial
 * Archivo: servicios/organizacional.php
 *
 * Servicios para empresas y organizaciones: Interim Management,
 * outplacement, optimización de procesos, atención al cliente
 * y grandes soluciones.
 */

$depth            = 1;
$nav_active       = 'servicios';
$page_title       = 'Departamento (O) Organizacional — Consultoría empresarial HOST';
$page_description = 'Consultoría organizacional HOST: Interim Management, outplacement, optimización de procesos, atención al cliente y grandes soluciones para microempresas y pymes. Sevilla.';
$page_keywords    = 'consultoría empresarial, interim manager, outplacement, optimización empresa, microempresa, pyme, Sevilla';
$page_canonical   = 'https://consultoriahost.es/servicios/organizacional';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Servicios', 'https://consultoriahost.es/#servicios'],
  ['Departamento (O) Organizacional', null],
];

require_once dirname(__DIR__) . '/bootstrap.php';
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
        <a href="/#servicios">Servicios</a>
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
        <strong class="text-amber">incluso con pocos medios</strong>.
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
            temporal para resolver desde dentro.
          </p>
          <p>
            El objetivo siempre es el mismo: que la empresa funcione mejor,
            con menos esfuerzo, en menos tiempo y de forma sostenible.
          </p>
        </div>

        <!-- Panel de datos -->
        <div class="reveal reveal--delay-1">
          <div style="
            background:var(--gradient-card);
            border-radius:var(--radius-2xl);
            padding:var(--space-10);
            position:relative;overflow:hidden;
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
                ['95%',  'de las empresas tienen menos de 10 personas'],
                ['+40',  'años de experiencia acumulada del equipo HOST'],
                ['3',    'pasos del Método HOST para evaluar viabilidad'],
                ['0',    'proyectos HOST abandonados sin solución'],
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
                <span style="font-size:var(--text-sm);color:rgba(255,255,255,.7);line-height:1.4;">
                  <?= $d[1] ?>
                </span>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- INTERIM MANAGEMENT — SERVICIO ESTRELLA -->
  <section class="section section--alt" aria-labelledby="interim-o-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="badge badge--blue" style="margin-bottom:var(--space-4);">Servicio estrella</span>
        <h2 id="interim-o-title">Interim Management</h2>
        <p>
          La consultoría HOST <strong>"a domicilio"</strong>: nos integramos en tu empresa
          de forma temporal, ocupamos la posición necesaria y resolvemos desde dentro.
          Sin el coste de una contratación indefinida, con la capacidad de acción
          de un directivo senior.
        </p>
      </div>

      <div class="grid grid-2 gap-8" style="margin-bottom:var(--space-8);">

        <!-- Descripción -->
        <div class="reveal">
          <p>
            Un Interim Manager no es un consultor externo que opina desde fuera.
            Es alguien que entra en la empresa, tiene autoridad real para tomar
            decisiones, gestiona personas y recursos, y no se va hasta que el
            objetivo está cumplido.
          </p>
          <p>
            En otros países es la primera llamada cuando una empresa necesita
            resolver una situación crítica. En España sigue siendo un servicio
            poco conocido — y eso es precisamente la ventaja de quien lo usa
            antes que su competencia.
          </p>
          <a href="../blog/interim-management-espana"
             style="
               display:inline-flex;align-items:center;gap:var(--space-2);
               font-size:var(--text-sm);font-weight:600;color:var(--color-blue);
               margin-top:var(--space-2);text-decoration:none;
             ">
            Leer el artículo completo sobre Interim Management →
          </a>
        </div>

        <!-- Cuándo usarlo -->
        <div class="reveal reveal--delay-1">
          <h3 style="font-size:var(--text-lg);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-4);">
            ¿Cuándo tiene sentido?
          </h3>
          <?php
          $cuando = [
            ['chart-bar', 'Empresa en situación de crisis o declive'],
            ['refresh',   'Cambio de dirección o reestructuración'],
            ['users',     'Ausencia inesperada de un directivo clave'],
            ['rocket',    'Crecimiento rápido que supera la estructura'],
            ['target',    'Lanzamiento de un nuevo proyecto o mercado'],
            ['lightbulb', 'Problemas operativos que no se resuelven solos'],
          ];
          foreach ($cuando as $c): ?>
          <div style="
            display:flex;align-items:center;gap:var(--space-3);
            padding:var(--space-3) var(--space-4);
            border-radius:var(--radius-md);
            margin-bottom:var(--space-2);
            background:white;
            border:1px solid var(--color-border);
            font-size:var(--text-sm);
            color:var(--color-text-secondary);
          ">
            <span style="color:var(--color-blue);flex-shrink:0;">
              <?= icon($c[0], size: 16) ?>
            </span>
            <?= htmlspecialchars($c[1], ENT_QUOTES, 'UTF-8') ?>
          </div>
          <?php endforeach; ?>
        </div>

      </div>

      <!-- Ventajas del Interim Management -->
      <div class="grid grid-3 gap-6 reveal">
        <?php
        $ventajas_interim = [
          ['star',      'Sin costes de estructura',
           'No hay nómina indefinida, ni SS, ni indemnización. Se paga por el tiempo y el objetivo.'],
          ['rocket',    'Disponibilidad inmediata',
           'Puede estar operativo en días. Sin curva de aprendizaje de meses.'],
          ['compass',   'Objetividad sin ataduras',
           'Sin la política interna ni las inercias de quien lleva años dentro.'],
          ['refresh',   'Transferencia de conocimiento',
           'Al salir, deja la organización más capaz que cuando llegó.'],
          ['target',    'Perfil a medida',
           'Se busca exactamente la experiencia que la situación concreta necesita.'],
          ['handshake', 'Salida planificada',
           'Se define el resultado final desde el principio. Cuando se consigue, fin.'],
        ];
        foreach ($ventajas_interim as $v): ?>
        <div style="
          background:white;
          border:1px solid var(--color-border);
          border-radius:var(--radius-xl);
          padding:var(--space-5);
        ">
          <div style="color:var(--color-blue);margin-bottom:var(--space-3);">
            <?= icon($v[0], size: 24) ?>
          </div>
          <strong style="display:block;font-size:var(--text-sm);color:var(--color-navy);margin-bottom:var(--space-1);">
            <?= htmlspecialchars($v[1], ENT_QUOTES, 'UTF-8') ?>
          </strong>
          <p style="font-size:var(--text-xs);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
            <?= htmlspecialchars($v[2], ENT_QUOTES, 'UTF-8') ?>
          </p>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center" style="margin-top:var(--space-8);">
        <a href="../contacto" class="btn btn--secondary btn--lg">
          Solicitar información sobre Interim Management
        </a>
      </div>

    </div>
  </section>


  <!-- RESTO DE SERVICIOS -->
  <section class="section section--white" aria-labelledby="o-servicios-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Más servicios del Departamento O</span>
        <h2 id="o-servicios-title">Soluciones organizacionales HOST</h2>
        <p>
          Del diagnóstico a la ejecución. Cada servicio está diseñado para
          generar resultados reales, no informes que nadie lee.
        </p>
      </div>

      <div class="grid grid-2 gap-6">
        <?php
        $servicios_o = [
          [
            'icono'  => 'refresh',
            'titulo' => 'Recolocación — Outplacement',
            'badge'  => 'Para empresas',
            'color'  => 'var(--color-blue)',
            'desc'   => 'Cuando una empresa necesita prescindir de personas, cómo se hace marca la diferencia para siempre: en la imagen de la empresa, en la motivación del equipo que se queda y en el bienestar de quienes salen. HOST gestiona el proceso con profesionalidad y respeto en ambos planos.',
            'lista'  => [
              'Gestión del proceso de desvinculación',
              'Orientación profesional individualizada',
              'Actualización de perfil y estrategia de búsqueda',
              'Apoyo durante la transición',
              'Protección de la imagen de la empresa',
            ],
          ],
          [
            'icono'  => 'building',
            'titulo' => 'Servicios Empresariales Integrales',
            'badge'  => 'Microempresas y pymes',
            'color'  => 'var(--color-blue)',
            'desc'   => 'Un paquete completo de consultoría adaptado a la realidad de la microempresa española: con los recursos que hay, en el tiempo que hay, para el mercado que hay. Sin planes utópicos que quedan en el cajón. Solo lo que se puede ejecutar.',
            'lista'  => [
              'Diagnóstico empresarial 360°',
              'Plan estratégico realista y ejecutable',
              'Optimización de procesos clave',
              'Gestión de equipos y personas',
              'Acompañamiento en la implementación',
            ],
          ],
          [
            'icono'  => 'users',
            'titulo' => 'Atención a TU cliente',
            'badge'  => 'Fidelización',
            'color'  => 'var(--color-blue)',
            'desc'   => 'El cliente es el activo más valioso de cualquier negocio. Y la forma en que se le atiende decide si vuelve, si recomienda o si se va a la competencia. HOST analiza toda la experiencia del cliente y rediseña los puntos de contacto que más importan.',
            'lista'  => [
              'Auditoría de la experiencia del cliente',
              'Identificación de puntos críticos de abandono',
              'Diseño del proceso de atención ideal',
              'Formación del equipo de atención',
              'Sistemas de seguimiento y fidelización',
            ],
          ],
          [
            'icono'  => 'star',
            'titulo' => 'Grandes Soluciones HOST',
            'badge'  => 'Alto impacto',
            'color'  => 'var(--color-blue)',
            'desc'   => 'Para situaciones que requieren soluciones de gran alcance: reestructuraciones completas, cambios de modelo de negocio, fusiones, expansiones o cualquier proyecto que suponga un antes y un después para la organización. HOST coordina todos los recursos necesarios.',
            'lista'  => [
              'Análisis de viabilidad del proyecto',
              'Diseño de la solución integral',
              'Coordinación de recursos internos y externos',
              'Gestión del cambio organizacional',
              'Ejecución con seguimiento continuo',
            ],
          ],
        ];
        foreach ($servicios_o as $i => $s): ?>

        <article class="card reveal <?= $i > 0 ? 'reveal--delay-' . min($i, 3) : '' ?>"
                 style="box-shadow:var(--shadow-card);border-top:4px solid <?= $s['color'] ?>;"
                 aria-labelledby="o-servicio-<?= $i ?>">
          <div class="card__body">
            <div style="
              display:flex;align-items:flex-start;
              justify-content:space-between;gap:var(--space-4);
              margin-bottom:var(--space-4);
            ">
              <div style="color:<?= $s['color'] ?>;"><?= icon($s['icono'], size: 32) ?></div>
              <span class="badge badge--blue"><?= htmlspecialchars($s['badge'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <h3 id="o-servicio-<?= $i ?>" style="
              font-size:var(--text-xl);margin-bottom:var(--space-3);color:var(--color-navy);
            "><?= htmlspecialchars($s['titulo'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);">
              <?= htmlspecialchars($s['desc'], ENT_QUOTES, 'UTF-8') ?>
            </p>
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
            <a href="../contacto"
               class="btn btn--ghost btn--sm"
               style="color:var(--color-blue);border:1px solid var(--color-blue);">
              Solicitar información
            </a>
          </div>
        </article>

        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- POR QUÉ HOST PARA TU EMPRESA -->
  <section class="section section--alt" aria-labelledby="o-porque-title">
    <div class="container container--narrow">

      <div class="section-header reveal">
        <span class="eyebrow">La diferencia HOST</span>
        <h2 id="o-porque-title">Lo que nos diferencia</h2>
      </div>

      <div class="grid grid-2 gap-4 reveal">
        <?php
        $diferencias = [
          [
            'Primero ejecutamos, luego documentamos',
            'No llenamos cajones de informes. Cuando hay que actuar, actuamos. La documentación viene después, no antes.',
          ],
          [
            'Soluciones sin daños colaterales',
            'Cada solución se analiza por sus consecuencias indirectas. Si algo colateral va a generar, que sean beneficios.',
          ],
          [
            'Adaptado a microempresas',
            'El 95% de España son microempresas. HOST está diseñado para operar con los recursos reales que tienen, no con los que deberían tener.',
          ],
          [
            'Tiempos y costes ajustados',
            'Reducir los tiempos de solución es nuestro norte constante. El tiempo de una microempresa es su activo más escaso.',
          ],
        ];
        foreach ($diferencias as $d): ?>
        <div style="
          background:white;
          border:1px solid var(--color-border);
          border-radius:var(--radius-xl);
          padding:var(--space-5) var(--space-6);
          display:flex;gap:var(--space-4);
        ">
          <span style="
            color:var(--color-blue);flex-shrink:0;font-weight:800;
            font-size:var(--text-xl);line-height:1.2;margin-top:1px;
          "><?= icon('target', size: 20, color: 'var(--color-orange)') ?></span>
          <div>
            <strong style="display:block;font-size:var(--text-base);color:var(--color-navy);margin-bottom:var(--space-1);">
              <?= htmlspecialchars($d[0], ENT_QUOTES, 'UTF-8') ?>
            </strong>
            <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.65;max-width:none;margin:0;">
              <?= htmlspecialchars($d[1], ENT_QUOTES, 'UTF-8') ?>
            </p>
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
          <h2 class="cta-banner__title">¿Tu empresa necesita un giro?</h2>
          <p class="cta-banner__subtitle">
            Cuéntanos la situación. La primera consulta es gratuita y sin compromiso.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto" class="btn btn--primary btn--xl">Hablar con HOST</a>
            <a href="tel:<?= SITE_PHONE_E164 ?>" class="btn btn--outline-white btn--xl">
              📞 <?= SITE_PHONE ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
