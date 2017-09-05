function hashChange(hashVal) {
    var hash = hashVal ? hashVal : location.hash.replace('#', ''),
        $schemeBlock = $('#exhibition-scheme-svg'),
        $header = $('.main-header-fixed'),
        $hashEls = $('[data-exhibition-scheme-id="' + hash + '"]');

    $('[data-exhibition-scheme-id]').removeClass('highlight');

    if (hash && $hashEls.length) {
        $hashEls.addClass('highlight');
        $schemeBlock.find('[data-exhibition-scheme-id="' + hash + '"]');

        window.svgPan.reset();
    }

    /*$('html, body').animate({
        scrollTop: $schemeBlock.offset().top - $header.outerHeight() - 10
    }, 1000);*/
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

    $('[data-exhibition-scheme-id]').click(function(e){
        var hashVal = $(this).data('exhibition-scheme-id');

        if (history.pushState) {
            history.pushState(null, null, '#' + hashVal);
        }

        hashChange(hashVal);

        e.preventDefault();
    });

    var eventsHandler = {
        haltEventListeners: ['touchstart', 'touchend', 'touchmove', 'touchleave', 'touchcancel']
        , init: function(options) {
            var instance = options.instance
                , initialScale = 1
                , pannedX = 0
                , pannedY = 0;

            // Init Hammer
            // Listen only for pointer and touch events
            this.hammer = new Hammer(options.svgElement, {
                inputClass: Hammer.SUPPORT_POINTER_EVENTS ? Hammer.PointerEventInput : Hammer.TouchInput
            });

            // Enable pinch
            this.hammer.get('pinch').set({enable: true});

            // Handle double tap
            this.hammer.on('doubletap', function(ev){
                instance.zoomIn()
            });

            // Handle pan
            this.hammer.on('panstart panmove', function(ev){
                // On pan start reset panned variables
                if (ev.type === 'panstart') {
                    pannedX = 0;
                    pannedY = 0;
                }

                // Pan only the difference
                instance.panBy({x: ev.deltaX - pannedX, y: ev.deltaY - pannedY});
                pannedX = ev.deltaX;
                pannedY = ev.deltaY;
            });

            // Handle pinch
            this.hammer.on('pinchstart pinchmove', function(ev){
                // On pinch start remember initial zoom
                if (ev.type === 'pinchstart') {
                    initialScale = instance.getZoom();
                    instance.zoom(initialScale * ev.scale)
                }

                instance.zoom(initialScale * ev.scale)

            });

            // Prevent moving the page on some devices when panning over SVG
            options.svgElement.addEventListener('touchmove', function(e){ e.preventDefault(); });
        }

        , destroy: function(){
            this.hammer.destroy()
        }
    };

    window.svgPan = svgPanZoom('#exhibition-scheme-svg svg', {
        zoomEnabled: true,
        controlIconsEnabled: true,
        fit: true,
        center: true,
        customEventsHandler: eventsHandler
    });

    hashChange();
});
