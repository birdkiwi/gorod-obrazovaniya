$(document).ready(function () {
    // Horizontal scroller
    baron({
        root: '.js-program-table-scroll',
        scroller: '.js-program-table-scrollable',
        bar: '.js-program-table-scrollbar',
        scrollingCls: '_scrolling',
        draggingCls: '_dragging',
        direction: 'h',
        impact: 'scroller'
    }).controls({
        track: '.js-program-table-scroll-track',
        forward: '.js-program-table-scroll-right',
        backward: '.js-program-table-scroll-left'
    });

    $('.program-table-hours').css('padding-top', $('.program-table-heading').height() + $('.program-table-scroll').height());

    function tableHeaderFixed() {
        var $tableHeading = $('.program-table-heading'),
            $scroller = $('.program-table-scroll'),
            scrollTop = $(window).scrollTop(),
            tableTopPosition = $('.js-program-table-scroll').position().top,
            headerHeight = $('.main-header').height();

        if (scrollTop > tableTopPosition - headerHeight) {
            var topPos = scrollTop - tableTopPosition + headerHeight;
            $scroller.addClass('with-shadow');
            $tableHeading.css('top', topPos);
            $scroller.css('margin-top', topPos);
        } else {
            $scroller.removeClass('with-shadow');
            $tableHeading.css('top', 0);
            $scroller.css('margin-top', 0);
        }
    }

    tableHeaderFixed();
    $(window).scroll(tableHeaderFixed);
});

