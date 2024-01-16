<?php

class GenericCRUD {
    private $conexion;

    public function __construct($host, $usuario, $contrasena, $baseDatos) {
        // Establecer la conexión a la base de datos
        $this->conexion = new mysqli($host, $usuario, $contrasena, $baseDatos);

        // Verificar si hay errores en la conexión
        if ($this->conexion->connect_error) {
            die("Error en la conexión a la base de datos: " . $this->conexion->connect_error);
        }
    }

    public function crear($tabla, $datos) {
        // Crear una nueva fila en la tabla
        $columnas = implode(", ", array_keys($datos));
        $valores = "'" . implode("', '", array_values($datos)) . "'";
        $sql = "INSERT INTO $tabla ($columnas) VALUES ($valores)";

        return $this->ejecutarConsulta($sql);
    }

    public function leer($tabla, $condiciones = '') {
        // Leer datos de la tabla con condiciones opcionales
        $sql = "SELECT * FROM $tabla";
        if (!empty($condiciones)) {
            $sql .= " WHERE $condiciones";
        }

        return $this->ejecutarConsulta($sql);
    }

    public function actualizar($tabla, $datos, $condiciones) {
        // Actualizar fila(s) en la tabla con condiciones
        $actualizaciones = '';
        foreach ($datos as $columna => $valor) {
            $actualizaciones .= "$columna = '$valor', ";
        }
        $actualizaciones = rtrim($actualizaciones, ', ');

        $sql = "UPDATE $tabla SET $actualizaciones WHERE $condiciones";

        return $this->ejecutarConsulta($sql);
    }

    public function eliminar($tabla, $condiciones) {
        // Eliminar fila(s) de la tabla con condiciones
        $sql = "DELETE FROM $tabla WHERE $condiciones";

        return $this->ejecutarConsulta($sql);
    }

    private function ejecutarConsulta($sql) {
        // Ejecutar la consulta SQL
        $resultado = $this->conexion->query($sql);

        // Verificar si hay errores en la consulta
        if (!$resultado) {
            die("Error en la consulta: " . $this->conexion->error);
        }

        return $resultado;
    }

    public function cerrarConexion() {
        // Cerrar la conexión a la base de datos
        $this->conexion->close();
    }
}

// Ejemplo de uso
$crud = new GenericCRUD("localhost", "usuario", "contrasena", "basededatos");

// Crear
$datosCrear = array("campo1" => "Valor1", "campo2" => "Valor2");
$crud->crear("tabla", $datosCrear);

// Leer
$datosLeer = $crud->leer("tabla", "campo1 = 'Valor1'");
while ($fila = $datosLeer->fetch_assoc()) {
    print_r($fila);
}

// Actualizar
$datosActualizar = array("campo2" => "NuevoValor");
$crud->actualizar("tabla", $datosActualizar, "campo1 = 'Valor1'");

// Eliminar
$crud->eliminar("tabla", "campo1 = 'Valor1'");

// Cerrar conexión
$crud->cerrarConexion();
?>
