var contactsMap;

function initContactsMap(ymaps) {
    'use strict';
    contactsMap = new ymaps.Map('js-contacts-map', {
        center: [55.87, 37.66],
        zoom: 10,
        controls: ['smallMapDefaultSet']
    });

    contactsMap.behaviors.disable('scrollZoom');

    $.ajax('data/contacts-map-data.json', {
        method: 'GET',
        cache: false,
        data: 'json'
    }).done(function (data) {
        if (data.objects) {
            data.objects.forEach(function (object) {
                var myPlacemark = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: object.coords
                    }
                });

                contactsMap.geoObjects.add(myPlacemark);
            });
        }
    })
}