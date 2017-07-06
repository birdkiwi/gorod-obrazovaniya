$.validator.addMethod("dateRange", function(value, element, params) {
    try {
        var date = new Date(value);
        if (date >= params.from && date <= params.to) {
            return true;
        }
    } catch (e) {}
    return false;
}, 'message');

var birthFromDate = new Date("2017-02-01");
var birthToDate = new Date("2017-12-31");

$.validator.addClassRules({
    birthdateValidate: {
        dateRange: {
            from: birthFromDate,
            to: birthToDate
        }
    }
});

(function( $ ) {
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