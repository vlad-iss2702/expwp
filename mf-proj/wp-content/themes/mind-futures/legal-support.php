<?php
/*
Template Name: Готовый бизнес
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
                <h2>Продажа готового бизнеса</h2>
            </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
            <div class="main-title">
                <h2>Дайын кәсіпті сату</h2>
            </div>
            <?php endif; ?>

            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="services-info">
                    <p>MIND FUTURES предлагает прямые инвестиции в действующие компании Европы – компании и организации со стабильным положением на рынке и постоянным доходом, готовые к продаже.</p>
                    <p>Подробное описание бизнеса, условия сделки и пакет финансовых документов можно найти в каждом предложении.</p>
                </div>
                <div class="bussines-list">
                    <div class="bussines-item">
                        <div class="bussines-item__img" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/bussines-123.jpg')">
                            <a href="#" data-remodal-target="form">Узнать подробности <i class="icon-cheveron-right"></i></a>
                        </div>
                        <div class="bussines-item__info">
                            <h4>Инженерные сети и коммуникации</h4>
                            <h5>Проектирование, монтаж, сервисное обслуживание инженерных систем</h5>
                            <table>
                                <tr>
                                    <td>Мин. cтоимость:</td>
                                    <td>150 млн. тенге </td>
                                </tr>
                                <tr>
                                    <td>Отрасль:</td>
                                    <td>Инжереные сети и коммуникации</td>
                                </tr>
                                <tr>
                                    <td>Штатный персонал:</td>
                                    <td>50-70 человек</td>
                                </tr>
                                <tr>
                                    <td>Местонахождение:</td>
                                    <td>Караганда, Нур-Султан, Алматы</td>
                                </tr>
                                <tr>
                                    <td>Опыт работы на рынке:</td>
                                    <td>С 2005 года</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="bussines-item">
                        <div class="bussines-item__img" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/mts-bussines-1.jpg')">
                            <a href="#" data-remodal-target="form">Узнать подробности <i class="icon-cheveron-right"></i></a>
                        </div>
                        <div class="bussines-item__info">
                            <h4>BREAKTHROURH</h4>
                            <h5>Компания по производству туннельно-проходческой техники диаметром до 4500 мм.</h5>
                            <table>
                                <tr>
                                    <td>Стоимость:</td>
                                    <td>12,6 млн. евро</td>
                                </tr>
                                <tr>
                                    <td>Отрасль:</td>
                                    <td>машиностроение</td>
                                </tr>
                                <tr>
                                    <td>Штатный персонал:</td>
                                    <td>35 человек</td>
                                </tr>
                                <tr>
                                    <td>Местонахождение:</td>
                                    <td>Германия</td>
                                </tr>
                                <tr>
                                    <td>Опыт работы на рынке:</td>
                                    <td>20 лет</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
            <div class="services-info">
                <p>MIND FUTURES Еуропаның күші бар компанияларына – нарықтағы қалыптасқан орны және тұрақты табысы бар, сатылымға дайын ұйымдар мен компанияларына тікелей инвестиция ұсынады.</p>
            </div>
            <div class="bussines-list">
                <div class="bussines-item">
                    <div class="bussines-item__img" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/bussines-123.jpg')">
                        <a href="#" data-remodal-target="form">Көбірек білу үшін <i class="icon-cheveron-right"></i></a>
                    </div>
                    <div class="bussines-item__info">
                        <h4>Инженерлік желілер мен коммуникация</h4>
                        <h5>Инженерлік жүйелерді жобалау, орнату, қызмет көрсету</h5>
                        <table>
                            <tr>
                                <td>Мин. бағасы:</td>
                                <td>150 млн</td>
                            </tr>
                            <tr>
                                <td>Өнеркәсіп:</td>
                                <td>Инженерлік желілер мен коммуникация</td>
                            </tr>
                            <tr>
                                <td>Персонал:</td>
                                <td>50-70 адам</td>
                            </tr>
                            <tr>
                                <td>Орналасуы:</td>
                                <td>Қарағанды, Нұр-Сұлтан, Алматы</td>
                            </tr>
                            <tr>
                                <td>Нарық тәжірибесі:</td>
                                <td>2005 жылдан бастап</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="bussines-item">
                    <div class="bussines-item__img" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/img/mts-bussines-1.jpg')">
                        <a href="#" data-remodal-target="form">Көбірек білу үшін <i class="icon-cheveron-right"></i></a>
                    </div>
                    <div class="bussines-item__info">
                        <h4>BREAKTHROURH</h4>
                        <h5>Диаметрі 4500 мм -ге дейінгі туннель жабдығын шығаратын компания.</h5>
                        <table>
                            <tr>
                                <td>Бағасы:</td>
                                <td>12,6 млн. евро</td>
                            </tr>
                            <tr>
                                <td>Өнеркәсіп:</td>
                                <td>Механикалық инженерия</td>
                            </tr>
                            <tr>
                                <td>Персонал:</td>
                                <td>35 адам</td>
                            </tr>
                            <tr>
                                <td>Орналасуы:</td>
                                <td>Германия</td>
                            </tr>
                            <tr>
                                <td>Нарық тәжірибесі:</td>
                                <td>20 жыл</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>

            
            
        <!--<div class="services-list-сertain">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array (
                        'posts_per_page' => 100,
                        'order'      => 'ASC',
                        'post_type'  => array( 'service' ),
                        'tax_query' => [
                            [
                                'taxonomy' => 'services',
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
                        <div data-aos="flip-left" data-aos-duration="1000" class="services-item-сertain" style="background-image: url('<?php the_field('services__img'); ?>')">
                            <div class="item-сertain__info">
                                <h4><?= the_title(); ?></h4>
                                <a href="<?= the_permalink(); ?>">Узнать подробности <i class="icon-cheveron-right"></i></a>
                            </div>
                        </div>
                        <?php endwhile;
                    endif; ?>
            </div>-->
            <!--<div class="list-pagination">
                <?php
                    $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                    the_posts_pagination(array(
                    'show_all'     => false,
                    'type'=>'inline',
                    'screen_reader_text' => __( '' ),
                    'end_size'     => 0,
                    'mid_size'     => 0,
                    'prev_next'    => True,
                    'prev_text'    => __('<i class="icon-cheveron-left"></i>'),
                    'next_text'    => __('<i class="icon-cheveron-right"></i>'),
                    'add_args'     => False
                ));
                ?>
            </div>-->
            <?php  wp_reset_postdata(); ?>
        </div>
        <div class="container">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="services-info">
                    <p>Рынок инвестиций предлагает приобретение готового бизнеса в следующих отраслях деятельности:</p>
                    <ul>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/gear-icon-yeallow.png" alt="Производство" /> производство</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/restaurant-yeallow.png" alt="Ресторанный бизнес" /> ресторанный <br />бизнес</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/hotel-yeallow.png" alt="Отельный бизнес" /> отельный <br />бизнес</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/basket-yeallow.png" alt="Торговые точки" /> торговые <br />точки</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/bio-yeallow.png" alt="Сельское хозяйство" /> сельское <br />хозяйство</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/crane-yeallow.png" alt="Cтроительство" /> строительство</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/logistic-yeallow.png" alt="Логистика" /> логистика</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/pharma-yeallow.png" alt="Аптеки и медицина" /> аптеки <br />и медицина</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/gym-weight-yeallow.png" alt="Спорт и здоровье" /> спорт <br />и здоровье</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/operator-yeallow.png" alt="Услуги широкого профиля" /> услуги широкого профиля</li>
                    </ul>
                    <p>Инвестиционные предложения охватывают следующие страны:</p>
                    <ul class="list-country">
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/germania.png" alt="Германия" /> Германия</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/france.png" alt="Франция" /> Франция</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/poland.png" alt="Польша" /> Польша</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/chehia.png" alt="Чехия" /> Чехия</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/italy.png" alt="Италия" /> Италия</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/spain.png" alt="Испания" /> Испания</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/uk.png" alt="Великобритания" /> Великобритания</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/usa.png" alt="США" /> США</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/russia.png" alt="Россия" /> Россия</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/kazakhstan.png" alt="Казахстан" /> Казахстан</li>
                    </ul>
                </div>
                <div class="services-info">
                    <p>Так же Mind Futures предлагает франшизы в различных отраслях.</p>
                </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="services-info">
                    <p>Инвестиция нарығы қызметтің келесідей саласында жұмыс істейтін дайын бизнесті сатып алуды ұсынады:</p>
                    <ul>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/gear-icon-yeallow.png" alt="өнеркәсіптік өндіріс" /> өнеркәсіптік <br />өндіріс</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/restaurant-yeallow.png" alt="мейрамхана бизнесі" /> мейрамхана <br />бизнесі</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/hotel-yeallow.png" alt="қонақ үй бизнесі" /> қонақ үй <br />бизнесі</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/basket-yeallow.png" alt="сауда нүктелері" /> сауда <br />нүктелері</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/bio-yeallow.png" alt="ауылшаруашылығы" /> ауылшаруашылығы</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/crane-yeallow.png" alt="құрылыс" /> құрылыс</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/logistic-yeallow.png" alt="логистика" /> логистика</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/pharma-yeallow.png" alt="дәріханалар мен медициналық қызметтер" /> дәріханалар мен <br />медициналық қызметтер</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/gym-weight-yeallow.png" alt="спорттық және сауықтыру орындары" /> спорттық және <br />сауықтыру орындары</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/operator-yeallow.png" alt="кең бейінді қызметтер" /> кең бейінді қызметтер</li>
                    </ul>
                    <p>Инвестициялық ұсыныстар төмендегі мемлекетті қамтиды:</p>
                    <ul class="list-country">
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/germania.png" alt="Германия" /> Германия</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/france.png" alt="Франция" /> Франция</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/poland.png" alt="Польша" /> Польша</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/chehia.png" alt="Чехия" /> Чехия</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/italy.png" alt="Италия" /> Италия</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/spain.png" alt="Испания" /> Испания</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/uk.png" alt="Ұлыбритания" /> Ұлыбритания</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/usa.png" alt="АҚШ" /> АҚШ</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/russia.png" alt="Ресей" /> Ресей</li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/kazakhstan.png" alt="Казахстан" /> Қазақстан</li>
                    </ul>
                </div>
                <div class="services-info">
                    <p>Бизнестің толық сипаттамасын, келісім шарттары мен қаржылық құжаттарды келесі ұсынымдардан табуға болады.</p>
                </div>
            <?php endif; ?>
        </div>
        <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>