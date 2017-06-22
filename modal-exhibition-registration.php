<div class="registration-modal-logo">
    <img src="images/logo.svg" alt="Город образования">
</div>

<div class="registration-modal-title">
    Заявка на участие в выставке
</div>

<form action="#" method="POST" class="registration-form registration-modal-form" data-validate>
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

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-region">Регион *</label>
                <input id="registration-form-region" type="text" name="region" class="form-input" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-city">Город *</label>
                <input id="registration-form-city" type="text" name="city" class="form-input" required>
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
                <input id="registration-form-phone" type="text" name="phone" class="form-input" placeholder="+7 (999) 999-99-99" data-maskedinput="+7 (999) 999-99-99" required>
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

    <div class="registration-form-submit">
        <button type="submit" class="button button-red button-wide">Отправить заявку</button>
    </div>
</form>