<?php
/*
Template Name: Партнёры
*/
?>
<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="main__title">
                <h2>Разработчики</h2>
            </div>
            <div class="row partners-row">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 100,
                        'order'      => 'DESC',
                        'post_type'  => array( 'developers' ),
                        'paged' => $paged
                    );
                ?>
                <?php
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="partners__item">
                                    <picture>
                                        <source srcset="<?php the_field('developers_img'); ?>" type="image/webp"><img src="<?php the_field('developers_img'); ?>" alt="" />
                                    </picture>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="partners__info">
                                        <p class="color-links">
                                            <picture>
                                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mozilla-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mozilla-icon.svg" alt="">
                                            </picture> <a href="<?php the_field('developers_link'); ?>"><?php the_field('developers_link'); ?></a>
                                        </p>
                                        <p>
                                            <picture>
                                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-icon.svg" alt="">
                                            </picture> <span><a href="tel:<?php the_field('developers_link_phone_one'); ?>"><?php the_field('developers_text_phone_one'); ?></a><br /> <a href="tel:<?php the_field('developers_link_phone_one'); ?>"><?php the_field('developers_text_phone_two'); ?></a> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                <?php  wp_reset_postdata(); ?>
            </div>
            <div class="main__title">
                <h2>Партнеры</h2>
            </div>
            <div class="partners">
                <div class="row">
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
                                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                                    <div class="partners__item">
                                        <picture>
                                            <source srcset="<?php the_field('partner_img'); ?>" type="image/webp"><img src="<?php the_field('partner_img'); ?>" alt="" style="margin-top: 45px;">
                                        </picture>
                                        <div class="partners__info">
                                            <p class="color-links">
                                                <picture>
                                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mozilla-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/mozilla-icon.svg" alt="">
                                                </picture> <a href="<?php the_field('partner_link'); ?>"><?php the_field('partner_link'); ?></a>
                                            </p>
                                            <p>
                                                <picture>
                                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-icon.svg" alt="">
                                                </picture> <span><a href="tel:<?php the_field('partner_link_phone'); ?>"><?php the_field('partner_text_phone'); ?></a><br /> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    <?php  wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>