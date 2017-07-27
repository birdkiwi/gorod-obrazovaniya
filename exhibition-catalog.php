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
            <h1 class="main-heading-title">Выставка</h1>

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

    <div class="exhibition-catalog">
        <div class="wrapper">
            <aside class="exhibition-catalog-sidebar">
                <div class="exhibition-catalog-sidebar-title">Направления:</div>
                <div class="exhibition-catalog-sidebar-categories">
                    <a href="#" class="exhibition-catalog-sidebar-category exhibition-catalog-sidebar-category-salad-green active">
                        <div class="exhibition-catalog-sidebar-category-subtitle">
                            Новые
                        </div>
                        <div class="exhibition-catalog-sidebar-category-title">
                            технологии
                        </div>
                    </a>

                    <a href="#" class="exhibition-catalog-sidebar-category exhibition-catalog-sidebar-category-blue">
                        <div class="exhibition-catalog-sidebar-category-subtitle">
                            Виртуальная
                        </div>
                        <div class="exhibition-catalog-sidebar-category-title">
                            реальность
                        </div>
                    </a>

                    <a href="#" class="exhibition-catalog-sidebar-category exhibition-catalog-sidebar-category-red">
                        <div class="exhibition-catalog-sidebar-category-subtitle">
                            Робото
                        </div>
                        <div class="exhibition-catalog-sidebar-category-title">
                            техника
                        </div>
                    </a>

                    <a href="#" class="exhibition-catalog-sidebar-category exhibition-catalog-sidebar-category-orange">
                        <div class="exhibition-catalog-sidebar-category-subtitle">
                            Развивающие
                        </div>
                        <div class="exhibition-catalog-sidebar-category-title">
                            игры
                        </div>
                    </a>

                    <a href="#" class="exhibition-catalog-sidebar-category exhibition-catalog-sidebar-category-lightblue">
                        <div class="exhibition-catalog-sidebar-category-subtitle">
                            Классическое
                        </div>
                        <div class="exhibition-catalog-sidebar-category-title">
                            образование
                        </div>
                    </a>

                    <a href="#" class="exhibition-catalog-sidebar-category exhibition-catalog-sidebar-category-green">
                        <div class="exhibition-catalog-sidebar-category-subtitle">
                            Корпоративное
                        </div>
                        <div class="exhibition-catalog-sidebar-category-title">
                            обучение
                        </div>
                    </a>

                    <a href="#" class="exhibition-catalog-sidebar-category exhibition-catalog-sidebar-category-ink">
                        <div class="exhibition-catalog-sidebar-category-subtitle">
                            Иностранные
                        </div>
                        <div class="exhibition-catalog-sidebar-category-title">
                            языки
                        </div>
                    </a>
                </div>
            </aside>
            <div class="exhibition-catalog-content">
                <div class="exhibition-catalog-cards">
                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-1.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                English First
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-2.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Lego
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-3.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Касио
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-4.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Очень преочень длинное название длинной компании
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-1.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                English First
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-2.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Lego
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-3.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Касио
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-4.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Очень преочень длинное название длинной компании
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-1.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                English First
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-2.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Lego
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-3.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Касио
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="exhibition-catalog-card-wrapper">
                        <a href="#" class="exhibition-catalog-card">
                            <div class="exhibition-catalog-card-logo">
                                <img src="images/tmp/sponsors/partner-4.png" alt="">
                            </div>

                            <div class="exhibition-catalog-card-title">
                                Очень преочень длинное название длинной компании
                            </div>

                            <div class="exhibition-catalog-card-desc">
                                <div class="exhibition-catalog-card-stand">
                                    <?php include "images/icons/icon-stand.svg"; ?>
                                    Стенд 22
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="pagination text-center m-b-xl">
                    <ul class="pagination-list">
                        <li class="pagination-list-item disabled">
                    <span class="pagination-link pagination-link-prev">
                        <?php include "images/icons/icon-pagination-prev.svg"; ?>
                    </span>
                        </li>
                        <li class="pagination-list-item active">
                            <span class="pagination-link">1</span>
                        </li>
                        <li class="pagination-list-item">
                            <a href="#" class="pagination-link">2</a>
                        </li>
                        <li class="pagination-list-item">
                            <a href="#" class="pagination-link">3</a>
                        </li>
                        <li class="pagination-list-item">
                            <a href="#" class="pagination-link">4</a>
                        </li>
                        <li class="pagination-list-item">
                            <a href="#" class="pagination-link">5</a>
                        </li>
                        <li class="pagination-list-item">
                            <a href="#" class="pagination-link pagination-link-next">
                                <?php include "images/icons/icon-pagination-next.svg"; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
</body>
</html>