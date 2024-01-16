<?php

function cerrarBloquesIf($codigo) {
    $lineas = explode("\n", $codigo);
    $nivelAnidamiento = 0;

    foreach ($lineas as $numeroLinea => $linea) {
        // Eliminar espacios en blanco al inicio y final de la línea
        $linea = trim($linea);

        if (strpos($linea, 'if') === 0 || strpos($linea, 'elseif') === 0) {
            $nivelAnidamiento++;
        } elseif (strpos($linea, 'endif') === 0) {
            if ($nivelAnidamiento > 0) {
                $nivelAnidamiento--;
            } else {
                // Si encuentra un "endif" sin un "if" correspondiente, lo elimina
                unset($lineas[$numeroLinea]);
            }
        }
    }

    // Agregar "endif" para cerrar los bloques if sin cerrar
    while ($nivelAnidamiento > 0) {
        $lineas[] = 'endif;';
        $nivelAnidamiento--;
    }

    return implode("\n", $lineas);
}

function versoftly_analyzer($codigo) {
    $codigoCerrado = cerrarBloquesIf($codigo);

    $lineas = explode("\n", $codigoCerrado);
    $totalLineas = count($lineas);
    $nivelAnidamiento = 0;
    $bloqueActual = false;
    $bloquesEncontrados = false;

    foreach ($lineas as $numeroLinea => $linea) {
        // Eliminar espacios en blanco al inicio y final de la línea
        $linea = trim($linea);

        if (strpos($linea, 'if') === 0 || strpos($linea, 'elseif') === 0) {
            $nivelAnidamiento++;
            $bloquesEncontrados = true;
            $bloqueActual = true;
            echo "Inicio de bloque if anidado (Nivel $nivelAnidamiento) - Línea $numeroLinea\n";
        } elseif (strpos($linea, 'endif') === 0) {
            if ($bloqueActual) {
                echo "Fin de bloque if anidado (Nivel $nivelAnidamiento) - Línea $numeroLinea\n";
                $bloqueActual = false;
            }
            $nivelAnidamiento--;
        } elseif ($nivelAnidamiento > 0 && $bloqueActual && !empty($linea)) {
            echo "Código ejecutable dentro del bloque if (Nivel $nivelAnidamiento) - Línea $numeroLinea: $linea\n";
        }
    }

    echo "\nTotal de líneas en el programa: $totalLineas\n";

    if (!$bloquesEncontrados) {
        echo "No se encontraron bloques if anidados en el código.\n";
    } elseif ($nivelAnidamiento > 0) {
        echo "Advertencia: Bloques if anidados sin cerrar correctamente.\n";
    }
}

// Ejemplo de uso
$codigo = '
if ($condicion1) {
    echo "Bloque 1";
}';
echo "<pre>";
versoftly_analyzer($codigo);
echo "<pre>";
?>
