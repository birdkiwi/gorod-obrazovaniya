(function( $ ) {
    $.fn.formAjax = function() {
        this.each(function() {
            $(this).on('submit', function () {
                var $form = $(this),
                    url = $form.attr('action'),
                    method = $form.attr('method'),
                    formData = new FormData($form[0]),
                    formOverlay = $form.data('form-ajax-overlay'),
                    validation = $form.is('[data-validate]');

                if (validation && $form.valid()) {
                    submitForm();
                } else if (!validation) {
                    submitForm();
                }

                function showOverlay() {
                    if (formOverlay) {
                        $(formOverlay).addClass('active').spin('large', '#000');
                    } else {
                        $('body').spin('large', '#000');
                    }
                }

                function hideOverlay() {
                    $(formOverlay).removeClass('active').spin(false);
                }

                function submitForm() {
                    showOverlay();

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
                            $form.find('.js-form-messages').addClass('active').html(data.message);
                            if (data.errors) {
                                data.errors.forEach(function (error) {
                                    var $field = $('[name="' + error.name + '"]');
                                    if ($field.length) {
                                        $field.addClass('error');
                                        $field.siblings('.form-label').addClass('form-label-error');
                                        $field.siblings('.form-control-errors').addClass('active').html(error.message);
                                    }
                                });
                            }
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
                        hideOverlay();
                    });
                }

                return false;
            });
        });
    }
}( jQuery ));