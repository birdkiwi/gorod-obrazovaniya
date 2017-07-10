(function( $ ) {
    $.fn.inputRegionCity = function() {
        return this.each(function() {
            var $regionsField = $(this).find('.js-regions-autocomplete'),
                $regionIdField = $(this).find('.js-region-id'),
                $citiesField = $(this).find('.js-cities-autocomplete'),
                $cityIdField = $(this).find('.js-city-id'),
                selectedRegion = null,
                selectedCity = null;

            //$citiesField.attr('readonly', true);

            $regionsField.devbridgeAutocomplete({
                appendTo: $regionsField.parent(),
                serviceUrl: 'data/regions.json',
                minChars: 1,
                onSelect: function (suggestion) {
                    selectedRegion = suggestion;

                    if ($regionIdField.val() != suggestion.data) {
                        //$citiesField.attr('readonly', false);
                        $regionIdField.val(suggestion.data);
                        $citiesField.val('');
                        $cityIdField.val('');
                    }
                },
                onInvalidateSelection: function(){
                    $regionIdField.val('');
                    $regionsField.val('');
                    $cityIdField.val('');
                    $citiesField.val('');
                    //$citiesField.attr('readonly', true);
                }
            });

            $citiesField.devbridgeAutocomplete({
                appendTo: $citiesField.parent(),
                serviceUrl: function (el, query){
                    return 'data/cities.json?' + selectedRegion.data;
                },
                minChars: 1,
                onSelect: function (suggestion) {
                    selectedCity = suggestion;

                    $cityIdField.val(suggestion.data);
                },
                onInvalidateSelection: function(){
                    $citiesField.val('');
                    $cityIdField.val('');
                }
            });
        });
    };
}( jQuery ));