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

    <div class="exhibition-scheme m-b-lg">
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


                    <a href="#shkola-novykh-tekhnologiy" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="shkola-novykh-tekhnologiy">
                        Школа Новых Технологий
                    </a>
                    <a href="#lego" class="exhibition-scheme-list-item" data-exhibition-scheme-id="lego">
                        <span class="exhibition-scheme-list-item-place">A2.1</span>
                        LEGO Education
                    </a>
                    <a href="#rostelekom" class="exhibition-scheme-list-item" data-exhibition-scheme-id="rostelekom">
                        <span class="exhibition-scheme-list-item-place">A2.2</span>
                        Ростелеком
                    </a>
                    <a href="#tekhnosfera-sovremennoy-shkoly" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="tekhnosfera-sovremennoy-shkoly">
                        <span class="exhibition-scheme-list-item-place">A3.1</span>
                        Техносфера современной школы
                    </a>
                    <a href="#izdatelstvo-prosveshchenie" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="izdatelstvo-prosveshchenie">
                        <span class="exhibition-scheme-list-item-place">A4.1</span>
                        Издательство "Просвещение"
                    </a>
                    <a href="#universitet-sinergiya" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="universitet-sinergiya">
                        <span class="exhibition-scheme-list-item-place">A6.1</span>
                        Университет «Синергия»
                    </a>
                    <a href="#infokompas" class="exhibition-scheme-list-item" data-exhibition-scheme-id="infokompas">
                        <span class="exhibition-scheme-list-item-place">A6.2</span>
                        Инфокомпас
                    </a>
                    <a href="#ef-english-first" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="ef-english-first">
                        <span class="exhibition-scheme-list-item-place">A6.3</span>
                        EF English First
                    </a>
                    <a href="#casio-europe-gmbh" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="casio-europe-gmbh">
                        <span class="exhibition-scheme-list-item-place">A6.4</span>
                        CASIO Europe GmbH
                    </a>
                    <a href="#1s" class="exhibition-scheme-list-item" data-exhibition-scheme-id="1s">
                        <span class="exhibition-scheme-list-item-place">A6.5</span>
                        1С
                    </a>
                    <a href="#ministerstvo-obrazovaniya-i-nauki-respubliki-dagestan"
                       class="exhibition-scheme-list-item highlight"
                       data-exhibition-scheme-id="ministerstvo-obrazovaniya-i-nauki-respubliki-dagestan">
                        <span class="exhibition-scheme-list-item-place">A6.6</span>
                        Министерство образования и науки Республики Дагестан
                    </a>
                    <a href="#polimedia" class="exhibition-scheme-list-item" data-exhibition-scheme-id="polimedia">
                        <span class="exhibition-scheme-list-item-place">A6.7</span>
                        Полимедиа
                    </a>
                    <a href="#neolant" class="exhibition-scheme-list-item" data-exhibition-scheme-id="neolant">
                        <span class="exhibition-scheme-list-item-place">A6.8</span>
                        Неолант
                    </a>
                    <a href="#chingis-vr" class="exhibition-scheme-list-item" data-exhibition-scheme-id="chingis-vr">
                        <span class="exhibition-scheme-list-item-place">A7.3</span>
                        Chingis.VR
                    </a>
                    <a href="#foksford" class="exhibition-scheme-list-item" data-exhibition-scheme-id="foksford">
                        <span class="exhibition-scheme-list-item-place">A7.4</span>
                        Фоксфорд
                    </a>
                    <a href="#kodabra" class="exhibition-scheme-list-item" data-exhibition-scheme-id="kodabra">
                        <span class="exhibition-scheme-list-item-place">A7.5</span>
                        Кодабра
                    </a>
                    <a href="#tsentr-patrioticheskogo-vospitaniya-i-shkolnogo-sporta"
                       class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="tsentr-patrioticheskogo-vospitaniya-i-shkolnogo-sporta">
                        <span class="exhibition-scheme-list-item-place">C1.1</span>
                        Центр патриотического воспитания и школьного спорта
                    </a>
                    <a href="#edcomm" class="exhibition-scheme-list-item" data-exhibition-scheme-id="edcomm">
                        <span class="exhibition-scheme-list-item-place">C1.2</span>
                        Edcomm
                    </a>
                    <a href="#novyy-disk" class="exhibition-scheme-list-item" data-exhibition-scheme-id="novyy-disk">
                        <span class="exhibition-scheme-list-item-place">C1.3</span>
                        Новый диск
                    </a>
                    <a href="#letterland-international" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="letterland-international">
                        <span class="exhibition-scheme-list-item-place">C1.4</span>
                        Letterland International
                    </a>
                    <a href="#proekt-professii-budushchey-moskvy" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="proekt-professii-budushchey-moskvy">
                        <span class="exhibition-scheme-list-item-place">C1.5</span>
                        Проект «Профессии будущей Москвы»
                    </a>
                    <a href="#otkrytaya-shkola-rybakov-fond" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="otkrytaya-shkola-rybakov-fond">
                        <span class="exhibition-scheme-list-item-place">C1.6</span>
                        Открытая школа (Рыбаков Фонд)
                    </a>
                    <a href="#uchebno-proizvodstvennye-obedineniya" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="uchebno-proizvodstvennye-obedineniya">
                        <span class="exhibition-scheme-list-item-place">C3.1 - С3.12</span>
                        Учебно-производственные объединения
                    </a>
                    <a href="#muztorg-pro" class="exhibition-scheme-list-item" data-exhibition-scheme-id="muztorg-pro">
                        <span class="exhibition-scheme-list-item-place">C4.3</span>
                        Музторг.PRO
                    </a>
                    <a href="#edudesign" class="exhibition-scheme-list-item" data-exhibition-scheme-id="edudesign">
                        <span class="exhibition-scheme-list-item-place">D1.1</span>
                        EduDesign
                    </a>
                    <a href="#eligovision" class="exhibition-scheme-list-item" data-exhibition-scheme-id="eligovision">
                        <span class="exhibition-scheme-list-item-place">D1.2</span>
                        EligoVision
                    </a>
                    <a href="#proizvodstvennoe-obedinenie-zarnitsa" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="proizvodstvennoe-obedinenie-zarnitsa">
                        <span class="exhibition-scheme-list-item-place">D1.3</span>
                        Производственное объединение «Зарница»
                    </a>
                    <a href="#cyberlit" class="exhibition-scheme-list-item" data-exhibition-scheme-id="cyberlit">
                        <span class="exhibition-scheme-list-item-place">D1.4</span>
                        Cyberlit
                    </a>
                    <a href="#proekt-virtualiya" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="proekt-virtualiya">
                        <span class="exhibition-scheme-list-item-place">D1.5</span>
                        Проект "Виртуалия"
                    </a>
                    <a href="#intesko" class="exhibition-scheme-list-item" data-exhibition-scheme-id="intesko">
                        <span class="exhibition-scheme-list-item-place">D1.6</span>
                        ИНТЭСКО
                    </a>
                    <a href="#rezom-tekhnolodzhi" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="rezom-tekhnolodzhi">
                        <span class="exhibition-scheme-list-item-place">D1.7</span>
                        Резом Технолоджи
                    </a>
                    <a href="#uchi-ru" class="exhibition-scheme-list-item" data-exhibition-scheme-id="uchi-ru">
                        <span class="exhibition-scheme-list-item-place">D1.8</span>
                        Учи.ру
                    </a>
                    <a href="#agentstvo-strategicheskikh-initsiativ" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="agentstvo-strategicheskikh-initsiativ">
                        <span class="exhibition-scheme-list-item-place">D1.8</span>
                        Агентство стратегических инициатив
                    </a>
                    <a href="#ekzamen-tekhnolab" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="ekzamen-tekhnolab">
                        <span class="exhibition-scheme-list-item-place">D2.1</span>
                        Экзамен-Технолаб
                    </a>
                    <a href="#kraftway" class="exhibition-scheme-list-item" data-exhibition-scheme-id="kraftway">
                        <span class="exhibition-scheme-list-item-place">D2.2</span>
                        Kraftway
                    </a>
                    <a href="#picaso-3d" class="exhibition-scheme-list-item" data-exhibition-scheme-id="picaso-3d">
                        <span class="exhibition-scheme-list-item-place">D2.3</span>
                        PICASO 3D
                    </a>
                    <a href="#medikal-media" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="medikal-media">
                        <span class="exhibition-scheme-list-item-place">D2.4</span>
                        Медикал Медиа
                    </a>
                    <a href="#relab" class="exhibition-scheme-list-item" data-exhibition-scheme-id="relab">
                        <span class="exhibition-scheme-list-item-place">D2.5</span>
                        Relab+
                    </a>
                    <a href="#fond-podderzhki-obrazovaniya-noosfera" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="fond-podderzhki-obrazovaniya-noosfera">
                        <span class="exhibition-scheme-list-item-place">D2.6</span>
                        Фонд поддержки образования "НООСФЕРА"
                    </a>
                    <a href="#rossiyskoe-dvizhenie-shkolnikov" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="rossiyskoe-dvizhenie-shkolnikov">
                        <span class="exhibition-scheme-list-item-place">D2.7</span>
                        Российское движение школьников
                    </a>
                    <a href="#kulturno-obrazovatelnyy-tsentr-etnomir" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="kulturno-obrazovatelnyy-tsentr-etnomir">
                        <span class="exhibition-scheme-list-item-place">D2.8</span>
                        Культурно-образовательный центр «ЭТНОМИР»
                    </a>
                    <a href="#moskovskiy-politekhnicheskiy-universitet" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="moskovskiy-politekhnicheskiy-universitet">
                        <span class="exhibition-scheme-list-item-place">D3.1</span>
                        Московский политехнический университет
                    </a>
                    <a href="#mobilnoe-elektronnoe-obrazovanie" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="mobilnoe-elektronnoe-obrazovanie">
                        <span class="exhibition-scheme-list-item-place">D3.2</span>
                        Мобильное Электронное Образование
                    </a>
                    <a href="#fgbu-federalnyy-institut-mediatsii" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="fgbu-federalnyy-institut-mediatsii">
                        <span class="exhibition-scheme-list-item-place">D3.3</span>
                        ФГБУ "Федеральный институт медиации"
                    </a>
                    <a href="#gosudarstvennyy-geologicheskiy-muzey-im-v-i-vernadskogo-ran"
                       class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="gosudarstvennyy-geologicheskiy-muzey-im-v-i-vernadskogo-ran">
                        <span class="exhibition-scheme-list-item-place">D3.4</span>
                        Государственный геологический музей им. В. И. Вернадского РАН
                    </a>
                    <a href="#moskovskaya-gorodskaya-organizatsiya-profsoyuza-rabotnikov-narodnogo-obrazovaniya-i-nauki-rf"
                       class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="moskovskaya-gorodskaya-organizatsiya-profsoyuza-rabotnikov-narodnogo-obrazovaniya-i-nauki-rf">
                        <span class="exhibition-scheme-list-item-place">D3.5</span>
                        Московская городская организация Профсоюза работников народного образования и науки РФ
                    </a>
                    <a href="#gorodskoy-psikhologo-pedagogicheskiy-tsentr-departamenta-obrazovaniya-goroda-moskvy"
                       class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="gorodskoy-psikhologo-pedagogicheskiy-tsentr-departamenta-obrazovaniya-goroda-moskvy">
                        <span class="exhibition-scheme-list-item-place">D3.6</span>
                        Городской психолого-педагогический Центр Департамента образования города Москвы
                    </a>
                    <a href="#moskovskiy-gorodskoy-pedagogicheskiy-universitet" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="moskovskiy-gorodskoy-pedagogicheskiy-universitet">
                        <span class="exhibition-scheme-list-item-place">D3.7</span>
                        Московский городской педагогический университет
                    </a>
                    <a href="#moskovskiy-institut-otkrytogo-obrazovaniya" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="moskovskiy-institut-otkrytogo-obrazovaniya">
                        <span class="exhibition-scheme-list-item-place">D4.1</span>
                        Московский институт открытого образования
                    </a>
                    <a href="#gbpou-vorobevy-gory" class="exhibition-scheme-list-item"
                       data-exhibition-scheme-id="gbpou-vorobevy-gory">
                        <span class="exhibition-scheme-list-item-place">D4.2</span>
                        ГБПОУ «Воробьевы Горы»
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