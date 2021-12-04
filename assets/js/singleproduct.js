$(document).ready(function () {
    $('.product-carousel').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        nav:false,
        dots:true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:false
            }
        }
    })
});