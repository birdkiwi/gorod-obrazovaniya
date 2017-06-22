<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Город образования</title>
    <link rel="stylesheet" href="build/style.min.css">
    <meta name="theme-color" content="#006A98">
</head>
<body>

<div id="offcanvas" class="main-offcanvas-overlay">
    <nav class="main-offcanvas">
        <div class="main-offcanvas-padding">
            <div class="main-offcanvas-logo">
                <img src="images/logo.svg" alt="Город образования">
            </div>
            <div class="main-offcanvas-user">
                <a href="#" class="button button-blue-hollow">Войти</a>
            </div>
        </div>
        <ul class="main-offcanvas-menu">
            <li class="active">
                <a href="#">О форуме</a>

                <ul>
                    <li>
                        <a href="#">Посетителям</a>
                    </li>
                    <li>
                        <a href="#">Экспонентам</a>
                    </li>
                    <li>
                        <a href="#">Партнерам</a>
                    </li>
                    <li>
                        <a href="#">СМИ</a>
                    </li>
                    <li>
                        <a href="#">Полезная информация</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Новости</a>
            </li>
            <li>
                <a href="#">Программа</a>
            </li>
            <li>
                <a href="#">Спикеры</a>
            </li>
            <li>
                <a href="#">Выставка</a>
            </li>
            <li>
                <a href="#">Партнеры</a>
            </li>
            <li>
                <a href="#">Контакты</a>
            </li>
        </ul>

        <div class="main-offcanvas-padding">
            <div class="main-offcanvas-lang">
                <div class="main-offcanvas-lang-title">Язык: </div>
                <div class="main-header-language">
                    <a href="#" class="main-header-language-item main-header-language-item-ru active">
                        <span>Рус</span>
                    </a>
                    <a href="#" class="main-header-language-item main-header-language-item-en">
                        <span>Eng</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="main-offcanvas-padding">
            <div class="socials-block main-offcanvas-socials-block">
                <div class="socials-block-items">
                    <a href="#" target="_blank" class="socials-block-item">
                        <?php include "images/icons/icon-vk.svg"; ?>
                    </a>
                    <a href="#" target="_blank" class="socials-block-item">
                        <?php include "images/icons/icon-facebook.svg"; ?>
                    </a>
                    <a href="#" target="_blank" class="socials-block-item">
                        <?php include "images/icons/icon-twitter.svg"; ?>
                    </a>
                    <a href="#" target="_blank" class="socials-block-item">
                        <?php include "images/icons/icon-instagram.svg"; ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>

<header class="main-header">
    <div class="wrapper">
        <div class="main-header-desktop">
            <a href="#" class="main-header-logo">
                <img src="images/logo.svg" alt="Город образования">
            </a>
            <nav class="main-header-menu">
                <ul>
                    <li class="parent active">
                        <a href="#">О форуме</a>

                        <div class="main-header-submenu">
                            <div class="wrapper">
                                <ul>
                                    <li>
                                        <a href="#">Посетителям</a>
                                    </li>
                                    <li>
                                        <a href="#">Экспонентам</a>
                                    </li>
                                    <li>
                                        <a href="#">Партнерам</a>
                                    </li>
                                    <li>
                                        <a href="#">СМИ</a>
                                    </li>
                                    <li>
                                        <a href="#">Полезная информация</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Новости</a>
                    </li>
                    <li>
                        <a href="#">Программа</a>
                    </li>
                    <li>
                        <a href="#">Спикеры</a>
                    </li>
                    <li>
                        <a href="#">Выставка</a>
                    </li>
                    <li>
                        <a href="#">Партнеры</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </nav>

            <div class="main-header-language">
                <a href="#" class="main-header-language-item main-header-language-item-ru active">
                    <span>Рус</span>
                </a>
                <a href="#" class="main-header-language-item main-header-language-item-en">
                    <span>Eng</span>
                </a>
            </div>

            <div class="main-header-user">
            <a href="#" class="button button-blue-hollow">Войти</a>
        </div>
        </div>
        <div class="main-header-mobile">
            <a href="#" class="main-header-toggler js-offcanvas">
                <?php include "images/icons/icon-header-toggler.svg"; ?>
            </a>

            <a href="#" class="main-header-logo-mobile">
                <img src="images/logo.svg" alt="Город образования">
            </a>

            <a href="#" class="main-header-login">
                <?php include "images/icons/icon-header-login.svg"; ?>
            </a>
        </div>
    </div>
</header>

<main class="main-content">
    <section class="welcome-block">
        <div class="wrapper">
            <div class="welcome-block-support">
                <img src="images/logo-pravitelstvo-moskvy.png" alt="При поддержке правительства Москвы">
            </div>
            <div class="welcome-block-content">
                <div class="welcome-block-title">
                    <h1>
                        Город образования
                    </h1>
                    <div class="welcome-block-subtitle">
                        Московский международный форум
                    </div>
                </div>

                <div class="welcome-block-highlight">
                    <div class="welcome-block-highlight-date">
                        <div class="welcome-block-highlight-value">7-9</div>
                        сентября
                    </div>

                    <div class="welcome-block-highlight-address">
                        <div class="welcome-block-highlight-value">ВДНХ</div>
                        75-й павильон
                    </div>
                </div>

                <div class="welcome-block-image"></div>

                <a href="modal-registration.php" data-side-modal data-side-modal-class="registration-modal" class="button button-wide button-red">Регистрация</a>

                <div class="welcome-block-countdown">
                    <div class="welcome-block-countdown-title">До начала регистрации:</div>
                    <div class="js-flip-clock" data-time-left="86400"></div>
                </div>

                <div class="welcome-block-socials">
                    <div class="socials-block">
                        <div class="socials-block-title">Форум в соц. сетях</div>

                        <div class="socials-block-items">
                            <a href="#" target="_blank" class="socials-block-item">
                                <?php include "images/icons/icon-vk.svg"; ?>
                            </a>
                            <a href="#" target="_blank" class="socials-block-item">
                                <?php include "images/icons/icon-facebook.svg"; ?>
                            </a>
                            <a href="#" target="_blank" class="socials-block-item">
                                <?php include "images/icons/icon-twitter.svg"; ?>
                            </a>
                            <a href="#" target="_blank" class="socials-block-item">
                                <?php include "images/icons/icon-instagram.svg"; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-forum-block">
        <div class="wrapper">
            <div class="about-forum-block-content">
                <h2 class="about-forum-block-title">
                    Одно из ключевых событий в&nbsp;сфере образования Москвы в 2017 году
                </h2>

                <div class="about-forum-block-text">
                    «Город образования» станет международной площадкой по обмену опытом развития основного, дополнительного, профессионального и предпрофессионального образования, демонстрации современных образовательных технологий, электронных ресурсов, программных решений, компьютерной техники и учебного оборудования.
                </div>

                <div class="about-forum-block-icons">
                    <a href="#" class="about-forum-block-icons-item">
                        <span class="about-forum-block-icons-item-icon">
                            <img src="images/icons/icon-about-forum-user.png" alt="">
                        </span>
                        <span class="about-forum-block-icons-item-title">Посетителям</span>
                    </a>
                    <a href="#" class="about-forum-block-icons-item">
                        <span class="about-forum-block-icons-item-icon">
                            <img src="images/icons/icon-about-forum-partnership.png" alt="">
                        </span>
                        <span class="about-forum-block-icons-item-title">Партнерам</span>
                    </a>
                    <a href="#" class="about-forum-block-icons-item">
                        <span class="about-forum-block-icons-item-icon">
                            <img src="images/icons/icon-about-forum-map.png" alt="">
                        </span>
                        <span class="about-forum-block-icons-item-title">Экспонентам</span>
                    </a>
                    <a href="#" class="about-forum-block-icons-item">
                        <span class="about-forum-block-icons-item-icon">
                            <img src="images/icons/icon-about-forum-media.png" alt="">
                        </span>
                        <span class="about-forum-block-icons-item-title">СМИ</span>
                    </a>
                </div>
            </div>

            <div class="about-forum-block-stats">
                <div class="about-forum-block-stats-item">
                    <div class="about-forum-block-stats-item-value">
                        30 000
                    </div>
                    <div class="about-forum-block-stats-item-title">
                        посетителей
                    </div>
                </div>
                <div class="about-forum-block-stats-item">
                    <div class="about-forum-block-stats-item-value">
                        80
                    </div>
                    <div class="about-forum-block-stats-item-title">
                        событий деловой программы
                    </div>
                </div>
                <div class="about-forum-block-stats-item">
                    <div class="about-forum-block-stats-item-value">
                        150
                    </div>
                    <div class="about-forum-block-stats-item-title">
                        российских и международных спикеров
                    </div>
                </div>
                <div class="about-forum-block-stats-item">
                    <div class="about-forum-block-stats-item-value">
                        150
                    </div>
                    <div class="about-forum-block-stats-item-title">
                        экспонентов и площадок
                    </div>
                </div>
            </div>
        </div>

        <div class="about-forum-block-button">
            <a href="#" class="button button-white-hollow">Подробнее о форуме</a>
        </div>
    </section>

    <section class="news-block">
        <div class="wrapper">
            <h2 class="news-block-title">
                <a href="#">Новости</a> форума
            </h2>

            <div class="swiper-container news-block-swiper-container js-news-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="news-block-row">
                            <a href="data/news/news-1.php" data-side-modal data-side-modal-class="side-modal-wide side-modal-news" class="news-block-row-item news-block-row-item-video news-block-row-item-wide">
                                <div class="news-block-row-item-cover">
                                    <img src="images/tmp/news/news-1.jpg" alt="">
                                </div>

                                <div class="news-block-row-item-meta">
                                    <div class="news-block-row-item-title">
                                        Массовый забег учителей и учеников
                                    </div>

                                    <div class="news-block-row-item-readmore">
                                        <?php include "images/icons/icon-news-play.svg"; ?>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="news-block-row-item news-block-row-item-blank">
                                <div class="news-block-row-item-title">
                                    Международный форум «Город образования» пройдет в сентябре на ВДНХ
                                </div>
                                <div class="news-block-row-item-meta">
                                    <div class="news-block-row-item-date">
                                        <span class="news-block-row-item-date-value">7</span> сентября
                                    </div>

                                    <div class="news-block-row-item-readmore">
                                        <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="news-block-row-item news-block-row-item-video">
                                <div class="news-block-row-item-cover">
                                    <img src="images/tmp/news/news-2.jpg" alt="">
                                </div>

                                <div class="news-block-row-item-meta">
                                    <div class="news-block-row-item-title">
                                        Международный форум «Город образования» пройдет в сентябре на ВДНХ
                                    </div>

                                    <div class="news-block-row-item-readmore">
                                        <?php include "images/icons/icon-news-play.svg"; ?>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="news-block-row-item news-block-row-item-blank">
                                <div class="news-block-row-item-title">
                                    Где учиться учителю? Москва примет международный форум «Город образования»
                                </div>
                                <div class="news-block-row-item-meta">
                                    <div class="news-block-row-item-date">
                                        <span class="news-block-row-item-date-value">7</span> сентября
                                    </div>

                                    <div class="news-block-row-item-readmore">
                                        <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="news-block-row-item news-block-row-item-blank">
                                <div class="news-block-row-item-title">
                                    Столица открылась миру. Город станет открытой площадкой по обмену...
                                </div>
                                <div class="news-block-row-item-meta">
                                    <div class="news-block-row-item-date">
                                        <span class="news-block-row-item-date-value">7</span> сентября
                                    </div>

                                    <div class="news-block-row-item-readmore">
                                        <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="news-block-row-item news-block-row-item-photo">
                                <div class="news-block-row-item-cover">
                                    <img src="images/tmp/news/news-2.jpg" alt="">
                                </div>

                                <div class="news-block-row-item-meta">
                                    <div class="news-block-row-item-title">
                                        Выставка робототехники ВДНХ 2016
                                    </div>

                                    <div class="news-block-row-item-readmore">
                                        18
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="news-block-row-item news-block-row-item-blank">
                                <div class="news-block-row-item-title">
                                    Пресс-конференция о форуме «Город образования» прошла в Москве
                                </div>
                                <div class="news-block-row-item-meta">
                                    <div class="news-block-row-item-date">
                                        <span class="news-block-row-item-date-value">7</span> сентября
                                    </div>

                                    <div class="news-block-row-item-readmore">
                                        <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="news-block-buttons">
                    <a href="#" class="button button-blue-hollow news-block-button-prev js-news-block-button-prev">
                        <?php include "images/icons/icon-pagination-prev.svg"; ?>
                    </a>
                    <a href="#" class="button button-blue-hollow">
                        Все новости
                    </a>
                    <a href="#" class="button button-blue-hollow news-block-button-next js-news-block-button-next">
                        <?php include "images/icons/icon-pagination-next.svg"; ?>
                    </a>
                </div>
            </div>

            <div class="swiper container news-block-swiper-container-mobile js-news-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="data/news/news-1.php" data-side-modal data-side-modal-class="side-modal-wide side-modal-news" class="news-block-row-item news-block-row-item-photo">
                            <div class="news-block-row-item-cover">
                                <img src="images/tmp/news/news-1.jpg" alt="">
                            </div>

                            <div class="news-block-row-item-meta">
                                <div class="news-block-row-item-title">
                                    Выставка робототехники ВДНХ 2016
                                </div>

                                <div class="news-block-row-item-readmore">
                                    18
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="news-block-row-item news-block-row-item-photo">
                            <div class="news-block-row-item-cover">
                                <img src="images/tmp/news/news-2.jpg" alt="">
                            </div>

                            <div class="news-block-row-item-meta">
                                <div class="news-block-row-item-title">
                                    Выставка робототехники ВДНХ 2016
                                </div>

                                <div class="news-block-row-item-readmore">
                                    18
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="news-block-row-item news-block-row-item-blank">
                            <div class="news-block-row-item-title">
                                Пресс-конференция о форуме «Город образования» прошла в Москве
                            </div>
                            <div class="news-block-row-item-meta">
                                <div class="news-block-row-item-date">
                                    <span class="news-block-row-item-date-value">7</span> сентября
                                </div>

                                <div class="news-block-row-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="news-block-buttons">
                    <a href="#" class="button button-blue-hollow">
                        Все новости
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="events-block">
        <div class="wrapper">
            <h2 class="events-block-title">
                Более 80 мероприятий в <a href="#">программе</a>
            </h2>

            <div class="events-block-filter">
                <a href="data/events-filter/test-0.php" class="events-block-filter-item events-block-filter-item-top js-events-block-filter active">
                    Топ
                </a>
                <a href="data/events-filter/test-1.php" class="events-block-filter-item events-block-filter-item-red js-events-block-filter">
                    <span>Деловая программа</span>
                </a>
                <a href="data/events-filter/test-1.php" class="events-block-filter-item events-block-filter-item-orange js-events-block-filter">
                    <span>Специальные мероприятия</span>
                </a>
                <a href="data/events-filter/test-1.php" class="events-block-filter-item events-block-filter-item-green js-events-block-filter">
                    <span>Культурная программа</span>
                </a>
                <a href="data/events-filter/test-1.php" class="events-block-filter-item events-block-filter-item-navy js-events-block-filter">
                    <span>Спортивные мероприятия</span>
                </a>
            </div>

            <div class="events-block-row js-events-block-content">
                <a href="data/events-items/event-1.php" data-side-modal data-side-modal-class="side-modal-event" class="events-block-item">
                    <div class="events-block-item-content">
                        <div class="events-block-item-title">
                            «Система образования как инструмент консолидации городского сообщества»
                        </div>
                        <div class="events-block-item-text">
                            Конференция министров образования
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">7</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>

                <a href="data/events-items/event-2.php" data-side-modal data-side-modal-class="side-modal-event" class="events-block-item">
                    <div class="events-block-item-content">
                        <div class="events-block-item-title">
                            «Система образования с высокими возможностями для каждого: международный опыт, оценка, внедрение»
                        </div>
                        <div class="events-block-item-text">
                            Международная конференция с участием руководителя Федеральной службы по надзору в сфере образования и науки
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">7</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>

                <a href="#" class="events-block-item">
                    <div class="events-block-item-content">
                        <div class="events-block-item-title">
                            Съезд учителей города Москвы
                        </div>
                        <div class="events-block-item-text">
                            Пленарное заседание, мастер-классы лучших педагогов столицы
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">8</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>

                <a href="#" class="events-block-item">
                    <div class="events-block-item-content">
                        <div class="events-block-item-title">
                            Дискуссии о ключевых трендах развития образования
                        </div>
                        <div class="events-block-item-text">
                            Выступления, круглые столы, воркшопы, дебаты
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">9</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>

                <a href="#" class="events-block-item events-block-item-with-image">
                    <div class="events-block-item-content">
                        <div class="events-block-item-image">
                            <img src="images/tmp/events/events-2.svg" alt="">
                        </div>
                        <div class="events-block-item-title">
                            Специальная программа EdCrunch в рамках Форума
                        </div>
                        <div class="events-block-item-text">
                            Новые образовательные технологии
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">9</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>

                <a href="#" class="events-block-item events-block-item-with-image">
                    <div class="events-block-item-content">
                        <div class="events-block-item-image">
                            <img src="images/tmp/events/events-2.svg" alt="">
                        </div>
                        <div class="events-block-item-title">
                            Международный Пушкинский конкурс
                        </div>
                        <div class="events-block-item-text">
                            Подведение итогов
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">7</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>

                <a href="#" class="events-block-item events-block-item-with-image">
                    <div class="events-block-item-content">
                        <div class="events-block-item-image">
                            <img src="images/tmp/events/events-3.svg" alt="">
                        </div>
                        <div class="events-block-item-title">
                            World Skills Show
                        </div>
                        <div class="events-block-item-text">
                            Состязания участников и мастер-классы от всемирно-известных…
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">9</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>

                <a href="#" class="events-block-item events-block-item-with-image">
                    <div class="events-block-item-content">
                        <div class="events-block-item-image">
                            <img src="images/tmp/events/events-4.svg" alt="">
                        </div>
                        <div class="events-block-item-title">
                            Робототехнический фестиваль
                        </div>
                        <div class="events-block-item-text">
                            Робокросс, робобаттл, робофутбол
                        </div>
                    </div>

                    <div class="events-block-item-meta">
                        <div class="events-block-item-date">
                            <span class="events-block-item-date-value">9</span> сентября
                        </div>

                        <div class="events-block-item-readmore">
                            <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                        </div>
                    </div>
                </a>
            </div>

            <div class="events-block-row-mobile swiper-container js-events-swiper">
                <div class="events-block-row-mobile-title c-red">
                    Деловая программа
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="data/events-items/event-1.php" data-side-modal data-side-modal-class="side-modal-event" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования как инструмент консолидации городского сообщества»
                                </div>
                                <div class="events-block-item-text">
                                    Конференция министров образования
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="data/events-items/event-2.php" data-side-modal data-side-modal-class="side-modal-event" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования с высокими возможностями для каждого: международный опыт, оценка, внедрение»
                                </div>
                                <div class="events-block-item-text">
                                    Международная конференция с участием руководителя Федеральной службы по надзору в сфере образования и науки
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

            <div class="events-block-row-mobile swiper-container js-events-swiper">
                <div class="events-block-row-mobile-title c-orange">
                    Специальные мероприятия
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования как инструмент консолидации городского сообщества»
                                </div>
                                <div class="events-block-item-text">
                                    Конференция министров образования
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования с высокими возможностями для каждого: международный опыт, оценка, внедрение»
                                </div>
                                <div class="events-block-item-text">
                                    Международная конференция с участием руководителя Федеральной службы по надзору в сфере образования и науки
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

            <div class="events-block-row-mobile swiper-container js-events-swiper">
                <div class="events-block-row-mobile-title c-green">
                    Культурная программа
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования как инструмент консолидации городского сообщества»
                                </div>
                                <div class="events-block-item-text">
                                    Конференция министров образования
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования с высокими возможностями для каждого: международный опыт, оценка, внедрение»
                                </div>
                                <div class="events-block-item-text">
                                    Международная конференция с участием руководителя Федеральной службы по надзору в сфере образования и науки
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

            <div class="events-block-row-mobile swiper-container js-events-swiper">
                <div class="events-block-row-mobile-title c-green">
                    Спортивные мероприятия
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования как инструмент консолидации городского сообщества»
                                </div>
                                <div class="events-block-item-text">
                                    Конференция министров образования
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="events-block-item">
                            <div class="events-block-item-content">
                                <div class="events-block-item-title">
                                    «Система образования с высокими возможностями для каждого: международный опыт, оценка, внедрение»
                                </div>
                                <div class="events-block-item-text">
                                    Международная конференция с участием руководителя Федеральной службы по надзору в сфере образования и науки
                                </div>
                            </div>

                            <div class="events-block-item-meta">
                                <div class="events-block-item-date">
                                    <span class="events-block-item-date-value">7</span> сентября
                                </div>

                                <div class="events-block-item-readmore">
                                    <?php include "images/icons/icon-arrow-right-red.svg"; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

            <div class="events-block-buttons">
                <a href="#" class="button button-blue-hollow">Полная программа</a>
            </div>
        </div>
    </section>

    <section class="speakers-block">
        <div class="wrapper">
            <h2 class="speakers-block-title">150 российских и международных <a href="#">спикеров</a></h2>

            <div class="swiper-container js-speakers-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="speakers-block-row">
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/sergey-kravcov.jpg" alt="Сергей Кравцов">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Сергей Кравцов
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Руководитель Федеральной службы по надзору в сфере образования и науки
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/issak-kalina.jpg" alt="Исаак Калина">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Исаак Калина
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Руководитель Департамента образования города Москвы
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/andreas-shlyayher.jpg" alt="Андреас Шляйхер">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Андреас Шляйхер
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Руководитель Директората по образованию и  компетенциям  Организации экономич…
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/peter-adams.jpg" alt="Питер Адамс">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Питер Адамс
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Старший менеджер проект PISA  Организации  экономического  сотрудничества и развития
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/dirk-hasted.jpg" alt="Дирк Хастед">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Дирк Хастед
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Директор  Международной  ассоциации по оценке  образовательных  достижений
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="speakers-block-row">
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/sergey-kravcov.jpg" alt="Сергей Кравцов">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Сергей Кравцов
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Руководитель Федеральной службы по надзору в сфере образования и науки
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/issak-kalina.jpg" alt="Исаак Калина">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Исаак Калина
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Руководитель Департамента образования города Москвы
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/andreas-shlyayher.jpg" alt="Андреас Шляйхер">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Андреас Шляйхер
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Руководитель Директората по образованию и  компетенциям  Организации экономич…
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/peter-adams.jpg" alt="Питер Адамс">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Питер Адамс
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Старший менеджер проект PISA  Организации  экономического  сотрудничества и развития
                                    </div>
                                </div>
                            </a>
                            <a href="#" data-side-modal="#speaker-side-modal-1" data-side-modal-class="side-modal-wide side-modal-speaker" class="speakers-block-row-item">
                                <div class="speakers-block-row-item-photo">
                                    <img src="images/tmp/speakers/dirk-hasted.jpg" alt="Дирк Хастед">
                                </div>
                                <div class="speakers-block-row-item-text">
                                    <div class="speakers-block-row-item-name">
                                        Дирк Хастед
                                    </div>
                                    <div class="speakers-block-row-item-title">
                                        Директор  Международной  ассоциации по оценке  образовательных  достижений
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="speakers-block-buttons">
                    <a href="#" class="button button-blue-hollow speakers-block-button-prev js-speakers-block-button-prev">
                        <?php include "images/icons/icon-pagination-prev.svg"; ?>
                    </a>

                    <a href="#" class="button button-blue-hollow">Все спикеры</a>

                    <a href="#" class="button button-blue-hollow speakers-block-button-next js-speakers-block-button-next">
                        <?php include "images/icons/icon-pagination-next.svg"; ?>
                    </a>
                </div>
            </div>
        </div>

        <?php /* SPEAKERS HIDDEN MODALS */ ?>
        <div class="speakers-modals" style="display: none;">
            <div id="speaker-side-modal-1">
                <div class="side-modal-speaker-card">
                    <div class="side-modal-speaker-card-text">
                        <div class="side-modal-speaker-name">
                            Андреас Шляйхер
                        </div>

                        <div class="side-modal-speaker-title">
                            Вице-президент / Председатель рабочей группы по модернизации и инновациям
                        </div>

                        <div class="side-modal-speaker-subtitle">
                            AББ Россия / Ассоциация
                            Европейского Бизнеса
                        </div>
                    </div>
                    <div class="side-modal-speaker-card-photo">
                        <img src="images/tmp/speakers/andreas-shlyayher-large.jpg" alt="Андреас Шляйхер">
                    </div>
                </div>

                <div class="side-modal-speaker-about">
                    <div class="side-modal-speaker-about-title">
                        О спикере
                    </div>

                    <p>
                        В преддверии Второй международной конференции «Использование результатов исследований качества образования — проблемы и перспективы», которая пройдет в МИА «Россия сегодня» 29-30 сентября, директор Департамента по образованию Организации по экономическому сотрудничеству и развитию Андреас Шляйхер рассказал корреспонденту РИА Новости Антону Звереву о главных выводах престижного исследования за последнее десятилетие и о том, как влияет эта программа на политику образования в разных странах.
                    </p>
                </div>

                <div class="side-modal-speaker-events">
                    <div class="side-modal-speaker-events-title">
                        Выступления
                    </div>
                    <a href="#" class="side-modal-speaker-events-item">
                        <div class="side-modal-speaker-events-item-title">
                            «Система образования как инструмент консолидации городского сообщества»
                        </div>

                        <div class="side-modal-speaker-events-item-meta">
                            <div class="side-modal-speaker-events-item-date">
                                <span class="side-modal-speaker-events-item-date-icon">
                                    <?php include "images/icons/icon-modal-calendar.svg"; ?>
                                </span>
                                7 сентября, 14:00
                            </div>
                            <div class="side-modal-speaker-events-item-place">
                                <span class="side-modal-speaker-events-item-place-icon">
                                    <?php include "images/icons/icon-modal-marker.svg"; ?>
                                </span>
                                Основной зал 1
                            </div>
                        </div>
                    </a>

                    <a href="#" class="side-modal-speaker-events-item">
                        <div class="side-modal-speaker-events-item-title">
                            Съезд учителей города Москвы
                        </div>

                        <div class="side-modal-speaker-events-item-meta">
                            <div class="side-modal-speaker-events-item-date">
                                <span class="side-modal-speaker-events-item-date-icon">
                                    <?php include "images/icons/icon-modal-calendar.svg"; ?>
                                </span>
                                7 сентября, 14:00
                            </div>
                            <div class="side-modal-speaker-events-item-place">
                                <span class="side-modal-speaker-events-item-place-icon">
                                    <?php include "images/icons/icon-modal-marker.svg"; ?>
                                </span>
                                Основной зал 2
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="exhibition-block">
        <div class="wrapper">
            <div class="exhibition-block-content">
                <div class="exhibition-block-title">
                    Выставка с участием 150+ российских и зарубежных компаний
                </div>

                <div class="exhibition-block-sections">
                    <div class="exhibition-block-sections-item">
                        <div class="exhibition-block-sections-item-icon">
                            <?php include "images/icons/icon-exhibition-tech.svg"; ?>
                        </div>
                        <div class="exhibition-block-sections-item-text">
                            <div class="exhibition-block-sections-item-title">
                                Новые
                            </div>
                            <div class="exhibition-block-sections-item-subtitle">
                                Технологии
                            </div>
                        </div>
                    </div>

                    <div class="exhibition-block-sections-item">
                        <div class="exhibition-block-sections-item-icon">
                            <?php include "images/icons/icon-exhibition-education.svg"; ?>
                        </div>
                        <div class="exhibition-block-sections-item-text">
                            <div class="exhibition-block-sections-item-title">
                                Классическое
                            </div>
                            <div class="exhibition-block-sections-item-subtitle">
                                Образование
                            </div>
                        </div>
                    </div>

                    <div class="exhibition-block-sections-item">
                        <div class="exhibition-block-sections-item-icon">
                            <?php include "images/icons/icon-exhibition-vr.svg"; ?>
                        </div>
                        <div class="exhibition-block-sections-item-text">
                            <div class="exhibition-block-sections-item-title">
                                Виртуальная
                            </div>
                            <div class="exhibition-block-sections-item-subtitle">
                                Реальность
                            </div>
                        </div>
                    </div>

                    <div class="exhibition-block-sections-item">
                        <div class="exhibition-block-sections-item-icon">
                            <?php include "images/icons/icon-exhibition-corp.svg"; ?>
                        </div>
                        <div class="exhibition-block-sections-item-text">
                            <div class="exhibition-block-sections-item-title">
                                Корпоративное
                            </div>
                            <div class="exhibition-block-sections-item-subtitle">
                                Обучение
                            </div>
                        </div>
                    </div>

                    <div class="exhibition-block-sections-item">
                        <div class="exhibition-block-sections-item-icon">
                            <?php include "images/icons/icon-exhibition-robo.svg"; ?>
                        </div>
                        <div class="exhibition-block-sections-item-text">
                            <div class="exhibition-block-sections-item-title">
                                Робо
                            </div>
                            <div class="exhibition-block-sections-item-subtitle">
                                Техника
                            </div>
                        </div>
                    </div>

                    <div class="exhibition-block-sections-item">
                        <div class="exhibition-block-sections-item-icon">
                            <?php include "images/icons/icon-exhibition-lang.svg"; ?>
                        </div>
                        <div class="exhibition-block-sections-item-text">
                            <div class="exhibition-block-sections-item-title">
                                Иностранные
                            </div>
                            <div class="exhibition-block-sections-item-subtitle">
                                Языки
                            </div>
                        </div>
                    </div>

                    <div class="exhibition-block-sections-item">
                        <div class="exhibition-block-sections-item-icon">
                            <?php include "images/icons/icon-exhibition-games.svg"; ?>
                        </div>
                        <div class="exhibition-block-sections-item-text">
                            <div class="exhibition-block-sections-item-title">
                                Развивающие
                            </div>
                            <div class="exhibition-block-sections-item-subtitle">
                                Игры
                            </div>
                        </div>
                    </div>
                </div>
                <div class="exhibition-block-buttons">
                    <a href="modal-exhibition-registration.php" data-side-modal data-side-modal-class="registration-modal" class="button button-red">Заявка на участие</a>
                </div>
            </div>

            <div class="exhibition-block-map"></div>
        </div>
    </section>

    <section class="sponsors-block">
        <div class="wrapper">
            <h2 class="sponsors-block-title">Организаторы и партнеры</h2>

            <section class="sponsors-block-section">
                <h3 class="sponsors-block-subtitle">
                    Организаторы
                </h3>

                <div class="sponsors-block-row">
                    <div class="sponsors-block-row-cell">
                        <a href="#" class="sponsors-block-row-item">
                                <img src="images/tmp/sponsors/pravitelstvo-moskvy.png" alt="Правительство Москвы">
                        </a>
                    </div>
                    <div class="sponsors-block-row-cell">
                        <a href="#" class="sponsors-block-row-item">
                            <img src="images/tmp/sponsors/departament-obrazovaniya-moskvi.png" alt="Департамент образования города Москвы">
                        </a>
                    </div>
                    <div class="sponsors-block-row-cell">
                        <a href="#" class="sponsors-block-row-item">
                            <img src="images/tmp/sponsors/departament-svyazey.png" alt="Департамент внешнеэкономических и международных связей города Москвы">
                        </a>
                    </div>
                    <div class="sponsors-block-row-cell">
                        <a href="#" class="sponsors-block-row-item">
                            <img src="images/tmp/sponsors/departament-it.png" alt="Департамент информационных технологий города Москвы">
                        </a>
                    </div>
                </div>
            </section>

            <section class="sponsors-block-section">
                <div class="sponsors-block-row">
                    <div class="sponsors-block-row-cell">
                        <h3 class="sponsors-block-subtitle">
                            Соорганизаторы
                        </h3>

                        <a href="#" class="sponsors-block-row-item">
                            <img src="images/tmp/sponsors/organizator-1.png" alt="">
                        </a>
                    </div>

                    <div class="sponsors-block-row-cell">
                        <div class="sponsors-block-subtitle">&nbsp;</div>
                        <a href="#" class="sponsors-block-row-item">
                            <img src="images/tmp/sponsors/organizator-2.png" alt="">
                        </a>
                    </div>

                    <div class="sponsors-block-row-cell">
                        <div class="sponsors-block-subtitle">
                            При поддержке
                        </div>
                        <a href="#" class="sponsors-block-row-item">
                            <img src="images/tmp/sponsors/organizator-3.png" alt="">
                        </a>
                    </div>
                </div>
            </section>

            <section class="sponsors-block-section">
                <h3 class="sponsors-block-subtitle">
                    Партнеры
                </h3>

                <div class="swiper-container sponsors-block-swiper-container js-sponsors-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsors-block-row">
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-1.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-2.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-3.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-4.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-5.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-6.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-7.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-8.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-9.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-10.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-11.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-12.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsors-block-row">
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-1.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-2.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-3.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-4.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-5.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-6.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-7.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-8.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-9.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-10.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-11.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-12.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsors-block-row">
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-1.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-2.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-3.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-4.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-5.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-6.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-7.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-8.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-9.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-10.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-11.png" alt="">
                                    </a>
                                </div>
                                <div class="sponsors-block-row-cell">
                                    <a href="#" class="sponsors-block-row-item">
                                        <img src="images/tmp/sponsors/partner-12.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
    </section>
</main>

<footer class="main-footer">
    <div class="wrapper">
        <div class="main-footer-contacts">
            <div class="main-footer-logo">
                <img src="images/logo-white.svg" alt="Город Образования">
            </div>

            <div class="main-footer-links">
                <a href="tel:+7(495)000-00-00">
                    <?php include "images/icons/icon-phone.svg"; ?>
                    +7 (495) 000-00-00
                </a>
                <br>
                <a href="mailto:info@moscowglobal.com">
                    <?php include "images/icons/icon-letter.svg"; ?>
                    info@moscowglobalforum.ru
                </a>
            </div>
            
            <div class="main-footer-socials">
                <div class="socials-block">
                    <div class="socials-block-items">
                        <a href="#" target="_blank" class="socials-block-item">
                            <?php include "images/icons/icon-vk.svg"; ?>
                        </a>
                        <a href="#" target="_blank" class="socials-block-item">
                            <?php include "images/icons/icon-facebook.svg"; ?>
                        </a>
                        <a href="#" target="_blank" class="socials-block-item">
                            <?php include "images/icons/icon-twitter.svg"; ?>
                        </a>
                        <a href="#" target="_blank" class="socials-block-item">
                            <?php include "images/icons/icon-instagram.svg"; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer-menu">
            <div class="main-footer-menu-column">
                <ul>
                    <li class="parent">
                        <a href="#">О форуме</a>

                        <ul>
                            <li><a href="#">Посетителям</a></li>
                            <li><a href="#">Экспонентам</a></li>
                            <li><a href="#">Партнерам</a></li>
                            <li><a href="#">СМИ</a></li>
                            <li><a href="#">Полезная информация</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="main-footer-menu-column">
                <ul>
                    <li class="parent">
                        <a href="#">Программа</a>

                        <ul>
                            <li><a href="#">Деловая программа</a></li>
                            <li><a href="#">Специальные мероприятия</a></li>
                            <li><a href="#">Партнерам</a></li>
                            <li><a href="#">Культурная программа</a></li>
                            <li><a href="#">Спортивные мероприятия</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="main-footer-menu-column">
                <ul>
                    <li class="parent">
                        <a href="#">Выставка</a>

                        <ul>
                            <li><a href="#">Каталог экспонентов</a></li>
                            <li><a href="#">Схема выставки</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Спикеры</a>
                    </li>
                    <li>
                        <a href="#">Новости</a>
                    </li>
                </ul>
            </div>
            <div class="main-footer-menu-column">
                <ul>
                    <li class="parent">
                        <a href="#">Партнеры</a>

                        <ul>
                            <li><a href="#">Генеральные партнеры</a></li>
                            <li><a href="#">Медиа партнеры</a></li>
                            <li><a href="#">Партнеры выставки и деловой программы</a></li>
                        </ul>
                    </li>
                    <li class="parent">
                        <a href="#">Контакты</a>

                        <ul>
                            <li><a href="#">Карта/схема ВДНХ</a></li>
                            <li><a href="#">Задать вопрос</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-footer-menu-mobile">
            <ul>
                <li class="parent">
                    <button class="main-footer-menu-mobile-toggle js-mobile-menu-toggle">
                        <?php include "images/icons/icon-arrow-down.svg"; ?>
                    </button>
                    <a href="#">О форуме</a>
                    <ul>
                        <li><a href="#">Посетителям</a></li>
                        <li><a href="#">Экспонентам</a></li>
                        <li><a href="#">Партнерам</a></li>
                        <li><a href="#">СМИ</a></li>
                        <li><a href="#">Полезная информация</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <button class="main-footer-menu-mobile-toggle js-mobile-menu-toggle">
                        <?php include "images/icons/icon-arrow-down.svg"; ?>
                    </button>
                    <a href="#">Программа</a>
                    <ul>
                        <li><a href="#">Деловая программа</a></li>
                        <li><a href="#">Специальные мероприятия</a></li>
                        <li><a href="#">Партнерам</a></li>
                        <li><a href="#">Культурная программа</a></li>
                        <li><a href="#">Спортивные мероприятия</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <button class="main-footer-menu-mobile-toggle js-mobile-menu-toggle">
                        <?php include "images/icons/icon-arrow-down.svg"; ?>
                    </button>
                    <a href="#">Выставка</a>
                    <ul>
                        <li><a href="#">Каталог экспонентов</a></li>
                        <li><a href="#">Схема выставки</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Спикеры</a>
                </li>
                <li>
                    <a href="#">Новости</a>
                </li>
                <li class="parent">
                    <button class="main-footer-menu-mobile-toggle js-mobile-menu-toggle">
                        <?php include "images/icons/icon-arrow-down.svg"; ?>
                    </button>
                    <a href="#">Партнеры</a>
                    <ul>
                        <li><a href="#">Генеральные партнеры</a></li>
                        <li><a href="#">Медиа партнеры</a></li>
                        <li><a href="#">Партнеры выставки и деловой программы</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <button class="main-footer-menu-mobile-toggle js-mobile-menu-toggle">
                        <?php include "images/icons/icon-arrow-down.svg"; ?>
                    </button>
                    <a href="#">Контакты</a>
                    <ul>
                        <li><a href="#">Карта/схема ВДНХ</a></li>
                        <li><a href="#">Задать вопрос</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</footer>

<section class="contacts-map-block">
    <div id="js-contacts-map" data-map-coords="55.83110973, 37.63869129" data-map-zoom="16" data-map-data="data/contacts-map-data.json" class="contacts-map-block-map"></div>
</section>

<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU&onload=initContactsMap"></script>
<script src="build/scripts.min.js"></script>
</body>
</html>