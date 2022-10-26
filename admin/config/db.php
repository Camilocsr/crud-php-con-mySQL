<?php
$host = "localhost";
$bd = "sitio";
$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO("mysql:host=$host;bdname=$bd", $usuario, $contraseña);
    if($conexion) {
        echo "conectado....<br> a el sitema";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}


?>