<?php
// Ruta local de tu carpeta con los mp3
$directorio = __DIR__ . '/mp3'; // asegúrate de que la carpeta se llame así

// Buscar todos los .mp3
$archivos = glob($directorio . '/*.mp3');

// Extraer solo los nombres de archivo
$nombres = array_map('basename', $archivos);

// Crear JSON
file_put_contents(__DIR__ . '/manifest.json', json_encode($nombres, JSON_PRETTY_PRINT));

echo "manifest.json creado con " . count($nombres) . " canciones.\n";