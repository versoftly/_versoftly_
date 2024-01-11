<?php

require_once "VERSOFT/Modelos/Conexion/conexion.php";

class Obtener_ {

    public static function getData ($table,$select,$orderBy,$orderMode,$startAt,$endAt) {

        require_once "VERSOFT/Modelos/Conexion/data/data.php";

        //sentencia sin ordenar y sin limitar
        $sql = "SELECT $select FROM $table";

        // sentencia para ordenar sin limitar
        if ($orderBy != null && $orderMode != null && $startAt == null && $endAt == null) {
            $sql = "SELECT $select FROM $table ORDER BY $orderBy $orderMode";
        }
        //sentencia para ordenar y limitar datos
        else if ($orderBy != null && $orderMode != null && $startAt != null && $endAt != null) {
            $sql = "SELECT $select FROM $table ORDER BY $orderBy $orderMode LIMIT $startAt, $endAt";
        }
        //sentencia para limitar sin ordenar
        else if ($orderBy == null && $orderMode == null && $startAt != null && $endAt != null) {
            $sql = "SELECT $select FROM $table LIMIT $startAt, $endAt";
        }

        $conex = new Conexion;

        $data = $conex->conectar($conexion)->prepare($sql);;

        $data->execute();

        return $data->fetchAll(PDO::FETCH_CLASS);

    }

    public static function getDataFilter ($table,$select,$linkTo,$equalTo,$orderBy,$orderMode
    ,$startAt,$endAt) {

        require_once "VERSOFT/Modelos/Conexion/data/data.php";

        $columnas = explode(",",$linkTo);

        $valores = explode("|",$equalTo);

        $string = "";

        if (count($columnas) > 1) {

            foreach ($columnas as $key => $value) {
                if ($key > 0) {
                    $string .= "AND ".$value." = :".$value." "; 
                }
            }

        }

        //sin ordenar y sin limitar
        $sql = "SELECT $select FROM $table WHERE $columnas[0] = :$columnas[0] $string";

        // sentencia para ordenar sin limitar
        if ($orderBy != null && $orderMode != null && $startAt == null && $endAt == null) {
            $sql = "SELECT $select FROM $table WHERE $columnas[0] = :$columnas[0] $string ORDER BY $orderBy $orderMode";
        }

        //sentencia para ordenar y limitar datos
        else if ($orderBy != null && $orderMode != null && $startAt != null && $endAt != null) {
            $sql = "SELECT $select FROM $table WHERE $columnas[0] = :$columnas[0] $string ORDER BY $orderBy $orderMode LIMIT $startAt, $endAt";
        }

        //sentencia para limitar sin ordenar
        else if ($orderBy == null && $orderMode == null && $startAt != null && $endAt != null) {
            $sql = "SELECT $select FROM $table WHERE $columnas[0] = :$columnas[0] $string LIMIT $startAt, $endAt";
        }

        $conex = new Conexion;

        $data = $conex->conectar($conexion)->prepare($sql);

        foreach($columnas  as $key => $value) {
            $data->bindParam(":".$value,$valores[$key],PDO::PARAM_STR);   
        }

        $data->execute();

        return $data->fetchAll(PDO::FETCH_CLASS);

    }

}