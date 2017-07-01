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
    <div class="main-heading main-heading-red">
        <div class="wrapper">
            <h1 class="main-heading-title">Спикеры</h1>

            <form action="#" method="POST" class="main-heading-search-form">
                <input type="search" name="search" class="main-heading-search-input" placeholder="Поиск">
                <input type="submit" value="" class="main-heading-search-submit">
            </form>
        </div>
    </div>

    <nav class="subnav">
        <div class="wrapper">
            <ul class="subnav-list">
                <li class="subnav-list-item active">
                    <a href="#" class="subnav-link active">
                        <span>Все</span>
                    </a>
                </li>
                <?php
                    $alph = ['А', 'Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ы','Э','Ю','Я',];
                ?>
                <?php foreach ($alph as $letter) : ?>
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span><?php echo $letter; ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <div class="speakers-block">
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
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
</body>
</html>