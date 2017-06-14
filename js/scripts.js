$(document).ready(function () {
    var sponsorsBlockSwipe = new Swiper('.js-sponsors-swiper', {
        loop: true,
        pagination: '.js-sponsors-swiper .swiper-pagination',
        paginationClickable: true
    });

    var speakersBlockSwipe = new Swiper('.js-speakers-swiper', {
        loop: true,
        prevButton: '.js-speakers-block-button-prev',
        nextButton: '.js-speakers-block-button-next',
        pagination: '.js-speakers-swiper .swiper-pagination',
        paginationClickable: true
    });

    var newsBlockSwipe = new Swiper('.js-news-swiper', {
        loop: true,
        prevButton: '.js-news-block-button-prev',
        nextButton: '.js-news-block-button-next',
        pagination: '.js-news-swiper .swiper-pagination',
        paginationClickable: true
    });
});