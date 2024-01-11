<?php

require_once "VERSOFT/Controladores/getController_obtener/Obtener.php";

$table = explode("?",array_filter(explode("/",$_SERVER['REQUEST_URI']))[1])[0];

$select = $_GET['select'] ?? "*";
$orderBy = $_GET['orderBy'] ?? null;
$orderMode = $_GET['orderMode'] ?? null;
$startAt = $_GET['startAt'] ?? null;
$endAt = $_GET['endAt'] ?? null;

//Peticion get con filtro
if (isset($_GET['linkTo']) && isset($_GET['equalTo'])) {
    $response = Obtener::getDataFilter($table,$select,$_GET['linkTo'],$_GET['equalTo'],
    $orderBy,$orderMode,$startAt,$endAt
);
} else {
    //peticion get sin filtro
    $response = Obtener::getData($table,$select,$orderBy,$orderMode,$startAt,$endAt);
}

$json = [
    "estatus" => 200,
    "filas" => count($response),
    "response" => $response
];

echo json_encode($json,http_response_code($json['estatus']));