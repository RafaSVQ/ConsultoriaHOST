<?php
/**
 * CONSULTORÍA HOST — Artículo de blog
 * Archivo: public_html/blog/interim-management-espana.php
 *
 * Artículo: Interim Management: el servicio que España aún no conoce bien
 * Categoría: Empresas
 * Fecha: 2024-10-28
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = 'Interim Management: el servicio que España aún no conoce bien';
$page_description = 'En otros países es la primera opción cuando una empresa necesita resolver una situación crítica. En España aún se desconoce. Te explicamos qué es y por qué puede salvarte el negocio.';
$page_keywords    = 'interim management, qué es interim manager, dirección temporal empresa, crisis empresarial, consultoría empresarial, HOST';
$page_canonical   = 'https://consultoriahost.es/blog/interim-management-espana';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Blog', 'https://consultoriahost.es/blog/'],
  ['Interim Management', null],
];

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "Interim Management: el servicio que España aún no conoce bien",
  "description": "En otros países es la primera opción cuando una empresa necesita resolver una situación crítica. En España aún se desconoce. Te explicamos qué es y por qué puede salvarte el negocio.",
  "datePublished": "2024-10-28",
  "dateModified":  "2024-10-28",
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
    "@id": "https://consultoriahost.es/blog/interim-management-espana"
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
        <span class="page-header__breadcrumb-current">Interim Management</span>
      </nav>

      <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);">
        <span class="badge badge--blue">Empresas</span>
        <span style="font-size:var(--text-sm);color:rgba(255,255,255,.6);">
          28 oct. 2024 · 6 min de lectura
        </span>
      </div>

      <h1 class="page-header__title" style="max-width:820px;">
        Interim Management:<br>el servicio que España<br>aún no conoce bien
      </h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        En otros países es la primera opción cuando una empresa
        necesita resolver una situación crítica. En España aún
        se desconoce. Aquí te explicamos qué es y por qué
        puede salvarte el negocio.
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
          $h3   = 'font-size:var(--text-xl);color:var(--color-navy);margin-top:var(--space-8);margin-bottom:var(--space-4);';
          $lead = 'font-size:var(--text-xl);color:var(--color-text-secondary);line-height:1.8;margin-bottom:var(--space-8);max-width:none;font-style:italic;';
          ?>

          <p style="<?= $lead ?>">
            Imagina que el director general de tu empresa se pone enfermo de
            gravedad durante seis meses. O que descubres que tu responsable
            financiero ha llevado las cuentas mal durante dos años. O que acabas
            de ganar un contrato que triplica tu facturación pero no tienes
            equipo para ejecutarlo.
          </p>

          <p style="<?= $p ?>">
            En Alemania, Reino Unido o los Países Bajos, la respuesta inmediata
            a cualquiera de esas situaciones es la misma: un Interim Manager.
            En España, la mayoría de las empresas ni siquiera saben que esa
            opción existe.
          </p>


          <!-- H2: Qué es exactamente -->
          <h2 id="que-es-interim-manager" style="<?= $h2 ?>">Qué es exactamente un Interim Manager</h2>

          <p style="<?= $p ?>">
            Un Interim Manager es un directivo o profesional de alto nivel que
            se incorpora a una empresa de forma <strong style="color:var(--color-text-primary);">temporal y con un objetivo
            concreto</strong>. No es un consultor externo que opina desde fuera.
            No es un empleado que se contrata para siempre. Es alguien que entra,
            ocupa una posición dentro de la organización, resuelve la situación
            y sale.
          </p>

          <p style="<?= $p ?>">
            La diferencia con un consultor tradicional es fundamental: el Interim
            Manager tiene autoridad real dentro de la empresa para tomar decisiones,
            gestionar equipos y ejecutar cambios. No entrega un informe con
            recomendaciones — ejecuta él mismo.
          </p>

          <!-- Comparativa visual -->
          <div style="
            display:grid;grid-template-columns:1fr 1fr;
            gap:var(--space-4);margin-bottom:var(--space-8);
          ">
            <div style="
              background:#FEF2F2;border:1px solid #FECACA;
              border-radius:var(--radius-xl);padding:var(--space-6);
            ">
              <div style="font-weight:700;font-size:var(--text-base);color:#991B1B;margin-bottom:var(--space-4);">
                Consultor tradicional
              </div>
              <?php
              $no = [
                'Analiza la situación desde fuera',
                'Entrega recomendaciones',
                'No tiene autoridad interna',
                'Tú implementas sus consejos',
                'Cobra igualmente si no funciona',
              ];
              foreach ($no as $item): ?>
              <div style="display:flex;gap:var(--space-2);margin-bottom:var(--space-2);font-size:var(--text-sm);color:#991B1B;">
                <span style="flex-shrink:0;">✗</span>
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </div>
              <?php endforeach; ?>
            </div>

            <div style="
              background:var(--color-green-light);border:1px solid var(--color-green);
              border-radius:var(--radius-xl);padding:var(--space-6);
            ">
              <div style="font-weight:700;font-size:var(--text-base);color:var(--color-green);margin-bottom:var(--space-4);">
                Interim Manager
              </div>
              <?php
              $si = [
                'Se integra en la empresa',
                'Toma decisiones y ejecuta',
                'Tiene autoridad real',
                'Gestiona personas y recursos',
                'Su objetivo es el resultado',
              ];
              foreach ($si as $item): ?>
              <div style="display:flex;gap:var(--space-2);margin-bottom:var(--space-2);font-size:var(--text-sm);color:var(--color-green);">
                <span style="flex-shrink:0;">✓</span>
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </div>
              <?php endforeach; ?>
            </div>
          </div>


          <!-- H2: Cuándo se usa -->
          <h2 id="cuando-recurrir" style="<?= $h2 ?>">Cuándo tiene sentido recurrir a un Interim Manager</h2>

          <p style="<?= $p ?>">
            No es un recurso para situaciones ordinarias. Es para cuando la
            empresa necesita capacidad directiva de alto nivel de forma urgente
            y no puede esperar los meses que tardaría en contratar y formar
            a alguien de forma permanente.
          </p>

          <?php
          $situaciones = [
            [
              'briefcase', 'var(--color-blue)',
              'Ausencia inesperada de un directivo clave',
              'Enfermedad prolongada, fallecimiento, dimisión repentina. La empresa no puede quedarse sin timón mientras busca un sustituto permanente. El Interim toma el puesto y mantiene el rumbo.',
            ],
            [
              'chart-bar', 'var(--color-orange)',
              'Crisis financiera o de gestión',
              'Cuando las cuentas no cuadran, los proveedores presionan y el banco empieza a ponerse nervioso. Se necesita alguien que sepa exactamente qué palancas mover y tenga la experiencia para moverlas.',
            ],
            [
              'refresh', 'var(--color-green)',
              'Reestructuración o cambio de modelo',
              'Fusiones, escisiones, cambios de rumbo estratégico. Procesos que requieren un liderazgo específico para ese momento de transición, sin las ataduras políticas de quien lleva años en la casa.',
            ],
            [
              'rocket', 'var(--color-navy)',
              'Crecimiento rápido que supera la estructura',
              'Ganar un contrato grande, abrir un nuevo mercado, multiplicar la plantilla en poco tiempo. La empresa crece más rápido de lo que puede gestionar. El Interim pone el orden que el crecimiento necesita.',
            ],
            [
              'target', 'var(--color-blue)',
              'Proyecto específico de alta exigencia',
              'Una transformación digital, la implantación de un ERP, la apertura de una nueva línea de negocio. Proyectos que requieren un perfil muy concreto durante un tiempo limitado.',
            ],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-5);margin-bottom:var(--space-8);">
            <?php foreach ($situaciones as [$icono, $color, $titulo, $desc]): ?>
            <div style="display:flex;gap:var(--space-5);align-items:flex-start;">
              <div style="
                width:48px;height:48px;border-radius:var(--radius-xl);
                background:<?= $color ?>;
                display:flex;align-items:center;justify-content:center;
                flex-shrink:0;color:white;
              "><?= icon($icono, size: 22) ?></div>
              <div>
                <h3 style="font-size:var(--text-lg);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-2);">
                  <?= $titulo ?>
                </h3>
                <p style="font-size:var(--text-base);color:var(--color-text-secondary);line-height:1.7;max-width:none;margin:0;">
                  <?= $desc ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>


          <!-- H2: Por qué en España no se conoce -->
          <h2 id="por-que-no-se-conoce" style="<?= $h2 ?>">Por qué en España no se conoce</h2>

          <p style="<?= $p ?>">
            En Reino Unido, el mercado de Interim Management mueve más de
            1.500 millones de libras al año. En Alemania hay asociaciones
            profesionales de Interim Managers con décadas de historia.
            En los Países Bajos, el Interim Management es la primera llamada
            que hace un Consejo de Administración ante una crisis.
          </p>

          <p style="<?= $p ?>">
            En España, la conversación más habitual cuando se menciona este término
            es: <em>"¿Interim qué?"</em>
          </p>

          <p style="<?= $p ?>">
            Hay razones culturales y estructurales que explican este retraso.
            El tejido empresarial español está dominado por microempresas y
            negocios familiares donde la figura del directivo externo temporal
            genera desconfianza — "¿cómo va a entender mi negocio alguien de fuera?"
            — y donde el concepto de pagar por liderazgo sin que sea una
            contratación permanente resulta difícil de encajar.
          </p>

          <!-- Cita destacada -->
          <blockquote style="
            margin:var(--space-8) 0;
            padding:var(--space-6) var(--space-8);
            background:rgba(26,86,168,.06);
            border-left:4px solid var(--color-blue);
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
              "La desconfianza hacia lo externo es comprensible. Pero en situaciones
              de crisis, precisamente lo que hace falta es una mirada sin las
              ataduras emocionales de quien está dentro."
            </p>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;margin:0;">
              La objetividad que da la distancia no es una debilidad del Interim —
              es su principal fortaleza.
            </p>
          </blockquote>

          <p style="<?= $p ?>">
            Hay también una confusión frecuente entre el Interim Manager y
            el ETT (empresa de trabajo temporal) o el autónomo por horas.
            No es lo mismo. El Interim Manager aporta experiencia directiva
            de nivel senior, se implica con el proyecto como si fuera suyo
            y cobra en función del resultado y el tiempo — no por hora de presencia.
          </p>


          <!-- H2: Qué ventajas concretas aporta -->
          <h2 id="ventajas-concretas" style="<?= $h2 ?>">Qué ventajas concretas aporta</h2>

          <p style="<?= $p ?>">
            Más allá de resolver la situación inmediata, el Interim Management
            tiene ventajas estructurales que conviene conocer:
          </p>

          <?php
          $ventajas = [
            ['Sin costes de estructura permanente',
             'No hay salario fijo mensual indefinido, no hay Seguridad Social, no hay indemnización por despido. Se paga por el tiempo de servicio y se termina cuando el objetivo está cumplido.'],
            ['Disponibilidad inmediata',
             'Un buen Interim Manager puede estar operativo en días. No hay curva de aprendizaje de meses ni período de prueba. Viene con experiencia y se pone en marcha.'],
            ['Objetividad sin ataduras políticas',
             'Alguien que lleva diez años en la empresa tiene compromisos con personas, inercias y hábitos que dificultan las decisiones difíciles. El Interim no. Puede hacer lo que hay que hacer.'],
            ['Transferencia de conocimiento',
             'Al salir, el Interim deja una organización más capaz que cuando llegó. Eso incluye procesos documentados, equipos entrenados y una estructura que funciona sin él.'],
            ['Perfil a medida',
             'Cada situación requiere un perfil diferente. No existe el Interim Manager genérico: se busca exactamente la experiencia que la empresa necesita para esa situación concreta.'],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-3);margin-bottom:var(--space-8);">
            <?php foreach ($ventajas as [$titulo, $desc]): ?>
            <div style="
              padding:var(--space-5) var(--space-6);
              background:var(--color-off-white);
              border-radius:var(--radius-xl);
              border:1px solid var(--color-border);
              display:flex;gap:var(--space-4);
            ">
              <div style="
                color:var(--color-blue);flex-shrink:0;
                font-weight:800;font-size:var(--text-lg);line-height:1.3;
                margin-top:1px;
              "><?= icon('lightbulb', size: 20, color: 'var(--color-blue)') ?></div>
              <div>
                <strong style="display:block;font-size:var(--text-base);color:var(--color-text-primary);margin-bottom:var(--space-1);">
                  <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
                </strong>
                <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.65;max-width:none;margin:0;">
                  <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>


          <!-- H2: Un caso real para entenderlo -->
          <h2 id="caso-real" style="<?= $h2 ?>">Un caso real para entenderlo</h2>

          <p style="<?= $p ?>">
            Una empresa distribuidora con 18 empleados pierde a su director
            comercial de forma repentina. Era quien mantenía las relaciones con
            los tres clientes que representan el 60% de la facturación.
          </p>

          <p style="<?= $p ?>">
            La primera reacción del propietario es: "voy a contratar a alguien
            cuanto antes". Busca candidatos, hace entrevistas, hace más entrevistas,
            el proceso se alarga cuatro meses. Mientras tanto, dos de los tres
            clientes clave empiezan a hablar con la competencia porque no se
            sienten atendidos. El tercero ya ha reducido su pedido un 30%.
          </p>

          <p style="<?= $p ?>">
            Un Interim Manager comercial, incorporado en la primera semana tras
            la salida, habría mantenido esas relaciones, gestionado la transición
            y dejado la cartera de clientes en orden para quien llegara después.
          </p>

          <!-- Bloque de impacto -->
          <div style="
            background:var(--color-navy);
            border-radius:var(--radius-2xl);
            padding:var(--space-8) var(--space-10);
            margin-bottom:var(--space-8);
            display:grid;grid-template-columns:1fr 1fr;gap:var(--space-8);
          ">
            <div>
              <div style="
                font-size:var(--text-xs);font-weight:700;
                letter-spacing:.08em;text-transform:uppercase;
                color:rgba(255,255,255,.5);margin-bottom:var(--space-3);
              ">Sin Interim Manager</div>
              <?php
              $sin = [
                '4 meses de vacío directivo',
                'Clientes sin interlocutor',
                'Pérdida de confianza',
                'Bajada de facturación',
                'Contratación bajo presión',
              ];
              foreach ($sin as $s): ?>
              <div style="display:flex;gap:var(--space-2);margin-bottom:var(--space-2);font-size:var(--text-sm);color:rgba(255,100,100,.8);">
                <span style="flex-shrink:0;">✗</span>
                <?= htmlspecialchars($s, ENT_QUOTES, 'UTF-8') ?>
              </div>
              <?php endforeach; ?>
            </div>
            <div>
              <div style="
                font-size:var(--text-xs);font-weight:700;
                letter-spacing:.08em;text-transform:uppercase;
                color:rgba(255,255,255,.5);margin-bottom:var(--space-3);
              ">Con Interim Manager</div>
              <?php
              $con = [
                'Continuidad desde el día 1',
                'Clientes mantenidos y fidelizados',
                'Transición ordenada',
                'Facturación protegida',
                'Contratación con tiempo y criterio',
              ];
              foreach ($con as $c): ?>
              <div style="display:flex;gap:var(--space-2);margin-bottom:var(--space-2);font-size:var(--text-sm);color:rgba(100,220,100,.8);">
                <span style="flex-shrink:0;">✓</span>
                <?= htmlspecialchars($c, ENT_QUOTES, 'UTF-8') ?>
              </div>
              <?php endforeach; ?>
            </div>
          </div>


          <!-- H2: El Interim Management en HOST -->
          <h2 id="interim-en-host" style="<?= $h2 ?>">El Interim Management en Consultoría HOST</h2>

          <p style="<?= $p ?>">
            En HOST ofrecemos el servicio de Interim Management como parte de
            nuestra Consultoría 3.0. La filosofía es la misma: no enviamos a alguien
            a observar desde fuera — nos integramos, tomamos posición y resolvemos.
          </p>

          <p style="<?= $p ?>">
            Lo hacemos especialmente para microempresas y pymes donde el perfil
            que se necesita de forma temporal no justifica una contratación
            permanente, pero donde la ausencia de ese perfil puede costar
            muy caro si no se cubre a tiempo.
          </p>

          <p style="<?= $p ?>">
            Antes de proponer nada, analizamos la situación concreta: qué capacidad
            falta, cuánto tiempo se necesita y cuál es el objetivo específico.
            A partir de ahí, definimos el encargo con precisión y empezamos.
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
              Hablar sobre tu situación
            </a>
            <a href="../servicios/organizacional" class="btn btn--outline btn--lg">
              Ver servicio completo
            </a>
          </div>


          <!-- Artículos relacionados -->
          <div style="margin-top:var(--space-16);">
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-6);color:var(--color-navy);">
              También puede interesarte
            </h3>
            <div class="article-related-grid">
              <?php
              $relacionados_slugs = ['que-es-la-consultoria-3-0', 'formacion-ia-obligatoria-articulo-4'];
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
                ['Categoría',  'Empresas'],
                ['Publicado',  '28 de octubre de 2024'],
                ['Lectura',    '6 minutos'],
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
                  ['Qué es exactamente un Interim Manager', 'que-es-interim-manager'],
                  ['Cuándo tiene sentido recurrir a uno',   'cuando-recurrir'],
                  ['Por qué en España no se conoce',        'por-que-no-se-conoce'],
                  ['Qué ventajas concretas aporta',         'ventajas-concretas'],
                  ['Un caso real para entenderlo',          'caso-real'],
                  ['El Interim Management en HOST',         'interim-en-host'],
                ];
                foreach ($indice as [$label, $anchor]):
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
                  <a href="#<?= $anchor ?>" style="color:inherit;text-decoration:none;"
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
            background:var(--gradient-card);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            text-align:center;
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 70% 30%, rgba(232,98,26,.2) 0%, transparent 60%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <div style="color:var(--color-amber);margin-bottom:var(--space-3);">
                <?= icon('briefcase', size: 32) ?>
              </div>
              <h3 style="font-family:var(--font-display);font-weight:700;font-size:var(--text-base);color:white;margin-bottom:var(--space-3);">
                ¿Necesitas un Interim Manager?
              </h3>
              <p style="font-size:var(--text-sm);color:rgba(255,255,255,.75);line-height:1.5;max-width:none;margin-bottom:var(--space-5);">
                Cuéntanos la situación. Valoramos juntos si tiene sentido y cómo abordarlo.
              </p>
              <a href="../contacto" class="btn btn--primary btn--sm" style="width:100%;justify-content:center;">
                Contactar ahora
              </a>
              <p style="margin-top:var(--space-3);font-size:var(--text-xs);color:rgba(255,255,255,.5);">
                <a href="tel:<?= SITE_PHONE_E164 ?>" style="color:rgba(255,255,255,.5);">
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
            ¿Tu empresa está pasando por una situación crítica?
          </h2>
          <p class="cta-banner__subtitle">
            No esperes a que el problema crezca.
            La primera consulta es gratuita y sin compromiso.
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
