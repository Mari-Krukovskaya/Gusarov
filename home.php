<?php
/*
Template Name: home

*/

?>

<?php get_header(); ?>

            <div class="error__block container">
                <h1 class="error__title">Ошибка 401 Unauthorized: что это за ошибка, диагностика и как ее исправить</h1>
                <div class="block__author">
                    <div class="block__authot-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/photo.png" alt="Андрей Гусаров" width="100" height="100">
                    </div>
                    <div class="block__text">
                        <span class="author">Андрей Гусаров</span>
                        <div class="author__descr">Директор маркетингового агентства GUSAROV
                            Стаж 15 лет</div>
                    </div>
                </div>
                <div class="block__info">
                    <div class="dates">
                        <span>Опубликовано: <data>июля 2023</data></span>
                        <span>Обновлено: <data>25 апреля 2024</data></span>
                    </div>

                    <div class="block__info-views">
                        <div class="views">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/icon-clock.svg" alt="clock">
                            <span>10 мин</span>
                        </div>
                        <div class="views">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/icon-viewing.svg" alt="views">
                            <span>13144</span>
                        </div>
                        <div class="views">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/icon-like.svg" alt="like">
                            <span>56</span>
                        </div>

                        <div class="views">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/icon-share.svg" alt="share">
                            <span>5</span>
                            <div class="social_icons">
                                <ul class="social-icon-item">
                                    <li class="social__item-list">
                                        <a href="#" class="social__link">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/views_vk.svg" alt="vk">
                                            <span>ВКонтакте</span>
                                        </a>
                                    </li>
                                    <li class="social__item-list">
                                        <a href="#" class="social__link">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/views_X.png" alt="X">
                                            <span>X</span>
                                        </a>
                                    </li>
                                    <li class="social__item-list">
                                        <a href="#" class="social__link">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/views_telega.svg" alt="telegram">
                                            <span>Telegram</span>
                                        </a>
                                    </li>
                                    <li class="social__item-list">
                                        <a href="#" class="social__link">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/views_OK.svg" alt="OK">
                                            <span>Одноклассники</span>
                                        </a>
                                    </li>
                                    <li class="social__item-list">
                                        <a href="#" class="social__link">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/views_copy.svg" alt="copy">
                                            <span>Скопировать ссылку</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="views">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/icon-comments.svg" alt="comments">
                            <span>1</span>
                        </div>

                    </div>
                </div>
                <div class="block__tags">
                    <div class="tag">сеть</div>
                    <div class="tag">инструменты</div>
                    <div class="tag">ликбез</div>
                    <div class="tag">интернет</div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div id="breadcrumbs">
        <p class="breadcrumbs__list">
            <span>
                <span>
                    <a href="#">Главная</a>
                </span>
                <span>
                    <a href="#"> О нас</a>
                    /
                </span>
                <span>
                    <a href="#">Блог</a>
                    /
                </span>
                <span class="breadcrumb_last" aria-current="page"> Ошибка 401 Unauthorized: что это за ошибка,
                    диагностика и как ее исправить</span>
            </span>
        </p>
    </div>
    <section class="about">
        <div class="about__content">
            <div class="left__about-block">
                <p class="about__descr">Частые причины ошибки 401 — это неверные данные, неправильные настройки,
                    блокировки
                    доступа, однако, это лишь часть причин. Далее мы подробно рассмотрим эти и другие причины
                    возникновения
                    ошибки, а также дадим практические способы устранения на стороне пользователя и администратора
                    ресурса.
                </p>
                <h2 class="about__title-error">Что такое ошибка 401</h2>
                <p class="error__text">Код ошибки 401 Unauthorized (от англ. «отказ в доступе») — это сообщение, которое появляется на
                    экране, когда пользователь не может получить доступ к определенному сайту целиком или только к
                    какой-либо странице сайта. Допустим, он неправильно вводит имя и пароль — сразу появится
                    соответствующее сообщение. 401-я, как правило, отображается в браузере как отдельная страница с
                    описанием. Технически ее причина — отсутствие или недостаток данных для входа, чтобы получить доступ
                    к нужному ресурсу.</p>
            </div>
            <div class="right__about-block">
                <div class="content__block">
                    <h3 class="title__content">Содержание</h3>
                    <ul class="content__list">
                        <li class="content__list-item">
                            <a href="#">Что такое ошибка 401</a>
                        </li>
                        <li class="content__list-item">
                            <a href="#">Причины ее появления</a>
                        </li>
                        <li class="content__list-item">
                            <a href="#">Как ее исправить пользователю</a>
                        </li>
                        <li class="content__list-item">
                            <a href="#">Как ее исправить вебмастеру</a>
                        </li>
                        <li class="content__list-item">
                            <a href="#">Примеры текстов 401-й</a>
                        </li>
                        <li class="content__list-item">
                            <a href="#">Коротко о главном</a>
                        </li>
                        <li class="content__list-item">
                            <a href="#">Популярные вопросы</a>
                        </li>
                        <li class="content__list-item">
                            <a href="#">Список использованных источников</a>
                        </li>
                    </ul>
                </div>
                <div class="content__btn-block">
                    <div class="btn__up">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/up.png" alt="Up" width="50" height="50">
                    </div>
                    <div class="btn__comments">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/icon/contactUs.png" alt="comments" width="50" height="50">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<?php get_footer(); ?>

