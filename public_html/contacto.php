<?php
/**
 * CONSULTORÍA HOST — Página: Contacto
 * Archivo: contacto.php
 *
 * Formulario de contacto completo con datos de contacto,
 * horario de atención y sección "Unirse al HOST".
 */

require_once __DIR__ . '/bootstrap.php';

$depth            = 0;
$nav_active       = 'contacto';
$page_title       = 'Contacto — Habla con Consultoría HOST';
$page_description = 'Contacta con ' . SITE_NAME . '. Teléfono: ' . SITE_PHONE . '. ' . SITE_HOURS_SHORT . '. ' . SITE_CITY . ', ' . SITE_COUNTRY . '. Primera consulta sin compromiso.';
$page_keywords    = 'contacto consultoría HOST, teléfono, formulario contacto, Sevilla, España';
$page_canonical   = 'https://consultoriahost.es/contacto';
$page_breadcrumbs  = [
  ['Inicio', 'https://consultoriahost.es/'],
  ['Contacto', null],
];

$page_extra_head  = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuánto cuesta una consultoría HOST?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Cada situación es diferente y los costes se ajustan a las necesidades y posibilidades de cada cliente. La primera consulta es siempre gratuita y sin compromiso. Llámanos o escríbenos y te informamos."
      }
    },
    {
      "@type": "Question",
      "name": "¿Atienden a distancia o solo en Sevilla?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Consultoría HOST atiende tanto de forma presencial en Sevilla como a distancia en toda España. Muchos de nuestros servicios son perfectamente ejecutables de forma telemática."
      }
    },
    {
      "@type": "Question",
      "name": "¿Para qué tamaño de empresa es HOST?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "HOST está especialmente orientada a microempresas, autónomos y pymes (empresas de menos de 50 personas), aunque también trabajamos con organizaciones más grandes y con personas en búsqueda de empleo o reinserción profesional."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuánto tiempo tarda en verse resultados?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Depende de la situación, pero HOST trabaja siempre con el objetivo de reducir al mínimo los tiempos. En situaciones urgentes la actuación es inmediata. El objetivo siempre es: la solución más rápida y efectiva posible."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué es el Método HOST exactamente?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Es un método de evaluación de la viabilidad de un proyecto empresarial en 3 pasos (identificación, evaluación y planificación). Se realiza en talleres grupales de 3 jornadas de 5 horas. Puede acogerse a ayudas económicas."
      }
    }
  ]
}
</script>';

include APP_ROOT . '/includes/head.php';
include APP_ROOT . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ========================================================
       CABECERA DE PÁGINA
       ======================================================== -->
  <div class="page-header">
    <div class="container page-header__inner">
      <nav class="page-header__breadcrumb" aria-label="Migas de pan">
        <a href="/">Inicio</a>
        <span class="page-header__breadcrumb-sep" aria-hidden="true">›</span>
        <span class="page-header__breadcrumb-current">Contacto</span>
      </nav>
      <h1 class="page-header__title">Hablemos</h1>
      <p class="page-header__subtitle">
        Sin compromisos. Sin papeleos.
        Cuéntanos tu situación y valoramos
        <strong class="text-amber">juntos la mejor solución</strong>.
      </p>
    </div>
  </div>


  <!-- ========================================================
       SECCIÓN 1: FORMULARIO + DATOS DE CONTACTO
       ======================================================== -->
  <section class="section section--white" aria-labelledby="contacto-title">
    <div class="container">
      <div class="contact-layout">

        <!-- Info lateral -->
        <aside>

          <h2 id="contacto-title" class="contact-info__title">
            Estamos aquí para <span class="text-orange">resolver</span>
          </h2>
          <p class="contact-info__desc">
            La primera llamada o el primer mensaje es siempre gratuito y sin compromiso.
            Cuéntanos qué está pasando y valoramos juntos cómo podemos ayudarte.
          </p>

          <!-- Teléfono -->
          <div class="contact-item">
            <div class="contact-item__icon" aria-hidden="true">
              <svg viewBox="0 0 22 22" fill="none">
                <path d="M3 3l3 .5 1.5 3-2 2a10 10 0 004.5 4.5l2-2 3 1.5.5 3A14.5 14.5 0 013 3z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
              </svg>
            </div>
            <div>
              <div class="contact-item__label">Teléfono</div>
              <div class="contact-item__value">
                <a href="tel:<?= SITE_PHONE_E164 ?>"
                   style="font-size:var(--text-2xl);font-weight:700;color:var(--color-navy);">
                  <?= SITE_PHONE ?>
                </a>
              </div>
            </div>
          </div>

          <!-- Horario -->
          <div class="contact-item">
            <div class="contact-item__icon" aria-hidden="true">
              <svg viewBox="0 0 22 22" fill="none">
                <circle cx="11" cy="11" r="9" stroke="currentColor" stroke-width="1.5"/>
                <path d="M11 6v5l3.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div>
              <div class="contact-item__label">Horario de atención</div>
              <div class="contact-item__value">
                Lunes a viernes<br>
                <strong>9:00 – 14:00h</strong> y <strong>16:00 – 19:00h</strong>
              </div>
            </div>
          </div>

          <!-- Ubicación -->
          <div class="contact-item">
            <div class="contact-item__icon" aria-hidden="true">
              <svg viewBox="0 0 22 22" fill="none">
                <path d="M11 2A7 7 0 0111 16c0 0-7-8.5-7-8A7 7 0 0111 2z" stroke="currentColor" stroke-width="1.5"/>
                <circle cx="11" cy="9" r="2.5" stroke="currentColor" stroke-width="1.5"/>
              </svg>
            </div>
            <div>
              <div class="contact-item__label">Ubicación</div>
              <div class="contact-item__value">
                Sevilla, Andalucía, España<br>
                <small style="color:var(--color-text-muted);font-size:var(--text-xs);">
                  Atención presencial y a distancia
                </small>
              </div>
            </div>
          </div>

          <!-- Separador -->
          <hr class="divider" style="margin-block:var(--space-8);">

          <!-- Qué esperar -->
          <div style="
            background: var(--color-off-white);
            border-radius: var(--radius-xl);
            padding: var(--space-6);
            border: 1px solid var(--color-border);
          ">
            <h3 style="font-size:var(--text-base);margin-bottom:var(--space-4);color:var(--color-navy);">
              ¿Qué ocurre después de contactar?
            </h3>
            <?php
            $pasos_contacto = [
              ['1','Recibimos tu mensaje','y lo leemos con atención.'],
              ['2','Te respondemos','en menos de 24 horas laborables.'],
              ['3','Primera consulta','gratuita y sin compromiso.'],
              ['4','Plan de acción','personalizado para tu situación.'],
            ];
            foreach ($pasos_contacto as $p): ?>
            <div style="display:flex;gap:var(--space-3);margin-bottom:var(--space-3);align-items:flex-start;">
              <div style="
                width:24px;height:24px;
                border-radius:50%;
                background:var(--color-orange);
                display:flex;align-items:center;justify-content:center;
                font-size:.7rem;font-weight:800;color:white;
                flex-shrink:0;margin-top:1px;
              "><?= $p[0] ?></div>
              <div style="font-size:var(--text-sm);color:var(--color-text-secondary);line-height:1.5;">
                <strong style="color:var(--color-text-primary);"><?= $p[1] ?></strong>
                <?= $p[2] ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

        </aside>

        <!-- Formulario -->
        <div>
          <div class="contact-form">
            <h2 style="font-size:var(--text-2xl);margin-bottom:var(--space-2);color:var(--color-navy);">
              Envíanos un mensaje
            </h2>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);margin-bottom:var(--space-6);">
              Los campos con <span style="color:var(--color-orange);font-weight:600;">*</span> son obligatorios.
            </p>

            <!-- Mensaje de éxito -->
            <div class="form-success" id="form-success" role="alert">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="1.5"/>
                <path d="M6 10l3 3 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
              ¡Mensaje enviado! Te contactaremos lo antes posible.
            </div>

            <form id="contact-form" action="api/contacto.php" method="POST" novalidate data-phone="<?= SITE_PHONE ?>"
                  data-success="form-success">

              <!-- Honeypot antispam -->
              <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">
              <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

              <div class="contact-form__grid">

                <div class="form-group">
                  <label class="form-label" for="nombre">
                    Nombre <span aria-hidden="true">*</span>
                  </label>
                  <input type="text" id="nombre" name="nombre" class="form-input"
                         placeholder="Tu nombre" autocomplete="given-name"
                         required aria-required="true">
                </div>

                <div class="form-group">
                  <label class="form-label" for="apellidos">Apellidos</label>
                  <input type="text" id="apellidos" name="apellidos" class="form-input"
                         placeholder="Tus apellidos" autocomplete="family-name">
                </div>

                <div class="form-group">
                  <label class="form-label" for="telefono">Teléfono</label>
                  <input type="tel" id="telefono" name="telefono" class="form-input"
                         placeholder="Ej: 654 321 098" autocomplete="tel">
                </div>

                <div class="form-group">
                  <label class="form-label" for="email">
                    Email <span aria-hidden="true">*</span>
                  </label>
                  <input type="email" id="email" name="email" class="form-input"
                         placeholder="tu@email.com" autocomplete="email"
                         required aria-required="true">
                </div>

                <!-- Asunto (nuevo campo) -->
                <div class="form-group contact-form__full">
                  <label class="form-label" for="asunto">Motivo de consulta</label>
                  <select id="asunto" name="asunto" class="form-select">
                    <option value="">Selecciona una opción</option>
                    <option value="consultoría empresarial">Consultoría para mi empresa/negocio</option>
                    <option value="método HOST">Método HOST (evaluación de viabilidad)</option>
                    <option value="empleo">Empleo 3.0 / Búsqueda de empleo</option>
                    <option value="departamento H">Departamento Humano</option>
                    <option value="departamento O">Departamento Organizacional</option>
                    <option value="departamento S">Departamento Social</option>
                    <option value="departamento T">Departamento Técnico / Medioambiental</option>
                    <option value="networking">Networking efectivo</option>
                    <option value="unirse HOST">Quiero unirme al HOST</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>

                <div class="form-group contact-form__full">
                  <label class="form-label" for="mensaje">
                    Mensaje <span aria-hidden="true">*</span>
                  </label>
                  <textarea id="mensaje" name="mensaje" class="form-textarea"
                            placeholder="Cuéntanos brevemente tu situación y en qué podemos ayudarte..."
                            required aria-required="true"></textarea>
                </div>

              </div>

              <div class="contact-form__submit">
                <p class="contact-form__privacy">
                  Al enviar este formulario aceptas nuestra
                  <a href="privacidad">política de privacidad</a>.
                  Tus datos son tratados con total confidencialidad.
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

      </div>
    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 2: UNIRSE AL HOST
       ======================================================== -->
  <section class="section section--alt" id="unirse" aria-labelledby="unirse-title">
    <div class="container">
      <div class="grid grid-2 gap-12" style="align-items:center;">

        <div class="reveal">
          <span class="eyebrow">Forma parte del equipo</span>
          <h2 id="unirse-title">
            ¿Quieres <span class="text-orange">unirte al HOST</span>?
          </h2>
          <p style="margin-top:var(--space-4);">
            Si eres una persona que disfruta aprendiendo y aplicando lo aprendido
            para ayudar a las personas, tienes muchas posibilidades de ejercer como
            profesional de la consultoría.
          </p>
          <p>
            Y si a ello le sumas un cúmulo de experiencia, formación y una personal
            capacidad de identificar problemas y que éstos solo te sirvan para despertar
            tu impulso de solucionarlos... la consultoría puede ser exactamente lo tuyo.
          </p>
          <p>
            HOST busca <strong>colaboradores y consultores</strong> con distintos perfiles
            para ampliar su equipo y su alcance. Si crees que tienes algo que aportar,
            cuéntanoslo.
          </p>

          <div style="
            margin-top: var(--space-6);
            padding: var(--space-5);
            background: rgba(232,98,26,.08);
            border-radius: var(--radius-lg);
            border-left: 3px solid var(--color-orange);
          ">
            <p style="font-size:var(--text-sm);color:var(--color-text-secondary);max-width:none;margin:0;">
              <strong>Perfiles que busca HOST:</strong> Consultores con experiencia en RRHH,
              organización empresarial, marketing, comunicación, tecnología, ingeniería,
              medioambiente, coaching, formación, y otros perfiles complementarios.
            </p>
          </div>
        </div>

        <!-- Mini formulario de unirse -->
        <div class="reveal reveal--delay-1">
          <div class="contact-form" style="background:white;">
            <h3 style="font-size:var(--text-xl);margin-bottom:var(--space-2);">
              Quiero unirme al HOST
            </h3>
            <p style="font-size:var(--text-sm);color:var(--color-text-muted);margin-bottom:var(--space-6);">
              Cuéntanos quién eres y qué puedes aportar.
            </p>

            <div class="form-success" id="form-success-unirse" role="alert">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="1.5"/>
                <path d="M6 10l3 3 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
              ¡Solicitud recibida! Te contactaremos pronto.
            </div>

            <form id="unirse-form" action="api/contacto.php" method="POST" novalidate data-phone="<?= SITE_PHONE ?>"
                  data-success="form-success-unirse">
              <input type="hidden" name="asunto" value="Solicitud unirse al HOST">
              <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">
              <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

              <div style="display:flex;flex-direction:column;gap:var(--space-4);">

                <div class="form-group">
                  <label class="form-label" for="nombre-unirse">
                    Nombre <span aria-hidden="true">*</span>
                  </label>
                  <input type="text" id="nombre-unirse" name="nombre" class="form-input"
                         placeholder="Tu nombre completo"
                         required aria-required="true">
                </div>

                <div class="form-group">
                  <label class="form-label" for="email-unirse">
                    Email <span aria-hidden="true">*</span>
                  </label>
                  <input type="email" id="email-unirse" name="email" class="form-input"
                         placeholder="tu@email.com"
                         required aria-required="true">
                </div>

                <div class="form-group">
                  <label class="form-label" for="perfil-unirse">Tu perfil profesional</label>
                  <input type="text" id="perfil-unirse" name="perfil"
                         class="form-input"
                         placeholder="Ej: Consultora RRHH con 10 años de experiencia">
                </div>

                <div class="form-group">
                  <label class="form-label" for="mensaje-unirse">
                    ¿Qué puedes aportar? <span aria-hidden="true">*</span>
                  </label>
                  <textarea id="mensaje-unirse" name="mensaje" class="form-textarea"
                            style="min-height:100px;"
                            placeholder="Cuéntanos brevemente tu experiencia y motivación..."
                            required aria-required="true"></textarea>
                </div>

                <button type="submit" class="btn btn--secondary">
                  Enviar solicitud
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ========================================================
       SECCIÓN 3: PREGUNTAS FRECUENTES
       ======================================================== -->
  <section class="section section--white" aria-labelledby="faq-title">
    <div class="container container--narrow">

      <div class="section-header reveal">
        <span class="eyebrow">FAQs</span>
        <h2 id="faq-title">Preguntas frecuentes</h2>
      </div>

      <?php
      $faqs = [
        ['¿Cuánto cuesta una consultoría HOST?',
         'Cada situación es diferente y los costes se ajustan a las necesidades y posibilidades de cada cliente. La primera consulta es siempre gratuita y sin compromiso. Llámanos o escríbenos y te informamos.'],
        ['¿Atienden a distancia o solo en Sevilla?',
         'Consultoría HOST atiende tanto de forma presencial en Sevilla como a distancia en toda España. Muchos de nuestros servicios son perfectamente ejecutables de forma telemática.'],
        ['¿Para qué tamaño de empresa es HOST?',
         'HOST está especialmente orientada a microempresas, autónomos y pymes (empresas de menos de 50 personas), aunque también trabajamos con organizaciones más grandes y con personas en búsqueda de empleo o reinserción profesional.'],
        ['¿Cuánto tiempo tarda en verse resultados?',
         'Depende de la situación, pero HOST trabaja siempre con el objetivo de reducir al mínimo los tiempos. En situaciones urgentes la actuación es inmediata. El objetivo siempre es: la solución más rápida y efectiva posible.'],
        ['¿Qué es el Método HOST exactamente?',
         'Es un método de evaluación de la viabilidad de un proyecto empresarial en 3 pasos (identificación, evaluación y planificación). Se realiza en talleres grupales de 3 jornadas de 5 horas. Puede acogerse a ayudas económicas.'],
      ];
      foreach ($faqs as $i => $faq): ?>

      <details class="faq-item reveal <?= $i>0?'reveal--delay-1':'' ?>">
        <summary class="faq-item__summary hover-bg-offwhite">
          <?= htmlspecialchars($faq[0], ENT_QUOTES, 'UTF-8') ?>
          <svg class="faq-item__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
            <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </summary>
        <div class="faq-item__body">
          <?= htmlspecialchars($faq[1], ENT_QUOTES, 'UTF-8') ?>
        </div>
      </details>

      <?php endforeach; ?>

    </div>
  </section>

</main>

<?php include APP_ROOT . '/includes/footer.php'; ?>

