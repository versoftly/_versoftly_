<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (código de procesamiento de formulario) ...

    // Redirigir a la página de agradecimiento.
    header("Location: gracias");
    exit();
}
?>
