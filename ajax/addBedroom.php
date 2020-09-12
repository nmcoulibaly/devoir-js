<?php

require_once "../includes/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');
    extract($_POST);
    $return = [];
    $bedroom = $conn->prepare("INSERT INTO chambres (numero, typec, batiment_id) VALUES (:numero,:typec,:batiment_id)");
    $bedroom->bindParam(':numero', $numeroValue, PDO::PARAM_STR);
    $bedroom->bindParam(':typec', $typeValue, PDO::PARAM_INT);
    $bedroom->bindParam(':batiment_id', $batimentValue, PDO::PARAM_INT);
    $bedroom->execute();
    $bedroomId = $conn->lastInsertId();
    $return['bedroom_id'] = $bedroomId;
    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
} else {
    exit('Invalid URL');
}
