<?php
/*
Template Name: Документы
*/
?>
<?php get_header('information'); ?>
<main>
        <div class="container">
            <div class="info__tab">
                <ul>
                    <li><a href="https://www.rcmz49.ru/information/federal/">Федеральный проект</a></li>
                    <li><a href="https://www.rcmz49.ru/information/about/">О нас</a></li>
                    <li><a href="https://www.rcmz49.ru/information/structure/">Структура</a></li>
                    <li><a class="active" href="https://www.rcmz49.ru/information/documents/">Документы</a></li>
                </ul>
            </div>
            <div class="row news-row">
                <div class="container">
                        <div class="info__documents">
                            <div class="info__documents_title d-flex align-items-center mb-4">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/normative-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/normative-icon.svg" alt="" />
                                </picture>
                                <h6>Нормативные акты</h6>
                            </div>
                        </div>
                        <div class="info__list">
                            <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'document' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'documents',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 6 ],
                                ]
                            ],
                            'paged' => $paged
                        );
                    ?>
                    <ul>
                        <?php
                        $MY_QUERY = new WP_Query( $args);
                        if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <li><a href="<?php the_field('document_file');?>" class="file" data-toggle="modal"><?php the_title(); ?></a> </li>
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
                    </ul>
                        </div>
                        <div class="info__documents">
                            <div class="info__documents_title d-flex align-items-center mb-4">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/local-info.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/local-info.svg" alt="" />
                                </picture>
                                <h6>Локальные акты</h6>
                            </div>
                        </div>
                        <div class="info__list">
                           <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'document' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'documents',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 7 ],
                                ]
                            ],
                            'paged' => $paged
                        );
                    ?>
                    <ul>
                        <?php
                        $MY_QUERY = new WP_Query( $args);
                        if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <li><a href="<?php the_field('document_file');?>" class="file" data-toggle="modal"><?php the_title(); ?></a> </li>
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
                    </ul>
                        </div>
                        <div class="info__documents">
                            <div class="info__documents_title d-flex align-items-center mb-4">
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/message-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/message-icon.svg" alt="" />
                                </picture>
                                <h6>Письма</h6>
                            </div>
                        </div>
                        <div class="info__list">
                            <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'document' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'documents',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 8 ],
                                ]
                            ],
                            'paged' => $paged
                        );
                    ?>
                    <ul>
                        <?php
                        $MY_QUERY = new WP_Query( $args);
                        if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <li><a href="<?php the_field('document_file');?>" class="file" data-toggle="modal"><?php the_title(); ?></a> </li>
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
                    </ul>
                        </div>
                    </div>
            </div>
        </div>
    </main>

      
    <script>
         $(document).ready(function () {
            $(document).on('click', '.file', function () {
                // тут надо передать атрибут href в модальное окно
                $('#myfile').attr("href", $(this).attr('href'));
                $('#myModal').modal('show');
                return false;
            });
            $(document).on('click', '#myfile', function () {
                $('#myModal').modal('hide');
                $('#myModal2').modal('show');
            });
        });   
    </script>

    <?php get_footer(); ?>