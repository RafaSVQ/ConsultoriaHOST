<?php
declare(strict_types=1);

/**
 * CONSULTORÍA HOST — Descarga controlada de documentos
 * Archivo: public_html/descargas.php
 *
 * Sirve únicamente los PDF finales listados en $DOCUMENTOS, que viven
 * fuera del webroot en /docs/. Los borradores (.docx, .md) nunca son
 * accesibles por URL — solo existen en el sistema de archivos local.
 *
 * Uso: descargas.php?id=contrato-desarrollo-ia
 */

require_once __DIR__ . '/bootstrap.php';

// Whitelist: id de URL => nombre real del archivo en /docs/
$DOCUMENTOS = [
    // 'contrato-desarrollo-ia' => 'Contrato_Desarrollo_Implementacion_IA.pdf',
];

$id = $_GET['id'] ?? '';

if ($id === '' || !isset($DOCUMENTOS[$id])) {
    http_response_code(404);
    exit('Documento no encontrado.');
}

$archivo = APP_ROOT . '/docs/' . $DOCUMENTOS[$id];

if (!is_file($archivo) || pathinfo($archivo, PATHINFO_EXTENSION) !== 'pdf') {
    http_response_code(404);
    exit('Documento no encontrado.');
}

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . basename($archivo) . '"');
header('Content-Length: ' . filesize($archivo));
header('X-Content-Type-Options: nosniff');
readfile($archivo);
