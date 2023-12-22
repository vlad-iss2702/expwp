<?php
/*
Template Name: SMM Маркетинг
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
                    <h2>Услуги SMM маркетинга.</h2>
                </div>
                <div class="services-info">
                    <p>MIND FUTURES предлагает маркетинговые услуги по продвижению и развитию вашей компании в социальных медиа.</p>
                    <p>Подробное описание услуг можно найти в предложениях ниже.</p>
                </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="main-title">
                    <h2>SMM маркетингтік қызметтері.</h2>
                </div>
                <div class="services-info">
                    <p>MIND FUTURES әлеуметтік желілерде сіздің компанияңызды ілгерілету және дамыту үшін маркетингтік қызметтерді ұсынады.</p>
                    <p>Қызметтің толық сипаттамасын төмендегі ұсынымдардан оқи аласыз.</p>
                </div>
            <?php endif; ?>
                <div class="services-list-сertain">
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
                            'terms'    => [ 15 ],
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
        </div>
        <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>