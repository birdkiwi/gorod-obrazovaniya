<div class="registration-modal-logo">
    <img src="images/logo.svg" alt="Город образования">
</div>

<div class="registration-modal-title">
    Заявка на участие в выставке
</div>

<form action="data/form-response-error.json" method="POST" enctype="multipart/form-data" class="registration-form registration-modal-form" data-validate data-form-ajax data-form-ajax-overlay="#exhibition-form-overlay">
    <div id="exhibition-form-overlay" class="form-overlay"></div>
    <div class="form-group">
        <label class="form-label" for="registration-form-name">Название компании-участника выставки *</label>
        <input id="registration-form-name" type="text" name="name" class="form-input" required>
    </div>

    <div class="form-group">
        <label class="form-label" for="registration-form-description">Краткое описание продукции и/или услуг для представления на выставке *</label>
        <textarea id="registration-form-description" name="description" class="form-textarea" required></textarea>
    </div>

    <div class="form-group">
        <label class="form-label" for="registration-form-website">Адрес сайта</label>
        <input id="registration-form-website" type="text" name="website" class="form-input">
    </div>

    <div class="row js-input-region-city">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-region">Регион *</label>
                <input id="registration-form-region" type="text" name="region" class="form-input js-regions-autocomplete" required>
                <input type="hidden" name="region_id" class="js-region-id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-city">Город *</label>
                <input id="registration-form-city" type="text" name="city" class="form-input js-cities-autocomplete" required>
                <input type="hidden" name="city_id" class="js-city-id">
            </div>
        </div>
    </div>

    <div class="registration-form-subtitle">
        <span>
          Контактная информация
        </span>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-name">Имя *</label>
                <input id="registration-form-name" type="text" name="first_name" class="form-input" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-last-name">Фамилия *</label>
                <input id="registration-form-last-name" type="text" name="last_name" class="form-input" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-email">Электронная почта *</label>
                <input id="registration-form-email" type="email" name="email" class="form-input" placeholder="example@mail.ru" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-phone">Телефон *</label>
                <input id="registration-form-phone" type="text" name="phone" class="form-input" placeholder="+7 (999) 999-99-99" data-masked-input="+7 (000) 000-00-00" data-masked-input-placeholder="+7 (___) ___-__-__" data-masked-input-clearifnotmatch required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-control form-control-checkbox">
            <input id="registration-form-agreement" type="checkbox" name="agreement" required>
            <label for="registration-form-agreement">
                Нажимая кнопку «Отправить заявку», <br> я принимаю условия <a href="#" target="_blank">Пользовательского соглашения</a>.
            </label>
        </div>
    </div>
    
    <div class="form-group">
        <div class="form-messages animated flash js-form-messages"></div>
    </div>

    <div class="registration-form-submit">
        <button type="submit" class="button button-red button-wide">Отправить заявку</button>
    </div>
</form>