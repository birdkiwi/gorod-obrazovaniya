(function( $ ) {
    $.fn.formAjax = function() {
        this.each(function() {
            $(this).on('submit', function () {
                var $form = $(this),
                    url = $form.attr('action'),
                    method = $form.attr('method'),
                    formData = new FormData($form[0]),
                    validation = $form.is('[data-validate]');

                if (validation && $form.valid()) {
                    submitForm();
                } else if (!validation) {
                    submitForm();
                }

                function submitForm() {
                    $('body').spin('large', '#000');

                    $.ajax({
                        url: url,
                        type: method,
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: 'json'
                    }).done(function (data) {
                        if (data && data.success) {
                            $form[0].reset();
                            initSideModal(data.message, 'message-modal', false, false);
                        } else if (data && data.message) {
                            alert('Ошибка отправки данных: ' + data.message);
                        }

                        if (data && data.redirect) {
                            window.location.href = data.redirect;
                        }

                        if (data && data.reload) {
                            window.location.reload();
                        }
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        alert('Ошибка отправки данных. Пожалуйста, попробуйте ещё раз.');
                        console.log(jqXHR);
                        console.log(errorThrown);
                    }).always(function () {
                        $('body').spin(false);
                    });
                }

                return false;
            });
        });
    }
}( jQuery ));