<?php
/*
Template Name: Структура
*/
?>
<?php get_header('information'); ?>
<main>
        <div class="container">
            <div class="info__tab">
                <ul>
                    <li><a href="https://www.rcmz49.ru/information/federal/">Федеральный проект</a></li>
                    <li><a href="https://www.rcmz49.ru/information/about/">О нас</a></li>
                    <li><a class="active" href="https://www.rcmz49.ru/information/structure/">Структура</a></li>
                    <li><a href="https://www.rcmz49.ru/information/documents/">Документы</a></li>
                </ul>
            </div>
            <div class="row news-row">
                <div class="container">
                    <div class="info__white_content">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="text-center">Структура Регионального центра мониторинга здоровья обучающихся общеобразовательных учреждений, реализующих адаптированные основные общеобразовательные программы в Магаданской области</h6>
                                <picture>
                                    <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/info-tab-3-1.svg" type="image/webp"><img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/img/info-tab-3-1.svg" alt="" height="auto" style="height: auto;margin: 20px auto 0 auto;display: block;">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="info__structure">
                        <div class="row">
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array (
                                    'posts_per_page' => 1,
                                    'order'      => 'DESC',
                                    'post_type'  => array( 'site_director' ),
                                    'paged' => $paged
                                );
                            ?>
                            <?php
                                $MY_QUERY = new WP_Query( $args );
                                if ( $MY_QUERY->have_posts() ) :
                                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                        <div class="col-12 col-md-12 col-lg-4 d-flex align-items-center mb-4">
                                            <div class="info__structure_photo" style="background-image: url(<?php the_field('str_photo'); ?>);">
                                            </div>
                                            <div class="info__structure_desc">
                                                <p class="mb-2"><strong><?php the_title(); ?></strong></p>
                                                <p class="mb-2"><?php the_field('str_dolg'); ?></p>
                                                <p class="color-links"><a class="d-flex align-items-center" href="mailto:<?php the_field('str_email'); ?>">
                                                        <picture>
                                                            <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" alt="" />
                                                        </picture> <?php the_field('str_email'); ?>
                                                    </a></p>
                                            </div>
                                        </div>
                                        <?php endwhile;
                                        endif; ?>
                                        <?php  wp_reset_postdata(); ?>
                                    </div>
                        <div class="row">
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                    $args = array (
                                        'posts_per_page' => 10,
                                        'order'      => 'DESC',
                                        'post_type'  => array( 'site_structure' ),
                                        'paged' => $paged
                                    );
                                ?>
                                <?php
                                    $MY_QUERY = new WP_Query( $args );
                                    if ( $MY_QUERY->have_posts() ) :
                                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                            <div class="col-12 col-md-12 col-lg-4 d-flex align-items-center mb-4">
                                                <div class="info__structure_photo" style="background-image: url(<?php the_field('sotrud_photo'); ?>);">
                                                </div>
                                                <div class="info__structure_desc">
                                                    <p class="mb-2"><strong><?php the_title(); ?></strong></p>
                                                    <p class="mb-2"><?php the_field('sotrud__dolg'); ?></p>
                                                    <p class="color-links"><a class="d-flex align-items-center" href="mailto:<?php the_field('email__dolg'); ?>">
                                                            <picture>
                                                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" alt="" />
                                                            </picture> <?php the_field('email__dolg'); ?>
                                                        </a></p>
                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif; ?>
                                <?php  wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>