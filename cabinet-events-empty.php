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
                <div class="cabinet-block-events-empty">
                    <div class="cabinet-block-events-empty-logo">
                        <img src="images/logo-image.svg" alt="">
                    </div>
                    <div class="cabinet-block-events-empty-title">
                        У вас нет добавленых событий.
                        Составьте собственное расписание
                    </div>
                    <a href="#" class="button button-blue">Составить расписание</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>

<script src="build/scripts.min.js"></script>
</body>
</html>