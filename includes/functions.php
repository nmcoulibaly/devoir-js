<?php

function forceLogin() {
    
    $userId = null;
    if(isset($_SESSION['user_id'])){
        $userId = $_SESSION['user_id'] != null;
    }
    if ($userId) {
        // User connected
    } else {
        // User not connected, redirect to login.php
        header("Location: /universite/login.php");
        exit;
    }
}

function forceDahsboard() {
    $userId = null;
    if(isset($_SESSION['user_id'])){
        $userId = $_SESSION['user_id'] != null;
    }
   
    if ($userId) {
        // User connected
        header("Location: /universite/dashboard.php");
        exit;
    } else {
        // User not connected, redirect to login.php
    }
}