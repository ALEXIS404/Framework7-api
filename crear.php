<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bulk\Database;

$db = new Database();

// GET - POST - AJAX
<<<<<<< HEAD
$correo = @$_GET['correo'];
$password = @$_GET['password'];

if ($correo && $password) {
    $sql = "INSERT INTO usuarios (correo, password) VALUES (:correo, :password)";
    //creamos un procedimiento que ejecuta el SQL con los valors 
    //el parametro correo es un texto plano
    // el parametro password es la contrasena inscriptada 
=======
$correo = $_GET['correo'];
$password = $_GET['password'];

if ($correo && $password) {

    // Query SQL para ingresar datos dentro de la tabla usuarios
    // las palabras :correo y :password se identifican como 'variables'
    // de un procedimiento almacenado
    // INSERT INTO usuarios (correo, password)
    // VALUES (:correo, :password)
    $sql = "INSERT INTO usuarios (correo, password) VALUES (:correo, :password)";

    // Creamos un procedimiento que ejecuta el SQL con los valores de un arreglo
    // el parámetro correo es un texto plano
    // El parámetro password es la contraseña encriptada
>>>>>>> 6beea39f933549cf4e63862de27de188e9d2231f
    $stmt = $db->prepare_execute($sql, [
        'correo' => $correo,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
<<<<<<< HEAD

    //se envia una respuesta en formato json
    $json = [];
    if ($stmt) {
        $json['ingreso'] = true; // verdadero si es correcto  
    } else {
        $json['ingreso'] = false; //falso si falla 
    }
    // se imprime el resultado
=======
    // Se enviá una respuesta en formato json
    $json = [];
    if ($stmt) {
        $json['ingreso'] =  true; // Verdadero si es correcto
    } else {
        $json['ingreso'] = false; // Falso si falla
    }
    // Se imprime el resultado
>>>>>>> 6beea39f933549cf4e63862de27de188e9d2231f
    echo json_encode($json);
} else {
    $json = [];
    $json['error'] = 'No se encontraron las variables';
    echo json_encode($json);
}
