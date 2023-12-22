<?php
/*
Template Name: Все услуги
*/
?>
<?php get_header(); ?>
<main>
        
<main>
        <div class="services-banner" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/banner-case.jpg')">
            <div class="container">
                <div class="services-banner__info">
                    <h1><?php the_title(); ?></h1>
                    <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                        <div class="services-breadcrumb">
                            <p><a href="https://m-f.kz/">Главная</a><i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                        </div>
                    <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                        <div class="services-breadcrumb">
                            <p><a href="https://m-f.kz/kz">Басты бет</a><i class="icon-cheveron-right"></i>  <?php the_title(); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php get_template_part( 'crumb-link' ); ?>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="main-services">
                <h2>Наши услуги</h2>
                <h3>Мы используем все современные инструменты и технологии.</h3>
                <div class="services-list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 100,
                            'order'      => 'ASC',
                            'post_type'  => array( 'services-list' ),
                            'paged' => $paged
                        );
                    ?>
                    <?php
                    $MY_QUERY = new WP_Query( $args);
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <a href="<?php the_field('service_case_link'); ?>" class="services-item" style="background-image: url('<?php the_field('service_case_img'); ?>')">
                                <h3><?php the_field('service_case_text'); ?></h3>
                            </a>        
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
        
        <?php get_template_part( 'contact-news' ); ?>

    </main>

    <?php get_footer(); ?>