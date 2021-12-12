$(document).ready(function () {

    $('.close').click(function (e) { 
        e.preventDefault();
        $('.wishlist-alert').addClass('d-none');
    });

    $('.remove-button').click(function (e) { 
        e.preventDefault();
        let product_id = this.id.substring(6, 9)

        // Fade product out
        $('#row' + product_id).fadeOut();

        // Show alert message
        $('.wishlist-alert').removeClass('d-none');
        $(".wishlist-alert")
        .fadeTo(4000, 50)
        .slideUp(1000, function () {
        $(".wishlist-alert").slideUp(800);
        });
    });

});