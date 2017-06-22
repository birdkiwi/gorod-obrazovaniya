(function( $ ) {
    $.fn.inputFile = function() {
        return this.each(function() {
            $(this).on('focus blur change', function() {
                var filename = $(this).val();
                var title = $(this).siblings('.js-input-file-title').data('input-file-default-title');
                var subtitle = $(this).siblings('.js-input-file-subtitle');

                if (filename != '') {
                    if (filename.length > 10) {
                        filename = filename.substr(0, 10) + '...';
                    }
                    $(this).siblings('.js-input-file-title').html(filename);
                    subtitle.animate({opacity: 0}, 300);
                } else {
                    $(this).siblings('.js-input-file-title').html(title);
                    subtitle.animate({opacity: 1}, 300);
                }
            });

            $(this).on('focus', function () {
                $(this).closest('.form-control').addClass('is-focus');
            });

            $(this).on('blur', function () {
                $(this).closest('.form-control').removeClass('is-focus');
            });
        });
    };
}( jQuery ));
