<?php ActiveSession::ifIsNotActive("url/path/location");

$conexion = Connection::connecto ("?","?","?","?");

$sentencia = $conexion->prepare("SELECT * FROM registro WHERE usuario = :usuario");
$sentencia->execute([
    ":usuario" => $_SESSION['usuario']
]);
$articulos = $sentencia->fetchAll();

?>