<?php
/*
Template Name: Single anounce
*/
?>
<?php get_header(); ?>
<main>
        <div class="info media">
            <div class="container">
                <div class="info__documents">
                    <div class="info__documents_title d-flex align-items-center mb-2">
                        <picture>
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/vnt-icon.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/vnt-icon.png" alt="" />
                        </picture>
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <h6><?php the_title(); ?></h6>
                    </div>
                    <p><?php the_time('d.m.Y'); ?></p>
                </div>
            </div>
            <div class="container">
                <div class="media__image text-center">
                    <picture>
                        <source srcset="<?php the_field('news_images'); ?>" type="image/webp"><img class="img-fluid" src="<?php the_field('anounce__images'); ?>" alt="" />
                    </picture>
                </div>
                <div class="media__text">
                   <?php the_content(); ?>
                </div>
                <?php endwhile;
                    endif; ?>
                <?php  wp_reset_postdata(); ?>
            </div>
            <div class="container">
                <div class="info__tab">
                    <ul>
                        <li><a href="https://www.rcmz49.ru/media/anounce/">Анонсы</a></li>
                        <li><a class="active" href="https://www.rcmz49.ru/media/news/">Новости</a></li>
                        <li><a href="https://www.rcmz49.ru/media/gallery/">Фотогалерея</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>