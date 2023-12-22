<?php
/*
Template Name: Маркетинг
*/
?>
<?php get_header(); ?>
<main>
    <div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
        <div class="services-banner__info">
                <h1><?php the_title(); ?></h1>
                <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                    <div class="services-breadcrumb">
                        <p><a href="https://m-f.kz/">Главная</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/services/"> Услуги</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                    </div>
                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                    <div class="services-breadcrumb">
                        <p><a href="https://m-f.kz/kz/">Басты бет</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/kz/services/"> Қызметтер</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                    </div>
                <?php endif; ?>
                <?php get_template_part( 'crumb-link' ); ?>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="services">
            <div class="container">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="main-title">
                    <h2>Услуги цифрового маркетинга.</h2>
                </div>
                <div class="services-info">
                    <p>MIND FUTURES предлагает перечень инструментов современной цифровизации маркетинга для вашей компании.</p>
                    <p>Подробное описание услуг можно найти в предложениях ниже.</p>
                </div>
                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="main-title">
                    <h2>Маркетинг қызметтері.</h2>
                </div>
                <div class="services-info">
                    <p>MIND FUTURES клиенттер үшін нарықты зерттеу және талдау бойынша, клиенттермен жұмыс істеу, ішкі және сандық маркетинг бойынша барлық маркетингтік қызметтерді ұсынады.</p>
                    <p>Толық ақпаратты төмендегі ұсынымдардан таба аласыз.</p>
                </div>
                <?php endif; ?>
                <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="services-list-сertain">
                    <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain aos-init aos-animate" style="background-image: url('https://m-f.kz/wp-content/uploads/2021/03/back-1.png')">
                        <div class="item-сertain__info">
                            <h4>Исследования</h4>
                            <a href="https://m-f.kz/issledovania/">Узнать подробности <i class="icon-cheveron-right"></i></a>
                        </div>
                    </div>
                    <!--<div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain aos-init aos-animate" style="background-image: url('https://m-f.kz/wp-content/uploads/2021/03/back-2.png')">
                        <div class="item-сertain__info">
                            <h4>Цифровой маркетинг</h4>
                            <a href="https://m-f.kz/digital/">Узнать подробности <i class="icon-cheveron-right"></i></a>
                        </div>
                    </div>-->
                    <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain aos-init aos-animate" style="background-image: url('https://m-f.kz/wp-content/uploads/2021/03/back-2.png')">
                        <div class="item-сertain__info">
                            <h4>Личный бренд</h4>
                            <a href="https://m-f.kz/service/lichnii-brend/">Узнать подробности <i class="icon-cheveron-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="services-list-сertain">
                    <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain aos-init aos-animate" style="background-image: url('https://m-f.kz/wp-content/uploads/2021/03/back-1.png')">
                        <div class="item-сertain__info">
                            <h4>Зерттеулер</h4>
                            <a href="https://m-f.kz/kz/issledovania/">Көбірек білу үшін <i class="icon-cheveron-right"></i></a>
                        </div>
                    </div>
                    <!--<div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain aos-init aos-animate" style="background-image: url('https://m-f.kz/wp-content/uploads/2021/03/back-2.png')">
                        <div class="item-сertain__info">
                            <h4>Цифровой маркетинг</h4>
                            <a href="https://m-f.kz/digital/">Узнать подробности <i class="icon-cheveron-right"></i></a>
                        </div>
                    </div>-->
                    <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain aos-init aos-animate" style="background-image: url('https://m-f.kz/wp-content/uploads/2021/03/back-2.png')">
                        <div class="item-сertain__info">
                            <h4>Жеке бренд</h4>
                            <a href="https://m-f.kz/kz/service/lichnii-brend/">Көбірек білу үшін <i class="icon-cheveron-right"></i></a>
                        </div>
                    </div>
                </div>      
                <?php endif; ?>
            </div>
        </div>
        <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>