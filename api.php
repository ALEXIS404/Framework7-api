<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bulk\Database;

$db = new Database();

//se crea una variable $json con un arreglo vacio
$json = [];

// dentro de Json se crea un indice de nombre datos 
//con valor prueba 
$json['datos'] = "prueba";
$json['datos2'] = "prueba2";

//arreglos multidimencionales.
$json['array'] = [
    'foo' => 'bar',
    'bar' => 'foo'
];

//se imprime usando la funcion json_encode 
// con el valor #Json usando el modificador PRETTY_PRIN

echo json_encode($json, JSON_PRETTY_PRINT);
