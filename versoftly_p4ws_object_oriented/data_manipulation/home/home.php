<?php session_start();

if (!isset($_SESSION['usuario'])) {
        
    header ("Location: index.php");
    
}

$conexion = Connection::connecto ("?","?","?","?");

$sentencia = $conexion->prepare("SELECT * FROM registro WHERE usuario = :usuario");
$sentencia->execute([
    ":usuario" => $_SESSION['usuario']
]);
$articulos = $sentencia->fetchAll();

?>