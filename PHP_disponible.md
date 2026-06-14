# PHP Extensions — Stack Tecnológico

Inventario completo de extensiones PHP y directivas del entorno, organizadas por estado y prioridad para rendimiento web (PageSpeed 100 / Lighthouse).

> **PHP 8.5** — Ruta base: `/opt/alt/php85/`

---

## 1. Extensiones Integradas (Built-in)

Vienen compiladas con PHP. Siempre activas, no se pueden desactivar.

| Extensión | Descripción |
|---|---|
| `bz2` | Compresión Bzip2 |
| `calendar` | Conversión de calendarios |
| `core` | Núcleo de PHP |
| `ctype` | Verificación de tipos de caracteres |
| `curl` | Transferencias HTTP/FTP con libcurl |
| `date` | Manejo de fechas y zonas horarias |
| `exif` | Lectura de metadatos EXIF en imágenes |
| `filter` | Filtrado y validación de datos |
| `ftp` | Cliente FTP |
| `gettext` | Internacionalización GNU gettext |
| `hash` | Funciones de hash (SHA, MD5, etc.) |
| `iconv` | Conversión de conjuntos de caracteres |
| `json` | Codificación/decodificación JSON |
| `lexbor` | Parser HTML5 (usado por DOM) |
| `libxml` | Base para extensiones XML |
| `openssl` | Criptografía SSL/TLS |
| `pcntl` | Control de procesos POSIX |
| `pcre` | Expresiones regulares Perl-compatibles |
| `random` | Generación de números aleatorios criptográficos |
| `readline` | Edición de línea de comandos |
| `reflection` | API de reflexión de clases/métodos |
| `session` | Gestión de sesiones |
| `shmop` | Memoria compartida |
| `simplexml` | Manipulación XML simplificada |
| `spl` | Standard PHP Library (iteradores, estructuras) |
| `sqlite3` | Base de datos SQLite3 |
| `standard` | Funciones estándar de PHP |
| `tokenizer` | Tokenizador del código fuente PHP |
| `uri` | Manejo de URIs |
| `xml` | Parser XML |
| `zend_opcache` | **OPcache** — compilación bytecode en memoria |
| `zlib` | Compresión zlib/gzip |

---

## 2. Extensiones Opcionales

### ✅ Activas (deben estar seleccionadas)

| Extensión | Descripción | Impacto en velocidad |
|---|---|---|
| `apcu` | Caché en memoria para datos de usuario | **Alta** — reduce hits a BD |
| `bcmath` | Aritmética de precisión arbitraria | Media |
| `brotli` | Compresión Brotli (superior a gzip ~30%) | **Alta** — mejora Core Web Vitals |
| `dom` | Document Object Model (manipulación HTML/XML) | Media |
| `fileinfo` | Detección de tipos MIME | Media |
| `gd` | GD Library — procesamiento de imágenes, WebP | **Alta** |
| `gmp` | GNU Multiple Precision Arithmetic | Media |
| `igbinary` | Serialización binaria (más rápida que nativa) | **Alta** — acelera APCu/sesiones |
| `imagick` | ImageMagick — WebP, AVIF, optimización avanzada | **Alta** — imágenes modernas |
| `imap` | Protocolo IMAP para email | Baja |
| `intl` | Internacionalización ICU (fechas, monedas, locale) | Media |
| `ldap` | Autenticación contra Active Directory / LDAP | Baja |
| `mbstring` | Cadenas multibyte / UTF-8 | **Alta** — esencial |
| `mysqlnd` | Driver nativo MySQL | **Alta** — más rápido que libmysql |
| `nd_mysqli` | MySQLi con mysqlnd | **Alta** |
| `nd_pdo_mysql` | PDO MySQL con mysqlnd | **Alta** |
| `pdo` | PHP Data Objects — abstracción BD | **Alta** |
| `pdo_sqlite` | PDO para SQLite | Media |
| `phar` | Archivos PHP empaquetados (.phar) | Media |
| `posix` | API POSIX | Baja |
| `soap` | Protocolo SOAP para web services | Media |
| `sodium` | **⚠️ ACTIVAR** — Cifrado moderno, reemplaza mcrypt | **Alta** — seguridad sin overhead |
| `sockets` | Sockets TCP/UDP de bajo nivel | Media |
| `sysvmsg` | Colas de mensajes System V | Baja |
| `sysvsem` | Semáforos System V (IPC — completa el trío junto a sysvmsg y sysvshm) | Baja |
| `sysvshm` | Memoria compartida System V | Baja |
| `tidy` | Limpieza y reparación de HTML | Baja |
| `timezonedb` | Base de datos de zonas horarias actualizada | Media |
| `xmlreader` | Lectura de documentos XML | Baja |
| `xmlwriter` | Escritura de documentos XML | Baja |
| `xsl` | Transformaciones XSLT | Baja |
| `zip` | Compresión ZIP | Media |

> **`sodium` está marcado como pendiente de activar** — es la única extensión de la lista anterior que puede no estar seleccionada aún en el panel.

---

### ⏸ Inactivas — Valorar según necesidad

| Extensión | Cuándo activar |
|---|---|
| `memcache` | Si usas Memcached como caché distribuida |
| `redis` | Si usas Redis para caché/sesiones/colas |
| `yaml` | Si tu app lee configuración en formato YAML |
| `uuid` | Para generar UUIDs sin overhead de BD |
| `oauth` | Si implementas OAuth 1.0 |
| `grpc` | Si usas microservicios con gRPC |

---

### 🚫 No activar en producción

| Extensión | Motivo |
|---|---|
| `xdebug` | Destruye el rendimiento. Solo desarrollo local |
| `tideways_xhprof` | Profiler. Solo para análisis puntuales |
| `scoutpm` | APM externo. Solo entornos controlados |

---

### ⛔ Irrelevantes para este stack

`amqp`, `zmq`, `oci8`, `pdo_oci`, `pdo_pgsql`, `pgsql`, `pdo_sqlsrv`, `sqlsrv`, `pdo_firebird`, `pdo_odbc`, `odbc`, `mongodb`, `solr`, `snmp`, `ioncube_loader`, `mcrypt` *(obsoleto — usar `sodium`)*

---

## 3. Directivas PHP (php.ini)

### 3.1 Rendimiento y Recursos

| Directiva | Valor actual | Valor recomendado | Notas |
|---|---|---|---|
| `memory_limit` | `512M` | `256M` | 512M es excesivo para webs normales. Bajar salvo apps pesadas (WP con muchos plugins, eCommerce grande) |
| `max_execution_time` | `300` | `60` | 300s es demasiado para peticiones web. 60s cubre la mayoría de casos; reservar 300s para scripts CLI/cron |
| `max_input_time` | `240` | `60` | Tiempo para parsear input. 60s es suficiente |
| `max_input_vars` | `5000` | `5000` | Bien — el default (1000) es insuficiente para formularios complejos o WP |
| `post_max_size` | `256M` | `64M` | Si subes vídeos/archivos grandes, mantener 256M. Para webs normales, 64M es suficiente |
| `upload_max_filesize` | `256M` | `64M` | Ídem — ajustar según el caso de uso real |
| `max_file_uploads` | `20` | `20` | OK |

### 3.2 OPcache

> **Problema detectado**: Los valores actuales del panel están por debajo de lo recomendado.

| Directiva | Valor actual | Valor recomendado | Notas |
|---|---|---|---|
| `opcache.enable` | `1` ✓ | `1` | Crítico — siempre ON |
| `opcache.memory_consumption` | `128` ⚠️ | `256` | Doblar — 128MB se queda corto con WordPress + plugins |
| `opcache.interned_strings_buffer` | `8` ⚠️ | `16` | Doblar — reduce re-allocations |
| `opcache.max_accelerated_files` | `10000` ⚠️ | `20000` | WP + plugins fácilmente supera 10000 archivos |
| `opcache.max_file_size` | `0` ✓ | `0` | Sin límite — OK |
| `opcache.validate_timestamps` | — | `0` | **En producción: 0** — no re-validar en cada request. En dev: 1 |
| `opcache.revalidate_freq` | — | `0` | Con `validate_timestamps=0` este valor no aplica |
| `opcache.save_comments` | — | `1` | Necesario para anotaciones (PHPDoc, Doctrine, etc.) |
| `opcache.enable_cli` | `0` | `1` | Activar si usas WP-CLI o scripts CLI |
| `opcache.fast_shutdown` | — | `1` | Libera memoria más rápido al terminar el proceso |
| `opcache.enable_file_override` | — | `1` | Mejora rendimiento con `file_exists()` / `is_file()` |

**Bloque listo para copiar en php.ini:**
```ini
opcache.enable=1
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=20000
opcache.max_file_size=0
opcache.validate_timestamps=0
opcache.revalidate_freq=0
opcache.save_comments=1
opcache.enable_cli=1
opcache.fast_shutdown=1
opcache.enable_file_override=1
```

### 3.3 Sesiones

| Directiva | Valor actual | Valor recomendado | Notas |
|---|---|---|---|
| `session.use_strict_mode` | `1` ✓ | `1` | Previene session fixation |
| `session.cookie_secure` | `1` ✓ | `1` | Solo HTTPS — correcto |
| `session.cookie_httponly` | `1` ✓ | `1` | Previene acceso JS — correcto |
| `session.cookie_samesite` | `Lax` | `Lax` | Lax es el equilibrio correcto. Strict rompe OAuth/redirects externos |
| `session.cookie_lifetime` | `0` | `0` | 0 = hasta que cierra el navegador. OK |
| `session.gc_maxlifetime` | `1440` | `1440` | 24 minutos. Suficiente para la mayoría de casos |
| `session.save_path` | `/opt/alt/php85/var/lib/php/session` | — | Ruta del servidor — no cambiar |

### 3.4 Errores y Logging

| Directiva | Valor actual | Valor recomendado | Notas |
|---|---|---|---|
| `display_errors` | `0` ✓ | `0` | Nunca mostrar en producción |
| `log_errors` | `1` ✓ | `1` | Siempre loguear |
| `error_reporting` | `E_ALL & ~E_DEPRECATED & ~E_STRICT` | `E_ALL & ~E_DEPRECATED & ~E_STRICT` | Correcto para producción |
| `expose_php` | `0` ✓ | `0` | No exponer versión en headers — correcto |

### 3.5 Seguridad

| Directiva | Valor actual | Valor recomendado | Notas |
|---|---|---|---|
| `allow_url_fopen` | `1` | `1` | Necesario para streams remotos (WordPress lo requiere) |
| `short_open_tag` | `0` ✓ | `0` | Usar `<?php` siempre |
| `open_basedir` | *(vacío)* | Configurar por dominio | Si el panel lo permite, limitar al directorio del sitio |
| `disable_functions` | ver abajo | ver abajo | Revisar lista |

**Lista actual de `disable_functions`:**
```
system, exec, shell_exec, passthru, mysql_list_dbs, ini_alter, dl,
symlink, link, chgrp, leak, popen, apache_child_terminate, virtual, mb_send_mail
```

**Lista recomendada** (añadir las que faltan):
```ini
disable_functions = system, exec, shell_exec, passthru, proc_open, proc_close,
proc_terminate, proc_get_status, popen, dl, ini_alter, symlink, link, chgrp,
leak, apache_child_terminate, virtual, mb_send_mail, mysql_list_dbs, phpinfo
```
> `phpinfo` — desactivar en producción. `proc_open` y sus variantes son vectores de ataque frecuentes.

### 3.6 General

| Directiva | Valor actual | Valor recomendado | Notas |
|---|---|---|---|
| `date.timezone` | `Europe/Madrid` ✓ | `Europe/Madrid` | Correcto para España |
| `include_path` | `.:/opt/alt/php85/usr/share/pear:...` | — | No tocar — gestionado por el servidor |
| `mail.force_extra_parameters` | *(vacío)* | `-f admin@tudominio.com` | Añadir el from real para evitar que el mail vaya a spam |
| `zlib.output_compression` | `0` | `0` | OFF — ya tienes Brotli, que es superior. No necesitas zlib de fallback si el servidor lo gestiona |
| `file_uploads` | `0` ⚠️ | `1` | **Activar** si la web permite subir imágenes/archivos |

---

## 4. Panel Hostinger — Opciones adicionales

Herramientas del hPanel que afectan a seguridad, rendimiento y despliegue.

| Opción | Estado recomendado | Acción |
|---|---|---|
| **Administrador de caché** | ✅ **ACTIVAR** | Habilitar LiteSpeed Cache o el caché del servidor. Es el mayor impacto individual en TTFB y PageSpeed |
| **GIT** | ✅ **CONFIGURAR** | Conectar el repositorio para despliegues automáticos. No afecta al rendimiento pero es esencial para el workflow |
| **Directorios protegidos con contraseña** | ⚠️ **REVISAR** | Proteger `/wp-admin`, `/administrator` o cualquier panel de control con contraseña HTTP adicional |
| **Administrador de IP** | ⚠️ **REVISAR** | Bloquear IPs de bots agresivos o atacantes. Configurar solo si hay tráfico malicioso identificado |
| **Protección Hotlink** | ✅ **ACTIVAR** | Evita que otros sitios sirvan tus imágenes/assets desde tu servidor. Reduce ancho de banda y carga |
| **Administrador de índice de carpetas** | 🚫 **DESACTIVAR** | El listado de directorios debe estar **OFF** en producción. Expone la estructura de archivos |
| **Corregir la propiedad de los archivos** | 🔧 **Usar cuando sea necesario** | Herramienta puntual para reparar permisos rotos (tras migraciones, FTP mal configurado, etc.) |

### Detalle de cada opción

#### Administrador de caché
- Activar caché de página completa (Full Page Cache)
- Si el hosting usa LiteSpeed, habilitar **LiteSpeed Cache** — es el más eficaz en Hostinger
- Configurar TTL de caché: `3600s` (1 hora) para páginas estáticas, `0` para páginas con login/carrito
- Excluir rutas: `/wp-admin/*`, `/wp-login.php`, `/checkout/*`, `/cart/*`, `/my-account/*`

#### Protección Hotlink
Activar y añadir en `.htaccess` o desde el panel:
```apache
RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^https://(www\.)?tudominio\.com/ [NC]
RewriteRule \.(jpg|jpeg|png|gif|webp|avif|svg|css|js|woff2)$ - [F,NC]
```
> Sustituir `tudominio.com` por el dominio real.

#### Administrador de índice de carpetas
Debe estar **desactivado**. Verificar también que el `.htaccess` incluya:
```apache
Options -Indexes
```

#### GIT
- Rama de producción: `main` o `master`
- Directorio de despliegue: `public_html/`
- Configurar deploy hook para invalidar caché tras cada push

---

## 6. Resumen: qué cambiar ahora mismo

### En el panel PHP (extensiones)
- [ ] **Activar `sodium`** — cifrado moderno, requerido por muchos paquetes modernos

### En php.ini (valores)
- [ ] `opcache.memory_consumption` → `256`
- [ ] `opcache.interned_strings_buffer` → `16`
- [ ] `opcache.max_accelerated_files` → `20000`
- [ ] `opcache.validate_timestamps` → `0`
- [ ] `max_execution_time` → `60` (web) / `300` solo en CLI
- [ ] `memory_limit` → `256M` (revisar si hay apps pesadas)
- [ ] `file_uploads` → `1` (si la app sube archivos)
- [ ] `disable_functions` → añadir `proc_open`, `proc_close`, `proc_terminate`, `proc_get_status`, `phpinfo`

---

## 7. Roadmap PageSpeed 100 / Lighthouse perfecto

```
NIVEL 1 — PHP (este documento)
  ✅ OPcache bien configurado          → TTFB < 200ms
  ✅ APCu para caché de datos          → menos queries BD
  ✅ igbinary activo                   → serialización rápida
  ✅ Brotli activo                     → transferencia ligera
  ✅ imagick activo                    → WebP/AVIF dinámico
  ⬜ sodium activado                   → seguridad moderna

NIVEL 2 — Servidor (siguiente paso)
  ⬜ Headers Cache-Control + ETag
  ⬜ HTTP/2 (o HTTP/3 si el host lo permite)
  ⬜ Preload de recursos críticos (Link: </font.woff2>; rel=preload)
  ⬜ HSTS + Strict-Transport-Security

NIVEL 3 — Assets
  ⬜ CSS crítico inline, resto diferido
  ⬜ JS diferido (defer/async) o ES modules
  ⬜ Imágenes WebP/AVIF con lazy loading
  ⬜ Fonts: font-display: swap + preconnect

NIVEL 4 — Core Web Vitals (métricas objetivo)
  ⬜ LCP < 2.5s   (Largest Contentful Paint)
  ⬜ INP < 200ms  (Interaction to Next Paint — reemplazó FID)
  ⬜ CLS < 0.1    (Cumulative Layout Shift)
  ⬜ TTFB < 200ms (Time To First Byte — impacto directo de PHP)
```
