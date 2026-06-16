<?php
/**
 * index.php — Página de inicio
 * Usa los includes compartidos: head.php, nav.php, footer.php
 */
$depth            = 0;
$nav_active       = 'inicio';
$page_full_title  = 'Consultoría HOST — Consultoría e Ingeniería 3.0 para empresas y personas';
$page_description = 'Consultoría HOST: soluciones reales para microempresas, autónomos y personas. Consultoría Humana, Organizacional, Social y Tecnológica. Más de 40 años de experiencia. Sevilla, España.';
$page_keywords    = 'consultoría, microempresa, pyme, autónomos, emprendimiento, Sevilla, España, método HOST, consultoría 3.0, empleo, medioambiente, ingeniería sostenible';
$page_canonical   = 'https://consultoriahost.es/';

// Cargar config antes de usarla (head.php también hace require_once, no se duplica)
require_once __DIR__ . '/bootstrap.php';
require_once APP_ROOT . '/config/site.php';

// Schema.org LocalBusiness — generado dinámicamente desde config/site.php
// Si cambia el teléfono, horario u otros datos en site.php, se actualiza solo aquí.
$page_extra_head = site_schema_org();

include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>
  <main id="main-content">

    <!-- ========================================================
         SECCIÓN 1: HERO
         ======================================================== -->
    <section class="hero" aria-labelledby="hero-title">
      <div class="container hero__inner">

        <!-- Contenido principal hero -->
        <div class="hero__content">
          <span class="hero__eyebrow" aria-label="Consultoría 3.0">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" aria-hidden="true">
              <circle cx="6" cy="6" r="6"/>
            </svg>
            Consultoría &amp; Ingeniería 3.0
          </span>

          <h1 class="hero__title" id="hero-title">
            Soluciones reales.<br>
            <span class="hero__title-accent">Para personas y empresas.</span>
          </h1>

          <p class="hero__subtitle">
            En Consultoría HOST no llenamos cajones de informes.
            Salimos al campo, actuamos <strong>codo con codo</strong> con nuestros clientes
            y generamos resultados. Más de <strong>40 años</strong> de experiencia
            resolviendo lo que otros solo analizan.
          </p>

          <div class="hero__actions">
            <a href="contacto.php" class="btn btn--primary btn--lg">
              Habla con nosotros
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <path d="M4 10h12M10 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
            <a href="consultoria.php" class="btn btn--outline-white btn--lg">
              Conoce la consultoría
            </a>
          </div>
        </div>

        <!-- Panel HOST (escritorio) -->
        <div class="hero__panel" aria-hidden="true">
          <div class="hero__panel-card">
            <div class="hero__panel-letter">H</div>
            <div class="hero__panel-word">Humana</div>
            <div class="hero__panel-desc">Las personas son el centro de todo proyecto</div>
          </div>
          <div class="hero__panel-card">
            <div class="hero__panel-letter">O</div>
            <div class="hero__panel-word">Organizacional</div>
            <div class="hero__panel-desc">Procesos efectivos con mínimos recursos</div>
          </div>
          <div class="hero__panel-card">
            <div class="hero__panel-letter">S</div>
            <div class="hero__panel-word">Social</div>
            <div class="hero__panel-desc">Responsabilidad social en toda actividad</div>
          </div>
          <div class="hero__panel-card">
            <div class="hero__panel-letter">T</div>
            <div class="hero__panel-word">Tecnológica</div>
            <div class="hero__panel-desc">Tecnología e ingeniería al servicio humano</div>
          </div>
        </div>

      </div>

      <!-- Indicador scroll -->
      <div class="hero__scroll" aria-hidden="true">
        <span class="hero__scroll-text">Descubrir</span>
        <svg class="hero__scroll-icon" viewBox="0 0 24 24" fill="none">
          <path d="M12 5v14M6 13l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 2: STATS — Datos que generan confianza
         ======================================================== -->
    <section class="stats" aria-label="Datos clave de Consultoría HOST">
      <div class="container">
        <div class="stats__grid">

          <div class="stat reveal">
            <div class="stat__number">
              <span data-target="40" data-suffix="+">0+</span>
            </div>
            <div class="stat__label">Años de experiencia acumulada</div>
          </div>

          <div class="stat reveal reveal--delay-1">
            <div class="stat__number">
              <span data-target="4">0</span>
              <span class="stat__accent" style="font-size:1.5rem;vertical-align:super;">pilares</span>
            </div>
            <div class="stat__label">Departamentos HOST: H·O·S·T</div>
          </div>

          <div class="stat reveal reveal--delay-2">
            <div class="stat__number">
              <span data-target="3">0</span>
              <span class="stat__accent">pasos</span>
            </div>
            <div class="stat__label">Método HOST de evaluación de viabilidad</div>
          </div>

          <div class="stat reveal reveal--delay-3">
            <div class="stat__number">
              <span data-target="100" data-suffix="%">0%</span>
            </div>
            <div class="stat__label">Orientado a resultados reales</div>
          </div>

        </div>
      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 3: PILARES H·O·S·T — Identidad de la empresa
         ======================================================== -->
    <section class="section section--alt" id="que-es-host" aria-labelledby="host-pillars-title">
      <div class="container">

        <div class="section-header reveal">
          <span class="eyebrow">Nuestra identidad</span>
          <h2 id="host-pillars-title">
            ¿Qué significa <span class="text-orange">HOST</span>?
          </h2>
          <p>
            HOST no es solo un nombre, es un método de trabajo. Cada letra define
            un área de actuación que, juntas, conforman una consultoría integral
            para el <strong>desarrollo sostenible</strong> de personas y organizaciones.
          </p>
        </div>

        <div class="host-pillars reveal">

          <!-- H — Humana -->
          <div class="host-pillar host-pillar--h">
            <span class="host-pillar__bg-letter" aria-hidden="true">H</span>
            <span class="host-pillar__letter" aria-hidden="true">H</span>
            <h3 class="host-pillar__title">Humana</h3>
            <p class="host-pillar__desc">
              Las personas y su desarrollo son el motor de toda actividad.
              Toda empresa no es más que un grupo de personas,
              y el desarrollo de unas y otras están profundamente unidos.
            </p>
          </div>

          <!-- O — Organizacional -->
          <div class="host-pillar host-pillar--o">
            <span class="host-pillar__bg-letter" aria-hidden="true">O</span>
            <span class="host-pillar__letter" aria-hidden="true">O</span>
            <h3 class="host-pillar__title">Organizacional</h3>
            <p class="host-pillar__desc">
              Un desarrollo organizado ofrece más garantía de éxito.
              Procesos altamente efectivos con grandes resultados,
              incluso con pocos recursos.
            </p>
          </div>

          <!-- S — Social -->
          <div class="host-pillar host-pillar--s">
            <span class="host-pillar__bg-letter" aria-hidden="true">S</span>
            <span class="host-pillar__letter" aria-hidden="true">S</span>
            <h3 class="host-pillar__title">Social</h3>
            <p class="host-pillar__desc">
              Toda actividad tiene repercusión social. La responsabilidad
              social no es optativa; es una obligación que toda empresa
              debe asumir sin importar su tamaño o sector.
            </p>
          </div>

          <!-- T — Tecnológica -->
          <div class="host-pillar host-pillar--t">
            <span class="host-pillar__bg-letter" aria-hidden="true">T</span>
            <span class="host-pillar__letter" aria-hidden="true">T</span>
            <h3 class="host-pillar__title">Tecnológica</h3>
            <p class="host-pillar__desc">
              La tecnología y la ingeniería al servicio del desarrollo humano
              y sostenible. Cuando se usa con cabeza y propósito,
              es la mejor herramienta de crecimiento.
            </p>
          </div>

        </div>

        <div class="text-center" style="margin-top:var(--space-10);">
          <a href="que-es-host.php" class="btn btn--secondary">
            Conoce HOST en profundidad
          </a>
        </div>

      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 4: SERVICIOS — Los 4 departamentos
         ======================================================== -->
    <section class="section section--white" id="servicios" aria-labelledby="servicios-title">
      <div class="container">

        <div class="section-header reveal">
          <span class="eyebrow">Qué hacemos</span>
          <h2 id="servicios-title">Nuestros departamentos</h2>
          <p>
            Cuatro áreas de actuación que trabajan de forma complementaria,
            sinérgica e integrada para dar respuesta a cualquier situación,
            desde una persona en búsqueda de empleo hasta una empresa que
            necesita un giro estratégico.
          </p>
        </div>

        <div class="grid grid-2 gap-6">

          <!-- Dpto. H — Humano -->
          <article class="service-card service-card--h reveal" aria-labelledby="service-h-title">
            <span class="service-card__bg" aria-hidden="true">H</span>
            <div class="service-card__icon" aria-hidden="true">
              <span class="service-card__letter">H</span>
            </div>
            <h3 class="service-card__title" id="service-h-title">
              Departamento Humano
            </h3>
            <p class="service-card__desc">
              Orientado a las personas: su desarrollo, bienestar y
              crecimiento profesional, personal y social.
            </p>
            <ul class="service-card__list" aria-label="Servicios del departamento Humano">
              <li class="service-card__list-item">Optimización de la actividad profesional</li>
              <li class="service-card__list-item">Apoyo a la mujer comerciante y empresaria</li>
              <li class="service-card__list-item">Programas #MadresSolteras y #MujerRural</li>
              <li class="service-card__list-item">Personas en situación de quemado (burnout)</li>
              <li class="service-card__list-item">Empleo 3.0 y reinserción laboral</li>
            </ul>
            <a href="servicios/humano.php" class="service-card__link">
              Ver todos los servicios
              <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </a>
          </article>

          <!-- Dpto. O — Organizacional -->
          <article class="service-card service-card--o reveal reveal--delay-1" aria-labelledby="service-o-title">
            <span class="service-card__bg" aria-hidden="true">O</span>
            <div class="service-card__icon" aria-hidden="true">
              <span class="service-card__letter">O</span>
            </div>
            <h3 class="service-card__title" id="service-o-title">
              Departamento Organizacional
            </h3>
            <p class="service-card__desc">
              Para empresas y organizaciones que necesitan
              optimizar procesos, reorientarse o dar un salto cualitativo.
            </p>
            <ul class="service-card__list" aria-label="Servicios del departamento Organizacional">
              <li class="service-card__list-item">Recolocación y Outplacement</li>
              <li class="service-card__list-item">Servicios empresariales integrales</li>
              <li class="service-card__list-item">Atención y fidelización de clientes</li>
              <li class="service-card__list-item">Interim Management (dirección temporal)</li>
              <li class="service-card__list-item">Grandes Soluciones para empresas</li>
            </ul>
            <a href="servicios/organizacional.php" class="service-card__link">
              Ver todos los servicios
              <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </a>
          </article>

          <!-- Dpto. S — Social -->
          <article class="service-card service-card--s reveal reveal--delay-2" aria-labelledby="service-s-title">
            <span class="service-card__bg" aria-hidden="true">S</span>
            <div class="service-card__icon" aria-hidden="true">
              <span class="service-card__letter">S</span>
            </div>
            <h3 class="service-card__title" id="service-s-title">
              Departamento Social
            </h3>
            <p class="service-card__desc">
              Responsabilidad social, redes sociales y proyectos
              de impacto positivo en la comunidad.
            </p>
            <ul class="service-card__list" aria-label="Servicios del departamento Social">
              <li class="service-card__list-item">Estrategia en redes sociales</li>
              <li class="service-card__list-item">Proyectos Sociales HOST</li>
              <li class="service-card__list-item">Pobreza energética — Proyecto HOST</li>
              <li class="service-card__list-item">Proyecto IRiS</li>
              <li class="service-card__list-item">Economía colaborativa y feminismo empresarial</li>
            </ul>
            <a href="servicios/social.php" class="service-card__link">
              Ver todos los servicios
              <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </a>
          </article>

          <!-- Dpto. T — Técnico -->
          <article class="service-card service-card--t reveal reveal--delay-3" aria-labelledby="service-t-title">
            <span class="service-card__bg" aria-hidden="true">T</span>
            <div class="service-card__icon" aria-hidden="true">
              <span class="service-card__letter">T</span>
            </div>
            <h3 class="service-card__title" id="service-t-title">
              Departamento Técnico
            </h3>
            <p class="service-card__desc">
              Ingeniería sostenible, proyectos medioambientales
              y tecnología aplicada al desarrollo responsable.
            </p>
            <ul class="service-card__list" aria-label="Servicios del departamento Técnico">
              <li class="service-card__list-item">Proyectos medioambientales I+D+i</li>
              <li class="service-card__list-item">Depuración de aguas y desalación</li>
              <li class="service-card__list-item">Reciclaje y tratamiento de residuos</li>
              <li class="service-card__list-item">Generación de energía sostenible</li>
              <li class="service-card__list-item">Seguridad informática</li>
            </ul>
            <a href="servicios/tecnologico.php" class="service-card__link">
              Ver todos los servicios
              <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </a>
          </article>

        </div>
      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 5: POR QUÉ HOST — Diferenciadores
         ======================================================== -->
    <section class="section section--alt" aria-labelledby="why-host-title">
      <div class="container">
        <div class="why-host">

          <!-- Contenido -->
          <div class="why-host__content reveal">
            <span class="eyebrow">Por qué elegirnos</span>
            <h2 id="why-host-title">
              La consultoría que <span class="text-orange">actúa</span>,<br>
              no solo que aconseja.
            </h2>
            <p style="margin-top:var(--space-4);">
              Hay muchas consultorías que generan informes excelentes.
              Nosotros generamos <strong>resultados</strong>. Salimos de nuestros
              despachos y trabajamos codo con codo con nuestros clientes
              hasta que el objetivo está conseguido.
            </p>

            <ul class="why-host__list">

              <li class="why-item">
                <div class="why-item__icon" aria-hidden="true">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M9 11l3 3 6-6M5 10a5 5 0 100 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="5" cy="10" r="4" stroke="currentColor" stroke-width="1.5"/>
                  </svg>
                </div>
                <div class="why-item__content">
                  <div class="why-item__title">Solución-solución (sin daños colaterales)</div>
                  <p class="why-item__desc">
                    Nuestras soluciones son estables en el tiempo y no
                    generan nuevos problemas. Si algo colateral generan,
                    son beneficios.
                  </p>
                </div>
              </li>

              <li class="why-item">
                <div class="why-item__icon" aria-hidden="true">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M10 2L12.5 7 18 8l-4 4 1 5.5-5-2.5L5 17.5 6 12 2 8l5.5-1z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="why-item__content">
                  <div class="why-item__title">Más de 40 años de experiencia real</div>
                  <p class="why-item__desc">
                    Conocimiento multidisciplinar acumulado, verificado
                    y aplicado en proyectos reales. No en libros.
                  </p>
                </div>
              </li>

              <li class="why-item">
                <div class="why-item__icon" aria-hidden="true">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M2 10h16M10 2v16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="1.5"/>
                  </svg>
                </div>
                <div class="why-item__content">
                  <div class="why-item__title">Costes y tiempos ajustados</div>
                  <p class="why-item__desc">
                    Para microempresas y autónomos, el tiempo y el dinero
                    son limitados. Trabajamos con la máxima eficiencia,
                    siempre.
                  </p>
                </div>
              </li>

              <li class="why-item">
                <div class="why-item__icon" aria-hidden="true">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M6 8h8M6 12h5M5 4h10a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </div>
                <div class="why-item__content">
                  <div class="why-item__title">Fórmulas 100% personalizadas</div>
                  <p class="why-item__desc">
                    No existen recetas genéricas. Cada cliente tiene su
                    situación particular y merece una respuesta hecha
                    a medida.
                  </p>
                </div>
              </li>

            </ul>
          </div>

          <!-- Visual decorativo -->
          <div class="why-host__visual reveal reveal--delay-2">
            <div class="why-host__visual-main">
              <div class="why-host__host-word" aria-hidden="true">HOST</div>
            </div>
            <div class="why-host__badge">
              <div class="why-host__badge-number">+40</div>
              <div class="why-host__badge-label">años de<br>experiencia</div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 6: MÉTODO HOST — 3 pasos
         ======================================================== -->
    <section class="section section--white" aria-labelledby="metodo-title">
      <div class="container">

        <div class="section-header reveal">
          <span class="eyebrow">Método HOST</span>
          <h2 id="metodo-title">Evaluamos la viabilidad de tu proyecto en 3 pasos</h2>
          <p>
            El <strong>Método HOST</strong> es un método de evaluación 3.0:
            dinámico, ameno y muy instructivo. Diseñado para verificar
            las posibilidades de éxito de un negocio antes de arriesgar
            préstamos, contratos y relaciones personales.
          </p>
        </div>

        <div class="metodo-steps">

          <div class="metodo-step reveal">
            <div class="metodo-step__number" aria-hidden="true">1</div>
            <h3 class="metodo-step__title">Identificación</h3>
            <p class="metodo-step__desc">
              Analizamos juntos la situación actual: el proyecto,
              el mercado, el emprendedor y el entorno.
              Ponemos nombre a los puntos fuertes y débiles.
            </p>
          </div>

          <div class="metodo-step reveal reveal--delay-1">
            <div class="metodo-step__number" aria-hidden="true">2</div>
            <h3 class="metodo-step__title">Evaluación</h3>
            <p class="metodo-step__desc">
              Aplicamos el Método HOST para verificar la viabilidad
              real del proyecto. Sin suavizar la realidad.
              Con criterio profesional objetivo.
            </p>
          </div>

          <div class="metodo-step reveal reveal--delay-2">
            <div class="metodo-step__number" aria-hidden="true">3</div>
            <h3 class="metodo-step__title">Planificación</h3>
            <p class="metodo-step__desc">
              Con los datos en mano, diseñamos el plan de acción:
              seguir adelante con garantías, replantear o
              evitar a tiempo una ruina anunciada.
            </p>
          </div>

        </div>

        <div class="text-center" style="margin-top:var(--space-12);">
          <a href="metodo-host.php" class="btn btn--primary btn--lg">
            Descubrir el Método HOST completo
          </a>
        </div>

      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 7: EMPLEO 3.0 — Enlace destacado
         ======================================================== -->
    <section class="section section--alt" aria-labelledby="empleo-title">
      <div class="container">
        <div class="grid grid-2 gap-8" style="align-items:center;">

          <div class="reveal">
            <span class="eyebrow">Empleo 3.0</span>
            <h2 id="empleo-title">
              El empleo también<br>
              merece una revolución.
            </h2>
            <p style="margin-top:var(--space-4);margin-bottom:var(--space-6);">
              El empleo ha cambiado. Las formas de buscarlo, de conseguirlo
              y de gestionarlo también. En HOST acompañamos tanto a
              <strong>personas en búsqueda de empleo</strong> como a
              <strong>empresas</strong> que necesitan el talento adecuado,
              con una visión 3.0: humana, organizada, social y tecnológica.
            </p>
            <div class="flex gap-4" style="flex-wrap:wrap;">
              <a href="empleo.php" class="btn btn--primary">Ver Empleo 3.0</a>
              <a href="empleo.php#ofertas" class="btn btn--outline">Ofertas de empleo</a>
            </div>
          </div>

          <div class="reveal reveal--delay-1">
            <div class="grid grid-2 gap-4">

              <div class="card card--accent-orange" style="box-shadow:var(--shadow-card);">
                <div class="card__body">
                  <div style="font-size:2rem;margin-bottom:var(--space-2);" aria-hidden="true">👤</div>
                  <h4 style="font-size:var(--text-base);margin-bottom:var(--space-2);">Para personas</h4>
                  <p style="font-size:var(--text-sm);margin-bottom:var(--space-3);">Taller de empleo, orientación y reinserción profesional.</p>
                  <a href="empleo.php#personas" class="btn btn--ghost btn--sm">Ver más</a>
                </div>
              </div>

              <div class="card card--accent-blue" style="box-shadow:var(--shadow-card);">
                <div class="card__body">
                  <div style="font-size:2rem;margin-bottom:var(--space-2);" aria-hidden="true">🏢</div>
                  <h4 style="font-size:var(--text-base);margin-bottom:var(--space-2);">Para empresas</h4>
                  <p style="font-size:var(--text-sm);margin-bottom:var(--space-3);">Selección, outplacement y colaboraciones.</p>
                  <a href="empleo.php#empresas" class="btn btn--ghost btn--sm">Ver más</a>
                </div>
              </div>

              <div class="card card--accent-green" style="box-shadow:var(--shadow-card);">
                <div class="card__body">
                  <div style="font-size:2rem;margin-bottom:var(--space-2);" aria-hidden="true">🌱</div>
                  <h4 style="font-size:var(--text-base);margin-bottom:var(--space-2);">Emprender</h4>
                  <p style="font-size:var(--text-sm);margin-bottom:var(--space-3);">Del concepto a la realidad con garantías.</p>
                  <a href="empleo.php#emprender" class="btn btn--ghost btn--sm">Ver más</a>
                </div>
              </div>

              <div class="card card--accent-navy" style="box-shadow:var(--shadow-card);">
                <div class="card__body">
                  <div style="font-size:2rem;margin-bottom:var(--space-2);" aria-hidden="true">🤝</div>
                  <h4 style="font-size:var(--text-base);margin-bottom:var(--space-2);">Colaboraciones</h4>
                  <p style="font-size:var(--text-sm);margin-bottom:var(--space-3);">Únete a la red HOST y multiplica tu impacto.</p>
                  <a href="empleo.php#colaboraciones" class="btn btn--ghost btn--sm">Ver más</a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 8: CTA BANNER — Llamada a la acción principal
         ======================================================== -->
    <section class="section section--white" aria-labelledby="cta-main-title">
      <div class="container">
        <div class="cta-banner reveal">
          <div class="cta-banner__inner">
            <h2 class="cta-banner__title" id="cta-main-title">
              ¿Listo para que algo cambie?
            </h2>
            <p class="cta-banner__subtitle">
              Una llamada o un mensaje es suficiente para empezar.
              Sin compromisos. Sin papeleos. Solo soluciones.
            </p>
            <div class="cta-banner__actions">
              <a href="contacto.php" class="btn btn--primary btn--xl">
                Contactar ahora
              </a>
              <a href="tel:+34954182508" class="btn btn--outline-white btn--xl">
                📞 95 418 25 08
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 9: PROYECTOS MEDIOAMBIENTALES — Highlight
         ======================================================== -->
    <section class="section section--alt" aria-labelledby="medioambiente-title">
      <div class="container">

        <div class="section-header reveal">
          <span class="eyebrow">Ingeniería sostenible</span>
          <h2 id="medioambiente-title">Proyectos medioambientales</h2>
          <p>
            Consultoría HOST dispone de proyectos de I+D+i listos para
            implantarse en cualquier punto del país. Proyectos que generan
            riqueza, empleo y beneficios para el medioambiente,
            no a su costa.
          </p>
        </div>

        <div class="grid grid-3 gap-6">

          <article class="card reveal" aria-labelledby="env-1-title">
            <div class="card__body">
              <div style="font-size:2.5rem;margin-bottom:var(--space-3);" aria-hidden="true">💧</div>
              <h3 class="text-navy" id="env-1-title" style="font-size:var(--text-xl);margin-bottom:var(--space-3);">
                Depuración y desalación de aguas
              </h3>
              <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);">
                Proyectos de depuración de aguas residuales y desalación
                para zonas costeras e insulares, rentables
                y sin impacto medioambiental negativo.
              </p>
              <span class="badge badge--blue">I+D+i</span>
            </div>
          </article>

          <article class="card reveal reveal--delay-1" aria-labelledby="env-2-title">
            <div class="card__body">
              <div style="font-size:2.5rem;margin-bottom:var(--space-3);" aria-hidden="true">♻️</div>
              <h3 class="text-navy" id="env-2-title" style="font-size:var(--text-xl);margin-bottom:var(--space-3);">
                Reciclaje y residuos
              </h3>
              <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);">
                Tratamiento de residuos urbanos, industriales y sanitarios.
                Caso Seseña: retirada inmediata y gratuita del mayor
                vertedero de neumáticos de Europa.
              </p>
              <span class="badge badge--green">Sostenible</span>
            </div>
          </article>

          <article class="card reveal reveal--delay-2" aria-labelledby="env-3-title">
            <div class="card__body">
              <div style="font-size:2.5rem;margin-bottom:var(--space-3);" aria-hidden="true">⚡</div>
              <h3 class="text-navy" id="env-3-title" style="font-size:var(--text-xl);margin-bottom:var(--space-3);">
                Energía sostenible
              </h3>
              <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);">
                Generación de energía, eficiencia y recuperación de recursos.
                Calefacción y ACS de máxima eficiencia con patentes españolas.
              </p>
              <span class="badge badge--amber">Energía</span>
            </div>
          </article>

        </div>

        <div class="text-center" style="margin-top:var(--space-10);">
          <a href="servicios/tecnologico.php" class="btn btn--secondary">
            Ver proyectos medioambientales
          </a>
        </div>

      </div>
    </section>


    <!-- ========================================================
         SECCIÓN 10: FORMULARIO DE CONTACTO RÁPIDO
         ======================================================== -->
    <section class="section section--white" id="contacto-rapido" aria-labelledby="contact-quick-title">
      <div class="container container--narrow">

        <div class="section-header reveal">
          <span class="eyebrow">Contacto</span>
          <h2 id="contact-quick-title">Escríbenos, te respondemos</h2>
          <p>
            Cuéntanos en qué podemos ayudarte. Sin compromisos.
            O si lo prefieres, llámanos directamente:
            <a href="tel:+34954182508" style="color:var(--color-orange);font-weight:600;">95 418 25 08</a>
            (L-V, 9-14h y 16-19h).
          </p>
        </div>

        <div class="contact-form reveal">

          <!-- Mensaje de éxito (oculto por defecto) -->
          <div class="form-success" id="form-success" role="alert">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
              <circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="1.5"/>
              <path d="M6 10l3 3 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            ¡Mensaje enviado correctamente! Te contactaremos lo antes posible.
          </div>

          <form id="contact-form" action="api/contacto.php" method="POST" novalidate>

            <!-- Honeypot antispam (oculto) -->
            <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

            <div class="contact-form__grid">

              <div class="form-group">
                <label class="form-label" for="nombre">Nombre <span aria-hidden="true">*</span></label>
                <input
                  type="text"
                  id="nombre"
                  name="nombre"
                  class="form-input"
                  placeholder="Tu nombre"
                  autocomplete="given-name"
                  required
                  aria-required="true">
              </div>

              <div class="form-group">
                <label class="form-label" for="apellidos">Apellidos</label>
                <input
                  type="text"
                  id="apellidos"
                  name="apellidos"
                  class="form-input"
                  placeholder="Tus apellidos"
                  autocomplete="family-name">
              </div>

              <div class="form-group">
                <label class="form-label" for="telefono">Teléfono</label>
                <input
                  type="tel"
                  id="telefono"
                  name="telefono"
                  class="form-input"
                  placeholder="Ej: 654 321 098"
                  autocomplete="tel">
              </div>

              <div class="form-group">
                <label class="form-label" for="email">Email <span aria-hidden="true">*</span></label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-input"
                  placeholder="tu@email.com"
                  autocomplete="email"
                  required
                  aria-required="true">
              </div>

              <div class="form-group contact-form__full">
                <label class="form-label" for="mensaje">Mensaje <span aria-hidden="true">*</span></label>
                <textarea
                  id="mensaje"
                  name="mensaje"
                  class="form-textarea"
                  placeholder="Cuéntanos brevemente en qué podemos ayudarte..."
                  required
                  aria-required="true"></textarea>
              </div>

            </div>

            <div class="contact-form__submit">
              <p class="contact-form__privacy">
                Al enviar este formulario aceptas nuestra
                <a href="privacidad.php">política de privacidad</a>.
                Tus datos serán tratados con la máxima confidencialidad.
              </p>
              <button type="submit" class="btn btn--primary btn--lg">
                Enviar mensaje
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                  <path d="M2 9l13-7-5 7 5 7-13-7z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>

          </form>
        </div>

      </div>
    </section>

  </main>

<?php include APP_ROOT . '/includes/footer.php'; ?>