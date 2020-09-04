<?php

require_once "includes/config.php";

forceLogin();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Universite gestion chambres etudiants</title>
</head>

<body>

  <div id="app">
    <?= 'Welcome ' . $_SESSION['user_id']; ?>
  </div>


  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Personal files -->
  <script src="assets/js/scripts.js"></script>
</body>

</html>