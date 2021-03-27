<?php

// GET - POST - AJAX
$nombre_carera = $_GET['nombre_carera'];
$nombre_clase = $_GET['nombre_clase'];
$año_carrera = $_GET['año_carrera'];

if ($nombre_carera && $nombre_clase && $año_carrera ) {


$sql = "INSERT INTO carrera (nombre_carera, nombre_clase, ano_carrera ) VALUES (:nombre_clase, :nombre_carera, :ano_carrera)";


$stmt = $db->prepare_execute($sql, [
'nombre_carrera' => $nombre_carrera,
'nombre_clase' => $nombre_clase,
'año_carrera' => $año_carrera
]);
// Se enviá una respuesta en formato json
$json = [];
if ($stmt) {
$json['ingreso'] = true; // Verdadero si es correcto
} else {
$json['ingreso'] = false; // Falso si falla
}
// Se imprime el resultado
echo json_encode($json);
} else {
$json = [];
$json['error'] = 'No se encontraron las variables';
echo json_encode($json);
}