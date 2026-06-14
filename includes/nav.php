<?php
/**
 * CONSULTORÍA HOST — Fragmento reutilizable: Navegación
 * Archivo: includes/nav.php
 *
 * Uso: include tras head.php en cada página.
 * La variable $depth (heredada de head.php) ajusta las rutas.
 * La variable $nav_active indica qué ítem marcar como activo.
 * Valores posibles de $nav_active: 'inicio' | 'que-es-host' |
 *   'consultoria' | 'servicios' | 'metodo' | 'empleo' | 'blog' | 'contacto'
 */

$depth      = $depth      ?? 0;
$nav_active = $nav_active ?? '';
$base_path  = str_repeat('../', $depth);

/**
 * Genera la clase CSS de enlace activo según el ítem actual.
 *
 * @param string $key  Clave del ítem de navegación.
 * @return string      Clase CSS adicional si está activo.
 */
function navActive(string $key): string {
    global $nav_active;
    return $key === $nav_active ? ' nav__link--active' : '';
}
?>

<header role="banner">
  <nav class="nav" role="navigation" aria-label="Navegación principal">
    <div class="container">
      <div class="nav__inner">

        <!-- Logo -->
        <a href="<?= $base_path ?>index.php" class="nav__logo" aria-label="Consultoría HOST — Inicio">
          <div class="nav__logo-mark" aria-hidden="true">H</div>
          <div class="nav__logo-text">
            Consultoría <strong>HOST</strong>
            <span class="nav__logo-sub">Consultoría e Ingeniería 3.0</span>
          </div>
        </a>

        <!-- Menú escritorio -->
        <ul class="nav__menu" role="list">

          <li class="nav__item">
            <a href="<?= $base_path ?>que-es-host.php"
               class="nav__link<?= navActive('que-es-host') ?>">
              ¿Qué es HOST?
            </a>
          </li>

          <li class="nav__item">
            <a href="<?= $base_path ?>consultoria.php"
               class="nav__link<?= navActive('consultoria') ?>">
              Consultoría
            </a>
          </li>

          <!-- Dropdown: Qué hacemos -->
          <li class="nav__item">
            <a href="<?= $base_path ?>servicios/"
               class="nav__link<?= navActive('servicios') ?>"
               aria-haspopup="true" aria-expanded="false">
              Qué hacemos
              <svg class="nav__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </a>
            <ul class="nav__dropdown" role="list">
              <li>
                <a href="<?= $base_path ?>servicios/humano.php"
                   class="nav__dropdown-link">
                  <span style="color:var(--color-orange);font-weight:700;">H</span> — Humano
                </a>
              </li>
              <li>
                <a href="<?= $base_path ?>servicios/organizacional.php"
                   class="nav__dropdown-link">
                  <span style="color:var(--color-blue);font-weight:700;">O</span> — Organizacional
                </a>
              </li>
              <li>
                <a href="<?= $base_path ?>servicios/social.php"
                   class="nav__dropdown-link">
                  <span style="color:var(--color-green);font-weight:700;">S</span> — Social
                </a>
              </li>
              <li>
                <a href="<?= $base_path ?>servicios/tecnologico.php"
                   class="nav__dropdown-link">
                  <span style="color:var(--color-navy);font-weight:700;">T</span> — Técnico
                </a>
              </li>
            </ul>
          </li>

          <li class="nav__item">
            <a href="<?= $base_path ?>metodo-host.php"
               class="nav__link<?= navActive('metodo') ?>">
              Método HOST
            </a>
          </li>

          <li class="nav__item">
            <a href="<?= $base_path ?>empleo.php"
               class="nav__link<?= navActive('empleo') ?>">
              Empleo 3.0
            </a>
          </li>

          <li class="nav__item">
            <a href="<?= $base_path ?>blog/"
               class="nav__link<?= navActive('blog') ?>">
              Blog
            </a>
          </li>

        </ul>

        <!-- CTA escritorio -->
        <div class="nav__cta">
          <a href="<?= $base_path ?>contacto.php" class="btn btn--primary btn--sm">
            Contactar
          </a>
        </div>

        <!-- Hamburguesa móvil -->
        <button class="nav__toggle"
                aria-label="Abrir menú"
                aria-expanded="false"
                aria-controls="mobile-menu">
          <span class="nav__toggle-bar"></span>
          <span class="nav__toggle-bar"></span>
          <span class="nav__toggle-bar"></span>
        </button>

      </div>
    </div>
  </nav>

  <!-- Menú mobile drawer -->
  <nav id="mobile-menu" class="nav__mobile" aria-hidden="true" aria-label="Menú móvil">
    <ul class="nav__mobile-menu" role="list">
      <li><a href="<?= $base_path ?>index.php"              class="nav__mobile-link">Inicio</a></li>
      <li><a href="<?= $base_path ?>que-es-host.php"          class="nav__mobile-link">¿Qué es HOST?</a></li>
      <li><a href="<?= $base_path ?>consultoria.php"          class="nav__mobile-link">Consultoría 3.0</a></li>
      <li class="nav__mobile-separator" role="separator"></li>
      <li><span class="nav__mobile-section-title">Qué hacemos</span></li>
      <li><a href="<?= $base_path ?>servicios/humano.php"         class="nav__mobile-link">↳ (H) Humano</a></li>
      <li><a href="<?= $base_path ?>servicios/organizacional.php" class="nav__mobile-link">↳ (O) Organizacional</a></li>
      <li><a href="<?= $base_path ?>servicios/social.php"          class="nav__mobile-link">↳ (S) Social</a></li>
      <li><a href="<?= $base_path ?>servicios/tecnologico.php"     class="nav__mobile-link">↳ (T) Técnico</a></li>
      <li class="nav__mobile-separator" role="separator"></li>
      <li><a href="<?= $base_path ?>metodo-host.php"  class="nav__mobile-link">Método HOST</a></li>
      <li><a href="<?= $base_path ?>empleo.php"       class="nav__mobile-link">Empleo 3.0</a></li>
      <li><a href="<?= $base_path ?>networking.php"   class="nav__mobile-link">Networking</a></li>
      <li><a href="<?= $base_path ?>blog/"             class="nav__mobile-link">Blog</a></li>
    </ul>
    <div class="nav__mobile-cta">
      <a href="<?= $base_path ?>contacto.php"
         class="btn btn--primary"
         style="width:100%;justify-content:center;">
        Contactar ahora
      </a>
      <p style="text-align:center;margin-top:1rem;font-size:.8rem;color:var(--color-text-muted);">
        <a href="tel:<?= SITE_PHONE_E164 ?>" style="color:inherit;">📞 <?= SITE_PHONE ?></a>
      </p>
    </div>
  </nav>
  <div class="nav__mobile-overlay" aria-hidden="true"></div>
</header>

<div class="nav-offset" aria-hidden="true"></div>
