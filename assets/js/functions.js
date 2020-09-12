const loadBuildingTable = function (id) {
    $.ajax({
        type: 'GET',
        url: 'http://localhost:82/universite/ajax/getBuilding.php',
        dataType: 'json',
        success: function (data) {

            let tbody = $(`#${id} tbody`);
            let select = $('#batiment_id');
            let option = "";
            let tr = "";

            data.forEach(element => {
                tr += "<tr>";
                tr += "<td>" + element.numero + "</td>";
                tr += "<td>" + element.nom + "</td>";
                tr += "</tr>";
                option += "<option value='" + element.id + "'>" + element.nom + "</option>";
            });

            tbody.html(tr);
            console.log(option);

            select.html(option);
        },
        error: function () {
            console.log("Erreur");
        }

    });
}

const loadBedroomTable = function (id) {
    $.ajax({
        type: 'GET',
        url: 'http://localhost:82/universite/ajax/getBedroom.php',
        dataType: 'json',
        success: function (data) {

            let tbody = $(`#${id} tbody`);
            let tr = "";

            data.forEach(element => {
                tr += "<tr>";
                tr += "<td>" + element.numero + "</td>";
                tr += "<td>" + element.typec + "</td>";
                tr += "<td>" + element.batiment_id + "</td>";
                tr += "</tr>";
            });
            tbody.html(tr);
        },
        error: function () {
            console.log("Erreur");
        }

    });
}
const loadStudentTable = function (id) {
    $.ajax({
        type: 'GET',
        url: 'http://localhost:82/universite/ajax/getStudent.php',
        dataType: 'json',
        success: function (data) {

            let tbody = $(`#${id} tbody`);
            let tr = "";

            data.forEach(element => {
                tr += "<tr>";
                tr += "<td>" + element.matricule + "</td>";
                tr += "<td>" + element.nom + "</td>";
                tr += "<td>" + element.prenom + "</td>";
                tr += "<td>" + element.email + "</td>";
                tr += "<td>" + element.phone + "</td>";
                tr += "<td>" + element.date_naiss + "</td>";
                tr += "<td>" + element.type_bourse + "</td>";
                tr += "<td>" + element.adresse + "</td>";
                tr += "<td>" + element.chambre_id + "</td>";


                tr += "</tr>";
            });
            tbody.html(tr);
        },
        error: function () {
            console.log("Erreur");
        }

    });
}

const saveBuilding = function (event) {
    event.preventDefault();

    const nameValue = $("#nameBuilding").val();

    $.ajax({
            method: "POST",
            url: "http://localhost:82/universite/ajax/addBuilding.php",
            data: {
                nameValue
            }
        })
        .done(function (data) {
            loadBuildingTable();
        });
}
const saveBedroom = function (event) {
    event.preventDefault();

    const numeroValue = $("#numero").val();
    const typeValue = $("input[name='typeChambre']:checked").val();
    const batimentValue = $("#batiment_id").val();

    $.ajax({
            method: "POST",
            url: "http://localhost:82/universite/ajax/addBedroom.php",
            data: {
                numeroValue,
                typeValue,
                batimentValue
            }
        })
        .done(function (data) {
            loadBedroomTable();
        });
}