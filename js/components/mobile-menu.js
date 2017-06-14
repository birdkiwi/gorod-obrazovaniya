$(document).ready(function () {
    $('.js-mobile-menu-toggle').click(function () {
        if ($(this).siblings('ul').hasClass('active')) {
            $(this).removeClass('active');
            $(this).siblings('ul').removeClass('active');
        } else {
            $(this).siblings('ul').addClass('active');
            $(this).addClass('active');
        }

        return false;
    });
});