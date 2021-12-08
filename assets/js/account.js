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
        } else {
            $('.eye').removeClass('fa-eye-slash');
            $('.eye').addClass('fa-eye');
        }
    });
});