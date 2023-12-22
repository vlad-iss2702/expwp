<?php
/*
Template Name: Медиагалерея
*/
?>
<?php get_header(); ?>
    <main>
        <div class="info">
            <div class="container">
                <div id="usual1" class="usual">
                    <ul>
                        <li><a href="#anounce" class="selected">Анонсы</a></li>
                        <li><a href="#news" class="">Новости</a></li>
                        <li><a href="#gallery" class="">Фотогалерея</a></li>
                    </ul>
                    <div id="anounce">
                        <div class="row announce-row">
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array (
                                    'posts_per_page' => 1,
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
                                <div class="page_nav">
                                    <?php
                                        $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                                        the_posts_pagination(array(
                                        'show_all'     => false,
                                        'type'=>'inline',
                                        'screen_reader_text' => __( '' ),
                                        'end_size'     => 0,
                                        'mid_size'     => 0,
                                        'prev_next'    => True,
                                        'prev_text'    => __('<img src="https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/prev-green.png">'),
                                        'next_text'    => __('<img src="https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/next-green.png">'),
                                        'add_args'     => False
                                    ));
                                    ?>
                                </div>
                            <?php  wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div id="news">
                        <div class="row news-row">
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array (
                                    'posts_per_page' => 1,
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
                                <div class="page_nav">
                                    <?php
                                        $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                                        the_posts_pagination(array(
                                        'show_all'     => false,
                                        'type'=>'inline',
                                        'screen_reader_text' => __( '' ),
                                        'end_size'     => 0,
                                        'mid_size'     => 0,
                                        'prev_next'    => True,
                                        'prev_text'    => __('<img src="https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/prev-green.png">'),
                                        'next_text'    => __('<img src="https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/next-green.png">'),
                                        'add_args'     => False
                                    ));
                                    ?>
                                </div>
                            <?php  wp_reset_postdata(); ?>
                        </div>
                        <!--<div class="info__pagination">
                            <ul class="d-flex align-items-center justify-content-center mb-4">
                                <li> <a class="pag-nav" href="">
                                        <picture>
                                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/prev-green.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/prev-green.png" alt="" />
                                        </picture>
                                    </a> </li>
                                <li> <a class="pag-active" href="">1</a> </li>
                                <li> <a href="">...</a> </li>
                                <li> <a href="">3</a> </li>
                                <li> <a class="pag-nav" href="">
                                        <picture>
                                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/next-green.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/next-green.png" alt="" />
                                        </picture>
                                    </a> </li>
                            </ul>
                            <div class="info__pagination_links d-flex align-items-center justify-content-center mb-5">
                                <p><a href="#">В начало</a></p>
                                <p><a href="#">В конец</a></p>
                            </div>
                        </div>-->
                    </div>
                    <div id="gallery" class="gallery">
                        <div class="main__slider_mobile">
                            <div class="owl-carousel owl-theme main-carousel">
                                <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $args = array (
                                        'posts_per_page' => 100,
                                        'order'      => 'DESC',
                                        'post_type'  => array( 'gallery_slider' ),
                                        'paged' => $paged
                                    );
                                ?>
                                <?php
                                    $MY_QUERY = new WP_Query( $args );
                                    if ( $MY_QUERY->have_posts() ) :
                                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                            <div class="main-carousel-item img-fluid" style="background-image:url(<?php the_field('slider__img'); ?>"></div>
                                        <?php endwhile;
                                    endif; ?>
                                <?php  wp_reset_postdata(); ?>
                            </div>

                        </div>
                        <div class="media__wrap">
                            <div class="owl-carousel owl-theme gallery-carousel">
                                <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $args = array (
                                        'posts_per_page' => 100,
                                        'order'      => 'DESC',
                                        'post_type'  => array( 'gallery_slider' ),
                                        'paged' => $paged
                                    );
                                ?>
                                <?php
                                    $MY_QUERY = new WP_Query( $args );
                                    if ( $MY_QUERY->have_posts() ) :
                                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                            <div class="gallery-carousel-item" style="background-image:url(<?php the_field('slider__img'); ?>"> </div>
                                        <?php endwhile;
                                    endif; ?>
                                <?php  wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <div class="container">
                            <div class="gallery__list">
                                <div class="row photo-gallery__albums">
                                    <?php
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array (
                                            'posts_per_page' => 1,
                                            'order'      => 'DESC',
                                            'post_type'  => array( 'gallery_list' ),
                                            'paged' => $paged
                                        );
                                    ?>
                                    <?php
                                        $MY_QUERY = new WP_Query( $args );
                                        if ( $MY_QUERY->have_posts() ) :
                                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                                <?php $quantity = 0; ?>
                                                <?php $gallery = get_field('photo_gallery'); ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                                        <div class="photo-gallery__items gallery-init"> 
                                            <a class="gallery__list_item photo-gallery__thumb" href="<?php the_field('photo_gallery_one'); ?>" style="background-image:url(<?php the_field('main_gallery'); ?>" title="<?php the_title(); ?>"> 
                                                <span class="gallery__list_title"><?php the_title(); ?></span>
                                                <div class="gallery__list_item-info"> 
                                                    <span><?php the_time('d.m.Y'); ?></span> 
                                                    <span>
                                                        <picture>
                                                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/img-icon-white.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/img-icon-white.png" alt="" />
                                                        </picture> <?php foreach ($gallery as $img) { ?> 
                                                                    <?php $quantity++ ?>
                                                                    <?php
                                                                     }
                                                                    ?>
                                                                    <?php echo $quantity + 1 ?>
                                                    </span> 
                                                </div>
                                            </a>
                                            
                                            <?php foreach ($gallery as $img) { ?>
                                            <a class="photo-gallery__thumb" href="<?= $img['photo_gallery_item'] ?>" title="<?= $img['photo_gallery_title'] ?>" style="background-image:url(<?= $img['photo_gallery_item'] ?>">
                                                <picture>
                                                    <source srcset="<?= $img['photo_gallery_item'] ?>" type="image/webp"><img class="b-lazy transition resp-img photo-gallery__image b-loaded" src="<?= $img['photo_gallery_item'] ?>" alt="">
                                                </picture>
                                            </a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                            <?php endwhile;
                                        endif; ?>
                                        <div class="page_nav">
                                            <?php
                                                $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                                                the_posts_pagination(array(
                                                'show_all'     => false,
                                                'type'=>'inline',
                                                'screen_reader_text' => __( '' ),
                                                'end_size'     => 0,
                                                'mid_size'     => 0,
                                                'prev_next'    => True,
                                                'prev_text'    => __('<img src="https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/prev-green.png">'),
                                                'next_text'    => __('<img src="https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/next-green.png">'),
                                                'add_args'     => False
                                            ));
                                            ?>
                                        </div>
                                        <?php  wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <!--<div class="info__pagination">
                                <ul class="d-flex align-items-center justify-content-center mb-4">
                                    <li> <a class="pag-nav" href="">
                                            <picture>
                                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/prev-green.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/prev-green.png" alt="" />
                                            </picture>
                                        </a> </li>
                                    <li> <a class="pag-active" href="">1</a> </li>
                                    <li> <a href="">...</a> </li>
                                    <li> <a href="">3</a> </li>
                                    <li> <a class="pag-nav" href="">
                                            <picture>
                                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/next-green.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/next-green.png" alt="" />
                                            </picture>
                                        </a> </li>
                                </ul>
                                <div class="info__pagination_links d-flex align-items-center justify-content-center mb-5">
                                    <p><a href="#">В начало</a></p>
                                    <p><a href="#">В конец</a></p>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>