<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectName = $_POST['projectName'];

    // Verificar si el nombre del proyecto es válido
    if (preg_match('/^[a-zA-Z0-9_-]+$/', $projectName)) {
        $projectPath = '/var/www/versoftly/versoftly-projects/pagina-dominios-adaptowebs/p4ws/components/CreateProject/' . $projectName;

        // Resto del código para crear la estructura del proyecto...
        // (Usa el código anteriormente proporcionado)

        echo "Proyecto '$projectName' creado con éxito en: $projectPath";
    } else {
        echo "Nombre de proyecto no válido. Utiliza solo letras, números, guiones y guiones bajos.";
    }
}

?>
