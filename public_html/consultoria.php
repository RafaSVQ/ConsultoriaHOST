<?php
/**
 * CONSULTORÍA HOST — Página: Consultoría 3.0
 * Archivo: consultoria.php
 *
 * Explica qué es la consultoría HOST, desmonta los 7 errores
 * más comunes sobre los servicios de consultoría y describe
 * el modelo de Interim Management.
 */

$depth            = 0;
$nav_active       = 'consultoria';
$page_title       = 'Consultoría 3.0 — La consultoría que actúa';
$page_description = 'Consultoría HOST actúa codo con codo con sus clientes. Más de 40 años de experiencia. Descubre qué es la consultoría 3.0 y por qué es diferente. Sevilla, España.';
$page_keywords    = 'consultoría 3.0, interim manager, consultoría empresarial, microempresa, pyme, Sevilla, España';
$page_canonical   = 'https://consultoriahost.es/consultoria';

require_once __DIR__ . '/bootstrap.php';
include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ========================================================
       CABECERA DE PÁGINA
       ======================================================== -->
  <div class="page-header">
    <div class="container page-header__inner">
      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="index.php">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Consultoría 3.0</span>
      </nav>
      <h1 class="page-header__title">La consultoría que necesitas.</h1>
      <p class="page-header__subtitle">
        Profesionales al servicio de la sociedad y del desarrollo.
        Un servicio que <strong class="text-amber">"hace"</strong>
        más que <strong class="text-amber">"dice"</strong>.
      </p>
    </div>
  </div>


  <!-- ========================================================
       SECCIÓN 1: QUÉ ES LA CONSULTORÍA HOST
       ======================================================== -->
  <section class="section section--white" aria-labelledby="consultoria-intro-title">
    <div class="container">
      <div class="grid grid-2 gap-8" style="align-items:start;">

        <div class="reveal">
          <span class="eyebrow">Consultoría e Ingeniería 3.0</span>
          <h2 id="consultoria-intro-title">
            Una consultoría<br>
            <span class="text-orange">para el cambio</span>
          </h2>
          <p style="margin-top:var(--space-4);">
            En <strong>Consultoría HOST</strong> podríamos dedicarnos a generar informes de situación,
            valoraciones, planes de empresa, estudios de mercado y, en definitiva, acabar
            llenando de papeles los cajones de nuestros clientes o de gigas sus discos duros.
          </p>
          <p>
            Pero considerando la actual situación social, económica y empresarial, hemos
            decidido generar <strong>"otra cosa"</strong>: directamente nos centramos en
            generar <strong>resultados</strong>. Salimos de nuestros despachos y, codo con codo,
            sacamos adelante los proyectos de nuestros clientes, participando de forma activa.
          </p>
          <p>
            <strong>Más de 40 años de experiencia y de formación acumuladas</strong>,
            capacidad resolutiva y compromiso son algunas de las cualidades que ofrecemos
            a quien, con convicción, quiera hacer algo para mejorar su situación,
            la de su empresa o la de su entorno social.
          </p>
        </div>

        <!-- Panel de perfiles -->
        <div class="reveal reveal--delay-1">
          <div class="sidebar-panel">
            <h3 class="sidebar-panel__heading">¿Para quién es HOST?</h3>
            <?php
            $perfiles = [
              ['icon'=>'🏪', 'titulo'=>'Microempresas y autónomos',
               'desc'=>'El 95% de las empresas españolas tienen menos de 10 personas. HOST está hecha especialmente para ellas.'],
              ['icon'=>'rocket', 'titulo'=>'Emprendedores con proyecto',
               'desc'=>'Valida tu idea antes de arriesgar dinero, tiempo y relaciones personales.'],
              ['icon'=>'👤', 'titulo'=>'Personas en búsqueda de empleo',
               'desc'=>'O en reorientación profesional, o en situación de burnout. HOST acompaña.'],
              ['icon'=>'🏢', 'titulo'=>'Empresas en situación crítica',
               'desc'=>'Cuando "ya no sé qué hacer más", una perspectiva externa cambia todo.'],
              ['icon'=>'graduation', 'titulo'=>'Centros educativos y AAPP',
               'desc'=>'Para personal docente, administrativo y cargos políticos que quieran resultados reales.'],
            ];
            foreach ($perfiles as $p): ?>
            <div class="profile-card hover-shadow-md">
              <div class="profile-card__icon"><?= icon($p['icon'], size: 28) ?></div>
              <div>
                <div class="profile-card__title"><?= $p['titulo'] ?></div>
                <div class="profile-card__desc"><?= $p['desc'] ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 2: LOS 7 ERRORES COMUNES
       ======================================================== -->
  <section class="section section--alt" aria-labelledby="errores-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Desmontando mitos</span>
        <h2 id="errores-title">Los 7 errores más comunes<br>al pensar en una consultoría</h2>
        <p>
          Hay hasta chistes sobre los servicios de consultoría. Chistes realmente buenos.
          Pero que llevan a muchas personas y empresas a perder la oportunidad de
          resolver situaciones que tienen solución.
        </p>
      </div>

      <?php
      $errores = [
        [
          'num'    => '01',
          'titulo' => '"¿Qué puede aportarme una consultoría que no me aporte internet?"',
          'color'  => 'var(--color-orange)',
          'resp'   => 'Todo lo que está accesible por internet es solo una pequeña parte del conocimiento. Y, para colmo, lo que hay en internet está sin verificar: hay gran cantidad de información errónea que ninguna consecuencia tiene para quien la publica, pero que sí las tiene —y muy graves en ocasiones— para quienes la toman como cierta.',
        ],
        [
          'num'    => '02',
          'titulo' => '"¿Qué va a saber un consultor que no sea capaz de aprender yo?"',
          'color'  => 'var(--color-blue)',
          'resp'   => 'Si bien podrías aprender lo que sabemos, ¿tu profesión es "saber mucho de muchas cosas" o es otra? Si para poner en marcha un negocio online te planteas aprender programación, diseño, marketing, contabilidad, financiación... dentro de años aún estarás sin vender un solo producto. Quien recurre a HOST enfoca mejor su actividad y optimiza resultados.',
        ],
        [
          'num'    => '03',
          'titulo' => '"Para qué consultoría si puedo ir tirando y ya mejoraré."',
          'color'  => 'var(--color-green)',
          'resp'   => 'Aun cuando percibes que te va bien, HOST te aporta un plus: identificar qué hace que vaya bien, percibir situaciones de riesgo por adelantado y evitar que afecten negativamente. Más vale prevenir que curar. Nada mejor que HOST como servicio de prevención de accidentes empresariales.',
        ],
        [
          'num'    => '04',
          'titulo' => '"Con lo que yo sé del negocio, ¿qué me va a solucionar un consultor?"',
          'color'  => 'var(--color-navy)',
          'resp'   => 'A veces incluso personas con gran conocimiento y experiencia se encuentran con situaciones difíciles. Un servicio de consultoría HOST ayuda precisamente porque procura estar siempre en los niveles máximos de conocimiento en su campo. Profesionales con 30 años de oficio pasan por nuestros talleres y reconocen el altísimo nivel ofrecido.',
        ],
        [
          'num'    => '05',
          'titulo' => '"Mi problema lo tienen miles y no lo han solucionado: ¿lo va a solucionar un consultor?"',
          'color'  => 'var(--color-orange)',
          'resp'   => 'A veces un problema se extiende y se generaliza, y casualmente hay un pensamiento común de que es algo irremediable... y nadie ha recurrido a una consultoría. Situaciones que durante años estaban sin resolverse en gremios completos se resolvieron tras una primera reunión con HOST. ¡Cosas que pasan!',
        ],
        [
          'num'    => '06',
          'titulo' => '"La consultoría cobrará un dineral y se irá sin dejar nada solucionado."',
          'color'  => 'var(--color-blue)',
          'resp'   => 'Una consultoría tipo HOST analiza las situaciones y directamente actúa. Si se permite y conviene pasar a la acción, se pasa a la acción, ocupando las posiciones necesarias hasta resolver. Y si el coste genera un problema mayor, se expone y se abandona el plan. En HOST nunca ocurre que "sea peor el remedio que la enfermedad".',
        ],
        [
          'num'    => '07',
          'titulo' => '"La consultoría deberá ir demostrando su valía durante el proceso."',
          'color'  => 'var(--color-green)',
          'resp'   => 'Este estilo está basado en la desconfianza y es anticuado. A HOST se recurre generalmente en situaciones bastante extremas: lo urgente e importante es solucionar, no demostrar. El 95% del tejido empresarial español son empresas de menos de 10 personas: reducir al máximo los tiempos dedicados a demostrar y maximizar los de solucionar es imprescindible.',
        ],
      ];
      foreach ($errores as $i => $error): ?>

      <article class="error-card reveal hover-card-raise <?= $i > 0 ? 'reveal--delay-'.min($i,4) : '' ?>"
               style="--error-color: <?= $error['color'] ?>">
        <div class="error-card__badge" aria-hidden="true"><?= $error['num'] ?></div>
        <div>
          <div class="error-card__problem">
            <span class="error-card__problem-label">Error común</span>
            <?= htmlspecialchars($error['titulo'], ENT_QUOTES, 'UTF-8') ?>
          </div>
          <div class="error-card__solution">
            <span class="error-card__solution-label">Realidad HOST</span>
            <?= htmlspecialchars($error['resp'], ENT_QUOTES, 'UTF-8') ?>
          </div>
        </div>
      </article>

      <?php endforeach; ?>
    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 3: INTERIM MANAGEMENT
       ======================================================== -->
  <section class="section section--white" aria-labelledby="interim-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <!-- Visual -->
        <div class="reveal" aria-hidden="true">
          <div style="
            background: var(--gradient-hero);
            border-radius: var(--radius-2xl);
            padding: var(--space-12);
            text-align: center;
            position: relative;
            overflow: hidden;
          ">
            <div style="
              position: absolute;
              inset: 0;
              background-image: radial-gradient(circle at 30% 70%, rgba(232,98,26,.3) 0%, transparent 50%);
            "></div>
            <div style="
              position: relative;
              z-index: 1;
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 1.1rem;
              color: var(--color-amber);
              letter-spacing: .1em;
              text-transform: uppercase;
              margin-bottom: var(--space-4);
            ">Interim Manager</div>
            <div style="
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 3.5rem;
              color: white;
              line-height: 1.1;
              margin-bottom: var(--space-6);
            ">Consultoría<br>a domicilio</div>
            <p style="color:rgba(255,255,255,.75);font-size:var(--text-base);max-width:none;">
              Nos integramos en tu empresa de forma temporal
              y resolvemos desde dentro.
            </p>
            <div style="
              margin-top: var(--space-8);
              display: inline-flex;
              gap: var(--space-3);
              background: rgba(255,255,255,.12);
              border-radius: var(--radius-full);
              padding: var(--space-3) var(--space-6);
              font-size: var(--text-sm);
              color: white;
              font-weight: 600;
            ">
              <span>✓ Sin nómina fija</span>
              <span>·</span>
              <span>✓ Resultado garantizado</span>
            </div>
          </div>
        </div>

        <!-- Contenido -->
        <div class="reveal reveal--delay-1">
          <span class="eyebrow">Servicio estrella</span>
          <h2 id="interim-title">
            Interim Management:<br>
            <span class="text-orange">dirección temporal integrada</span>
          </h2>
          <p style="margin-top:var(--space-4);">
            En ocasiones se requiere de una acción desde dentro, ocupando
            <strong>de forma temporal</strong> en la empresa alguna de las posiciones laborales
            o directivas. Eso es lo que se conoce como <strong>Interim Manager</strong>.
          </p>
          <p>
            Un servicio muy habitual en otros países y que aún en España sigue sin conocerse
            suficientemente. La consultoría HOST <strong>"a domicilio"</strong>, in situ:
            nos integramos en la empresa con el perfil que sea necesario (dirección, gestión,
            comercial, operaciones...) y sacamos la situación adelante desde dentro.
          </p>

          <div style="
            margin-top: var(--space-8);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-4);
          ">
            <?php
            $ventajas = [
              ['star','Sin estructura fija','Pagas por el tiempo necesario, no por una nómina indefinida.'],
              ['lightbulb','Resultados inmediatos','Actuamos desde el primer día con total implicación.'],
              ['target','Objetivo claro','Definimos el resultado concreto antes de empezar.'],
              ['refresh','Salida planificada','Cuando se resuelve, se hace una transferencia ordenada.'],
            ];
            foreach ($ventajas as $v): ?>
            <div style="
              background: var(--color-off-white);
              border-radius: var(--radius-lg);
              padding: var(--space-4);
              border: 1px solid var(--color-border);
            ">
              <div style="margin-bottom:var(--space-2);color:var(--color-orange);"><?= icon($v[0], size: 22) ?></div>
              <div style="font-weight:600;font-size:var(--text-sm);color:var(--color-text-primary);margin-bottom:4px;"><?= $v[1] ?></div>
              <div style="font-size:var(--text-xs);color:var(--color-text-secondary);line-height:1.5;"><?= $v[2] ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 4: CONSULTORÍA 3.0 — El modelo HOST
       ======================================================== -->
  <section class="section section--alt" aria-labelledby="modelo-title">
    <div class="container container--narrow">

      <div class="section-header reveal">
        <span class="eyebrow">El modelo HOST</span>
        <h2 id="modelo-title">Consultoría 3.0</h2>
        <p>
          Un servicio donde se trabaja con profesionalidad mutua entre las partes implicadas,
          de forma integrada y comprometida, lo que reduce muchos costes y mejora lo que
          ambas partes quieren: <strong>soluciones</strong>.
        </p>
      </div>

      <div class="reveal reveal--delay-1" style="
        background: var(--color-navy);
        border-radius: var(--radius-2xl);
        padding: var(--space-10);
        color: white;
      ">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-8);margin-bottom:var(--space-8);">
          <?php
          $principios = [
            ['target','Primero solucionamos','Después generamos la documentación necesaria. No al revés.'],
            ['handshake','Profesionalidad mutua','Empresa y equipo consultor trabajan integrados y comprometidos.'],
            ['lightbulb','Tiempos y costes ajustados','Reducir los tiempos de solución es nuestro norte constante.'],
            ['clipboard','Sin daños colaterales','Cada solución es verificada para no generar nuevos problemas.'],
          ];
          foreach ($principios as $p): ?>
          <div style="display:flex;gap:var(--space-4);">
            <div style="flex-shrink:0;color:var(--color-amber);"><?= icon($p[0], size: 24) ?></div>
            <div>
              <div style="font-weight:700;font-size:var(--text-base);color:white;margin-bottom:4px;"><?= $p[1] ?></div>
              <div style="font-size:var(--text-sm);color:rgba(255,255,255,.65);line-height:1.5;"><?= $p[2] ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <div style="
          border-top: 1px solid rgba(255,255,255,.12);
          padding-top: var(--space-6);
          text-align: center;
        ">
          <p style="
            font-family: var(--font-display);
            font-size: var(--text-xl);
            font-weight: 700;
            font-style: italic;
            color: var(--color-amber);
            max-width: none;
          ">
            "En las urgencias del día a día, es necesaria una persona ajena
            que analice la situación con claridad. Desde fuera se ven las cosas
            con mayor nitidez."
          </p>
        </div>
      </div>

    </div>
  </section>


  <!-- ========================================================
       CTA FINAL
       ======================================================== -->
  <section class="section section--white">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">
            ¿Cuánto te está costando no resolver esto?
          </h2>
          <p class="cta-banner__subtitle">
            Cada día sin solución tiene un coste. Una consulta inicial no cuesta nada.
            Y puede cambiarlo todo.
          </p>
          <div class="cta-banner__actions">
            <a href="contacto.php" class="btn btn--primary btn--xl">
              Primera consulta gratuita
            </a>
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
