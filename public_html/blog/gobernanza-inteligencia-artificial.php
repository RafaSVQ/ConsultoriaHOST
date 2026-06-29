<?php
/**
 * CONSULTORÍA HOST — Artículo de blog
 * Archivo: public_html/blog/gobernanza-inteligencia-artificial.php
 *
 * Artículo: ¿Sabes qué es la gobernanza de la Inteligencia Artificial?
 * Categoría: Formación
 * Fecha: 2026-06-22
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = '¿Qué es la gobernanza de la Inteligencia Artificial? Guía para empresas';
$page_description = 'La gobernanza de la IA es el conjunto de políticas, normas y controles que garantizan un uso seguro, transparente y responsable de la inteligencia artificial. Pilares, marcos de referencia y cómo aplicarla en tu empresa.';
$page_keywords    = 'gobernanza inteligencia artificial, gobernanza IA empresas, AI Act, Ley de IA UE, NIST AI RMF, principios OCDE IA, transparencia algoritmos, sesgos IA, supervisión humana IA, HOST';
$page_canonical   = 'https://consultoriahost.es/blog/gobernanza-inteligencia-artificial';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Blog', 'https://consultoriahost.es/blog/'],
  ['Gobernanza de la IA', null],
];

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "¿Qué es la gobernanza de la Inteligencia Artificial? Guía para empresas",
  "description": "La gobernanza de la IA es el conjunto de políticas, normas y controles que garantizan un uso seguro, transparente y responsable de la inteligencia artificial en tu empresa.",
  "datePublished": "2026-06-22",
  "dateModified":  "2026-06-22",
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
    "@id": "https://consultoriahost.es/blog/gobernanza-inteligencia-artificial"
  }
}
</script>';

require_once dirname(__DIR__) . '/bootstrap.php';
require_once APP_ROOT . '/config/site.php';
require_once APP_ROOT . '/config/icons.php';
require_once APP_ROOT . '/config/articulos.php';

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
        <a href="/">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <a href="/blog/">Blog</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Gobernanza de la IA</span>
      </nav>

      <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);flex-wrap:wrap;">
        <span class="badge" style="background:rgba(245,166,35,.2);color:var(--color-amber);">Formación</span>
        <span class="badge badge--blue">Empresas</span>
        <span style="font-size:var(--text-sm);color:rgba(255,255,255,.6);">
          22 jun. 2026 · 7 min de lectura
        </span>
      </div>

      <h1 class="page-header__title" style="max-width:860px;">
        ¿Sabes qué es la<br>
        <span style="color:var(--color-amber);">gobernanza de la Inteligencia Artificial?</span>
      </h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        Tener una IA potente no es lo mismo que tener una IA gobernada.
        La diferencia entre ambas es, precisamente, lo que separa
        a las empresas que controlan la tecnología de las que
        empiezan a ser controladas por ella.
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
          $h3   = 'font-size:var(--text-xl);color:var(--color-navy);margin-top:var(--space-8);margin-bottom:var(--space-4);';
          $lead = 'font-size:var(--text-xl);color:var(--color-text-secondary);line-height:1.8;margin-bottom:var(--space-8);max-width:none;font-style:italic;';
          ?>

          <p style="<?= $lead ?>">
            La gobernanza de la Inteligencia Artificial es el conjunto
            de políticas, normas, principios éticos y controles diseñados
            para garantizar que los sistemas de IA se desarrollen y
            utilicen de manera segura, transparente, equitativa y
            responsable, abordando riesgos como los sesgos, la privacidad
            de los datos y el impacto social.
          </p>

          <p style="<?= $p ?>">
            Dicho de otra forma: no basta con que una herramienta de IA
            funcione bien. Hace falta saber <strong style="color:var(--color-text-primary);">quién decide cómo se usa,
            qué datos la alimentan, quién responde si algo sale mal y
            quién la supervisa</strong> antes de que un error se convierta
            en un problema legal, reputacional o económico para tu empresa.
          </p>

          <p style="<?= $p ?>">
            Cuanta más IA entra en los procesos de una organización —
            selección de personal, atención al cliente, análisis de
            crédito, marketing, producción — más crece la necesidad
            de gobernarla con la misma seriedad con la que se gobierna
            cualquier otro activo crítico del negocio.
          </p>


          <!-- H2: Pilares -->
          <h2 id="pilares" style="<?= $h2 ?>">Los cuatro pilares de la gobernanza de la IA</h2>

          <p style="<?= $p ?>">
            Las estrategias para gobernar la IA, ya sea a nivel de
            organismo público o de pyme, se sostienen sobre cuatro
            ejes fundamentales. Entender cada uno es el primer paso
            para saber en qué punto está tu empresa.
          </p>

          <div style="display:flex;flex-direction:column;gap:var(--space-4);margin-bottom:var(--space-8);">
            <?php
            $pilares = [
              ['lightbulb', 'Transparencia y "explicabilidad"',
               'Capacidad de entender cómo los modelos de IA toman decisiones, para poder auditar su comportamiento y evitar las llamadas "cajas negras".'],
              ['users', 'Mitigación de sesgos e inclusión',
               'Mecanismos proactivos para asegurar que los datos de entrenamiento no sean discriminatorios y que la tecnología sirva a toda la diversidad poblacional de forma justa.'],
              ['lock', 'Seguridad y privacidad',
               'Protección de la información confidencial de empresas y usuarios, evitando que datos sensibles sean expuestos o absorbidos por modelos públicos de terceros.'],
              ['eye', 'Supervisión humana y rendición de cuentas',
               'Protocolos que definen quién es responsable de los fallos del sistema y cuándo debe intervenir una persona, especialmente en decisiones de alto riesgo.'],
            ];
            foreach ($pilares as [$icono, $titulo, $desc]):
            ?>
            <div style="
              display:flex;gap:var(--space-4);align-items:flex-start;
              padding:var(--space-5);
              background:var(--color-off-white);
              border:1px solid var(--color-border);
              border-radius:var(--radius-xl);
            ">
              <div style="color:var(--color-blue);flex-shrink:0;margin-top:2px;">
                <?= icon($icono, size: 26) ?>
              </div>
              <div>
                <strong style="display:block;font-size:var(--text-base);color:var(--color-navy);margin-bottom:var(--space-2);">
                  <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
                </strong>
                <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                  <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            Ningún pilar funciona de forma aislada. Una empresa puede
            tener una política de privacidad impecable y, aun así,
            estar expuesta si nadie en la organización sabe explicar
            por qué un algoritmo descartó a un candidato o denegó
            un crédito. La gobernanza solo es real cuando los cuatro
            ejes avanzan juntos.
          </p>


          <!-- H2: Marcos de referencia -->
          <h2 id="marcos" style="<?= $h2 ?>">Marcos de referencia y regulación</h2>

          <p style="<?= $p ?>">
            A nivel global existen marcos de trabajo y normativas que
            sirven de guía tanto a organizaciones privadas como a
            instituciones públicas. Conocerlos, aunque sea de forma
            general, es clave para no operar a ciegas.
          </p>

          <!-- Bloque marcos normativos -->
          <div style="display:flex;flex-direction:column;gap:var(--space-3);margin-bottom:var(--space-8);">
            <div style="
              padding:var(--space-5) var(--space-6);
              background:var(--color-off-white);
              border:1px solid var(--color-border);
              border-radius:var(--radius-lg);
            ">
              <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-2);">
                <span style="color:var(--color-orange);"><?= icon('scale', size: 22) ?></span>
                <strong style="font-size:var(--text-base);color:var(--color-navy);">Ley de IA de la UE (EU AI Act)</strong>
              </div>
              <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                El marco legislativo pionero que clasifica los sistemas
                de IA según su nivel de riesgo, exigiendo estrictas
                evaluaciones de conformidad y supervisión a cargo de
                la Oficina Europea de IA y las autoridades nacionales.
              </p>
            </div>
            <div style="
              padding:var(--space-5) var(--space-6);
              background:var(--color-off-white);
              border:1px solid var(--color-border);
              border-radius:var(--radius-lg);
            ">
              <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-2);">
                <span style="color:var(--color-blue);"><?= icon('clipboard', size: 22) ?></span>
                <strong style="font-size:var(--text-base);color:var(--color-navy);">NIST AI RMF</strong>
              </div>
              <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                El Marco de Gestión de Riesgos de IA, creado por el
                Instituto Nacional de Normas y Tecnología estadounidense,
                utilizado a menudo por corporaciones globales para integrar
                la IA en sus estrategias de ciberseguridad y privacidad.
              </p>
            </div>
            <div style="
              padding:var(--space-5) var(--space-6);
              background:var(--color-off-white);
              border:1px solid var(--color-border);
              border-radius:var(--radius-lg);
            ">
              <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-2);">
                <span style="color:var(--color-green);"><?= icon('compass', size: 22) ?></span>
                <strong style="font-size:var(--text-base);color:var(--color-navy);">Principios de la OCDE</strong>
              </div>
              <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                Directrices centradas en el desarrollo de una IA centrada
                en el ser humano, que promueven valores de valor social,
                derechos humanos y crecimiento inclusivo.
              </p>
            </div>
          </div>

          <p style="<?= $p ?>">
            Estos tres marcos no compiten entre sí: se complementan.
            La Ley de IA de la UE marca las obligaciones legales
            concretas en territorio europeo; el NIST AI RMF aporta
            una metodología práctica de gestión de riesgos aplicable
            en cualquier organización; y los Principios de la OCDE
            fijan el horizonte ético que da sentido a todo lo anterior.
          </p>


          <!-- H2: Gobernanza en las organizaciones -->
          <h2 id="organizaciones" style="<?= $h2 ?>">Gobernanza en las organizaciones</h2>

          <p style="<?= $p ?>">
            Para que las empresas implementen una gobernanza efectiva
            en sus entornos de trabajo, los expertos recomiendan
            evolucionar de políticas estáticas — un documento que
            se firma una vez y se archiva — a mecanismos de
            supervisión ágiles, vivos, que acompañan el día a día
            del negocio.
          </p>

          <p style="<?= $p ?>">
            En la práctica, esto se traduce en tres acciones concretas:
          </p>

          <?php
          $acciones = [
            [
              '1',
              'Crear comités de gobernanza de IA transversales',
              'Con perfiles directivos, expertos en ética y especialistas en riesgos. No es una decisión que deba recaer en un único departamento técnico.',
            ],
            [
              '2',
              'Definir niveles de riesgo',
              'Para clasificar los distintos usos y herramientas de IA dentro de la empresa. No todo uso de IA implica el mismo riesgo ni exige el mismo control.',
            ],
            [
              '3',
              'Monitorear continuamente el comportamiento de los modelos',
              'Ajustando los permisos de acceso y las protecciones de datos a medida que el uso de la IA evoluciona en producción, no solo en el momento de implantarla.',
            ],
          ];
          foreach ($acciones as [$num, $titulo, $desc]):
          ?>
          <div style="
            display:flex;gap:var(--space-5);align-items:flex-start;
            margin-bottom:var(--space-5);
          ">
            <span style="
              font-family:var(--font-display);font-weight:800;
              font-size:var(--text-2xl);color:var(--color-amber);
              flex-shrink:0;line-height:1.2;min-width:32px;
            "><?= $num ?></span>
            <div>
              <strong style="display:block;font-size:var(--text-base);color:var(--color-navy);margin-bottom:var(--space-2);">
                <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
              </strong>
              <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>
          </div>
          <?php endforeach; ?>

          <p style="<?= $p ?>">
            Ninguna de estas tres acciones exige una gran estructura
            corporativa para llevarse a cabo. En una pyme, el "comité"
            puede ser tan sencillo como una reunión trimestral entre
            la dirección y quien gestione la herramienta de IA en cuestión.
            Lo importante no es el tamaño del órgano, sino que exista
            de forma deliberada y no por casualidad.
          </p>


          <!-- H2: Por qué importa de verdad -->
          <h2 id="por-que-importa" style="<?= $h2 ?>">Por qué esto te importa aunque no lo sepas todavía</h2>

          <p style="<?= $p ?>">
            Es habitual pensar que la gobernanza de la IA es un asunto
            de grandes tecnológicas o de organismos públicos. La realidad
            es distinta: <strong style="color:var(--color-text-primary);">cualquier empresa que use una herramienta
            de IA generativa, un CRM con scoring automático o un sistema
            de preselección de currículums ya está tomando decisiones
            de gobernanza</strong>, sepa que lo está haciendo o no.
          </p>

          <p style="<?= $p ?>">
            La diferencia entre hacerlo de forma consciente o por
            accidente es, exactamente, la diferencia entre estar
            preparado para una auditoría, una reclamación o una
            inspección — y descubrir esos riesgos cuando ya es
            demasiado tarde para corregirlos sin coste.
          </p>

          <!-- Cita -->
          <blockquote style="
            margin:var(--space-8) 0;
            padding:var(--space-6) var(--space-8);
            background:rgba(15,43,91,.05);
            border-left:4px solid var(--color-navy);
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
              "No se trata de frenar la innovación con burocracia.
              Se trata de que la velocidad a la que adoptas la IA
              no supere nunca a la velocidad a la que la entiendes
              y la controlas."
            </p>
          </blockquote>

          <p style="<?= $p ?>">
            Esa es, en el fondo, la idea central de la gobernanza
            de la IA: no limitar lo que la tecnología puede hacer
            por tu negocio, sino asegurarte de que lo hace bajo
            tu control, dentro de la ley y sin sorpresas.
          </p>


          <!-- H2: Cómo empezar -->
          <h2 id="como-empezar" style="<?= $h2 ?>">Cómo empezar a gobernar la IA en tu empresa</h2>

          <p style="<?= $p ?>">
            No hace falta abordarlo todo a la vez. La gobernanza de
            la IA se construye por fases, y la primera siempre es
            la misma: <strong style="color:var(--color-text-primary);">saber, con precisión, dónde se está usando
            ya inteligencia artificial dentro de tu organización</strong>,
            aunque sea de forma informal o no autorizada.
          </p>

          <p style="<?= $p ?>">
            A partir de ahí, definir niveles de riesgo, asignar
            responsables y establecer un mínimo de supervisión humana
            sobre las decisiones automatizadas más sensibles es un
            proceso asumible para cualquier empresa, con independencia
            de su tamaño — siempre que se cuente con el acompañamiento
            adecuado.
          </p>

          <p style="<?= $p ?>">
            En Consultoría HOST ayudamos a empresas y autónomos a dar
            ese primer paso: <strong style="color:var(--color-text-primary);">diagnosticar el uso real de IA en su
            actividad, clasificar el riesgo y diseñar la formación
            y los protocolos necesarios</strong> para que la tecnología
            trabaje a su favor, no en su contra.
          </p>

          <!-- CTA inline -->
          <div style="
            display:flex;gap:var(--space-4);
            margin-top:var(--space-8);
            padding-top:var(--space-8);
            border-top:1px solid var(--color-border);
            flex-wrap:wrap;
          ">
            <a href="../contacto" class="btn btn--primary btn--lg">
              Solicitar diagnóstico de gobernanza de IA
            </a>
            <a href="formacion-ia-obligatoria-articulo-4" class="btn btn--outline btn--lg">
              Leer sobre la formación obligatoria en IA
            </a>
          </div>


          <!-- Artículos relacionados -->
          <div style="margin-top:var(--space-16);">
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-6);color:var(--color-navy);">
              También puede interesarte
            </h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-4);">
              <?php
              $relacionados_slugs = ['formacion-ia-obligatoria-articulo-4', 'que-es-la-consultoria-3-0'];
              $articulos_por_slug = array_column($articulos, null, 'slug');
              $relacionados = array_filter(array_map(fn($s) => $articulos_por_slug[$s] ?? null, $relacionados_slugs));
              foreach ($relacionados as $art):
                [$href, $cat, $catcss, $titulo, $lectura] = [$art['slug'], $art['categoria'], $art['catcolor'], $art['titulo'], $art['lectura']];
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
              <?php
              $meta = [
                ['Categoría',  'Formación'],
                ['Publicado',  '22 de junio de 2026'],
                ['Lectura',    '7 minutos'],
              ];
              foreach ($meta as [$label, $val]):
              ?>
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

          <!-- Pilares en sidebar -->
          <div style="
            background:white;
            border:1px solid var(--color-border);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            margin-bottom:var(--space-6);
          ">
            <h3 style="font-size:var(--text-sm);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-4);text-transform:uppercase;letter-spacing:.06em;">
              Los 4 pilares
            </h3>
            <?php
            $pilares_resumen = [
              'Transparencia y explicabilidad',
              'Mitigación de sesgos e inclusión',
              'Seguridad y privacidad',
              'Supervisión humana',
            ];
            foreach ($pilares_resumen as $item):
            ?>
            <div style="
              display:flex;align-items:flex-start;gap:var(--space-2);
              padding:var(--space-2) 0;
              border-bottom:1px solid var(--color-border);
            ">
              <span style="color:var(--color-blue);flex-shrink:0;font-weight:700;">›</span>
              <span style="font-size:var(--text-xs);color:var(--color-text-muted);line-height:1.4;">
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </span>
            </div>
            <?php endforeach; ?>
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
                <?php
                $indice = [
                  ['Los cuatro pilares',                  'pilares'],
                  ['Marcos de referencia y regulación',   'marcos'],
                  ['Gobernanza en las organizaciones',    'organizaciones'],
                  ['Por qué te importa',                  'por-que-importa'],
                  ['Cómo empezar',                        'como-empezar'],
                ];
                foreach ($indice as [$label, $aid]):
                ?>
                <li style="
                  font-size:var(--text-sm);
                  color:var(--color-text-secondary);
                  line-height:1.4;
                  padding:var(--space-1) 0;
                  border-bottom:1px solid var(--color-border);
                  display:flex;gap:var(--space-2);align-items:flex-start;
                ">
                  <span style="color:var(--color-blue);flex-shrink:0;font-weight:700;">›</span>
                  <a href="#<?= $aid ?>" style="color:inherit;text-decoration:none;"
                     onmouseover="this.style.color='var(--color-navy)';this.style.textDecoration='underline'"
                     onmouseout="this.style.color='';this.style.textDecoration='none'">
                    <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </nav>
          </div>

          <!-- CTA sidebar -->
          <div style="
            background:linear-gradient(135deg,#0F2B5B,#1A56A8);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            text-align:center;
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 70% 20%, rgba(232,98,26,.25) 0%, transparent 60%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <div style="color:var(--color-amber);margin-bottom:var(--space-3);">
                <?= icon('shield-check', size: 32) ?>
              </div>
              <h3 style="font-family:var(--font-display);font-weight:700;font-size:var(--text-base);color:white;margin-bottom:var(--space-3);">
                ¿Sabes cómo se usa la IA en tu empresa?
              </h3>
              <p style="font-size:var(--text-sm);color:rgba(255,255,255,.8);line-height:1.5;max-width:none;margin-bottom:var(--space-5);">
                Diagnóstico inicial sin compromiso: identificamos los
                riesgos reales y diseñamos tu hoja de ruta de gobernanza.
              </p>
              <a href="../contacto" class="btn btn--primary btn--sm" style="width:100%;justify-content:center;margin-bottom:var(--space-3);">
                Solicitar diagnóstico
              </a>
              <a href="../servicios/organizacional" class="btn btn--sm" style="
                width:100%;justify-content:center;
                background:rgba(255,255,255,.1);color:white;
                border:1px solid rgba(255,255,255,.25);
              ">
                Ver formación HOST
              </a>
              <p style="margin-top:var(--space-3);font-size:var(--text-xs);color:rgba(255,255,255,.55);">
                <a href="tel:<?= SITE_PHONE_E164 ?>" style="color:rgba(255,255,255,.55);">
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
            Gobernar la IA no es opcional. Es estratégico.
          </h2>
          <p class="cta-banner__subtitle">
            Cuanto antes sepas dónde estás, antes podrás decidir
            hacia dónde quieres ir — con la ley de tu lado.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto" class="btn btn--primary btn--xl">Hablar con HOST</a>
            <a href="/blog/" class="btn btn--outline-white btn--xl">Volver al blog</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
