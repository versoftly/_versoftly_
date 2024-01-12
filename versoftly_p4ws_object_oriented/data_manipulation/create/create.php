<?php ActiveSession::ifIsNotActive("url/path/location");

$errores = '';
    
$conn = Connection::connecto ("serverName/url","databaseName","userName","password");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = htmlspecialchars($_POST['titulo']);
    $texto = $_POST['contenido'];

    if (empty($titulo) || empty($texto)) {

        $errores = "<b>Hay campos vacios</b>";

    } else {
        
        $gc = new GeneriCrud("insert");

        $gc->executeThisOperation (
            "registro",
            [
                "titulo",
                "contenido",
                "imagen",
                "usuario"
            ],
            [
                $titulo,
                $texto,
                "logo.jpg",
                $_SESSION['usuario']
            ],
            "path|url"
        );

    }

}

?>