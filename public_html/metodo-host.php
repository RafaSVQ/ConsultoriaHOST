<?php
/**
 * CONSULTORÍA HOST — Página: Método HOST
 * Archivo: metodo-host.php
 *
 * Explica el Método HOST de evaluación de viabilidad de proyectos:
 * 3 pasos, talleres en grupos reducidos, caso real ilustrativo.
 */

$depth            = 0;
$nav_active       = 'metodo';
$page_title       = 'Método HOST — Evalúa la viabilidad de tu negocio en 3 pasos';
$page_description = 'El Método HOST es un método de evaluación 3.0 para verificar la viabilidad de un negocio antes de arriesgar. 3 pasos, grupos reducidos, talleres dinámicos. Sevilla, España.';
$page_keywords    = 'método HOST, viabilidad negocio, emprendimiento, plan de empresa, evaluación proyecto, talleres emprendimiento, Sevilla';
$page_canonical   = 'https://consultoriahost.es/metodo-host';

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
        <span class="page-header__breadcrumb-current">Método HOST</span>
      </nav>
      <h1 class="page-header__title">Método HOST</h1>
      <p class="page-header__subtitle">
        Revisa la viabilidad de tu empresa o negocio
        <strong style="color:var(--color-amber);">antes de arriesgar</strong>.
        Un método dinámico, ameno y muy instructivo en 3 pasos.
      </p>
    </div>
  </div>


  <!-- ========================================================
       SECCIÓN 1: QUÉ ES EL MÉTODO HOST
       ======================================================== -->
  <section class="section section--white" aria-labelledby="metodo-intro-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">Evaluación 3.0</span>
          <h2 id="metodo-intro-title">
            ¿Qué es el<br>
            <span class="text-orange">Método HOST</span>?
          </h2>
          <p style="margin-top:var(--space-4);">
            Es un <strong>método de evaluación 3.0</strong>: pensado para que sea de utilidad
            general por su sencillez, fácil aplicación y comprensibilidad para la mayoría
            de personas. Un método que acumula conocimiento de múltiples materias con
            un tratamiento interdisciplinar.
          </p>
          <p>
            Es un método <strong>dinámico, ameno y muy instructivo</strong> diseñado para
            verificar las posibilidades de viabilidad de un negocio mediante un proceso
            en 3 pasos. Con él, en 3 sesiones de trabajo dispondrás de criterios y consejos
            profesionales claros para seguir adelante con tu negocio, o saber a tiempo
            si conviene replantearlo.
          </p>
          <p>
            Este método evalúa las claves precisas que marcan las diferencias entre un proyecto
            con posibilidades y uno sin ellas. Es <strong>clave en momentos complejos</strong>
            usar un método efectivo para percibir si una empresa tiene o no posibilidad de éxito.
          </p>

          <div style="
            margin-top:var(--space-6);
            padding:var(--space-5);
            background:rgba(232,98,26,.08);
            border-radius:var(--radius-lg);
            border-left: 3px solid var(--color-orange);
          ">
            <p style="
              font-style:italic;
              font-size:var(--text-sm);
              color:var(--color-text-secondary);
              max-width:none;
            ">
              <strong style="color:var(--color-orange);">Dato importante:</strong>
              Las estadísticas indican que el 90% de quienes apuestan al todo por el todo
              para emprender han caído en la ruina. El Método HOST está diseñado
              precisamente para evitarlo.
            </p>
          </div>
        </div>

        <!-- Infografía de los 3 pasos compacta -->
        <div class="reveal reveal--delay-1">
          <div style="
            background: var(--color-off-white);
            border-radius: var(--radius-2xl);
            padding: var(--space-8);
            border: 1px solid var(--color-border);
          ">
            <h3 style="
              font-size:var(--text-lg);
              margin-bottom:var(--space-6);
              text-align:center;
              color:var(--color-navy);
            ">El proceso en resumen</h3>

            <?php
            $pasos_resumen = [
              ['1','var(--gradient-orange)','Identificación','Ponemos nombre a la situación real: el proyecto, el mercado, la persona emprendedora y el entorno.','⏱ Jornada 1'],
              ['2','var(--gradient-card)','Evaluación','Aplicamos el Método HOST para verificar la viabilidad con criterio profesional y objetivo.','⏱ Jornada 2'],
              ['3','var(--gradient-green)','Planificación','Diseñamos el plan de acción: seguir adelante con garantías, replantear o evitar a tiempo.','⏱ Jornada 3'],
            ];
            foreach ($pasos_resumen as $paso): ?>
            <div style="
              display:flex;
              gap:var(--space-4);
              margin-bottom:var(--space-5);
              padding-bottom:var(--space-5);
              border-bottom:1px solid var(--color-border);
            ">
              <div style="
                width:52px;
                height:52px;
                border-radius:50%;
                background:<?= $paso[1] ?>;
                display:flex;
                align-items:center;
                justify-content:center;
                font-family:var(--font-display);
                font-weight:800;
                font-size:var(--text-xl);
                color:white;
                flex-shrink:0;
              "><?= $paso[0] ?></div>
              <div>
                <div style="font-weight:700;color:var(--color-text-primary);margin-bottom:2px;"><?= $paso[2] ?></div>
                <div style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.5;margin-bottom:4px;"><?= $paso[3] ?></div>
                <div style="font-size:var(--text-xs);font-weight:600;color:var(--color-text-muted);"><?= $paso[4] ?></div>
              </div>
            </div>
            <?php endforeach; ?>

            <div style="text-align:center;padding-top:var(--space-2);">
              <div style="font-size:var(--text-sm);color:var(--color-text-muted);margin-bottom:var(--space-3);">
                3 jornadas · 5 horas cada una
              </div>
              <a href="contacto.php" class="btn btn--primary" style="width:100%;justify-content:center;">
                Solicitar información
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 2: POR QUÉ ES NECESARIO
       ======================================================== -->
  <section class="section section--alt" aria-labelledby="porque-title">
    <div class="container container--narrow">

      <div class="section-header reveal">
        <span class="eyebrow">La realidad del emprendimiento</span>
        <h2 id="porque-title">Con la que está cayendo...<br>¿Para qué exponerse sin antes evaluar?</h2>
        <p>
          El método antiguo de aprender sobre la marcha, a base de equivocarse, es hoy
          una temeridad que se paga muy cara.
        </p>
      </div>

      <div class="grid grid-3 gap-6" style="margin-bottom:var(--space-10);">
        <?php
        $razones = [
          ['euro','Crédito es difícil','Conseguir financiación hoy requiere presentar una solicitud seria y formal. Hay que tenerlo bien evaluado antes.'],
          ['compass','El tiempo no vuelve','Cada mes invertido en un proyecto inviable es un mes perdido. La evaluación previa lo evita.'],
          ['users','Relaciones en juego','Muchos proyectos involucran familiares o amigos. Una mala decisión puede romper relaciones para siempre.'],
          ['chart-bar','El 90% fracasa','Las estadísticas son claras: la mayoría por cuestiones perfectamente previsibles con el Método HOST.'],
          ['lightbulb','Hay soluciones','Un proyecto rechazado no siempre significa abandonar: muchas veces significa replantear y mejorar.'],
          ['target','Foco y claridad','El Método HOST aporta criterios objetivos donde antes solo había intuición y esperanza.'],
        ];
        foreach ($razones as $i => $r): ?>
        <div class="reveal <?= $i>0?'reveal--delay-'.min($i,4):'' ?>" style="
          background:white;
          border-radius:var(--radius-xl);
          padding:var(--space-6);
          border:1px solid var(--color-border);
          box-shadow:var(--shadow-sm);
          text-align:center;
        ">
          <div style="margin-bottom:var(--space-3);color:var(--color-blue);"><?= icon($r[0], size: 36) ?></div>
          <h3 style="font-size:var(--text-base);margin-bottom:var(--space-2);"><?= $r[1] ?></h3>
          <p style="font-size:var(--text-sm);margin-inline:auto;"><?= $r[2] ?></p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 3: CASO REAL
       ======================================================== -->
  <section class="section section--white" aria-labelledby="caso-real-title">
    <div class="container container--narrow">

      <div class="section-header reveal">
        <span class="eyebrow">Un caso real</span>
        <h2 id="caso-real-title">Lo que puede cambiar en una sesión</h2>
      </div>

      <div class="reveal reveal--delay-1" style="
        background: white;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-2xl);
        padding: var(--space-10);
        box-shadow: var(--shadow-card);
        position: relative;
        overflow: hidden;
      ">
        <!-- Comilla decorativa -->
        <div style="
          position:absolute;
          top:var(--space-4);
          left:var(--space-6);
          font-family:Georgia,serif;
          font-size:6rem;
          line-height:.8;
          color:var(--color-orange);
          opacity:.15;
          user-select:none;
        " aria-hidden="true">"</div>

        <div style="position:relative;z-index:1;">
          <p style="
            font-size:var(--text-lg);
            font-style:italic;
            color:var(--color-text-secondary);
            line-height:var(--line-height-loose);
            margin-bottom:var(--space-6);
            margin-inline:auto;
          ">
            Recientemente traté un proyecto promovido por dos socios emprendedores. La idea
            parecía clara y madura: habían hecho su estudio de mercado, sus tablas llenas de cifras,
            habían verificado que había mercado suficiente para que fuera rentable. Todo perfecto a su parecer.
          </p>

          <p style="
            font-size:var(--text-base);
            color:var(--color-text-secondary);
            line-height:var(--line-height-loose);
            margin-bottom:var(--space-6);
            margin-inline:auto;
          ">
            Una vez empezamos a validar el proyecto con el Método HOST empezamos a descubrir situaciones
            que dejaban nítidamente claros algunos errores cometidos y que modificaban radicalmente el
            escenario del proyecto. De tal manera que, aun echando horas y dinero sin parar, no iban
            a poder sacarlo adelante. Y todo resultado de un método objetivo.
          </p>

          <div style="
            background: rgba(220,38,38,.06);
            border: 1px solid rgba(220,38,38,.2);
            border-radius: var(--radius-lg);
            padding: var(--space-4) var(--space-6);
            margin-bottom: var(--space-6);
          ">
            <p style="
              font-weight:600;
              color:#991B1B;
              font-size:var(--text-base);
              max-width:none;
              margin:0;
            ">
              ⚠️ Dicho clara y responsablemente: el camino emprendido les llevaba
              directos a la ruina. ¡Un error que me alegro de haberles mostrado a tiempo!
            </p>
          </div>

          <p style="
            font-size:var(--text-base);
            color:var(--color-text-secondary);
            line-height:var(--line-height-loose);
            margin-bottom:var(--space-6);
            margin-inline:auto;
          ">
            En un caso así, ¿dejamos el proyecto abandonado? No necesariamente. Lo que sí
            cancelamos fueron las citas con el notario, con el abogado, con el director del banco...
            y acordamos un plan de trabajo profesional serio para tomar, ahora sí, una decisión
            mejor calculada.
          </p>

          <div style="
            background: var(--color-green-light);
            border: 1px solid var(--color-green);
            border-radius: var(--radius-lg);
            padding: var(--space-4) var(--space-6);
          ">
            <p style="
              font-weight:600;
              color:var(--color-green);
              font-size:var(--text-base);
              max-width:none;
              margin:0;
            ">
              ✅ El proyecto cambió, y ahora los dos socios siguen adelante
              con un planteamiento distinto y validado. Con criterio.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 4: CÓMO SON LOS TALLERES
       ======================================================== -->
  <section class="section section--alt" aria-labelledby="talleres-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Formato del Método HOST</span>
        <h2 id="talleres-title">¿Cómo son nuestros talleres?</h2>
        <p>
          No existe la receta genérica. El Método HOST, además de servir para evaluar
          un proyecto, sirve para generar recetas personales. Por eso trabajamos
          en grupos reducidos con trabajo individual simultáneo.
        </p>
      </div>

      <div class="grid grid-3 gap-6" style="margin-bottom:var(--space-10);">
        <?php
        $caracteristicas = [
          ['users','Grupos reducidos','Máxima atención personalizada. No existe la receta genérica: combinamos trabajo en grupo con trabajo "uno a uno".','badge--orange'],
          ['megaphone','Comunicación y debate','Los talleres generan debate constructivo y sinergias muy útiles tanto en el ámbito empresarial como personal.','badge--blue'],
          ['lightbulb','3 sesiones de 5 horas','Una jornada por cada paso a verificar. Intensivo, aprovechado al máximo, sin tiempo perdido.','badge--green'],
          ['target','Identificación y evaluación','Trabajo real sobre tu proyecto concreto: identificar, evaluar, planificar y debatir con criterio.','badge--orange'],
          ['rocket','Sales motivado/a','Con criterios claros, la motivación que da saber que ahora sí tienes base para emprender es enorme.','badge--blue'],
          ['euro','Posibles ayudas económicas','La actividad puede acogerse a ayudas económicas. Consúltanos sin compromiso.','badge--green'],
        ];
        foreach ($caracteristicas as $i => $c): ?>
        <div class="card reveal <?= $i>0?'reveal--delay-'.min($i,4):'' ?>" style="box-shadow:var(--shadow-card);">
          <div class="card__body">
            <div style="font-size:2rem;margin-bottom:var(--space-3);"><?= $c[0] ?></div>
            <h3 style="font-size:var(--text-lg);margin-bottom:var(--space-3);"><?= $c[1] ?></h3>
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);"><?= $c[2] ?></p>
            <span class="badge <?= $c[3] ?>"><?= $i < 2 ? 'Formato' : ($i < 4 ? 'Metodología' : 'Resultado') ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 5: LOS 3 PASOS EN DETALLE
       ======================================================== -->
  <section class="section section--white" aria-labelledby="pasos-detalle-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">El proceso paso a paso</span>
        <h2 id="pasos-detalle-title">3 pasos. 3 jornadas.<br>Un resultado claro.</h2>
      </div>

      <div class="metodo-steps reveal">

        <div class="metodo-step">
          <div class="metodo-step__number">1</div>
          <h3 class="metodo-step__title">Identificación</h3>
          <p class="metodo-step__desc">
            Analizamos la situación actual con toda la honestidad que requiere.
            El proyecto, el mercado, el perfil del emprendedor y el entorno.
            Ponemos nombre a los puntos fuertes y a los débiles. Sin suavizar.
            Sin dramatizar.
          </p>
        </div>

        <div class="metodo-step">
          <div class="metodo-step__number">2</div>
          <h3 class="metodo-step__title">Evaluación</h3>
          <p class="metodo-step__desc">
            Aplicamos el Método HOST a los datos reales del proyecto.
            ¿Tiene posibilidades reales de éxito? ¿Qué factores son críticos?
            ¿Qué cambios mejorarían la viabilidad? Todo con criterio profesional
            y sin las ilusiones que nublan el juicio.
          </p>
        </div>

        <div class="metodo-step">
          <div class="metodo-step__number">3</div>
          <h3 class="metodo-step__title">Planificación</h3>
          <p class="metodo-step__desc">
            Con el diagnóstico en mano, diseñamos el plan de acción.
            Puede ser: seguir adelante con garantías y un plan sólido,
            replantear el modelo de negocio, o tomar la valiente
            decisión de no seguir antes de perder tiempo y dinero.
          </p>
        </div>

      </div>

    </div>
  </section>


  <!-- ========================================================
       CTA FINAL — Con teléfono
       ======================================================== -->
  <section class="section section--alt">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">
            ¿Tienes una idea o un proyecto?
          </h2>
          <p class="cta-banner__subtitle">
            Infórmate sobre el Método HOST y los próximos talleres disponibles.
            La actividad puede acogerse a ayudas económicas.
          </p>
          <div class="cta-banner__actions">
            <a href="contacto.php" class="btn btn--primary btn--xl">
              Solicitar información
            </a>
            <a href="tel:<?= SITE_PHONE_E164 ?>" class="btn btn--outline-white btn--xl">
              📞 <?= SITE_PHONE ?>
            </a>
          </div>
          <p style="margin-top:var(--space-4);color:rgba(255,255,255,.55);font-size:var(--text-sm);">
            <?= SITE_HOURS_LONG ?>
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
