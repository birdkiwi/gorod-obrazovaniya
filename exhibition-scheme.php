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
                <li class="subnav-list-item active">
                    <a href="#" class="subnav-link">
                        <span>Схема</span>
                    </a>
                </li>
                <li class="subnav-list-item">
                    <a href="#" class="subnav-link">
                        <span>Каталог компаний</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="exhibition-scheme">
        <div class="wrapper">
            <div class="text-center m-t-xl m-b-xl">
                <img src="images/tmp/exhibition-scheme.png" alt="Выставка">
            </div>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
</body>
</html>