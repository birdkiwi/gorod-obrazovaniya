$(document).ready(function () {
    var partnersBlockSwipe = new Swiper('.js-partners-swiper', {
        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

    var speakersBlockSwipe = new Swiper('.js-speakers-swiper', {
        loop: true,
        prevButton: '.js-speakers-block-button-prev',
        nextButton: '.js-speakers-block-button-next'
    });

    var newsBlockSwipe = new Swiper('.js-news-swiper', {
        loop: true,
        prevButton: '.js-news-block-button-prev',
        nextButton: '.js-news-block-button-next'
    })
});