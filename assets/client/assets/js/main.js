$(document).ready(function () {
    // Scroll
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 10) {
            $('.navbar').addClass('active p-3');
            $('.back-to-top').addClass('visible animate__animated animate__bounce');
            $('.back-to-top').removeClass('invisible');
        } else {
            $('.navbar').removeClass('active p-3');
            $('.back-to-top').removeClass('visible animate__animated animate__bounce');
            $('.back-to-top').addClass('invisible');
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

    let $btnberkas = $('.btn-filter');

    $btnberkas.click(function (e) {
        $('.btn-filter .btn').removeClass('active');
        e.target.classList.add('active');

        let selector = $(e.target).attr('data-filter');
        $('#tools .table-berkas').isotope({
            filter: selector
        });

        return false;
    });
});
