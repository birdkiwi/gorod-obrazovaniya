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
                    <a href="cabinet-ticket.php" class="subnav-link">
                        <span>Мой билет</span>
                    </a>
                </li>
                <li class="subnav-list-item active">
                    <a href="cabinet-events.php" class="subnav-link">
                        <span>Мое расписание</span>
                    </a>
                </li>
                <li class="subnav-list-item">
                    <a href="cabinet-profile.php" class="subnav-link">
                        <span>Мои данные</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="cabinet-block">
        <div class="wrapper">
            <div class="cabinet-block-events-wrapper">
                <div class="cabinet-block-heading">
                    <div class="cabinet-block-title">
                        7 сентября
                    </div>

                    <a href="#" class="button button-blue">Составить расписание</a>
                </div>

                <div class="cabinet-block-events-table m-b-xl">
                    <div class="cabinet-block-events-table-heading">
                        Событие
                    </div>
                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-orange">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                «Система образования как инструмент консолидации городского сообщества»
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
                    </div>

                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-orange">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                «Система образования с высокими возможностями для каждого: международный опыт, оценка, внедрение»
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
                    </div>

                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-ink">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                Съезд учителей города Москвы
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
                    </div>

                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-green">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                Дискуссии о ключевых трендах развития образования
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
                    </div>
                </div>

                <div class="cabinet-block-heading">
                    <div class="cabinet-block-title">
                        8 сентября
                    </div>
                </div>

                <div class="cabinet-block-events-table m-b-xl">
                    <div class="cabinet-block-events-table-heading">
                        Событие
                    </div>
                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-orange">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                «Система образования как инструмент консолидации городского сообщества»
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
                    </div>

                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-orange">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                «Система образования с высокими возможностями для каждого: международный опыт, оценка, внедрение»
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
                    </div>

                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-ink">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                Съезд учителей города Москвы
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
                    </div>

                    <div class="cabinet-block-events-table-item cabinet-block-events-table-item-green">
                        <div class="cabinet-block-events-table-item-content">
                            <a href="#" class="cabinet-block-events-table-item-title">
                                Дискуссии о ключевых трендах развития образования
                            </a>
                            <div class="cabinet-block-events-table-item-meta">
                                <div class="cabinet-block-events-table-item-date">
                                    <?php include "images/icons/icon-news-item-clock.svg"; ?>

                                    14:00 – 14:30
                                </div>
                                <div class="cabinet-block-events-table-item-place">
                                    <?php include "images/icons/icon-map-mark.svg"; ?>

                                    Основной зал 1
                                </div>
                            </div>
                        </div>
                        <a href="#" class="cabinet-block-events-table-item-fav">
                            <?php include "images/icons/icon-cabinet-events-fav.svg"; ?>
                        </a>
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