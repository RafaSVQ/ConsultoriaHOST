<?php
/**
 * CONSULTORÍA HOST — Página: ¿Qué es HOST?
 * Archivo: que-es-host.php
 *
 * Describe el acrónimo H·O·S·T, su filosofía y los 4 pilares
 * con los enlaces a sus departamentos correspondientes.
 */

$depth            = 0;
$nav_active       = 'que-es-host';
$page_title       = '¿Qué es Consultoría HOST?';
$page_description = 'HOST significa Humana, Organizacional, Social y Tecnológica. Una consultoría integral con enfoque en el desarrollo sostenible de personas y empresas. Sevilla, España.';
$page_keywords    = 'qué es HOST, consultoría humana, organizacional, social, tecnológica, desarrollo sostenible, Sevilla';
$page_canonical   = 'https://consultoriahost.es/que-es-host';

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
        <span class="page-header__breadcrumb-current">¿Qué es HOST?</span>
      </nav>
      <h1 class="page-header__title">H · O · S · T</h1>
      <p class="page-header__subtitle">
        Cuatro letras. Cuatro compromisos. Una sola forma de trabajar:
        orientada a las <strong style="color:var(--color-amber);">personas</strong>
        y al <strong style="color:var(--color-amber);">desarrollo sostenible</strong>.
      </p>
    </div>
  </div>


  <!-- ========================================================
       SECCIÓN 1: INTRODUCCIÓN
       ======================================================== -->
  <section class="section section--white" aria-labelledby="intro-title">
    <div class="container">
      <div class="grid grid-2 gap-8" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">La filosofía HOST</span>
          <h2 id="intro-title">
            Más que un nombre,<br>
            <span class="text-orange">un método de trabajo</span>
          </h2>
          <p style="margin-top:var(--space-4);">
            HOST es un concepto de consultoría enfocado en <strong>solucionar de forma activa</strong>,
            siempre actuando acorde con un principio común básico que toda persona debería
            desarrollar en sus actividades diarias: el <strong>desarrollo sostenible</strong>.
          </p>
          <p>
            Siendo un conjunto de ideas globales, las actuaciones que se desarrollan son
            muy personalizadas. Se usan fórmulas <em>ad hoc</em> en todos los casos,
            considerando las situaciones particulares que presenta cada cliente, con sus
            propias circunstancias, costumbres y contexto.
          </p>
          <p>
            HOST no es una consultoría que rellena informes y se va.
            HOST <strong>actúa, resuelve y acompaña</strong> hasta que el objetivo está conseguido.
          </p>
        </div>

        <!-- Visual acrónimo animado -->
        <div class="reveal reveal--delay-1" aria-hidden="true">
          <div style="
            background: var(--gradient-hero);
            border-radius: var(--radius-2xl);
            padding: var(--space-10);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-4);
          ">
            <?php
            $letras = [
              ['letra'=>'H','color'=>'var(--color-amber)','palabra'=>'Humana'],
              ['letra'=>'O','color'=>'#7DD3FC','palabra'=>'Organizacional'],
              ['letra'=>'S','color'=>'#86EFAC','palabra'=>'Social'],
              ['letra'=>'T','color'=>'#FCA5A5','palabra'=>'Tecnológica'],
            ];
            foreach ($letras as $item): ?>
            <div class="hover-glass" style="
              background: rgba(255,255,255,.08);
              border: 1px solid rgba(255,255,255,.15);
              border-radius: var(--radius-xl);
              padding: var(--space-6) var(--space-5);
              text-align: center;
            "
            >
              <div style="
                font-family: var(--font-display);
                font-weight: 800;
                font-size: 3rem;
                line-height: 1;
                color: <?= $item['color'] ?>;
                margin-bottom: var(--space-2);
              "><?= $item['letra'] ?></div>
              <div style="
                font-size: var(--text-sm);
                font-weight: 600;
                color: white;
              "><?= $item['palabra'] ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 2: LOS 4 PILARES EN DETALLE
       ======================================================== -->
  <section class="section section--alt" aria-labelledby="pilares-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Los 4 pilares</span>
        <h2 id="pilares-title">Cada letra, un compromiso</h2>
        <p>
          Los cuatro pilares de HOST trabajan de forma <strong>complementaria y sinérgica</strong>.
          No son cuatro áreas separadas, sino cuatro perspectivas que se aplican
          de forma integrada en cada proyecto.
        </p>
      </div>

      <!-- Pilar H -->
      <article class="reveal" style="
        background: white;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        margin-bottom: var(--space-6);
        box-shadow: var(--shadow-card);
        border: 1px solid var(--color-border);
      " aria-labelledby="pilar-h-title">
        <div style="display:grid;grid-template-columns:200px 1fr;">
          <!-- Columna color -->
          <div style="
            background: var(--gradient-orange);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: var(--space-8);
            position: relative;
            overflow: hidden;
          ">
            <span style="
              position: absolute;
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 9rem;
              color: rgba(255,255,255,.1);
              line-height: 1;
              top: -0.1em;
              right: -0.1em;
              user-select: none;
            " aria-hidden="true">H</span>
            <span style="
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 4rem;
              color: white;
              position: relative;
              z-index: 1;
            ">H</span>
            <a href="servicios/humano.php" class="btn btn--outline-white btn--sm" style="margin-top:var(--space-4);position:relative;z-index:1;">
              Ver servicios
            </a>
          </div>
          <!-- Columna contenido -->
          <div style="padding: var(--space-8);">
            <span class="badge badge--orange" style="margin-bottom:var(--space-3);">Departamento Humano</span>
            <h3 id="pilar-h-title" style="font-size:var(--text-3xl);margin-bottom:var(--space-4);">
              Humana
            </h3>
            <p>
              Porque son <strong>las personas y su desarrollo</strong> lo que motiva la actividad
              profesional. Teniendo claro que, además, toda empresa no es más que un grupo
              de personas, y que, por tanto, el desarrollo de las personas y el de las empresas
              están profunda e inseparablemente unidos.
            </p>
            <p>
              El pilar Humano de HOST abarca todo lo relativo al desarrollo personal y profesional:
              orientación laboral, búsqueda de empleo, situaciones de burnout, apoyo a colectivos
              con necesidades específicas (mujeres comerciantes, madres solteras, mujeres rurales,
              personas mayores de 45 años en búsqueda de empleo...) y formación.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:var(--space-2);margin-top:var(--space-4);">
              <span class="badge badge--orange">Orientación laboral</span>
              <span class="badge badge--orange">Emprendimiento</span>
              <span class="badge badge--orange">#MujerRural</span>
              <span class="badge badge--orange">#MadresSolteras</span>
              <span class="badge badge--orange">Burnout</span>
              <span class="badge badge--orange">Empleo 3.0</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Pilar O -->
      <article class="reveal reveal--delay-1" style="
        background: white;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        margin-bottom: var(--space-6);
        box-shadow: var(--shadow-card);
        border: 1px solid var(--color-border);
      " aria-labelledby="pilar-o-title">
        <div style="display:grid;grid-template-columns:200px 1fr;">
          <div style="
            background: var(--gradient-card);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: var(--space-8);
            position: relative;
            overflow: hidden;
          ">
            <span style="
              position: absolute;
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 9rem;
              color: rgba(255,255,255,.1);
              line-height: 1;
              top: -0.1em;
              right: -0.1em;
              user-select: none;
            " aria-hidden="true">O</span>
            <span style="
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 4rem;
              color: white;
              position: relative;
              z-index: 1;
            ">O</span>
            <a href="servicios/organizacional.php" class="btn btn--outline-white btn--sm" style="margin-top:var(--space-4);position:relative;z-index:1;">
              Ver servicios
            </a>
          </div>
          <div style="padding: var(--space-8);">
            <span class="badge badge--blue" style="margin-bottom:var(--space-3);">Departamento Organizacional</span>
            <h3 id="pilar-o-title" style="font-size:var(--text-3xl);margin-bottom:var(--space-4);">
              Organizacional
            </h3>
            <p>
              Porque un <strong>desarrollo organizado ofrece más garantía de éxito</strong>.
              Optimizar los recursos, conseguir procesos altamente efectivos con grandes resultados
              aun con pocos recursos, son tareas que deben tomarse en serio y realizarse
              en colaboración con buenos profesionales.
            </p>
            <p>
              El pilar Organizacional trabaja con empresas de todos los tamaños (especialmente
              microempresas y pymes) para mejorar su estructura, sus procesos y su rentabilidad.
              Incluye el servicio de <strong>Interim Management</strong>: dirección temporal
              integrada en la empresa para resolver situaciones críticas desde dentro.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:var(--space-2);margin-top:var(--space-4);">
              <span class="badge badge--blue">Interim Management</span>
              <span class="badge badge--blue">Outplacement</span>
              <span class="badge badge--blue">Optimización de procesos</span>
              <span class="badge badge--blue">Atención al cliente</span>
              <span class="badge badge--blue">Servicios empresariales</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Pilar S -->
      <article class="reveal reveal--delay-2" style="
        background: white;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        margin-bottom: var(--space-6);
        box-shadow: var(--shadow-card);
        border: 1px solid var(--color-border);
      " aria-labelledby="pilar-s-title">
        <div style="display:grid;grid-template-columns:200px 1fr;">
          <div style="
            background: var(--gradient-green);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: var(--space-8);
            position: relative;
            overflow: hidden;
          ">
            <span style="
              position: absolute;
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 9rem;
              color: rgba(255,255,255,.1);
              line-height: 1;
              top: -0.1em;
              right: -0.1em;
              user-select: none;
            " aria-hidden="true">S</span>
            <span style="
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 4rem;
              color: white;
              position: relative;
              z-index: 1;
            ">S</span>
            <a href="servicios/social.php" class="btn btn--outline-white btn--sm" style="margin-top:var(--space-4);position:relative;z-index:1;">
              Ver servicios
            </a>
          </div>
          <div style="padding: var(--space-8);">
            <span class="badge badge--green" style="margin-bottom:var(--space-3);">Departamento Social</span>
            <h3 id="pilar-s-title" style="font-size:var(--text-3xl);margin-bottom:var(--space-4);">
              Social
            </h3>
            <p>
              Porque <strong>todas las actividades tienen repercusiones sociales</strong>,
              y eso obliga a considerar la responsabilidad social en toda actividad.
              Una empresa, sea cual sea su objetivo y su tamaño, debe ser
              una empresa socialmente responsable.
            </p>
            <p>
              El pilar Social de HOST incluye estrategia en redes sociales, proyectos
              de impacto comunitario (pobreza energética, economía colaborativa, igualdad
              de género en la empresa) y el <strong>Proyecto IRiS</strong>, una iniciativa
              de reinserción e impacto social.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:var(--space-2);margin-top:var(--space-4);">
              <span class="badge badge--green">Redes Sociales</span>
              <span class="badge badge--green">Pobreza energética</span>
              <span class="badge badge--green">Proyecto IRiS</span>
              <span class="badge badge--green">Economía colaborativa</span>
              <span class="badge badge--green">Empresa y feminismo</span>
            </div>
          </div>
        </div>
      </article>

      <!-- Pilar T -->
      <article class="reveal reveal--delay-3" style="
        background: white;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        margin-bottom: var(--space-6);
        box-shadow: var(--shadow-card);
        border: 1px solid var(--color-border);
      " aria-labelledby="pilar-t-title">
        <div style="display:grid;grid-template-columns:200px 1fr;">
          <div style="
            background: linear-gradient(135deg, #1E293B, #334155);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: var(--space-8);
            position: relative;
            overflow: hidden;
          ">
            <span style="
              position: absolute;
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 9rem;
              color: rgba(255,255,255,.1);
              line-height: 1;
              top: -0.1em;
              right: -0.1em;
              user-select: none;
            " aria-hidden="true">T</span>
            <span style="
              font-family: var(--font-display);
              font-weight: 800;
              font-size: 4rem;
              color: white;
              position: relative;
              z-index: 1;
            ">T</span>
            <a href="servicios/tecnologico.php" class="btn btn--outline-white btn--sm" style="margin-top:var(--space-4);position:relative;z-index:1;">
              Ver servicios
            </a>
          </div>
          <div style="padding: var(--space-8);">
            <span class="badge badge--navy" style="margin-bottom:var(--space-3);">Departamento Técnico</span>
            <h3 id="pilar-t-title" style="font-size:var(--text-3xl);margin-bottom:var(--space-4);">
              Tecnológica
            </h3>
            <p>
              Porque <strong>con tecnología al servicio del desarrollo humano, todo fluye mejor</strong>.
              Y si además se utiliza con fines humanos, de una forma organizada y con
              responsabilidad social, es una de las mejores herramientas para el crecimiento.
            </p>
            <p>
              El pilar Técnico de HOST incluye proyectos de ingeniería medioambiental (I+D+i),
              depuración y desalación de aguas, tratamiento de residuos, generación de energía
              sostenible y seguridad informática. Proyectos que generan riqueza, empleo
              y beneficios para el medioambiente.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:var(--space-2);margin-top:var(--space-4);">
              <span class="badge badge--navy">I+D+i medioambiental</span>
              <span class="badge badge--navy">Ingeniería sostenible</span>
              <span class="badge badge--navy">Energía renovable</span>
              <span class="badge badge--navy">Seguridad informática</span>
            </div>
          </div>
        </div>
      </article>

    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 3: DESARROLLO SOSTENIBLE — Principio core
       ======================================================== -->
  <section class="section section--white" aria-labelledby="sostenible-title">
    <div class="container container--narrow">
      <div class="reveal" style="text-align:center;">
        <span class="eyebrow">El principio que todo lo une</span>
        <h2 id="sostenible-title">Desarrollo sostenible</h2>
      </div>

      <div class="reveal reveal--delay-1" style="
        margin-top: var(--space-10);
        background: var(--color-green-light);
        border: 1px solid var(--color-green);
        border-radius: var(--radius-2xl);
        padding: var(--space-10);
        text-align: center;
      ">
        <div style="
          font-family: var(--font-display);
          font-size: var(--text-2xl);
          font-weight: 700;
          color: var(--color-green);
          font-style: italic;
          line-height: 1.5;
          margin-bottom: var(--space-6);
        ">
          "HOST es un concepto de consultoría enfocada en solucionar de forma activa,
          siempre actuando acorde con el principio del desarrollo sostenible."
        </div>
        <p style="color:var(--color-green);font-weight:600;">
          — Filosofía Consultoría HOST
        </p>
      </div>

      <div style="margin-top:var(--space-8);">
        <p class="reveal" style="margin-inline:auto;">
          El desarrollo sostenible no es una moda ni un adorno en los informes de HOST.
          Es el criterio que guía <strong>cada decisión, cada solución, cada proyecto</strong>.
          Una solución que genera un nuevo problema no es una solución: es una trampa.
        </p>
        <p class="reveal reveal--delay-1" style="margin-inline:auto;">
          Por eso en HOST hablamos del concepto <strong>"solución-solución"</strong>:
          aseguramos que la solución ofrecida es estable en el tiempo, no generará
          problemas en otro sitio ni en otro momento, y si algo colateral genera,
          son siempre beneficios: generación de empleo, de riqueza, de salud ambiental,
          de regeneración medioambiental...
        </p>
      </div>
    </div>
  </section>


  <!-- ========================================================
       CTA FINAL
       ======================================================== -->
  <section class="section section--alt">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">¿Quieres saber si HOST puede ayudarte?</h2>
          <p class="cta-banner__subtitle">
            Cuéntanos tu situación. La primera consulta es sin compromiso.
          </p>
          <div class="cta-banner__actions">
            <a href="contacto.php" class="btn btn--primary btn--xl">Contactar</a>
            <a href="consultoria.php" class="btn btn--outline-white btn--xl">Ver la Consultoría 3.0</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
