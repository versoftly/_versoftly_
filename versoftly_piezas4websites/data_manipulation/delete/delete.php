<?php session_start();

if (!isset($_SESSION['usuario'])) {
        
    header ("Location: index.php");
    
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=?", "?", "?");
} catch(PDOException $e) {
    echo "error ".$e->getMessage();
}

if (!$conn) {
    die("Error de conexion con la basededatos");
}

$id = htmlspecialchars($_GET['id']);

if(!$id) {
    header('Location: home.php');
}

$stmt = $conn->prepare("DELETE FROM registro WHERE id=:id");
$stmt->execute([
    ":id" => $id    
]);

header('Location: home.php');

?>