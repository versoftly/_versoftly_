<?php

include_once("../data.php");
include_once("../vendor/autoload.php");

if (Versoft\Dbconexion\Cnxn::cntr($cnxn)) {
    echo "\nconexion exitosa\n";
} else {
    echo "\nerror de conexion\n";
}