<?php
/**
 * CONSULTORÍA HOST — Artículo de blog
 * Archivo: public_html/blog/que-es-la-consultoria-3-0.php
 *
 * Artículo: ¿Qué es la Consultoría 3.0 y por qué importa?
 * Categoría: Consultoría
 * Fecha: 2025-03-10
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = '¿Qué es la Consultoría 3.0 y por qué importa?';
$page_description = 'La consultoría tradicional llena cajones de informes. La Consultoría 3.0 de HOST sale a la calle y genera resultados reales junto al cliente. Descubre la diferencia.';
$page_keywords    = 'consultoría 3.0, qué es consultoría, consultoría empresarial, microempresa, consultoría activa, HOST';
$page_canonical   = 'https://consultoriahost.es/blog/que-es-la-consultoria-3-0';

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "¿Qué es la Consultoría 3.0 y por qué importa?",
  "description": "La consultoría tradicional llena cajones de informes. La Consultoría 3.0 de HOST sale a la calle y genera resultados reales junto al cliente.",
  "datePublished": "2025-03-10",
  "dateModified":  "2025-03-10",
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
    "@id": "https://consultoriahost.es/blog/que-es-la-consultoria-3-0"
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
        <a href="/">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <a href="/blog/">Blog</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Consultoría 3.0</span>
      </nav>

      <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);">
        <span class="badge badge--orange">Consultoría</span>
        <span style="font-size:var(--text-sm);color:rgba(255,255,255,.6);">
          10 mar. 2025 · 5 min de lectura
        </span>
      </div>

      <h1 class="page-header__title" style="max-width:820px;">
        ¿Qué es la Consultoría 3.0<br>y por qué importa?
      </h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        La consultoría tradicional llena cajones de informes.
        La Consultoría 3.0 sale a la calle y genera resultados
        reales junto al cliente. Aquí está la diferencia.
      </p>

    </div>
  </div>


  <!-- =====================================================
       CUERPO DEL ARTÍCULO
       ===================================================== -->
  <section class="section section--white">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 320px;gap:var(--space-16);align-items:start;">

        <!-- Columna principal: contenido -->
        <article aria-label="Contenido del artículo" style="min-width:0;">

          <?php
          /* Estilos reutilizables para el cuerpo del artículo */
          $p    = 'font-size:var(--text-lg);color:var(--color-text-secondary);line-height:1.85;margin-bottom:var(--space-6);max-width:none;';
          $h2   = 'font-size:var(--text-3xl);color:var(--color-navy);margin-top:var(--space-12);margin-bottom:var(--space-5);letter-spacing:var(--letter-spacing-tight);';
          $h3   = 'font-size:var(--text-xl);color:var(--color-navy);margin-top:var(--space-8);margin-bottom:var(--space-4);';
          $lead = 'font-size:var(--text-xl);color:var(--color-text-secondary);line-height:1.8;margin-bottom:var(--space-8);max-width:none;font-style:italic;';
          ?>

          <!-- Párrafo de entrada -->
          <p style="<?= $lead ?>">
            En España hay miles de consultorías. Muchas hacen un trabajo excelente.
            Pero la mayoría comparten una característica: cuando terminan su trabajo,
            el problema sigue siendo tuyo.
          </p>

          <p style="<?= $p ?>">
            El informe está en el cajón. El diagnóstico, impecable. Las recomendaciones,
            razonadas al milímetro. Y la empresa sigue igual, o peor, porque nadie ha
            hecho nada con todo ese papel.
          </p>

          <p style="<?= $p ?>">
            La Consultoría 3.0 nace para resolver exactamente eso.
          </p>


          <!-- H2: ¿Qué significa el "3.0"? -->
          <h2 id="que-significa-30" style="<?= $h2 ?>">¿Qué significa el "3.0"?</h2>

          <p style="<?= $p ?>">
            No es una etiqueta de marketing. Es una forma de distinguir tres modelos
            de consultoría que han existido y existen en paralelo:
          </p>

          <?php
          $modelos = [
            ['1.0', 'var(--color-gray-400)',
             'La consultoría del análisis',
             'El consultor llega, analiza, elabora un informe y se va. Punto final. Lo que hagas con ese informe ya es problema tuyo. Este modelo sigue siendo mayoritario.'],
            ['2.0', 'var(--color-blue)',
             'La consultoría del acompañamiento',
             'El consultor analiza y además orienta durante la implementación. Hay seguimiento, reuniones periódicas, correcciones sobre la marcha. Un paso adelante, pero el cliente sigue siendo quien ejecuta.'],
            ['3.0', 'var(--color-orange)',
             'La consultoría de la acción',
             'El consultor se implica directamente en la resolución. Sale de su despacho, trabaja codo con codo con el equipo, ocupa posiciones si es necesario, y no se va hasta que el problema está resuelto. Los resultados son de ambos.'],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-4);margin-bottom:var(--space-8);">
            <?php foreach ($modelos as $m): ?>
            <div style="
              display:flex;gap:var(--space-5);
              padding:var(--space-5) var(--space-6);
              background:var(--color-off-white);
              border-radius:var(--radius-xl);
              border-left:4px solid <?= $m[1] ?>;
            ">
              <div style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-2xl);color:<?= $m[1] ?>;
                flex-shrink:0;line-height:1.2;min-width:48px;
              "><?= $m[0] ?></div>
              <div>
                <div style="font-weight:700;font-size:var(--text-base);color:var(--color-text-primary);margin-bottom:var(--space-1);">
                  <?= $m[2] ?>
                </div>
                <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.65;max-width:none;margin:0;">
                  <?= $m[3] ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            En Consultoría HOST trabajamos en el modelo 3.0 desde el primer día.
            No porque sea una moda, sino porque es el único modelo que genera
            resultados reales para una microempresa española en el contexto actual.
          </p>


          <!-- H2: Por qué el modelo 1.0 y 2.0 no funcionan para la mayoría -->
          <h2 id="por-que-modelos-anteriores" style="<?= $h2 ?>">Por qué los modelos anteriores no funcionan<br>para la mayoría</h2>

          <p style="<?= $p ?>">
            Una empresa grande puede permitirse contratar a un consultor que le entregue
            un informe de 200 páginas. Tiene un equipo de dirección que lo analiza,
            un departamento de proyectos que lo implementa y un presupuesto que absorbe
            el coste aunque el resultado tarde.
          </p>

          <p style="<?= $p ?>">
            Una microempresa de 5 personas no tiene ninguna de esas cosas.
          </p>

          <p style="<?= $p ?>">
            El 95% de las empresas españolas tiene menos de 10 empleados. Para ellas,
            contratar una consultoría que solo diagnostica no es un lujo — es un error.
            Porque el diagnóstico sin implementación no cambia nada. Y el tiempo y el
            dinero invertidos en ese diagnóstico no los recuperas.
          </p>

          <!-- Cita destacada -->
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
              "Hay chistes muy buenos sobre los consultores. Que llegan, te piden
              el reloj prestado, te dicen la hora que es y te cobran por ello."
            </p>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;margin:0;">
              El chiste es bueno porque es verdad — para una parte de la profesión.
            </p>
          </blockquote>

          <p style="<?= $p ?>">
            La Consultoría 3.0 rompe con ese esquema. Aquí el consultor no te presta
            el reloj ni te cobra por decirte la hora. Se sienta contigo, averigua
            por qué llegas tarde a todas partes y trabaja para que eso cambie.
          </p>


          <!-- H2: Cómo funciona en la práctica -->
          <h2 id="como-funciona" style="<?= $h2 ?>">Cómo funciona en la práctica</h2>

          <p style="<?= $p ?>">
            La Consultoría 3.0 no tiene un proceso único. Cada cliente tiene su situación,
            sus recursos y su contexto. Pero hay una secuencia que se repite:
          </p>

          <?php
          $pasos = [
            ['target',   'var(--color-orange)', '1. Identificación honesta',
             'Antes de proponer nada, entendemos qué está pasando de verdad. No lo que el cliente cree que pasa, sino lo que realmente ocurre. Eso requiere escuchar mucho, preguntar bien y no tener miedo a decir lo que se ve.'],
            ['compass',  'var(--color-blue)',   '2. Plan sin adornos',
             'Lo que se hace a continuación tiene que ser factible con los recursos que hay — no con los que debería haber. Un plan perfecto que no se puede ejecutar es tan inútil como no tener ninguno.'],
            ['handshake','var(--color-green)',  '3. Ejecución codo con codo',
             'Aquí es donde la Consultoría 3.0 se diferencia. No enviamos un email con recomendaciones. Nos ponemos al lado del cliente y hacemos. Si hay que hablar con proveedores, hablamos. Si hay que reorganizar un proceso, lo reorganizamos juntos.'],
            ['refresh',  'var(--color-navy)',   '4. Ajuste continuo',
             'La realidad siempre sorprende. Lo que funciona en el papel necesita adaptarse en la práctica. Estar presentes durante la ejecución permite corregir a tiempo, sin que un pequeño problema se convierta en uno grande.'],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-5);margin-bottom:var(--space-8);">
            <?php foreach ($pasos as [$icono, $color, $titulo, $desc]): ?>
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


          <!-- H2: El concepto "solución-solución" -->
          <h2 id="solucion-solucion" style="<?= $h2 ?>">El concepto "solución-solución"</h2>

          <p style="<?= $p ?>">
            En HOST usamos este término para describir algo que parece obvio pero que
            en la práctica se ignora constantemente: <strong style="color:var(--color-text-primary);">una solución que genera un nuevo
            problema no es una solución, es una trampa.</strong>
          </p>

          <p style="<?= $p ?>">
            Hemos visto muchas veces cómo una empresa contrata a un consultor que
            "resuelve" su problema de liquidez recomendando un crédito que luego no
            puede pagar. O que "soluciona" un conflicto interno despidiendo a la
            persona equivocada y se queda sin el conocimiento clave que esa persona tenía.
          </p>

          <p style="<?= $p ?>">
            En la Consultoría 3.0, cada solución se analiza también por sus consecuencias
            indirectas. Si algo colateral va a generar, que sean beneficios: más empleo,
            más estabilidad, más margen de maniobra para el futuro.
          </p>


          <!-- H2: ¿Para quién es la Consultoría 3.0? -->
          <h2 id="para-quien" style="<?= $h2 ?>">¿Para quién es la Consultoría 3.0?</h2>

          <p style="<?= $p ?>">
            Para quien tenga un problema real y quiera resolverlo de verdad.
            Dicho así suena amplio, y lo es. Pero en la práctica, la Consultoría 3.0
            encaja especialmente bien con:
          </p>

          <?php
          $perfiles = [
            ['Microempresas y autónomos', 'Que no tienen ni el tiempo ni los recursos para implementar solos lo que un informe les recomienda.'],
            ['Empresas en situación crítica', 'Donde el tiempo apremia y no hay margen para que la solución tarde meses en llegar.'],
            ['Emprendedores con proyecto', 'Que necesitan validar su idea antes de comprometer dinero, tiempo y relaciones personales.'],
            ['Profesionales en transición', 'Que quieren reorientar su carrera o actividad y necesitan más que orientación: necesitan acompañamiento real.'],
          ];
          ?>

          <ul style="display:flex;flex-direction:column;gap:var(--space-3);margin-bottom:var(--space-8);">
            <?php foreach ($perfiles as [$titulo, $desc]): ?>
            <li style="
              display:flex;gap:var(--space-3);
              padding:var(--space-4) var(--space-5);
              background:var(--color-off-white);
              border-radius:var(--radius-lg);
              border:1px solid var(--color-border);
            ">
              <span style="color:var(--color-orange);flex-shrink:0;font-weight:700;margin-top:1px;">✓</span>
              <div>
                <strong style="color:var(--color-text-primary);font-size:var(--text-base);">
                  <?= $titulo ?>
                </strong>
                <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                  <?= $desc ?>
                </p>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>


          <!-- H2: La pregunta que hay que hacerse -->
          <h2 id="la-pregunta" style="<?= $h2 ?>">La pregunta que hay que hacerse</h2>

          <p style="<?= $p ?>">
            Antes de contratar cualquier servicio de consultoría, hay una pregunta
            que vale la pena plantear directamente:
          </p>

          <div style="
            background:var(--color-navy);
            border-radius:var(--radius-2xl);
            padding:var(--space-8) var(--space-10);
            margin-bottom:var(--space-8);
            text-align:center;
          ">
            <p style="
              font-family:var(--font-display);
              font-size:var(--text-2xl);
              font-weight:700;
              color:white;
              line-height:1.4;
              max-width:none;
              margin:0 0 var(--space-4);
            ">
              ¿Cuándo acaba tu trabajo con nosotros?<br>
              <span class="text-amber">¿Cuándo entregues el informe, o cuando el problema esté resuelto?</span>
            </p>
            <p style="color:rgba(255,255,255,.65);font-size:var(--text-base);max-width:none;margin:0;">
              La respuesta a esa pregunta lo dice todo sobre el modelo de consultoría
              que tienes delante.
            </p>
          </div>

          <p style="<?= $p ?>">
            En HOST la respuesta siempre es la segunda. No medimos nuestro trabajo
            por lo que entregamos, sino por lo que cambia.
          </p>


          <!-- Conclusión -->
          <h2 id="en-resumen" style="<?= $h2 ?>">En resumen</h2>

          <p style="<?= $p ?>">
            La Consultoría 3.0 no es mejor que la 1.0 o la 2.0 en abstracto.
            Es la adecuada para quien necesita que las cosas cambien de verdad,
            con los recursos que tiene, en el tiempo que tiene.
          </p>

          <p style="<?= $p ?>">
            Si estás en esa situación, la primera consulta con HOST es gratuita
            y sin compromiso. Cuéntanos qué está pasando y valoramos juntos
            si podemos ayudarte — y cómo.
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
              Primera consulta gratuita
            </a>
            <a href="../consultoria" class="btn btn--outline btn--lg">
              Ver todos los servicios
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
                ['errores-emprendimiento-evitar',
                 'Emprendimiento',
                 'badge--blue',
                 '7 errores de emprendimiento que puedes evitar con el Método HOST',
                 '7 min'],
                ['formacion-ia-obligatoria-articulo-4',
                 'Formación',
                 'badge--amber',
                 'Formación en IA obligatoria: lo que exige el Artículo 4',
                 '8 min'],
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
                  <?= $titulo ?>
                </p>
                <span style="font-size:var(--text-xs);color:var(--color-text-muted);"><?= $lectura ?> lectura</span>
              </a>
              <?php endforeach; ?>
            </div>
          </div>

        </article>


        <!-- Columna lateral: sidebar -->
        <aside aria-label="Información del artículo" style="position:sticky;top:calc(var(--nav-height) + var(--space-6));">

          <!-- Metadatos del artículo -->
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
                ['Categoría',  'Consultoría'],
                ['Publicado',  '10 de marzo de 2025'],
                ['Lectura',    '5 minutos'],
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

          <!-- Índice de contenidos -->
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
              <ul style="display:flex;flex-direction:column;gap:var(--space-2);">
                <?php
                $indice = [
                  ['¿Qué significa el "3.0"?',                  'que-significa-30'],
                  ['Por qué los modelos anteriores no funcionan', 'por-que-modelos-anteriores'],
                  ['Cómo funciona en la práctica',               'como-funciona'],
                  ['El concepto "solución-solución"',            'solucion-solucion'],
                  ['¿Para quién es la Consultoría 3.0?',         'para-quien'],
                  ['La pregunta que hay que hacerse',             'la-pregunta'],
                  ['En resumen',                                 'en-resumen'],
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
                  <span style="color:var(--color-orange);flex-shrink:0;font-weight:700;" aria-hidden="true">›</span>
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
            background:var(--gradient-hero);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            text-align:center;
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 30% 70%, rgba(232,98,26,.25) 0%, transparent 60%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <div style="color:var(--color-amber);margin-bottom:var(--space-3);">
                <?= icon('target', size: 32) ?>
              </div>
              <h3 style="font-family:var(--font-display);font-weight:700;font-size:var(--text-base);color:white;margin-bottom:var(--space-3);">
                ¿Tienes un problema que resolver?
              </h3>
              <p style="font-size:var(--text-sm);color:rgba(255,255,255,.75);line-height:1.5;max-width:none;margin-bottom:var(--space-5);">
                La primera consulta es gratuita y sin compromiso.
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
          <h2 class="cta-banner__title">¿Listo para que algo cambie de verdad?</h2>
          <p class="cta-banner__subtitle">
            Sin compromisos. Sin informes que nadie lee.
            Solo resultados.
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
