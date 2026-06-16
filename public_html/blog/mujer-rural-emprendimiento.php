<?php
/**
 * CONSULTORÍA HOST — Artículo de blog
 * Archivo: public_html/blog/mujer-rural-emprendimiento.php
 *
 * Artículo: Mujer rural y emprendimiento: oportunidades que no se ven
 * Categoría: Social
 * Fecha: 2024-11-14
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = 'Mujer rural y emprendimiento: oportunidades que no se ven';
$page_description = 'La mujer en entornos rurales tiene menos acceso a recursos de desarrollo profesional, pero también ventajas competitivas únicas. HOST las ayuda a identificar y aprovechar.';
$page_keywords    = 'mujer rural, emprendimiento rural, mujer emprendedora, España vaciada, empleo rural, oportunidades negocio rural, HOST';
$page_canonical   = 'https://consultoriahost.es/blog/mujer-rural-emprendimiento';

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "Mujer rural y emprendimiento: oportunidades que no se ven",
  "description": "La mujer en entornos rurales tiene menos acceso a recursos de desarrollo profesional, pero también ventajas competitivas únicas. HOST las ayuda a identificar y aprovechar.",
  "datePublished": "2024-11-14",
  "dateModified":  "2024-11-14",
  "author": {
    "@type": "Person",
    "name": "Rafael Comesaña",
    "jobTitle": "Director, Consultoría HOST",
    "url": "https://consultoriahost.es/que-es-host"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Consultoría HOST",
    "url":  "https://consultoriahost.es"
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://consultoriahost.es/blog/mujer-rural-emprendimiento"
  }
}
</script>';

require_once dirname(__DIR__) . '/bootstrap.php';
require_once APP_ROOT . '/config/site.php';
require_once APP_ROOT . '/config/icons.php';

include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">

  <!-- =====================================================
       CABECERA DEL ARTÍCULO
       ===================================================== -->
  <div class="page-header">
    <div class="container page-header__inner">

      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="../index.php">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <a href="index.php">Blog</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Mujer rural y emprendimiento</span>
      </nav>

      <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);">
        <span class="badge badge--green">Social</span>
        <span style="font-size:var(--text-sm);color:rgba(255,255,255,.6);">
          14 nov. 2024 · 5 min de lectura
        </span>
      </div>

      <h1 class="page-header__title" style="max-width:820px;">
        Mujer rural y emprendimiento:<br>
        oportunidades que no se ven
      </h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        Menos acceso a recursos, menos visibilidad, menos red de contactos.
        Pero también ventajas competitivas reales que la ciudad no tiene.
        HOST ayuda a identificarlas y convertirlas en negocio.
      </p>

    </div>
  </div>


  <!-- =====================================================
       CUERPO DEL ARTÍCULO
       ===================================================== -->
  <section class="section section--white">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 320px;gap:var(--space-16);align-items:start;">

        <!-- Columna principal -->
        <article aria-label="Contenido del artículo" style="min-width:0;">

          <?php
          $p    = 'font-size:var(--text-lg);color:var(--color-text-secondary);line-height:1.85;margin-bottom:var(--space-6);max-width:none;';
          $h2   = 'font-size:var(--text-3xl);color:var(--color-navy);margin-top:var(--space-12);margin-bottom:var(--space-5);letter-spacing:var(--letter-spacing-tight);';
          $lead = 'font-size:var(--text-xl);color:var(--color-text-secondary);line-height:1.8;margin-bottom:var(--space-8);max-width:none;font-style:italic;';
          ?>

          <p style="<?= $lead ?>">
            Hay un tipo de emprendedora que los medios no suelen mostrar.
            No está en una incubadora de startups en Madrid. No ha pasado
            por una aceleradora ni ha levantado una ronda de financiación.
            Vive en un pueblo de 800 personas, tiene familia a su cargo,
            y lleva años pensando en montar algo que le permita no tener
            que salir de allí para ganarse la vida dignamente.
          </p>

          <p style="<?= $p ?>">
            Esa mujer existe por miles en España. Y tiene muchas más
            posibilidades de las que cree — y muchos menos apoyos
            de los que debería tener.
          </p>


          <!-- H2: La brecha que nadie mide bien -->
          <h2 style="<?= $h2 ?>">La brecha que nadie mide bien</h2>

          <p style="<?= $p ?>">
            Cuando se habla de la brecha de género en el emprendimiento,
            la conversación suele centrarse en las ciudades: menos financiación
            para empresas lideradas por mujeres, menos presencia en consejos
            de administración, menor visibilidad en los ecosistemas de
            innovación.
          </p>

          <p style="<?= $p ?>">
            Pero hay otra brecha, menos visible y más profunda: la que
            separa a la mujer emprendedora urbana de la mujer emprendedora
            rural. Porque en el entorno rural se acumulan desventajas que
            en la ciudad no se combinan de la misma forma.
          </p>

          <!-- Las 4 desventajas -->
          <?php
          $desventajas = [
            [
              'icono' => 'users',
              'color' => '#DC2626',
              'bg'    => '#FEF2F2',
              'bd'    => '#FECACA',
              'titulo'=> 'Menor acceso a red de contactos profesionales',
              'desc'  => 'El networking que en la ciudad ocurre casi de forma espontánea — eventos, formaciones, coworking — en el entorno rural requiere desplazarse, invertir tiempo y dinero, y a menudo compatibilizarlo con cargas familiares que dificultan esa movilidad.',
            ],
            [
              'icono' => 'graduation',
              'color' => '#DC2626',
              'bg'    => '#FEF2F2',
              'bd'    => '#FECACA',
              'titulo'=> 'Oferta formativa limitada y poco adaptada',
              'desc'  => 'La formación disponible suele ser presencial en capitales de provincia o genérica en formato online, sin tener en cuenta las características del mercado local, la estacionalidad rural o las oportunidades específicas del territorio.',
            ],
            [
              'icono' => 'chart-bar',
              'color' => '#DC2626',
              'bg'    => '#FEF2F2',
              'bd'    => '#FECACA',
              'titulo'=> 'Mercado local pequeño y asumido como límite',
              'desc'  => 'La tendencia es dimensionar el negocio según el mercado que se ve — el del pueblo o la comarca — sin explorar que la digitalización ha eliminado esas fronteras para muchos tipos de negocio.',
            ],
            [
              'icono' => 'globe',
              'color' => '#DC2626',
              'bg'    => '#FEF2F2',
              'bd'    => '#FECACA',
              'titulo'=> 'Invisibilidad institucional y mediática',
              'desc'  => 'Las ayudas, los programas de apoyo y la cobertura mediática se concentran en los núcleos urbanos. La mujer rural emprendedora rara vez aparece en los titulares de los ecosistemas de innovación ni en los informes de los organismos de fomento empresarial.',
            ],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-4);margin-bottom:var(--space-8);">
            <?php foreach ($desventajas as $d): ?>
            <div style="
              background:<?= $d['bg'] ?>;
              border:1px solid <?= $d['bd'] ?>;
              border-radius:var(--radius-xl);
              padding:var(--space-5);
              display:flex;gap:var(--space-4);
            ">
              <div style="
                width:40px;height:40px;border-radius:var(--radius-lg);
                background:<?= $d['color'] ?>;
                display:flex;align-items:center;justify-content:center;
                flex-shrink:0;color:white;
              "><?= icon($d['icono'], size: 18) ?></div>
              <div>
                <strong style="display:block;font-size:var(--text-sm);color:#7F1D1D;margin-bottom:var(--space-1);">
                  <?= htmlspecialchars($d['titulo'], ENT_QUOTES, 'UTF-8') ?>
                </strong>
                <p style="font-size:var(--text-sm);color:#991B1B;line-height:1.65;max-width:none;margin:0;opacity:.85;">
                  <?= htmlspecialchars($d['desc'], ENT_QUOTES, 'UTF-8') ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            Dicho esto, el entorno rural no es solo un catálogo de desventajas.
            Y este artículo no está escrito para confirmar lo que ya se sabe
            que falta. Está escrito para hablar de lo que sobra — y que
            casi nadie está aprovechando.
          </p>


          <!-- H2: Las ventajas que la ciudad no tiene -->
          <h2 style="<?= $h2 ?>">Las ventajas que la ciudad no tiene</h2>

          <p style="<?= $p ?>">
            Hay características del entorno rural que, bien identificadas
            y bien trabajadas, son ventajas competitivas reales. No en
            abstracto — en negocios concretos que funcionan y que son
            más difíciles de replicar desde una ciudad.
          </p>

          <?php
          $ventajas = [
            [
              'icono' => 'sprout',
              'color' => 'var(--color-green)',
              'titulo'=> 'Autenticidad que no se puede fabricar',
              'desc'  => 'El origen rural de un producto, un servicio o una historia es hoy un activo de marketing de primer orden. La autenticidad que intenta fabricar cualquier marca urbana, una emprendedora rural la tiene de forma natural. El turismo de experiencias, la gastronomía de proximidad, los productos artesanales con historia real: todos valen más cuanto más auténtico es su origen.',
            ],
            [
              'icono' => 'map-pin',
              'color' => 'var(--color-green)',
              'titulo'=> 'Conocimiento profundo del territorio',
              'desc'  => 'Conocer el territorio — sus recursos, sus personas, sus necesidades, su cultura, sus tiempos — es una ventaja competitiva que no se aprende en ningún máster. Saber qué hace falta en la comarca y tener la confianza de quien lleva años viviendo allí es un punto de partida que ningún emprendedor externo puede igualar fácilmente.',
            ],
            [
              'icono' => 'users',
              'color' => 'var(--color-green)',
              'titulo'=> 'Red de confianza ya construida',
              'desc'  => 'La red de contactos rural no es la de LinkedIn, pero es la que más importa para ciertos negocios: la de quien te conoce de toda la vida, quien confía en ti antes de comprarte, quien te recomienda sin que se lo pidas. Eso tiene un valor que en la ciudad se tarda años en construir.',
            ],
            [
              'icono' => 'euro',
              'color' => 'var(--color-green)',
              'titulo'=> 'Estructura de costes muy inferior',
              'desc'  => 'Montar un negocio en un entorno rural tiene costes estructurales significativamente menores que en una ciudad: alquiler, precio del suelo, coste de vida. Eso significa que el punto de equilibrio es más bajo y que el margen de maniobra para crecer de forma sostenida es mayor.',
            ],
            [
              'icono' => 'globe',
              'color' => 'var(--color-green)',
              'titulo'=> 'Mercado global accesible desde lo local',
              'desc'  => 'La digitalización ha eliminado la barrera geográfica para docenas de tipos de negocio. Una diseñadora, una traductora, una consultora, una artesana con tienda online, una profesora de idiomas en formato remoto: ninguna de ellas necesita vivir en una ciudad para tener clientes en toda España o en el mundo.',
            ],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-5);margin-bottom:var(--space-8);">
            <?php foreach ($ventajas as $v): ?>
            <div style="display:flex;gap:var(--space-5);align-items:flex-start;">
              <div style="
                width:48px;height:48px;border-radius:var(--radius-xl);
                background:var(--color-green);
                display:flex;align-items:center;justify-content:center;
                flex-shrink:0;color:white;
              "><?= icon($v['icono'], size: 22) ?></div>
              <div>
                <h3 style="font-size:var(--text-lg);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-2);">
                  <?= htmlspecialchars($v['titulo'], ENT_QUOTES, 'UTF-8') ?>
                </h3>
                <p style="font-size:var(--text-base);color:var(--color-text-secondary);line-height:1.7;max-width:none;margin:0;">
                  <?= htmlspecialchars($v['desc'], ENT_QUOTES, 'UTF-8') ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>


          <!-- H2: Lo que impide verlo -->
          <h2 style="<?= $h2 ?>">Lo que impide verlo</h2>

          <p style="<?= $p ?>">
            Si las ventajas existen, ¿por qué no se aprovechan más?
          </p>

          <p style="<?= $p ?>">
            Hay una respuesta sencilla y una más incómoda. La sencilla:
            falta información, falta formación adaptada y falta acompañamiento.
            La incómoda: hay una narrativa instalada sobre el entorno rural
            que es tan negativa — la España vaciada, el pueblo que se muere,
            el que se va porque no queda nada — que cuesta ver lo que hay.
          </p>

          <!-- Cita -->
          <blockquote style="
            margin:var(--space-8) 0;
            padding:var(--space-6) var(--space-8);
            background:rgba(45,125,70,.07);
            border-left:4px solid var(--color-green);
            border-radius:0 var(--radius-xl) var(--radius-xl) 0;
          ">
            <p style="
              font-family:var(--font-display);
              font-size:var(--text-xl);
              font-weight:600;
              font-style:italic;
              color:var(--color-navy);
              line-height:1.5;
              max-width:none;
              margin:0 0 var(--space-3);
            ">
              "La primera sesión con muchas de las mujeres con las que
              trabajamos en el programa #MujerRural consiste casi
              exclusivamente en convencerlas de que tienen algo valioso.
              Ellas lo saben hacer. No saben que se puede vender."
            </p>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;margin:0;">
              — Consultoría HOST, Programa #MujerRural
            </p>
          </blockquote>

          <p style="<?= $p ?>">
            El autoconcepto es el primer obstáculo. La percepción de que
            lo que se sabe hacer "no vale" porque se aprendió en casa o
            en el campo, no en una universidad. La idea de que el mercado
            está lejos y es inaccesible. La convicción de que para
            montar algo hay que ser otro tipo de persona.
          </p>

          <p style="<?= $p ?>">
            Nada de eso es verdad. Pero hace falta alguien que lo diga
            con conocimiento de causa, con datos reales y con un plan
            concreto. No con buenas palabras.
          </p>


          <!-- H2: Tipos de negocio con alta viabilidad en entornos rurales -->
          <h2 style="<?= $h2 ?>">Tipos de negocio con alta viabilidad<br>en entornos rurales</h2>

          <p style="<?= $p ?>">
            No todos los negocios funcionan igual en todos los contextos.
            Estos son algunos de los modelos que HOST ha acompañado con
            éxito en entornos rurales o que tienen características que
            los hacen especialmente viables en esos contextos:
          </p>

          <?php
          $negocios = [
            ['🌿', 'Turismo rural de experiencias',
             'No el alojamiento genérico, sino experiencias vinculadas al territorio: rutas gastronómicas, talleres de cocina tradicional, jornadas de recolección, senderismo guiado con historia local. La demanda existe y crece. La oferta auténtica escasea.'],
            ['🧶', 'Artesanía con venta online',
             'Cerámica, textil, cestería, trabajos en madera, joyería artesanal. El reto no es hacer el producto — es construir la presencia digital que lleve ese producto a quien lo busca y lo valora. Eso es exactamente lo que HOST ayuda a construir.'],
            ['🌾', 'Producción agroalimentaria local',
             'Conservas, aceites, quesos, embutidos, miel, productos de temporada. La demanda de proximidad y trazabilidad está creciendo de forma sostenida. Una microproductora con producto de calidad y canal directo de venta tiene hoy más opciones que hace diez años.'],
            ['💻', 'Servicios profesionales en remoto',
             'Diseño, comunicación, contabilidad, asesoría, formación online, traducción. No requieren presencia física. Permiten trabajar con clientes de todo el país desde cualquier lugar. Y tienen costes estructurales bajos que mejoran el margen.'],
            ['🤝', 'Cuidados y servicios a la comunidad',
             'Atención a mayores, apoyo a personas dependientes, servicios educativos complementarios para niños, actividades para familias. En muchos entornos rurales hay demanda real y muy poca oferta organizada. Un nicho que requiere vocación y que puede ser sostenible con el modelo adecuado.'],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-3);margin-bottom:var(--space-8);">
            <?php foreach ($negocios as [$emoji, $titulo, $desc]): ?>
            <div style="
              padding:var(--space-5) var(--space-6);
              background:var(--color-green-light);
              border:1px solid var(--color-green);
              border-radius:var(--radius-xl);
              display:flex;gap:var(--space-4);
            ">
              <span style="font-size:1.5rem;flex-shrink:0;line-height:1.4;" aria-hidden="true"><?= $emoji ?></span>
              <div>
                <strong style="display:block;font-size:var(--text-base);color:var(--color-navy);margin-bottom:var(--space-1);">
                  <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
                </strong>
                <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.65;max-width:none;margin:0;">
                  <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>


          <!-- H2: El programa #MujerRural de HOST -->
          <h2 style="<?= $h2 ?>">El programa #MujerRural de HOST</h2>

          <p style="<?= $p ?>">
            En HOST hemos desarrollado un programa específico de acompañamiento
            al emprendimiento femenino en entornos rurales. No es un curso
            genérico de autoempleo. Es un proceso de trabajo personalizado
            que parte de la situación real de cada mujer: su contexto,
            sus recursos, sus cargas, sus habilidades y su territorio.
          </p>

          <!-- Bloques del programa -->
          <div style="
            display:grid;grid-template-columns:1fr 1fr;
            gap:var(--space-4);margin-bottom:var(--space-8);
          ">
            <?php
            $programa = [
              ['target',    'Identificación de oportunidades',
               'Qué se puede hacer con lo que hay, dónde y para quién. Sin recetas genéricas.'],
              ['compass',   'Validación de viabilidad',
               'Método HOST aplicado a las características específicas del entorno rural.'],
              ['megaphone', 'Presencia digital básica',
               'Las herramientas mínimas para que el negocio exista más allá del pueblo.'],
              ['handshake', 'Red y apoyo continuo',
               'Conexión con otras emprendedoras, acceso a ayudas disponibles y seguimiento real.'],
            ];
            foreach ($programa as [$icono, $titulo, $desc]):
            ?>
            <div style="
              background:white;
              border:1px solid var(--color-border);
              border-radius:var(--radius-xl);
              padding:var(--space-5);
            ">
              <div style="
                width:40px;height:40px;border-radius:var(--radius-lg);
                background:var(--color-green);
                display:flex;align-items:center;justify-content:center;
                margin-bottom:var(--space-3);color:white;
              "><?= icon($icono, size: 18) ?></div>
              <strong style="display:block;font-size:var(--text-sm);color:var(--color-navy);margin-bottom:var(--space-2);">
                <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
              </strong>
              <p style="font-size:var(--text-xs);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            El programa puede acogerse a ayudas de la administración autonómica
            y del SEPE para mujeres en riesgo de exclusión social o en
            zonas rurales con alta despoblación. Consúltanos para ver
            qué opciones hay disponibles en tu caso concreto.
          </p>

          <!-- CTA inline -->
          <div style="
            display:flex;gap:var(--space-4);
            margin-top:var(--space-8);
            padding-top:var(--space-8);
            border-top:1px solid var(--color-border);
            flex-wrap:wrap;
          ">
            <a href="../contacto.php" class="btn btn--primary btn--lg">
              Contactar con HOST
            </a>
            <a href="../servicios/humano.php" class="btn btn--outline btn--lg">
              Ver el programa #MujerRural
            </a>
          </div>


          <!-- Artículos relacionados -->
          <div style="margin-top:var(--space-16);">
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-6);color:var(--color-navy);">
              También puede interesarte
            </h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-4);">
              <?php
              $relacionados = [
                [
                  'errores-emprendimiento-evitar.php',
                  'Emprendimiento',
                  'badge--blue',
                  '7 errores de emprendimiento que puedes evitar con el Método HOST',
                  '7 min',
                ],
                [
                  'que-es-la-consultoria-3-0.php',
                  'Consultoría',
                  'badge--orange',
                  '¿Qué es la Consultoría 3.0 y por qué importa?',
                  '5 min',
                ],
              ];
              foreach ($relacionados as [$href, $cat, $catcss, $titulo, $lectura]):
              ?>
              <a href="<?= $href ?>" style="
                display:block;
                padding:var(--space-5);
                background:var(--color-off-white);
                border:1px solid var(--color-border);
                border-radius:var(--radius-xl);
                text-decoration:none;
                transition:box-shadow var(--transition-base),transform var(--transition-base);
              "
              onmouseover="this.style.boxShadow='var(--shadow-md)';this.style.transform='translateY(-2px)'"
              onmouseout="this.style.boxShadow='none';this.style.transform='translateY(0)'"
              >
                <span class="badge <?= $catcss ?>" style="font-size:.65rem;margin-bottom:var(--space-3);display:inline-flex;">
                  <?= $cat ?>
                </span>
                <p style="font-size:var(--text-sm);font-weight:600;color:var(--color-text-primary);line-height:1.4;margin-bottom:var(--space-2);max-width:none;">
                  <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
                </p>
                <span style="font-size:var(--text-xs);color:var(--color-text-muted);"><?= $lectura ?> lectura</span>
              </a>
              <?php endforeach; ?>
            </div>
          </div>

        </article>


        <!-- Sidebar -->
        <aside aria-label="Información del artículo" style="position:sticky;top:calc(var(--nav-height) + var(--space-6));">

          <!-- Metadatos -->
          <div style="
            background:var(--color-off-white);
            border:1px solid var(--color-border);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            margin-bottom:var(--space-6);
          ">
            <h3 style="font-size:var(--text-sm);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-5);text-transform:uppercase;letter-spacing:.06em;">
              Sobre este artículo
            </h3>
            <div style="display:flex;flex-direction:column;gap:var(--space-4);">
              <?php foreach ([
                ['Categoría', 'Social'],
                ['Publicado', '14 de noviembre de 2024'],
                ['Lectura',   '5 minutos'],
              ] as [$label, $val]): ?>
              <div>
                <div style="font-size:var(--text-xs);color:var(--color-text-muted);text-transform:uppercase;letter-spacing:.06em;margin-bottom:4px;">
                  <?= $label ?>
                </div>
                <div style="font-size:var(--text-sm);font-weight:600;color:var(--color-text-primary);">
                  <?= $val ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Índice -->
          <div style="
            background:white;
            border:1px solid var(--color-border);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            margin-bottom:var(--space-6);
          ">
            <h3 style="font-size:var(--text-sm);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-4);text-transform:uppercase;letter-spacing:.06em;">
              En este artículo
            </h3>
            <nav aria-label="Índice del artículo">
              <ul style="display:flex;flex-direction:column;gap:var(--space-2);padding:0;list-style:none;">
                <?php foreach ([
                  'La brecha que nadie mide bien',
                  'Las ventajas que la ciudad no tiene',
                  'Lo que impide verlo',
                  'Negocios con alta viabilidad rural',
                  'El programa #MujerRural de HOST',
                ] as $item): ?>
                <li style="
                  font-size:var(--text-sm);color:var(--color-text-secondary);
                  line-height:1.4;padding:var(--space-1) 0;
                  border-bottom:1px solid var(--color-border);
                  display:flex;gap:var(--space-2);align-items:flex-start;
                ">
                  <span style="color:var(--color-green);flex-shrink:0;font-weight:700;">›</span>
                  <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <?php endforeach; ?>
              </ul>
            </nav>
          </div>

          <!-- CTA sidebar -->
          <div style="
            background:var(--gradient-green);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            text-align:center;
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 30% 80%, rgba(255,255,255,.1) 0%, transparent 60%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <div style="color:white;margin-bottom:var(--space-3);opacity:.9;">
                <?= icon('sprout', size: 32) ?>
              </div>
              <h3 style="font-family:var(--font-display);font-weight:700;font-size:var(--text-base);color:white;margin-bottom:var(--space-3);">
                Programa #MujerRural
              </h3>
              <p style="font-size:var(--text-sm);color:rgba(255,255,255,.85);line-height:1.5;max-width:none;margin-bottom:var(--space-5);">
                Acompañamiento personalizado para emprendedoras en entornos rurales.
                Puede acogerse a ayudas económicas.
              </p>
              <a href="../servicios/humano.php" class="btn btn--outline-white btn--sm" style="width:100%;justify-content:center;margin-bottom:var(--space-3);">
                Ver el programa
              </a>
              <a href="../contacto.php" class="btn btn--sm" style="
                width:100%;justify-content:center;
                background:white;color:var(--color-green);border:none;
              ">
                Contactar ahora
              </a>
              <p style="margin-top:var(--space-3);font-size:var(--text-xs);color:rgba(255,255,255,.6);">
                <a href="tel:<?= SITE_PHONE_E164 ?>" style="color:rgba(255,255,255,.6);">
                  <?= SITE_PHONE ?>
                </a>
                <br><?= SITE_HOURS_SHORT ?>
              </p>
            </div>
          </div>

        </aside>

      </div><!-- /grid -->
    </div>
  </section>


  <!-- =====================================================
       CTA FINAL
       ===================================================== -->
  <section class="section section--alt">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-banner__inner">
          <h2 class="cta-banner__title">
            Tienes más de lo que crees.<br>Solo hace falta saber verlo.
          </h2>
          <p class="cta-banner__subtitle">
            HOST te ayuda a identificar lo que tienes, lo que falta
            y el camino más corto para convertirlo en negocio.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto.php" class="btn btn--primary btn--xl">Hablar con HOST</a>
            <a href="index.php" class="btn btn--outline-white btn--xl">Volver al blog</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
