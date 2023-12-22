<?php get_header(); ?>
<main>
    <div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
            <div class="services-banner__info">
                <h2><?php the_title(); ?></h2>
                <div class="services-breadcrumb">
                    <p><a href="https://m-f.kz/">Главная</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/news/"> Новости</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="services-text">
                <!--<div class="services-text__img" style="background-image: url('img/services-banner/services-1.jpg')"></div>-->
                <div class="services-text__info">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php get_template_part( 'contact-block-news' ); ?>
</main>

    <?php get_footer(); ?>