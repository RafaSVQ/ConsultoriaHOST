<?php
/**
 * CONSULTORÍA HOST — Fragmento reutilizable: Footer
 * Archivo: includes/footer.php
 *
 * Uso: include al final de cada página, antes de </body>.
 * Hereda $depth y $base_path de los includes anteriores.
 */

$depth     = $depth     ?? 0;
$base_path = str_repeat('../', $depth);
?>

  <!-- ========================================================
       FOOTER
       ======================================================== -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer__grid">

        <!-- Columna 1: Marca -->
        <div class="footer__brand">
          <a href="<?= $base_path ?>index.php" class="nav__logo" aria-label="Consultoría HOST">
            <div class="nav__logo-mark" style="background:var(--gradient-orange);" aria-hidden="true">H</div>
            <div class="nav__logo-text" style="color:white;">
              Consultoría <strong>HOST</strong>
              <span class="nav__logo-sub" style="color:rgba(255,255,255,.5);">Consultoría e Ingeniería 3.0</span>
            </div>
          </a>
          <p class="footer__brand-desc">
            Soluciones reales para personas y empresas.
            Actuamos donde otros solo asesoran. <?= SITE_CITY ?>, <?= SITE_COUNTRY ?>.
          </p>
          <div style="display:inline-flex;align-items:center;gap:.5rem;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:var(--radius-full);padding:.4rem 1rem;font-size:.75rem;color:var(--color-amber);">
            <span aria-hidden="true">★</span> Concepto "solución-solución"
          </div>
        </div>

        <!-- Columna 2: Servicios -->
        <nav aria-label="Servicios">
          <div class="footer__col-title">Servicios</div>
          <ul class="footer__links" role="list">
            <li><a href="<?= $base_path ?>servicios/humano.php"        class="footer__link">Dpto. (H) Humano</a></li>
            <li><a href="<?= $base_path ?>servicios/organizacional.php" class="footer__link">Dpto. (O) Organizacional</a></li>
            <li><a href="<?= $base_path ?>servicios/social.php"         class="footer__link">Dpto. (S) Social</a></li>
            <li><a href="<?= $base_path ?>servicios/tecnologico.php"    class="footer__link">Dpto. (T) Técnico</a></li>
            <li><a href="<?= $base_path ?>metodo-host.php"              class="footer__link">Método HOST</a></li>
            <li><a href="<?= $base_path ?>empleo.php"                   class="footer__link">Empleo 3.0</a></li>
          </ul>
        </nav>

        <!-- Columna 3: Empresa -->
        <nav aria-label="Empresa">
          <div class="footer__col-title">Empresa</div>
          <ul class="footer__links" role="list">
            <li><a href="<?= $base_path ?>que-es-host.php"              class="footer__link">¿Qué es HOST?</a></li>
            <li><a href="<?= $base_path ?>consultoria.php"              class="footer__link">Consultoría 3.0</a></li>
            <li><a href="<?= $base_path ?>networking.php"               class="footer__link">Networking efectivo</a></li>
            <li><a href="<?= $base_path ?>blog/"                        class="footer__link">Blog</a></li>
            <li><a href="<?= $base_path ?>contacto.php"                 class="footer__link">Contacto</a></li>
            <li><a href="<?= $base_path ?>contacto.php#unirse"          class="footer__link">Unirse al HOST</a></li>
          </ul>
        </nav>

        <!-- Columna 4: Contacto -->
        <div>
          <div class="footer__col-title">Contacto</div>
          <address style="font-style:normal;">

            <div class="footer__contact-item">
              <svg class="footer__contact-icon" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                <path d="M9 1.5A6.5 6.5 0 019 14.5c0 0-6.5-7.5-6.5-7A6.5 6.5 0 019 1.5z" stroke="currentColor" stroke-width="1.5"/>
                <circle cx="9" cy="7.5" r="2" stroke="currentColor" stroke-width="1.5"/>
              </svg>
              <div class="footer__contact-text"><?= SITE_LOCATION ?></div>
            </div>

            <div class="footer__contact-item">
              <svg class="footer__contact-icon" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                <path d="M3 4h12a1 1 0 011 1v8a1 1 0 01-1 1H3a1 1 0 01-1-1V5a1 1 0 011-1z" stroke="currentColor" stroke-width="1.5"/>
                <path d="M2 5l7 5 7-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
              <div class="footer__contact-text">
                <a href="<?= $base_path ?>contacto.php">Formulario de contacto</a>
              </div>
            </div>

            <div class="footer__contact-item">
              <svg class="footer__contact-icon" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                <path d="M2.5 3.5c0 8.008 6.492 14.5 14.5 14.5" stroke="currentColor" stroke-width="1.5"/>
                <path d="M2.5 3.5l3 .5 1.5 3-2 2a10 10 0 004.5 4.5l2-2 3 1.5.5 3A14.5 14.5 0 012.5 3.5z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
              </svg>
              <div class="footer__contact-text">
                <a href="tel:<?= SITE_PHONE_E164 ?>"><?= SITE_PHONE ?></a><br>
                <small style="font-size:.7rem;color:rgba(255,255,255,.4);"><?= SITE_HOURS_SHORT ?></small>
              </div>
            </div>

          </address>
        </div>

      </div><!-- /.footer__grid -->

      <!-- Barra inferior -->
      <div class="footer__bottom">
        <p class="footer__copy">
          © <span id="current-year"><?= date('Y') ?></span> Consultoría HOST.
          Todos los derechos reservados.
        </p>
        <nav class="footer__legal" aria-label="Legal">
          <a href="<?= $base_path ?>privacidad.php"  class="footer__legal-link">Política de privacidad</a>
          <a href="<?= $base_path ?>aviso-legal.php" class="footer__legal-link">Aviso legal</a>
          <a href="<?= $base_path ?>cookies.php"     class="footer__legal-link">Cookies</a>
        </nav>
      </div>

    </div>
  </footer>

  <!-- JavaScript global -->
  <script src="<?= $base_path ?>assets/js/main.js<?= asset_v('js/main.js') ?>" defer></script>
  <!-- Banner de consentimiento de cookies -->
  <script src="<?= $base_path ?>assets/js/cookies.js<?= asset_v('js/cookies.js') ?>" defer></script>

</body>
</html>
