<?php

function conectar ($conexion) {

    try {

        $conexion = new PDO (
            "mysql:host=".$conexion['server'].";dbname=".$conexion['dbname'],
            $conexion['user'],$conexion['pass']
        );

        $conexion->exec("set names utf8");

    } catch (PDOException $e) {

        die ("Error : ".$e->getMessage());

    }

    return $conexion;

}