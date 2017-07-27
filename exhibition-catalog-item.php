<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Город образования</title>
    <link rel="stylesheet" href="build/style.min.css">
    <meta name="theme-color" content="#006A98">
</head>
<body>

<?php include "blocks/offcanvas.php"; ?>
<?php include "blocks/header.php"; ?>

<main class="main-content">
    <div class="main-heading main-heading-salad">
        <div class="wrapper">
            <h1 class="main-heading-title">
                <a href="#">
                    Выставка
                </a>
            </h1>

            <form action="#" method="POST" class="main-heading-search-form">
                <input type="search" name="search" class="main-heading-search-input" placeholder="Поиск">
                <input type="submit" value="" class="main-heading-search-submit">
            </form>
        </div>
    </div>

    <nav class="subnav">
        <div class="wrapper">
            <ul class="subnav-list">
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Схема</span>
                    </a>
                </li>
                <li class="subnav-list-item active">
                    <a href="#" class="subnav-link">
                        <span>Каталог компаний</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <div class="exhibition-catalog-item-wrapper">
            <div class="exhibition-catalog-item p-t-xl p-b-xl">
                <div class="exhibition-catalog-item-card">
                    <div class="exhibition-catalog-item-card-text">
                        <div class="exhibition-catalog-item-name">
                            CISCO
                        </div>

                        <div class="exhibition-catalog-item-title">
                            Описание компании кратко по образованию Организации экономического сотрудничества
                        </div>

                        <div class="exhibition-catalog-item-stand">
                            <?php include "images/icons/icon-stand.svg"; ?> Стенд 22
                        </div>

                        <div class="exhibition-catalog-item-about">
                            <div class="exhibition-catalog-item-about-title">
                                О компании
                            </div>

                            <p>
                                Расширенное описание компании, проекты на форуме и т. д. предлагает внести кардинальные изменения в нынешнюю систему образования, чтобы изменить вектор дальнейшего развития науки и культуры для последующих поколений. Его вдохновляющая идея о самоорганизующихся учебных пространствах предполагает создание «Школы в облаках» – своего рода лаборатории, где дети смогут проводить исследования и обучаться друг у друга, используя ресурсы из «облаков».
                            </p>

                            <div class="exhibition-catalog-item-about-title">
                                Контакты
                            </div>

                            <p>
                                Тел/факс: <a href="tel:+7(812)316-34-34">+7 (812) 316-34-34</a> <br>
                                Email: <a href="mailto:contact@cisco.com">contact@cisco.com</a> <br>
                                Сайт: <a href="https://cisco.com" target="_blank">www.cisco.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="exhibition-catalog-item-card-photo">
                        <img src="images/tmp/sponsors/partner-4.png" alt="Cisco">
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
</body>
</html>