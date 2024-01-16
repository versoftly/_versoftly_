<?php

function analizarCodigo($codigo) {
    $lineas = explode("\n", $codigo);
    $nivelAnidamiento = 0;
    $bloqueActual = false;

    foreach ($lineas as $numeroLinea => $linea) {
        // Eliminar espacios en blanco al inicio y final de la línea
        $linea = trim($linea);

        if (strpos($linea, 'if') === 0 || strpos($linea, 'elseif') === 0) {
            $nivelAnidamiento++;
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

    if ($nivelAnidamiento === 0) {
        echo "No se encontraron bloques if anidados en el código.\n";
    } else {
        echo "Error: Bloques if anidados sin cerrar correctamente.\n";
    }
}

// Ejemplo de uso
$codigo = '
if ($condicion1) {
    echo "Bloque 1";
    
    if ($condicion2) {
        echo "Bloque 2";
    }
} elseif ($condicion3) {
    echo "Bloque elseif";
} else {
    echo "Bloque else";
}
';
echo "<pre>";
analizarCodigo($codigo);
echo "</pre>";
?>
