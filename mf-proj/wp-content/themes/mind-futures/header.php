<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="facebook-domain-verification" content="oe3329rhc0xs5mkx9clg9w8cwl1aik" />
    <!--<title><?php the_title(); ?><?php echo(' | ') ?><?php bloginfo('name'); ?></title>-->
    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4083935511633290');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=4083935511633290&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KMKPG6D');
        </script>
    <!-- End Google Tag Manager -->

    <!--<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/plugin/slick/slick-theme.css"/>-->
    <?php wp_head(); ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMKPG6D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header>
    <div class="header-top">
        <div class="container">
            <div class="header-bottom__list">
                <a href="tel:+77027003040">+7 702 700 30 40</a> |
                <a href="tel:+77027003040">+7 777 778-30-40</a> |
                <a href="tel:+77252952024">+7 7252 95 20 24</a> |
                <a href="mailto:info@m-f.kz">info@m-f.kz</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-bottom">
            <div class="header-logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt=""></a>
            </div>
            <div class="header-nav">
            <?php wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => null,
                    'items_wrap' => '<ul>%3$s</ul>',
                ]) 
                ?>
            </div>
            <div class="header-lang">
            <?php wp_nav_menu([
                        'theme_location' => 'language_menu',
                        'container' => null,
                        'items_wrap' => '<ul class="language_menu">%3$s</ul>',
                    ]) 
                ?>
            </div>
            <div class="header-icon">
                <ul>
                    <li class="icon-tik-tok"><a href="https://vm.tiktok.com/ZMexDcYDE/"><i class="icon-tiktok"></i></a></li>
                    <li class="icon-tg"><a href="https://t.me/mind_futures1"><i class="icon-paper-plane"></i></a></li>
                    <li class="icon-fcbk"><a href="https://www.facebook.com/Mind-Futures-103374604849844/?hc_ref=ARR_pRnRDITSUlo7pzUa03qlgWi5mXYohwl9r4Kadz9YNq5_WARA02gBCZqzchWw8rM&ref=nf_target&__tn__=kC-R"><i class="icon-facebook"></i></a></li>
                    <li class="icon-inst"><a href="https://www.instagram.com/mind_futures/"><i class="icon-instagram11"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-fixed">
    <div class="container">
        <div class="header-bottom">
            <div class="header-logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt=""></a>
            </div>
            <div class="header-nav">
                <!--<ul>
                    <li><a href="https://m-f.kz/services/">Услуги</a>
                        <ul class="sub-menu">
                            <li><a href="https://m-f.kz/legal-support/">Готовый бизнес</a></li>
                            <li><a href="https://m-f.kz/investment-support/">Инвестиционное сопровождение</a></li>
                            <li><a href="https://m-f.kz/business-planning/">Бизнес планирование</a></li>
                            <li><a href="https://m-f.kz/uristconsult/">Юрисконсульт</a></li>
                            <li><a href="https://m-f.kz/buhgalteria/">Бухгалтерия</a></li>
                            <li><a href="https://m-f.kz/web/">Разработка и поддержка сайтов</a></li>
                            <li><a href="https://m-f.kz/digital-marketing/">Маркетинг</a></li>
                            <li><a href="https://m-f.kz/smm-marketing/">SMM маркетинг</a></li>
                            <li><a href="https://m-f.kz/reklaming-products/">Рекламная продукция</a></li>
                            <li><a href="https://m-f.kz/translations-and-visa-support/">Переводы и визовая поддержка</a></li>
                            <li><a href="https://m-f.kz/video-production/">Видеопродакшн</a></li>
                            <li><a href="https://m-f.kz/personal/">Оценка персонала</a></li>
                            <li><a href="https://m-f.kz/educational-programs/">Обучение</a></li>
                        </ul>
                    </li>
                    <li><a href="https://m-f.kz/about/">О нас</a></li>
                    <li><a>Кейсы</a>
                        <ul class="sub-menu">
                            <li><a href="https://m-f.kz/video-case/">Кейсы видеопродакшена</a></li>
                        </ul>
                    </li>
                    <li><a href="https://m-f.kz/all-news/">Новости</a></li>
                    <li><a href="https://m-f.kz/blog/">Блог</a></li>                
                </ul>-->
                <?php wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => null,
                    'items_wrap' => '<ul>%3$s</ul>',
                ]) 
                ?>
            </div>
            <div class="header-lang">
            <?php wp_nav_menu([
                        'theme_location' => 'language_menu',
                        'container' => null,
                        'items_wrap' => '<ul class="language_menu">%3$s</ul>',
                    ]) 
                ?>
            </div>
            <div class="header-icon">
                <ul>
                    <li class="icon-tik-tok"><a href="https://vm.tiktok.com/ZMexDcYDE/"><i class="icon-tiktok"></i></a></li>
                    <li class="icon-tg"><a href="https://t.me/mind_futures1"><i class="icon-paper-plane"></i></a></li>
                    <li class="icon-fcbk"><a href="https://www.facebook.com/Mind-Futures-103374604849844/?hc_ref=ARR_pRnRDITSUlo7pzUa03qlgWi5mXYohwl9r4Kadz9YNq5_WARA02gBCZqzchWw8rM&ref=nf_target&__tn__=kC-R"><i class="icon-facebook"></i></a></li>
                    <li class="icon-inst"><a href="https://www.instagram.com/mind_futures/"><i class="icon-instagram11"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</header>
<header class="mobile-menu">
    <div class="header-logo">
        <a href="http://m-f.kz"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt=""></a>
    </div>
    <div class="nav-toggle">
        <div class="nav-toggle-bar"></div>
    </div>
    <nav id="nav" class="nav">
        <ul class="cd-accordion-menu">
            <li><a href="https://m-f.kz/">Главная</a></li>
            <li class="has-children">
                <input type="checkbox" name="group-1" id="group-1" checked>
                <label for="group-1">Услуги</label>
                <ul>
                    <li><a href="https://m-f.kz/legal-support/">Готовый бизнес</a></li>
                    <li><a href="https://m-f.kz/investment-support/">Инвестиционное сопровождение</a></li>
                    <li><a href="https://m-f.kz/business-planning/">Бизнес планирование</a></li>
                    <li><a href="https://m-f.kz/uristconsult/">Юрисконсульт</a></li>
                    <li><a href="https://m-f.kz/buhgalteria/">Бухгалтерия</a></li>
                    <li><a href="https://m-f.kz/web/">Разработка и поддержка сайтов</a></li>
                    <li><a href="https://m-f.kz/digital-marketing/">Маркетинг</a></li>
                    <li><a href="https://m-f.kz/smm-marketing/">Digital маркетинг</a></li>
                    <li><a href="https://m-f.kz/reklaming-products/">Рекламная продукция</a></li>
                    <li><a href="https://m-f.kz/translations-and-visa-support/">Переводы и визовая поддержка</a></li>
                    <li><a href="https://m-f.kz/video-production/">Видеопродакшн</a></li>
                    <li><a href="https://m-f.kz/personal/">Оценка персонала</a></li>
                    <li><a href="https://m-f.kz/educational-programs/">Обучение</a></li>
                </ul>
            </li>
            <li><a href="https://m-f.kz/about/">О нас</a></li>
            <li><a href="https://m-f.kz/case/">Кейсы</a></li>
            <li><a href="https://m-f.kz/all-news/">Новости</a></li>
            <li><a href="https://m-f.kz/blog/">Блог</a></li>
        </ul> <!-- cd-accordion-menu -->
    </nav>
    <main id="main" class="background-flowers">
    </main>
</header>