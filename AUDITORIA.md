# AUDITORÍA FORENSE — Consultoría HOST

**Creada:** 15 de junio de 2026 · **Última revisión:** 16 de junio de 2026 (MEJ-01 FAQPage; MEJ-02 autor Person; MEJ-06 sitemap dinámico; MEJ-08 campo publicado)
**Alcance:** todos los archivos del proyecto en `c:\laragon\www\consultoriahost`
**Stack:** PHP 8.5 · Hostinger CloudLinux · Sin framework · Sin BBDD

---

## RESUMEN EJECUTIVO

Base sólida, sin errores críticos en producción. Pendientes principalmente de
**seguridad media**, **SEO/accesibilidad** y **consistencia de código**.

| Categoría | Alto | Medio | Bajo | Total |
|---|---|---|---|---|
| Seguridad | 0 | 0 | 0 | **0** |
| Rendimiento | 0 | 2 | 1 | **3** |
| SEO/Accesibilidad | 2 | 2 | 0 | **4** |
| Código/PHP | 0 | 0 | 1 | **1** |
| **Total** | **2** | **4** | **2** | **8** |

---

## RENDIMIENTO

### [REND-02] MEDIO — JS sin minificar en producción

**Archivos:** `public_html/assets/js/main.js`, `cookies.js`

**Problema:** Los archivos JS contienen comentarios extensos y whitespace. Para PageSpeed 100 deben minificarse.

**Solución:** Añadir paso de build con `terser`. Mantener los fuentes sin minificar (en `/src/` fuera del webroot o en la rama de desarrollo). El script `make-dist.ps1` debería invocar la minificación antes de copiar a `DIST/`.

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

## CÓDIGO

### [COD-06] BAJO — `SITE_PHONE_LINK` en `config/site.php` es código muerto

**Archivo:** `config/site.php`

**Problema:** La constante está definida pero no se usa en ningún archivo del proyecto.

**Solución:** Eliminar `SITE_PHONE_LINK`. Si se necesita en el futuro, crear una función `phone_link(): string` en lugar de una constante HTML.

---

## MEJORAS RECOMENDADAS

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

### [MEJ-07] Minificar CSS/JS como paso de build
`terser` para JS, `lightningcss` para CSS. Integrar en `make-dist.ps1` como paso previo a la copia a `DIST/`. Mantener fuentes sin minificar en el repositorio.

---

## TABLA RESUMEN

| ID | Severidad | Área | Descripción breve |
|---|---|---|---|
| REND-02 | Medio | Rendimiento | JS sin minificar en producción |
| REND-04 | Medio | Rendimiento | `og-image.jpg` referenciada pero no existe |
| REND-05 | Bajo | Rendimiento | Brotli no configurado en `.htaccess` |
| SEO-01 | Alto | SEO | `404.php` no emite `http_response_code(404)` |
| SEO-02 | Alto | SEO | `robots.txt` divulga rutas inaccesibles |
| SEO-03 | Medio | SEO | Schema `BlogPosting` sin campo `image` |
| SEO-07 | Bajo | SEO | Índice de artículo sin anchors navegables |

| COD-06 | Bajo | Código | `SITE_PHONE_LINK` definida pero no usada |

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
| — | Dropdown de escritorio: hover-only, sin soporte de teclado | `:focus-within` añadido al CSS — el dropdown aparece al tabular dentro del ítem |
| — | `dropdownItems` declarado en NavModule pero sin usar | Refactorizado: filtra solo ítems con `.nav__dropdown`; sincroniza `aria-expanded` en hover/focus |
| — | `MobileDropdownsModule` código muerto (buscaba `.nav__mobile-toggle` / `.nav__mobile-panel` inexistentes) | Módulo eliminado — el menú mobile es plano y funciona sin acordeones |
| SEG-02 | Sin token CSRF en formularios POST | Token generado en `bootstrap.php` con `random_bytes(32)`; validado en `api/contacto.php` con `hash_equals`; campo hidden en los 3 formularios del sitio |
| SEG-03 | Sin rate limiting en `api/contacto.php` | Contador por IP en `sys_get_temp_dir()` — máximo 3 intentos en 5 minutos; HTTP 429 al superar el límite; ventana se reinicia sola al expirar |
| SEG-04 | CSP con `fonts.googleapis.com` en `script-src` | Eliminado de `script-src` en `.htaccess` — Google Fonts sirve CSS, no scripts; el dominio permanece correctamente en `style-src` |
| REND-01 | Google Fonts bloqueante | Fuentes self-hosted en `assets/fonts/` (variable fonts, latin): 2 archivos woff2, 78 KB total; `@font-face` con `font-display: swap` en `main.css`; `<link rel="preload">` en `head.php`; dominios externos eliminados del CSP |
| REND-03 | `must-revalidate` en CSS/JS | `max-age=31536000, immutable` en ambos bloques `FilesMatch` de `.htaccess`; imágenes y fuentes también elevadas a 1 año |
| SEG-05 | HSTS desactivado | Activado en `.htaccess` con `max-age=63072000` (2 años); sin `includeSubDomains` para evitar bloquear posibles subdominios HTTP |
| SEG-06 | `PHPSESSID` declarada sin sesiones activas | Justificada: la sesión se inicia en `bootstrap.php` para soportar el token CSRF |
| SEO-04 | Artículos de blog sin indexar | 6 artículos añadidos a `sitemap.xml` con `lastmod` exacto; páginas legales eliminadas del sitemap (tienen `noindex`) |
| SEO-05 | `networking.php` ausente del nav escritorio | Añadido ítem entre Empleo 3.0 y Blog en `nav.php`; `$nav_active = 'networking'` añadido a `networking.php` |
| SEO-06 | Páginas legales indexadas sin `noindex` | `$page_robots = 'noindex, follow'` en las 3 legales; `head.php` soporta `$page_robots` con fallback `index, follow` |
| SEO-07 | Índice del artículo sin anchors | `id` añadido a los 7 H2 de `que-es-la-consultoria-3-0.php`; `$indice` convertido a pares `[texto, anchor]`; `<li>` envuelve el texto en `<a href="#id">` |
| COD-01 | `$_assets_root` con `realpath()` frágil | `$_assets_root = APP_ROOT . '/public_html/assets'` — ruta absoluta garantizada en cualquier entorno |
| COD-02 | Headers JSON tras primer `jsonResponse()` | Los 3 `header()` movidos al inicio de `api/contacto.php`, antes de los `require_once` |
| COD-03 | `asunto` y `perfil` ignorados en el API | Sanitizados en RECOGIDA; asunto dinámico en subject del email; ambos campos en `plantillaAviso()` |
| COD-05 | Teléfono hardcoded en `alert` JS | `data-phone` y `data-success` en los formularios de `contacto.php`; JS lee `form.dataset.phone` |
| COD-07 | `aria-haspopup="true"` impreciso | Eliminado del trigger "Qué hacemos" en `nav.php`; solo permanece `aria-expanded` |
| COD-08 | Sin skip link (WCAG 2.1 AA) | `<a class="skip-link" href="#main-content">` añadido en `nav.php`; CSS con `top:-100%` / `:focus { top:0 }` en `main.css` |
| COD-09 | `#unirse-form` sin AJAX ni validación | `ContactFormModule` refactorizado: `initForm(form)` genérico; auto-detecta formularios con `data-success`; usa `form.getAttribute('action')` para la URL |
| MEJ-01 | FAQ sin JSON-LD | Schema `FAQPage` añadido a `$page_extra_head` de `contacto.php` con las 5 preguntas y respuestas; activa rich snippets en SERPs |
| MEJ-02 | Autor `Organization` en artículos | `"author"` cambiado a `{"@type":"Person","name":"Rafael Comesaña","jobTitle":"Director, Consultoría HOST"}` en los 5 artículos del blog |
| MEJ-06 | Sitemap desincronizado del blog | `sitemap.xml` estático reemplazado por `sitemap.php` dinámico; rewrite rule en `.htaccess` mantiene la URL; sitemap siempre refleja los artículos publicados |
| MEJ-08 | Artículos en borrador podían aparecer accidentalmente | Campo `'publicado' => true/false` añadido a cada artículo en `config/articulos.php`; `blog/index.php` y `sitemap.php` filtran con `array_filter` |

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
