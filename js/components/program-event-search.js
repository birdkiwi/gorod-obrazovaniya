(function( $ ) {
    $.fn.programEventSearch = function() {
        return this.each(function() {
            var $programSearchField = $(this).find('input'),
                autosuggestURL = $(this).data('program-search');

            $programSearchField.devbridgeAutocomplete({
                appendTo: $programSearchField.parent(),
                serviceUrl: autosuggestURL,
                minChars: 1
            });
        });
    };
}( jQuery ));