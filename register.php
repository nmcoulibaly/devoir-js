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

          <h1 class="py-2 text-center">Gestion chambres etudiants</h1>

          <form id="form_register" class="form p-5 shadow bg-white">

            <h3 class="text-center text-uppercase">Creer un compte</h3>

            <div class="form-group mb-4">
              <label for="email">Nom complet: </label>
              <input type="text" autofocus id="name" autocomplete="name" class="form-control">
            </div>

            <div class="form-group mb-4">
              <label for="email">Email: </label>
              <input type="email" id="email" autocomplete="email" class="form-control">
            </div>

            <div class="form-group mb-4">
              <label for="passwd">Mot de passe: </label>
              <input type="password" id="passwd" class="form-control" autocomplete="new-password">
            </div>

            <div class="form-group mb-4">
              <label for="passwd">Confirmation mot de passe: </label>
              <input type="password" id="passwd_confirm" class="form-control" autocomplete="new-password">
            </div>

            <button class="btn btn-success text-uppercase" type="submit">Creer un compte</button>

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
  <script src="assets/js/functions.js"></script>

  <script src="assets/js/scripts.js"></script>
</body>

</html>