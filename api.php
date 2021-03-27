<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bulk\Database;

$db = new Database();

<<<<<<< HEAD
//se crea una variable $json con un arreglo vacio
$json = [];

// dentro de Json se crea un indice de nombre datos 
//con valor prueba 
$json['datos'] = "prueba";
$json['datos2'] = "prueba2";

//arreglos multidimencionales.
=======
// Se crea una variable $json con un arreglo vacio.
$json = [];

// Dentro de Json se crea un indice de nombre datos
// Con valor Prueba
$json['datos'] = "Prueba";
$json['datos2'] = "Prueba2";

// arreglos multidimencionales.
>>>>>>> 6beea39f933549cf4e63862de27de188e9d2231f
$json['array'] = [
    'foo' => 'bar',
    'bar' => 'foo'
];

<<<<<<< HEAD
//se imprime usando la funcion json_encode 
// con el valor #Json usando el modificador PRETTY_PRIN
=======
// Se imprime usando la funcion json_encode
// con el valor de $json usando el modificador PRTY print
>>>>>>> 6beea39f933549cf4e63862de27de188e9d2231f

echo json_encode($json, JSON_PRETTY_PRINT);
