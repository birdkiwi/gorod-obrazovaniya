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

    if (!$('body').children('.side-modal-overlay').length) {
        $('body').append($modalWrapper);
    } else {
        $('body').children('.side-modal-overlay').find('.side-modal-overflow').html('');
    }

    return $('body').children('.side-modal-overlay');
}

function initSideModal(content, classNames) {
    var $wrapper = initSideModalWrapper(classNames);
    $wrapper.find('.side-modal-overflow').html(content);

    setTimeout(function () {
        $wrapper.addClass('active');
    }, 300);
}

$(document).on('click', '[data-side-modal]', function (e) {
    var modalContentSelector = $(this).data('side-modal'),
        $modalContent = $(modalContentSelector),
        classNames = $(this).data('side-modal-class');

    initSideModal($modalContent, classNames);

    return false;
});

$(document).on('click', '[data-side-modal-close]', function () {
    $(this).closest('.side-modal-overlay').removeClass('active');
    return false;
});