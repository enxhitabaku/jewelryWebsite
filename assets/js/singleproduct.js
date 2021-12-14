$(document).ready(function () {
    $('.product-carousel').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        nav:false,
        dots:true,
        dotsEach:true,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            993:{
                items:1,
                nav:false,
                loop:false,
                mouseDrag: false
            }
        }
    })
    
    // Alert close
    $('.close').click(function (e) { 
        e.preventDefault();
        $('.wishlist-alert').addClass('d-none');
    });

    // This method listens to sliding and afterwards sets corresponding category to active
    $('.controls-theme .controls-dot').on('click', function(e) {
        jQuery('.product-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);
        $('.controls-theme .controls-dot').removeClass('active');
        $(this).addClass('active');
    });
    
    // Modal Photo Zoom src atribute 
    $(".product-images").on("click", function(){
        let src = $(this).attr('src');
        $('.modal-photo img').attr('src', src);
        $(".modal-photo").addClass("modal-active");
    });

    // Modal Photo Zoom on close btn close
    $(".modal-photo .close-btn").on("click", function() {
        $(".modal-photo").removeClass("modal-active");
    });
    
    // Modal Message show - to be inserted after backend
    // $('body').click(function (e) { 
    //     e.preventDefault();
    //     $('.wishlist-alert').removeClass('d-none');
    //     $(".wishlist-alert")
    //     .fadeTo(4000, 50)
    //     .slideUp(1000, function () {
    //     $(".wishlist-alert").slideUp(800);
    //     });
    // });
    
});