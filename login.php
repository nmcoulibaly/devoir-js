<?php

require_once "includes/config.php";

forceDahsboard();

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
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">

          <h1 class="py-5 text-center">Gestion chambres etudiants</h1>

          <form id="form_login" class="form p-5 shadow bg-white">

            <h3 class="text-center text-uppercase">S'authentifier</h3>

            <div class="form-group mb-4">
              <label for="email">Email: </label>
              <input type="email" autofocus id="email" autocomplete="email" class="form-control">
            </div>

            <div class="form-group mb-4">
              <label for="passwd">Password: </label>
              <input type="password" id="passwd" autocomplete="new-password" class="form-control">
            </div>
              <button class="btn btn-success text-uppercase" type="submit">Se connecter</button>
           
              <div class="mt-4 alert alert-danger" id="box_error"></div>
          </form>

        </div>
      </div>

    </div>
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