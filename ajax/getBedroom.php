<?php
require_once "../includes/config.php";

$sql = "select * FROM chambres";
$req = $conn->prepare($sql);
$req->execute();
$result = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result, JSON_PRETTY_PRINT);
