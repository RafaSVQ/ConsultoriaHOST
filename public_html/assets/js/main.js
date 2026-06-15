/**
 * CONSULTORÍA HOST — JavaScript Principal
 * Archivo: assets/js/main.js
 * Descripción: Módulos para navegación sticky, menú móvil,
 *              animaciones de scroll-reveal, y utilidades globales.
 *
 * Arquitectura: IIFE + patrón de módulos, sin dependencias externas.
 * Principios: DRY, SRP, accesibilidad (ARIA, teclado, focus).
 */

'use strict';

/* ============================================================
   MÓDULO: Navegación
   Responsabilidad: scroll sticky, menú móvil, dropdowns,
   marcado de página activa.
   ============================================================ */
const NavModule = (() => {

  /* --- Referencias DOM --- */
  const nav = document.querySelector('.nav');
  const toggle = document.querySelector('.nav__toggle');
  const mobileMenu = document.querySelector('.nav__mobile');
  const mobileOverlay = document.querySelector('.nav__mobile-overlay');
  const dropdownItems = document.querySelectorAll('.nav__item');

  let isMenuOpen = false;

  /**
   * Añade clase --scrolled cuando el usuario ha bajado más de 20px.
   * Mejora la visibilidad de la navbar sobre contenido claro.
   */
  const handleScroll = () => {
    if (!nav) return;
    nav.classList.toggle('nav--scrolled', window.scrollY > 20);
  };

  /**
   * Abre/cierra el menú mobile drawer.
   * Gestiona ARIA y el bloqueo de scroll del body.
   */
  const toggleMenu = () => {
    isMenuOpen = !isMenuOpen;

    toggle?.classList.toggle('is-open', isMenuOpen);
    mobileMenu?.classList.toggle('is-open', isMenuOpen);
    mobileOverlay?.classList.toggle('is-visible', isMenuOpen);

    // Accesibilidad
    toggle?.setAttribute('aria-expanded', String(isMenuOpen));
    mobileMenu?.setAttribute('aria-hidden', String(!isMenuOpen));

    // Bloqueo scroll body cuando menú abierto
    document.body.style.overflow = isMenuOpen ? 'hidden' : '';

    // Focus trap: lleva el foco al primer enlace del menú al abrirse
    if (isMenuOpen) {
      const firstLink = mobileMenu?.querySelector('a');
      setTimeout(() => firstLink?.focus(), 100);
    }
  };

  /**
   * Cierra el menú mobile.
   */
  const closeMenu = () => {
    if (!isMenuOpen) return;
    isMenuOpen = false;
    toggle?.classList.remove('is-open');
    mobileMenu?.classList.remove('is-open');
    mobileOverlay?.classList.remove('is-visible');
    toggle?.setAttribute('aria-expanded', 'false');
    mobileMenu?.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    toggle?.focus(); // Devolver focus al botón que abrió el menú
  };

  /**
   * Marca el enlace activo en la navegación según la URL actual.
   */
  const setActiveLink = () => {
    const current = window.location.pathname.split('/').pop() || 'index.php';

    document.querySelectorAll('.nav__link, .nav__dropdown-link, .nav__mobile-link')
      .forEach(link => {
        const href = link.getAttribute('href')?.split('/').pop() || '';
        link.classList.toggle('nav__link--active', href === current && href !== '');
      });
  };

  /**
   * Inicializa listeners del módulo.
   */
  const init = () => {
    // Scroll sticky
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // Estado inicial

    // Hamburguesa
    toggle?.addEventListener('click', toggleMenu);

    // Cierre al pulsar overlay
    mobileOverlay?.addEventListener('click', closeMenu);

    // Cierre con Escape
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && isMenuOpen) closeMenu();
    });

    // Marcar activo
    setActiveLink();
  };

  return { init };
})();


/* ============================================================
   MÓDULO: ScrollReveal
   Responsabilidad: animar elementos .reveal al entrar en
   el viewport usando IntersectionObserver.
   ============================================================ */
const ScrollRevealModule = (() => {

  /**
   * Crea un IntersectionObserver que activa la clase .is-visible
   * cuando el elemento entra al menos un 15% en el viewport.
   */
  const init = () => {
    // Respeta preferencia de movimiento reducido
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.querySelectorAll('.reveal').forEach(el => {
        el.classList.add('is-visible');
      });
      return;
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target); // Una vez activado, dejar de observar
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
  };

  return { init };
})();


/* ============================================================
   MÓDULO: SmoothScroll
   Responsabilidad: scroll suave a anclas internas (#section)
   con compensación por la navbar fija.
   ============================================================ */
const SmoothScrollModule = (() => {

  const NAV_OFFSET = 80; // px extra sobre el nav

  const handleAnchorClick = (e) => {
    const href = e.currentTarget.getAttribute('href');
    if (!href || !href.startsWith('#')) return;

    const target = document.querySelector(href);
    if (!target) return;

    e.preventDefault();

    const top = target.getBoundingClientRect().top
      + window.scrollY
      - NAV_OFFSET;

    window.scrollTo({ top, behavior: 'smooth' });
  };

  const init = () => {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', handleAnchorClick);
    });
  };

  return { init };
})();


/* ============================================================
   MÓDULO: CountUp
   Responsabilidad: animar contadores numéricos en la sección
   de stats cuando entran en el viewport.
   ============================================================ */
const CountUpModule = (() => {

  /**
   * Anima un número desde 0 hasta el valor final indicado
   * en data-target del elemento.
   *
   * @param {HTMLElement} el - El elemento con data-target
   * @param {number} duration - Duración en ms
   */
  const animateNumber = (el, duration = 1800) => {
    const target = parseFloat(el.dataset.target || '0');
    const suffix = el.dataset.suffix || '';
    const prefix = el.dataset.prefix || '';
    const decimals = el.dataset.decimals ? parseInt(el.dataset.decimals) : 0;
    const start = performance.now();

    const step = (timestamp) => {
      const elapsed = timestamp - start;
      const progress = Math.min(elapsed / duration, 1);

      // Easing: ease-out-cubic
      const eased = 1 - Math.pow(1 - progress, 3);
      const current = target * eased;

      el.textContent = prefix + current.toFixed(decimals) + suffix;

      if (progress < 1) requestAnimationFrame(step);
    };

    requestAnimationFrame(step);
  };

  const init = () => {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.querySelectorAll('[data-target]').forEach(el => {
        const t = el.dataset.target || '0';
        const s = el.dataset.suffix || '';
        const p = el.dataset.prefix || '';
        el.textContent = p + t + s;
      });
      return;
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateNumber(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-target]').forEach(el => observer.observe(el));
  };

  return { init };
})();


/* ============================================================
   MÓDULO: MobileDropdowns
   Responsabilidad: gestionar acordeones en el menú móvil
   para los submenús de departamentos.
   ============================================================ */
const MobileDropdownsModule = (() => {

  const init = () => {
    document.querySelectorAll('.nav__mobile-toggle').forEach(trigger => {
      trigger.addEventListener('click', () => {
        const panel = document.getElementById(trigger.dataset.target);
        if (!panel) return;

        const isOpen = panel.style.maxHeight && panel.style.maxHeight !== '0px';

        // Cierra todos los paneles abiertos primero
        document.querySelectorAll('.nav__mobile-panel').forEach(p => {
          p.style.maxHeight = '0px';
          p.setAttribute('aria-hidden', 'true');
        });
        document.querySelectorAll('.nav__mobile-toggle').forEach(t => {
          t.setAttribute('aria-expanded', 'false');
        });

        // Abre el pulsado si estaba cerrado
        if (!isOpen) {
          panel.style.maxHeight = panel.scrollHeight + 'px';
          panel.setAttribute('aria-hidden', 'false');
          trigger.setAttribute('aria-expanded', 'true');
        }
      });
    });
  };

  return { init };
})();


/* ============================================================
   MÓDULO: Contacto — Formulario con validación y envío AJAX
   Responsabilidad: validar campos, mostrar errores inline,
   enviar a contacto.php y mostrar confirmación.
   ============================================================ */
const ContactFormModule = (() => {

  /** Reglas de validación por campo */
  const RULES = {
    nombre: { required: true, minLength: 2 },
    telefono: { required: false, pattern: /^(\+34[\s-]?)?[6-9]\d{2}[\s-]?\d{3}[\s-]?\d{3}$/ },
    email: { required: true, pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/ },
    mensaje: { required: true, minLength: 10 }
  };

  /**
   * Valida un campo según sus reglas.
   * @returns {string|null} Mensaje de error o null si válido.
   */
  const validateField = (name, value) => {
    const rule = RULES[name];
    if (!rule) return null;

    const trimmed = value.trim();

    if (rule.required && !trimmed)
      return 'Este campo es obligatorio.';

    if (trimmed && rule.minLength && trimmed.length < rule.minLength)
      return `Mínimo ${rule.minLength} caracteres.`;

    if (trimmed && rule.pattern && !rule.pattern.test(trimmed))
      return name === 'email'
        ? 'Introduce un email válido.'
        : 'Formato no válido.';

    return null;
  };

  /**
   * Muestra u oculta el error de un campo.
   */
  const setFieldError = (input, message) => {
    const group = input.closest('.form-group');
    let errorEl = group?.querySelector('.form-error');

    if (!group) return;

    if (message) {
      input.setAttribute('aria-invalid', 'true');
      input.style.borderColor = '#DC2626';

      if (!errorEl) {
        errorEl = document.createElement('span');
        errorEl.className = 'form-error';
        errorEl.setAttribute('role', 'alert');
        group.appendChild(errorEl);
      }
      errorEl.textContent = message;
    } else {
      input.removeAttribute('aria-invalid');
      input.style.borderColor = '';
      errorEl?.remove();
    }
  };

  /**
   * Inicializa el formulario de contacto si existe en la página.
   */
  const init = () => {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const successMsg = document.getElementById('form-success');
    const submitBtn = form.querySelector('[type="submit"]');

    // Validación en tiempo real (al salir de cada campo)
    form.querySelectorAll('input, textarea').forEach(input => {
      input.addEventListener('blur', () => {
        const error = validateField(input.name, input.value);
        setFieldError(input, error);
      });

      // Limpiar error al escribir
      input.addEventListener('input', () => {
        if (input.getAttribute('aria-invalid')) {
          const error = validateField(input.name, input.value);
          setFieldError(input, error);
        }
      });
    });

    // Envío
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Validar todos los campos
      let hasErrors = false;
      form.querySelectorAll('input, textarea').forEach(input => {
        const error = validateField(input.name, input.value);
        setFieldError(input, error);
        if (error) hasErrors = true;
      });

      if (hasErrors) {
        // Focus en el primer campo con error
        form.querySelector('[aria-invalid="true"]')?.focus();
        return;
      }

      // Estado de carga
      const originalText = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = 'Enviando…';

      try {
        const data = new FormData(form);

        const res = await fetch('api/contacto.php', {
          method: 'POST',
          body: data
        });

        const json = await res.json();

        if (json.success) {
          form.reset();
          successMsg?.classList.add('is-visible');
          successMsg?.setAttribute('tabindex', '-1');
          successMsg?.focus();
        } else {
          let serverErr = form.querySelector('.form-server-error');
          if (!serverErr) {
            serverErr = document.createElement('p');
            serverErr.className = 'form-server-error';
            serverErr.setAttribute('role', 'alert');
            serverErr.style.cssText = 'color:#DC2626;font-size:.875rem;margin-top:.75rem;';
            submitBtn.insertAdjacentElement('afterend', serverErr);
          }
          serverErr.textContent = json.message || 'Error al enviar el mensaje.';
          serverErr.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
      } catch (err) {
        console.error('Error contacto:', err);
        alert('Ha ocurrido un error al enviar el mensaje. Por favor, llámenos directamente al 95 418 25 08.');
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
      }
    });
  };

  return { init };
})();


/* ============================================================
   INICIALIZACIÓN GLOBAL
   Se ejecuta cuando el DOM está completamente cargado.
   ============================================================ */
document.addEventListener('DOMContentLoaded', () => {
  NavModule.init();
  ScrollRevealModule.init();
  SmoothScrollModule.init();
  CountUpModule.init();
  MobileDropdownsModule.init();
  ContactFormModule.init();
});
