$(document).ready(function () {
    $('.product-carousel').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        nav:false,
        dots:true,
        //navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
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

    $(".product-images").on("click", function(){
        let src = $(this).attr('src');
        $('.modal-photo img').attr('src', src);
        $(".modal-photo").addClass("modal-active");
    });

    $(".modal-photo .close-btn").on("click", function() {
        $(".modal-photo").removeClass("modal-active");
    });
});