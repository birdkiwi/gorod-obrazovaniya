<header class="main-header">
    <div class="wrapper">
        <div class="main-header-desktop">
            <a href="index.php" class="main-header-logo">
                <img src="images/logo.svg" alt="Город образования">
            </a>

            <nav class="main-header-menu">
                <ul>
                    <li class="parent active">
                        <a href="about-forum.php">О форуме</a>

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
                        <a href="news.php">Новости</a>
                    </li>
                    <li>
                        <a href="program.php">Программа</a>
                    </li>
                    <li>
                        <a href="speakers.php">Спикеры</a>
                    </li>
                    <li>
                        <a href="exhibition-catalog.php">Экспозиция</a>
                    </li>
                    <li>
                        <a href="partners.php">Партнеры</a>
                    </li>
                    <li>
                        <a href="contacts.php">Контакты</a>
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
                <div class="main-header-user-photo">
                    <img src="images/tmp/speakers/andreas-shlyayher.jpg" alt="">
                </div>
                <div class="main-header-user-name">
                    Andreas <br>
                    Shlyayher
                    <br>
                    <a href="#" style="white-space: nowrap">Мое расписание | 12</a>
                </div>
                <div class="main-header-user-toggler"></div>

                <div class="main-header-user-dropdown-wrapper">
                    <div class="main-header-user-dropdown">
                        <ul class="main-header-user-dropdown-menu">
                            <li>
                                <a href="#">Мой билет</a>
                            </li>
                            <li>
                                <a href="#">Расписание</a>
                            </li>
                            <li>
                                <a href="#">Профиль</a>
                            </li>
                            <li class="main-header-user-dropdown-menu-divider"></li>
                            <li>
                                <a href="index.php" onclick="return confirm('Вы действительно хотите выйти?');">Выйти</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-mobile">
            <a href="#" class="main-header-toggler js-offcanvas">
                <?php include "images/icons/icon-header-toggler.svg"; ?>
            </a>

            <a href="#" class="main-header-logo-mobile">
                <img src="images/logo.svg" alt="Город образования">
            </a>

            <div class="main-header-user-mobile">
                <img src="images/tmp/speakers/andreas-shlyayher.jpg" alt="">

                <div class="main-header-user-dropdown-wrapper">
                    <div class="main-header-user-dropdown">
                        <ul class="main-header-user-dropdown-menu">
                            <li>
                                <a href="#">Мой билет</a>
                            </li>
                            <li>
                                <a href="#">Расписание</a>
                            </li>
                            <li>
                                <a href="#">Профиль</a>
                            </li>
                            <li class="main-header-user-dropdown-menu-divider"></li>
                            <li>
                                <a href="index.php" onclick="return confirm('Вы действительно хотите выйти?');">Выйти</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>