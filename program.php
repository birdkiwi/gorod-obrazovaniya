<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=960">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Город образования</title>
    <link rel="stylesheet" href="build/style.min.css">
    <meta name="theme-color" content="#006A98">
</head>
<body>

<?php include "blocks/offcanvas.php"; ?>
<?php include "blocks/header-user-program.php"; ?>

<main class="main-content">
    <div class="main-heading main-heading-red program-table-main-heading">
        <div class="wrapper">
            <h1 class="main-heading-title">Программа</h1>

            <div>
                <div class="main-heading-tabs">
                    <a href="#" class="main-heading-tabs-item active">
                        7 сентября
                    </a>
                    <a href="#" class="main-heading-tabs-item">
                        8 сентября
                    </a>
                    <a href="#" class="main-heading-tabs-item">
                        9 сентября
                    </a>
                </div>


            </div>

            <div class="main-heading-links">
                <a href="#" class="no-td">
                    <?php include "images/icons/icon-program-download.svg"; ?>
                    <span class="dotted">Скачать программу</span>
                </a>
            </div>
        </div>
    </div>

    <nav class="subnav program-table-subnav">
        <div class="wrapper">
            <ul class="subnav-list subnav-list-program subnav-list-wide">
                <li class="subnav-list-item active">
                    <a href="#" class="subnav-link">
                        <span>Вся программа</span>
                    </a>
                </li>
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Деловая программа</span>
                    </a>
                </li>
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Специальные мероприятия</span>
                    </a>
                </li>
            </ul>

            <ul class="subnav-list subnav-list-program subnav-list-wide subnav-list-right">
                <li class="subnav-list-item">
                    <div class="program-table-filter">
                        <div class="program-table-filter-select">
                            Все события
                        </div>
                        <!--
                        Пример выбранного события:
                        <div class="program-table-filter-select program-table-filter-select-red">
                            Фильтр №1
                        </div>
                        -->
                        <div class="program-table-filter-dropdown-wrapper">
                            <div class="program-table-filter-dropdown">
                                <a href="#" class="program-table-filter-item program-table-filter-item-red">
                                    Фильтр №1
                                </a>
                                <a href="#" class="program-table-filter-item program-table-filter-item-orange">
                                    Фильтр №2
                                </a>
                                <a href="#" class="program-table-filter-item program-table-filter-item-blue">
                                    Фильтр №3
                                </a>
                                <a href="#" class="program-table-filter-item program-table-filter-item-navy">
                                    Фильтр №4
                                </a>
                                <a href="#" class="program-table-filter-item program-table-filter-item-green">
                                    Фильтр №5
                                </a>
                                <a href="#" class="program-table-filter-item program-table-filter-item-green-light">
                                    Фильтр №5
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="subnav-list-item">
                    <form action="program.php" method="GET" data-program-search="data/program-events.json" class="program-table-search">
                        <input type="text" class="program-table-search-input" placeholder="Поиск событий" name="search">
                        <button type="submit" class="program-table-search-button"></button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="program-table-wrapper js-program-table-scroll">
        <div class="program-table">
            <div class="program-table-scrollable js-program-table-scrollable">
                <div class="program-table-timeline">
                    <div class="program-table-timeline-date">
                        <div class="program-table-timeline-date-title">7</div>
                        сентября
                    </div>
                    <div class="program-table-timeline-hour">
                        <div class="program-table-timeline-hour-title">9:00</div>
                        <div class="program-table-timeline-hour-quarter">9:15</div>
                        <div class="program-table-timeline-hour-quarter">9:30</div>
                        <div class="program-table-timeline-hour-quarter">9:45</div>
                    </div>
                    <div class="program-table-timeline-hour">
                        <div class="program-table-timeline-hour-title">10:00</div>
                        <div class="program-table-timeline-hour-quarter">10:15</div>
                        <div class="program-table-timeline-hour-quarter">10:30</div>
                        <div class="program-table-timeline-hour-quarter">10:45</div>
                    </div>
                    <div class="program-table-timeline-hour program-table-timeline-hour-large">
                        <div class="program-table-timeline-hour-title">11:00</div>
                        <div class="program-table-timeline-hour-quarter">11:15</div>
                        <div class="program-table-timeline-hour-quarter">11:30</div>
                        <div class="program-table-timeline-hour-quarter">11:45</div>
                    </div>
                    <div class="program-table-timeline-hour program-table-timeline-hour-large">
                        <div class="program-table-timeline-hour-title">12:00</div>
                        <div class="program-table-timeline-hour-quarter">12:15</div>
                        <div class="program-table-timeline-hour-quarter">12:30</div>
                        <div class="program-table-timeline-hour-quarter">12:45</div>
                    </div>
                    <div class="program-table-timeline-hour program-table-timeline-hour-large">
                        <div class="program-table-timeline-hour-title">13:00</div>
                        <div class="program-table-timeline-hour-quarter">13:15</div>
                        <div class="program-table-timeline-hour-quarter">13:30</div>
                        <div class="program-table-timeline-hour-quarter">13:45</div>
                    </div>
                    <div class="program-table-timeline-hour program-table-timeline-hour-large">
                        <div class="program-table-timeline-hour-title">14:00</div>
                        <div class="program-table-timeline-hour-quarter">14:15</div>
                        <div class="program-table-timeline-hour-quarter">14:30</div>
                        <div class="program-table-timeline-hour-quarter">14:45</div>
                    </div>
                    <div class="program-table-timeline-hour program-table-timeline-hour-large">
                        <div class="program-table-timeline-hour-title">15:00</div>
                        <div class="program-table-timeline-hour-quarter">15:15</div>
                        <div class="program-table-timeline-hour-quarter">15:30</div>
                        <div class="program-table-timeline-hour-quarter">15:45</div>
                    </div>
                </div>
                <div class="program-table-heading">
                    <div class="program-table-heading-cell">
                        <div class="program-table-heading-cell-title">Конференц-зал</div>
                    </div>
                    <div class="program-table-heading-cell">
                        <div class="program-table-heading-cell-title">Зона 1</div>
                    </div>
                    <div class="program-table-heading-cell">
                        <div class="program-table-heading-cell-title">Зона 2</div>
                    </div>
                    <div class="program-table-heading-cell">
                        <div class="program-table-heading-cell-title">Зона 3</div>
                    </div>
                    <div class="program-table-heading-cell">
                        <div class="program-table-heading-cell-title">Конференц-зал 1</div>
                    </div>
                    <div class="program-table-heading-cell">
                        <div class="program-table-heading-cell-title">Конференц-зал 2</div>
                    </div>
                    <div class="program-table-heading-cell">
                        <div class="program-table-heading-cell-title">Конференц-зал 3</div>
                    </div>
                </div>
                <div class="program-table-scroll">
                    <div class="program-table-scroll-track js-program-table-scroll-track">
                        <div class="program-table-scroll-left js-program-table-scroll-left"></div>
                        <div class="program-table-scrollbar js-program-table-scrollbar"></div>
                        <div class="program-table-scroll-right js-program-table-scroll-right"></div>
                    </div>
                </div>
                <div class="program-table-columns">
                    <div class="program-table-column">
                        <!-- 9:00 — 10:00 -->
                        <div class="program-table-column-hour">
                            <a href="#" class="program-table-event program-table-event-global program-table-event-offset-30 program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        09:30 — 10:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>

                                <div class="program-table-event-title">
                                    Пре-конференция: деловой завтрак спикеров форума со школьниками
                                </div>
                            </a>
                        </div>

                        <!-- 10:00 — 11:00 -->
                        <div class="program-table-column-hour">
                            <a href="#" class="program-table-event program-table-event-red program-table-event-global program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        10:00 — 11:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>

                                <div class="program-table-event-title">
                                    Открытие дня: Панельная дискуссия
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="program-table-event-speakers">
                                            <p>
                                                <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                            </p>
                                            <p>
                                                <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="program-table-event-speakers">
                                            <p>
                                                <b>Людмила Мясникова</b>, председатель городского совета родительской общественности
                                            </p>
                                            <p>
                                                <b>Анне-Берит Кавли</b>, Президент Международной ассоциации по оценке учебных достижений (IEA)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="program-table-event-speakers">
                                            <p>
                                                <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                            </p>
                                            <p>
                                                <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- 11:00 — 12:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-green program-table-event-height-120">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:00 — 13:00
                                    </span>
                                    <div class="program-table-event-meta-fav active" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Панельная дискуссия: как правильно преподавать STEM-дисциплины в школе (Dan Meyer, Arthur Benjamin и пр.)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 12:00 — 13:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-orange program-table-event-offset-30 program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        12:30 — 13:30
                                    </span>
                                    <div class="program-table-event-meta-fav active" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Панельная дискуссия: как правильно преподавать STEM-дисциплины в школе (Dan Meyer, Arthur Benjamin и пр.)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 13:00 — 14:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-blue program-table-event-offset-30 program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        13:30 — 14:30
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Закрытый показ: самые инновационные школы в мире и России. Оценка эффективности образования (Piter Adams. PISA) Дискуссия.
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 14:00 — 15:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-navy program-table-event-offset-30 program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        14:30 — 15:30
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Закрытый показ: самые инновационные школы в мире и России. Оценка эффективности образования (Piter Adams. PISA) Дискуссия.
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 15:00 — 16:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">

                        </div>
                    </div>

                    <div class="program-table-column">
                        <!-- 9:00 — 10:00 -->
                        <div class="program-table-column-hour">
                            <a href="#" class="program-table-event program-table-event-width-2 program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        9:00 — 9:30
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотрудников
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 10:00 — 11:00 -->
                        <div class="program-table-column-hour">

                        </div>

                        <!-- 11:00 — 12:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:00 — 11:30
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотрудников
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="program-table-event program-table-event-offset-30 program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:30 — 12:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 12:00 — 13:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        12:00 — 13:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 13:00 — 14:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        13:00 — 14:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Coursera, Udemy, Udacity, EdX, Lektorium, Stepik. MOOC в контексте смешанного обучения
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 14:00 — 15:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-45">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        14:00 — 14:45
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="program-table-column">
                        <!-- 9:00 — 10:00 -->
                        <div class="program-table-column-hour">

                        </div>

                        <!-- 10:00 — 11:00 -->
                        <div class="program-table-column-hour">

                        </div>

                        <!-- 11:00 — 12:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-green-light program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:00 — 11:30
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотрудников
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="program-table-event program-table-event-offset-30 program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:30 — 12:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 12:00 — 13:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-blue program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        12:00 — 13:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 13:00 — 14:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        13:00 — 14:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Coursera, Udemy, Udacity, EdX, Lektorium, Stepik. MOOC в контексте смешанного обучения
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 14:00 — 15:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-45">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        14:00 — 14:45
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="program-table-column">
                        <!-- 9:00 — 10:00 -->
                        <div class="program-table-column-hour">
                            <a href="#" class="program-table-event program-table-event-green-light program-table-event-width-3 program-table-event-height-20">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        9:00 — 9:20
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотрудников
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 10:00 — 11:00 -->
                        <div class="program-table-column-hour">

                        </div>

                        <!-- 11:00 — 12:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:00 — 11:30
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотрудников
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="program-table-event program-table-event-offset-30 program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:30 — 12:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 12:00 — 13:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        12:00 — 13:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 13:00 — 14:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        13:00 — 14:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Coursera, Udemy, Udacity, EdX, Lektorium, Stepik. MOOC в контексте смешанного обучения
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 14:00 — 15:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-45">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        14:00 — 14:45
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="program-table-column">
                        <!-- 9:00 — 10:00 -->
                        <div class="program-table-column-hour">

                        </div>

                        <!-- 10:00 — 11:00 -->
                        <div class="program-table-column-hour">

                        </div>

                        <!-- 11:00 — 12:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:00 — 11:30
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотрудников
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="program-table-event program-table-event-offset-30 program-table-event-height-30">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:30 — 12:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 12:00 — 13:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        12:00 — 13:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 13:00 — 14:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        13:00 — 14:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Coursera, Udemy, Udacity, EdX, Lektorium, Stepik. MOOC в контексте смешанного обучения
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 14:00 — 15:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-45">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        14:00 — 14:45
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="program-table-column">
                        <!-- 9:00 — 10:00 -->
                        <div class="program-table-column-hour">
                        </div>

                        <!-- 10:00 — 11:00 -->
                        <div class="program-table-column-hour">

                        </div>

                        <!-- 11:00 — 12:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-20">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:00 — 11:20
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотрудников
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="program-table-event program-table-event-offset-20 program-table-event-height-40">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        11:20 — 12:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Christopher Emdin. Учить учителей создавать магию на уроках
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 12:00 — 13:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        12:00 — 13:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 13:00 — 14:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-60">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        13:00 — 14:00
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    Coursera, Udemy, Udacity, EdX, Lektorium, Stepik. MOOC в контексте смешанного обучения
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>

                        <!-- 14:00 — 15:00 -->
                        <div class="program-table-column-hour program-table-column-hour-large">
                            <a href="#" class="program-table-event program-table-event-height-45">
                                <div class="program-table-event-meta">
                                    <span class="program-table-event-meta-date">
                                        14:00 — 14:45
                                    </span>
                                    <div class="program-table-event-meta-fav" data-program-table-fav="program.php">
                                        <?php include "images/icons/icon-program-table-fav.svg"; ?>
                                    </div>
                                </div>
                                <div class="program-table-event-subtitle">
                                    BYOD (про формы педагогической работы)
                                </div>
                                <div class="program-table-event-speakers">
                                    <p>
                                        <b>Анне-Берит Кавли</b>, президент Международной ассоциации по оценке учебных достижений (IEA)
                                    </p>
                                    <p>
                                        <b>Питер Адамс</b>, старший менеджер проекта PISA Организации экономического сотруд...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="program-table-mobile">
        <div class="program-table-mobile-date">
            7 сентября
        </div>

        <div class="program-table-mobile-event">
            <a href="#" class="program-table-mobile-event-content">
                <div class="program-table-mobile-event-name">
                    Christopher Emdin. Учить учителей создавать магию на уроках.
                </div>
                <div class="program-table-mobile-event-meta">
                    <span class="program-table-mobile-event-date">
                        <?php include "images/icons/icon-news-item-clock.svg"; ?>
                        12:00 - 12:30
                    </span>
                    <span class="program-table-mobile-event-location">
                        <?php include "images/icons/icon-map-mark.svg"; ?>
                        Конференц-зал
                    </span>
                </div>
            </a>
            <a href="#" class="program-table-mobile-event-fav">
                <?php include "images/icons/icon-news-item-fav.svg"; ?>
            </a>
        </div>

        <div class="program-table-mobile-event">
            <a href="#" class="program-table-mobile-event-content">
                <div class="program-table-mobile-event-name">
                    Панельная дискуссия: школа и школьное пространство (представители зарубежных школ)
                </div>
                <div class="program-table-mobile-event-meta">
                    <span class="program-table-mobile-event-date">
                        <?php include "images/icons/icon-news-item-clock.svg"; ?>
                        12:30 - 13:00
                    </span>
                    <span class="program-table-mobile-event-location">
                        <?php include "images/icons/icon-map-mark.svg"; ?>
                        Зона 1
                    </span>
                </div>
            </a>
            <a href="#" class="program-table-mobile-event-fav">
                <?php include "images/icons/icon-news-item-fav-active.svg"; ?>
            </a>
        </div>

        <div class="program-table-mobile-date">
            8 сентября
        </div>

        <div class="program-table-mobile-event">
            <a href="#" class="program-table-mobile-event-content">
                <div class="program-table-mobile-event-name">
                    Christopher Emdin. Учить учителей создавать магию на уроках.
                </div>
                <div class="program-table-mobile-event-meta">
                    <span class="program-table-mobile-event-date">
                        <?php include "images/icons/icon-news-item-clock.svg"; ?>
                        12:00 - 12:30
                    </span>
                    <span class="program-table-mobile-event-location">
                        <?php include "images/icons/icon-map-mark.svg"; ?>
                        Конференц-зал
                    </span>
                </div>
            </a>
            <a href="#" class="program-table-mobile-event-fav">
                <?php include "images/icons/icon-news-item-fav.svg"; ?>
            </a>
        </div>

        <div class="program-table-mobile-event">
            <a href="#" class="program-table-mobile-event-content">
                <div class="program-table-mobile-event-name">
                    Панельная дискуссия: школа и школьное пространство (представители зарубежных школ)
                </div>
                <div class="program-table-mobile-event-meta">
                    <span class="program-table-mobile-event-date">
                        <?php include "images/icons/icon-news-item-clock.svg"; ?>
                        12:30 - 13:00
                    </span>
                    <span class="program-table-mobile-event-location">
                        <?php include "images/icons/icon-map-mark.svg"; ?>
                        Зона 1
                    </span>
                </div>
            </a>
            <a href="#" class="program-table-mobile-event-fav">
                <?php include "images/icons/icon-news-item-fav-active.svg"; ?>
            </a>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
<script src="js/program-table.js"></script>
</body>
</html>