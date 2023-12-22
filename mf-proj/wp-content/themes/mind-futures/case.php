<?php
/*
Template Name: Кейсы
*/
?>
<?php get_header(); ?>
<main>
        
<main>
    <div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
            <div class="services-banner__info">
                <h1><?php the_title(); ?></h1>
                <div class="services-breadcrumb">
                    <p><a href="https://m-f.kz/">Главная</a><i class="icon-cheveron-right"></i>  <?php the_title(); ?></p>
                </div>
            </div>
        </div>
    </div>
        <div class="services">
            <div class="container">
                <div class="main-title">
                    <h2>Мы всегда готовим проекты индивидуально под вашу организацию.
                        Это приводит наших клиентов и нас к лучшим показателям и делает счастливее.</h2>
                </div>
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 100,
                        'order'      => 'DESC',
                        'post_type'  => array( 'case-list' ),
                        'paged' => $paged
                    );
                ?>
                <div class="services-list-сertain">
                <?php
                    $MY_QUERY = new WP_Query( $args);
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain case-item-сertain"  style="background-image: url('<?php the_field('service_case_img'); ?>')">
                                <div class="item-сertain__info">
                                    <h4><?php the_field('service_case_text'); ?></h4>
                                    <a href="<?php the_field('service_case_link'); ?>">Узнать подробности <i class="icon-cheveron-right"></i></a>
                                    <div class="case-lock">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/lock.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
        <div class="subscribe">
            <div class="container">
                <div class="subscribe-form">
                    <form>
                        <label>
                            Получать свежие инсайты, статьи,<br /> видео и методические материалы
                        </label>
                        <input type="text" placeholder="Ваше имя*" />
                        <input type="email" placeholder="E-mail*" />
                        <input class="subscribe-button btn-one" type="submit" placeholder="Подписаться">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>