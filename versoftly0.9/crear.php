<?php session_start();

if (!isset($_SESSION['usuario'])) {
        
    header ("Location: index.php");
    
}

$errores = '';
    
try {
    $conn = new PDO("mysql:host=localhost;dbname=mosteigd_articulos","mosteigd_Versoft","@W^CZuf%W(}5");
} catch(PDOException $e) {
    echo "error ".$e->getMessage();
}

if (!$conn) {
    die("Error de conexion con la basededatos");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = htmlspecialchars($_POST['titulo']);
    $texto = $_POST['contenido'];

    if (empty($titulo) || empty($texto)) {
        $errores = "<b>Hay campos vacios</b>";
    } else {
        
        $stmt = $conn->prepare("INSERT INTO registro (titulo,contenido,imagen,usuario) VALUES 
        (:titulo,:contenido,:imagen,:usuario)");
        
        $stmt->execute([
            ":titulo" => $titulo,
            ":contenido" => $texto,
            ":imagen" => "logo.jpg",
            ":usuario" => $_SESSION['usuario']
        ]);
        
        header("Location: home.php");
    }

}

require_once "vistas/crear.php";