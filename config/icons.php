<?php
/**
 * CONSULTORÍA HOST — Librería de iconos SVG
 * Archivo: config/icons.php
 *
 * Sprite SVG inline como funciones PHP. Sin dependencias externas,
 * sin fuentes de iconos, sin JS. Cada icono es SVG puro optimizado
 * con viewBox="0 0 24 24" (estándar Heroicons / Lucide).
 *
 * Uso básico (icono decorativo, aria-hidden automático):
 *   <?= icon('user') ?>
 *
 * Uso con etiqueta accesible (icono funcional sin texto adyacente):
 *   <?= icon('user', label: 'Perfil de usuario') ?>
 *
 * Uso con tamaño personalizado:
 *   <?= icon('rocket', size: 32) ?>
 *
 * Uso con clases CSS adicionales:
 *   <?= icon('check-circle', class: 'icon--green') ?>
 *
 * ACCESIBILIDAD:
 *   - Sin label → aria-hidden="true" (icono puramente decorativo)
 *   - Con label → role="img" + aria-label (icono funcional autónomo)
 *   - Con texto adyacente → sin label, el texto aporta el contexto
 *
 * AÑADIR NUEVOS ICONOS:
 *   Añadir una entrada al array $_ICONS al final del archivo.
 *   El path SVG debe ser para viewBox="0 0 24 24".
 *   Fuentes recomendadas: heroicons.com / lucide.dev
 */

declare(strict_types=1);

/**
 * Renderiza un icono SVG inline.
 *
 * @param string      $name   Clave del icono en el registro $_ICONS
 * @param string|null $label  Etiqueta accesible (aria-label). Si es null → aria-hidden
 * @param int         $size   Tamaño en px del atributo width/height (default: 24)
 * @param string      $class  Clases CSS adicionales para el elemento <svg>
 * @param string      $color  Color CSS (default: 'currentColor' — hereda del padre)
 * @return string             HTML del elemento <svg> listo para echo
 */
function icon(
    string  $name,
    ?string $label = null,
    int     $size  = 24,
    string  $class = '',
    string  $color = 'currentColor'
): string {
    global $_ICONS;

    if (!isset($_ICONS[$name])) {
        // En desarrollo: aviso visible. En producción: silencioso.
        if (defined('SITE_DEBUG') && SITE_DEBUG) {
            return "<!-- icon '$name' not found -->";
        }
        return '';
    }

    $path         = $_ICONS[$name];
    $aria         = $label !== null
        ? 'role="img" aria-label="' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '"'
        : 'aria-hidden="true"';
    $class_attr   = $class ? ' class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '"' : '';
    $focusable    = 'focusable="false"';  // Evita foco en IE11

    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" width="%d" height="%d" viewBox="0 0 24 24" fill="none" stroke="%s" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" %s%s %s>%s</svg>',
        $size, $size,
        htmlspecialchars($color, ENT_QUOTES, 'UTF-8'),
        $aria,
        $class_attr,
        $focusable,
        $path
    );
}

/**
 * Versión rellena del icono (fill en lugar de stroke).
 * Útil para algunos iconos que se diseñaron para fill.
 */
function icon_filled(
    string  $name,
    ?string $label = null,
    int     $size  = 24,
    string  $class = '',
    string  $color = 'currentColor'
): string {
    global $_ICONS_FILLED;

    // Si no existe versión filled, usar la de stroke
    if (!isset($_ICONS_FILLED[$name])) {
        return icon($name, $label, $size, $class, $color);
    }

    $path     = $_ICONS_FILLED[$name];
    $aria     = $label !== null
        ? 'role="img" aria-label="' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '"'
        : 'aria-hidden="true"';
    $class_attr = $class ? ' class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '"' : '';

    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" width="%d" height="%d" viewBox="0 0 24 24" fill="%s" %s%s focusable="false">%s</svg>',
        $size, $size,
        htmlspecialchars($color, ENT_QUOTES, 'UTF-8'),
        $aria,
        $class_attr,
        $path
    );
}


// =============================================================
// REGISTRO DE ICONOS — paths SVG para viewBox="0 0 24 24"
// Fuente: Heroicons v2 (heroicons.com) — MIT License
// =============================================================

$_ICONS = [

    // ---- PERSONAS Y ROLES ----

    /** 👤 Persona / usuario */
    'user' =>
        '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>'
        . '<circle cx="12" cy="7" r="4"/>',

    /** 👥 Grupo de personas */
    'users' =>
        '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>'
        . '<circle cx="9" cy="7" r="4"/>'
        . '<path d="M23 21v-2a4 4 0 0 1-3-3.87"/>'
        . '<path d="M16 3.13a4 4 0 0 1 0 7.75"/>',

    /** 🏢 Empresa / edificio de oficinas */
    'building' =>
        '<path d="M3 21h18"/>'
        . '<path d="M5 21V7l8-4v18"/>'
        . '<path d="M19 21V11l-6-4"/>'
        . '<path d="M9 9v.01M9 12v.01M9 15v.01M9 18v.01"/>',

    /** 👩‍💼 Mujer profesional / perfil */
    'user-circle' =>
        '<circle cx="12" cy="12" r="10"/>'
        . '<circle cx="12" cy="10" r="3"/>'
        . '<path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"/>',

    // ---- EMPRENDIMIENTO Y TRABAJO ----

    /** 🚀 Cohete — emprender, lanzar */
    'rocket' =>
        '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>'
        . '<path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>'
        . '<path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/>'
        . '<path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>',

    /** 🌱 Planta — crecimiento, emprendimiento */
    'sprout' =>
        '<path d="M7 20h10"/>'
        . '<path d="M10 20c5.5-2.5.8-6.4 3-10"/>'
        . '<path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/>'
        . '<path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/>',

    /** 🎯 Diana — objetivo, orientación profesional */
    'target' =>
        '<circle cx="12" cy="12" r="10"/>'
        . '<circle cx="12" cy="12" r="6"/>'
        . '<circle cx="12" cy="12" r="2"/>',

    /** 🧭 Brújula — orientación */
    'compass' =>
        '<circle cx="12" cy="12" r="10"/>'
        . '<polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>',

    /** 💼 Maletín — trabajo, profesional */
    'briefcase' =>
        '<rect width="20" height="14" x="2" y="7" rx="2" ry="2"/>'
        . '<path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',

    /** 🤝 Apretón de manos — colaboración, networking */
    'handshake' =>
        '<path d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z"/>'
        . '<path d="M12 5.36 8.87 8.5a2.13 2.13 0 0 0 0 3l.36.38a2.13 2.13 0 0 0 3.03 0l2.5-2.5a2.13 2.13 0 0 1 3.03 0l1.03 1.03"/>',

    // ---- IDEAS Y SOLUCIONES ----

    /** 💡 Bombilla — idea, solución */
    'lightbulb' =>
        '<path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/>'
        . '<path d="M9 18h6"/>'
        . '<path d="M10 22h4"/>',

    /** 🎓 Birrete — formación, educación */
    'graduation' =>
        '<path d="M22 10v6M2 10l10-5 10 5-10 5z"/>'
        . '<path d="M6 12v5c3 3 9 3 12 0v-5"/>',

    // ---- DATOS Y ANÁLISIS ----

    /** 📊 Gráfico de barras — análisis, datos */
    'chart-bar' =>
        '<line x1="18" x2="18" y1="20" y2="10"/>'
        . '<line x1="12" x2="12" y1="20" y2="4"/>'
        . '<line x1="6"  x2="6"  y1="20" y2="14"/>'
        . '<line x1="2"  x2="22" y1="20" y2="20"/>',

    /** 📋 Portapapeles — planificación, documentos */
    'clipboard' =>
        '<rect width="8" height="4" x="8" y="2" rx="1" ry="1"/>'
        . '<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>',

    /** 🔍 Lupa — buscar, investigar */
    'search' =>
        '<circle cx="11" cy="11" r="8"/>'
        . '<path d="m21 21-4.3-4.3"/>',

    // ---- COMUNICACIÓN ----

    /** 📱 Móvil — redes sociales, digital */
    'smartphone' =>
        '<rect width="14" height="20" x="5" y="2" rx="2" ry="2"/>'
        . '<path d="M12 18h.01"/>',

    /** 📬 Buzón — suscripción, email */
    'mailbox' =>
        '<path d="M22 17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.5C2 7 4 5 6.5 5H18c2.2 0 4 1.8 4 4v8z"/>'
        . '<polyline points="15,9 18,9 18,11"/>'
        . '<path d="M6.5 5C9 5 11 7 11 9.5V17a2 2 0 0 1-2 2"/>'
        . '<line x1="6" x2="7" y1="10" y2="10"/>',

    /** ✍️ Lápiz — escritura, contenido */
    'pencil' =>
        '<path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>'
        . '<path d="m15 5 4 4"/>',

    /** 📢 Megáfono — comunicación, anuncio */
    'megaphone' =>
        '<path d="m3 11 19-9-9 19-2-8-8-2z"/>',

    // ---- NETWORKING Y EVENTOS ----

    /** ☕ Taza — networking desayuno */
    'coffee' =>
        '<path d="M17 8h1a4 4 0 1 1 0 8h-1"/>'
        . '<path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z"/>'
        . '<line x1="6" x2="6" y1="2" y2="4"/>'
        . '<line x1="10" x2="10" y1="2" y2="4"/>'
        . '<line x1="14" x2="14" y1="2" y2="4"/>',

    /** 🎤 Micrófono — ponencia, evento */
    'mic' =>
        '<path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/>'
        . '<path d="M19 10v2a7 7 0 0 1-14 0v-2"/>'
        . '<line x1="12" x2="12" y1="19" y2="22"/>',

    /** 🌐 Globo terráqueo — online, global */
    'globe' =>
        '<circle cx="12" cy="12" r="10"/>'
        . '<line x1="2" x2="22" y1="12" y2="12"/>'
        . '<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',

    /** 🌍 Globo — internacional */
    'map-pin' =>
        '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>'
        . '<circle cx="12" cy="10" r="3"/>',

    // ---- MEDIOAMBIENTE ----

    /** ♻️ Reciclaje / sostenible */
    'recycle' =>
        '<path d="M7 19H4.815a1.83 1.83 0 0 1-1.57-2.25l2.312-11.25c.233-1 1.16-1.75 2.2-1.75h12.486c1.04 0 1.967.75 2.2 1.75L22.5 11"/>'
        . '<path d="M5 11h16"/>'
        . '<path d="m18 16 2 2-2 2"/>'
        . '<path d="M20 18H9.5a3.5 3.5 0 1 0 0 7H12"/>',

    /** 💧 Gota de agua */
    'droplet' =>
        '<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/>',

    /** 🌡️ Termómetro — temperatura, eficiencia energética */
    'thermometer' =>
        '<path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"/>',

    /** 🔒 Candado — seguridad informática */
    'lock' =>
        '<rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>'
        . '<path d="M7 11V7a5 5 0 0 1 10 0v4"/>',

    /** ✅ Círculo con check — verificación, cumplimiento, supervisión */
    'check-circle' =>
        '<path d="M9 12.75L11.25 15L15 9.75M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"/>',

    /** 🛡️ Escudo con check — protección, seguridad, garantía normativa */
    'shield-check' =>
        '<path d="M9 12.7498L11.25 14.9998L15 9.74985M12 2.71411C9.8495 4.75073 6.94563 5.99986 3.75 5.99986C3.69922 5.99986 3.64852 5.99955 3.59789 5.99892C3.2099 7.17903 3 8.43995 3 9.74991C3 15.3414 6.82432 20.0397 12 21.3719C17.1757 20.0397 21 15.3414 21 9.74991C21 8.43995 20.7901 7.17903 20.4021 5.99892C20.3515 5.99955 20.3008 5.99986 20.25 5.99986C17.0544 5.99986 14.1505 4.75073 12 2.71411Z"/>',

    /** ⚖️ Balanza — ley, regulación, marco normativo */
    'scale' =>
        '<path d="M12 3V20.25M12 20.25C10.528 20.25 9.1179 20.515 7.81483 21M12 20.25C13.472 20.25 14.8821 20.515 16.1852 21M18.75 4.97089C16.5446 4.66051 14.291 4.5 12 4.5C9.70897 4.5 7.45542 4.66051 5.25 4.97089M18.75 4.97089C19.7604 5.1131 20.7608 5.28677 21.75 5.49087M18.75 4.97089L21.3704 15.6961C21.4922 16.1948 21.2642 16.7237 20.7811 16.8975C20.1468 17.1257 19.4629 17.25 18.75 17.25C18.0371 17.25 17.3532 17.1257 16.7189 16.8975C16.2358 16.7237 16.0078 16.1948 16.1296 15.6961L18.75 4.97089ZM2.25 5.49087C3.23922 5.28677 4.23956 5.1131 5.25 4.97089M5.25 4.97089L7.87036 15.6961C7.9922 16.1948 7.76419 16.7237 7.28114 16.8975C6.6468 17.1257 5.96292 17.25 5.25 17.25C4.53708 17.25 3.8532 17.1257 3.21886 16.8975C2.73581 16.7237 2.5078 16.1948 2.62964 15.6961L5.25 4.97089Z"/>',

    /** 👁️ Ojo — supervisión, observación, monitorización continua */
    'eye' =>
        '<path d="M2.03555 12.3224C1.96647 12.1151 1.9664 11.8907 2.03536 11.6834C3.42372 7.50972 7.36079 4.5 12.0008 4.5C16.6387 4.5 20.5742 7.50692 21.9643 11.6776C22.0334 11.8849 22.0335 12.1093 21.9645 12.3166C20.5761 16.4903 16.6391 19.5 11.9991 19.5C7.36119 19.5 3.42564 16.4931 2.03555 12.3224Z"/>'
        . '<path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"/>',

    /** 🔄 Flechas circulares — proceso, cambio, outplacement */
    'refresh' =>
        '<path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/>'
        . '<path d="M21 3v5h-5"/>'
        . '<path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/>'
        . '<path d="M8 16H3v5"/>',

    // ---- ESTRATEGIA ----

    /** 🗺️ Mapa — estrategia, planificación */
    'map' =>
        '<polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"/>'
        . '<line x1="9" x2="9" y1="3" y2="18"/>'
        . '<line x1="15" x2="15" y1="6" y2="21"/>',

    /** 🌈 Arco iris — proyecto IRiS, diversidad */
    'rainbow' =>
        '<path d="M22 17a10 10 0 0 0-20 0"/>'
        . '<path d="M6 17a6 6 0 0 1 12 0"/>'
        . '<path d="M10 17a2 2 0 0 1 4 0"/>',

    /** € Euro / moneda */
    'euro' =>
        '<circle cx="12" cy="12" r="10"/>'
        . '<path d="M15 9.354a4 4 0 1 0 0 5.292"/>'
        . '<path d="M8.5 12h5M8.5 14h5"/>',

    /** ★ Estrella / logro */
    'star' =>
        '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',

    /** 🌾 Campo / rural */
    'wheat' =>
        '<path d="M2 22 16 8"/>'
        . '<path d="M3.47 12.53 5 11l1.53 1.53a3.5 3.5 0 0 1 0 4.94L5 19l-1.53-1.53a3.5 3.5 0 0 1 0-4.94z"/>'
        . '<path d="M7.47 8.53 9 7l1.53 1.53a3.5 3.5 0 0 1 0 4.94L9 15l-1.53-1.53a3.5 3.5 0 0 1 0-4.94z"/>'
        . '<path d="M11.47 4.53 13 3l1.53 1.53a3.5 3.5 0 0 1 0 4.94L13 11l-1.53-1.53a3.5 3.5 0 0 1 0-4.94z"/>',


    /** ♀ Símbolo femenino — igualdad, feminismo */
    'gender-female' =>
        '<circle cx="12" cy="9" r="5"/>'
        . '<line x1="12" x2="12" y1="14" y2="22"/>'
        . '<line x1="9"  x2="15" y1="19" y2="19"/>',

];

// =============================================================
// ICONOS FILLED (rellenos) — para usos específicos
// =============================================================
$_ICONS_FILLED = [

    'check-circle' =>
        '<path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"/>',

    'exclamation-circle' =>
        '<path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd"/>',

];
