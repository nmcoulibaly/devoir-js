<?php

function forceLogin() {
    if ($_SESSION['user_id']) {
        // User connected
    } else {
        // User not connected, redirect to login.php
        header("Location: /universite/login.php");
        exit;
    }
}

function forceDahsboard() {
    if ($_SESSION['user_id']) {
        // User connected
        header("Location: /universite/dashboard.php");
        exit;
    } else {
        // User not connected, redirect to login.php
    }
}