<?php
/*
Template Name: Blog main
*/
?>
<?php get_header(); ?>
<section class="vk-content">
<div class="vk-banner vk-background-image-3">
    <div class="vk-background-overlay vk-background-black-1 _80"></div>
    <div class="container wrapper">
        <div class="page-heading">
            ПРЕСС ЦЕНТР
        </div>
    </div>
</div>
<!--./vk-banner-->

<div class="vk-breadcrumb">
    <nav class="container">
        <ul>
                        <li><a href="index.html">Главная</a></li>
            
            <li><a href="#">Пресс Центр</a></li>
            
            <li class="active">Новости</li>
        </ul>
    </nav>
</div>
<!--./vk-breadcrumb-->    
<div class="" data-example-id="media-alignment">
        <div class="vk-blog-wrapper vk-blog-grid">
            <!------ BEGIN BLOG WRPPER ------>
            <div class="container">
                <div class="row">
                    <div class="blog-list clearfix">
                        <!-- BLOG CONTENT -->
                        <div class="col-md-9">
                            <div class=" blog-content">
                                <div class="row">
                                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="content-box">
                                            <div class="vk-img-frame">
                                                <a class="vk-img" href="<?php the_permalink(); ?>">
                                                    <img src="<?php the_field('post_preview_images'); ?>" alt="">
                                                </a>
                                            </div>

                                            <div class="content">
                                                <a href="<?php the_permalink(); ?>">
                                                    <h4 class="vk-text-uppercase"><?php the_field('previeu_title'); ?></h4>
                                                </a>
                                                <div class="vk-divider"></div>
                                                <p> <?php the_field('previue_post'); ?></p>
                                                <div class="vk-buttons">
                                                    <a href="<?php the_permalink(); ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее
                                                        <i class="fa fa-long-arrow-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?> 
                                    <?php endif; ?> 
                                </div>
                                <nav class="box-pagination text-center">
                                    <?php the_posts_pagination(
                                        $args = array(
                                            'show_all'     => false, // показаны все страницы участвующие в пагинации
                                            'end_size'     => 1,     // количество страниц на концах
                                            'mid_size'     => 1,     // количество страниц вокруг текущей
                                            'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                            'prev_text'    => __('назад'),
                                            'next_text'    => __('следующая'),
                                            'add_args'     => true, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                                            'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                                            'screen_reader_text' => __( 'Posts navigation' ),
                                        )

                                    ); ?>
                                </nav>
                                <!--<nav class="box-pagination text-center">
                                    <ul class="vk-pagination">
                                        <li class="first arrow"><a href="#">начало</a></li>
                                        <li class="back arrow"><a href="#">назад</a></li>
                                        <li class="active">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li class="next arrow"><a href="#">следующая</a></li>
                                        <li class="last arrow"><a href="#">конец</a></li>
                                    </ul>
                                </nav>-->

                                <!--<div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="content-box">

                                            <div class="vk-img-frame">
                                                <a class="vk-img" href="single-blog.html">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/blog-grid/blog-grid-1.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="content">
                                                <a href="single-blog.html">
                                                    <h4 class="vk-text-uppercase">44 МНОГОЭТАЖНЫХ ДОМА СТРОИТ СПК «SHYMKENT»</h4>
                                                </a>
                                                <div class="vk-divider"></div>
                                                <p>Социально-предпринимателькая корпорация приступила к участию в реализации жилищной программы «7-20-25» в Шымкенте. Как сообщают в пресс-службе акима города, в этом году планируется возвести 146 тысяч квадратных метров жилья, из них в рамках программы «7-20-25» 24 дома, или 1016 квартир....</p>
                                                <div class="vk-buttons">
                                                    <a href="single-blog.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее
                                                        <i class="fa fa-long-arrow-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div class="content-box">
                                            <div class="vk-img-frame">
                                                <a class="vk-img" href="single-blog.html">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/blog-grid/blog-grid-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="single-blog.html">
                                                    <h4 class="vk-text-uppercase">МИЛЛИОН КВАДРАТНЫХ МЕТРОВ ПЕРВИЧНОГО ЖИЛЬЯ</h4>
                                                </a>
                                                <div class="vk-divider"></div>
                                                <p>Сегодня, аким Шымкента, Мурат Айтенов, ознакомился с ходом строительства жилых домов в городе. В первую очередь, глава города осмотрел 10 жилых домов в микрорайоне «Асар-2», строящихся в рамках программы «7-20-25», финансируемой АО СПК «Shymkent», и 2 многоэтажных жилых дома в микрорайоне Туран...</p>
                                                <div class="vk-buttons">
                                                    <a href="" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее
                                                        <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 ">
                                        <div class="content-box">
                                            <div class="vk-img-frame">
                                                <a class="vk-img" href="single-blog.html">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/blog-grid/blog-grid-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="single-blog.html">
                                                    <h4 class="vk-text-uppercase">Аким провел встречу с сотрудниками АО «СПК «Shymkent».</h4>
                                                </a>
                                                <div class="vk-divider"></div>
                                                <p>Аким посмотрел работу фронт-офиса, который работает по принципу «Одного окна». В рамках деятельности фронт-офиса предусмотрено упрощение процедур по выдаче 1%- кредитования предпринимателям. М.Айтенов, ознакомившись с работой АО «СПК «Shymkent», поручил провести реструктуризацию штата корпорации, а также модернизировать работу Департамента инвестиций....</p>
                                                <div class="vk-buttons">
                                                    <a href="single-blog.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее
                                                        <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 ">
                                        <div class="content-box">
                                            <div class="vk-img-frame">
                                                <a class="vk-img" href="single-blog.html">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/blog-grid/blog-grid-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="single-blog.html">
                                                    <h4 class="vk-text-uppercase">Сообщаем Вам, что Вы можете скачать ​Digital Agent</h4>
                                                </a>
                                                <div class="vk-divider"></div>
                                                <p>Сообщаем Вам, что Вы можете скачать ​Digital Agent, с помощью которого жители ​города Шымкент смогут оценить качество оказания госуслуг посредством мобильного телефона.  информация Скачивая приложение, Вы должны пройти регистрацию. В приложении вы можете просмотреть статистику, либо оценить любое государственное учреждение нашей страны...</p>
                                                <div class="vk-buttons">
                                                    <a href="" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее
                                                        <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 ">
                                        <div class="content-box">
                                            <div class="vk-img-frame">
                                                <a class="vk-img" href="single-blog.html">
                                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/blog-grid/blog-grid-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="single-blog.html">
                                                    <h4 class="vk-text-uppercase">Зам акима Бауыржан Мамыталиев провел рабочее совещание</h4>
                                                </a>
                                                <div class="vk-divider"></div>
                                                <p>Заместитель акима города Шымкент Бауыржан Мамыталиев провел рабочее совещание с руководством АО "СПК " Shymkent", а также с руководителями строительных компаний. В работе совещания приняли участие руководитель управления строительства Е.Ахметов, и.о.руководителя предпринимательства и индустриально-инновационного развития...</p>
                                                <div class="vk-buttons">
                                                    <a href="single-blog.html" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">Подробнее
                                                        <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                                <!-- PAGE NUMBER -->
                            </div>
                        </div>

                        <!-- BLOG SIDEBAR -->
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
                </div>
                <!------ END BLOG WRAPPER ------>
            </div>
        </div>
    </div>
    <!--./vk-page-->
</section>

    <?php get_footer(); ?>