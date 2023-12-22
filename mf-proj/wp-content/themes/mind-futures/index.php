<?php get_header(); ?>
<main>
        <div class="main-banner" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/main-banner.jpg')">
            <div class="container">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="main-banner__info">
                    <h1>Mind futures<br /> консультации для бизнеса.</h1>
                    <h2>С нами ваш бизнес достигнет новых высот.</h2>
                    <a data-remodal-target="form">Получить консультацию</a>
                </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="main-banner__info">
                    <h1>Mind futures<br /> бизнесіңіз үшін кеңестер.</h1>
                    <h2>Бізбен бірге бизнесіңіз жаңа шыңдарды бағындырады.</h2>
                    <a data-remodal-target="form">Кеңес алу</a>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <div class="container">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="services-info text-center">
                <h2>О КОМПАНИИ MIND FUTURES</h2>
                    <p>MIND FUTURES – молодая амбициозная компания, собравшая вместе профессионалов в различных сферах консалтинга и аналитики для оказания полного спектра услуг действующему и стартовому бизнесу.</p>
                    <p>Наша цель – максимальная польза для наших партнеров от совместных реализаций планов, идей и проектов.</p>
                    <p>Мы ценим открытые деловые отношения, командную работу и высокое мастерство в выбранном деле – и разделяем наши ценности с клиентами и нашими партнерами.</p>
                </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="services-info text-center">
                <h2>MIND FUTURES КОМПАНИЯ ЖАЙЛЫ</h2>
                    <p>MIND FUTURES – жас және өршіл компания консалтинг пен аналитиканың әр түрлі салаларындағы кәсіпқойларды жинап, қолданыстағы және жаңадан бастаушы бизнеске қызметтердің толық спектрін ұсынады.</p>
                    <p>Біздің мақсат - серіктестерімізге жоспарларды, идеялар мен жобаларды бірлесіп жүзеге асырудан барынша пайда алу.</p>
                    <p>Біз ашық іскерлік қарым -қатынасты, командалық жұмысты және таңдаған ісіміздегі жетістікті бағалаймыз - және біз өз құндылықтарымызды клиенттер мен серіктестермен бөлісеміз.</p>
                </div>
            <?php endif; ?>
            <div class="services-info text-center">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>  
                <h2>Наша команда</h2>
                    <div class="main__our-team">
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Елена Лионенко</strong><br />
                                    Основательница Mind Futures
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-1.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Виктория Мотрич</strong><br />
                                    Project-Менеджер
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-2.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Денис Педенко</strong><br />
                                    Директор по маркетингу
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-3.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Ирина Зорина</strong><br />
                                    Бухгалтер
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-5.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Копырин Марк</strong><br />
                                    Менеджер по продажам
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-4.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Махсут Жаримбетов</strong><br />
                                    Режиссер
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-6.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Анастасия</strong><br />
                                    HR
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-10.png" alt="">
                            </div>
                        </div>                    
                    </div>
                </div>
                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                    <h2>Біздің команда</h2>
                    <div class="main__our-team">
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Елена Лионенко</strong><br />
                                    Құрылтайшы Mind Futures
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-1.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Виктория Мотрич</strong><br />
                                    Project-Менеджер
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-2.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Денис Педенко</strong><br />
                                    Маркетинг директоры
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-3.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Ирина Зорина</strong><br />
                                    Бухгалтер
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-5.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Копырин Марк</strong><br />
                                    Сату менеджері
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-4.png" alt="">
                            </div>
                        </div>
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Махсут Жаримбетов</strong><br />
                                    Режиссер
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-6.png" alt="">
                            </div>
                        </div>                        
                        <div class="main__our-item">
                            <div class="main__our-item__text">
                                <p>
                                    <strong>Анастасия</strong><br />
                                    HR
                                </p>
                            </div>
                            <div class="main__our-item__img">
                                <img src="https://m-f.kz/wp-content/themes/mind-futures/assets/img/team/team-10.png" alt="">
                            </div>
                        </div>                    
                    </div>
                </div>
                <?php endif; ?>
            <div class="services-info text-center">
                <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                    <h2>Услуги компании Mind Futures.</h2>
                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                    <h2>Mind Futures компаниясының қызметтері.</h2>
                <?php endif; ?>
            </div>
            <div class="main-services">
                <div class="services-list">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                            'posts_per_page' => 100,
                            'order'      => 'DESC',
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
                                <!--<a class="btn-one fnt-size-14" href="<?php the_field('service_case_link'); ?>">Подробнее</a>-->
                            </a>        
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
        <!--<div class="main-reviews" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/reviews.jpg')">
            <div class="container">
                <div class="reviews-slider">
                    <h3>Отзывы наших клиентов</h3>
                    <div class="owl-carousel owl-theme reviews-carousel">
                        <div class="reviews-carousel-item">
                            <p>Lorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem</p>
                            <h4>Harold Crouse 111</h4>
                            <span>Sales manager 111</span>
                        </div>
                        <div class="reviews-carousel-item">
                            <p>222“The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.”</p>
                            <h4>Harold Crouse222</h4>
                            <span>Sales manager22</span>
                        </div>
                        <div class="reviews-carousel-item">
                            <p>333Lorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem</p>
                            <h4>Harold Crouse333</h4>
                            <span>Sales manager333</span>
                        </div>
                        <div class="reviews-carousel-item">
                            <p>444“The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.”</p>
                            <h4>Harold Crouse444</h4>
                            <span>Sales manager44</span>
                        </div>
                        <div class="reviews-carousel-item">
                            <p>555Lorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem</p>
                            <h4>Harold Crouse555</h4>
                            <span>Sales manager55</span>
                        </div>
                        <div class="reviews-carousel-item">
                            <p>666“The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.”</p>
                            <h4>Harold Crouse666</h4>
                            <span>Sales manager66</span>
                        </div>
                        <div class="reviews-carousel-item">
                            <p>777Lorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsim Lorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem ipsimLorem</p>
                            <h4>Harold Crouse77</h4>
                            <span>Sales manager777</span>
                        </div>
                        <div class="reviews-carousel-item">
                            <p>8888“The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.” “The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.”</p>
                            <h4>Harold Crouse999</h4>
                            <span>Sales manager99</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="subscribe-link__crumb">
        <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
            <a data-remodal-target="form">Получить консультацию</a>
        <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
            <a data-remodal-target="form">Кеңес алу</a>
        <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>