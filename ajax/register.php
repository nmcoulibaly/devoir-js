<?php

require_once "../includes/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');
    extract($_POST);
    $return = [];

    $findUser = $conn->prepare("SELECT id FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    if ($findUser->rowCount() == 1) {
        // User exist
        $return['error'] = 'Vous avez deja un compte';
        $return['is_logged_in'] = false;

    } else {
        // User doesn't exist
        // Permet de hacher le mot de passe
        $password = password_hash($password, PASSWORD_DEFAULT);
        $addUser = $conn->prepare("INSERT INTO users(nom, email, passwd) VALUES(:name, LOWER(:email), :password)");
        $addUser->bindParam(':name', $name, PDO::PARAM_STR);
        $addUser->bindParam(':email', $email, PDO::PARAM_STR);
        $addUser->bindParam(':password', $password, PDO::PARAM_STR);
        $addUser->execute();

        $userId = $conn->lastInsertId();
        $_SESSION['user_id'] = (int) $userId;
        $return['redirect'] = 'dashboard.php?message=Welcome';
        $return['is_logged_in'] = true;

    }

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
} else {
    exit('Invalid URL');
}