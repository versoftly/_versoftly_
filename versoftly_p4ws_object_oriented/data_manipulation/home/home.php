<?php ActiveSession::ifIsNotActive("url/path/location");

$conexion = Connection::connecto ("serverName/url","databaseName","userName","password");

$sentencia = $conexion->prepare("SELECT * FROM registro WHERE usuario = :usuario");
$sentencia->execute([
    ":usuario" => $_SESSION['usuario']
]);
$articulos = $sentencia->fetchAll();

?>