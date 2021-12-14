$(document).ready(function () {
    $('.nav-item').click(function (e) { 
        e.preventDefault();
        $(".nav-item").each(function(){
            if ($('.nav-item').hasClass('active')) {
                $('.nav-item').removeClass('active');
            }
        })
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
    });
    $('.eye').click(function (e) { 
        e.preventDefault();
        if(!$('.eye').hasClass('fa-eye-slash')){
            $('.eye').removeClass('fa-eye');
            $('.eye').addClass('fa-eye-slash');
            $('#password').attr('type', 'text');
        } else {
            $('.eye').removeClass('fa-eye-slash');
            $('.eye').addClass('fa-eye');
            $('#password').attr('type', 'password');
        }
    });

    // Client Side validation - log in
    $('#loginButton').click(function (e) { 
        e.preventDefault();
        let valid = true;
        let email = $('#email').val();
        let password = $('#password').val();


        // Add spinner
        $("#loginButton").html(
            '<i class="fa fa-circle-notch fa-spin" aria-hidden="true"></i>'
        );

          // Check if any input is empty
          $("#loginForm .form-control").each(function(){
            if ($(this).val() == '') {
                valid = false;
                $('#loginResponse').removeClass('text-success');
                $('#loginResponse').addClass('text-danger');
                $('#loginResponse').html('<i class="fas fa-exclamation-circle"></i> Complete all fields');
                $('#loginButton').text('Log in');
            }
        });
        if (valid) {
            // proceed ajax
        }
    });

    // Client Side validation - register
    $('#registerButton').click(function (e) { 
        e.preventDefault();
        let valid = true;
        const regex_email = new RegExp("([a-z0-9_\.-]+\@[\da-z-]+\.[a-z\.]{2,6})");
        let email = $('#registerEmail').val();
        let password = $('#registerPassword').val();
        let confirmPassword = $('#confirmPassword').val();
        let state = $('#state').val();
        let name = $('#name').val();
        let surname = $('#surname').val();
        


        // Add spinner
        $("#registerButton").html(
            '<i class="fa fa-circle-notch fa-spin" aria-hidden="true"></i>'
        );

        // Check if email entered is correct
        if (!regex_email.test( email )) {
            valid = false;
            $('#registerResponse').removeClass('text-success');
            $('#registerResponse').addClass('text-danger');
            $('#registerResponse').html('<i class="fas fa-exclamation-circle"></i> Email entered is not correct');
            $('#registerButton').text('Register');
        }

        // Check if password length is right
        if (password.length < 8) {
            valid = false;
            $('#registerResponse').removeClass('text-success');
            $('#registerResponse').addClass('text-danger');
            $('#registerResponse').html('<i class="fas fa-exclamation-circle"></i> Password must not be less than 8 chars');
            $('#registerButton').text('Register');
        }

        // Check if password confirmation is the same as password 
        if (password != confirmPassword) {
            valid = false;
            $('#registerResponse').removeClass('text-success');
            $('#registerResponse').addClass('text-danger');
            $('#registerResponse').html('<i class="fas fa-exclamation-circle"></i> Passwords must be identical');
            $('#registerButton').text('Register');
        }

        // Check if any input is empty
        $("#registerForm .form-control").each(function(){
            if ($(this).val() == '') {
                valid = false;
                $('#registerResponse').removeClass('text-success');
                $('#registerResponse').addClass('text-danger');
                $('#registerResponse').html('<i class="fas fa-exclamation-circle"></i> Complete all fields');
                $('#registerButton').text('Register');
            }
        });
        if (valid) {
            // proceed ajax
            $('#registerResponse').removeClass('text-danger');
            $('#registerResponse').addClass('text-success');
            $('#registerResponse').html('<i class="fas fa-check-circle"></i> Thank you for registering');
        }
    });






    $(".field-wrapper .field-placeholder").on("click", function () {
        $(this).closest(".field-wrapper").find("input").focus();
    });
    $(".field-wrapper input").on("keyup", function () {
        var value = $.trim($(this).val());
        if (value) {
            $(this).closest(".field-wrapper").addClass("hasValue");
        } else {
            $(this).closest(".field-wrapper").removeClass("hasValue");
        }
    });
});