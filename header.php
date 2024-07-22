<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 401</title>

      <!-- <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/reset.css"> -->

    <?php wp_head(); ?>

</head>

<body>
    <div class="main__container">
        <div class="banner banner__code">
            <header class="header">
                <div class="header__container">
                    <div class="logo__box">
                        <a href="/" class="logo__link">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo/GUSAROV.svg" alt="GUSAROV" class="logo__img">
                        </a>
                        <span class="logo__line"></span>
                    </div>
                    <div class="header__menu">
                        <nav class="header__nav">
                            <ul class="nav__list">
                                <li class="nav__list-item">
                                    <a class="nav__link" href="#">Услуги</a>
                                </li>
                                <li class="nav__list-item">
                                    <a class="nav__link" href="#">Кейсы</a>
                                </li>
                                <li class="nav__list-item">
                                    <a class="nav__link" href="#">Блог</a>
                                </li>
                                <li class="nav__list-item">
                                    <a class="nav__link" href="#">Курсы</a>
                                </li>
                                <li class="nav__list-item">
                                    <a class="nav__link" href="#">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="nav__subheader">
                            <ul class="subheader__list">
                                <li class="subheader__list-item">
                                    <a href="#" class="subheader__link">Продвижение сайтов</a>
                                </li>
                                <li class="subheader__list-item">
                                    <a href="#" class="subheader__link">Контекстная реклама</a>
                                </li>
                                <li class="subheader__list-item">
                                    <a href="#" class="subheader__link">Создание сайтов</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block__lang">
                        <div class="language__bar">
                            <span>EN</span>
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/currency.svg" alt="EN" class="lang">
                            <span>BYN</span>
                        </div>
                        <button class="header__btn btn">Стать клиентом</button>
                        <a href="#" class="header__contact">+375 (29) 755-26-66</a>
                    </div>
                    <div class="header_social">
                        <a href="#" class="social-icon_telegram">
                            <img src="<?php bloginfo('template_url');?>/assets/images/icon/telegram.svg" alt="telegram">
                        </a>
                        <a href="#" class="social-icon_viber">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/viber.svg" alt="viber">
                        </a>
                        <a href="#" class="social-icon_whatsapp">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/whatsapp.svg" alt="whatsapp">
                        </a>
                    </div>
                    <div class="menu__burger">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/menu.svg" alt="menu-burger">
                    </div>
                </div>
            </header>