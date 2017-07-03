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
    <div class="main-heading main-heading-navy">
        <div class="wrapper">
            <h1 class="main-heading-title">Новости</h1>

            <form action="#" method="POST" class="main-heading-search-form">
                <input type="search" name="search" class="main-heading-search-input" placeholder="Поиск">
                <input type="submit" value="" class="main-heading-search-submit">
            </form>
        </div>
    </div>

    <nav class="subnav">
        <div class="wrapper">
            <ul class="subnav-list subnav-list-wide">
                <li class="subnav-list-item active">
                    <a href="#" class="subnav-link active">
                        <span>Все</span>
                    </a>
                </li>
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Фотогалерея</span>
                    </a>
                </li>
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Видео</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <div class="news-item-wrapper">
            <div class="news-item m-t-xl m-b-xl">
                <div class="news-item-content">
                    <h1 class="news-item-title">Дискуссии о ключевых трендах развития образования</h1>
                    <p class="text-highlight m-b-xl">Главная дискуссия о ключевых трендах развития образования пройдет 8 сентября на Московском международного форума «Город образования» на ВДНХ.</p>

                    <h2>Выступления на международных форумах</h2>
                    <p>В выступлениях на международных форумах Сугата Митра предлагает внести кардинальные изменения в нынешнюю систему образования, чтобы изменить вектор дальнейшего развития науки и культуры для последующих поколений. Его вдохновляющая идея о самоорганизующихся учебных пространствах предполагает создание «Школы в облаках» – своего рода лаборатории, где дети смогут проводить исследования и обучаться друг у друга, используя ресурсы из «облаков».</p>

                    <div class="blockquote">
                        За свои исследования Сугата Митра был удостоен многочисленных премий, среди которых Leonardo European Corporate Learning Award в номинации «Пересекая границы», Dewang Mehta Award за инновации в информационных технологиях, TED Prize за заслуги в науке, искусстве и политике.
                        <div class="blockquote-author">
                            Сугата Митра, основатель приложения для проведения опросов
                        </div>
                    </div>

                    <p>Его вдохновляющая идея о самоорганизующихся учебных пространствах предполагает создание «Школы в облаках» – своего рода лаборатории, где дети смогут проводить исследования и обучаться друг у друга, используя ресурсы из «облаков».</p>

                    <p>Одним из проектов, представленных на выставке будет «Московская электронная школа», которая интегрирует в себя все электронные образовательные сервисы:</p>

                    <img src="images/tmp/news-page/news-full-1.jpg" alt="" class="m-b-md">

                    <h3 class="tt-uppercase">Дисскуссии о ключевых трендах</h3>

                    <p>Его вдохновляющая идея о самоорганизующихся учебных пространствах предполагает создание «Школы в облаках» – своего рода лаборатории, где дети смогут проводить исследования и обучаться друг у друга, используя ресурсы из «облаков».</p>

                    <div class="news-item-highlight">
                        Участие в Форуме – это отличная возможность представить новейшие разработки заинтересованной аудитории из России и зарубежных стран.
                    </div>
                </div>
                <aside class="news-item-sidebar">
                    <div class="news-item-meta">
                        <div class="news-item-meta-date">
                            <span class="news-item-meta-date-day">16</span> июня, 2017
                        </div>
                    </div>

                    <div class="news-item-share">
                        <div class="news-item-share-title">
                            Поделиться
                        </div>
                        <div class="share-block">
                            <a href="#" target="_blank" class="share-block-item">
                                <?php include "images/icons/icon-vk.svg"; ?>
                            </a>
                            <a href="#" target="_blank" class="share-block-item">
                                <?php include "images/icons/icon-facebook.svg"; ?>
                            </a>
                            <a href="#" target="_blank" class="share-block-item">
                                <?php include "images/icons/icon-twitter.svg"; ?>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <section class="other-news-block">
        <div class="wrapper">
            <div class="news-block">
                <div class="news-block-title">
                    <b>Другие новости</b>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="news-block-item">
                            <div class="news-block-item-photo">
                                <a href="#">
                                    <img src="images/tmp/news-page/news-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="news-block-item-title">
                                <a href="#">
                                    Сугата Митра примет участие в форуме «Город образования»
                                </a>
                            </div>
                            <div class="news-block-item-text">
                                Спикер TED и известный индийский ученый Сугата Митра примет участие в Московском международном форуме «Город образования».
                            </div>
                            <div class="news-block-item-meta">
                                <div class="news-block-item-date">
                                    <span class="news-block-item-date-value">7</span> сентября
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="news-block-item">
                            <div class="news-block-item-photo">
                                <a href="#">
                                    <img src="images/tmp/news-page/news-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="news-block-item-title">
                                <a href="#">
                                    Дискуссии о ключевых трендах развития образования
                                </a>
                            </div>
                            <div class="news-block-item-text">
                                Главная дискуссия о ключевых трендах развития образования пройдет 8 сентября на Московском международного форума «Город образования»…
                            </div>
                            <div class="news-block-item-meta">
                                <div class="news-block-item-date">
                                    <span class="news-block-item-date-value">7</span> сентября
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="news-block-item">
                            <div class="news-block-item-photo">
                                <a href="#">
                                    <img src="images/tmp/news-page/news-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="news-block-item-title">
                                <a href="#">
                                    V съезд учителей
                                </a>
                            </div>
                            <div class="news-block-item-text">
                                8 сентября на ВДНХ пройдет V Съезд учителей, приуроченный к Московскому международному форуму «Город образования».
                            </div>
                            <div class="news-block-item-meta">
                                <div class="news-block-item-date">
                                    <span class="news-block-item-date-value">7</span> сентября
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
</body>
</html>