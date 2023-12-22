<?php
/*
Template Name: Singe Blog
*/
?>
<?php get_header(); ?>
<section class="vk-content">
<div class="vk-banner vk-background-image-3">
    <div class="vk-background-overlay vk-background-black-1 _80"></div>
    <div class="container wrapper">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="page-heading">
                <?php the_field('previeu_title'); ?>
            </div>
        <?php endwhile; ?> 
        <?php endif; ?>
    </div>
</div>
<!--./vk-banner-->

<div class="vk-breadcrumb">
            <nav class="container">
                <ul>
                    <li><a href="index.html">Главная</a></li>

                    <li><a href="5.3-single-blog.html#">Пресс Центр</a></li>

                    <li class="active">Новости</li>
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>

                    <li class="active"><?php the_field('previeu_title'); ?></li>

                    <?php endwhile; ?> 
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
<!--./vk-breadcrumb-->    
<div class="" data-example-id="media-alignment">
            <div class="vk-blog-wrapper">
                <!------ BEGIN BLOG WRPPER ------>
                <div class="container">
                    <div class="row">
                        <div class="vk-space x-large">
                            <div class="single-blog">
                                <div class="col-md-9">
                                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                                        <div class="blog-content">
                                            <div class="vk-img-frame">
                                                <img src="<?php the_field('post_images'); ?>" alt="">
                                            </div>
                                            <h4 class="vk-text-uppercase"><?php the_title(); ?></h4>
                                            <div class="info">
                                                <ul class="vk-list">
                                                    <li class="vk-text-capitalize">Категории:<span>&nbsp; <?php the_category(', '); ?> </span></li>
                                                    <li class="vk-text-capitalize">Дата:<span>&nbsp;  <?php the_time('j F Y'); ?> </span></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <?php the_content(); ?>
                                            </div>
                                            <div class="share">
                                                <ul class="list-inline">
                                                    <li class="hidden-sm hidden-xs">
                                                        <h4 class="vk-text-uppercase">Поделится</h4></li>
                                                    <li>
                                                        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tag">
                                                <ul class="list-inline">
                                                    <li class="hidden-sm hidden-xs"><h4 class="vk-text-uppercase">Теги</h4></li>
                                                    <li class="vk-tag"><a href="5.3-single-blog.html#">Предпринимателю</a></li>
                                                    <li class="vk-tag"><a href="5.3-single-blog.html#">СПК</a></li>
                                                    <li class="vk-tag"><a href="5.3-single-blog.html#">Инвестору</a></li>
                                                    <li class="vk-tag"><a href="5.3-single-blog.html#">Digital agent</a></li>
                                                </ul>
                                            </div>
                                            <!--<div class="comment">
                                                <h4 class="vk-text-capitalize">2 comments</h4>
                                                <div class="bs-example" data-example-id="default-media">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="5.3-single-blog.html#">
                                                                <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/testimonial/testimonial-1.jpg" data-holder-rendered="true">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading vk-text-uppercase">amanda smith</h5>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                            <ul class="list-inline comment-list">
                                                                <li>January 11, 2015</li>
                                                                <li>|</li>
                                                                <li>Reply</li>
                                                            </ul>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="5.3-single-blog.html#">
                                                                        <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="images/testimonial/testimonial-2.jpg" data-holder-rendered="true">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="media-heading vk-text-uppercase">john doe</h5>
                                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                                    <ul class="list-inline comment-list">
                                                                        <li>January 11, 2015</li>
                                                                        <li>|</li>
                                                                        <li>Reply</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vk-divider"></div>
                                                <button class="vk-btn vk-btn-default vk-btn-l vk-fullwidth vk-text-uppercase">
                                                    Load more 10 comments
                                                </button>
                                            </div>-->

                                            <!--<div class="vk-contact-form">
                                                <h4 class="vk-text-capitalize">post your comment</h4>
                                                <div class="user-info">
                                                    <div class="form-group">
                                                        <h5 class="vk-text-capitalize">name *</h5>
                                                        <input type="text" name="name" placeholder="Your name *" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class="vk-text-capitalize">email *</h5>
                                                        <input type="tel" name="tel" placeholder="Phone number" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class="vk-text-capitalize">tel *</h5>
                                                        <input type="email" name="email" placeholder="Email address *" class="form-control">
                                                    </div>
                                                </div>-->
                                                <!-- /.user-info -->

                                                <!--<div class="message-content">
                                                    <div class="form-group">
                                                        <h5 class="vk-text-capitalize">comment *</h5>
                                                        <textarea name="content" placeholder="Comment" class="form-control"></textarea>
                                                    </div>
                                                </div>-->
                                                <!-- /.message-content -->

                                                <!--<div class="vk-buttons">
                                                    <button class="vk-btn vk-btn-default vk-btn-l vk-fullwidth vk-text-uppercase">
                                                        submit
                                                    </button>
                                                </div>-->
                                            </div>
                                        </div>
                                    <?php endwhile; ?> 
                                    <?php endif; ?>
                                </div>
                                <div class="vk-space x-small hidden-md hidden-lg"></div>
                                <div class="col-md-3">
                                <div class="sidebar-menu">
                                    <!---- Input search ---->
                                    <!--<div class="vk-search-form  vk-fullwidth">
                                        <div class="form-group">
                                            <input type="text" name="key" placeholder="Enter keyword" class="form-control">
                                            <button class="vk-btn vk-btn-search"><i class="fa fa-search"></i></button>
                                        </div>

                                    </div>-->
                                    <!--<div class="vk-space x-small"></div>-->
                                    <!---- Catagory ---->
                                    <div class="catagory">
                                        <!--<h5 class="vk-text-uppercase">Категории</h5>-->
                                        <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
                                            <div id="true-side" class="sidebar">
                                                <?php dynamic_sidebar( 'news_category' ); ?>
                                            </div>
         
                                        <?php endif; ?>


                                        <!--<ul class="vk-list vk-menu-right">
                                            <li><a href="5.2-blog-grid.html">Новости<i class="fa fa-long-arrow-right vk-text-right" aria-hidden="true"></i></a></li>
                                            <li class="vk-divider"></li>
                                            <li><a href="5.2-blog-grid.html">Объявления <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li class="vk-divider"></li>
                                            <li><a href="5.2-blog-grid.html">Сми о нас<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li class="vk-divider"></li>
                                            <li><a href="5.2-blog-grid.html">Медиатека<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                        </ul>-->

                                    </div>
                                    <div class="vk-space x-small"></div>
                                    <!---- Recentpots ---->
                                    <div class="recentpots">
                                        <h5 class="vk-text-uppercase">Последние новости</h5>
                                        <div class="row">
                                              <?php
                                                  $query_args = array(      // Полная документация здесь (wp-kama.ru/function/wp_query)
                                                    'cat' => '1',           // Из какой категории выводим
                                                    'posts_per_page' => 3,  // Количество анонсов
                                                    'offset' => 2,          // Отступ постов (аккуратнее с пагинацией)    
                                                  )
                                                ?>
                                                  <?php $query = new WP_Query( $query_args ); ?>
                                                    <?php if ( $query->have_posts() ) : ?>
                                                      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                        <div class="recent-box col-sm-6 col-md-12">
                                                            <div class="vk-divider hidden-sm"></div>
                                                            <div class="vk-img-frame">
                                                                <a class="vk-img" href="<?php echo esc_url( get_permalink() ); ?>">
                                                                    <img src="<?php the_field('post_preview_images'); ?>" alt="">
                                                                </a>
                                                            </div>
                                                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="vk-title"><?php the_field('previeu_title'); ?></a>
                                                            <span><?php the_time('j F Y'); ?></span>
                                                        </div>
                                                      <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                  <?php else : ?>
                                                  <p><?php _e( 'Нет записей для отображения' ); ?></p>
                                                <?php endif; ?>

                                            <!--<div class="recent-box col-sm-6 col-md-12">
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="5.3-single-blog.html">
                                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/recentpost/recentpost-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a href="5.3-single-blog.html" class="vk-title">44 МНОГОЭТАЖНЫХ ДОМА СТРОИТ СПК «SHYMKENT»</a>
                                                <span>11 Января, 2020</span>
                                            </div>
                                            <div class="recent-box col-sm-6 col-md-12">
                                                <div class="vk-divider hidden-sm"></div>
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="5.3-single-blog.html">
                                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/recentpost/recentpost-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a href="5.3-single-blog.html" class="vk-title">МИЛЛИОН КВАДРАТНЫХ МЕТРОВ ПЕРВИЧНОГО ЖИЛЬЯ</a>
                                                <span>11 Января, 2020</span>
                                            </div>
                                            <div class="recent-box col-sm-6 col-md-12">
                                                <div class="vk-divider hidden-sm"></div>
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="5.3-single-blog.html">
                                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/recentpost/recentpost-3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <a href="5.3-single-blog.html" class="vk-title">АКИМ ПРОВЕЛ ВСТРЕЧУ С СОТРУДНИКАМИ АО «СПК «SHYMKENT»</a>
                                                <span>11 Января, 2020</span>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="vk-space x-small"></div>
                                    <!---- Archives ---->
                                    <div class="archives">
                                        <h5 class="vk-text-uppercase">Архив</h5>
                                        <ul class="vk-list vk-menu-right">
                                            <li><a href="5.2-blog-grid.html#">Январь 2020<i class="fa fa-long-arrow-right vk-text-right" aria-hidden="true"></i></a></li>
                                            <li><a href="5.2-blog-grid.html#">Февраль 2020<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="5.2-blog-grid.html#">Март 2020<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="5.2-blog-grid.html#">Апрель 2020<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="5.2-blog-grid.html#">Май 2020<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            <li><a href="5.2-blog-grid.html#">Июнь 2020<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="vk-space x-small"></div>
                                    <!---- Tag ---->
                                    <div class="tag ">
                                        <h5 class="vk-text-uppercase">Теги</h5>
                                        <ul class="list-inline">
                                            <li class="vk-tag"><a href="5.2-blog-grid.html#" class="vk-text-capitalize">Предпринимателю</a></li>
                                            <li class="vk-tag"><a href="5.2-blog-grid.html#" class="vk-text-capitalize">СПК</a></li>
                                            <li class="vk-tag"><a href="5.2-blog-grid.html#" class="vk-text-capitalize">Инвестору</a></li>
                                            <li class="vk-tag"><a href="5.2-blog-grid.html#" class="vk-text-capitalize">Digital agent</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!--------------------------------------------                 -------------------------------------------->
                            <div class="vk-space medium hidden-md hidden-lg"></div>
                        </div>
                    </div>
                    <!------ END BLOG WRAPPER ------>
                </div>
                <div class="vk-space x-medium"></div>
            </div>
    <!--./vk-page-->
</section>

    <?php get_footer(); ?>