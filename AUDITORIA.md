# AUDITORÍA FORENSE — Consultoría HOST

**Fecha:** 15 de junio de 2026
**Alcance:** todos los archivos del proyecto en `c:\laragon\www\consultoriahost`
**Versión PHP objetivo:** 8.5 · Servidor: Hostinger CloudLinux · Sin framework, sin BBDD

---

## RESUMEN EJECUTIVO

El proyecto está bien estructurado y tiene una base sólida. No hay errores críticos que rompan la funcionalidad en producción. Los problemas detectados son principalmente de **seguridad media**, **SEO/accesibilidad** y **consistencia de código**. Se identifican **27 hallazgos** clasificados por severidad.

| Categoría | Alto | Medio | Bajo |
|---|---|---|---|
| Seguridad | 3 | 2 | 1 |
| Rendimiento | 1 | 3 | 1 |
| SEO/Accesibilidad | 2 | 4 | 2 |
| Código/PHP | 1 | 3 | 4 |

---

## CATEGORÍA 1 — ERRORES CRÍTICOS

*No se han encontrado errores que rompan la funcionalidad en producción.*

---

## CATEGORÍA 2 — ERRORES DE SEGURIDAD

### [SEG-01] ALTO — `test-smtp.php` accesible en producción si `APP_ENV` no está configurado

**Archivo:** `public_html/test-smtp.php`

**Problema:** La protección depende de que `APP_ENV=production` esté correctamente definido en el `.env`. El archivo expone credenciales SMTP parciales e información sobre la infraestructura.

**Solución:** Eliminar `test-smtp.php` del servidor antes de cualquier deploy a producción. Ya está en `.gitignore` — nunca llegará vía Git. Añadir verificación en `DEPLOY.txt`.

---

### [SEG-02] ALTO — Sin token CSRF en el formulario de contacto

**Archivos:** `public_html/contacto.php`, `public_html/index.php`, `public_html/api/contacto.php`

**Problema:** Los formularios POST no incluyen token CSRF. El honeypot protege contra bots simples, pero no contra ataques CSRF que podrían usar el endpoint para spam masivo directo.

**Solución:**

```php
// bootstrap.php — generar token:
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// En cada formulario HTML:
<input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

// En api/contacto.php — validar:
if (!hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'] ?? '')) {
    jsonResponse(false, 'Solicitud no válida.');
}
```

---

### [SEG-03] ALTO — Sin rate limiting en `api/contacto.php`

**Archivo:** `public_html/api/contacto.php`

**Problema:** El endpoint no implementa límite de peticiones por IP. Un atacante puede hacer miles de llamadas POST directas agotando los recursos SMTP de Hostinger.

**Solución** (compatible con shared hosting sin Redis):

```php
// Al inicio de api/contacto.php:
$ip_hash   = hash('sha256', $_SERVER['REMOTE_ADDR']);
$rate_file = sys_get_temp_dir() . '/host_rate_' . $ip_hash;
$now       = time();
$attempts  = file_exists($rate_file) ? (int)file_get_contents($rate_file) : 0;

if ($attempts >= 3) {
    if ($now - filemtime($rate_file) < 300) { // ventana de 5 min
        http_response_code(429);
        jsonResponse(false, 'Demasiados intentos. Espera unos minutos.');
    }
    file_put_contents($rate_file, '1');
} else {
    file_put_contents($rate_file, $attempts + 1);
}
```

---

### [SEG-04] MEDIO — CSP incorrecta: `fonts.googleapis.com` en `script-src`

**Archivo:** `public_html/.htaccess`

**Problema:** Google Fonts sirve CSS, no scripts. Permitir `googleapis.com` en `script-src` es innecesario y amplía la superficie de ataque.

**Solución:**

```apache
Header always set Content-Security-Policy "default-src 'self'; \
  script-src 'self' 'unsafe-inline'; \
  style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; \
  font-src 'self' https://fonts.gstatic.com; \
  img-src 'self' data: https:; \
  connect-src 'self';"
```

---

### [SEG-05] MEDIO — HSTS desactivado sin justificación técnica

**Archivo:** `public_html/.htaccess` — línea comentada

**Problema:** SSL está activo y funcional. Sin HSTS, los usuarios son vulnerables a ataques de downgrade SSL en primera visita.

**Solución:** Descomentar:

```apache
Header always set Strict-Transport-Security "max-age=63072000"
```

---

### [SEG-06] BAJO — `PHPSESSID` declarada en cookies.php pero PHP no usa sesiones

**Archivo:** `public_html/cookies.php`

**Problema:** La política de cookies lista `PHPSESSID` como cookie técnica, pero `session_start()` no se llama en ningún lugar del proyecto actual.

**Solución:** Eliminar la entrada `PHPSESSID` hasta que se implemente CSRF (ver SEG-02), momento en el que volverá a ser necesaria.

---

## CATEGORÍA 3 — ERRORES DE RENDIMIENTO

### [REND-01] ALTO — Google Fonts bloqueante; impide PageSpeed 100

**Archivo:** `includes/head.php` — líneas 88-90

**Problema:** La hoja de estilos de fuentes se carga de forma síncrona bloqueando el render (~200-400ms en primera visita).

**Solución A (óptima) — self-hosted:**
1. Descargar las fuentes con `google-webfonts-helper`
2. Colocar `.woff2` en `assets/fonts/`
3. Declarar `@font-face` en CSS con `font-display: swap`
4. Eliminar las líneas de Google Fonts de `head.php`

**Solución B — sin autohosting:**
```html
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"></noscript>
```

---

### [REND-02] MEDIO — JS sin minificar en producción

**Archivo:** `public_html/assets/js/main.js`, `cookies.js`

**Problema:** Los archivos JS contienen comentarios extensos y whitespace. Para PageSpeed 100 deben minificarse.

**Solución:** Añadir paso de build con `terser` o activar minificación automática en Hostinger/Cloudflare. Mantener las fuentes sin minificar en `/src/` fuera del webroot.

---

### [REND-03] MEDIO — `Cache-Control: must-revalidate` innecesario con cache-busting por querystring

**Archivo:** `public_html/.htaccess` — bloque de caché de assets

**Problema:** `must-revalidate` es contraproducente junto con `public` cuando `asset_v()` garantiza URLs únicas.

**Solución:**
```apache
<FilesMatch "\.(css|js)$">
    Header set Cache-Control "public, max-age=31536000, immutable"
</FilesMatch>
```

---

### [REND-04] MEDIO — `og-image.jpg` referenciada pero no existe

**Archivo:** `config/site.php` — línea 46

**Problema:** `public_html/assets/img/og-image.jpg` no existe. Las shares en redes sociales mostrarán imagen rota o genérica, impactando el CTR.

**Solución:** Crear imagen OG de **1200×630px** con el branding de HOST (logo, fondo navy, tagline) y guardarla en `/assets/img/og-image.jpg`.

---

### [REND-05] BAJO — Brotli no configurado en `.htaccess`

**Archivo:** `public_html/.htaccess`

**Problema:** Solo se configura GZIP. Hostinger soporta Brotli (15-25% mejor compresión).

**Solución:**
```apache
<IfModule mod_brotli.c>
    AddOutputFilterByType BROTLI_COMPRESS text/html text/css text/javascript application/javascript application/json image/svg+xml
</IfModule>
```

---

## CATEGORÍA 4 — ERRORES SEO / ACCESIBILIDAD

### [SEO-01] ALTO — `404.php` no emite HTTP 404 explícitamente

**Archivo:** `public_html/404.php`

**Problema:** Cuando Apache sirve esta página por `ErrorDocument`, establece el 404. Pero si se accede directamente a `/404`, la respuesta es HTTP 200 — Google la indexa como "soft 404".

**Solución:** Añadir tras el `require_once bootstrap.php`:
```php
http_response_code(404);
```

---

### [SEO-02] ALTO — `robots.txt` bloquea rutas inaccesibles y divulga estructura interna

**Archivo:** `public_html/robots.txt`

**Problema:** `Disallow: /config/` y `Disallow: /includes/` están fuera del webroot — son físicamente inaccesibles. Añadirlos al robots.txt informa a rastreadores de la existencia de estas rutas sin beneficio real.

**Solución:**
```
User-agent: *
Allow: /

Disallow: /api/

Sitemap: https://consultoriahost.es/sitemap.xml
```

---

### [SEO-03] MEDIO — Schema.org `BlogPosting` sin campo `image`

**Archivos:** todos los artículos `public_html/blog/*.php`

**Problema:** Google requiere `image` en `BlogPosting` para mostrar rich results con imagen en SERPs.

**Solución:** Añadir al schema de cada artículo:
```json
"image": {
  "@type": "ImageObject",
  "url": "https://consultoriahost.es/assets/img/og-image.jpg",
  "width": 1200,
  "height": 630
}
```

---

### [SEO-04] MEDIO — Artículos de blog no incluidos en `sitemap.xml`

**Archivo:** `public_html/sitemap.xml`

**Problema:** El sitemap incluye `/blog` pero no los artículos individuales. Ralentiza la indexación.

**Solución:** Añadir una `<url>` por cada artículo publicado. Considerar generar el sitemap dinámicamente desde PHP.

---

### [SEO-05] MEDIO — `networking.php` sin enlace en navegación de escritorio

**Archivo:** `public_html/networking.php`, `includes/nav.php`

**Problema:** La página solo es accesible desde el footer y menú mobile. Sin enlace en nav de escritorio, recibe menos peso de links internos y es invisible para muchos usuarios.

**Solución:** Definir `$nav_active = 'networking'` y evaluar incluir "Networking" en el menú de escritorio o en el dropdown "Qué hacemos".

---

### [SEO-06] BAJO — Páginas legales indexadas sin `noindex`

**Archivos:** `aviso-legal.php`, `privacidad.php`, `cookies.php`

**Problema:** Las páginas legales consumen crawl budget y pueden aparecer en resultados en lugar de páginas de servicio.

**Solución:** Añadir en cada página legal:
```php
$page_robots = 'noindex, follow';
```

Y en `head.php`, soportar esta variable:
```php
<meta name="robots" content="<?= htmlspecialchars($page_robots ?? 'index, follow', ENT_QUOTES, 'UTF-8') ?>">
```

---

### [SEO-07] BAJO — Índice del artículo de blog no es navegable (sin `id` en H2)

**Archivo:** `public_html/blog/que-es-la-consultoria-3-0.php`

**Problema:** El sidebar "En este artículo" lista los H2 pero son texto plano sin anchors. El índice es puramente decorativo.

**Solución:** Añadir `id` a cada H2 y convertir las entradas del índice en `<a href="#id">`.

---

## CATEGORÍA 5 — ERRORES DE CÓDIGO

### [COD-01] ALTO — `$_assets_root` en `head.php` puede fallar en producción

**Archivo:** `includes/head.php` — línea 43

**Problema:** `realpath(__DIR__ . '/../public_html/assets')` es correcto en local pero puede devolver `false` en hosting si la ruta relativa no existe tal cual. Si `realpath()` falla, `asset_v()` retorna `''` y se pierde el cache-busting.

**Solución:** Usar `APP_ROOT` (siempre disponible tras `bootstrap.php`):
```php
$_assets_root = APP_ROOT . '/public_html/assets';
```

Y en la función, convertir la variable global a constante:
```php
define('ASSETS_ROOT', APP_ROOT . '/public_html/assets');
function asset_v(string $rel): string {
    $ts = @filemtime(ASSETS_ROOT . '/' . $rel);
    return $ts ? '?v=' . $ts : '';
}
```

---

### [COD-02] MEDIO — `api/contacto.php`: headers JSON se emiten después de posible salida por `jsonResponse()`

**Archivo:** `public_html/api/contacto.php` — líneas 27-34

**Problema:** `jsonResponse()` se llama en línea 29 (para el 405) antes de que los `header()` de Content-Type se declaren en línea 32. La respuesta 405 no lleva Content-Type JSON.

**Solución:** Mover los `header()` al inicio del archivo, antes de cualquier `require_once`:
```php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');

require_once dirname(__DIR__) . '/bootstrap.php';
```

---

### [COD-03] MEDIO — Campos `asunto` y `perfil` enviados pero no procesados en el API

**Archivos:** `public_html/contacto.php`, `public_html/api/contacto.php`

**Problema:** El formulario principal tiene `<select name="asunto">` y el de "Unirse al HOST" tiene `<input name="perfil">`. Ambos se envían pero `api/contacto.php` los ignora — no llegan al email de notificación y el asunto fijo no refleja la selección del usuario.

**Solución:**
```php
$asunto = sanitize($_POST['asunto'] ?? '');
$perfil = sanitize($_POST['perfil'] ?? '');

// Variar el asunto del email según la selección:
$subject = $asunto ? "[HOST Web] $asunto" : ASUNTO_EMAIL;
```

Y añadir los campos al HTML de `plantillaAviso()`.

---

### [COD-04] MEDIO — `site.php` se carga dos veces en algunas páginas

**Archivos:** `public_html/blog/*.php`, `public_html/api/contacto.php`

**Problema:** `bootstrap.php` ahora carga `config/site.php`, pero varios archivos también hacen `require_once APP_ROOT . '/config/site.php'` explícitamente. El `require_once` evita el doble error, pero es código redundante.

**Solución:** Eliminar la línea `require_once APP_ROOT . '/config/site.php';` de todos los archivos que ya incluyan `bootstrap.php`.

---

### [COD-05] BAJO — Teléfono hardcoded en `alert` de fallback del formulario JS

**Archivo:** `public_html/assets/js/main.js` — línea 438

**Problema:** Si cambia el teléfono en `config/site.php`, el mensaje del `alert` no se actualiza.

**Solución:** Inyectar desde PHP como atributo `data-*`:
```html
<form id="contact-form" data-phone="<?= SITE_PHONE ?>">
```
```js
const phone = form.dataset.phone || '95 418 25 08';
alert(`Ha ocurrido un error. Llámenos al ${phone}.`);
```

---

### [COD-06] BAJO — `SITE_PHONE_LINK` en `config/site.php` es código muerto

**Archivo:** `config/site.php` — líneas 63-65

**Problema:** La constante está definida pero no se usa en ningún archivo del proyecto. Incrustar HTML con emoji en una constante PHP es frágil.

**Solución:** Eliminar `SITE_PHONE_LINK`. Si se necesita, crear una función `phone_link(): string`.

---

### [COD-07] BAJO — `aria-haspopup="true"` semánticamente impreciso en nav dropdowns

**Archivo:** `includes/nav.php`

**Problema:** Para un dropdown de navegación (no un selector de opciones), `aria-haspopup` no es necesario. Mantener solo `aria-expanded`.

**Solución:** Eliminar `aria-haspopup="true"` de los triggers del nav de escritorio. Mantener `aria-expanded`.

---

### [COD-08] BAJO — Sin enlace "skip to main content" (WCAG 2.1 AA)

**Archivo:** `includes/nav.php`

**Problema:** Falta el enlace de salto al contenido principal para usuarios de teclado y lectores de pantalla. `<main id="main-content">` existe pero sin el enlace no se puede usar.

**Solución:** Añadir como primer elemento del `<body>`:
```html
<a href="#main-content" class="skip-link">Saltar al contenido principal</a>
```
```css
.skip-link { position:absolute; top:-100%; left:0; padding:.5rem 1rem; background:var(--color-navy); color:white; z-index:10000; }
.skip-link:focus { top:0; }
```

---

## CATEGORÍA 6 — MEJORAS RECOMENDADAS

### [MEJ-01] Schema.org `FAQPage` en la sección de preguntas de `contacto.php`

La sección FAQ usa `<details>`/`<summary>` sin JSON-LD. Google puede mostrar FAQs directamente en SERPs como rich snippets, aumentando el CTR. Añadir en `$page_extra_head` el schema `FAQPage` con cada pregunta/respuesta.

### [MEJ-02] EEAT — Añadir autor `Person` en artículos de blog

El Schema.org `BlogPosting` usa `Organization` como autor. Para EEAT, Google valora autores `Person` identificables (nombre, cargo, URL). Cambiar a:
```json
"author": {
  "@type": "Person",
  "name": "Rafael Comesaña",
  "jobTitle": "Director, Consultoría HOST",
  "url": "https://consultoriahost.es/que-es-host"
}
```

### [MEJ-03] AEO — Implementar `speakable` para Answer Engine Optimization

Para motores de respuesta (Google SGE, Perplexity):
```json
"speakable": {
  "@type": "SpeakableSpecification",
  "cssSelector": [".hero__subtitle", ".section-header p"]
}
```

### [MEJ-04] `<meta name="theme-color">` para barra del navegador móvil

```html
<meta name="theme-color" content="#0F2B5B">
```

### [MEJ-05] Header `Permissions-Policy`

```apache
Header always set Permissions-Policy "camera=(), microphone=(), geolocation=(), payment=()"
```

### [MEJ-06] Generar `sitemap.xml` dinámicamente desde PHP

Un sitemap estático se desincroniza con el contenido. Una página `sitemap.php` que lea el array de artículos del blog y las páginas del sitio garantiza sincronización permanente.

### [MEJ-07] Minificar CSS/JS como paso de build

Para PageSpeed 100, añadir `terser` (JS) y `lightningcss` o `cssnano` (CSS) como paso de build antes de deploy. Mantener fuentes en `/src/` sin minificar.

### [MEJ-08] Control editorial en `blog/index.php` con campo `publicado`

Añadir `'publicado' => true/false` al array de artículos y filtrar con `array_filter`. Evita que artículos incompletos aparezcan si se añaden prematuramente al array.

---

## TABLA RESUMEN

| ID | Severidad | Área | Descripción breve |
|---|---|---|---|
| SEG-01 | Alto | Seguridad | `test-smtp.php` debe eliminarse en producción |
| SEG-02 | Alto | Seguridad | Sin protección CSRF en formularios POST |
| SEG-03 | Alto | Seguridad | Sin rate limiting en endpoint de contacto |
| SEG-04 | Medio | Seguridad | CSP incorrecta: `googleapis.com` en `script-src` |
| SEG-05 | Medio | Seguridad | HSTS desactivado sin justificación |
| SEG-06 | Bajo | Seguridad | `PHPSESSID` declarada pero PHP no usa sesiones |
| REND-01 | Alto | Rendimiento | Google Fonts bloqueante — impide PageSpeed 100 |
| REND-02 | Medio | Rendimiento | JS sin minificar en producción |
| REND-03 | Medio | Rendimiento | `must-revalidate` innecesario con cache-busting |
| REND-04 | Medio | Rendimiento | `og-image.jpg` referenciada pero no existe |
| REND-05 | Bajo | Rendimiento | Brotli no configurado en `.htaccess` |
| SEO-01 | Alto | SEO | `404.php` no emite `http_response_code(404)` |
| SEO-02 | Alto | SEO | `robots.txt` divulga rutas inaccesibles |
| SEO-03 | Medio | SEO | Schema `BlogPosting` sin campo `image` |
| SEO-04 | Medio | SEO | Artículos de blog no están en `sitemap.xml` |
| SEO-05 | Medio | SEO | `networking.php` sin enlace en nav escritorio |
| SEO-06 | Bajo | SEO | Páginas legales indexadas sin `noindex` |
| SEO-07 | Bajo | SEO | Índice de artículo sin anchors navegables |
| COD-01 | Alto | Código | `$_assets_root` puede fallar en producción |
| COD-02 | Medio | Código | Headers JSON emitidos tarde en `api/contacto.php` |
| COD-03 | Medio | Código | Campos `asunto` y `perfil` ignorados en el API |
| COD-04 | Medio | Código | `site.php` cargado doblemente en varios archivos |
| COD-05 | Bajo | Código | Teléfono hardcoded en `alert` JS de fallback |
| COD-06 | Bajo | Código | `SITE_PHONE_LINK` definida pero no usada |
| COD-07 | Bajo | Código | `aria-haspopup="true"` semánticamente impreciso |
| COD-08 | Bajo | Código | Sin enlace "skip to content" (WCAG 2.1 AA) |

---

## ASPECTOS POSITIVOS DESTACADOS

- **Arquitectura de seguridad correcta**: `config/` e `includes/` fuera del webroot; `.env` nunca en el webroot
- **PHPMailer correctamente encapsulado**: `Mailer.php` limpio, con excepciones, `strict_types`
- **Sanitización en `api/contacto.php`**: `htmlspecialchars` + `strip_tags` + `FILTER_VALIDATE_EMAIL` + honeypot
- **`bootstrap.php` bien diseñado**: carga única del `.env` con guards, sin sobrescribir variables de servidor
- **`asset_v()` con `filemtime()`**: cache-busting automático y correcto
- **JavaScript accesible**: gestión ARIA en menú móvil, focus trap, Escape, `prefers-reduced-motion`
- **Schema.org `LocalBusiness` dinámico**: generado desde constantes, sin duplicación de datos
- **Todos los metadatos escapados con `htmlspecialchars`** en `head.php`
- **Validación dual del formulario**: JS (inline, accesible con `role="alert"`) + PHP (server-side)

---

*Auditoría generada el 15 de junio de 2026.*
