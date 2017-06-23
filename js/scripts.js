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

    $('.js-events-swiper').each(function () {
        $swiper = $(this);

        new Swiper($swiper, {
            loop: true,
            pagination: $swiper.find('.swiper-pagination'),
            paginationClickable: true
        });
    });

    $('.js-flip-clock').each(function () {
        var timeLeft = +$(this).data('time-left');

        $(this).FlipClock(timeLeft, {
            countdown: true,
            clockFace: 'HourlyCounter',
            callbacks: {
                interval: function() {
                    $('span.seconds').next().next().remove();
                    $('span.seconds').next().remove();
                    $('span.seconds').remove();
                }
            },
            language: 'russian'
        });
    });

    $('[data-masked-input]').maskedinput();
    $('[data-validate]').formValidation();
    $('.js-input-file').inputFile();
    $('.js-input-photo').inputPhoto();
    $('.js-datepicker').datePicker();
    $('.js-input-region-city').inputRegionCity();
    $('.js-avatar-crop').avatarCrop();
    $('[data-form-ajax]').formAjax();

    $('.js-smooth-scroll').click(function() {
        history.pushState(null, null, $(this).attr('href'));
        var elementId = window.location.hash;
        if ($(elementId).length > 0) {
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top - 10
            }, 700);
        } else {
            //console.log('no element!');
        }
        return false;
    });
});

