<?php ActiveSession::ifIsNotActive("url/path/location");

$errores = '';
    
$conn = Connection::connecto ("serverName/url","databaseName","userName","password");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = htmlspecialchars($_POST['titulo']);
    $texto = $_POST['contenido'];
    $id = (int)$_POST['id'];

    if (empty($titulo) || empty($texto) || empty($id)) {
        $errores = "<b>Hay campos vacios</b>";
    } else {
        
        

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