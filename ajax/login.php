<?php

require_once "../includes/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');
    extract($_POST);
    $return = [];

    $findUser = $conn->prepare("SELECT id FROM users WHERE email = LOWER(:email) AND passwd = :password LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->bindParam(':password', $password, PDO::PARAM_STR);
    $findUser->execute();

    $addUser->$conn->prepare("INSERT INTO users(nom,email,passwd) VALUES (:name, lower(:email),:password)" );
    $addUser->bindParam(':name', $name, PDO::PARAM_STR);
    $addUser->bindParam(':email', $email, PDO::PARAM_STR);
    $addUser->bindParam(':password', $password, PDO::PARAM_STR);
    $addUser->execute();


}