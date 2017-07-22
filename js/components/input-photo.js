(function( $ ) {
    $.fn.inputPhoto = function() {
        return this.each(function() {
            var fileInput = $(this)[0],
                $formControl = $(this).closest('.form-control-photo'),
                $base64Input = $(this).siblings('.js-input-photo-base64'),
                $fileDisplayArea = $(this).siblings('.form-control-photo-area'),
                $notificationsArea = $(this).siblings('.form-control-photo-notify');

            fileInput.addEventListener('change', function(e) {
                var file = fileInput.files[0];
                var imageType = /image.*/;

                if (file.type.match(imageType)) {
                    $formControl.removeClass('is-with-error');
                    $formControl.addClass('is-with-photo');
                    $notificationsArea.removeClass('active');

                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $fileDisplayArea.html('');

                        var $uploadCrop = $fileDisplayArea.croppie({
                            enableExif: true,
                            enableOrientation: true,
                            url: reader.result,
                            viewport: {
                                width: 150,
                                height: 150
                            },
                            boundary: {
                                width: 200,
                                height: 200
                            }
                        });

                        function saveResult() {
                            $uploadCrop.croppie('result', {
                                type: 'base64'
                            }).then(function (resp) {
                                $base64Input.val(resp);
                            });
                        }

                        $uploadCrop.on('update', function (ev, data) {
                            saveResult()
                        });
                    };

                    reader.readAsDataURL(file);
                } else {
                    fileInput.value = '';
                    $formControl.removeClass('is-with-photo');
                    $formControl.addClass('is-with-error');
                    $notificationsArea.addClass('active').html('Недопустимый формат файла!');
                }
            });
        });
    };
}( jQuery ));
