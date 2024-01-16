<?php

function corregirErrores($codigo) {
    // Lógica ficticia para corregir errores comunes en bloques if anidados
    // En este ejemplo, simplemente se quita "endif;" para mostrar errores en el código original
    return $codigo;
}

function versoftly_analyzer($codigo) {
    $mensaje = '';
    $nombreArchivoValido = true;
    $erroresEncontrados = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Si se envió el formulario, procesar el nuevo código
        $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';

        // Validar el nombre del archivo
        $nombreArchivo = isset($_POST['nombre_archivo']) ? $_POST['nombre_archivo'] : '';
        $nombreArchivoValido = validarNombreArchivo($nombreArchivo);

        // Corregir errores comunes en bloques if anidados
        $codigoCorregido = corregirErrores($codigo);

        // Guardar el código corregido en un archivo si se solicitó
        if (isset($_POST['guardar']) && $nombreArchivoValido) {
            $archivo = $nombreArchivo . '.php';

            // Intentar guardar el archivo
            if (file_put_contents($archivo, $codigoCorregido)) {
                $mensaje = "El código corregido se ha guardado correctamente en el archivo: $archivo";
            } else {
                $mensaje = "Error al intentar guardar el archivo. Verifica los permisos del directorio.";
            }
        }
    }

    $codigoCerrado = cerrarBloquesIf($codigo);

    $lineasFuente = explode("\n", $codigo);
    $lineas = explode("\n", $codigoCerrado);
    $totalLineasFuente = count($lineasFuente);
    $totalLineas = count($lineas);
    $nivelAnidamiento = 0;
    $bloqueActual = false;
    $bloquesEncontrados = false;

    echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Analizador y Corrector de Código PHP</title>
    
        <style>
            /* Estilo del formulario y resultados (mismo estilo que antes) */
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(34, 146, 34);
                color: #fff;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }
    
            form {
                background-color: #1f4d3c;
                padding: 20px;
                border-radius: 10px;
                width: 80%;
                max-width: 600px;
                box-shadow: 0 0 10px rgba(75, 8, 8, 0.55);
                margin-bottom: 20px;
            }
    
            textarea {
                width: 100%;
                box-sizing: border-box;
                margin-bottom: 10px;
            }
    
            input[type='text'] {
                width: calc(100% - 22px);
                padding: 10px;
                box-sizing: border-box;
                margin-bottom: 10px;
            }
    
            input[type='submit'] {
                background-color: #4b08088c;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
    
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
    
            th, td {
                border: 1px solid #fff;
                padding: 8px;
                text-align: left;
            }
    
            th {
                background-color: #b94343de;
            }
    
            td {
                background-color: #b64b4bde;
            }
    
            p {
                margin-top: 20px;
                text-align: center;
            }

            /* Nuevo estilo para el video tutorial */
            iframe {
                margin-top: 20px;
                width: 80%;
                max-width: 600px;
                height: 315px;
            }
        </style>
    </head>
    <body>
        <form method='post'>
            <label for='codigo'>Código:</label><br>
            <textarea name='codigo' rows='10' cols='50'>$codigo</textarea><br>
            <label for='nombre_archivo'>Nombre del archivo (obligatorio):</label>
            <input type='text' name='nombre_archivo' required><br>
            <input type='submit' name='guardar' value='Guardar en archivo'>
            <input type='submit' name='analizar' value='Analizar'>
        </form>
    ";

    if (!$nombreArchivoValido) {
        echo "<p style='color: #FF0000;'>Por favor, ingresa un nombre de archivo válido.</p>";
    }

    if (isset($_POST['analizar'])) {
        echo "<table border='1'>";
        echo "<tr><th>Nivel</th><th>Inicio/Fin</th><th>Línea</th><th>Código</th></tr>";

        foreach ($lineas as $numeroLinea => $linea) {
            // Eliminar espacios en blanco al inicio y final de la línea
            $linea = trim($linea);

            if (strpos($linea, 'if') === 0 || strpos($linea, 'elseif') === 0) {
                $nivelAnidamiento++;
                $bloquesEncontrados = true;
                echo "<tr><td>$nivelAnidamiento</td><td>Inicio</td><td>" . ($numeroLinea + 1) . "</td><td>$linea</td></tr>";
            } elseif (strpos($linea, 'endif') === 0) {
                if ($bloqueActual) {
                    echo "<tr><td>$nivelAnidamiento</td><td>Fin</td><td>" . ($numeroLinea + 1) . "</td><td>$linea</td></tr>";
                    $bloqueActual = false;
                }
                $nivelAnidamiento--;
            } elseif (!empty($linea)) {
                // Mostrar errores en el código original
                echo "<tr><td colspan='4'>Error en la línea " . ($numeroLinea + 1) . ": $linea</td></tr>";
                $erroresEncontrados = true;
            }
        }

        echo "</table>";
        echo "<p>Total de líneas en el programa: $totalLineasFuente</p>";

        if (!$bloquesEncontrados) {
            echo "<p>No se encontraron bloques if anidados en el código.</p>";
        } elseif ($nivelAnidamiento > 0) {
            echo "<p>Advertencia: Bloques if anidados sin cerrar correctamente.</p>";
        }

        // Mostrar mensaje de éxito o error al guardar el archivo
        echo "<p>$mensaje</p>";

        // Agregar la búsqueda de videos (Nota: Es un ejemplo ficticio, se debe ajustar según la lógica real)
        $palabrasClave = urlencode('php nested if blocks common errors');
        $iframeSrc = "https://www.youtube.com/embed?listType=search&list=$palabrasClave";
        echo "<iframe width='560' height='315' src='$iframeSrc' frameborder='0' allowfullscreen></iframe>";

        if ($erroresEncontrados) {
            echo "<p style='color: #FF0000;'>Se encontraron errores en el código. Por favor, revísalo y corrige los errores antes de continuar.</p>";
        }
    }

    echo "
    </body>
    </html>
    ";
}

// Ejemplo de uso
versoftly_analyzer('');
?>
