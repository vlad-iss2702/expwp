<?php
/*
Template Name: Новости
*/
?>
<?php get_header('media'); ?>
<main>
        <div class="container">
            <div class="info__tab">
                <ul>
                    <li><a href="https://www.rcmz49.ru/media/anounce/">Анонсы</a></li>
                    <li><a class="active" href="https://www.rcmz49.ru/media/news/">Новости</a></li>
                    <li><a href="https://www.rcmz49.ru/media/gallery/">Фотогалерея</a></li>
                </ul>
            </div>
            <div class="row news-row">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 6,
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
                                <div class="main__announce mb-3"> <a href="<?php the_permalink(); ?>" class="main__announce_img text-center" style="background-image:url(<?php the_field('news_images'); ?>"></a>
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
        </div>
    </main>

    <?php get_footer(); ?>