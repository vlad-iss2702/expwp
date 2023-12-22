<?php
/*
Template Name: Цифровой маркетинг
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
                <div class="services-list-сertain">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 3,
                        'order'      => 'ASC',
                        'post_type'  => array( 'service' ),
                        'tax_query' => [
                            [
                                'taxonomy' => 'services',
                                'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                'terms'    => [ 8 ],
                            ]
                        ],
                        'paged' => $paged
                    );
                ?>
                <?php
                    $MY_QUERY = new WP_Query( $args);
                    if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <div class="services-item-сertain" style="background-image: url('<?php the_field('services__img'); ?>')">
                            <div class="item-сertain__info">
                                <h4><?= the_title(); ?></h4>
                                <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                                    <a href="<?= the_permalink(); ?>">Узнать подробности <i class="icon-cheveron-right"></i></a>
                                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                                    <a href="<?= the_permalink(); ?>">Көбірек білу үшін <i class="icon-cheveron-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile;
                    endif; ?>
                </div>            
                <?php  wp_reset_postdata(); ?>
            </div>
        </div>
        <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>