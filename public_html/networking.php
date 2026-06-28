<?php
/**
 * CONSULTORÍA HOST — Networking efectivo
 * Archivo: networking.php
 *
 * Qué es el networking según HOST, cómo se practica de forma
 * efectiva, jornadas y eventos de la red HOST.
 */

$depth            = 0;
$nav_active       = 'networking';
$page_title       = 'Networking efectivo — Conecta con quien importa';
$page_description = 'Networking efectivo con HOST: no se trata de coleccionar tarjetas, sino de construir relaciones de valor real. Jornadas, eventos y metodología HOST. Sevilla, España.';
$page_keywords    = 'networking efectivo, jornadas emprendedores, eventos empresariales, red contactos, Sevilla, HOST';
$page_canonical   = 'https://consultoriahost.es/networking';

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
        <span class="page-header__breadcrumb-current">Networking efectivo</span>
      </nav>
      <h1 class="page-header__title">Networking efectivo</h1>
      <p class="page-header__subtitle">
        No se trata de coleccionar tarjetas ni de hablar con todo el mundo.
        Se trata de construir
        <strong class="text-amber">relaciones de valor real</strong>.
      </p>
    </div>
  </div>


  <!-- QUÉ ES EL NETWORKING SEGÚN HOST -->
  <section class="section section--white" aria-labelledby="nw-intro-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">La visión HOST del networking</span>
          <h2 id="nw-intro-title">
            Networking que<br>
            <span class="text-orange">realmente funciona</span>
          </h2>
          <p style="margin-top:var(--space-4);">
            La mayoría de las personas que "hacen networking" vuelven a casa con
            un montón de tarjetas que acaban en un cajón y sin ninguna relación
            profesional nueva de valor. Porque el networking mal entendido
            es simplemente <strong>publicidad de uno mismo</strong>.
          </p>
          <p>
            El networking efectivo, el que HOST practica y enseña, parte de
            una premisa diferente: <strong>primero aporta, luego recibirás</strong>.
            Una red de contactos de calidad se construye siendo útil, siendo
            genuino y siendo consistente en el tiempo. No en una tarde de cóctel.
          </p>
          <p>
            HOST organiza y facilita encuentros donde el objetivo no es vender,
            sino <strong>conectar de verdad</strong>: entender qué necesita cada
            persona, identificar sinergias reales y construir relaciones que
            generen valor para todos los implicados.
          </p>
        </div>

        <!-- Visual comparativa -->
        <div class="reveal reveal--delay-1">
          <div style="display:flex;flex-direction:column;gap:var(--space-4);">

            <!-- Networking malo -->
            <div style="
              background:#FEF2F2;border:1px solid #FECACA;
              border-radius:var(--radius-xl);padding:var(--space-5);
            ">
              <div style="
                font-size:.7rem;font-weight:800;letter-spacing:.08em;
                text-transform:uppercase;color:#DC2626;
                margin-bottom:var(--space-3);
              ">❌ Networking que NO funciona</div>
              <?php
              $nw_malo = [
                'Ir a un evento a repartir tarjetas',
                'Hablar solo de ti y de tu empresa',
                'Conectar en LinkedIn sin más',
                'Esperar que los demás te llamen',
                'Solo aparecer cuando necesitas algo',
              ];
              foreach ($nw_malo as $m): ?>
              <div style="
                display:flex;gap:var(--space-2);
                font-size:var(--text-sm);color:#991B1B;
                margin-bottom:var(--space-2);
              ">
                <span style="flex-shrink:0;">✗</span>
                <?= htmlspecialchars($m, ENT_QUOTES, 'UTF-8') ?>
              </div>
              <?php endforeach; ?>
            </div>

            <!-- Networking bueno -->
            <div style="
              background:var(--color-green-light);border:1px solid var(--color-green);
              border-radius:var(--radius-xl);padding:var(--space-5);
            ">
              <div style="
                font-size:.7rem;font-weight:800;letter-spacing:.08em;
                text-transform:uppercase;color:var(--color-green);
                margin-bottom:var(--space-3);
              ">✅ Networking HOST efectivo</div>
              <?php
              $nw_bueno = [
                'Escuchar más que hablar',
                'Identificar cómo puedes ser útil',
                'Mantener el contacto de forma consistente',
                'Presentar a personas que se necesitan mutuamente',
                'Construir confianza antes de pedir nada',
              ];
              foreach ($nw_bueno as $b): ?>
              <div style="
                display:flex;gap:var(--space-2);
                font-size:var(--text-sm);color:var(--color-green);
                margin-bottom:var(--space-2);
              ">
                <span style="flex-shrink:0;">✓</span>
                <?= htmlspecialchars($b, ENT_QUOTES, 'UTF-8') ?>
              </div>
              <?php endforeach; ?>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- METODOLOGÍA -->
  <section class="section section--alt" aria-labelledby="nw-metodo-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Cómo lo hace HOST</span>
        <h2 id="nw-metodo-title">La metodología del networking efectivo HOST</h2>
        <p>
          HOST ha desarrollado una metodología propia para facilitar encuentros
          de networking que generen conexiones reales. No eventos para lucirse,
          sino espacios para construir.
        </p>
      </div>

      <div class="grid grid-3 gap-6">
        <?php
        $metodologia = [
          [
            'num'   => '01',
            'color' => 'var(--gradient-orange)',
            'titulo'=> 'Preparación',
            'desc'  => 'Antes del encuentro, HOST ayuda a los participantes a definir claramente qué buscan y qué pueden ofrecer. Un networking con objetivos claros multiplica los resultados.',
            'items' => ['Definir objetivos concretos','Preparar el mensaje personal','Identificar perfiles de interés'],
          ],
          [
            'num'   => '02',
            'color' => 'var(--gradient-card)',
            'titulo'=> 'Encuentro',
            'desc'  => 'Los eventos HOST son espacios facilitados, no dejados a la improvisación. HOST modera, presenta y crea las condiciones para que las conversaciones de valor ocurran.',
            'items' => ['Formato estructurado y dinámico','Presentaciones guiadas','Rondas de conexión dirigidas'],
          ],
          [
            'num'   => '03',
            'color' => 'var(--gradient-green)',
            'titulo'=> 'Seguimiento',
            'desc'  => 'El networking sin seguimiento es ruido. HOST acompaña a los participantes en el seguimiento de las conexiones generadas para que se conviertan en relaciones reales.',
            'items' => ['Protocolo de seguimiento','Acciones concretas acordadas','Revisión de resultados a los 30 días'],
          ],
        ];
        foreach ($metodologia as $i => $m): ?>
        <article class="card reveal <?= $i>0?'reveal--delay-'.min($i,2):'' ?>"
                 style="box-shadow:var(--shadow-card);">
          <div style="
            background:<?= $m['color'] ?>;
            padding:var(--space-5) var(--space-6);
            display:flex;align-items:center;gap:var(--space-4);
          ">
            <span style="
              font-family:var(--font-display);font-weight:800;
              font-size:var(--text-3xl);color:rgba(255,255,255,.3);
              line-height:1;
            " aria-hidden="true"><?= $m['num'] ?></span>
            <h3 style="
              font-family:var(--font-display);font-weight:700;
              font-size:var(--text-xl);color:white;
            "><?= $m['titulo'] ?></h3>
          </div>
          <div class="card__body">
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);"><?= $m['desc'] ?></p>
            <ul style="display:flex;flex-direction:column;gap:var(--space-2);">
              <?php foreach ($m['items'] as $item): ?>
              <li style="
                display:flex;align-items:flex-start;gap:var(--space-2);
                font-size:var(--text-sm);color:var(--color-text-secondary);
              ">
                <span style="
                  display:block;width:6px;height:6px;border-radius:50%;
                  background:var(--color-orange);flex-shrink:0;margin-top:6px;
                " aria-hidden="true"></span>
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- FORMATOS DE EVENTOS -->
  <section class="section section--white" aria-labelledby="nw-formatos-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Actividades y eventos</span>
        <h2 id="nw-formatos-title">Jornadas y encuentros HOST</h2>
        <p>
          HOST organiza distintos tipos de encuentros según el objetivo
          y el perfil de los participantes.
        </p>
      </div>

      <div class="grid grid-2 gap-6">
        <?php
        $formatos = [
          [
            'icono' => 'coffee',
            'titulo'=> 'Networking desayuno',
            'tag'   => 'Formato íntimo',
            'tcolor'=> 'badge--orange',
            'desc'  => 'Grupos reducidos (8-12 personas) en formato desayuno. Ideal para conexiones profundas y conversaciones de calidad. Cada participante presenta su proyecto en 3 minutos y se generan rondas de conexión dirigidas.',
            'datos' => ['8-12 participantes','2-3 horas de duración','Desayuno incluido'],
          ],
          [
            'icono' => 'mic',
            'titulo'=> 'Jornadas temáticas',
            'tag'   => 'Con ponencias',
            'tcolor'=> 'badge--blue',
            'desc'  => 'Jornadas de medio día o día completo con ponencias de expertos, mesas redondas y tiempo de networking libre. Temáticas habituales: emprendimiento, digitalización, sostenibilidad, empleo 3.0.',
            'datos' => ['20-50 participantes','Ponentes expertos','Temática específica'],
          ],
          [
            'icono' => 'globe',
            'titulo'=> 'Networking online',
            'tag'   => 'Formato virtual',
            'tcolor'=> 'badge--green',
            'desc'  => 'Para quien no puede desplazarse pero sí quiere conectar. Sesiones virtuales facilitadas por HOST con la misma metodología que los encuentros presenciales, adaptada al formato online.',
            'datos' => ['Accesible desde cualquier lugar','Herramientas de conexión virtual','Grupos temáticos específicos'],
          ],
          [
            'icono' => 'handshake',
            'titulo'=> 'Encuentros sectoriales',
            'tag'   => 'Por sector',
            'tcolor'=> 'badge--navy',
            'desc'  => 'Encuentros diseñados específicamente para un sector o colectivo: mujeres empresarias, emprendedores tecnológicos, empresas sostenibles, etc. Mayor afinidad, mejores conexiones.',
            'datos' => ['Perfiles similares y complementarios','Temática de sector específico','Mayor calidad de conexiones'],
          ],
        ];
        foreach ($formatos as $i => $f): ?>
        <article class="card reveal <?= $i>0?'reveal--delay-'.min($i,3):'' ?>"
                 style="box-shadow:var(--shadow-card);">
          <div class="card__body">
            <div style="
              display:flex;align-items:center;justify-content:space-between;
              margin-bottom:var(--space-4);
            ">
              <span style="color:var(--color-orange);"><?= icon($f['icono'], size: 32) ?></span>
              <span class="badge <?= $f['tcolor'] ?>"><?= $f['tag'] ?></span>
            </div>
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-3);color:var(--color-navy);">
              <?= $f['titulo'] ?>
            </h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);"><?= $f['desc'] ?></p>
            <div style="display:flex;flex-wrap:wrap;gap:var(--space-2);margin-bottom:var(--space-5);">
              <?php foreach ($f['datos'] as $d): ?>
              <span style="
                background:var(--color-gray-50);
                border:1px solid var(--color-border);
                border-radius:var(--radius-full);
                padding:var(--space-1) var(--space-3);
                font-size:var(--text-xs);
                font-weight:500;
                color:var(--color-text-secondary);
              "><?= htmlspecialchars($d, ENT_QUOTES, 'UTF-8') ?></span>
              <?php endforeach; ?>
            </div>
            <a href="contacto" class="btn btn--outline btn--sm">
              Solicitar información
            </a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- CTA -->
  <section class="section section--alt">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">¿Quieres participar en el próximo evento HOST?</h2>
          <p class="cta-banner__subtitle">
            Escríbenos y te informamos sobre los próximos encuentros,
            formatos disponibles y cómo participar.
          </p>
          <div class="cta-banner__actions">
            <a href="contacto" class="btn btn--primary btn--xl">Solicitar información</a>
            <a href="tel:<?= SITE_PHONE_E164 ?>" class="btn btn--outline-white btn--xl">📞 <?= SITE_PHONE ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
