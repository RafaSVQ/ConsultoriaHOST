<?php
/**
 * CONSULTORÍA HOST — Catálogo de artículos del blog
 * Archivo: config/articulos.php
 *
 * Fuente única de verdad para los artículos del blog.
 * Incluido en blog/index.php y public_html/sitemap.php.
 *
 * Para publicar un artículo: crear el .php en /blog/ y añadir
 * la entrada aquí con 'publicado' => true.
 * Para guardar un borrador: 'publicado' => false; no aparecerá
 * en el índice del blog ni en el sitemap.
 */

$articulos = [
  [
    'slug'      => 'gobernanza-inteligencia-artificial',
    'titulo'    => '¿Sabes qué es la gobernanza de la Inteligencia Artificial?',
    'extracto'  => 'La gobernanza de la IA es el conjunto de políticas, normas y controles que garantizan un uso seguro, transparente y responsable de la inteligencia artificial. Pilares, marcos de referencia y cómo aplicarla en tu empresa.',
    'categoria' => 'Formación',
    'catcolor'  => 'badge--amber',
    'fecha'     => '2026-06-22',
    'lectura'   => '7 min',
    'destacado' => false,
    'publicado' => true,
  ],
  [
    'slug'      => 'formacion-ia-obligatoria-articulo-4',
    'titulo'    => 'Formación en IA obligatoria: lo que exige el Artículo 4 del Reglamento Europeo',
    'extracto'  => 'Desde febrero de 2025 existe obligación legal de formar en IA a todo el personal que la use en el trabajo. Qué exige la ley, desde cuándo se sanciona y cómo cumplir sin perder tiempo ni dinero.',
    'categoria' => 'Formación',
    'catcolor'  => 'badge--amber',
    'fecha'     => '2026-06-22',
    'lectura'   => '8 min',
    'destacado' => true,
    'publicado' => true,
    'imagen'    => 'formacion-ia-microempresa-evita-sanciones.jpg',
  ],
  [
    'slug'      => 'que-es-la-consultoria-3-0',
    'titulo'    => '¿Qué es la Consultoría 3.0 y por qué importa?',
    'extracto'  => 'La consultoría tradicional llena cajones de informes. La consultoría 3.0 de HOST sale a la calle y genera resultados reales. Te explicamos la diferencia.',
    'categoria' => 'Consultoría',
    'catcolor'  => 'badge--orange',
    'fecha'     => '2025-03-10',
    'lectura'   => '5 min',
    'destacado' => true,
    'publicado' => true,
  ],
  [
    'slug'      => 'errores-emprendimiento-evitar',
    'titulo'    => '7 errores de emprendimiento que puedes evitar con el Método HOST',
    'extracto'  => 'El 90% de quienes emprendan sin validar previamente su proyecto acaban en la ruina. Conoce los errores más comunes y cómo el Método HOST te ayuda a esquivarlos.',
    'categoria' => 'Emprendimiento',
    'catcolor'  => 'badge--blue',
    'fecha'     => '2025-02-18',
    'lectura'   => '7 min',
    'destacado' => true,
    'publicado' => true,
  ],
  [
    'slug'      => 'vertedero-sesena-solucion-real',
    'titulo'    => 'El vertedero de Seseña tiene solución. Y es gratuita para las arcas públicas.',
    'extracto'  => 'El mayor vertedero de neumáticos de Europa lleva décadas esperando una solución real. HOST la tiene. Sin coste para la administración, con beneficios medioambientales y generación de empleo.',
    'categoria' => 'Medioambiente',
    'catcolor'  => 'badge--green',
    'fecha'     => '2025-01-22',
    'lectura'   => '6 min',
    'destacado' => false,
    'publicado' => true,
  ],
  [
    'slug'      => 'networking-efectivo-consejos',
    'titulo'    => 'Networking efectivo: 5 claves que marcan la diferencia',
    'extracto'  => 'El networking mal entendido es publicidad de uno mismo. El networking efectivo es construir relaciones de valor. Te damos las 5 claves que HOST aplica en sus encuentros.',
    'categoria' => 'Networking',
    'catcolor'  => 'badge--navy',
    'fecha'     => '2024-12-05',
    'lectura'   => '4 min',
    'destacado' => false,
    'publicado' => true,
  ],
  [
    'slug'      => 'mujer-rural-emprendimiento',
    'titulo'    => 'Mujer rural y emprendimiento: oportunidades que no se ven',
    'extracto'  => 'La mujer en entornos rurales tiene menos acceso a recursos de desarrollo profesional. Pero también tiene ventajas competitivas únicas que HOST ayuda a identificar y aprovechar.',
    'categoria' => 'Social',
    'catcolor'  => 'badge--green',
    'fecha'     => '2024-11-14',
    'lectura'   => '5 min',
    'destacado' => false,
    'publicado' => true,
  ],
  [
    'slug'      => 'interim-management-espana',
    'titulo'    => 'Interim Management: el servicio que España aún no conoce bien',
    'extracto'  => 'En otros países es la primera opción cuando una empresa necesita resolver una situación crítica. En España aún se desconoce. Te explicamos qué es y por qué puede salvarte el negocio.',
    'categoria' => 'Empresas',
    'catcolor'  => 'badge--blue',
    'fecha'     => '2024-10-28',
    'lectura'   => '6 min',
    'destacado' => false,
    'publicado' => true,
  ],
];
