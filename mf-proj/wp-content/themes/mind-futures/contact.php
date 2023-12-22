<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
<main>
<div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
            <div class="services-banner__info">
                <h2>Контакты</h2>
                <div class="services-breadcrumb">
                    <p><a href="">Главная</a><i class="icon-cheveron-right"></i> <a href=""></a> <?php the_title(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'contact-news' ); ?>
</main>
<?php get_footer(); ?>