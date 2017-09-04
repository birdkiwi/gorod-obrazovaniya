function hashChange() {
    var hash = location.hash.replace('#', ''),
        $schemeBlock = $('#exhibition-scheme-svg'),
        $header = $('.main-header-fixed'),
        $hashEls = $('[data-exhibition-scheme-id="' + hash + '"]');

    $('[data-exhibition-scheme-id]').removeClass('highlight');

    if (hash && $hashEls.length) {
        $hashEls.addClass('highlight');
        $schemeBlock.find('[data-exhibition-scheme-id="' + hash + '"]');
    }

    $('html, body').animate({
        scrollTop: $schemeBlock.offset().top - $header.outerHeight() - 10
    }, 1000);
}

$(document).ready(function () {
    baron({
        root: '.baron',
        scroller: '.baron__scroller',
        bar: '.js-exhibition-scheme-scrollbar',
        scrollingCls: '_scrolling',
        draggingCls: '_dragging'
    }).controls({
        track: '.js-exhibition-scheme-scroll-track'
    });

    hashChange();
});

window.onhashchange = hashChange;
