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
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-12">
          <div class="row">
            <div class="col-md-4 col-12 mb-4 mb-md-0">
              <button class="w-100 btn btn-primary shadow text-white" id="addBuilding" data-toggle="modal" data-target="#buildingModal" type="button">Ajouter un batiment</button>
            </div>
            <div class="col-md-4 col-12 mb-4 mb-md-0">
              <button class="w-100 btn btn-secondary shadow text-white" id="addBedroom" data-toggle="modal" data-target="#bedroomModal" type="button">Ajouter une chambre</button>
            </div>
            <div class="col-md-4 col-12 mb-4 mb-md-0">
              <button class="w-100 btn btn-success shadow text-white" id="addStudent" data-toggle="modal" data-target="#studentModal" type="button">Ajouter un etudiant</button>

            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-5">
        <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Batiments</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Chambres</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Etudiants</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table id="tBuilding" class="table table-bordered table-striped table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>Numero</th>
                  <th>Nom</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table id="tBedroom" class="table table-bordered table-striped table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>Numero</th>
                  <th>Type</th>
                  <th>ID Batiment</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <table id="tStudent" class="table table-bordered table-striped table-sm">
              <thead class="thead-dark">
                <tr>
                  <th>Matricule</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date de Naissance</th>
                  <th>Type Bourse</th>
                  <th>Adresse</th>
                  <th>ID Chambre</th>


                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="buildingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajout Batiment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nameBuilding">Nom</label>
            <input type="text" class="form-control" id="nameBuilding">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary" id="saveBuilding">Enregistrer</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="bedroomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajout Bedrooms</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="numero">Numero</label>
            <input type="text" class="form-control" id="numero">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="typeChambre" id="exampleRadios1" value="1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Individuel
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="typeChambre" id="exampleRadios2" value="2">
            <label class="form-check-label" for="exampleRadios2">
              A deux
            </label>
          </div>
          <div class="form-group">
            <label for="batiment_id">Batiment ID</label>
            <select class="form-control" id="batiment_id">
              <option value="1">Batiment A</option>

            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary" id="saveBedroom">Enregistrer</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ajout Students</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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