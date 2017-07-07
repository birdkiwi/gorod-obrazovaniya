<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Город образования</title>
    <link rel="stylesheet" href="build/style.min.css">
    <meta name="theme-color" content="#006A98">
</head>
<body>

<?php include "blocks/offcanvas.php"; ?>
<?php include "blocks/header.php"; ?>

<main class="main-content">
    <div class="main-heading main-heading-pear-green">
        <div class="wrapper">
            <h1 class="main-heading-title">Контакты</h1>
        </div>
    </div>

    <div class="wrapper">
        <div class="contacts-block m-t-xl m-b-xl">
            <div class="row m-b-lg">
                <div class="col-xs-12 col-sm-4">
                    <div class="contacts-block-item">
                        <div class="contacts-block-item-icon">
                            <?php include "images/icons/icon-contacts-place.svg"; ?>
                        </div>
                        <div class="contacts-block-item-content">
                            <div class="contacts-block-item-title">
                                Место проведения
                            </div>
                            <div class="contacts-block-item-value">
                                Москва, ВДНХ, 75-й павильон
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contacts-block-item">
                        <div class="contacts-block-item-icon">
                            <?php include "images/icons/icon-contacts-phone.svg"; ?>
                        </div>
                        <div class="contacts-block-item-content">
                            <div class="contacts-block-item-title">
                                Контактная информация
                            </div>
                            <div class="contacts-block-item-value">
                                Тел/факс: <a href="tel:+7(812)316-34-34">+7 (812) 316-34-34</a> <br>
                                email: <a href="mailto:mosexpo2017@gmail.com">mosexpo2017@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contacts-block-item">
                        <div class="contacts-block-item-icon">
                            <?php include "images/icons/icon-contacts-manager.svg"; ?>
                        </div>
                        <div class="contacts-block-item-content">
                            <div class="contacts-block-item-title">
                                Предложения о сотрудничестве
                            </div>
                            <div class="contacts-block-item-value">
                                <span class="contacts-block-item-value-title">Моб.:</span> <a href="tel:+7(921)416-24-84">+7 (921) 416-24-84</a> <br>
                                <span class="contacts-block-item-value-title">email:</span> <a href="mailto:mosexpo2017@gmail.com">mosexpo2017@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "blocks/contacts-map.php";?>
        </div>
    </div>

    <div class="feedback-block">
        <div class="wrapper">
            <form action="#" method="POST" class="feedback-block-form" data-validate data-form-ajax>
                <div class="feedback-block-title">
                    Обратная связь
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="feedback-form-name" class="form-label">Имя *</label>
                            <input id="feedback-form-name" type="text" class="form-input" name="name" required placeholder="Иван Иванов">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="feedback-form-email" class="form-label">E-mail *</label>
                            <input id="feedback-form-email" type="email" class="form-input" name="email" required placeholder="ivanov@mail.ru">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="feedback-form-message" class="form-label">Ваше сообщение *</label>
                    <textarea id="feedback-form-message" class="form-textarea" name="message" cols="30" rows="10" placeholder="Напишите ваше сообщение" required></textarea>
                </div>

                <div class="feedback-block-submit">
                    <button type="submit" class="button button-red">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU&onload=initContactsMap"></script>
</body>
</html>