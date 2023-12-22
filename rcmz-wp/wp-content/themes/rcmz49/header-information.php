<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php the_title(); ?><?php echo(' | ') ?><?php bloginfo('name'); ?></title>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/plugin/slick/slick-theme.css"/>-->
    <?php wp_head(); ?>
</head>
<body>
    <div class="animsition main-wrapper">
        <header class="header">
        <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"> <a href="https://www.rcmz49.ru/">
                            <div class="header__info_logo text-center">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/logo.gif" type="image/webp"><img src="img/logo.gif" alt="Логотип" />
                                </picture>
                            </div>
                        </a> </div>
                    <div class="col-md-7 col-lg-7 col-xl-8">
                        <div class="header__info_text">
                            <h1 class="text-center">Региональный центр мониторинга здоровья обучающихся с ОВЗ <span>Магаданская область</span></h1>
                        </div>
                    </div>
                    <div class="col-md-3 col-xl-2">
                        <div class="header__info_contacts"> <a href="tel:+74132620844">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-red.svg" alt="">
                                </picture> <span>+ 7 (4132) 620844</span>
                            </a><br /> <a href="mailto:rcmz49@mail.ru">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" alt="">
                                </picture> <span>rcmz49@mail.ru</span>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8"> 
                        <div class="header__menu_list header__information">
                            <!--<ul>
                                <li><a href="index.html" class="active">Главная</a></li>
                                <li><a href="info-tabs.html">Информация</a></li>
                                <li><a href="activity.html">Деятельность</a></li>
                                <li><a href="media-tab.html">Медиагалерея</a></li>
                                <li><a href="partners.html">Партнеры</a></li>
                                <li><a href="contacts.html">Контакты</a></li>
                            </ul>-->
                            <?php wp_nav_menu([
                                    'theme_location' => 'main_menu',
                                    'container' => null,
                                    'items_wrap' => '<ul class="">%3$s</ul>',
                                ]) 
                            ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="header__menu_search"> <a href="#" data-toggle="modal" data-target="#myModalSearch">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" alt="" />
                                </picture>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"> <a href="https://www.rcmz49.ru/">
                            <div class="header__fixed_logo">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/logo.gif" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.gif" alt="Логотип" />
                                </picture>
                            </div>
                        </a> </div>
                    <div class="col-md-8">
                        <div class="header__menu_list header__information">
                            <!--<ul>
                                <li><a href="index.html" class="active">Главная</a></li>
                                <li><a href="info-tabs.html">Информация</a></li>
                                <li><a href="activity.html">Деятельность</a></li>
                                <li><a href="media-tab.html">Медиагалерея</a></li>
                                <li><a href="partners.html">Партнеры</a></li>
                                <li><a href="contacts.html">Контакты</a></li>
                            </ul>-->
                            <?php wp_nav_menu([
                                    'theme_location' => 'main_menu',
                                    'container' => null,
                                    'items_wrap' => '<ul class="">%3$s</ul>',
                                ]) 
                            ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="header__menu_search"> <a href="#" data-toggle="modal" data-target="#myModalSearch">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" alt="">
                                </picture>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="mobile">
        <div class="mobile__text">
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8 text-center">
                        <h1>Региональный центр мониторинга здоровья обучающихся с ОВЗ <span>Магаданская область</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile__logo">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="header__info_logo text-center"> <a href="https://www.rcmz49.ru/">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/logo.gif" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.gif" alt="Логотип">
                                </picture>
                            </a> </div>
                    </div>
                    <div class="col-6 mobile__logo_search">
                        <a href="#" data-toggle="modal" data-target="#myModalSearch">
                        <picture>
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" alt="">
                        </picture></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu"> <a class="menu-triger" href="#"></a>
            <div class="menu-popup"> <a class="menu-close" href="#"></a>
                <?php wp_nav_menu([
                        'theme_location' => 'mobile_menu',
                        'container' => null,
                        'items_wrap' => '<ul id="nav">%3$s</ul>',
                    ]) 
                ?>
                <!--<ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="info-tabs.html">Информация</a>
                        <picture>
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mobile-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mobile-icon.svg" alt="" />
                        </picture>
                        <ul>
                            <li><a href="">Федеральный проект</a></li>
                            <li><a href="">О нас</a></li>
                            <li><a href="">Структура</a></li>
                            <li><a href="">Документы</a></li>
                            <li><a href="">Общеобразовательные организации</a></li>
                        </ul>
                    </li>
                    <li><a href="activity.html">Деятельность</a></li>
                    <li><a href="media-tab.html">Медиагалерея</a>
                        <picture>
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mobile-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mobile-icon.svg" alt="" />
                        </picture>
                        <ul>
                            <li><a href="">Анонсы</a></li>
                            <li><a href="">Новости</a></li>
                            <li><a href="">Фотогалерея</a></li>
                        </ul>
                    </li>
                    <li><a href="partners.html">Партнеры</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>-->
                <div class="menu-popup-contact">
                    <ul>
                        <li> <a href="tel:+74132620844">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-red.svg" alt="">
                                </picture> <span>+ 7 (4132) 620844</span>
                            </a> </li>
                        <li> <a href="mailto:rcmz49@mail.ru">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" alt="">
                                </picture> <span>rcmz49@mail.ru</span>
                            </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile__fixed">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-4"></div>
                    <div class="col-6 col-md-6"></div>
                    <div class="col-2 col-md-2 mobile__logo_search"> <a href="https://www.rcmz49.ru/">
                        <a href="#" data-toggle="modal" data-target="#myModalSearch">
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/search-white.svg" alt="">
                            </picture>
                        </a> </div>
                </div>
            </div>
        </div>
    </header>