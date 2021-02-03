$(document).ready(function () {
    // Scroll
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 10) {
            $('.navbar').addClass('active p-3');
        } else {
            $('.navbar').removeClass('active p-3');
        }
    });

    // Filter News
    let $btns = $('.card-filter .nav-item .nav-link');

    $btns.click(function (e) {
        $('.card-filter .nav-item .nav-link').removeClass('active');
        e.target.classList.add('active');

        let selector = $(e.target).attr('data-filter');
        $('#news .list').isotope({
            filter: selector
        });

        return false;
    });
});