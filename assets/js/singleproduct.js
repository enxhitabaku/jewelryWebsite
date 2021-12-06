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

    // This method listens to sliding and afterwards sets corresponding category to active
    $('.controls-theme .controls-dot').on('click', function(){
        $('.controls-theme .controls-dot').removeClass('active');
        $(this).addClass('active');
    });

    $('.controls-theme .controls-dot').on('click', function(e) {
        jQuery('.product-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);
    });
    


    $(".product-images").on("click", function(){
        let src = $(this).attr('src');
        $('.modal-photo img').attr('src', src);
        $(".modal-photo").addClass("modal-active");
    });

    $(".modal-photo .close-btn").on("click", function() {
        $(".modal-photo").removeClass("modal-active");
    });
});