$(document).ready(function () {
    $('#searchToggler').click(function (e) { 
        e.preventDefault();
        $('.form .form-control').removeClass('w-25');
        $('.form').removeClass('d-none');
        $('.form .form-control').addClass('w-100');
        $('.form').addClass('d-flex');
    });
});