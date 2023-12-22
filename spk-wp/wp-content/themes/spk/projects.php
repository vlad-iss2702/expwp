<?php
/*
Template Name: Project
*/
?>
<?php get_header(); ?>
<section class="vk-content">
    <div class="vk-banner vk-background-image-3">
        <div class="vk-background-overlay vk-background-black-1 _80"></div>
        <div class="container wrapper">
            <div class="page-heading">
               Инвестиционные проекты
            </div>
        </div>
    </div>
    <!--./vk-banner-->

    <div class="vk-breadcrumb">
        <nav class="container">
            <ul>
                <li><a href="index.html">Главная</a></li>

                <li><a href="#">Проекты</a></li>

                <li class="active">Инвестиционные проекты</li>
            </ul>
        </nav>
    </div>
    <!--./vk-breadcrumb-->


    <div class="vk-page vk-page-project vk-page-project-list vk-space x-large">
            <div class="container">
                <nav class="box-filter text-center clearfix">

                    <ul class="vk-filter vk-filter-button hidden-xs hidden-sm">

                        <li class="data-filter active" data-filter="*">Все</li>

                        <li class="data-filter" data-filter=".completed">Реализованные</li>

                        <li class="data-filter" data-filter=".process">Реализуемые</li>

                        <li class="data-filter" data-filter=".investment">Требующие инвестиций</li>

                    </ul>
                    <!--./vk-filter-->

                    <select class="vk-filter vk-filter-button form-control hidden-md hidden-lg">

                        <option class="data-filter" value="*">Все</option>

                        <option class="data-filter" value=".completed">Реализованные</option>

                        <option class="data-filter" value=".process">Реализуемые</option>

                        <option class="data-filter" value=".investment">Требующие инвестиций</option>    

                    </select>
                    <!--./vk-filter-->
                </nav>
                <!--./box-filter-->

                <div class="vk-project-list clearfix vk-masonry-layout" style="position: relative; height: 2492.4px;">

                    
                   <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                     $args = array (
                        'posts_per_page' => 100,
                        'order'      => 'DESC',
                        'post_type'  => array( 'cat-one' ),
                        'paged' => $paged
                      );
                      ?>
                    <?php
                        $MY_QUERY = new WP_Query( $args );
                        if ( $MY_QUERY->have_posts() ) :
                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                <div class="vk-project vk-project-list-item item data-const" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="col-md-4 left-content">
                                        <div class="vk-img-frame">
                                            <a href="<?php the_permalink(); ?>" class="vk-img">
                                                <img src="<?php the_field('preview_project_img'); ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 right-content">
                                        <h5 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>">
                                            <?php the_field('project_preview_title'); ?>
                                            </a></h5>
                                        <ul class="vk-list vk-list-inline vk-detail-post">
                                            <li>Состояние: <span class="vk-text-color-yellow-1"><?php the_field('state_project'); ?></span></li>
                                            <li>Стоимость: <span class="vk-text-color-yellow-1"><?php the_field('cost_project'); ?></span></li>
                                            <li>Локация: <span class="vk-text-color-yellow-1"><?php the_field('location_project'); ?></span></li>
                                        </ul>
                                        <p class="post-brief-content">
                                            Цель проекта: <?php the_field('objective_project'); ?>

                                        </p>
                                        <div class="vk-buttons">
                                            <a href="<?php the_permalink(); ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее...
                                                <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif; ?>
                    <?php  wp_reset_postdata(); ?>

                    <!--<div class="vk-project vk-project-list-item item data-building" style="position: absolute; left: 0px; top: 385px;">
                        <div class="col-md-4 left-content">
                            <div class="vk-img-frame">
                                <a href="single-project.html" class="vk-img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-list/img-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 right-content">
                            <h4 class="vk-title text-uppercase"><a href="single-project.html">СПК "Shymkent" строительство 22 многоэтажных домов</a></h4>
                            <ul class="vk-list vk-list-inline vk-detail-post">
                                <li>Состояние: <span class="vk-text-color-yellow-1">Требующие инвестиций</span></li>
                                <li>Стоимость: <span class="vk-text-color-yellow-1">10,5 млрд.тнг</span></li>
                                <li>Локация: <span class="vk-text-color-yellow-1">г.Шымкент</span></li>
                            </ul>
                            <p class="post-brief-content">
                                Строительство СПК "Shymkent" 22 многоэтажных жилых домов в городе Шымкент/Строительство СПК "Shymkent" 22 многоэтажных жилых домов в городе Шымкент
                            </p>
                            <div class="vk-buttons">
                                <a href="single-project.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее...
                                    <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="vk-project vk-project-list-item item data-consultant" style="position: absolute; left: 0px; top: 793px;">
                        <div class="col-md-4 left-content">
                            <div class="vk-img-frame">
                                <a href="single-project.html" class="vk-img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-list/img-4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 right-content">
                            <h4 class="vk-title text-uppercase"><a href="single-project.html">Промышленный парк “Build-to-suit”</a></h4>
                            <ul class="vk-list vk-list-inline vk-detail-post">
                                <li>Состояние: <span class="vk-text-color-yellow-1">Реализованные</span></li>
                                <li>Стоимость: <span class="vk-text-color-yellow-1">20,5 млрд.тнг</span></li>
                                <li>Локация: <span class="vk-text-color-yellow-1">г.Шымкент</span></li>
                            </ul>
                            <p class="post-brief-content">
                                Цель проекта: Создание площадки для размещения и функционирования производственных мощностей на базе действующей специальной экономической зоны “ОҢТҮСТІК”, с последующей сдачей в аренду.
                            </p>
                            <div class="vk-buttons">
                                <a href="single-project.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее...
                                    <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="vk-project vk-project-list-item item data-design" style="position: absolute; left: 0px; top: 1178px;">
                        <div class="col-md-4 left-content">
                            <div class="vk-img-frame">
                                <a href="single-project.html" class="vk-img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-list/img-6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 right-content">
                            <h4 class="vk-title text-uppercase"><a href="single-project.html">Индустриальная зона "Жулдыз"</a></h4>
                            <ul class="vk-list vk-list-inline vk-detail-post">
                                <li>Состояние: <span class="vk-text-color-yellow-1">Реализованные</span></li>
                                <li>Стоимость: <span class="vk-text-color-yellow-1">15,5 млрд.тнг</span></li>
                                <li>Локация: <span class="vk-text-color-yellow-1">г.Шымкент</span></li>
                            </ul>
                            <p class="post-brief-content">
                                Цель проекта: Создание условий для развития крупного, малого и среднего бизнеса, привлечения отечественных и иностранных инвесторов.
                            </p>
                            <div class="vk-buttons">
                                <a href="single-project.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее...
                                    <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!--./vk-project-list-->

                <nav class="box-pagination">

                    <ul class="vk-pagination">
                        <li class="first arrow"><a href="#">first</a></li>
                        <li class="back arrow"><a href="#">back</a></li>
                        <li class="active">1</li>

                        <li><a href="#">2</a></li>


                        <li><a href="#">3</a></li>


                        <li><a href="#">4</a></li>


                        <li><a href="#">5</a></li>


                        <li><a href="#">6</a></li>


                        <li class="next arrow"><a href="#">next</a></li>
                        <li class="last arrow"><a href="#">last</a></li>
                    </ul>
                    <!--./vk-pagination-->
                </nav>
                <!--./box-pagination-->
            </div>
            <!--./container-->
        </div>



    </section>

    <?php get_footer(); ?>