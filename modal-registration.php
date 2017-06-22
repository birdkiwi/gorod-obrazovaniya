<div class="registration-modal-logo">
    <img src="images/logo.svg" alt="Город образования">
</div>

<div class="registration-modal-title">
    Регистрация
</div>

<form action="#" method="POST" class="registration-form registration-modal-form" data-validate>
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            <div class="form-group">
                <label class="form-label" for="registration-form-name">Имя *</label>
                <input id="registration-form-name" type="text" name="first_name" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="registration-form-last-name">Фамилия *</label>
                <input id="registration-form-last-name" type="text" name="last_name" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="registration-form-middle-name">Отчество *</label>
                <input id="registration-form-middle-name" type="text" name="middle_name" class="form-input" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div class="form-group">
                <label class="form-label" for="registration-form-photo">Фотография *</label>
                <div class="form-control form-control-photo">
                    <div class="form-control-photo-icon"></div>
                    <div class="form-control-photo-title">
                        Загрузить фото
                    </div>
                    <div class="form-control-photo-subtitle">
                        (Изображение не меньше 150×150 пикселей)
                    </div>

                    <input id="registration-form-photo" type="file" name="photo" class="form-control-photo-input" required>

                    <button tabindex="-1" class="button button-blue">Выбрать файл</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <textarea class="form-textarea" name="textarea"></textarea>
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

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label">Пол *</label>

                <div class="form-control form-control-radio m-r-md m-t-sm">
                    <input id="registration-form-sex-male" type="radio" name="sex" value="male" checked>
                    <label for="registration-form-sex-male">Мужчина</label>
                </div>

                <div class="form-control form-control-radio m-t-sm">
                    <input id="registration-form-sex-female" type="radio" name="sex" value="male">
                    <label for="registration-form-sex-female">Ура, я женщина!</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-birthdate">Дата рождения *</label>
                <input id="registration-form-birthdate" type="text" name="birthdate" class="form-input" placeholder="дд.мм.гггг" data-maskedinput="99.99.9999" required>
            </div>
        </div>
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

    <div class="form-group">
        <label class="form-label" for="registration-form-scope">Сфера деятельности</label>
        <div class="form-control form-select">
            <select name="scope" id="registration-form-scope">
                <option value="1">Сфера деятельности №1</option>
                <option value="2">Сфера деятельности №2</option>
                <option value="3">Сфера деятельности №3</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-organisation">Организация</label>
                <input id="registration-form-organisation" type="text" name="organisation" class="form-input">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label class="form-label" for="registration-form-title">Должность</label>
                <input id="registration-form-title" type="text" name="title" class="form-input">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-control form-control-checkbox">
            <input id="registration-form-agreement" type="checkbox" name="agreement" required>
            <label for="registration-form-agreement">
                Нажимая кнопку «Зарегистрироваться», <br> я принимаю условия <a href="#" target="_blank">Пользовательского соглашения</a>.
            </label>
        </div>
    </div>

    <div class="registration-form-submit">
        <button type="submit" class="button button-red button-wide">Зарегистрироваться</button>
    </div>
</form>