<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bulk\Database;

$db = new Database();

// GET - POST - AJAX
$correo = @$_GET['correo'];
$password = @$_GET['password'];

if ($correo && $password) {
    $sql = "INSERT INTO usuarios (correo, password) VALUES (:correo, :password)";
    //creamos un procedimiento que ejecuta el SQL con los valors 
    //el parametro correo es un texto plano
    // el parametro password es la contrasena inscriptada 
    $stmt = $db->prepare_execute($sql, [
        'correo' => $correo,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    //se envia una respuesta en formato json
    $json = [];
    if ($stmt) {
        $json['ingreso'] = true; // verdadero si es correcto  
    } else {
        $json['ingreso'] = false; //falso si falla 
    }
    // se imprime el resultado
    echo json_encode($json);
} else {
    $json = [];
    $json['error'] = 'No se encontraron las variables';
    echo json_encode($json);
}
