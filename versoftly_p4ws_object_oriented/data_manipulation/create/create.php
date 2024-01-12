<?php ActiveSession::ifIsNotActive("url/path/location");

$errores = '';
    
$conn = Connection::connecto ("serverName/url","databaseName","userName","password");

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
        
        header("Location: path/file||url");
    }

}

?>