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
                <li class="subnav-list-item active">
                    <a href="cabinet-ticket.php" class="subnav-link">
                        <span>Мой билет</span>
                    </a>
                </li>
                <li class="subnav-list-item">
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
            <div class="cabinet-block-ticket-wrapper">
                <div class="cabinet-block-heading">
                    <div class="cabinet-block-title">
                        Ваш билет
                    </div>

                    <a href="#" class="button button-blue">Скачать билет</a>
                </div>

                <div class="cabinet-block-ticket-bg m-b-lg">
                    <div class="cabinet-block-ticket">
                        <div class="cabinet-block-ticket-header">
                            <img src="images/logo.svg" alt="Город образования">
                        </div>
                        <div class="cabinet-block-ticket-header-desc">
                            Электронный билет
                        </div>

                        <div class="cabinet-block-ticket-body">
                            <div class="cabinet-block-ticket-title">
                                Город образования
                            </div>
                            <div class="cabinet-block-ticket-subtitle">
                                Московский международный форум
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="cabinet-block-ticket-date">
                                        7-9
                                    </div>
                                    <div class="cabinet-block-ticket-date-desc">
                                        сентября
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="cabinet-block-ticket-place">
                                        ВДНХ
                                    </div>
                                    <div class="cabinet-block-ticket-place-desc">
                                        75-й павильон
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="cabinet-block-ticket-footer">
                            <div class="cabinet-block-ticket-code">
                                7792925703
                            </div>
                            <div class="cabinet-block-ticket-barcode">
                                qr
                            </div>
                        </div>
                    </div>
                </div>

                <h2>Возможности билета</h2>

                <div class="cabinet-block-ticket-description">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            Его вдохновляющая идея о самоорганизующихся учебных пространствах предполагает создание «Школы в облаках» – своего рода лаборатории, где дети смогут проводить исследования и обучаться друг у друга, используя ресурсы из «облаков».
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            В выступлениях на международных форумах Сугата Митра предлагает внести кардинальные изменения в нынешнюю систему образования, чтобы изменить вектор дальнейшего развития науки и культуры для последующих поколений.
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