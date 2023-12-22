<?php
/*
Template Name: Рекламная продукция
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
    <div class="services">
        <div class="container">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
            <div class="main-title">
                <h2>Рекламная продукция на заказ.</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES предлагает услуги по выпуску рекламной и сувенирной продукции для вашей компании и ваших клиентов согласно следующему перечню наименований:</p>
            </div>
            <div class="info-list-text">
                    <ul>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Текстиль, постельные принадлежности"> Текстиль, постельные принадлежности</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Спец. одежда, униформа"> Спец. одежда, униформа</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Маски, чехлы"> Маски, чехлы</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Керамика, посуда"> Керамика, посуда</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Канцелярия, игрушки"> Канцелярия, игрушки</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Телефонные аксессуары"> Телефонные аксессуары</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Брелоки, магниты"> Брелоки, магниты</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Баннеры, плакаты"> Баннеры, плакаты</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Флаеры, буклеты"> Флаеры, буклеты</li>
                    </ul>
                </div>
            <div class="services-info">
                <p>Также мы можем нанести ваши логотипы, название или иную рекламную информацию на твердую плоскую поверхность по технологиям горячей печати, покраски, полиграфии.</p>
            </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
            <div class="main-title">
                <h2>Тапсырыс бойынша жарнама өнімдері.</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES төмендегі тізім бойынша жарнамалық және кәдесый өнімдерін шығару бойынша қызметтерді ұсынады:</p>
            </div>
            <div class="info-list-text">
                    <ul>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Текстиль, постельные принадлежности"> тоқыма, төсек-орын жабдығы;</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Спец. одежда, униформа"> арнайы киім, униформа;</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Маски, чехлы"> бетперде, тыстар;</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Керамика, посуда"> керамика, ыдыстар;</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Канцелярия, игрушки"> кеңсе тауарлары, ойыншықтар</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Телефонные аксессуары"> телефон жабдықтары</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Брелоки, магниты"> салпыншақ, магниттер;</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Баннеры, плакаты"> баннерлер, плакаттар;</li>
                        <li><img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/piktograms/check.png" alt="Флаеры, буклеты"> флаер, буклеттер</li>
                    </ul>
                </div>
            <div class="services-info">
                <p>Сонымен қатар Сіздің логотипіңізді, компания атауын немесе басқа да жарнамалық ақпаратты ыстық басып шығарыу, бояу полиграфия технологиясы бойынша қатты бетке түсіреміз.</p>
            </div>
            <?php endif; ?>
                
            <!--<div class="services-list-сertain">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 100,
                            'order'      => 'ASC',
                            'post_type'  => array( 'service' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'services',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 10 ],
                                ]
                            ],
                            'paged' => $paged
                        );
                    ?>
                    <?php
                        $MY_QUERY = new WP_Query( $args);
                        if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain" style="background-image: url('<?php the_field('services__img'); ?>')">
                                <div class="item-сertain__info">
                                    <h4><?= the_title(); ?></h4>
                                    <a href="<?= the_permalink(); ?>">Узнать подробности <i class="icon-cheveron-right"></i></a>
                                </div>
                            </div>
                            <?php endwhile;
                        endif; ?>
                </div>-->
                <!--<div class="list-pagination">
                    <?php
                        $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                        the_posts_pagination(array(
                        'show_all'     => false,
                        'type'=>'inline',
                        'screen_reader_text' => __( '' ),
                        'end_size'     => 0,
                        'mid_size'     => 0,
                        'prev_next'    => True,
                        'prev_text'    => __('<i class="icon-cheveron-left"></i>'),
                        'next_text'    => __('<i class="icon-cheveron-right"></i>'),
                        'add_args'     => False
                    ));
                    ?>
                </div>-->
                <?php  wp_reset_postdata(); ?>
        </div>
    </div>
    <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>