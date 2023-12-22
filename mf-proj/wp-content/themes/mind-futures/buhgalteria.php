<?php
/*
Template Name: Бухгалтерия
*/
?>
<?php get_header(); ?>
<main>
    <div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
        <div class="services-banner__info">
                <h1><?php the_title(); ?></h1>
                <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                    <div class="services-breadcrumb">
                        <p><a href="https://m-f.kz/">Главная</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/services/"> Услуги</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                    </div>
                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                    <div class="services-breadcrumb">
                        <p><a href="https://m-f.kz/kz/">Басты бет</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/kz/services/"> Қызметтер</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                    </div>
                <?php endif; ?>
                <?php get_template_part( 'crumb-link' ); ?>
            </div>
        </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
        <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
            <div class="main-title">
                <h2>Услуги бухгалтера</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES предлагает услуги по бухгалтерскому учету и отчетности деятельности вашей компании.</p>
                <p>Подробное описание услуг можно найти в предложениях ниже.</p>
            </div>
        <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
            <div class="main-title">
                <h2>Бухгалтерлік қызмет</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES компанияңыздың есептілігі мен бухгалтерлік есебі бойынша көрсетілетін қызметтерді ұсынады.</p>
                <p>Қызмет туралы толық ақпаратты төмендегі ұсынымдардан ала аласыз.</p>
            </div>
        <?php endif; ?>
            
            <div class="services-list-сertain">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array (
                    'posts_per_page' => 3,
                    'order'      => 'ASC',
                    'post_type'  => array( 'service' ),
                    'tax_query' => [
                        [
                            'taxonomy' => 'services',
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
                        <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain" style="background-image: url('<?php the_field('services__img'); ?>')">
                            <div class="item-сertain__info">
                                <h4><?= the_title(); ?></h4>
                                <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                                    <a href="<?= the_permalink(); ?>">Узнать подробности <i class="icon-cheveron-right"></i></a>
                                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                                    <a href="<?= the_permalink(); ?>">Көбірек білу үшін <i class="icon-cheveron-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile;
                    endif; ?>
            </div>
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="services-info">
                    <p>При необходимости бизнес-план и приложения могут быть переведены на казахский или английский язык.</p>
                </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="services-info">
                    <p>Қажет болған жағдайда бизнес -жоспар мен өтінімдерді қазақ немесе ағылшын тіліне аударуға болады.</p>
                </div>
            <?php endif; ?>        
            <!--<div class="services-contact">
                <p>Написать на нашу почту: <a href="mailto:info@m-f.kz">info@m-f.kz</a></p>
                <p>Общий прайс услуг приобретения готового бизнеса: <a href="#">Скачать прайс <i class="icon-document-file-pdf"></i></a></p>
            </div>-->
            <?php  wp_reset_postdata(); ?>
        </div>
    </div>
    <?php get_template_part( 'contact-block' ); ?>
</main>
<?php get_footer(); ?>