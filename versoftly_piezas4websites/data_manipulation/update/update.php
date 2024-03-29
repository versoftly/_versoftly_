<?php session_start();

if (!isset($_SESSION['usuario'])) {
    header ("Location: index.php");
}

$errores = '';
    
try {
    $conn = new PDO("mysql:host=localhost;dbname=?","?","?");
} catch(PDOException $e) {
    echo "error ".$e->getMessage();
}

if (!$conn) {
    die("Error de conexion con la basededatos");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = htmlspecialchars($_POST['titulo']);
    $texto = $_POST['contenido'];
    $id = (int)$_POST['id'];

    if (empty($titulo) || empty($texto) || empty($id)) {
        $errores = "<b>Hay campos vacios</b>";
    } else {
        
        $data = [
            ':id' => $id,
            ':titulo' => $titulo,
            ':texto' => $texto
        ];
        
        $sql = "UPDATE registro SET titulo=:titulo, contenido=:texto WHERE id=:id";
        $stmt= $conn->prepare($sql);
        $stmt->execute($data);
        
        header("Location: home.php");

    }
    
} else {
    
    $idArticle = trim($_GET['id']);
    $idArticle = stripslashes($idArticle);
    $idArticle = htmlspecialchars($idArticle);
    
    $post = $conn->prepare("SELECT * FROM registro WHERE id = ".$idArticle." LIMIT 1");

    $post->execute();
    
    $post = $post->fetchAll();
    
    if(!$post) {
        header("Location: home.php");
    }
    
    $post = $post[0];
    
}

?>