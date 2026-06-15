<?php
/**
 * CONSULTORÍA HOST — Artículo de blog
 * Archivo: public_html/blog/vertedero-sesena-solucion-real.php
 *
 * Artículo: El vertedero de Seseña tiene solución. Y es gratuita para las arcas públicas.
 * Categoría: Medioambiente
 * Fecha: 2025-01-22
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = 'El vertedero de Seseña tiene solución. Y es gratuita para las arcas públicas.';
$page_description = 'El mayor vertedero de neumáticos de Europa lleva décadas esperando una solución real. HOST la tiene: retirada gratuita para la administración, recuperación del material y generación de empleo.';
$page_keywords    = 'vertedero Seseña, neumáticos Seseña, residuos neumáticos España, medioambiente Seseña, solución vertedero, HOST medioambiente';
$page_canonical   = 'https://consultoriahost.es/blog/vertedero-sesena-solucion-real';

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "El vertedero de Seseña tiene solución. Y es gratuita para las arcas públicas.",
  "description": "El mayor vertedero de neumáticos de Europa lleva décadas esperando una solución real. HOST la tiene: retirada gratuita para la administración, recuperación del material y generación de empleo.",
  "datePublished": "2025-01-22",
  "dateModified":  "2025-01-22",
  "author": {
    "@type": "Organization",
    "name": "Consultoría HOST",
    "url":  "https://consultoriahost.es"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Consultoría HOST",
    "url":  "https://consultoriahost.es"
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://consultoriahost.es/blog/vertedero-sesena-solucion-real"
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
        <span class="page-header__breadcrumb-current">Vertedero de Seseña</span>
      </nav>

      <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);">
        <span class="badge badge--green">Medioambiente</span>
        <span style="font-size:var(--text-sm);color:rgba(255,255,255,.6);">
          22 ene. 2025 · 6 min de lectura
        </span>
      </div>

      <h1 class="page-header__title" style="max-width:860px;">
        El vertedero de Seseña<br>tiene solución.<br>
        <span style="color:var(--color-amber);">Y es gratuita para<br>las arcas públicas.</span>
      </h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        El mayor vertedero de neumáticos de Europa lleva décadas
        esperando una solución real. HOST la tiene. Sin coste para
        la administración, con beneficios medioambientales
        y generación de empleo local.
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
            Hay problemas que duran tanto que acaban pareciendo inevitables.
            El vertedero de neumáticos de Seseña, en Toledo, lleva más de
            tres décadas siendo el problema medioambiental más escandaloso
            de la España interior. Todos lo conocen. Nadie lo ha resuelto.
            No porque no tenga solución — sino porque la solución nunca
            ha llegado a quien podría ejecutarla.
          </p>

          <p style="<?= $p ?>">
            Este artículo es sobre eso. Sobre la solución. Y sobre por qué
            sigue sin aplicarse.
          </p>


          <!-- H2: El problema en números -->
          <h2 style="<?= $h2 ?>">El problema en números</h2>

          <p style="<?= $p ?>">
            El vertedero ilegal de Seseña acumula aproximadamente
            <strong style="color:var(--color-text-primary);">100.000 toneladas de neumáticos fuera de uso</strong>.
            Es el mayor vertedero de este tipo de Europa.
            No está en un lugar remoto — está a menos de 40 kilómetros de Madrid,
            entre las provincias de Toledo y Madrid, en una zona con miles
            de personas viviendo en su entorno inmediato.
          </p>

          <!-- Datos en bloques -->
          <div style="
            display:grid;grid-template-columns:repeat(3,1fr);
            gap:var(--space-4);margin-bottom:var(--space-8);
          ">
            <?php
            $datos = [
              ['100.000', 'toneladas', 'de neumáticos acumulados'],
              ['+30', 'años', 'de problema sin resolver'],
              ['40 km', 'de Madrid', 'en zona habitada'],
            ];
            foreach ($datos as [$num, $unit, $desc]):
            ?>
            <div style="
              background:var(--color-off-white);
              border:1px solid var(--color-border);
              border-radius:var(--radius-xl);
              padding:var(--space-5);
              text-align:center;
            ">
              <div style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-4xl);color:var(--color-navy);
                line-height:1;margin-bottom:var(--space-1);
              "><?= $num ?></div>
              <div style="
                font-size:var(--text-sm);font-weight:700;
                color:var(--color-orange);margin-bottom:var(--space-1);
              "><?= $unit ?></div>
              <div style="font-size:var(--text-xs);color:var(--color-text-muted);">
                <?= $desc ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            El vertedero es un peligro constante de incendio a gran escala —
            ya hubo uno en 2016 que ardió durante semanas, generó una columna
            de humo tóxico visible desde cientos de kilómetros y obligó al
            confinamiento de miles de personas. Es una fuente de contaminación
            del suelo y los acuíferos. Y es un deterioro permanente de la
            calidad de vida y el valor del suelo para todos los municipios
            del entorno.
          </p>


          <!-- H2: Las "soluciones" que no son soluciones -->
          <h2 style="<?= $h2 ?>">Las «soluciones» que no son soluciones</h2>

          <p style="<?= $p ?>">
            A lo largo de los años se han barajado varias opciones para
            acabar con el vertedero. Conviene analizarlas desde la perspectiva
            del concepto HOST de <strong style="color:var(--color-text-primary);">"solución-solución"</strong>:
            una solución que genera un nuevo problema no es una solución.
          </p>

          <?php
          $falsas = [
            [
              'Triturar los neumáticos para césped artificial y pistas deportivas',
              'El caucho triturado que se usa como relleno en campos de fútbol artificial libera compuestos orgánicos volátiles, metales pesados y microplásticos. Varios países europeos ya han restringido o prohibido su uso. Traslada el problema a millones de personas que practican deporte sobre él.',
            ],
            [
              'Quemarlos como combustible en cementeras (co-procesamiento)',
              'Quemar neumáticos genera emisiones de dioxinas, furanos, benceno y otros compuestos altamente tóxicos. Las cementeras pueden usarlos como sustituto parcial del carbón, pero las emisiones resultantes tienen impacto sobre las poblaciones cercanas. Es aplazar el problema y dispersarlo geográficamente.',
            ],
            [
              'Exportarlos a países con menor regulación',
              'No es una solución medioambiental. Es externalizar el daño a quien tiene menos capacidad de defenderse. Incompatible con cualquier principio de responsabilidad ambiental seria.',
            ],
            [
              'Enterrarlos en vertedero controlado',
              'Los neumáticos no se degradan. Enterrarlos solo garantiza que el problema siga ahí durante siglos, con riesgo de contaminación de acuíferos a largo plazo. No resuelve nada — lo sella temporalmente.',
            ],
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-4);margin-bottom:var(--space-8);">
            <?php foreach ($falsas as [$titulo, $desc]): ?>
            <div style="
              background:#FEF2F2;
              border:1px solid #FECACA;
              border-radius:var(--radius-xl);
              padding:var(--space-5) var(--space-6);
            ">
              <div style="display:flex;gap:var(--space-3);align-items:flex-start;margin-bottom:var(--space-3);">
                <span style="
                  color:#DC2626;font-weight:800;font-size:var(--text-lg);
                  flex-shrink:0;line-height:1.2;
                ">✗</span>
                <strong style="font-size:var(--text-base);color:#7F1D1D;">
                  <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
                </strong>
              </div>
              <p style="
                font-size:var(--text-sm);color:#991B1B;
                line-height:1.65;max-width:none;margin:0;
                padding-left:calc(var(--space-3) + var(--text-lg));
                opacity:.9;
              ">
                <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            El patrón es siempre el mismo: soluciones que resuelven la imagen
            del problema sin resolver el problema. O que lo desplazan a otro
            lugar, a otro momento o a otra persona.
          </p>


          <!-- H2: La solución real -->
          <h2 style="<?= $h2 ?>">La solución real</h2>

          <p style="<?= $p ?>">
            Los neumáticos fuera de uso no son basura sin valor. Son una
            materia prima con aplicaciones industriales reales, siempre que
            el proceso de tratamiento sea el correcto.
          </p>

          <p style="<?= $p ?>">
            La solución HOST para Seseña pasa por la
            <strong style="color:var(--color-text-primary);">valorización real del material</strong>:
            recuperar los componentes del neumático — caucho, acero, fibra textil —
            mediante procesos que los devuelven al ciclo productivo como
            materias primas de segunda vida, sin generar emisiones contaminantes
            ni subproductos problemáticos.
          </p>

          <!-- Bloque solución HOST -->
          <div style="
            background:var(--color-green-light);
            border:2px solid var(--color-green);
            border-radius:var(--radius-2xl);
            padding:var(--space-8);
            margin-bottom:var(--space-8);
          ">
            <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-6);">
              <div style="color:var(--color-green);">
                <?= icon('recycle', size: 28) ?>
              </div>
              <h3 style="font-size:var(--text-xl);color:var(--color-navy);margin:0;">
                El planteamiento HOST para Seseña
              </h3>
            </div>

            <?php
            $planteamiento = [
              [
                'recycle', 'Retirada inmediata y gratuita para la administración',
                'El coste de la operación no recae sobre las arcas públicas. La valorización del material genera los recursos necesarios para financiar la recogida, el transporte y el tratamiento. Coste neto para el contribuyente: cero.',
              ],
              [
                'sprout', 'Ritmo inicial: 10 toneladas diarias',
                'Escalable en función de la capacidad instalada. A ese ritmo, el vertedero puede resolverse en un plazo de años, no de décadas. Con la posibilidad de acelerar el proceso si las condiciones lo permiten.',
              ],
              [
                'refresh', 'Valorización real, no traslado del problema',
                'Los componentes recuperados — caucho reciclado, chatarra de acero, fibra textil — tienen mercado industrial. No se entierran, no se queman, no se exportan. Se reincorporan al ciclo productivo.',
              ],
              [
                'users', 'Generación de empleo local estable',
                'La operación requiere mano de obra local cualificada y no cualificada. Es una fuente de empleo directo en una zona que lo necesita, con una duración previsible de varios años.',
              ],
              [
                'map-pin', 'Resultado final: recuperación del territorio',
                'Una vez retirado el material, la zona puede convertirse en espacio verde o parque público. De pasivo medioambiental a activo para la comunidad. Eso sí es una solución.',
              ],
            ];
            foreach ($planteamiento as [$icono, $titulo, $desc]):
            ?>
            <div style="
              display:flex;gap:var(--space-4);align-items:flex-start;
              margin-bottom:var(--space-5);
              padding-bottom:var(--space-5);
              border-bottom:1px solid rgba(45,125,70,.15);
            ">
              <div style="
                width:40px;height:40px;border-radius:var(--radius-lg);
                background:var(--color-green);
                display:flex;align-items:center;justify-content:center;
                flex-shrink:0;color:white;
              "><?= icon($icono, size: 18) ?></div>
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


          <!-- H2: Por qué sigue sin resolverse -->
          <h2 style="<?= $h2 ?>">Por qué sigue sin resolverse</h2>

          <p style="<?= $p ?>">
            Si la solución existe y no cuesta dinero público, la pregunta
            obvia es: ¿por qué el vertedero sigue ahí?
          </p>

          <p style="<?= $p ?>">
            Hay una respuesta técnica y una política. La técnica: resolver
            Seseña requiere coordinación entre administraciones — municipio,
            Junta de Castilla-La Mancha y Estado — y esa coordinación nunca
            ha ocurrido de forma efectiva. El vertedero lleva décadas siendo
            competencia de todos y responsabilidad de nadie.
          </p>

          <p style="<?= $p ?>">
            La respuesta política es más incómoda: mientras el problema no
            explota literalmente — como ocurrió en 2016 — la presión para
            resolverlo es manejable. Se emiten informes, se convocan mesas
            de trabajo, se aprueban planes de actuación. Y el vertedero
            sigue ahí.
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
              "El problema de Seseña no es técnico. Es que la solución
              correcta nunca ha llegado a la mesa de quien puede decir sí.
              HOST tiene el proyecto. Lo que falta es la voluntad política
              de ejecutarlo."
            </p>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;margin:0;">
              — Consultoría HOST, Departamento Técnico
            </p>
          </blockquote>

          <p style="<?= $p ?>">
            Hay también un factor de desconocimiento. No todas las administraciones
            implicadas conocen que existe una solución viable, financieramente
            neutra y técnicamente contrastada. Una parte importante del trabajo
            de HOST en este proyecto es exactamente esa: hacer llegar la propuesta
            a quienes tienen capacidad de decisión.
          </p>


          <!-- H2: Seseña no es un caso aislado -->
          <h2 style="<?= $h2 ?>">Seseña no es un caso aislado</h2>

          <p style="<?= $p ?>">
            El planteamiento HOST para el tratamiento de neumáticos fuera de uso
            no está diseñado únicamente para Seseña. Es un modelo replicable
            en cualquier punto del territorio nacional donde existan acumulaciones
            de este tipo — y existen, aunque con menos visibilidad.
          </p>

          <p style="<?= $p ?>">
            España genera cada año alrededor de 300.000 toneladas de neumáticos
            fuera de uso. Una parte se gestiona a través de los sistemas colectivos
            de responsabilidad ampliada del productor. Otra parte no.
            Y la que no se gestiona bien acaba en lugares como Seseña,
            o en vertederos ilegales más pequeños y menos visibles.
          </p>

          <p style="<?= $p ?>">
            El modelo HOST puede actuar en los dos planos: la remediación de
            los vertederos existentes y la gestión sostenible del flujo
            de nuevos neumáticos, generando empleo y recursos locales
            en el proceso.
          </p>


          <!-- H2: Qué puede hacer quien lee esto -->
          <h2 style="<?= $h2 ?>">Qué puede hacer quien lee esto</h2>

          <p style="<?= $p ?>">
            Si eres responsable de una administración pública — municipal,
            provincial o autonómica — y tienes jurisdicción o influencia
            sobre una zona afectada por este tipo de residuos, contacta
            con HOST. La propuesta es concreta, está documentada y puede
            presentarse en el formato que necesites.
          </p>

          <p style="<?= $p ?>">
            Si eres inversor o representas a una empresa interesada en
            participar en proyectos de economía circular con impacto
            medioambiental real y generación de empleo, también hay
            conversación posible.
          </p>

          <p style="<?= $p ?>">
            Y si simplemente conoces a alguien que pueda hacer que esta
            propuesta llegue a quien tiene que llegar, ese enlace puede
            valer más de lo que parece.
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
              Contactar sobre este proyecto
            </a>
            <a href="../servicios/tecnologico.php" class="btn btn--outline btn--lg">
              Ver proyectos medioambientales
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
                  'que-es-la-consultoria-3-0.php',
                  'Consultoría',
                  'badge--orange',
                  '¿Qué es la Consultoría 3.0 y por qué importa?',
                  '5 min',
                ],
                [
                  'mujer-rural-emprendimiento.php',
                  'Social',
                  'badge--green',
                  'Mujer rural y emprendimiento: oportunidades que no se ven',
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
                ['Categoría', 'Medioambiente'],
                ['Publicado', '22 de enero de 2025'],
                ['Lectura',   '6 minutos'],
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

          <!-- Datos clave -->
          <div style="
            background:white;
            border:1px solid var(--color-border);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            margin-bottom:var(--space-6);
          ">
            <h3 style="font-size:var(--text-sm);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-4);text-transform:uppercase;letter-spacing:.06em;">
              Seseña en cifras
            </h3>
            <?php foreach ([
              ['100.000 t', 'de neumáticos acumulados'],
              ['+30 años',  'sin solución efectiva'],
              ['10 t/día',  'ritmo inicial de retirada HOST'],
              ['0 €',       'coste para la administración'],
            ] as [$num, $desc]): ?>
            <div style="
              display:flex;align-items:baseline;gap:var(--space-3);
              padding:var(--space-2) 0;
              border-bottom:1px solid var(--color-border);
            ">
              <span style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-lg);color:var(--color-green);
                flex-shrink:0;min-width:80px;
              "><?= $num ?></span>
              <span style="font-size:var(--text-xs);color:var(--color-text-muted);">
                <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
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
                <?php foreach ([
                  'El problema en números',
                  'Las «soluciones» que no lo son',
                  'La solución real',
                  'Por qué sigue sin resolverse',
                  'Seseña no es un caso aislado',
                  'Qué puede hacer quien lee esto',
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
            background:linear-gradient(135deg,#1E293B,#2D7D46);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            text-align:center;
            position:relative;overflow:hidden;
          ">
            <div style="
              position:absolute;inset:0;
              background-image:radial-gradient(circle at 30% 80%, rgba(45,125,70,.4) 0%, transparent 60%);
              pointer-events:none;
            " aria-hidden="true"></div>
            <div style="position:relative;z-index:1;">
              <div style="color:var(--color-green);margin-bottom:var(--space-3);">
                <?= icon('recycle', size: 32) ?>
              </div>
              <h3 style="font-family:var(--font-display);font-weight:700;font-size:var(--text-base);color:white;margin-bottom:var(--space-3);">
                ¿Tienes capacidad de decisión o conexión?
              </h3>
              <p style="font-size:var(--text-sm);color:rgba(255,255,255,.8);line-height:1.5;max-width:none;margin-bottom:var(--space-5);">
                Administraciones, inversores o cualquier persona que pueda hacer llegar esta propuesta a quien corresponde.
              </p>
              <a href="../contacto.php" class="btn btn--primary btn--sm" style="width:100%;justify-content:center;margin-bottom:var(--space-3);">
                Contactar con HOST
              </a>
              <a href="../servicios/tecnologico.php" class="btn btn--sm" style="
                width:100%;justify-content:center;
                background:rgba(255,255,255,.1);color:white;
                border:1px solid rgba(255,255,255,.2);
              ">
                Ver proyectos medioambientales
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
            La solución existe.<br>Solo necesita llegar a quien puede decir sí.
          </h2>
          <p class="cta-banner__subtitle">
            Si puedes ser ese enlace, o si tienes capacidad de impulsar
            este proyecto, HOST quiere hablar contigo.
          </p>
          <div class="cta-banner__actions">
            <a href="../contacto.php" class="btn btn--primary btn--xl">Contactar con HOST</a>
            <a href="index.php" class="btn btn--outline-white btn--xl">Volver al blog</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>
