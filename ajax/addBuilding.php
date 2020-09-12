<?php

require_once "../includes/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');
    extract($_POST);
    $return = [];
    $countSql = "SELECT RIGHT(CONCAT('000', MAX(id) + 1), 3) FROM batiments";

    $countBuilding = $conn->prepare("INSERT INTO batiments (numero, nom) VALUES (" + $countSql + "),:nom");
    $countBuilding->bindParam(':nom', $nameValue, PDO::PARAM_STR);
    $countBuilding->execute();
    $buildingId = $conn->lastInsertId();
    $return['building_id'] = $buildingId;

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
} else {
    exit('Invalid URL');
}
