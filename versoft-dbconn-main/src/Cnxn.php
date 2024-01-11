<?php
namespace Versoft\Dbconexion;
//Conexion
class Cnxn {
//conectar
    public static function cntr ($cnxn) {

        try {
    
            $conexion = new \PDO (
                "mysql:host=".$cnxn['server'].";dbname=".$cnxn['dbname'],
                $cnxn['user'],$cnxn['pass']
            );
    
            $conexion->exec("set names utf8");
    
        } catch (PDOException $e) {
    
            die ("Error : ".$e->getMessage());
    
        }
    
        return $conexion;
    
    }

}