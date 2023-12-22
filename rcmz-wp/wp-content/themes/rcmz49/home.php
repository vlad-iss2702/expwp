<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header(); ?>
<main>
        <div class="slider" style="background-image:url(<?php echo bloginfo('template_url'); ?>/assets/img/background-slider.png">
            <div class="container">
                <div class="slider__wrap">
                    <div class="owl-carousel owl-theme main-carousel">
                        <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array (
                                'posts_per_page' => 100,
                                'order'      => 'DESC',
                                'post_type'  => array( 'main_slider' ),
                                'paged' => $paged
                            );
                        ?>
                        <?php
                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                    <div class="main-carousel-item img-fluid" style="background-image:url(<?php the_field('slider__img'); ?>"> </div>
                                <?php endwhile;
                            endif; ?>
                        <?php  wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__slider_mobile">
            <div class="owl-carousel owl-theme main-carousel">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 100,
                        'order'      => 'DESC',
                        'post_type'  => array( 'main_slider' ),
                        'paged' => $paged
                    );
                ?>
                <?php
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <div class="main-carousel-item img-fluid" style="background-image:url(<?php the_field('slider__img'); ?>"> </div>
                         <?php endwhile;
                    endif; ?>
                <?php  wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="container main-block">
            <div class="main__title">
                <h2>Анонсы <picture>
                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.png" alt="" />
                    </picture>
                </h2>
            </div>
            <div class="row announce-row">
            	<?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                     $args = array (
                        'posts_per_page' => 3,
                        'order'      => 'DESC',
                        'post_type'  => array( 'anounce' ),
                        'paged' => $paged
                      );
                      ?>
              	<?php
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        	<div class="col-12 col-md-6 col-lg-4">
			                    <div class="main__announce"> <a href="<?php the_permalink(); ?>" class="main__announce_img text-center" style="background-image:url(<?php the_field('anounce__images'); ?>"></a>
			                        <div class="main__announce_text">
			                            <h3><?php the_title(); ?></h3>
			                            <p><?php the_field('anounce__previue'); ?></p>
			                        </div> <a class="read-btn" href="<?php the_permalink(); ?>">Читать далее</a>
			                    </div>
                			</div>	
                    	<?php endwhile;
                    endif; ?>
                <?php  wp_reset_postdata(); ?>
            </div>
            <div class="main__title">
                <h2>Последние новости <picture>
                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.png" alt="" />
                    </picture>
                </h2> <a href="https://www.rcmz49.ru/media/">Все новости <picture>
                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/arrow-all.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/arrow-all.svg" alt="" />
                    </picture></a>
            </div>
            <div class="row announce-row">
            	<?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 3,
                        'order'      => 'DESC',
                        'post_type'  => array( 'news' ),
                        'paged' => $paged
                    );
                ?>
                <?php
                $MY_QUERY = new WP_Query( $args );
                if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="main__announce"> <a href="<?php the_permalink(); ?>" class="main__announce_img text-center" style="background-image:url(<?php the_field('news_images'); ?>"></a>
                                <div class="main__announce_text">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_field('news_preview'); ?></p>
                                </div> <a class="read-btn" href="<?php the_permalink(); ?>">Читать далее</a>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>
                <?php  wp_reset_postdata(); ?>
            </div>
            <div class="main__title">
                <h2>Партнеры <picture>
                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.png" alt="" />
                    </picture>
                </h2>
            </div>
            <div class="slider__wrap partners">
                <div class="owl-carousel owl-theme partner-carousel">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 100,
                            'order'      => 'DESC',
                            'post_type'  => array( 'partners' ),
                            'paged' => $paged
                        );
                    ?>
                    <?php
                        $MY_QUERY = new WP_Query( $args );
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <div class="partner-carousel-item">
                                <div class="partners__img">
                                    <picture>
                                        <source srcset="<?php the_field('partner_img'); ?>" type="image/webp"><img class="text-center img-fluid" src="<?php the_field('partner_img'); ?>" alt="">
                                    </picture>
                                </div>
                                <div class="partners__info">
                                    <p class="color-links">
                                        <picture>
                                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mozilla-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mozilla-icon.svg" alt="" />
                                        </picture> <a href="<?php the_field('partner_link'); ?>"><?php the_field('partner_link'); ?></a>
                                    </p>
                                    <p>
                                        <picture>
                                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-icon.svg" alt="" />
                                        </picture> <a href="tel:<?php the_field('partner_link_phone'); ?>"><?php the_field('partner_text_phone'); ?></a>
                                    </p>
                                </div>
                            </div>
                            <?php endwhile;
                        endif; ?>
                    <?php  wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="main__title">
                <h2>Полезные ресурсы <picture>
                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.png" alt="" />
                    </picture>
                </h2>
            </div>
            <div class="slider__wrap resource">
                <div class="owl-carousel owl-theme resource-carousel">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 100,
                            'order'      => 'DESC',
                            'post_type'  => array( 'resources' ),
                            'paged' => $paged
                        );
                    ?>
                    <?php
                        $MY_QUERY = new WP_Query( $args );
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                <div class="resource-carousel-item">
                                    <a href="<?php the_field('resource_link'); ?>">
                                        <picture>
                                            <source srcset="<?php the_field('resource_img'); ?>" type="image/webp"><img class="text-center img-fluid" src="<?php the_field('resource_img'); ?>">
                                        </picture>
                                    </a>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    <?php  wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>