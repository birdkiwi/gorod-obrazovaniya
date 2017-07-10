(function( $ ) {
    $.validator.addMethod("dateRange", function(value, el, params) {
        try {
            var dateFormat = 'YYYY.MM.DD',
                dateRange = params.split(','),
                dateFrom = dateRange[0].split('.').reverse(),
                timestampFrom = moment(dateFrom, dateFormat).unix(),
                dateTo = dateRange[1].split('.').reverse(),
                timestampTo = moment(dateTo, dateFormat).unix(),
                dateValue = value.split('.').reverse(),
                timestampValue = moment(dateValue, dateFormat).unix();

            return (timestampFrom <= timestampValue && timestampValue <= timestampTo);
        } catch(e) {
            console.log(e);
            return false;
        }
    });

    $.validator.methods.email = function( value, element ) {
        return this.optional(element) || /.+@.+\..{2,}/i.test(value);
    };

    $.fn.formValidation = function() {
        this.each(function() {
            $(this).validate({
                errorPlacement: function(error, element) {},
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').find('.form-label').addClass('form-label-error').removeClass('form-label-valid');
                    $(element).closest('.form-control').addClass(errorClass).removeClass(validClass);
                    $(element).addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').find('.form-label').removeClass('form-label-error').addClass('form-label-valid');
                    $(element).closest('.form-control').removeClass(errorClass).addClass(validClass);
                    $(element).removeClass(errorClass).addClass(validClass);
                }
            });
        });
    };
}( jQuery ));