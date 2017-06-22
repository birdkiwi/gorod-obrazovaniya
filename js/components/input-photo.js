(function( $ ) {
    $.fn.inputPhoto = function() {
        return this.each(function() {
            var fileInput = $(this)[0],
                $formControl = $(this).closest('.form-control-photo'),
                $fileDisplayArea = $(this).siblings('.form-control-photo-area'),
                $notificationsArea = $(this).siblings('.form-control-photo-notify');

            fileInput.addEventListener('change', function(e) {
                var file = fileInput.files[0];
                var imageType = /image.*/;

                if (file.type.match(imageType)) {
                    $formControl.removeClass('is-with-error');
                    $formControl.addClass('is-with-photo');

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $fileDisplayArea.html('');

                        var img = new Image();
                        img.src = reader.result;

                        $fileDisplayArea.append(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    $formControl.addClass('is-with-error');
                    $notificationsArea.addClass('active').html("Недопустимый формат файла!");
                }
            });
        });
    };
}( jQuery ));
