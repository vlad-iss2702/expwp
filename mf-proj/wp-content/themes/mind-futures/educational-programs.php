<?php
/*
Template Name: Обучающие программы
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
                    <h2>Обучающие программы</h2>
                </div>
                <div class="services-info">
                    <p>MIND FUTURES предлагает услуги по обучению персонала вашей компании.</p>
                    <p>Правильно подобранные и грамотные кадры – залог успешной реализации любой бизнес-идеи!</p>
                    <p>Подробное описание услуг можно найти в предложениях ниже:</p>                    
                </div>
                <ul class="list-grid-three">
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/educational-shesterenka-yeallow.png" alt="ффективное мышление и принятие управленческих решений" /> Эффективное мышление и принятие управленческих решений</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/time-management-yeallow.png" alt="Тайм-менеджмент и лайф-менеджмент" /> Тайм-менеджмент и лайф-менеджмент</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/strategy-yeallow---.png" alt="Стратегическое планирование бизнеса" /> Стратегическое планирование бизнеса</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/marketing-yeallow.png" alt="Основы маркетинга" /> Основы маркетинга</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/bussinesman-yeallow.png" alt="Основы бережливого производства и эффективного офиса на основе систем LEAN, KAIZEN, 5S, 6SIGMAS" /> Основы бережливого производства и эффективного офиса на основе систем LEAN, KAIZEN, 5S, 6SIGMAS</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/conservation-yeallow.png" alt="Организация эффективных переговоров" /> Организация эффективных переговоров</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/project-yeallow.png" alt="Проджект-менеджмент" /> Проджект-менеджмент</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/career-yeallow-n.png" alt="Система внутренней и внешней коммуникации компании" /> Система внутренней и внешней коммуникации компании</li>
                </ul>
                <div class="services-info">
                    <p>Стоимость каждой услуги зависит от количества человек в группе обучения, тематики и продолжительности уроков.</p>
                    <p>В рамках обучающих программ MIND FUTURES также предлагает коучинг и наставничество, мастер-классы и разбор практических кейсов, игровой, обучающий и творческий тимбилдинг.</p>
                </div>
            </div>
            <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="main-title">
                    <h2>Білім беру бағдарламалары</h2>
                </div>
                <div class="services-info">
                    <p>MIND FUTURES сіздің компания қызметкерлеріне оқыту қызметтерін ұсынады.</p>
                    <p>Дұрыс таңдалған және сауатты кадрлар - кез келген бизнес -идеяны сәтті жүзеге асырудың кепілі!</p>
                    <p>Қызметтердің толық сипаттамасын төмендегі ұсыныстардан табуға болады:</p>                    
                </div>
                <ul class="list-grid-three">
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/educational-shesterenka-yeallow.png" alt="ффективное мышление и принятие управленческих решений" /> Тиімді ойлау және басқару шешімдерін қабылдау</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/time-management-yeallow.png" alt="Тайм-менеджмент и лайф-менеджмент" /> Уақытты басқару және өмірді басқару</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/strategy-yeallow---.png" alt="Стратегическое планирование бизнеса" /> Стратегиялық бизнес -жоспарлау</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/marketing-yeallow.png" alt="Основы маркетинга" /> Маркетинг негіздері</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/bussinesman-yeallow.png" alt="Основы бережливого производства и эффективного офиса на основе систем LEAN, KAIZEN, 5S, 6SIGMAS" /> Основы бережливого производства и эффективного офиса на основе систем LEAN, KAIZEN, 5S, 6SIGMAS</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/conservation-yeallow.png" alt="Организация эффективных переговоров" /> Тиімді келіссөздерді ұйымдастыру</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/project-yeallow.png" alt="Проджект-менеджмент" /> Жоба менеджменті</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/piktograms/career-yeallow-n.png" alt="Система внутренней и внешней коммуникации компании" /> Кәсіпорынның ішкі және сыртқы байланыс жүйесі</li>
                </ul>
                <div class="services-info">
                    <p>Әр қызметтің бағасы оқу тобындағы адамдар санына, сабақтардың тақырыптары мен ұзақтығына байланысты.</p>
                    <p>Оқу бағдарламалары аясында MIND FUTURES сонымен қатар коучинг пен тәлімгерлікті, шеберлік сыныптарын және практикалық жағдайларды талдауды, ойындарды, жаттығуларды және шығармашылық топ құруды ұсынады.</p>
                </div>
            <?php endif; ?>
        </div>
        <?php get_template_part( 'contact-block' ); ?>
    
</main>

    <?php get_footer(); ?>