function initSideModalWrapper(classNames) {
    var $modalWrapper = $(
        '<div class="side-modal-overlay">' +
            '<div class="side-modal ' + classNames + '">' +
                '<a href="#" class="side-modal-close" data-side-modal-close></a>' +
                '<div class="side-modal-overflow">' +
                '</div>' +
            '</div>' +
        '</div>'
    );

    var $overlay = $('body').children('.side-modal-overlay');

    if (!$overlay.length) {
        $('body').append($modalWrapper);
    } else {
        $overlay.find('.side-modal').removeClass().addClass('side-modal ' + classNames);
        $overlay.find('.side-modal-overflow').html('');
    }

    return $('body').children('.side-modal-overlay');
}

function initSideModal(content, classNames) {
    var $wrapper = initSideModalWrapper(classNames);
    $wrapper.find('.side-modal-overflow').html(content);
    $wrapper.find('[data-maskedinput]').maskedinput();
    $wrapper.find('[data-validate]').formValidation();
    $wrapper.find('.js-input-file').inputFile();
    $wrapper.find('.js-input-photo').inputPhoto();

    setTimeout(function () {
        $wrapper.addClass('active');
        $(document).on('click', 'body', hide);
    }, 200);

    var hide = function(e) {
        if ( !$(e.target).closest('.side-modal').length && !$(e.target).is('input, label') ) {
            $wrapper.removeClass('active');
            $(document).off('click', 'body', hide);
        }
    };

    $wrapper.find('[data-side-modal-close]').click(function () {
        $(document).off('click', 'body', hide);
        $wrapper.removeClass('active');
        return false;
    });
}

$(document).on('click', '[data-side-modal]', function (e) {
    var url = $(this).attr('href'),
        modalContentSelector = $(this).data('side-modal'),
        classNames = $(this).data('side-modal-class');

    if (modalContentSelector) {
        $modalContent = $(modalContentSelector).clone();
        initSideModal($modalContent, classNames);
    } else {
        $('body').spin('large', '#000');

        $.ajax(url, {
            method: 'GET',
            cache: false
        }).done(function (data) {
            $modalContent = data;
            initSideModal($modalContent, classNames);
        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert('Ошибка загрузки данных. Пожалуйста, попробуйте перезагрузить страницу.');
            console.log(jqXHR);
            console.log(errorThrown);
        }).always(function () {
            $('body').spin(false);
        });
    }

    return false;
});