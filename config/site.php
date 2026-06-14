<?php
/**
 * CONSULTORÍA HOST — Configuración global del sitio
 * Archivo: config/site.php
 *
 * Punto único de verdad para todos los datos de contacto,
 * textos de marca, URLs y metadatos del sitio.
 *
 * Uso: este archivo se incluye automáticamente desde includes/head.php,
 * que es el primer include de todas las páginas. No es necesario
 * incluirlo manualmente en cada página.
 *
 * Para modificar cualquier dato: editar SOLO este archivo.
 * Los cambios se propagarán automáticamente a todo el sitio.
 */

// =============================================================
// IDENTIDAD DE MARCA
// =============================================================

/** Nombre comercial completo */
define('SITE_NAME',         'Consultoría HOST');

/** Denominación social / razón social (para documentos legales LSSI-CE, RGPD) */
define('SITE_LEGAL_NAME',   'Red de Redes Tecnológica S.L.U.');

/** NIF / CIF del titular (requerido por LSSI-CE art. 10) */
define('SITE_CIF',          'B73326811');

/** Tagline / subtítulo */
define('SITE_TAGLINE',      'Consultoría e Ingeniería 3.0');

/** Nombre del sitio web (para meta og:site_name, Schema.org, etc.) */
define('SITE_DOMAIN',       'consultoriahost.es');

/** URL base del sitio (sin barra final) */
define('SITE_URL',          'https://consultoriahost.es');

/** Descripción por defecto para meta description y Open Graph */
define('SITE_DESCRIPTION',  'Consultoría e Ingeniería 3.0 para microempresas, autónomos y personas. Sevilla, España.');

/** Keywords por defecto */
define('SITE_KEYWORDS',     'consultoría, microempresa, pyme, emprendimiento, Sevilla, HOST');

/** Imagen Open Graph por defecto */
define('SITE_OG_IMAGE',     SITE_URL . '/assets/img/og-image.jpg');


// =============================================================
// CONTACTO — TELÉFONO
// =============================================================

/** Teléfono en formato visual español */
define('SITE_PHONE',        '95 418 25 08');

/** Teléfono en formato E.164 para href="tel:" (sin espacios) */
define('SITE_PHONE_E164',   '+34954182508');

/** Teléfono con prefijo internacional visual */
define('SITE_PHONE_INTL',   '+34 95 418 25 08');

/** Etiqueta HTML completa del teléfono como enlace (uso frecuente) */
define('SITE_PHONE_LINK',
    '<a href="tel:' . SITE_PHONE_E164 . '">📞 ' . SITE_PHONE . '</a>'
);


// =============================================================
// CONTACTO — EMAIL
// =============================================================

/** Email principal de contacto y destino de formularios */
define('SITE_EMAIL',        'contactoweb@consultoriahost.es');

/** Email de noreply para envíos automáticos */
define('SITE_EMAIL_NOREPLY','contactoweb@consultoriahost.es');


// =============================================================
// CONTACTO — UBICACIÓN
// =============================================================

/** Ciudad */
define('SITE_CITY',         'Sevilla');

/** Comunidad autónoma */
define('SITE_REGION',       'Andalucía');

/** País */
define('SITE_COUNTRY',      'España');

/** Descripción de ubicación completa (uso en footer, Schema.org, etc.) */
define('SITE_LOCATION',     SITE_CITY . ', ' . SITE_REGION . ', ' . SITE_COUNTRY);


// =============================================================
// HORARIO DE ATENCIÓN
// =============================================================

/** Días de atención (texto corto) */
define('SITE_HOURS_DAYS',       'Lunes a viernes');

/** Días abreviado para footer y espacios reducidos */
define('SITE_HOURS_DAYS_SHORT', 'L-V');

/** Horario de mañana — apertura (formato HH:MM para Schema.org) */
define('SITE_HOURS_AM_OPEN',    '09:00');

/** Horario de mañana — cierre */
define('SITE_HOURS_AM_CLOSE',   '14:00');

/** Horario de tarde — apertura */
define('SITE_HOURS_PM_OPEN',    '16:00');

/** Horario de tarde — cierre */
define('SITE_HOURS_PM_CLOSE',   '19:00');

/** Horario completo en texto corto (para footer, meta description, etc.) */
define('SITE_HOURS_SHORT',
    SITE_HOURS_DAYS_SHORT . ', ' .
    SITE_HOURS_AM_OPEN . '-' . SITE_HOURS_AM_CLOSE . 'h' .
    ' y ' .
    SITE_HOURS_PM_OPEN . '-' . SITE_HOURS_PM_CLOSE . 'h'
);
// Resultado: "L-V, 09:00-14:00h y 16:00-19:00h"

/** Horario completo en texto largo (para página de contacto, etc.) */
define('SITE_HOURS_LONG',
    SITE_HOURS_DAYS . ', de ' .
    SITE_HOURS_AM_OPEN . ' a ' . SITE_HOURS_AM_CLOSE . 'h' .
    ' y de ' .
    SITE_HOURS_PM_OPEN . ' a ' . SITE_HOURS_PM_CLOSE . 'h'
);
// Resultado: "Lunes a viernes, de 09:00 a 14:00h y de 16:00 a 19:00h"


// =============================================================
// SCHEMA.ORG — JSON-LD (generado dinámicamente desde las constantes)
// =============================================================

/**
 * Genera el bloque JSON-LD de Schema.org LocalBusiness
 * con todos los datos actualizados desde las constantes.
 *
 * Uso en index.php (o cualquier página):
 *   <?= site_schema_org() ?>
 */
function site_schema_org(): string {
    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'LocalBusiness',
        'name'        => SITE_NAME,
        'description' => SITE_DESCRIPTION,
        'url'         => SITE_URL,
        'telephone'   => SITE_PHONE_E164,
        'email'       => SITE_EMAIL,
        'address'     => [
            '@type'           => 'PostalAddress',
            'addressLocality' => SITE_CITY,
            'addressRegion'   => SITE_REGION,
            'addressCountry'  => 'ES',
        ],
        'openingHoursSpecification' => [
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday'],
                'opens'     => SITE_HOURS_AM_OPEN,
                'closes'    => SITE_HOURS_AM_CLOSE,
            ],
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday'],
                'opens'     => SITE_HOURS_PM_OPEN,
                'closes'    => SITE_HOURS_PM_CLOSE,
            ],
        ],
    ];

    return '<script type="application/ld+json">' . "\n"
        . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
        . "\n" . '</script>';
}
