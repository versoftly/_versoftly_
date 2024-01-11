<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=mosteigd_articulos", "mosteigd_Versoft", "@W^CZuf%W(}5");
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