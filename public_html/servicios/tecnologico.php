<?php
/**
 * CONSULTORÍA HOST — Departamento (T) Técnico y Tecnológico
 * Archivo: servicios/tecnologico.php
 *
 * Ingeniería sostenible HOST: proyectos medioambientales I+D+i,
 * caso Seseña, alternativa a prospecciones petrolíferas,
 * seguridad informática y tecnología aplicada.
 */

$depth            = 1;
$nav_active       = 'servicios';
$page_title       = 'Departamento (T) Técnico — Ingeniería y proyectos medioambientales HOST';
$page_description = 'Ingeniería sostenible HOST: proyectos medioambientales I+D+i, tratamiento de residuos, energía renovable, depuración de aguas y seguridad informática. Sevilla, España.';
$page_keywords    = 'ingeniería medioambiental, proyectos sostenibles, tratamiento residuos, energía renovable, seguridad informática, I+D+i, Sevilla';
$page_canonical   = 'https://consultoriahost.es/servicios/tecnologico';

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
        <span class="page-header__breadcrumb-current">Departamento (T) Técnico</span>
      </nav>
      <div style="display:flex;align-items:center;gap:var(--space-4);margin-bottom:var(--space-4);">
        <div style="
          width:64px;height:64px;border-radius:var(--radius-xl);
          background:linear-gradient(135deg,#1E293B,#334155);
          display:flex;align-items:center;justify-content:center;
          font-family:var(--font-display);font-weight:800;font-size:2rem;color:white;
        " aria-hidden="true">T</div>
        <span class="badge badge--navy" style="font-size:var(--text-sm);">Departamento Técnico</span>
      </div>
      <h1 class="page-header__title">Ingeniería para un mundo mejor.</h1>
      <p class="page-header__subtitle">
        Tecnología e ingeniería al servicio del desarrollo humano y sostenible.
        Proyectos que generan riqueza, empleo y beneficios para el medioambiente,
        <strong class="text-amber">no a su costa</strong>.
      </p>
    </div>
  </div>


  <!-- INTRO -->
  <section class="section section--white" aria-labelledby="t-intro-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">El pilar T de HOST</span>
          <h2 id="t-intro-title">
            Ingeniería HOST:<br>
            <span class="text-navy">pensando en las personas</span>
          </h2>
          <p style="margin-top:var(--space-4);">
            La ingeniería desarrollada por Consultoría HOST no se para en
            consideraciones técnicas. Alcanza a consideraciones mucho más amplias:
            pensamos en las personas, en el medioambiente, en la utilidad para
            el desarrollo sostenible, para que los proyectos sean económicamente
            viables <strong>y</strong> humanamente beneficiosos.
          </p>
          <p>
            HOST trabaja con el concepto que denominamos <strong>"solución-solución"</strong>:
            aseguramos que la solución ofrecida es estable en el tiempo, no generará
            problemas en otro sitio ni en otro momento. Las soluciones HOST no tienen
            "daños colaterales". Son fiables, seguras, eficientes... y si algo colateral
            generan son beneficios: empleo, riqueza, salud ambiental, regeneración
            medioambiental.
          </p>
        </div>

        <!-- Áreas de ingeniería -->
        <div class="reveal reveal--delay-1">
          <div style="
            background:linear-gradient(135deg,#0F2B5B,#1E293B);
            border-radius:var(--radius-2xl);
            padding:var(--space-8);
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 70% 30%, rgba(232,98,26,.15) 0%, transparent 50%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <h3 style="
              font-family:var(--font-display);font-weight:700;
              font-size:var(--text-xl);color:white;
              margin-bottom:var(--space-6);position:relative;z-index:1;
            ">Áreas de actuación</h3>
            <?php
            $areas = [
              ['droplet','Agua','Depuración, desalación, tratamiento'],
              ['recycle','Residuos','Urbanos, industriales, sanitarios'],
              ['⚡','Energía','Generación, eficiencia, recuperación'],
              ['thermometer','Climatización','Calefacción y ACS de alta eficiencia'],
              ['lock','Informática','Seguridad y protección de sistemas'],
            ];
            foreach ($areas as $a): ?>
            <div style="
              display:flex;align-items:center;gap:var(--space-4);
              padding:var(--space-3) 0;
              border-bottom:1px solid rgba(255,255,255,.08);
              position:relative;z-index:1;
            ">
              <span style="width:28px;display:flex;align-items:center;color:var(--color-amber);"><?= icon($a[0], size: 20) ?></span>
              <div>
                <span style="font-weight:700;color:white;font-size:var(--text-sm);"><?= $a[1] ?> — </span>
                <span style="color:rgba(255,255,255,.6);font-size:var(--text-sm);"><?= $a[2] ?></span>
              </div>
            </div>
            <?php endforeach; ?>
            <div style="
              margin-top:var(--space-6);padding:var(--space-4);
              background:rgba(232,98,26,.15);border-radius:var(--radius-lg);
              border:1px solid rgba(232,98,26,.3);position:relative;z-index:1;
            ">
              <p style="
                font-size:var(--text-sm);color:rgba(255,255,255,.8);
                max-width:none;margin:0;line-height:1.6;
              ">
                <strong class="text-amber">Todos nuestros proyectos</strong>
                son de innovación, desarrollo e investigación (I+D+i) con el "concepto HOST"
                integrado: sostenibles, viables y rentables.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- PROYECTOS MEDIOAMBIENTALES -->
  <section class="section section--alt" aria-labelledby="proyectos-t-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">I+D+i medioambiental</span>
        <h2 id="proyectos-t-title">Proyectos medioambientales HOST</h2>
        <p>
          Proyectos listos para su inmediata puesta en marcha.
          Con gran inversión ya realizada. Implantables en cualquier punto del país
          con mínimos requerimientos económicos e infraestructura.
        </p>
      </div>

      <div class="grid grid-2 gap-6" style="margin-bottom:var(--space-8);">

        <?php
        $proyectos_env = [
          [
            'icono' => 'droplet',
            'color' => 'var(--color-blue)',
            'grad'  => 'var(--gradient-card)',
            'titulo'=> 'Depuración de aguas y desalación',
            'badge' => 'badge--blue',
            'tag'   => 'Agua',
            'desc'  => 'Proyectos de depuración de aguas residuales y desalación o desalinización de aguas para zonas costeras e insulares. Rentables económicamente, sin impacto negativo en el medioambiente y con tecnología probada.',
            'datos' => ['Aplicable en zonas costeras e insulares','Rentabilidad demostrada','Tecnología de bajo impacto ambiental'],
          ],
          [
            'icono' => 'recycle',
            'color' => 'var(--color-green)',
            'grad'  => 'var(--gradient-green)',
            'titulo'=> 'Reciclaje y tratamiento de residuos',
            'badge' => 'badge--green',
            'tag'   => 'Residuos',
            'desc'  => 'Tratamiento de residuos urbanos, industriales y sanitarios. Proyectos que convierten el problema de los residuos en una fuente de recursos y energía, generando empleo y reduciendo el impacto medioambiental.',
            'datos' => ['Residuos urbanos, industriales y sanitarios','Generación de empleo directo e indirecto','Economía circular aplicada'],
          ],
          [
            'icono' => '⚡',
            'color' => 'var(--color-amber)',
            'grad'  => 'linear-gradient(135deg,#B07800,#F5A623)',
            'titulo'=> 'Generación de energía sostenible',
            'badge' => 'badge--amber',
            'tag'   => 'Energía',
            'desc'  => 'Proyectos de generación de energía, aprovechamiento, reducción de consumos y recuperación de recursos energéticos. Tecnología y patentes españolas de máxima eficiencia.',
            'datos' => ['Tecnología y patentes españolas','Alta eficiencia energética','Reducción de dependencia energética exterior'],
          ],
          [
            'icono' => 'thermometer',
            'color' => 'var(--color-orange)',
            'grad'  => 'var(--gradient-orange)',
            'titulo'=> 'Calefacción y ACS de máxima eficiencia',
            'badge' => 'badge--orange',
            'tag'   => 'Eficiencia',
            'desc'  => 'Sistemas de calefacción y agua caliente sanitaria de máxima eficiencia, basados en tecnología y patentes españolas. Proyectos con gran inversión ya realizada, listos para implantarse con mínimos requerimientos.',
            'datos' => ['Requerimientos mínimos de inversión','Implantación rápida','Ahorro energético significativo'],
          ],
        ];
        foreach ($proyectos_env as $i => $p): ?>

        <article class="card reveal <?= $i>0?'reveal--delay-'.min($i,3):'' ?>"
                 style="box-shadow:var(--shadow-card);"
                 aria-labelledby="t-proyecto-<?= $i ?>">
          <div style="
            background:<?= $p['grad'] ?>;
            padding:var(--space-5) var(--space-6);
            display:flex;align-items:center;gap:var(--space-3);
          ">
            <span style="color:white;"><?= icon($p['icono'], size: 28) ?></span>
            <h3 id="t-proyecto-<?= $i ?>" style="
              font-family:var(--font-display);font-weight:700;
              font-size:var(--text-lg);color:white;
            "><?= $p['titulo'] ?></h3>
          </div>
          <div class="card__body">
            <p style="font-size:var(--text-sm);margin-bottom:var(--space-4);"><?= $p['desc'] ?></p>
            <ul style="display:flex;flex-direction:column;gap:var(--space-2);margin-bottom:var(--space-4);">
              <?php foreach ($p['datos'] as $d): ?>
              <li style="
                display:flex;align-items:flex-start;gap:var(--space-2);
                font-size:var(--text-sm);color:var(--color-text-secondary);
              ">
                <span style="color:<?= $p['color'] ?>;font-weight:700;flex-shrink:0;">✓</span>
                <?= htmlspecialchars($d, ENT_QUOTES, 'UTF-8') ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <span class="badge <?= $p['badge'] ?>"><?= $p['tag'] ?></span>
            <span class="badge badge--navy" style="margin-left:var(--space-2);">I+D+i</span>
          </div>
        </article>

        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- CASOS DESTACADOS -->
  <section class="section section--white" aria-labelledby="casos-title">
    <div class="container">

      <div class="section-header reveal">
        <span class="eyebrow">Casos destacados</span>
        <h2 id="casos-title">Proyectos HOST para grandes problemas</h2>
        <p>
          Hay desastres medioambientales en España que llevan años sin resolver,
          no porque no tengan solución, sino porque nadie ha llevado la solución
          correcta a quien corresponde. HOST tiene esas soluciones.
        </p>
      </div>

      <!-- Caso Seseña -->
      <article class="reveal" style="
        background:white;border:1px solid var(--color-border);
        border-radius:var(--radius-2xl);
        margin-bottom:var(--space-8);
        overflow:hidden;
        box-shadow:var(--shadow-card);
      " aria-labelledby="sesena-title">
        <div style="
          background:var(--gradient-green);
          padding:var(--space-6) var(--space-8);
          display:flex;align-items:center;gap:var(--space-4);
        ">
          <span style="color:white;"><?= icon('recycle', size: 28) ?></span>
          <div>
            <span style="
              display:block;font-size:.7rem;font-weight:800;
              letter-spacing:.1em;text-transform:uppercase;
              color:rgba(255,255,255,.7);margin-bottom:4px;
            ">Caso destacado — Residuos</span>
            <h3 id="sesena-title" style="
              font-family:var(--font-display);font-weight:800;
              font-size:var(--text-2xl);color:white;
            ">Seseña: el mayor vertedero de neumáticos de Europa</h3>
          </div>
        </div>
        <div style="padding:var(--space-8);display:grid;grid-template-columns:1fr 1fr;gap:var(--space-8);">
          <div>
            <p>
              El vertedero de Seseña, con cerca de 100.000 toneladas de neumáticos
              acumulados, lleva décadas siendo un problema medioambiental y de salud
              pública para la zona. Un peligro constante de incendio, contaminación
              del suelo y el agua, y deterioro de la calidad de vida de miles de
              personas en Seseña y poblaciones colindantes.
            </p>
            <p style="margin-top:var(--space-4);">
              La "solución" que se ha venido planteando — usar el material para hacer
              pistas deportivas, césped artificial o quemarlo en cementeras —
              no es una solución. Es aplazar el problema o trasladarlo a otro lugar.
            </p>
            <p style="margin-top:var(--space-4);">
              <strong>HOST tiene la solución real.</strong>
            </p>
          </div>
          <div>
            <div style="
              background:var(--color-green-light);
              border:1px solid var(--color-green);
              border-radius:var(--radius-xl);
              padding:var(--space-6);
              margin-bottom:var(--space-4);
            ">
              <h4 style="color:var(--color-green);margin-bottom:var(--space-3);">
                El planteamiento HOST
              </h4>
              <ul style="display:flex;flex-direction:column;gap:var(--space-2);">
                <?php
                $sesena = [
                  'Retirada <strong>inmediata y gratuita</strong> para la administración pública',
                  'Ritmo inicial: 10 toneladas diarias (escalable)',
                  'Destino: recuperación real del material, no traslado del problema',
                  'Resultado final: conversión de la zona en parque público',
                  'Sin coste para el contribuyente. Con generación de empleo y riqueza.',
                ];
                foreach ($sesena as $s): ?>
                <li style="
                  display:flex;gap:var(--space-2);
                  font-size:var(--text-sm);color:var(--color-text-secondary);
                  align-items:flex-start;
                ">
                  <span style="color:var(--color-green);font-weight:700;flex-shrink:0;">✓</span>
                  <span><?= $s ?></span>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <a href="../contacto" class="btn btn--secondary" style="width:100%;justify-content:center;">
              Saber más sobre este proyecto
            </a>
          </div>
        </div>
      </article>

      <!-- Caso Ibiza/Canarias -->
      <article class="reveal reveal--delay-1" style="
        background:white;border:1px solid var(--color-border);
        border-radius:var(--radius-2xl);
        overflow:hidden;
        box-shadow:var(--shadow-card);
      " aria-labelledby="ibiza-title">
        <div style="
          background:var(--gradient-card);
          padding:var(--space-6) var(--space-8);
          display:flex;align-items:center;gap:var(--space-4);
        ">
          <span style="font-size:2rem;" aria-hidden="true">⚡</span>
          <div>
            <span style="
              display:block;font-size:.7rem;font-weight:800;
              letter-spacing:.1em;text-transform:uppercase;
              color:rgba(255,255,255,.7);margin-bottom:4px;
            ">Caso destacado — Energía</span>
            <h3 id="ibiza-title" style="
              font-family:var(--font-display);font-weight:800;
              font-size:var(--text-2xl);color:white;
            ">Alternativa real a las prospecciones petrolíferas</h3>
          </div>
        </div>
        <div style="padding:var(--space-8);display:grid;grid-template-columns:1fr 1fr;gap:var(--space-8);">
          <div>
            <p>
              Casos como los de Ibiza o Canarias se repiten a lo largo de todo el planeta.
              Las prospecciones petrolíferas se justifican con cifras económicas y de empleo
              que no resisten una comparación honesta con alternativas sostenibles existentes.
            </p>
            <p style="margin-top:var(--space-4);">
              HOST tiene en su cartera proyectos que generan riqueza y empleo equivalentes
              o superiores, con beneficios medioambientales en lugar de daños.
              El problema no es la falta de soluciones: es que las soluciones no llegan
              a quienes tienen que decidir.
            </p>
          </div>
          <div>
            <div style="
              background:rgba(26,86,168,.07);
              border:1px solid rgba(26,86,168,.2);
              border-radius:var(--radius-xl);
              padding:var(--space-6);
            ">
              <h4 style="color:var(--color-blue);margin-bottom:var(--space-4);">
                Con solo uno de los proyectos HOST se generarían*
              </h4>
              <?php
              $ibiza_datos = [
                ['euro','1.500 M€','en facturación mínima anual durante 50 años o más'],
                ['users','2.000','puestos de trabajo directo estables y de calidad'],
                ['handshake','3.000','puestos de trabajo indirecto'],
                ['star','Liderazgo','de España en I+D+i medioambiental a nivel internacional'],
              ];
              foreach ($ibiza_datos as $d): ?>
              <div style="
                display:flex;align-items:baseline;gap:var(--space-3);
                margin-bottom:var(--space-4);
              ">
                <span style="color:var(--color-amber);display:flex;align-items:center;"><?= icon($d[0], size: 18) ?></span>
                <span style="
                  font-family:var(--font-display);font-weight:800;
                  font-size:var(--text-2xl);color:var(--color-blue);
                  flex-shrink:0;
                "><?= $d[1] ?></span>
                <span style="font-size:var(--text-xs);color:var(--color-text-secondary);line-height:1.4;"><?= $d[2] ?></span>
              </div>
              <?php endforeach; ?>
              <p style="
                font-size:var(--text-xs);color:var(--color-text-muted);
                margin-top:var(--space-2);max-width:none;
              ">* Cifras estimadas. Con beneficios medioambientales, a diferencia de las prospecciones.</p>
            </div>
          </div>
        </div>
      </article>

    </div>
  </section>


  <!-- SEGURIDAD INFORMÁTICA -->
  <section class="section section--alt" aria-labelledby="seg-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">También en el Dpto. T</span>
          <h2 id="seg-title">Seguridad informática<br>para empresas</h2>
          <p style="margin-top:var(--space-4);">
            La ciberseguridad ha pasado de ser una preocupación de las grandes corporaciones
            a ser una necesidad de <strong>cualquier empresa que tenga presencia digital</strong>,
            que almacene datos de clientes o que dependa de sistemas informáticos para operar.
            Es decir, prácticamente todas.
          </p>
          <p>
            HOST ofrece servicios de seguridad informática adaptados a la realidad
            de la microempresa española: sin tecnicismos innecesarios, con soluciones
            concretas y con un precio acorde a las posibilidades reales de cada cliente.
          </p>
          <div style="display:flex;flex-wrap:wrap;gap:var(--space-3);margin-top:var(--space-6);">
            <?php
            $seg_servicios = ['Antivirus profesional para empresa','Antivirus para móvil','Auditoría de seguridad básica','Formación en ciberseguridad','Protección de datos (RGPD)'];
            foreach ($seg_servicios as $s): ?>
            <span class="badge badge--navy"><?= $s ?></span>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="reveal reveal--delay-1">
          <div style="
            background:linear-gradient(135deg,#1E293B,#334155);
            border-radius:var(--radius-2xl);
            padding:var(--space-8);
          ">
            <h3 style="
              color:white;font-family:var(--font-display);
              font-weight:700;font-size:var(--text-xl);
              margin-bottom:var(--space-6);
            ">¿Sabes cuánto le costaría a tu empresa un ciberataque?</h3>
            <?php
            $datos_seg = [
              ['60%','de las pymes que sufren un ciberataque grave cierran en 6 meses'],
              ['90%','de los ataques se deben a errores humanos evitables con formación'],
              ['300€','puede costar proteger adecuadamente una microempresa al año'],
            ];
            foreach ($datos_seg as $d): ?>
            <div style="
              display:flex;align-items:baseline;gap:var(--space-4);
              margin-bottom:var(--space-5);
              padding-bottom:var(--space-5);
              border-bottom:1px solid rgba(255,255,255,.08);
            ">
              <span style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-3xl);color:var(--color-amber);
                flex-shrink:0;line-height:1;
              "><?= $d[0] ?></span>
              <span style="font-size:var(--text-sm);color:rgba(255,255,255,.65);line-height:1.4;"><?= $d[1] ?></span>
            </div>
            <?php endforeach; ?>
            <a href="../contacto" class="btn btn--primary" style="width:100%;justify-content:center;margin-top:var(--space-2);">
              Consultar opciones de seguridad
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- CTA FINAL -->
  <section class="section section--white">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">
            ¿Tienes un proyecto medioambiental o técnico?
          </h2>
          <p class="cta-banner__subtitle">
            Si eres responsable de medioambiente, gestor público o inversor,
            y quieres conocer nuestros proyectos, contacta con nosotros.
            Hay soluciones esperando ser ejecutadas.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto" class="btn btn--primary btn--xl">Solicitar reunión</a>
            <a href="tel:<?= SITE_PHONE_E164 ?>" class="btn btn--outline-white btn--xl">📞 <?= SITE_PHONE ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
