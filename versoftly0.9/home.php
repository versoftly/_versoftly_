<?php session_start();

if (!isset($_SESSION['usuario'])) {
        
    header ("Location: index.php");
    
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
            
    $conexion = new PDO("mysql:host=localhost;dbname=mosteigd_articulos","mosteigd_Versoft","@W^CZuf%W(}5");
    $conexion->exec("set names utf8mb4");
    
} catch(PDOException $e) {
    
    echo "error ".$e->getMessage();
    
}

if (!$conexion) {
    
    die("Error de conexion con la basededatos.");
    
}

$sentencia = $conexion->prepare("SELECT * FROM registro WHERE usuario = :usuario");
$sentencia->execute([
    ":usuario" => $_SESSION['usuario']
]);
$articulos = $sentencia->fetchAll();

require_once "vistas/home.php";