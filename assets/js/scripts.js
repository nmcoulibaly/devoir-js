(function ($) {
    $(document).ready(function () {
        loadBuildingTable('tBuilding');
        loadBedroomTable('tBedroom');
        loadStudentTable('tStudent');

        $('#saveBuilding').on('click', function (event) {
            saveBuilding(event);
        })
        $('#saveBedroom').on('click', function (event) {
            saveBedroom(event);
        })
        // Cette partie du code s'execute des que tout le DOM a fini de charger
        $('#form_register').on('submit', function (event) {
            event.preventDefault();

            // Recuperation de l'objet qui initie l'evenement, ici $('#form_register')
            const _form = $(this);

            const dataObj = {
                // Recuperation de l'element qui a l'ID #email et qui se trouve dans _form
                name: $('#name', _form).val(),
                email: $('#email', _form).val(),
                password: $('#passwd', _form).val(),
                passwordConfirm: $('#passwd_confirm', _form).val()
            };

            const name = dataObj.name;
            const email = dataObj.email;
            const password = dataObj.password;
            const passwordConfirm = dataObj.passwordConfirm;
            // Cette notation est appele desctructuring
            // const {name, email, password, passwordConfirm} = dataObj;

            // Expressionn Regex permettant de tester si l'email est valide
            if (name.length < 6) {
                console.log(password)
                $('#name').addClass('is-invalid');
                $('#box_error').text('Le nom doit avoir au minimum 6 caracteres');
                $('#box_error').show();
            } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
                $('#email').addClass('is-invalid');
                $('#box_error').text('Email invalide');
                $('#box_error').show();
            } else if (password.length < 6) {
                console.log(password)
                $('#passwd').addClass('is-invalid');
                $('#box_error').text('Le mot de passe doit avoir au minimum 6 caracteres');
                $('#box_error').show();
            } else if (password !== passwordConfirm) {
                $('#box_error').text('Les mots de passe ne sont pas identiques');
                $('#box_error').show();
            }

            $.ajax({
                    type: 'POST',
                    url: '/universite/ajax/register.php',
                    data: dataObj,
                    dataType: 'json',
                    async: true
                })
                .done(function (data) {
                    if (data.redirect !== 'undefined') {
                        window.location = data.redirect;
                    }
                })
                .fail(function (error) {
                    console.log(error)
                })
                .always(function (data) {
                    console.log("Always")
                })

            // Vider les champs mot de passe et confirmation des la soumission du formulaire
            $('#passwd').val('')
            $('#passwd_confirm').val('')
        });


        // $('#email, #passwd, #passwd_confirm').on('focus', function () {
        //     $(this).removeClass('is-invalid')
        //     $('#box_error').hide()
        // })

        $('#form_login').on('submit', function (event) {
            event.preventDefault();

            // Recuperation de l'objet qui initie l'evenement, ici $('#form_register')
            const _form = $(this);

            const dataObj = {
                // Recuperation de l'element qui a l'ID #email et qui se trouve dans _form
                email: $('#email', _form).val(),
                password: $('#passwd', _form).val()
            };

            const name = dataObj.name;
            const email = dataObj.email;

            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
                $('#email').addClass('is-invalid');
                $('#box_error').text('Email invalide');
                $('#box_error').show();
            }

            $.ajax({
                    type: 'POST',
                    url: '/universite/ajax/login.php',
                    data: dataObj,
                    dataType: 'json',
                    async: true
                })
                .done(function (data) {
                    if (data.redirect !== 'undefined') {
                        window.location = data.redirect;
                    }
                })
                .fail(function (error) {
                    console.log(error)
                })
                .always(function (data) {
                    console.log("Always")
                })
        });

        $('#box_error').hide()
    });
})(jQuery);