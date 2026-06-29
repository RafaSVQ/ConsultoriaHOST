/**
 * CONSULTORÍA HOST — Banner de Consentimiento de Cookies + Google Analytics 4
 * Archivo: assets/js/cookies.js
 *
 * Muestra el banner si el usuario aún no ha tomado una decisión.
 * Guarda la preferencia en localStorage durante 1 año.
 * Accesible: gestión de foco y tecla Escape.
 *
 * GA4 (gtag.js) solo se carga si el usuario pulsa "Aceptar" — nunca antes.
 * Usa Google Consent Mode v2 (consent default 'denied' definido en head.php).
 *
 * Integración: añadir <script src="/assets/js/cookies.js" defer></script>
 * en includes/footer.php (ya referenciado).
 */

'use strict';

const CookiesBanner = (() => {

  const STORAGE_KEY = 'host_cookie_consent';
  const EXPIRY_DAYS = 365;
  const GA_ID        = 'G-DWMM3SZQR8';

  /**
   * Guarda la decisión del usuario con marca de tiempo.
   * @param {'accepted'|'rejected'} decision
   */
  const guardarDecision = (decision) => {
    const datos = {
      decision,
      timestamp: Date.now(),
      expiry: Date.now() + (EXPIRY_DAYS * 24 * 60 * 60 * 1000),
    };
    localStorage.setItem(STORAGE_KEY, JSON.stringify(datos));
  };

  /**
   * Recupera la decisión guardada si sigue vigente.
   * @returns {{decision: 'accepted'|'rejected', timestamp: number, expiry: number}|null}
   */
  const obtenerDatos = () => {
    try {
      const raw = localStorage.getItem(STORAGE_KEY);
      if (!raw) return null;
      const datos = JSON.parse(raw);
      return datos.expiry > Date.now() ? datos : null;
    } catch {
      return null;
    }
  };

  /**
   * Comprueba si ya existe una decisión válida (no caducada).
   * @returns {boolean}
   */
  const tieneDecision = () => obtenerDatos() !== null;

  /**
   * Activa Google Analytics 4 únicamente tras consentimiento explícito.
   * Inyecta gtag.js de forma asíncrona — no se carga nunca por defecto,
   * por lo que no afecta a las métricas de rendimiento (PageSpeed/Lighthouse)
   * en una carga sin consentimiento previo (p. ej. en auditorías automatizadas).
   */
  const cargarAnalytics = () => {
    if (document.getElementById('ga4-script')) return;

    gtag('consent', 'update', { 'analytics_storage': 'granted' });

    const script = document.createElement('script');
    script.id    = 'ga4-script';
    script.async = true;
    script.src   = `https://www.googletagmanager.com/gtag/js?id=${GA_ID}`;
    document.head.appendChild(script);

    gtag('js', new Date());
    gtag('config', GA_ID, { anonymize_ip: true });
  };

  /**
   * Elimina el banner del DOM con animación suave.
   * @param {HTMLElement} banner
   */
  const ocultarBanner = (banner) => {
    banner.style.transform = 'translateY(120%)';
    banner.style.opacity = '0';
    setTimeout(() => banner.remove(), 400);
  };

  /**
   * Crea e inyecta el banner de cookies en el DOM.
   */
  const crearBanner = () => {
    const banner = document.createElement('div');
    banner.id = 'cookie-banner';
    banner.setAttribute('role', 'dialog');
    banner.setAttribute('aria-modal', 'false');
    banner.setAttribute('aria-label', 'Aviso de cookies');
    banner.setAttribute('aria-live', 'polite');

    banner.style.cssText = `
      position: fixed;
      bottom: 1.5rem;
      left: 50%;
      transform: translateX(-50%) translateY(120%);
      width: min(calc(100vw - 2rem), 680px);
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 1rem;
      padding: 1.25rem 1.5rem;
      box-shadow: 0 16px 48px rgba(15,43,91,0.2);
      display: flex;
      align-items: center;
      gap: 1rem;
      flex-wrap: wrap;
      z-index: 9999;
      opacity: 0;
      transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1), opacity 0.3s ease;
    `;

    banner.innerHTML = `
      <div style="flex:1;min-width:200px;">
        <p style="
          font-size:0.875rem;
          color:#475569;
          line-height:1.6;
          margin:0;
          max-width:none;
        ">
          🍪 Usamos <strong>cookies técnicas</strong> necesarias para el funcionamiento
          del sitio y, si lo aceptas, <strong>cookies analíticas</strong> (Google Analytics)
          para entender cómo se usa la web. Sin publicidad.
          <a href="/cookies"
             style="color:#1A56A8;font-weight:600;"
             target="_blank" rel="noopener">
            Más información
          </a>
        </p>
      </div>
      <div style="display:flex;gap:0.75rem;flex-shrink:0;">
        <button
          id="cookie-rechazar"
          class="hover-btn-reject"
          style="
            padding:0.5rem 1rem;
            font-family:inherit;font-size:0.8rem;font-weight:600;
            color:#475569;background:transparent;
            border:1.5px solid #CBD5E1;border-radius:9999px;
            cursor:pointer;white-space:nowrap;
          "
        >Solo necesarias</button>
        <button
          id="cookie-aceptar"
          class="hover-btn-accept"
          style="
            padding:0.5rem 1.25rem;
            font-family:inherit;font-size:0.8rem;font-weight:600;
            color:white;
            background:linear-gradient(135deg,#E8621A,#F5A623);
            border:none;border-radius:9999px;
            cursor:pointer;white-space:nowrap;
            box-shadow:0 4px 12px rgba(232,98,26,.3);
          "
        >Aceptar</button>
      </div>
    `;

    document.body.appendChild(banner);

    /* Animar entrada */
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        banner.style.transform = 'translateX(-50%) translateY(0)';
        banner.style.opacity = '1';
      });
    });

    /* Eventos de los botones */
    document.getElementById('cookie-aceptar').addEventListener('click', () => {
      guardarDecision('accepted');
      cargarAnalytics();
      ocultarBanner(banner);
    });

    document.getElementById('cookie-rechazar').addEventListener('click', () => {
      guardarDecision('rejected');
      ocultarBanner(banner);
    });

    /* Cerrar con Escape */
    document.addEventListener('keydown', function onEsc(e) {
      if (e.key === 'Escape') {
        guardarDecision('rejected');
        ocultarBanner(banner);
        document.removeEventListener('keydown', onEsc);
      }
    });
  };

  /**
   * Inicializa el módulo.
   * Solo muestra el banner si no hay decisión previa válida.
   */
  const init = () => {
    const datos = obtenerDatos();
    if (datos) {
      if (datos.decision === 'accepted') cargarAnalytics();
      return;
    }
    /* Pequeño retraso para no bloquear el pintado inicial */
    setTimeout(crearBanner, 1200);
  };

  return { init };
})();

document.addEventListener('DOMContentLoaded', () => CookiesBanner.init());
