<?php
/**
 * CONSULTORÍA HOST — Departamento (S) Social
 * Archivo: servicios/social.php
 *
 * Responsabilidad social, redes sociales empresariales,
 * proyectos de impacto comunitario: Pobreza Energética,
 * Proyecto IRiS, Economía colaborativa, Empresa y feminismo.
 */

$depth            = 1;
$nav_active       = 'servicios';
$page_title       = 'Departamento (S) Social — Responsabilidad social y proyectos de impacto';
$page_description = 'El Departamento Social de HOST: redes sociales, pobreza energética, Proyecto IRiS, economía colaborativa y empresa feminista. Responsabilidad social real. Sevilla.';
$page_keywords    = 'responsabilidad social, redes sociales empresa, pobreza energética, economía colaborativa, feminismo empresarial, Sevilla';
$page_canonical   = 'https://consultoriahost.es/servicios/social';

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
        <span class="page-header__breadcrumb-current">Departamento (S) Social</span>
      </nav>
      <div style="display:flex;align-items:center;gap:var(--space-4);margin-bottom:var(--space-4);">
        <div style="
          width:64px;height:64px;border-radius:var(--radius-xl);
          background:var(--gradient-green);
          display:flex;align-items:center;justify-content:center;
          font-family:var(--font-display);font-weight:800;font-size:2rem;color:white;
        " aria-hidden="true">S</div>
        <span class="badge badge--green" style="font-size:var(--text-sm);">Departamento Social</span>
      </div>
      <h1 class="page-header__title">Impacto positivo en la sociedad.</h1>
      <p class="page-header__subtitle">
        Toda actividad tiene repercusión social.
        Eso no es opcional: es una <strong class="text-amber">responsabilidad</strong>
        que toda empresa debe asumir.
      </p>
    </div>
  </div>


  <!-- INTRO -->
  <section class="section section--white" aria-labelledby="s-intro-title">
    <div class="container container--narrow">
      <div class="reveal" style="text-align:center;">
        <span class="eyebrow">El pilar S de HOST</span>
        <h2 id="s-intro-title">
          Responsabilidad social:<br>
          <span class="text-green">de las palabras a los hechos</span>
        </h2>
        <p style="margin-top:var(--space-4);margin-inline:auto;">
          El Departamento Social de HOST nace de una convicción simple:
          <strong>ser socialmente responsable no es un adorno en la memoria anual de tu empresa</strong>.
          Es una forma concreta de actuar, de decidir, de comunicar y de relacionarse con el entorno.
        </p>
        <p style="margin-inline:auto;">
          HOST trabaja en dos planos: ayuda a las empresas a integrar la responsabilidad social
          en su ADN, y desarrolla proyectos sociales propios de impacto real en la comunidad.
        </p>
      </div>
    </div>
  </section>


  <!-- REDES SOCIALES -->
  <section class="section section--alt" aria-labelledby="rrss-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">Para empresas</span>
          <h2 id="rrss-title">
            Redes Sociales:<br>
            <span class="text-green">presencia con propósito</span>
          </h2>
          <p style="margin-top:var(--space-4);">
            Las redes sociales son hoy el espacio donde tu empresa existe para muchas personas.
            Tener presencia en ellas no es suficiente: hay que tener una <strong>presencia
            con estrategia, con autenticidad y con consistencia</strong>.
          </p>
          <p>
            HOST no gestiona redes sociales como una agencia de publicidad.
            Las gestiona como lo que son para una microempresa: <strong>una herramienta
            de conexión real con personas reales</strong>. Sin artificios, sin falsa
            viralidad, con voz propia y con coherencia entre lo que la empresa dice
            y lo que hace.
          </p>

          <div style="display:flex;flex-direction:column;gap:var(--space-3);margin-top:var(--space-6);">
            <?php
            $rrss_servicios = [
              ['clipboard','Auditoría de presencia actual','Dónde estás, cómo se te percibe y qué distancia hay entre eso y lo que quieres transmitir.'],
              ['map','Estrategia de contenidos','Qué publicar, cuándo, en qué tono y con qué objetivo. Sin improvisación.'],
              ['pencil','Creación de contenido','Textos, propuestas visuales y formatos adaptados a tu voz y tu sector.'],
              ['chart-bar','Análisis y optimización','Lo que funciona se potencia. Lo que no, se cambia. Con datos, no con intuición.'],
            ];
            foreach ($rrss_servicios as $rs): ?>
            <div style="
              display:flex;gap:var(--space-4);
              padding:var(--space-4);
              background:white;
              border-radius:var(--radius-lg);
              border:1px solid var(--color-border);
            ">
              <div style="flex-shrink:0;color:var(--color-blue);"><?= icon($rs[0], size: 22) ?></div>
              <div>
                <div style="font-weight:600;font-size:var(--text-sm);color:var(--color-text-primary);margin-bottom:2px;"><?= $rs[1] ?></div>
                <div style="font-size:var(--text-xs);color:var(--color-text-secondary);line-height:1.5;"><?= $rs[2] ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="reveal reveal--delay-1">
          <div style="
            background:var(--gradient-green);
            border-radius:var(--radius-2xl);
            padding:var(--space-10);
            text-align:center;
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 30% 70%, rgba(255,255,255,.12) 0%, transparent 50%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <div style="margin-bottom:var(--space-4);color:white;"><?= icon('smartphone', size: 48) ?></div>
              <h3 style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-2xl);color:white;margin-bottom:var(--space-4);
              ">¿Tu empresa tiene redes sociales o <em>sufre</em> redes sociales?</h3>
              <p style="color:rgba(255,255,255,.8);font-size:var(--text-base);max-width:none;margin-bottom:var(--space-6);">
                Hay una diferencia enorme entre publicar porque "hay que publicar"
                y publicar porque tienes algo que decir. HOST te ayuda a cruzar esa línea.
              </p>
              <a href="../contacto" class="btn btn--outline-white">
                Solicitar auditoría gratuita
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- PROYECTOS SOCIALES -->
  <section class="section section--white" aria-labelledby="proyectos-s-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Proyectos HOST de impacto social</span>
        <h2 id="proyectos-s-title">Donde la consultoría se convierte en acción</h2>
        <p>
          HOST no solo asesora sobre responsabilidad social: la practica.
          Estos son algunos de los proyectos sociales que HOST desarrolla
          o en los que participa activamente.
        </p>
      </div>

      <div class="grid grid-2 gap-6">

        <!-- Pobreza Energética -->
        <article class="card reveal" style="box-shadow:var(--shadow-card);border-top:4px solid var(--color-green);" aria-labelledby="pobreza-title">
          <div class="card__body">
            <div style="
              display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);
            ">
              <div style="color:var(--color-orange);"><?= icon('lightbulb', size: 40) ?></div>
              <span class="badge badge--green">Proyecto HOST</span>
            </div>
            <h3 id="pobreza-title" style="font-size:var(--text-2xl);margin-bottom:var(--space-4);color:var(--color-navy);">
              #PobrezaEnergética
            </h3>
            <p style="margin-bottom:var(--space-4);">
              La pobreza energética afecta a millones de hogares en España: personas que
              no pueden mantener una temperatura adecuada en su casa, que tienen que elegir
              entre comer o pagar la factura de la luz, que viven en condiciones insalubres
              por no poder permitirse la calefacción.
            </p>
            <p style="margin-bottom:var(--space-4);">
              HOST trabaja en soluciones concretas para este problema desde varios frentes:
              concienciación, acceso a ayudas disponibles, eficiencia energética y
              proyectos de energía sostenible de bajo coste.
            </p>
            <span class="badge badge--green">Impacto social</span>
            <span class="badge badge--green" style="margin-left:var(--space-2);">Medioambiental</span>
          </div>
        </article>

        <!-- Proyecto IRiS -->
        <article class="card reveal reveal--delay-1" style="box-shadow:var(--shadow-card);border-top:4px solid var(--color-blue);" aria-labelledby="iris-title">
          <div class="card__body">
            <div style="
              display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);
            ">
              <div style="color:var(--color-blue);"><?= icon('rainbow', size: 40) ?></div>
              <span class="badge badge--blue">Proyecto HOST</span>
            </div>
            <h3 id="iris-title" style="font-size:var(--text-2xl);margin-bottom:var(--space-4);color:var(--color-navy);">
              Proyecto IRiS
            </h3>
            <p style="margin-bottom:var(--space-4);">
              Un proyecto de reinserción social e integración diseñado para acompañar
              a personas en situación de exclusión o riesgo social en su camino hacia
              la autonomía personal, económica y social.
            </p>
            <p style="margin-bottom:var(--space-4);">
              IRiS combina orientación personal, formación práctica, acceso al mercado
              laboral y apoyo comunitario. Un proyecto que parte de la convicción de que
              toda persona tiene capacidad de cambiar su situación si cuenta con el
              acompañamiento adecuado.
            </p>
            <span class="badge badge--blue">Reinserción</span>
            <span class="badge badge--blue" style="margin-left:var(--space-2);">Integración social</span>
          </div>
        </article>

        <!-- Economía colaborativa -->
        <article class="card reveal reveal--delay-2" style="box-shadow:var(--shadow-card);border-top:4px solid var(--color-orange);" aria-labelledby="eco-colab-title">
          <div class="card__body">
            <div style="
              display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);
            ">
              <div style="color:var(--color-orange);"><?= icon('refresh', size: 40) ?></div>
              <span class="badge badge--orange">Economía</span>
            </div>
            <h3 id="eco-colab-title" style="font-size:var(--text-2xl);margin-bottom:var(--space-4);color:var(--color-navy);">
              Economía Colaborativa
            </h3>
            <p style="margin-bottom:var(--space-4);">
              La economía colaborativa no es una moda: es un modelo de relación
              económica más eficiente, más sostenible y más humano. HOST trabaja
              en proyectos de economía colaborativa que generan beneficios reales
              para personas y comunidades.
            </p>
            <p style="margin-bottom:var(--space-4);">
              Desde cooperativas de consumo hasta modelos de negocio compartido,
              pasando por plataformas de intercambio de servicios entre profesionales.
              La colaboración como estrategia de negocio.
            </p>
            <span class="badge badge--orange">Sostenible</span>
            <span class="badge badge--orange" style="margin-left:var(--space-2);">Innovación social</span>
          </div>
        </article>

        <!-- Empresa y feminismo -->
        <article class="card reveal reveal--delay-3" style="box-shadow:var(--shadow-card);border-top:4px solid var(--color-amber);" aria-labelledby="feminismo-title">
          <div class="card__body">
            <div style="
              display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);
            ">
              <div style="color:#B07800;"><?= icon('gender-female', size: 40) ?></div>
              <span class="badge badge--amber">Igualdad</span>
            </div>
            <h3 id="feminismo-title" style="font-size:var(--text-2xl);margin-bottom:var(--space-4);color:var(--color-navy);">
              Empresa y Feminismo
            </h3>
            <p style="margin-bottom:var(--space-4);">
              La igualdad de género en la empresa no es solo una cuestión ética:
              es una cuestión de negocio. Las empresas que integran la igualdad
              real en sus estructuras y procesos son más innovadoras, más resilientes
              y más rentables.
            </p>
            <p style="margin-bottom:var(--space-4);">
              HOST acompaña a empresas en el diseño e implementación de políticas
              de igualdad reales, planes de conciliación efectivos y culturas
              organizacionales donde todas las personas puedan desarrollarse
              plenamente.
            </p>
            <span class="badge badge--amber">Igualdad real</span>
            <span class="badge badge--amber" style="margin-left:var(--space-2);">RSC</span>
          </div>
        </article>

      </div>

    </div>
  </section>


  <!-- CTA -->
  <section class="section section--alt">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">¿Tu empresa quiere tener impacto social real?</h2>
          <p class="cta-banner__subtitle">
            Hablemos de cómo integrar la responsabilidad social en tu actividad
            de una forma auténtica y medible.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto" class="btn btn--primary btn--xl">Contactar</a>
            <a href="../que-es-host" class="btn btn--outline-white btn--xl">Conocer HOST</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
