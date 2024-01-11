<?php session_start();

if (!isset($_SESSION['usuario'])) {
        
    header ("Location: index.php");
    
}

try {
            
    $conexion = new PDO("mysql:host=localhost;dbname=?","?","?");
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

?>