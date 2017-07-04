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
});
