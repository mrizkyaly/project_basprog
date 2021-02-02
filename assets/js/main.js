$(document).ready(function () {
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 10) {
            $('.navbar').addClass('active p-3');
        } else {
            $('.navbar').removeClass('active p-3');
        }
    });
});