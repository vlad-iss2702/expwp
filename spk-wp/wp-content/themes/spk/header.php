<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php the_title(); ?><?php echo(' | ') ?><?php bloginfo('name'); ?></title>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/fonts/transfonter/fonts.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/fonts/transfonter/rus/fonts-rus.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/fonts/platicon/font/flaticon.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/fonts/font/icomoon.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/fonts/themify/themify-icons.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/animsition/css/animsition.min.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/lightbox/css/lightbox.min.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/css/animate.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/slick/slick.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/player/mediaelementplayer.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/plugin/jquery-ui/jquery-ui.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo bloginfo('template_url'); ?>/assets/css/customize.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/plugin/slick/slick-theme.css"/>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/plugin/modernizr.js"></script>


    <link href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('template_url'); ?>/assets/css/customize.css" rel="stylesheet" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137786155-7"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/assets/plugin/modernizr.js"></script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137786155-7');
</script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="animsition main-wrapper">
        <header class="vk-header vk-header-two-nav ">
            <nav class="vk-navbar  navbar">
                <div class="container">
                    <!--<div class="shopping-cart-list collapse" id="shopping-cart-list">
                        <div class="vk-table">
                            <ul class="vk-table-row">
                                <li class="vk-table-data"></li>
                                <li class="vk-table-data">product</li>
                                <li class="vk-table-data">total</li>
                            </ul>
                            <ul class="vk-table-row">
                                <li class="vk-table-data"><i class="fa fa-times"></i></li>
                                <li class="vk-table-data">
                                    <div class="vk-img-frame">
                                        <a href="#" class="vk-img">
                                            <img src="images/shop-cart/shop-cart-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="title">
                                        <a href="3" class="product-name">Mini drill * 1</a>
                                        <span class="price">$59.00</span>
                                    </div>
                                </li>
                                <li class="vk-table-data">
                                    <span class="price total">$59.00</span>
                                </li>
                            </ul>
                            <ul class="vk-table-row">
                                <li class="vk-table-data"><i class="fa fa-times"></i></li>
                                <li class="vk-table-data">
                                    <div class="vk-img-frame">
                                        <a href="#" class="vk-img">
                                            <img src="images/shop-cart/shop-cart-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="title">
                                        <a href="3" class="product-name">Hammer drill * 1</a>
                                        <span class="price">$59.00</span>
                                    </div>
                                </li>
                                <li class="vk-table-data">
                                    <span class="price total">$59.00</span>
                                </li>
                            </ul>
                            <ul class="vk-table-row total-all">
                                <li class="vk-table-data"></li>
                                <li class="vk-table-data">
                                    <span>Total</span>
                                </li>
                                <li class="vk-table-data">
                                    <span class="price total">$118.00</span>
                                </li>
                            </ul>
                            <div class="vk-table-row">
                                <a href="#" class="vk-btn vk-btn-transparent vk-btn-l vk-btn-default">View cart</a>
                                <a href="#" class="vk-btn vk-btn-transparent vk-btn-l vk-btn-default">checkout</a>
                            </div>
                        </div>
                    </div>-->
                    <!--./shopping-cart-list-->

                    <div class="vk-navbar-header navbar-header">
                        <div class="vk-divider left hidden-xs hidden-sm"></div>
                        <div class="vk-divider right hidden-xs hidden-sm"></div>

                        <button type="button" class="navbar-toggle vk-navbar-toggle collapsed" data-toggle="collapse">
                            <i class="toggle-icon"></i>
                        </button>
                        <!--./vk-navbar-toggle-->

                        <div class="shopping-cart hidden-md hidden-lg">
                            <i class="fa fa-shopping-basket" data-toggle="collapse" data-target="#shopping-cart-list"></i>
                            <span class="number-item">0</span>
                        </div>
                        <!--./shopping-cart-->

                        <a class="vk-navbar-brand navbar-brand" href="http://shymspkwp.inte.kz/">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo1.png" alt="">
                            <!--<svg version="1.1" id="wicon-logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="290.037px" height="290.25px" viewBox="0 0 290.037 290.25" enable-background="new 0 0 290.037 290.25" xml:space="preserve">
                        <polygon fill="#FFC000" points="170,60.25 50,60.25 0,60.25 0,110.25 0,290.25 50,290.25 50,110.25 170,110.25 "></polygon>
                                <polygon fill="#FFC000" points="60.038,120.25 60.038,240.25 60.038,290.25 110.038,290.25 290.037,290.25 290.037,240.25
    110.038,240.25 110.038,120.25 "></polygon>
                                <polygon fill="#FFC000" points="120.019,230 240.019,230 290.019,230 290.019,180 290.019,0 240.019,0 240.019,180 120.019,180 "></polygon>
                                <polygon fill="#FFC000" points="229.98,170 229.98,50 229.98,0 179.98,0 -0.019,0 -0.019,50 179.98,50 179.98,170 "></polygon>
                    </svg>
                            <span class="logo-text text-uppercase">WICON</span>-->
                        </a>
                        <!--./vk-navbar-brand-->
                    </div>
                    <!--./vk-navbar-header-->

                    <div class="collapse navbar-collapse vk-navbar-collapse" id="menu">
                        <ul class="vk-navbar-nav vk-navbar-left">
                            <li>
                                <a href="#">О корпорации</a>
                                <ul class="vk-navbar-nav child">
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/about/">Общие сведения</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/structure/">Структура</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/directors/">Совет директоров</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/members/">Руководство</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/career/">Вакансии</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/sub-organizations/">Дочерние организации</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/legal-base/">Корпоративное управление</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/faq/">Faq</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="#">инвесторам</a>
                                <ul class="vk-navbar-nav child">
                                    <li><a target="_blank" href="3.1-consultant-service.html">Потенциальным партнерам</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/sez-ontustyk/">СЭЗ «Оңтүстік»</a></li>
                                    <li><a target="_blank" href="3.2-design-service.html">Индустриальные зоны</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/niche-projects/">Нишевые проекты</a></li>
                                </ul>
                            </li>

                            <li>
                                <a target="_blank" href="http://shymspkwp.inte.kz/projects/">Проекты</a>
                                <ul class="vk-navbar-nav child">

                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/projects/">Реализованные</a></li>

                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/projects/">Реализуемые</a></li>

                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/projects/">Требующие инвестиций</a></li>

                                </ul>
                            </li>

                        </ul>
                        <ul class="vk-navbar-nav vk-navbar-right">


                            <li>
                                <a href="#">Фронт-офис</a>
                                <ul class="vk-navbar-nav child">

                                    <li><a target="_blank" href="4.1-project-list.html">Программа "1000 мест-уличная торговля"</a></li>

                                    <li><a target="_blank" href="4.2-project-grid.html">Программа "1000 мест-уличная торговля</a></li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#">Пресс-центр</a>
                                <ul class="vk-navbar-nav child">

                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/category/news/">Новости</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/category/obyavleniya/">Объявления</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/category/smi-o-nas/">Сми О Нас</a></li>
                                    <li><a target="_blank" href="http://shymspkwp.inte.kz/category/blog-spk/">Блог СПК</a></li>

                                </ul>
                            </li>

                            <li>
                                <a target="_blank" href="http://shymspkwp.inte.kz/sez-ontustyk/contact/">Контакты</a>
                            </li>

                        </ul>
                        <!--<div class="box-search-header collapse" id="box-search-header" aria-expanded="false" role="search">-->
                        <div class="box-search-header collapse">
                            <div class="vk-input-group">
                                <!--<input type="text" name="key" placeholder="Search" class="form-control">-->
                                <button class="vk-btn btn-search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--./vk-navbar-collapse-->
                </div>
                <!--./container-->
            </nav>
            <!--./vk-navbar-->

            <div class="vk-header-top hidden-xs hidden-sm">
                <div class="container">
                    <div class="content">
                        <!--<div class="shopping-cart">
                            <i class="fa fa-shopping-basket" data-toggle="collapse" data-target="#shopping-cart-list"></i>
                            <span class="number-item">0</span>
                        </div>-->
                        <ul class="quick-address">
                            <li style="font-weight: 600;">Пн - Пт: 09:00 - 18:00</li>
                            <li class="item-search">
                                <span class="btn-search hidden-xs hidden-sm" data-toggle="collapse" data-target="#box-search-header">
                                    <a target="_blank" href="https://www.instagram.com/spk_shymkent/?hl=ru">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </span>
                                <span class="btn-search hidden-xs hidden-sm" data-toggle="collapse" data-target="#box-search-header">
                                    <a target="_blank" href="https://www.facebook.com/spkshymkentnew/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </span>
                            </li>

                        </ul>
                        <ul class="quick-address vk-navbar-left">
                            <li><a href="tel:+77252392022">+7 (7252) 392 022 </a></li>
                            <li><a href="mailto:nfo@openspk.kz">info@openspk.kz</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <!--./vk-header-top-->
        </header>