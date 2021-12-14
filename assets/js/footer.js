$(document).ready(function () {
    // Footer subscription email validation
    $('#footerSubmit').click(function (e) { 
        e.preventDefault();
        let valid = true;
        const regex_email = new RegExp("([a-z0-9_\.-]+\@[\da-z-]+\.[a-z\.]{2,6})");
        let email = $('#footerEmail').val();

         // Add spinner
         $("#footerSubmit").html(
            '<i class="fa fa-circle-notch fa-spin" aria-hidden="true"></i>'
        );

        if (email == '' || !regex_email.test( email )) {
            valid = false;
            $('#footerResponse').removeClass('text-success');
            $('#footerResponse').addClass('text-danger');
            $('#footerResponse').html('<i class="fas fa-exclamation-circle"></i> Email entered is not correct');
            $('#footerSubmit').html('<i class="fas fa-paper-plane"></i>');
        }
        if (valid) {
            $('#footerResponse').removeClass('text-danger');
            $('#footerResponse').addClass('text-success');
            $('#footerResponse').html('<i class="fas fa-check-circle"></i> Thank you for registering');
        }
    });
});