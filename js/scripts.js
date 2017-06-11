$(document).ready(function () {
    var partnersSwipe = new Swiper('.js-partners-swiper', {
        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

    var speakersSwipe = new Swiper('.js-speakers-swiper', {
        loop: true,
        prevButton: '.js-speakers-block-button-prev',
        nextButton: '.js-speakers-block-button-next'
    })
});