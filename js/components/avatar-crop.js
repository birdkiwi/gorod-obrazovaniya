(function( $ ) {
    $.fn.avatarCrop = function() {
        this.each(function() {
            var imageInput = '';
            var cropper = $(this).croppie({
                viewport: {
                    width: 300,
                    height: 300
                }
            });
        });
    }
}( jQuery ));