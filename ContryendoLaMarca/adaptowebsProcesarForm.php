<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Puedes procesar los datos como desees, por ejemplo, almacenarlos en una base de datos.

    // Redirigir a la página de agradecimiento.
    header("Location: adaptowebsGracias.html");
    exit();
}
?>
