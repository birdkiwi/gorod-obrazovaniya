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
                Экспозиция
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
                    <a href="exhibition-catalog.php" class="subnav-link">
                        <span>Каталог компаний</span>
                    </a>
                </li>
                <li class="subnav-list-item active">
                    <a href="exhibition-scheme.php" class="subnav-link">
                        <span>Схема</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="exhibition-scheme">
        <div class="wrapper">
            <h1>ВДНХ, Павильон 75, зал В</h1>
        </div>
        <div class="wrapper m-t-xl m-b-xl">
            <div class="exhibition-scheme-list baron">
                <div class="baron__scroller">
                    <div class="exhibition-scheme-scroll">
                        <div class="exhibition-scheme-scroll-track js-exhibition-scheme-scroll-track">
                            <div class="exhibition-scheme-scrollbar js-exhibition-scheme-scrollbar"></div>
                        </div>
                    </div>

                    <div class="baron__track">
                        <div class="baron__control baron__up">▲</div>
                        <div class="baron__free">
                            <div class="baron__bar"></div>
                        </div>
                        <div class="baron__control baron__down">▼</div>
                    </div>


                    <a href="#rezom-tekhnolodzhi" class="exhibition-scheme-list-item" data-exhibition-scheme-id="rezom-tekhnolodzhi">
                        <span class="exhibition-scheme-list-item-place">A1.1</span>
                        Пресс-центр
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A1.2</span>
                        МосОбрТВ
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A2.1</span>
                        Lego Education
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A2.2</span>
                        Рособрнадзор и Ростелеком
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A3.1</span>
                        Техносфера/Темоцентр
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A4.1</span>
                        Издательство «Просвещение»
                    </a>

                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A1.1</span>
                        Пресс-центр
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A1.2</span>
                        МосОбрТВ
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A2.1</span>
                        Lego Education
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A2.2</span>
                        Рособрнадзор и Ростелеком
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A3.1</span>
                        Техносфера/Темоцентр
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A4.1</span>
                        Издательство «Просвещение»
                    </a>

                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A1.1</span>
                        Пресс-центр
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A1.2</span>
                        МосОбрТВ
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A2.1</span>
                        Lego Education
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A2.2</span>
                        Рособрнадзор и Ростелеком
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A3.1</span>
                        Техносфера/Темоцентр
                    </a>
                    <a href="#" class="exhibition-scheme-list-item">
                        <span class="exhibition-scheme-list-item-place">A4.1</span>
                        Издательство «Просвещение»
                    </a>
                </div>
            </div>
            <div id="exhibition-scheme-svg" class="exhibition-scheme-svg">
                <?php include "images/scheme.svg"; ?>
            </div>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
<script src="js/exhibition-scheme.js"></script>
</body>
</html>