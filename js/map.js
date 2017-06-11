var contactsMap;

function initContactsMap(ymaps) {
    "use strict";
    contactsMap = new ymaps.Map("js-contacts-map", {
        center: [55.87, 37.66],
        zoom: 10
    });
}