<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bulk\Database;
$db = new Database();

$correo = $_GET['correo'];
$password = $_GET['password'];

$sql = "SELECT * FROM usuarios WHERE correo = :correo";

$stmt = $db->prepare_fetch_result($sql, [
'correo' => $correo
]);

$json = [];

if ($stmt && password_verify($password, $stmt->password)) {
$json['valid'] = true;
} else {
$json['valid'] = false;
$json['error'] = 'Usuario o contraseña incorrecta';
}

echo json_encode($json, JSON_PRETTY_PRINT);