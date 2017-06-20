$(document).ready(function () {
    var $eventsContent = $('.js-events-block-content');

    $('.js-events-block-filter').click(function () {
        var $el = $(this);
        var link = $el.attr('href');

        if (!$el.hasClass('active')) {

            $eventsContent.spin('large', '#000');

            $.ajax(link, {
                method: 'GET',
                cache: false
            }).done(function (data) {
                $('.js-events-block-filter').removeClass('active');
                $el.addClass('active');
                $eventsContent.html(data);
            }).fail(function (jqXHR, textStatus, errorThrown) {
                alert('Ошибка загрузки данных. Пожалуйста, попробуйте ещё раз.');
                console.log(jqXHR);
                console.log(errorThrown);
            }).always(function () {
                $eventsContent.spin(false);
            });

        }

        return false;
    });
});