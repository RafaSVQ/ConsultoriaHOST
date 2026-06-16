# Hoja de ruta estratégica — Consultoría HOST

**Objetivo:** convertir el sitio en una máquina de captación de leads cualificados.
**Punto de partida:** propuesta de valor sólida y diferenciada; embudo comercial aún sin infraestructura.

---

## Fase 1 — Lanzamiento (días · baja inversión, alto impacto)

Acciones que se pueden activar en horas o días sin desarrollo propio.
Son el primer paso porque convierten tráfico existente en pipeline.

| Acción | Esfuerzo | Impacto | Notas |
|---|---|---|---|
| **Booking de llamada** — Calendly o Cal.com embebido | 🟢 1-2 días | ★★★ | Paso más directo de visita a reunión; sin desarrollo; enlace en nav y CTA |
| **Testimonios y pruebas sociales** — 3-5 frases reales de clientes con nombre y sector | 🟢 2-3 días | ★★★ | Bloque en `index.php` y en `contacto.php`; el componente `.testimonial` ya existe en CSS |
| **Schema FAQ** en `contacto.php` | 🟢 1 día | ★★ | Rich snippets en Google; pendiente como MEJ-01 en `AUDITORIA.md` |
| **Schema `image`** en artículos de blog | 🟢 1 día | ★★ | Pendiente como SEO-03 en `AUDITORIA.md`; requiere crear `og-image.jpg` (REND-04) |
| **WhatsApp Business** — widget flotante | 🟢 1 día | ★★ | Script de tercero; añadir solo en `contacto.php` e `index.php` para no saturar. Ref: `wa.me/34954182508` |
| **Schema.org LocalBusiness ampliado** — añadir `geo`, `priceRange`, `aggregateRating`, `sameAs` en `index.php` | 🟢 1 día | ★★ | Mejora visibilidad en búsquedas locales Sevilla; geo: lat 37.3886, lon -5.9823 |

---

## Fase 2 — Captación (semanas · requiere contenido y configuración)

Infraestructura para generar y capturar demanda antes de que el lead esté listo para comprar.

| Acción | Esfuerzo | Impacto | Notas |
|---|---|---|---|
| **Landing pages por servicio** — una por departamento H·O·S·T orientada a conversión | 🟡 2-3 semanas | ★★★ | Diferente a las páginas de servicio actuales; CTA único, sin nav completa |
| **Landing pages por segmento** — microempresa, autónomo, búsqueda de empleo, AAPP | 🟡 2-3 semanas | ★★★ | Hablan el idioma del cliente; mayor conversión que una página genérica |
| **Blog transaccional** — artículos orientados a búsquedas con intención de contratar | 🟡 Continuo | ★★★ | Ej.: "cuánto cuesta un interim manager", "qué hace un consultor en Sevilla" |
| **Lead magnet + diagnóstico inicial** — PDF descargable o test de viabilidad | 🟡 1-2 semanas | ★★ | Captura email antes de la llamada; test puede ser un formulario con score |
| **Newsletter** — Brevo o Mailchimp, sin coste hasta 2.000 suscriptores | 🟡 1 semana | ★★ | Contenido mensual: caso real + artículo + evento; nutre leads fríos |
| **Analítica de conversión** — GA4 con eventos: clic CTA, envío formulario, booking | 🟡 3-5 días | ★★ | Sin esto no se puede medir ni optimizar nada de lo anterior |

---

## Fase 3 — Escala (meses · infraestructura y comunidad)

Solo tiene sentido cuando Fase 1 y Fase 2 generan volumen de leads sostenido.

| Acción | Esfuerzo | Impacto | Notas |
|---|---|---|---|
| **CRM con etiquetado por tipo de lead** | 🔴 1-2 meses | ★★★ | HubSpot free o Notion como CRM ligero mientras el volumen no justifique otro |
| **Automatización de seguimiento** | 🔴 1-2 meses | ★★★ | Depende del CRM; secuencias post-formulario, post-llamada, re-engagement |
| **Casos de éxito descargables** | 🔴 4-6 semanas | ★★ | 2-3 casos reales anonimizados con métricas; requieren redacción y diseño |
| **Páginas por industria** — hostelería, retail, educación, AAPP | 🔴 1-2 meses | ★★ | SEO local y sectorial; mayor coste de producción pero muy cualificadas |
| **Área privada** — talleres HOST, materiales, colaboradores | 🔴 2-4 meses | ★★ | Requiere autenticación PHP o plataforma externa (Teachable, Kajabi) |
| **Comunidad de networking** | 🔴 Continuo | ★ | Newsletter + LinkedIn + eventos presenciales; el canal precede a la plataforma |

---

## Criterios de priorización aplicados

1. **ROI inmediato primero** — booking y testimonios convierten tráfico existente sin generar más
2. **Sin dependencias** — la Fase 1 no bloquea nada; las fases 2 y 3 se encadenan
3. **Infraestructura antes de escala** — no tiene sentido automatizar seguimiento sin CRM; no tiene sentido CRM sin leads
4. **Contenido es el cuello de botella** — el código se hace rápido; los testimonios, casos y artículos transaccionales requieren tiempo del cliente

---

## Relación con `AUDITORIA.md`

Los ítems técnicos pendientes que desbloquean esta hoja de ruta:

| Ítem AUDITORIA | Bloquea |
|---|---|
| REND-04 — crear `og-image.jpg` | Schema `image`, sharing en redes (Fase 1) |
| SEO-03 — schema `image` en blog | Visibilidad Google rich results (Fase 1) |
| MEJ-01 — schema `FAQPage` | Rich snippets FAQ (Fase 1) |
| SEO-04 — artículos en `sitemap.xml` | Indexación del blog transaccional (Fase 2) |
| SEG-02 / SEG-03 — CSRF + rate limiting | Seguridad antes de aumentar tráfico (Fase 2) |


