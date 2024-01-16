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

    $lineasFuente = explode("\n", $codigo);
    $lineas = explode("\n", $codigoCerrado);
    $totalLineasFuente = count($lineasFuente);
    $totalLineas = count($lineas);
    $nivelAnidamiento = 0;
    $bloqueActual = false;
    $bloquesEncontrados = false;

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
            echo "<tr><td colspan='4'>Código</td></tr>";
            echo "<tr><td colspan='2'></td><td>" . ($numeroLinea + 1) . "</td><td>$linea</td></tr>";
        }
    }

    echo "</table>";
    echo "<p>Total de líneas en el programa: $totalLineasFuente</p>";

    if (!$bloquesEncontrados) {
        echo "<p>No se encontraron bloques if anidados en el código.</p>";
    } elseif ($nivelAnidamiento > 0) {
        echo "<p>Advertencia: Bloques if anidados sin cerrar correctamente.</p>";
    }
}

// Ejemplo de uso
$codigo = '
if ($condicion1) {
    echo "Bloque 1";
}

$variable = "Ejemplo";

if ($condicion2) {
    echo "Bloque 2";
} elseif ($condicion3) {
    echo "Bloque elseif";
}

$otraVariable = "Otra cosa";
';

versoftly_analyzer($codigo);
?>
