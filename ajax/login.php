<?php

require_once "../includes/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');
    extract($_POST);
    $return = [];
  

    // 1- verify if email exist on DB
    $findEmail = $conn->prepare("SELECT id, passwd FROM users WHERE email = LOWER(:email) limit 1");
    $findEmail->bindParam(':email', $email, PDO::PARAM_STR);
    $findEmail->execute();
    $result = $findEmail->fetch(PDO::FETCH_OBJ);
    $userId = $result->id;
    $hash =  $result->passwd;

    if($hash){
        $compare = password_verify($password,$hash);

        if($compare){
            $_SESSION['user_id'] = (int) $userId;
            $return['redirect'] = 'dashboard.php?message=Welcome';
            $return['is_logged_in'] = true;
        }else{
            throw new Exception("Password or Email Invalid");   

        }    
    }else{
        // throw allows to trigger exception
        throw new Exception("Error");   
    }

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
}else{
    exit('Invalid URL');
}