# AUDITORÍA FORENSE — Consultoría HOST

**Creada:** 15 de junio de 2026 · **Última revisión:** 15 de junio de 2026
**Alcance:** todos los archivos del proyecto en `c:\laragon\www\consultoriahost`
**Stack:** PHP 8.5 · Hostinger CloudLinux · Sin framework · Sin BBDD

---

## RESUMEN EJECUTIVO

Base sólida, sin errores críticos en producción. Pendientes principalmente de
**seguridad media**, **SEO/accesibilidad** y **consistencia de código**.

| Categoría | Alto | Medio | Bajo | Total |
|---|---|---|---|---|
| Seguridad | 2 | 2 | 1 | **5** |
| Rendimiento | 1 | 3 | 1 | **5** |
| SEO/Accesibilidad | 2 | 3 | 2 | **7** |
| Código/PHP | 1 | 2 | 4 | **7** |
| **Total** | **6** | **10** | **8** | **24** |

---

## SEGURIDAD

### [SEG-02] ALTO — Sin token CSRF en el formulario de contacto

**Archivos:** `public_html/contacto.php`, `public_html/index.php`, `public_html/api/contacto.php`

**Problema:** Los formularios POST no incluyen token CSRF. El honeypot protege contra bots simples, pero no contra ataques directos al endpoint que podrían disparar envíos masivos de email.

**Solución:**
```php
// bootstrap.php — generar token de sesión:
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// En cada formulario HTML:
<input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

// En api/contacto.php — validar antes de procesar:
if (!hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'] ?? '')) {
    jsonResponse(false, 'Solicitud no válida.');
}
```

> Al implementar CSRF, `PHPSESSID` ya estará justificada en `cookies.php` (ver SEG-06).

---

### [SEG-03] ALTO — Sin rate limiting en `api/contacto.php`

**Archivo:** `public_html/api/contacto.php`

**Problema:** Sin límite de peticiones por IP, un atacante puede hacer miles de llamadas POST en segundos, agotando la cuota SMTP de Hostinger y bloqueando la cuenta de correo.

**Solución** (sin Redis, compatible con shared hosting):
```php
$ip_hash   = hash('sha256', $_SERVER['REMOTE_ADDR']);
$rate_file = sys_get_temp_dir() . '/host_rate_' . $ip_hash;
$now       = time();
$attempts  = file_exists($rate_file) ? (int)file_get_contents($rate_file) : 0;

if ($attempts >= 3 && ($now - filemtime($rate_file)) < 300) {
    http_response_code(429);
    jsonResponse(false, 'Demasiados intentos. Espera unos minutos.');
}
file_put_contents($rate_file, $attempts >= 3 ? '1' : $attempts + 1);
```

---

### [SEG-04] MEDIO — CSP incorrecta: `fonts.googleapis.com` en `script-src`

**Archivo:** `public_html/.htaccess`

**Problema:** Google Fonts sirve CSS, no scripts. Tener `googleapis.com` en `script-src` es innecesario y amplía la superficie de ataque. El `'unsafe-inline'` en `script-src` hace la CSP prácticamente ineficaz contra XSS de todas formas, pero el dominio erróneo es ruido que confunde auditorías.

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

### [SEG-05] MEDIO — HSTS desactivado

**Archivo:** `public_html/.htaccess` — línea comentada

**Problema:** SSL está activo y funcional. Sin HSTS los usuarios son vulnerables a ataques de downgrade en primera visita.

**Solución:** Activar tras confirmar que HTTPS es estable en producción:
```apache
Header always set Strict-Transport-Security "max-age=63072000"
```

---

### [SEG-06] BAJO — `PHPSESSID` declarada en `cookies.php` pero PHP no usa sesiones

**Archivo:** `public_html/cookies.php`

**Problema:** La política de cookies lista `PHPSESSID` como técnica pero `session_start()` no se llama en ningún lugar.

**Solución:** Eliminar la entrada `PHPSESSID` de la tabla de cookies hasta que se implemente CSRF (ver SEG-02), momento en que quedará justificada.

---

## RENDIMIENTO

### [REND-01] ALTO — Google Fonts bloqueante; impide PageSpeed 100

**Archivo:** `includes/head.php` — bloque de fuentes

**Problema:** La hoja de estilos de fuentes se carga síncronamente, bloqueando el render (~200-400 ms en primera visita).

**Solución A — self-hosted (óptima):**
1. Descargar las fuentes con [google-webfonts-helper](https://gwfh.mranftl.com)
2. Colocar `.woff2` en `assets/fonts/`
3. Declarar `@font-face` en CSS con `font-display: swap`
4. Eliminar las líneas de Google Fonts de `head.php`

**Solución B — sin autohosting:**
```html
<link rel="preload"
  href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"
  as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap">
</noscript>
```

---

### [REND-02] MEDIO — JS sin minificar en producción

**Archivos:** `public_html/assets/js/main.js`, `cookies.js`

**Problema:** Los archivos JS contienen comentarios extensos y whitespace. Para PageSpeed 100 deben minificarse.

**Solución:** Añadir paso de build con `terser`. Mantener los fuentes sin minificar (en `/src/` fuera del webroot o en la rama de desarrollo). El script `make-dist.ps1` debería invocar la minificación antes de copiar a `DIST/`.

---

### [REND-03] MEDIO — `Cache-Control: must-revalidate` innecesario

**Archivo:** `public_html/.htaccess` — bloque de caché de assets

**Problema:** `must-revalidate` es contraproducente junto con `public` cuando `asset_v()` ya garantiza URLs únicas por versión.

**Solución:**
```apache
<FilesMatch "\.(css|js)$">
    Header set Cache-Control "public, max-age=31536000, immutable"
</FilesMatch>
```

---

### [REND-04] MEDIO — `og-image.jpg` referenciada pero no existe

**Archivo:** `config/site.php` — `SITE_OG_IMAGE`

**Problema:** `public_html/assets/img/og-image.jpg` no existe. Las shares en redes sociales mostrarán imagen rota, impactando el CTR.

**Solución:** Crear imagen OG de **1200×630 px** con el branding de HOST (logo, fondo navy, tagline) y guardarla en `/assets/img/og-image.jpg`.

---

### [REND-05] BAJO — Brotli no configurado en `.htaccess`

**Archivo:** `public_html/.htaccess`

**Problema:** Solo se configura GZIP. Hostinger CloudLinux soporta Brotli (15-25 % mejor compresión).

**Solución:**
```apache
<IfModule mod_brotli.c>
    AddOutputFilterByType BROTLI_COMPRESS text/html text/css text/javascript application/javascript application/json image/svg+xml
</IfModule>
```

---

## SEO / ACCESIBILIDAD

### [SEO-01] ALTO — `404.php` no emite HTTP 404 explícitamente

**Archivo:** `public_html/404.php`

**Problema:** Cuando Apache sirve esta página vía `ErrorDocument` sí establece el 404. Pero si alguien accede directamente a `/404`, la respuesta es HTTP 200 — Google la indexará como "soft 404".

**Solución:** Añadir al inicio del archivo, tras el `require_once bootstrap.php`:
```php
http_response_code(404);
```

---

### [SEO-02] ALTO — `robots.txt` divulga estructura interna

**Archivo:** `public_html/robots.txt`

**Problema:** `Disallow: /config/` y `Disallow: /includes/` están fuera del webroot — son físicamente inaccesibles. Listarlos informa a rastreadores de su existencia sin ningún beneficio.

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

**Problema:** Google requiere el campo `image` en `BlogPosting` para mostrar rich results con imagen en SERPs. Sin él el schema es válido pero no activa los snippets más valiosos.

**Solución:** Añadir al schema de cada artículo (hasta disponer de imagen propia, usar la OG):
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

**Problema:** El sitemap incluye `/blog` pero no los artículos individuales, ralentizando su indexación.

**Solución a corto plazo:** Añadir una `<url>` por cada artículo publicado.
**Solución definitiva:** Generar el sitemap dinámicamente desde PHP leyendo el mismo array de artículos que usa `blog/index.php` (ver MEJ-06).

---

### [SEO-05] MEDIO — `networking.php` sin enlace en navegación de escritorio

**Archivos:** `public_html/networking.php`, `includes/nav.php`

**Problema:** La página solo es accesible desde el footer y el menú mobile. Sin enlace en nav de escritorio recibe menos peso de links internos y es invisible para muchos usuarios.

**Solución:** Definir `$nav_active = 'networking'` en el archivo y evaluar incluirla en el dropdown "Qué hacemos" del nav de escritorio.

---

### [SEO-06] BAJO — Páginas legales indexadas sin `noindex`

**Archivos:** `aviso-legal.php`, `privacidad.php`, `cookies.php`

**Problema:** Consumen crawl budget y pueden aparecer en resultados en lugar de páginas de servicio.

**Solución:** Añadir en cada página legal:
```php
$page_robots = 'noindex, follow';
```
Y soportar la variable en `head.php`:
```php
<meta name="robots" content="<?= htmlspecialchars($page_robots ?? 'index, follow', ENT_QUOTES, 'UTF-8') ?>">
```

---

### [SEO-07] BAJO — Índice del artículo de blog sin anchors navegables

**Archivo:** `public_html/blog/que-es-la-consultoria-3-0.php` (y futuros artículos)

**Problema:** El sidebar "En este artículo" es texto plano sin enlaces. Los H2 no tienen `id`. El índice es decorativo, no funcional.

**Solución:** Añadir `id` a cada H2 y convertir las entradas del índice en `<a href="#id">`. Aplicar el mismo patrón a todos los artículos con índice.

---

## CÓDIGO

### [COD-01] ALTO — `$_assets_root` en `head.php` puede fallar en producción

**Archivo:** `includes/head.php`

**Problema:** `realpath(__DIR__ . '/../public_html/assets')` puede devolver `false` en Hostinger si la ruta relativa no se resuelve como se espera. En ese caso `asset_v()` retorna siempre `''` y se pierde el cache-busting en producción.

**Solución:** Usar `APP_ROOT`, que siempre está disponible tras `bootstrap.php`:
```php
define('ASSETS_ROOT', APP_ROOT . '/public_html/assets');

function asset_v(string $rel): string {
    $ts = @filemtime(ASSETS_ROOT . '/' . $rel);
    return $ts ? '?v=' . $ts : '';
}
```

---

### [COD-02] MEDIO — Headers JSON emitidos después del primer `jsonResponse()` posible

**Archivo:** `public_html/api/contacto.php`

**Problema:** Los `header('Content-Type: application/json')` se declaran en línea 32, pero `jsonResponse()` puede llamarse en línea 29 (respuesta 405). La respuesta 405 no llevará Content-Type JSON correcto.

**Solución:** Mover los headers al inicio del archivo, antes de cualquier `require_once`:
```php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');

require_once dirname(__DIR__) . '/bootstrap.php';
```

---

### [COD-03] MEDIO — Campos `asunto` y `perfil` enviados pero no procesados

**Archivos:** `public_html/contacto.php`, `public_html/api/contacto.php`

**Problema:** El formulario principal tiene `<select name="asunto">` y el formulario "Unirse al HOST" tiene `<input name="perfil">`. Ambos se envían pero el API los ignora — no llegan al email de notificación y el asunto siempre es el fijo.

**Solución:**
```php
$asunto = sanitize($_POST['asunto'] ?? '');
$perfil = sanitize($_POST['perfil'] ?? '');
$subject = $asunto ? "[HOST Web] $asunto" : ASUNTO_EMAIL;
```
Y añadir ambos campos al HTML de `plantillaAviso()`.

---

### [COD-05] BAJO — Teléfono hardcoded en `alert` de fallback JS

**Archivo:** `public_html/assets/js/main.js`

**Problema:** Si cambia el teléfono en `config/site.php`, el mensaje de error del `alert` no se actualiza automáticamente.

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

**Archivo:** `config/site.php`

**Problema:** La constante está definida pero no se usa en ningún archivo del proyecto.

**Solución:** Eliminar `SITE_PHONE_LINK`. Si se necesita en el futuro, crear una función `phone_link(): string` en lugar de una constante HTML.

---

### [COD-07] BAJO — `aria-haspopup="true"` semánticamente impreciso

**Archivo:** `includes/nav.php`

**Problema:** Para un dropdown de navegación, `aria-haspopup` no es necesario y puede confundir lectores de pantalla que lo interpretan como un control de tipo `menu` con navegación por flechas.

**Solución:** Eliminar `aria-haspopup="true"` de los triggers del nav de escritorio. Mantener solo `aria-expanded`.

---

### [COD-08] BAJO — Sin enlace "skip to main content" (WCAG 2.1 AA)

**Archivo:** `includes/nav.php`

**Problema:** Falta el enlace de salto al contenido principal. `<main id="main-content">` existe pero sin el enlace los usuarios de teclado deben tabular por toda la navegación en cada página.

**Solución:** Primer elemento del `<body>`, antes del `<header>`:
```html
<a href="#main-content" class="skip-link">Saltar al contenido principal</a>
```
```css
.skip-link { position:absolute; top:-100%; left:0; padding:.5rem 1rem; background:var(--color-navy); color:white; z-index:10000; }
.skip-link:focus { top:0; }
```

---

## MEJORAS RECOMENDADAS

### [MEJ-01] Schema.org `FAQPage` en `contacto.php`
La sección FAQ usa `<details>`/`<summary>` sin JSON-LD. Google puede mostrar las preguntas directamente en SERPs como rich snippets. Añadir en `$page_extra_head` el schema `FAQPage` con cada pregunta y respuesta.

### [MEJ-02] EEAT — Autor `Person` en artículos de blog
Cambiar `"author": {"@type": "Organization"}` por `{"@type": "Person", "name": "Rafael Comesaña", "jobTitle": "Director, Consultoría HOST", "url": "https://consultoriahost.es/que-es-host"}`. Google valora autores identificables para EEAT.

### [MEJ-03] AEO — `speakable` para motores de respuesta
```json
"speakable": { "@type": "SpeakableSpecification", "cssSelector": [".hero__subtitle", ".section-header p"] }
```
Marca el contenido que Google SGE y Perplexity deben citar como respuesta directa.

### [MEJ-04] `<meta name="theme-color">` para móvil
```html
<meta name="theme-color" content="#0F2B5B">
```
La barra del navegador en Android adoptará el azul navy de HOST.

### [MEJ-05] Header `Permissions-Policy`
```apache
Header always set Permissions-Policy "camera=(), microphone=(), geolocation=(), payment=()"
```
Cierra explícitamente el acceso del navegador a APIs sensibles que el sitio no usa.

### [MEJ-06] Sitemap dinámico desde PHP
Un `sitemap.php` que lea el mismo array de artículos que `blog/index.php` garantiza que el sitemap nunca se desincroniza al publicar nuevo contenido.

### [MEJ-07] Minificar CSS/JS como paso de build
`terser` para JS, `lightningcss` para CSS. Integrar en `make-dist.ps1` como paso previo a la copia a `DIST/`. Mantener fuentes sin minificar en el repositorio.

### [MEJ-08] Campo `publicado` en el array de artículos del blog
Añadir `'publicado' => true/false` y filtrar con `array_filter`. Evita que artículos incompletos aparezcan accidentalmente si se añaden al array antes de terminarlos.

---

## TABLA RESUMEN

| ID | Severidad | Área | Descripción breve |
|---|---|---|---|
| SEG-02 | Alto | Seguridad | Sin protección CSRF en formularios POST |
| SEG-03 | Alto | Seguridad | Sin rate limiting en endpoint de contacto |
| SEG-04 | Medio | Seguridad | CSP incorrecta: `googleapis.com` en `script-src` |
| SEG-05 | Medio | Seguridad | HSTS desactivado — activar tras confirmar SSL estable |
| SEG-06 | Bajo | Seguridad | `PHPSESSID` declarada pero PHP no usa sesiones aún |
| REND-01 | Alto | Rendimiento | Google Fonts bloqueante — impide PageSpeed 100 |
| REND-02 | Medio | Rendimiento | JS sin minificar en producción |
| REND-03 | Medio | Rendimiento | `must-revalidate` → usar `immutable` con cache-busting |
| REND-04 | Medio | Rendimiento | `og-image.jpg` referenciada pero no existe |
| REND-05 | Bajo | Rendimiento | Brotli no configurado en `.htaccess` |
| SEO-01 | Alto | SEO | `404.php` no emite `http_response_code(404)` |
| SEO-02 | Alto | SEO | `robots.txt` divulga rutas inaccesibles |
| SEO-03 | Medio | SEO | Schema `BlogPosting` sin campo `image` |
| SEO-04 | Medio | SEO | Artículos de blog no están en `sitemap.xml` |
| SEO-05 | Medio | SEO | `networking.php` sin enlace en nav de escritorio |
| SEO-06 | Bajo | SEO | Páginas legales indexadas sin `noindex` |
| SEO-07 | Bajo | SEO | Índice de artículo sin anchors navegables |
| COD-01 | Alto | Código | `$_assets_root` puede devolver `false` en producción |
| COD-02 | Medio | Código | Headers JSON emitidos después del primer `jsonResponse()` |
| COD-03 | Medio | Código | Campos `asunto` y `perfil` ignorados en el API |
| COD-05 | Bajo | Código | Teléfono hardcoded en `alert` JS de fallback |
| COD-06 | Bajo | Código | `SITE_PHONE_LINK` definida pero no usada |
| COD-07 | Bajo | Código | `aria-haspopup="true"` semánticamente impreciso |
| COD-08 | Bajo | Código | Sin enlace "skip to content" (WCAG 2.1 AA) |

---

## RESUELTOS

| ID | Descripción | Solución aplicada |
|---|---|---|
| SEG-01 | `test-smtp.php` accesible en producción | Añadido a `.gitignore` y excluido de `make-dist.ps1` |
| COD-04 | `config/site.php` cargado doblemente | `bootstrap.php` lo carga con guard `if (!defined('SITE_NAME'))` |
| — | CSS: prefijos vendor ausentes o en orden incorrecto | `-webkit-backdrop-filter`, `-webkit-user-select`, `-webkit-appearance` y orden corregidos en `main.css` y `components.css` |
| — | CSS: reglas vacías `.why-host__content`, `.why-item__content`, `.contact-info` | Eliminadas |
| — | CSS: `line-clamp` sin propiedad estándar | Añadida `line-clamp: 3` junto a `-webkit-line-clamp` |
| — | `bootstrap.php` no cargaba `config/site.php` | Corregido — `SITE_NAME` disponible inmediatamente tras bootstrap |
| — | `contacto.php`: constantes usadas antes de cargar bootstrap | `require_once bootstrap.php` movido al inicio |
| — | `main.js`: errores del servidor mostraban `alert` genérico | Ahora se muestran inline bajo el botón de envío |
| — | `api/contacto.php`: `validarTelefono` solo aceptaba formato español estricto | Acepta 9 dígitos con prefijo +34 opcional |
| — | Email de confirmación prometía "24 horas laborables" | Texto eliminado — solo "lo antes posible" |

---

## ASPECTOS POSITIVOS

- Arquitectura de seguridad correcta: `config/`, `includes/` y `.env` fuera del webroot
- PHPMailer correctamente encapsulado en `Mailer.php` con `strict_types` y gestión de excepciones
- Sanitización sólida en `api/contacto.php`: `htmlspecialchars` + `strip_tags` + `FILTER_VALIDATE_EMAIL` + honeypot
- `bootstrap.php` con carga única del `.env`, sin sobrescribir variables del servidor
- `asset_v()` con `filemtime()` para cache-busting automático
- JavaScript accesible: ARIA en menú móvil, focus trap, Escape, `prefers-reduced-motion`
- Schema.org `LocalBusiness` generado dinámicamente desde constantes
- Validación dual del formulario: JS inline con `role="alert"` + PHP server-side
- Herramientas de proyecto: `audit.py`, `make-dist.ps1`, flujo documentado en `README.md`

---

*Creada: 15 junio 2026 · Revisada: 15 junio 2026*
