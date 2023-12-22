<?php
/*
Template Name: Блог
*/
?>
<?php get_header(); ?>
<main>
<div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
            <div class="services-banner__info">
                <h1><?php the_title(); ?></h1>
                <div class="services-breadcrumb">
                    <p><a href="">Главная</a><i class="icon-cheveron-right"></i> <a href=""></a> <?php the_title(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="main-title">
                <h2>Наш личный Блог</h2>
            </div>
            <div class="news-list">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 2,
                        'order'      => 'DESC',
                        'post_type'  => array( 'blog' ),
                        'paged' => $paged
                    );
                ?>
                 <?php
                    $MY_QUERY = new WP_Query( $args);
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                <div data-aos="fade-up" class="news-item">
                                    <div class="news-item__img" style="background-image: url('<?php the_field('preview__img'); ?>')">
                                        <div class="news-item__date">
                                            <?php the_time('d.m.Y'); ?>
                                        </div>
                                        <div class="news-item__title"><?php the_title(); ?></div>
                                        <div class="news-item__time">Чтение этой статьи займет <span><?php the_field('book__time'); ?></span></div>
                                    </div>
                                    <div class="news-item__description">
                                        <?php the_field('preview__text'); ?>
                                    </div>
                                    <div class="news-item__link">
                                        <a href="<?php the_permalink(); ?>">Читать статью</a>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif; ?>
            </div>
            <div data-aos="fade-up" class="list-pagination">
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
                </div>
                <?php  wp_reset_postdata(); ?>
        </div>
    </div>
    <?php get_template_part( 'contact-news' ); ?>
</main>

    <?php get_footer(); ?>