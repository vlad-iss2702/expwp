<?php
/*
Template Name: Оценка персонала
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
    </div>
    <div class="services">
        <div class="container">
            <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
            <div class="main-title">
                <h2>Услуги по оценке персонала.</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES предлагает услуги по обучению персонала вашей компании.</p>
                <p>Правильно подобранные и грамотные кадры – залог успешной реализации любой бизнес-идеи!</p>
                <p>Подробное описание услуг можно найти в предложениях ниже:</p>                    
            </div>    
            <ul class="list-grid-three">
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/serteficat-yeallow.png" alt="Проведение аттестации рабочих" /> Проведение аттестации рабочих навыков сотрудников по должностям</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/ruka-yeallow.png" alt="Оценка рабочей мотивации" /> Оценка рабочей мотивации и уровня корпоративной культуры персонала</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/karandaw-check-yeallow.png" alt="Разработка анонимных и индивидуальных анкет" /> Разработка анонимных и индивидуальных анкет по вопросам развития компании и кадров</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/morkovka-yeallow.png" alt="Оценка и разработка системы стимулирования работы сотрудников" /> Оценка и разработка системы стимулирования работы сотрудников (KPI, КТУ, бонусная система продаж)</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/vzaimodeistvie-yellow.png" alt="Оценка эффективности каналов коммуникации" /> Оценка эффективности каналов коммуникации и организационной структуры</li>
            </ul>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="main-title">
                <h2>Персоналды бағалау қызметі.</h2>
            </div>
            <div class="services-info">
                <p>MIND FUTURES сіздің компания қызметкерлеріне оқыту қызметтерін ұсынады.</p>
                <p>Дұрыс таңдалған және сауатты кадрлар - кез келген бизнес -идеяны сәтті жүзеге асырудың кепілі!</p>
                <p>Қызметтердің толық сипаттамасын төмендегі ұсыныстардан табуға болады:</p>                    
            </div>    
            <ul class="list-grid-three">
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/serteficat-yeallow.png" alt="Проведение аттестации рабочих" /> Қызметкерлердің лауазымдары бойынша жұмыс дағдыларының аттестациясын жүргізу</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/ruka-yeallow.png" alt="Оценка рабочей мотивации" /> Жұмыс мотивациясы мен персоналдың корпоративтік мәдениет деңгейін бағалау</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/karandaw-check-yeallow.png" alt="Разработка анонимных и индивидуальных анкет" /> Компания мен персоналдың дамуы бойынша анонимді және жеке сауалнамалар әзірлеу</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/morkovka-yeallow.png" alt="Оценка и разработка системы стимулирования работы сотрудников" /> Қызметкерлерді ынталандыру жүйесін бағалау және дамыту (KPI, KTU, бонустық сату жүйесі)</li>
                <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/vzaimodeistvie-yellow.png" alt="Оценка эффективности каналов коммуникации" /> Байланыс арналары мен ұйымдық құрылымның тиімділігін бағалау</li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
    <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>