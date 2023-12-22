<?php
/*
Template Name: Деятельность
*/
?>
<?php get_header(); ?>
    <main>
        <div class="activity">
            <div class="container">
                <div class="activity__title">
                    <h2>Деятельность <picture>
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.webp" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/line-relative.png" alt="" />
                        </picture>
                    </h2>
                </div>
                <div class="info__documents">
                    <div class="info__documents_title d-flex align-items-center mb-4">
                        <picture>
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/monitoring-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/monitoring-icon.svg" alt="" />
                        </picture>
                        <h6>Мониторинги</h6>
                    </div>
                </div>
                <div class="info__list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'activity' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'activities',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 16 ],
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
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/puls-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img/icon/puls-icon.svg" alt="" />
                        </picture>
                        <h6>Практики здоровьесберегающих технологий</h6>
                    </div>
                </div>
                <div class="info__list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'activity' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'activities',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 17 ],
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
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/cvalification-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/cvalification-icon.svg" alt="" />
                        </picture>
                        <h6>Повышение квалификации</h6>
                    </div>
                </div>
                <div class="info__list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'activity' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'activities',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 18 ],
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
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/bank-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/bank-icon.svg" alt="" />
                        </picture>
                        <h6>Банк информационно-методических материалов</h6>
                    </div>
                </div>
                <div class="info__list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'activity' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'activities',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 19 ],
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
                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/meropriatia-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/meropriatia-icon.svg" alt="" />
                        </picture>
                        <h6>Мероприятия</h6>
                    </div>
                </div>
                <div class="info__list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 6,
                            'order'      => 'DESC',
                            'post_type'  => array( 'activity' ),
                            'tax_query' => [
                                [
                                    'taxonomy' => 'activities',
                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms'    => [ 20 ],
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
                <?php get_template_part( 'poll-snippet' ); ?>
            </div>
        </div>
    </main>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/close.svg"></button>
            </div>
            <div class="modal-body">
              <p><a href="<?php the_field('document_file');?>"></a></p>
              <div id="modalcontent">
                <h4>Вы уверены что хотите скачать “Полное наименование документа”?</h4>
              </div>
            </div>
            <div class="modal-footer">
            <a id="myfile" href="#">Скачать</a>
              <button type="button" class="" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/close.svg"></button>
            </div>
            <div class="modal-body">
              <h4>Скачивание началось</h4>
            </div>
            <div class="modal-footer modal__justify_left">
              <button type="button" class="" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
        </div>
      </div>
      
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