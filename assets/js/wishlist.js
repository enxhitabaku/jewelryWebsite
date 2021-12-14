$(document).ready(function () {

    $('.close').click(function (e) { 
        e.preventDefault();
        $('.wishlist-alert').addClass('d-none');
    });

    $('.remove-button').one('click', function (e) { 
        e.preventDefault();
        let product_id = this.id.substring(6, 9)
        let wishlist_nr = parseInt($('#wishlistNumber').text().substring(1,2));

        // Re set wishlist number of products
        wishlist_nr--;
        if (wishlist_nr === 0) {
            $('#wishlistNumber').text('');
            $('#emptyWishlist').removeClass('d-none');
        } else {
            $('#wishlistNumber').text('('+wishlist_nr+')');
        }

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