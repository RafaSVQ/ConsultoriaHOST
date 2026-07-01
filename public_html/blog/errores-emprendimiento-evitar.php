<?php
/**
 * CONSULTORÍA HOST — Artículo de blog
 * Archivo: public_html/blog/errores-emprendimiento-evitar.php
 *
 * Artículo: 7 errores de emprendimiento que puedes evitar con el Método HOST
 * Categoría: Emprendimiento
 * Fecha: 2025-02-18
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = '7 errores de emprendimiento que puedes evitar con el Método HOST';
$page_description = 'El 90% de quienes emprendan sin validar previamente su proyecto acaban en la ruina. Conoce los 7 errores más comunes y cómo el Método HOST te ayuda a esquivarlos.';
$page_keywords    = 'errores emprendimiento, método HOST, validar negocio, plan de empresa, fracaso empresarial, emprender España, HOST';
$page_canonical   = 'https://consultoriahost.es/blog/errores-emprendimiento-evitar';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Blog', 'https://consultoriahost.es/blog/'],
  ['7 errores de emprendimiento', null],
];

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "7 errores de emprendimiento que puedes evitar con el Método HOST",
  "description": "El 90% de quienes emprendan sin validar previamente su proyecto acaban en la ruina. Conoce los 7 errores más comunes y cómo el Método HOST te ayuda a esquivarlos.",
  "datePublished": "2025-02-18",
  "dateModified":  "2025-02-18",
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
    "@id": "https://consultoriahost.es/blog/errores-emprendimiento-evitar"
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
        <span class="page-header__breadcrumb-current">7 errores de emprendimiento</span>
      </nav>

      <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);">
        <span class="badge badge--blue">Emprendimiento</span>
        <span style="font-size:var(--text-sm);color:rgba(255,255,255,.6);">
          18 feb. 2025 · 7 min de lectura
        </span>
      </div>

      <h1 class="page-header__title" style="max-width:820px;">
        7 errores de emprendimiento<br>
        que puedes evitar<br>
        con el Método HOST
      </h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        El 90% de quienes emprendan sin validar previamente su
        proyecto acaban en la ruina. No por falta de ganas ni
        de trabajo — por errores perfectamente previsibles.
      </p>

    </div>
  </div>


  <!-- =====================================================
       CUERPO DEL ARTÍCULO
       ===================================================== -->
  <section class="section section--white">
    <div class="container">
      <div class="article-layout">

        <!-- Columna principal -->
        <article aria-label="Contenido del artículo" style="min-width:0;">

          <?php
          $p    = 'font-size:var(--text-lg);color:var(--color-text-secondary);line-height:1.85;margin-bottom:var(--space-6);max-width:none;';
          $h2   = 'font-size:var(--text-3xl);color:var(--color-navy);margin-top:var(--space-12);margin-bottom:var(--space-5);letter-spacing:var(--letter-spacing-tight);';
          $lead = 'font-size:var(--text-xl);color:var(--color-text-secondary);line-height:1.8;margin-bottom:var(--space-8);max-width:none;font-style:italic;';
          ?>

          <p style="<?= $lead ?>">
            En HOST hemos acompañado a cientos de personas en su proceso de
            emprendimiento. Y hemos visto los mismos errores repetirse una
            y otra vez, independientemente del sector, del perfil del emprendedor
            y del tamaño del proyecto.
          </p>

          <p style="<?= $p ?>">
            La buena noticia es que todos son perfectamente evitables.
            La mala, que la mayoría no se detectan solos — hacen falta
            una metodología y una mirada externa que los saquen a la luz
            antes de que cuesten dinero, tiempo y relaciones.
          </p>

          <p style="<?= $p ?>">
            Eso es exactamente lo que hace el Método HOST.
          </p>

          <!-- Bloque intro: el Método HOST en 3 líneas -->
          <div style="
            background:var(--color-off-white);
            border:1px solid var(--color-border);
            border-radius:var(--radius-2xl);
            padding:var(--space-6) var(--space-8);
            margin-bottom:var(--space-10);
            display:flex;gap:var(--space-5);align-items:flex-start;
          ">
            <div style="color:var(--color-blue);flex-shrink:0;margin-top:3px;">
              <?= icon('compass', size: 28) ?>
            </div>
            <div>
              <strong style="display:block;font-size:var(--text-base);color:var(--color-navy);margin-bottom:var(--space-2);">
                ¿Qué es el Método HOST?
              </strong>
              <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.65;max-width:none;margin:0;">
                Es un método de evaluación de viabilidad empresarial en 3 pasos
                (identificación, evaluación y planificación) que verifica las
                posibilidades reales de éxito de un negocio antes de comprometer
                créditos, avales, contratos y relaciones personales.
                <a href="../metodo-host" style="color:var(--color-blue);font-weight:600;">
                  Ver el Método HOST completo →
                </a>
              </p>
            </div>
          </div>


          <!-- LOS 7 ERRORES -->
          <?php
          $errores = [
            [
              'num'   => '01',
              'id'    => 'error-01',
              'color' => 'var(--color-orange)',
              'icono' => 'lightbulb',
              'titulo'=> 'Confundir ilusión con viabilidad',
              'error' => 'El emprendedor tiene una idea que le parece buena, se lo cuenta a familia y amigos, todos la ven estupenda, y eso se interpreta como validación del mercado. No lo es.',
              'host'  => 'El Método HOST separa la ilusión del análisis. En la fase de identificación, trabajamos con datos reales del mercado, no con opiniones de personas que quieren animarte. ¿Hay demanda suficiente? ¿A qué precio? ¿Con qué margen? Esas respuestas no las da el entusiasmo.',
              'frase' => 'La familia siempre dice que sí. El mercado no.',
            ],
            [
              'num'   => '02',
              'id'    => 'error-02',
              'color' => 'var(--color-blue)',
              'icono' => 'chart-bar',
              'titulo'=> 'Infraestimar los costes iniciales',
              'error' => 'El plan de negocio recoge los costes que se ven: alquiler, equipos, stock, publicidad. Lo que no recoge son los que no se ven: tiempo sin ingresos, imprevistos, costes de registro, gestoría, seguros, reformas que siempre cuestan más de lo previsto.',
              'host'  => 'En la evaluación HOST calculamos el capital necesario para sobrevivir el tiempo que tarda en llegar el primer cliente y para aguantar el tiempo que tarda en llegar la rentabilidad. Son dos cifras muy diferentes, y las dos tienen que estar cubiertas antes de firmar nada.',
              'frase' => 'El presupuesto que no incluye imprevistos ya tiene uno: quedarse corto.',
            ],
            [
              'num'   => '03',
              'id'    => 'error-03',
              'color' => 'var(--color-green)',
              'icono' => 'users',
              'titulo'=> 'Sobreestimar la velocidad de captación de clientes',
              'error' => 'El plan dice que en el primer mes habrá 20 clientes, en el segundo 40 y en el tercero ya se habrá recuperado la inversión. Tres meses después hay 4 clientes y la tesorería está en rojo.',
              'host'  => 'Trabajamos con escenarios realistas: el optimista, el normal y el pesimista. Y planificamos para el pesimista. Si el negocio solo funciona en el escenario optimista, no es un negocio viable — es una apuesta.',
              'frase' => 'Nadie planifica para el peor caso porque nadie cree que le va a pasar a él.',
            ],
            [
              'num'   => '04',
              'id'    => 'error-04',
              'color' => 'var(--color-navy)',
              'icono' => 'target',
              'titulo'=> 'No conocer realmente a la competencia',
              'error' => 'Se hace una búsqueda en Google, se ven cuatro páginas web de la competencia y se concluye que "no hacen lo mismo exactamente". Eso no es análisis de competencia. La competencia no es solo quien hace lo mismo — es todo lo que puede hacer que el cliente no te compre a ti.',
              'host'  => 'El Método HOST analiza la competencia directa, la indirecta y la competencia por el presupuesto del cliente. ¿Por qué te va a elegir a ti en lugar de a quien ya conoce? Esa respuesta tiene que ser concreta, específica y verificable.',
              'frase' => 'La competencia que no ves es la más peligrosa.',
            ],
            [
              'num'   => '05',
              'id'    => 'error-05',
              'color' => 'var(--color-orange)',
              'icono' => 'briefcase',
              'titulo'=> 'Emprender solos algo que requiere equipo',
              'error' => 'Hay proyectos que un solo perfil no puede sostener. Necesitan alguien que venda, alguien que produzca y alguien que administre — y a veces la misma persona intenta hacer las tres cosas, hace todas regular y ninguna bien.',
              'host'  => 'En la fase de planificación HOST identificamos qué perfiles son imprescindibles desde el día uno y cuáles pueden esperarse. Y evaluamos si el emprendedor tiene esas capacidades o si necesita un socio, un colaborador o una externalización. No para disuadir — para que el equipo esté completo antes de arrancar.',
              'frase' => 'La soledad del emprendedor es un problema de gestión, no de carácter.',
            ],
            [
              'num'   => '06',
              'id'    => 'error-06',
              'color' => 'var(--color-blue)',
              'icono' => 'sprout',
              'titulo'=> 'Confundir el producto con el negocio',
              'error' => 'Saber hacer algo muy bien no es suficiente para tener un negocio. El mejor carpintero no es necesariamente el mejor empresario de carpintería. El mejor cocinero no es el mejor restaurador. El negocio requiere vender, gestionar, cobrar, comunicar y administrar — no solo producir.',
              'host'  => 'Evaluamos la capacidad de negocio, no solo la capacidad técnica. ¿Tienes perfil comercial o necesitas a alguien que venda? ¿Sabes fijar precios o tiendes a bajarlos para no perder clientes? ¿Cobras a tiempo o tienes miedo de llamar a quien no paga? Las respuestas a esas preguntas definen si hay negocio o solo hay oficio.',
              'frase' => 'Un negocio necesita alguien que venda tanto como alguien que produzca.',
            ],
            [
              'num'   => '07',
              'id'    => 'error-07',
              'color' => 'var(--color-green)',
              'icono' => 'refresh',
              'titulo'=> 'No tener plan B — ni plan de salida',
              'error' => 'El emprendedor se lo juega todo a una carta. Deja el empleo, mete los ahorros, convence al cuñado de que invierta, firma un alquiler de local a cinco años. Y si no funciona, no hay manera de salir sin daños graves.',
              'host'  => 'En HOST trabajamos el plan de salida desde el principio. No porque creamos que va a fracasar — sino porque saber cómo salir si es necesario permite entrar con más seguridad. Un negocio del que puedes salir ordenadamente si no funciona es mucho más fácil de empezar que uno del que solo puedes salir arruinado.',
              'frase' => 'El plan de salida no es pesimismo. Es inteligencia empresarial.',
            ],
          ];
          ?>

          <?php foreach ($errores as $i => $e): ?>
          <div id="<?= $e['id'] ?? ('error-' . $e['num']) ?>" style="
            margin-bottom:var(--space-10);
            padding-bottom:var(--space-10);
            border-bottom:1px solid var(--color-border);
          ">
            <!-- Número y título -->
            <div style="display:flex;align-items:flex-start;gap:var(--space-5);margin-bottom:var(--space-5);">
              <div style="
                width:56px;height:56px;border-radius:var(--radius-xl);
                background:<?= $e['color'] ?>;
                display:flex;align-items:center;justify-content:center;
                flex-shrink:0;color:white;
              "><?= icon($e['icono'], size: 24) ?></div>
              <div>
                <span style="
                  font-size:var(--text-xs);font-weight:700;
                  letter-spacing:.1em;text-transform:uppercase;
                  color:<?= $e['color'] ?>;display:block;margin-bottom:var(--space-1);
                ">Error <?= $e['num'] ?></span>
                <h2 style="font-size:var(--text-2xl);color:var(--color-navy);letter-spacing:var(--letter-spacing-tight);margin:0;">
                  <?= htmlspecialchars($e['titulo'], ENT_QUOTES, 'UTF-8') ?>
                </h2>
              </div>
            </div>

            <!-- El error -->
            <div style="
              background:#FEF2F2;border-left:3px solid #FECACA;
              border-radius:0 var(--radius-lg) var(--radius-lg) 0;
              padding:var(--space-4) var(--space-5);
              margin-bottom:var(--space-4);
            ">
              <div style="
                font-size:var(--text-xs);font-weight:700;letter-spacing:.08em;
                text-transform:uppercase;color:#DC2626;margin-bottom:var(--space-2);
              ">El error</div>
              <p style="font-size:var(--text-base);color:#7F1D1D;line-height:1.7;max-width:none;margin:0;">
                <?= htmlspecialchars($e['error'], ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>

            <!-- Cómo lo aborda HOST -->
            <div style="
              background:rgba(26,86,168,.05);border-left:3px solid var(--color-blue);
              border-radius:0 var(--radius-lg) var(--radius-lg) 0;
              padding:var(--space-4) var(--space-5);
              margin-bottom:var(--space-4);
            ">
              <div style="
                font-size:var(--text-xs);font-weight:700;letter-spacing:.08em;
                text-transform:uppercase;color:var(--color-blue);margin-bottom:var(--space-2);
              ">Cómo lo resuelve el Método HOST</div>
              <p style="font-size:var(--text-base);color:var(--color-text-secondary);line-height:1.7;max-width:none;margin:0;">
                <?= htmlspecialchars($e['host'], ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>

            <!-- Frase de cierre -->
            <p style="
              font-family:var(--font-display);
              font-size:var(--text-base);
              font-weight:600;
              font-style:italic;
              color:<?= $e['color'] ?>;
              margin:0;
              padding-left:var(--space-4);
              border-left:2px solid <?= $e['color'] ?>;
            ">
              "<?= htmlspecialchars($e['frase'], ENT_QUOTES, 'UTF-8') ?>"
            </p>

          </div>
          <?php endforeach; ?>


          <!-- H2: Lo que distingue al que lo consigue -->
          <h2 style="<?= $h2 ?>">Lo que distingue al que lo consigue</h2>

          <p style="<?= $p ?>">
            No es la idea. No es el dinero. No es el trabajo duro — porque
            personas que trabajan durísimo fracasan todos los días.
          </p>

          <p style="<?= $p ?>">
            Lo que distingue al emprendedor que sale adelante del que no es,
            casi siempre, haber validado su proyecto antes de comprometerse
            del todo. Haber hecho las preguntas incómodas antes de que el
            mercado las hiciera de forma más cara. Haber tenido al lado
            a alguien que le dijera la verdad, no lo que quería escuchar.
          </p>

          <!-- Cita -->
          <blockquote style="
            margin:var(--space-8) 0;
            padding:var(--space-6) var(--space-8);
            background:rgba(232,98,26,.06);
            border-left:4px solid var(--color-orange);
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
              "Recientemente trabajé con dos socios que tenían su plan
              perfectamente elaborado. Números, tablas, previsiones.
              Todo cuadraba sobre el papel. Con el Método HOST descubrimos
              en la segunda sesión que el mercado que creían tener
              no existía tal como lo habían concebido. Cancelamos
              las citas con el notario y reformulamos el proyecto.
              Hoy ese proyecto funciona — pero reformulado."
            </p>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;margin:0;">
              — Consultoría HOST
            </p>
          </blockquote>

          <p style="<?= $p ?>">
            El Método HOST no está diseñado para disuadir a nadie de emprender.
            Está diseñado para que quien emprenda lo haga con la mayor cantidad
            de información real posible, en el menor tiempo posible y con el
            menor riesgo posible. Para que cuando se diga sí, sea un sí sólido.
            Y para que cuando haya que decir no, o espera, o replantea,
            se diga a tiempo.
          </p>

          <!-- CTA inline -->
          <div style="
            display:flex;gap:var(--space-4);
            margin-top:var(--space-8);
            padding-top:var(--space-8);
            border-top:1px solid var(--color-border);
            flex-wrap:wrap;
          ">
            <a href="../metodo-host" class="btn btn--primary btn--lg">
              Conocer el Método HOST
            </a>
            <a href="../contacto" class="btn btn--outline btn--lg">
              Hablar de tu proyecto
            </a>
          </div>


          <!-- Artículos relacionados -->
          <div style="margin-top:var(--space-16);">
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-6);color:var(--color-navy);">
              También puede interesarte
            </h3>
            <div class="article-related-grid">
              <?php
              $relacionados_slugs = ['que-es-la-consultoria-3-0', 'interim-management-espana'];
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
                ['Categoría',  'Emprendimiento'],
                ['Publicado',  '18 de febrero de 2025'],
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

          <!-- Índice de los 7 errores -->
          <div style="
            background:white;
            border:1px solid var(--color-border);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            margin-bottom:var(--space-6);
          ">
            <h3 style="font-size:var(--text-sm);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-4);text-transform:uppercase;letter-spacing:.06em;">
              Los 7 errores
            </h3>
            <nav aria-label="Índice de errores">
              <ol style="display:flex;flex-direction:column;gap:var(--space-2);padding:0;list-style:none;">
                <?php foreach ($errores as $e): ?>
                <li style="
                  font-size:var(--text-sm);
                  color:var(--color-text-secondary);
                  line-height:1.4;
                  padding:var(--space-1) 0;
                  border-bottom:1px solid var(--color-border);
                  display:flex;gap:var(--space-2);align-items:flex-start;
                ">
                  <span style="
                    color:<?= $e['color'] ?>;flex-shrink:0;
                    font-weight:800;font-size:var(--text-xs);
                    min-width:20px;margin-top:1px;
                  "><?= $e['num'] ?></span>
                  <a href="#<?= $e['id'] ?? ('error-' . $e['num']) ?>" style="color:inherit;text-decoration:none;"
                     onmouseover="this.style.color='var(--color-navy)';this.style.textDecoration='underline'"
                     onmouseout="this.style.color='';this.style.textDecoration='none'">
                    <?= htmlspecialchars($e['titulo'], ENT_QUOTES, 'UTF-8') ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ol>
            </nav>
          </div>

          <!-- CTA sidebar -->
          <div style="
            background:var(--gradient-orange);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            text-align:center;
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 70% 20%, rgba(255,255,255,.12) 0%, transparent 60%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <div style="color:white;margin-bottom:var(--space-3);opacity:.9;">
                <?= icon('target', size: 32) ?>
              </div>
              <h3 style="font-family:var(--font-display);font-weight:700;font-size:var(--text-base);color:white;margin-bottom:var(--space-3);">
                Valida tu proyecto antes de arriesgar
              </h3>
              <p style="font-size:var(--text-sm);color:rgba(255,255,255,.85);line-height:1.5;max-width:none;margin-bottom:var(--space-5);">
                El Método HOST evalúa la viabilidad real de tu negocio en 3 sesiones.
              </p>
              <a href="../metodo-host" class="btn btn--outline-white btn--sm" style="width:100%;justify-content:center;margin-bottom:var(--space-3);">
                Ver el Método HOST
              </a>
              <a href="../contacto" class="btn btn--sm" style="
                width:100%;justify-content:center;
                background:white;color:var(--color-orange);border:none;
              ">
                Solicitar información
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
            ¿Tienes una idea y quieres saber si tiene futuro?
          </h2>
          <p class="cta-banner__subtitle">
            El Método HOST te da una respuesta honesta antes de
            que el mercado te la dé de la forma más cara.
          </p>
          <div class="cta-banner__actions">
            <a href="../metodo-host" class="btn btn--primary btn--xl">Conocer el Método HOST</a>
            <a href="../contacto" class="btn btn--outline-white btn--xl">Hablar de tu proyecto</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
