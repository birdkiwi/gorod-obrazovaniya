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

<?php include "blocks/offcanvas-user.php"; ?>
<?php include "blocks/header-user.php"; ?>

<main class="main-content">
    <div class="main-heading main-heading-ink">
        <div class="wrapper">
            <h1 class="main-heading-title">
                <a href="#">
                    Личный кабинет
                </a>
            </h1>
        </div>
    </div>

    <nav class="subnav">
        <div class="wrapper">
            <ul class="subnav-list">
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Мой билет</span>
                    </a>
                </li>
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Мое расписание</span>
                    </a>
                </li>
                <li class="subnav-list-item active">
                    <a href="#" class="subnav-link">
                        <span>Мои данные</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="cabinet-block">
        <div class="wrapper">
            <div class="cabinet-block-profile-wrapper">
                <div class="cabinet-block-heading">
                    <div class="cabinet-block-title">
                        Профиль
                    </div>
                </div>

                <div class="cabinet-profile-row">
                    <div class="cabinet-profile-first-col">
                        <div class="cabinet-block-profile-photo">
                            <div class="cabinet-block-profile-photo-none">Нет фото</div>
                        </div>

                        <a href="#" class="button button-blue button-block">Редактировать</a>
                    </div>

                    <div class="cabinet-profile-second-col">
                        <div class="cabinet-block-profile-title">
                            Андреас Шляйхер
                        </div>

                        <div class="cabinet-block-profile-subtitle">
                            Руководитель Директората по образованию и компетенциям  Организации экономики
                        </div>

                        <div class="cabinet-block-profile-table-title">
                            Личные данные
                        </div>

                        <div class="overflow-auto">
                            <table class="cabinet-block-profile-table">
                                <tr>
                                    <th>Телефон</th>
                                    <td>+7 (999) 999-99-99</td>
                                </tr>
                                <tr>
                                    <th>Пол</th>
                                    <td>Мужской</td>
                                </tr>
                                <tr>
                                    <th>Дата рождения</th>
                                    <td>06 сентябрь 1970</td>
                                </tr>
                                <tr>
                                    <th>Регион</th>
                                    <td>Новосибирская область</td>
                                </tr>
                                <tr>
                                    <th>Город</th>
                                    <td>Новосибирск</td>
                                </tr>
                            </table>
                        </div>

                        <div class="cabinet-block-profile-table-title">
                            Организация
                        </div>

                        <div class="overflow-auto">
                            <table class="cabinet-block-profile-table">
                                <tr>
                                    <th>Организация</th>
                                    <td>Pisa Company</td>
                                </tr>
                                <tr>
                                    <th>Сфера деятельности</th>
                                    <td>Образовательные программы</td>
                                </tr>
                            </table>
                        </div>
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