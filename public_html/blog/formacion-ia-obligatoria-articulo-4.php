<?php
/**
 * CONSULTORÍA HOST — Artículo de blog
 * Archivo: public_html/blog/formacion-ia-obligatoria-articulo-4.php
 *
 * Artículo: Formación en IA obligatoria: lo que el Artículo 4 del
 *           Reglamento Europeo exige a tu empresa (y lo que te
 *           puede costar ignorarlo)
 * Categoría: Empresas
 * Fecha: 2026-06-22
 */

$depth            = 1;
$nav_active       = 'blog';
$page_title       = 'Formación en IA obligatoria: lo que exige el Artículo 4 del Reglamento Europeo';
$page_description = 'Desde el 2 de febrero de 2025 existe obligación legal de formar en IA a todo el personal que la use en el trabajo. Qué exige el Artículo 4, desde cuándo se sanciona y cómo cumplir sin perder tiempo ni dinero.';
$page_keywords    = 'formación IA obligatoria, formación inteligencia artificial empresas, artículo 4 AI Act, alfabetización inteligencia artificial, AESIA, sanciones IA empresas, HOST';
$page_canonical   = 'https://consultoriahost.es/blog/formacion-ia-obligatoria-articulo-4';

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "Formación en IA obligatoria: lo que exige el Artículo 4 del Reglamento Europeo",
  "description": "Desde el 2 de febrero de 2025 existe obligación legal de formar en IA a todo el personal que la use en el trabajo. Qué exige el Artículo 4, desde cuándo se sanciona y cómo cumplir.",
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
    "@id": "https://consultoriahost.es/blog/formacion-ia-obligatoria-articulo-4"
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
        <span class="page-header__breadcrumb-current">Formación IA obligatoria</span>
      </nav>

      <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-5);flex-wrap:wrap;">
        <span class="badge" style="background:rgba(245,166,35,.2);color:var(--color-amber);">Formación</span>
        <span class="badge badge--blue">Empresas</span>
        <span class="badge" style="background:rgba(220,38,38,.15);color:#FCA5A5;">
          Obligación legal
        </span>
        <span style="font-size:var(--text-sm);color:rgba(255,255,255,.6);">
          22 jun. 2026 · 8 min de lectura
        </span>
      </div>

      <h1 class="page-header__title" style="max-width:860px;">
        Formación en IA obligatoria:<br>
        lo que el Artículo 4 exige<br>
        <span style="color:var(--color-amber);">a tu empresa ahora mismo</span>
      </h1>
      <p class="page-header__subtitle" style="max-width:640px;">
        Si alguien en tu negocio usa ChatGPT, Copilot o cualquier
        herramienta de inteligencia artificial en su puesto de trabajo,
        tienes una obligación legal vigente desde febrero de 2025.
        No es una recomendación. Es ley.
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
            Seas autónomo, dirijas una microempresa o gestiones cualquier
            tipo de entidad, hay algo que probablemente no sabías:
            si alguien en tu actividad usa inteligencia artificial en un
            ordenador o teléfono de trabajo — o usa datos del trabajo en
            sus dispositivos personales — existe la obligación legal
            de formar a esa persona. A todas, sin excepción de tamaño.
          </p>

          <p style="<?= $p ?>">
            ¿Tu primera reacción es pensar que esto es una exageración más,
            que a una empresa pequeña nunca la van a inspeccionar, que ya
            se verá si llega el momento? Es una reacción comprensible
            si has pagado antes por formaciones obligatorias sin ningún
            valor real — esas "formación quita-multas" que existen para
            cubrir un expediente y nada más.
          </p>

          <p style="<?= $p ?>">
            Pero en este caso, jugar a esa ruleta tiene un nombre legal
            concreto: <strong style="color:var(--color-text-primary);">negligencia</strong>.
            Y las consecuencias no son una metáfora.
          </p>


          <!-- H2: De qué ley hablamos exactamente -->
          <h2 id="que-ley" style="<?= $h2 ?>">De qué ley hablamos exactamente</h2>

          <p style="<?= $p ?>">
            La obligación viene del <strong style="color:var(--color-text-primary);">Artículo 4 del Reglamento Europeo
            de Inteligencia Artificial</strong> (Reglamento UE 2024/1689,
            conocido como AI Act). El texto establece que toda organización
            que use sistemas de IA debe garantizar que las personas que los
            manejan o supervisan tengan formación suficiente para entender
            qué hacen, qué riesgos tienen y qué responsabilidad implica usarlos.
          </p>

          <p style="<?= $p ?>">
            No hace falta desarrollar tecnología propia para estar dentro
            de la obligación. Basta con que alguien en tu actividad use
            ChatGPT, Copilot, Gemini o cualquier otra herramienta de IA
            generativa — aunque sea la versión gratuita, aunque sea
            "solo para redactar un email" — para que la obligación te aplique.
          </p>

          <!-- Bloque fecha clave -->
          <div style="
            display:grid;grid-template-columns:1fr 1fr;
            gap:var(--space-4);margin-bottom:var(--space-8);
          ">
            <div style="
              background:var(--color-off-white);
              border:1px solid var(--color-border);
              border-radius:var(--radius-xl);
              padding:var(--space-6);
            ">
              <div style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-sm);color:var(--color-blue);
                text-transform:uppercase;letter-spacing:.05em;
                margin-bottom:var(--space-2);
              ">Desde</div>
              <div style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-2xl);color:var(--color-navy);
                margin-bottom:var(--space-2);
              ">2 de febrero de 2025</div>
              <p style="font-size:var(--text-sm);color:var(--color-text-secondary);max-width:none;margin:0;">
                La obligación de formar al personal está en vigor.
                No es una fecha futura — es una obligación ya vigente.
              </p>
            </div>
            <div style="
              background:#FEF2F2;
              border:1px solid #FECACA;
              border-radius:var(--radius-xl);
              padding:var(--space-6);
            ">
              <div style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-sm);color:#DC2626;
                text-transform:uppercase;letter-spacing:.05em;
                margin-bottom:var(--space-2);
              ">Desde</div>
              <div style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-2xl);color:#7F1D1D;
                margin-bottom:var(--space-2);
              ">2 de agosto de 2026</div>
              <p style="font-size:var(--text-sm);color:#991B1B;max-width:none;margin:0;">
                La AESIA (Agencia Española de Supervisión de la IA)
                adquiere plena capacidad de inspeccionar y sancionar.
              </p>
            </div>
          </div>

          <p style="<?= $p ?>">
            Conviene tener clara esta distinción porque genera confusión
            constante: <strong style="color:var(--color-text-primary);">la obligación no nace en agosto de 2026 —
            ya existe desde 2025</strong>. Lo que ocurre en agosto de 2026
            es que la administración empieza a poder pedirte cuentas
            de si la has cumplido o no.
          </p>


          <!-- H2: El peligro de la negligencia -->
          <h2 id="negligencia" style="<?= $h2 ?>">El peligro de la negligencia</h2>

          <p style="<?= $p ?>">
            Muchas empresas siguen instaladas en el "ya estaré pendiente
            de ver qué pasa". Conviene entender qué significa exactamente
            esa pasividad en términos legales.
          </p>

          <p style="<?= $p ?>">
            Si tú, o alguien de tu empresa, o de una empresa con la que
            colaboras, usa una herramienta de inteligencia artificial
            con datos de tu plantilla, de tus clientes, de tus proveedores
            o de cualquier persona con la que hayas tenido contacto
            profesional, esa actividad entra dentro del Artículo 4.
          </p>

          <!-- Cita: matiz legal preciso -->
          <blockquote style="
            margin:var(--space-8) 0;
            padding:var(--space-6) var(--space-8);
            background:rgba(220,38,38,.06);
            border-left:4px solid #DC2626;
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
              "El Artículo 4 no lleva asociada una multa propia y aislada.
              Pero la falta de formación actúa como agravante de cualquier
              otra infracción del Reglamento que se detecte en una inspección.
              Es la pieza que falta y que convierte un problema pequeño
              en uno grave."
            </p>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);max-width:none;margin:0;">
              — Criterio general del régimen sancionador del AI Act
            </p>
          </blockquote>

          <p style="<?= $p ?>">
            Las sanciones del Reglamento se organizan en tramos según
            la gravedad de la infracción. El tramo más alto —
            <strong style="color:var(--color-text-primary);">hasta 35 millones de euros o el 7% del volumen
            de negocio anual global</strong> — corresponde al uso de
            sistemas de IA expresamente prohibidos. Para el resto de
            infracciones, incluida la falta de formación, el régimen
            es proporcional: se valora el tamaño de la empresa, la
            gravedad real y si hubo o no diligencia previa.
          </p>

          <p style="<?= $p ?>">
            Eso no significa que el riesgo sea menor de lo que parece.
            Significa algo distinto y, en la práctica, igual de serio:
            <strong style="color:var(--color-text-primary);">la falta de formación documentada es lo primero
            que se examina</strong> cuando hay cualquier inspección, ya sea
            por una reclamación de un empleado, una auditoría de un cliente
            grande o un incidente con datos personales.
          </p>


          <!-- H2: No basta con un cursillo -->
          <h2 id="no-basta-cursillo" style="<?= $h2 ?>">Por qué no basta con un cursillo cualquiera</h2>

          <p style="<?= $p ?>">
            El Reglamento no exige un temario cerrado ni una certificación
            oficial concreta. Eso es positivo — significa que no estás
            obligado a un formato único. Pero tiene una contrapartida
            que muchas empresas no calculan bien: <strong style="color:var(--color-text-primary);">la formación
            tiene que ser proporcional al puesto, demostrable y trazable</strong>.
          </p>

          <p style="<?= $p ?>">
            Lo que no cumple, aunque parezca que sí:
          </p>

          <?php
          $no_cumple = [
            'Un PDF de políticas de uso reenviado por email sin seguimiento',
            'Una charla improvisada sin contenido estructurado ni registro',
            'Un empleado que ha hecho un curso genérico online por su cuenta',
            'Una formación teórica sin relación con las herramientas reales que se usan en el puesto',
            'Cualquier acción sin evidencia documental de quién la recibió y cuándo',
          ];
          ?>

          <div style="display:flex;flex-direction:column;gap:var(--space-3);margin-bottom:var(--space-8);">
            <?php foreach ($no_cumple as $item): ?>
            <div style="
              display:flex;gap:var(--space-3);align-items:flex-start;
              padding:var(--space-4) var(--space-5);
              background:#FEF2F2;
              border:1px solid #FECACA;
              border-radius:var(--radius-lg);
            ">
              <span style="color:#DC2626;font-weight:800;flex-shrink:0;">✗</span>
              <p style="font-size:var(--text-sm);color:#7F1D1D;line-height:1.6;max-width:none;margin:0;">
                <?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            Lo que sí cumple es una formación <strong style="color:var(--color-text-primary);">estructurada, adaptada al rol
            de cada persona, con contenido aplicado a las herramientas que
            realmente se usan en ese puesto, y con registro documental</strong>
            de quién la recibió, cuándo y con qué resultado. Una persona
            de administración no necesita la misma profundidad que alguien
            que gestiona selección de personal con apoyo de IA, o que
            trabaja con datos de clientes en un CRM con scoring automático.
          </p>


          <!-- H2: A quién afecta -->
          <h2 id="a-quien-afecta" style="<?= $h2 ?>">A quién afecta exactamente</h2>

          <p style="<?= $p ?>">
            Aquí está el punto que más sorprende cuando se explica
            con claridad: <strong style="color:var(--color-text-primary);">no hay umbral mínimo de tamaño</strong>.
            La obligación es la misma si tienes 2 personas en plantilla
            o 200. Lo que cambia es la proporcionalidad de la formación
            exigida — no si existe o no la obligación.
          </p>

          <div class="grid grid-2 gap-4" style="margin-bottom:var(--space-8);">
            <?php
            $perfiles = [
              ['user',       'Autónomos',
               'Si trabajas solo y usas IA en tu actividad, la obligación recae sobre ti mismo: debes tener esa alfabetización suficiente.'],
              ['users',      'Microempresas y pymes',
               'Si tienes 3, 5 o 20 personas que usan ChatGPT, Copilot o cualquier IA, todas ellas deben estar formadas. Sin excepciones por tamaño.'],
              ['briefcase',  'Cualquier sector',
               'RRHH con preselección de CV, marketing con contenido generado por IA, administración con correctores avanzados: todos entran.'],
              ['handshake',  'Colaboradores externos',
               'Si exiges a otras empresas o freelancers con los que trabajas que usen IA con tus datos, también debes exigirles esa formación.'],
            ];
            foreach ($perfiles as [$icono, $titulo, $desc]):
            ?>
            <div style="
              background:var(--color-off-white);
              border:1px solid var(--color-border);
              border-radius:var(--radius-xl);
              padding:var(--space-5);
            ">
              <div style="color:var(--color-blue);margin-bottom:var(--space-3);">
                <?= icon($icono, size: 26) ?>
              </div>
              <strong style="display:block;font-size:var(--text-sm);color:var(--color-navy);margin-bottom:var(--space-2);">
                <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
              </strong>
              <p style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.6;max-width:none;margin:0;">
                <?= htmlspecialchars($desc, ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>
            <?php endforeach; ?>
          </div>

          <p style="<?= $p ?>">
            Una forma sencilla de comprobar si te afecta: si en tu empresa
            alguien usa una IA para redactar correos, generar contenido,
            filtrar currículums, predecir ventas, atender clientes o
            simplemente "preguntarle algo de trabajo" a ChatGPT desde
            su móvil personal, ya estás dentro de la obligación.
          </p>


          <!-- H2: La llegada de las denuncias -->
          <h2 id="denuncias" style="<?= $h2 ?>">La llegada de las denuncias</h2>

          <p style="<?= $p ?>">
            Si tu estrategia se basa en que "a mí no me va a pasar",
            conviene corregir el cálculo. El Reglamento permite que
            empleados, candidatos descartados por un proceso automatizado
            o asociaciones de consumidores presenten reclamaciones
            directamente ante la autoridad de supervisión.
          </p>

          <p style="<?= $p ?>">
            Eso significa que la vía de entrada de un expediente no es
            necesariamente una inspección programada. Puede ser una
            queja de un trabajador descontento, una reclamación de un
            cliente al que se le ha tratado mal un dato, o simplemente
            una auditoría que te pide un cliente grande antes de firmar
            un contrato.
          </p>

          <p style="<?= $p ?>">
            El uso de inteligencia artificial con datos de tu empresa,
            en los ordenadores de tu empresa o en tu propia web puede
            convertirse en una fuente de problemas en lugar de la
            herramienta de productividad que se supone que es —
            si se usa sin saber exactamente qué ocurre detrás de la
            pantalla cada vez que alguien escribe algo en ella.
          </p>


          <!-- H2: La solución -->
          <h2 id="la-solucion" style="<?= $h2 ?>">La solución: formación responsable, en manos de profesionales</h2>

          <p style="<?= $p ?>">
            Conocemos de primera mano a empresas que han perdido tiempo
            y dinero en "cursos quita-multas": teóricos, sin rigor,
            sin ninguna utilidad práctica, diseñados únicamente para
            cubrir un expediente y entregar un PDF de cara a una posible
            inspección.
          </p>

          <p style="<?= $p ?>">
            En Consultoría HOST trabajamos en otro nivel. Diseñamos
            formación para el desarrollo real del negocio, a partir
            de los requisitos legales pero sin quedarnos ahí, a medida
            para cada empresa y siempre presencial — para que puedas
            preguntar y plantear tu situación concreta en el momento
            exacto en el que surge la duda.
          </p>

          <!-- Bloque de valores HOST en formación -->
          <div style="
            background:var(--color-navy);
            border-radius:var(--radius-2xl);
            padding:var(--space-8);
            margin-bottom:var(--space-8);
          ">
            <h3 style="
              font-family:var(--font-display);font-weight:700;
              font-size:var(--text-xl);color:white;
              margin-bottom:var(--space-6);
            ">Lo que nos diferencia</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-6);">
              <?php
              $diferencial = [
                ['+30 años', 'de experiencia como formadores y consultores para el desarrollo de negocio'],
                ['+10.000', 'horas de formación impartidas, documentadas y verificables'],
                ['+10.000', 'personas formadas en centenares de empresas de todo tipo y tamaño'],
                ['100%', 'satisfacción declarada desde el primer minuto de aplicación práctica'],
              ];
              foreach ($diferencial as [$num, $desc]):
              ?>
              <div style="display:flex;gap:var(--space-4);align-items:baseline;">
                <span style="
                  font-family:var(--font-display);font-weight:800;
                  font-size:var(--text-3xl);color:var(--color-amber);
                  flex-shrink:0;line-height:1;
                "><?= $num ?></span>
                <span style="font-size:var(--text-sm);color:rgba(255,255,255,.7);line-height:1.4;">
                  <?= $desc ?>
                </span>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

          <p style="<?= $p ?>">
            La inteligencia artificial ofrece oportunidades reales de
            mejora de productividad. Pero también riesgos serios de los
            que se aprovecha quien sabe colarse en tu empresa a través
            de un ordenador o un teléfono móvil sin que nadie se dé cuenta.
            Con la formación adecuada cumples con la ley — y, además,
            obtienes un conocimiento que mejora la rentabilidad real
            de tu actividad desde el primer día.
          </p>

          <p style="<?= $p ?>">
            La formación que imparte Consultoría HOST es siempre
            <strong style="color:var(--color-text-primary);">a medida, 100% práctica, enfocada a casos concretos
            de tu negocio</strong> y, además, bonificable —
            para que cada minuto invertido y cada euro gastado
            tengan un retorno real. Garantizado.
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
              Solicitar diagnóstico de cumplimiento
            </a>
            <a href="../servicios/organizacional.php" class="btn btn--outline btn--lg">
              Ver Departamento Organizacional
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
                  'gobernanza-inteligencia-artificial.php',
                  'Formación',
                  'badge--amber',
                  '¿Sabes qué es la gobernanza de la Inteligencia Artificial?',
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
              <?php
              $meta = [
                ['Categoría',  'Formación'],
                ['Publicado',  '22 de junio de 2026'],
                ['Lectura',    '8 minutos'],
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

          <!-- Fechas clave -->
          <div style="
            background:white;
            border:1px solid var(--color-border);
            border-radius:var(--radius-2xl);
            padding:var(--space-6);
            margin-bottom:var(--space-6);
          ">
            <h3 style="font-size:var(--text-sm);font-weight:700;color:var(--color-navy);margin-bottom:var(--space-4);text-transform:uppercase;letter-spacing:.06em;">
              Fechas clave
            </h3>
            <?php
            $fechas = [
              ['02/02/2025', 'Entra en vigor la obligación de formación'],
              ['02/08/2026', 'AESIA empieza a inspeccionar y sancionar'],
            ];
            foreach ($fechas as [$fecha, $desc]):
            ?>
            <div style="
              display:flex;align-items:baseline;gap:var(--space-3);
              padding:var(--space-2) 0;
              border-bottom:1px solid var(--color-border);
            ">
              <span style="
                font-family:var(--font-display);font-weight:800;
                font-size:var(--text-sm);color:var(--color-orange);
                flex-shrink:0;min-width:90px;
              "><?= $fecha ?></span>
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
                <?php
                $indice = [
                  ['De qué ley hablamos exactamente',      'que-ley'],
                  ['El peligro de la negligencia',         'negligencia'],
                  ['Por qué no basta con un cursillo',     'no-basta-cursillo'],
                  ['A quién afecta exactamente',           'a-quien-afecta'],
                  ['La llegada de las denuncias',          'denuncias'],
                  ['La solución: formación responsable',   'la-solucion'],
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
                <?= icon('lock', size: 32) ?>
              </div>
              <h3 style="font-family:var(--font-display);font-weight:700;font-size:var(--text-base);color:white;margin-bottom:var(--space-3);">
                ¿Tu plantilla está formada en IA?
              </h3>
              <p style="font-size:var(--text-sm);color:rgba(255,255,255,.8);line-height:1.5;max-width:none;margin-bottom:var(--space-5);">
                Diagnóstico inicial sin compromiso: te decimos exactamente
                en qué punto estás respecto al Artículo 4.
              </p>
              <a href="../contacto.php" class="btn btn--primary btn--sm" style="width:100%;justify-content:center;margin-bottom:var(--space-3);">
                Solicitar diagnóstico
              </a>
              <a href="../servicios/organizacional.php" class="btn btn--sm" style="
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
            No esperes a que llegue la inspección.
          </h2>
          <p class="cta-banner__subtitle">
            La formación responsable cuesta menos que una sanción
            y, además, mejora la productividad real de tu negocio desde ya.
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
