<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<section class="vk-content">
        <div class="vk-home vk-home-slider">
            <div class="vk-baner-slider vk-slider-arrow-image">
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
                            <div class="vk-banner vk-banner-large vk-banner-mod vk-background-image-25" style="background-image:url(<?php the_field('slider_img'); ?>) !important;">
                                <div class="vk-background-overlay vk-background-black _70"></div>
                                <div class="container wrapper">
                                    <div class="page-heading">
                                        <span class="vk-text title-main">
                                            <span data-animation="<?php the_field('slider_title-animation_white'); ?>" data-delay="1s"><?php the_field('slider_title_white'); ?></span>
                                            <span class="vk-text-color-yellow-1" data-animation="<?php the_field('slider_title-animation_red'); ?>" data-delay="0.5s"><?php the_field('slider_title_red'); ?></span>
                                        </span>

                                        <span class="vk-text title-sub">
                                            <span class="vk-text-color-yellow-1" data-animation="<?php the_field('slider_text-animation_red'); ?>" data-delay="0.6s"><?php the_field('slider_text_red'); ?></span>
                                            <span class="vk-text title-sub" data-animation="<?php the_field('slider_text-animation_white'); ?>" data-delay="1.3s"><?php the_field('slider_text_white'); ?></span>
                                         </span>
                                    </div>
                                </div>
                            </div>
                <!--./vk-banner-->
                        <?php endwhile;
                    endif; ?>
                <?php  wp_reset_postdata(); ?>

                <!--<div class="vk-banner vk-banner-large vk-banner-mod vk-background-image-26" style="background-image:url(../images/background-26.jpg) !important;">
                    <div class="vk-background-overlay vk-background-black _70"></div>
                    <div class="container wrapper">
                        <div class="page-heading">
            <span class="vk-text title-main">
                    <span class="vk-text-color-yellow-1" data-animation="fadeInDown" data-delay="0.5s">Construction</span>
                    <span data-animation="fadeInUp" data-delay="0.5s">Building</span>
                 </span>
                            <span class="vk-text title-sub">
                    <span class="vk-text-color-yellow-1" data-animation="fadeInLeft" data-delay="0.6s">WICON</span>
                    <span data-animation="fadeInRight" data-delay="0.6s">IS THE BEST CONSTRUCTION SERVICES</span>
                 </span>
                        </div>
                    </div>
                </div>-->
                <!--./vk-banner-->


                <!--<div class="vk-banner vk-banner-large vk-banner-mod vk-background-image-27" style="background-image:url(../images/background-27.jpg) !important;">
                    <div class="vk-background-overlay vk-background-black _70"></div>
                    <div class="container wrapper">
                        <div class="page-heading">
            <span class="vk-text title-main">
                    <span class="vk-text-color-yellow-1" data-animation="flipInX" data-delay="0.5s">Construction</span>
                    <span  data-animation="flipInX" data-delay="0.7s"> Building</span>

                 </span>
                            <span class="vk-text title-sub" data-animation="flipInX" data-delay="0.9s">
                    <span class="vk-text-color-yellow-1" > WICON</span> IS THE BEST CONSTRUCTION SERVICES
                 </span>
                        </div>
                    </div>
                </div>-->
                <!--./vk-banner-->

            </div>
            <!-- ./vk-banner-slider-->

            <div class="vk-section vk-our-project-section">
                <div class="container">
                    <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                <span>
                    <span class="vk-text-color-yellow-1">Наши</span>
                    проекты
                </span>
                    </h2>

                    <nav class="box-filter text-center clearfix">

                        <ul class="vk-filter vk-filter-button hidden-xs hidden-sm">

                            <li class="data-filter" data-filter=".all">Все</li>

                            <li class="data-filter" data-filter=".data-consultant">Реализованные</li>

                            <li class="data-filter" data-filter=".data-design">Реализуемые</li>

                            <li class="data-filter" data-filter=".data-building">Требующие инвестиций</li>


                        </ul>
                        <!--./vk-filter-->

                        <select class="vk-filter vk-filter-button form-control hidden-md hidden-lg">

                            <option class="data-filter" value=".all">Все</option>

                            <option class="data-filter" value=".data-consultant">Реализованные</option>

                            <option class="data-filter" value=".data-design">Реализуемые</option>

                            <option class="data-filter" value=".data-building">Требующие инвестиций</option>


                        </select>
                        <!--./vk-filter-->
                    </nav>
                    <!--./box-filter-->

                    <div class="row">
                        <div class="vk-our-project-list vk-slider-filter">
                            <div class="item all">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">

                                    <?php
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array (
                                            'posts_per_page' => 100,
                                            'order'      => 'DESC',
                                            'post_type'  => array( 'project' ),
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'projects',
                                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                                    'terms'    => [ 9 ],
                                                ]
                                            ],
                                            'paged' => $paged
                                        );
                                    ?>
                                    <?php
                                        $MY_QUERY = new WP_Query( $args);
                                        if ( $MY_QUERY->have_posts() ) :
                                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                                <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                                    <div class="vk-project vk-project-grid-item">
                                                        <div class="vk-img-frame">
                                                            <a href="<?php the_permalink(); ?>" class="vk-img">
                                                                <img src="<?php the_field('preview_project_img'); ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="content-hidden">
                                                            <h5 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_field('project_preview_title'); ?></a></h5>
                                                            <ul class="vk-list vk-list-inline vk-list-action-post">
                                                                <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                                <!--<li><a href="#"><span class="ti-share"></span></a></li>
                                                                <li><a href="#"><span class="ti-heart"></span></a></li>-->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile;
                                        endif; ?>
                                    <?php  wp_reset_postdata(); ?>

                                    <!--<div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-grid/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h5 class="vk-title text-uppercase"><a href="4.3-single-project.html">Строительство домов по программе «7-20-25»</a></h5>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <!--<li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>-->
                                                <!--</ul>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                            <div class="item data-consultant">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">

                                    <?php
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array (
                                            'posts_per_page' => 100,
                                            'order'      => 'DESC',
                                            'post_type'  => array( 'project' ),
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'projects',
                                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                                    'terms'    => [ 10 ],
                                                ]
                                            ],
                                            'paged' => $paged
                                        );
                                    ?>
                                    <?php
                                        $MY_QUERY = new WP_Query( $args);
                                        if ( $MY_QUERY->have_posts() ) :
                                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                                <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                                    <div class="vk-project vk-project-grid-item">
                                                        <div class="vk-img-frame">
                                                            <a href="<?php the_permalink(); ?>" class="vk-img">
                                                                <img src="<?php the_field('preview_project_img'); ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="content-hidden">
                                                            <h5 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_field('project_preview_title'); ?></a></h5>
                                                            <ul class="vk-list vk-list-inline vk-list-action-post">
                                                                <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                                <!--<li><a href="#"><span class="ti-share"></span></a></li>
                                                                <li><a href="#"><span class="ti-heart"></span></a></li>-->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        
                                                </div>
                                            <?php endwhile;
                                        endif; ?>
                                    <?php  wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <div class="item data-design">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">

                                    <?php
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array (
                                            'posts_per_page' => 100,
                                            'order'      => 'DESC',
                                            'post_type'  => array( 'project' ),
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'projects',
                                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                                    'terms'    => [ 11 ],
                                                ]
                                            ],
                                            'paged' => $paged
                                        );
                                    ?>
                                    <?php
                                        $MY_QUERY = new WP_Query( $args);
                                        if ( $MY_QUERY->have_posts() ) :
                                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                                <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                                    <div class="vk-project vk-project-grid-item">
                                                        <div class="vk-img-frame">
                                                            <a href="<?php the_permalink(); ?>" class="vk-img">
                                                                <img src="<?php the_field('preview_project_img'); ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="content-hidden">
                                                            <h5 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_field('project_preview_title'); ?></a></h5>
                                                            <ul class="vk-list vk-list-inline vk-list-action-post">
                                                                <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                                <!--<li><a href="#"><span class="ti-share"></span></a></li>
                                                                <li><a href="#"><span class="ti-heart"></span></a></li>-->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        
                                                </div>
                                            <?php endwhile;
                                        endif; ?>
                                    <?php  wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <div class="item data-building">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">

                                    <?php
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array (
                                            'posts_per_page' => 100,
                                            'order'      => 'DESC',
                                            'post_type'  => array( 'project' ),
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'projects',
                                                    'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                                    'terms'    => [ 12 ],
                                                ]
                                            ],
                                            'paged' => $paged
                                        );
                                    ?>
                                    <?php
                                        $MY_QUERY = new WP_Query( $args);
                                        if ( $MY_QUERY->have_posts() ) :
                                            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                                                <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                                    <div class="vk-project vk-project-grid-item">
                                                        <div class="vk-img-frame">
                                                            <a href="<?php the_permalink(); ?>" class="vk-img">
                                                                <img src="<?php the_field('preview_project_img'); ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="content-hidden">
                                                            <h5 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_field('project_preview_title'); ?></a></h5>
                                                            <ul class="vk-list vk-list-inline vk-list-action-post">
                                                                <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                                <!--<li><a href="#"><span class="ti-share"></span></a></li>
                                                                <li><a href="#"><span class="ti-heart"></span></a></li>-->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        
                                                </div>
                                            <?php endwhile;
                                        endif; ?>
                                    <?php  wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <div class="item data-furniture">
                                <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-grid/img-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CITY LIBRARY BOOKS</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-building">
                                        
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-furniture">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-grid/img-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">OFFICE FURNITURE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-grid/img-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-consultant">
                                        <div class="vk-project vk-project-grid-item">
                                            <div class="vk-img-frame">
                                                <a href="4.3-single-project.html" class="vk-img">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/project-grid/img-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content-hidden">
                                                <h4 class="vk-title text-uppercase"><a href="4.3-single-project.html">CABLE-STAYED BRIDGE</a></h4>
                                                <ul class="vk-list vk-list-inline vk-list-action-post">
                                                    <li><a href="4.3-single-project.html"><span class="ti-eye"></span></a></li>
                                                    <li><a href="#"><span class="ti-share"></span></a></li>
                                                    <li><a href="#"><span class="ti-heart"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 item data-design">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.vk-our-project-section -->

            <div class="vk-counter-section vk-background-image-24 vk-counter-section-style-1 vk-parallax">
                <div class="vk-background-overlay vk-background-black-1 _80"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="vk-counter vk-counter-dark vk-counter-inline first-child">
                                <div class="vk-counter-icon-img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/analytics-red.png">
                                </div>
                                <ul class="content">
                                    <li class="number-count" data-to="50">50</li>
                                    <li class="title text-uppercase">проектов<br> в обороте</li>
                                </ul>
                            </div>
                            <!--./vk-counter-->

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <div class="vk-counter vk-counter-dark vk-counter-inline">
                                <!--<i class="flaticon flaticon-worker-1"></i>-->
                                <div class="vk-counter-icon-img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/profits-red.png">
                                </div>
                                <ul class="content">
                                    <li class="number-count" data-to="500">500</li>
                                    <li class="title text-uppercase">млрд. тенге<br> инвестиций</li>
                                </ul>
                            </div>
                            <!--./vk-counter-->

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <div class="vk-counter vk-counter-dark vk-counter-inline">
                                <!--<i class="flaticon flaticon-wrench"></i>-->
                                <div class="vk-counter-icon-img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/meeting-red.png">
                                </div>
                                <ul class="content">
                                    <li class="number-count" data-to="2600">2,600</li>
                                    <li class="title text-uppercase">Бизнесменов <br> прошли курсы</li>
                                </ul>
                            </div>
                            <!--./vk-counter-->

                        </div>

                        <div class="col-md-3 col-sm-6">

                            <div class="vk-counter vk-counter-dark vk-counter-inline">
                                <div class="vk-counter-icon-img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/employee-red.png">
                                </div>
                                <ul class="content">
                                    <li class="number-count" data-to="1500">1,500</li>
                                    <li class="title text-uppercase">РАБОЧИХ<br>МЕСТ</li>
                                </ul>
                            </div>
                            <!--./vk-counter-->

                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- lastest post -->

        <div class="home-builder-lastest-post vk-what-we-do-section vk-section vk-section-style-2 vk-section-style-3 t-lastest-post">
            <div class="container">
                <div class="row">
                    <div class="home-builder-title">
                    <!--<h2>Наши новости</h2>
                    <div class="img">
                        <img src="images/home-builder/line.png">
                    </div>-->
                    <h2 class="vk-heading vk-heading-line vk-heading-line-center">
                        <span>
                            Наши
                            <span class="vk-text-color-yellow-1">
                                Новости
                            </span>
                        </span>
                    </h2>
                </div>
                    <div class="col-md-12 slide-lastest">
                    	<?php
                          $query_args = array(      // Полная документация здесь (wp-kama.ru/function/wp_query)
                            'cat' => '1',           // Из какой категории выводим
                            'posts_per_page' => 6,  // Количество анонсов
                            'offset' => 2,          // Отступ постов (аккуратнее с пагинацией)    
                          )
                        ?>
                        	<?php $query = new WP_Query( $query_args ); ?>
                                <?php if ( $query->have_posts() ) : ?>
                                  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
			                        <div class="home-builder-lastest-item">
			                            <div class="home-builder-img">
			                                <div class="img">
			                                    <img src="<?php the_field('post_preview_images'); ?>">
			                                </div>
			                                <div class="shadow"></div>
			                            </div>
			                            <div class="home-builder-content">
			                                <div class="title">
			                                    <h4><?php the_field('previeu_title'); ?></h4>
			                                </div>
			                                <div class="content">
			                                    <p><?php the_field('previue_post'); ?></p>
			                                </div>
			                                <div class="readmore">
			                                    <a href="<?php the_permalink(); ?>">Подробнее
			                                    <i class="fa fa-long-arrow-right"></i></a>
			                                </div>
			                            </div>
			                        </div>
			                       <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                              <?php else : ?>
                              <p><?php _e( 'Нет записей для отображения' ); ?></p>
                            <?php endif; ?>
                        <!--<div class="home-builder-lastest-item">
                            <div class="home-builder-img">
                                <div class="img">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/lastest2.jpg"></a>
                                </div>
                                <div class="shadow"></div>
                            </div>
                            <div class="home-builder-content">
                                <div class="title">
                                    <h4>Миллион квадратных метров первичного жилья строят в Шымкенте</h4>
                                </div>
                                <div class="content">
                                    <p>Сегодня, аким Шымкента, Мурат Айтенов, ознакомился с ходом строительства жилых домов в городе. В первую очередь, глава города осмотрел 10 жилых домов...</p>
                                </div>
                                <div class="readmore">
                                    <a href="#">Подробнее</a>
                                    <i class="fa fa-long-arrow-right"></i>

                                </div>
                            </div>
                        </div>
                        <div class="home-builder-lastest-item">
                            <div class="home-builder-img">
                                <div class="img">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/lastest3.jpg"></a>
                                </div>
                                <div class="shadow"></div>
                            </div>
                            <div class="home-builder-content">
                                <div class="title">
                                    <h4>Аким города Шымкент Мурат Айтенов провел рабочую встречу с сотрудниками АО «СПК «Shymkent»</h4>
                                </div>
                                <div class="content">
                                    <p>В рамках деятельности фронт-офиса предусмотрено упрощение процедур по выдаче 1%- кредитования предпринимателям....</p>
                                </div>
                                <div class="readmore">
                                    <a href="#">Read more</a>
                                    <i class="fa fa-long-arrow-right"></i>

                                </div>
                            </div>
                        </div>
                        <div class="home-builder-lastest-item">
                            <div class="home-builder-img">
                                <div class="img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/lastest1img.jpg">
                                </div>
                                <div class="shadow"></div>
                            </div>
                            <div class="home-builder-content">
                                <div class="title">
                                    <h4>44 МНОГОЭТАЖНЫХ ДОМА СТРОИТ СПК «SHYMKENT»</h4>
                                </div>
                                <div class="content">
                                    <p> Социально-предпринимателькая корпорация приступила к участию в реализации жилищной программы «7-20-25» в Шымкенте...</p>
                                </div>
                                <div class="readmore">
                                    <a href="#">Подробнее</a>
                                    <i class="fa fa-long-arrow-right"></i>

                                </div>
                            </div>
                        </div>
                        <div class="home-builder-lastest-item">
                            <div class="home-builder-img">
                                <div class="img">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/lastest2.jpg"></a>
                                </div>
                                <div class="shadow"></div>
                            </div>
                            <div class="home-builder-content">
                                <div class="title">
                                    <h4>Миллион квадратных метров первичного жилья строят в Шымкенте</h4>
                                </div>
                                <div class="content">
                                    <p>Сегодня, аким Шымкента, Мурат Айтенов, ознакомился с ходом строительства жилых домов в городе. В первую очередь, глава города осмотрел 10 жилых домов...</p>
                                </div>
                                <div class="readmore">
                                    <a href="#">Подробнее</a>
                                    <i class="fa fa-long-arrow-right"></i>

                                </div>
                            </div>
                        </div>
                        <div class="home-builder-lastest-item">
                            <div class="home-builder-img">
                                <div class="img">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/lastest3.jpg"></a>
                                </div>
                                <div class="shadow"></div>
                            </div>
                            <div class="home-builder-content">
                                <div class="title">
                                    <h4>Аким города Шымкент Мурат Айтенов провел рабочую встречу с сотрудниками АО «СПК «Shymkent»</h4>
                                </div>
                                <div class="content">
                                    <p>В рамках деятельности фронт-офиса предусмотрено упрощение процедур по выдаче 1%- кредитования предпринимателям....</p>
                                </div>
                                <div class="readmore">
                                    <a href="#">Read more</a>
                                    <i class="fa fa-long-arrow-right"></i>

                                </div>
                            </div>
                        </div>-->
                    </div>

                </div>
                <!--./row-->
            </div>
            <!--./container-->
        </div>
        <!-- // lastest post -->
        </div>
        <!--./home-->

    </section>

    <div class="home-builder-title">
        <!--<h2>Наши новости</h2>
        <div class="img">
            <img src="images/home-builder/line.png">
        </div>-->
        <h2 class="vk-heading vk-heading-line vk-heading-line-center">
                        <span>
                            Наши
                            <span class="vk-text-color-yellow-1">
                                Партнеры
                            </span>
                        </span>
        </h2>
    </div>

    <div class="home-builder-image-gallery t-gallery">
        <div class="container">            
            <div class="row">
                <div class="vk-slider vk-slick-slider vk-slider-circle" data-slick='{"slidesToShow": 6}'>
                    <div class="item col-md-3">
                        <div class="vk-img-frame partners_modern">
                            <a href="#" c"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/atameken_logo-1.png"></a>
                        </div>
                    </div>

                    <div class="item col-md-3">
                        <div class="vk-img-frame partners_modern">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/kazahinvset_logo.png"></a>
                        </div>
                    </div>

                    <div class="item col-md-3">
                        <div class="vk-img-frame partners_modern">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/hevel_logo.png"></a>
                        </div>
                    </div>

                    <div class="item col-md-3">
                        <div class="vk-img-frame partners_modern">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/highvill_logo.png"></a>
                        </div>
                    </div>

                    <div class="item col-md-3">
                        <div class="vk-img-frame partners_modern">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/bigroup_logo.png"></a>
                        </div>
                    </div>

<!--                    <div class="item col-md-3">-->
<!--                        <div class="vk-img-frame partners_modern">-->
<!--                            <a href="#"><img src="--><?php //echo bloginfo('template_url'); ?><!--/assets/images/logohappy.png"></a>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="item col-md-3">
                        <div class="vk-img-frame partners_modern">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/damu_logo.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--./content-->

    <?php get_footer(); ?>