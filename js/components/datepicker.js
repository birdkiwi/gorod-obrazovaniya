(function( $ ) {
    $.fn.datePicker = function() {
        var lang = $('html').attr('lang');

        return this.each(function () {
            var ruLang = {
                previousMonth: 'Предыдущий месяц',
                    nextMonth: 'Следующий месяц',
                    months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    weekdays: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
                    weekdaysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
            };

            var options = {
                field: this,
                firstDay: 1,
                format: 'DD.MM.YYYY',
                maxDate: new Date(),
                yearRange: [1900, 2017]
            };

            if (lang === 'ru') {
                options.i18n = ruLang;
            }

            var picker = new Pikaday(options);
        });
    }
}( jQuery ));