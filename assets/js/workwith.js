$(document).ready(function () {
    // Client side for validation
    $('#workWithSubmit').click(function (e) { 
        e.preventDefault();
        let valid = true; //To be made false once a requirement is not met

        let name = $('#name').val();
        let email = $('#email').val();
        let phone_number = $('#phone_number').val();
        let subject = $('#subject').val();
        let message = $('#message').val();

        const regex_email = new RegExp("([a-z0-9_\.-]+\@[\da-z-]+\.[a-z\.]{2,6})");

        // Add spinner
        $("#workWithSubmit").html(
            '<i class="fa fa-circle-notch fa-spin" aria-hidden="true"></i>'
        );
        
        // Check if email entered is correct
        if (!regex_email.test( email )) {
            valid = false;
            $('#submitResponse').removeClass('text-success');
            $('#submitResponse').addClass('text-danger');
            $('#submitResponse').html('<i class="fas fa-exclamation-circle"></i> Email entered is not correct');
            $('#workWithSubmit').text('Submit');
        }

        // Check if phone number is correct
        if (!isNaN(phone_number)) {
            valid = false;
            $('#submitResponse').removeClass('text-success');
            $('#submitResponse').addClass('text-danger');
            $('#submitResponse').html('<i class="fas fa-exclamation-circle"></i> Phone number entered is not correct');
            $('#workWithSubmit').text('Submit');
        }
        
        // Check if any input is empty
        $("#workWithForm input").each(function(){
            if ($(this).val() == '') {
                valid = false;
                $('#submitResponse').removeClass('text-success');
                $('#submitResponse').addClass('text-danger');
                $('#submitResponse').html('<i class="fas fa-exclamation-circle"></i> Complete all fields');
                $('#workWithSubmit').text('Submit');
            }
        });

        if (valid) {
            //$('#contactForm').submit();
            $('#submitResponse').removeClass('text-danger');
            $('#submitResponse').addClass('text-success');
            $('#submitResponse').html('<i class="fas fa-check-circle"></i> Thank you for contacting us');
        }
    });
});