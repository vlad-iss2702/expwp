<?php
/*
Template Name: Инвестиционное сопровождение
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
    <div class="services">
        <div class="container">
        <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
            <div class="main-title">
                <h2>Услуги инвестиционного сопровождения.</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES предлагает услуги по сопровождению инвестиционных проектов, направленных на развитие вашего бизнеса (действующего или стартового):</p>
            </div>
            <div class="info-list-text">
                <ul>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="изучение окружающей среды планируемого к реализации проекта" /> изучение окружающей среды планируемого к реализации проекта</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="проверка и корректировка готовых бизнес-планов и ТЭО" /> проверка и корректировка готовых бизнес-планов и ТЭО</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="составление и оформление всех сопровождающих проект документов" /> составление и оформление всех сопровождающих проект документов</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="выполнение финансово-экономических расчетов и показателей экономической эффективности инвестиционного проекта" /> выполнение финансово-экономических расчетов и показателей экономической эффективности инвестиционного проекта</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="разработка Технико-экономических обоснований и Бизнес-планов" /> разработка Технико-экономических обоснований и Бизнес-планов</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="защита Бизнес-планов перед инвесторами" /> защита Бизнес-планов перед инвесторами</li>
                </ul>
            </div>
        <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
            <div class="main-title">
                <h2>Инвестицияларды қолдау қызметтері.</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES Сіздің бизнесіңіздің (күші бар немесе бастапқы) дамуына бағытталған инвестициялық жобаларды сүйемелдеу бойыша қызметтерді ұсынады:</p>
            </div>
            <div class="info-list-text">
                <ul>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="жүзеге асырылуға дайын жобаның сыртқы ортасын зерттеу;" /> жүзеге асырылуға дайын жобаның сыртқы ортасын зерттеу;</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="дайын бизнес-жоспар мен ТЭН тексеру және түзету;" /> дайын бизнес-жоспар мен ТЭН тексеру және түзету;</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="жобаны сүйемелдеуге арналған барлық құжаттарды жасау және рәсімдеу;" /> жобаны сүйемелдеуге арналған барлық құжаттарды жасау және рәсімдеу;</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="инвестициялық жобаның экономикалық тиімділігінің көрсеткіштерін және қаржылық-экономикалық есептерін орындау;" /> инвестициялық жобаның экономикалық тиімділігінің көрсеткіштерін және қаржылық-экономикалық есептерін орындау;</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="техникалық-экономикалық негіздеме мен бизнес-жоспарларыд дайындау;" /> техникалық-экономикалық негіздеме мен бизнес-жоспарларыд дайындау;</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/check.png" alt="инвесторлар алдында бизнес-жоспарды қорғау." /> инвесторлар алдында бизнес-жоспарды қорғау.</li>
                </ul>
            </div>
        <?php endif; ?>
        </div>
        <div class="container">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
            <div class="services-info">
                <p>ПАКЕТЫ УСЛУГ:</p>
            </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
            <div class="services-info">
                <p>ҚЫЗМЕТТЕР ТОПТАМАСЫ:</p>
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
                            'terms'    => [ 4 ],
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
            <?php  wp_reset_postdata(); ?>
        </div>
    </div>
    <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>