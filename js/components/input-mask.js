(function( $ ) {
    $.fn.maskedinput = function() {
        this.each(function() {
            var mask = $(this).data('maskedinput');
            $(this).mask(mask);
        });
    };
}( jQuery ));