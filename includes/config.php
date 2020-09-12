<?php

// Allow errors
error_reporting(-1);
ini_set('display_errors', 'On');

session_start();

require_once "functions.php";
require_once 'DB.php';
$conn = DB::getConnection();
