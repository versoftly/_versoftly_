<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log','/var/www/tbpplab/VERSOFT/php_error_log');
error_reporting(E_ALL);

require_once "VERSOFT/Controladores/rutaPrincipal/rpController.php";

# Ruta Principal Controller
$rpc = new RPController();
# Ruta Principal function index
$rpc->index();