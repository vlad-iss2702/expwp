<?php
/*
Template Name: О нас
*/
?>
<?php get_header(); ?>
<main>
        
<main>
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
    <div class="container">
            <div class="services-info text-center">
                <h2>О КОМПАНИИ MIND FUTURES</h2>
                <p>MIND FUTURES – молодая амбициозная компания, собравшая вместе профессионалов в различных сферах консалтинга и аналитики для оказания полного спектра услуг действующему и стартовому бизнесу.</p>
                <p>Наша цель – максимальная польза для наших партнеров от совместных реализаций планов, идей и проектов.</p>
                <p>Мы ценим открытые деловые отношения, командную работу и высокое мастерство в выбранном деле – и разделяем наши ценности с клиентами и нашими партнерами.</p>
            </div>
            <div class="services-info text-center">
                <h3>ИСТОРИЯ КОМПАНИИ</h3>
                <p>ТОО «MIND FUTURES» основано в 2020 году, но коллектив сформирован из людей с многолетним успешным опытом работы по различным направлениям и сферам деятельности.</p>
                <p>На счету наших специалистов сотни реализованных проектов с миллиардными бюджетами.</p>
            </div>
            </div>
            <div class="container">
                <div class="about-team">
                    <div class="team-slider">
                        <div class="services-info text-center">
                            <h3>НАША КОМАНДА</h3>
                            <p>В штате ТОО «MIND FUTURES» и на аутсорсе свыше ста высококвалифицированных специалистов, оказывающих помощь нашим клиентам в различных деловых вопросах и растущих вместе с ними.</p>
                        </div>
                        <div class="owl-carousel owl-theme team-carousel">
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-1.png" alt="" />
                                <div class="team-item-info">
                                    <div class="team-item-name"><a href="#" data-remodal-target="team-1">Елена Лионенко</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-1">Основательница Mind Futures</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-2.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-2">Виктория Мотрич</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-2">Project-Менеджер</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-3.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-3">Денис Педенко</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-3">Директор по маркетингу</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-5.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-4">Ирина Зорина</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-4">Бухгалтер</a>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-2.jpg" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="">Кайрат</a></div>
                                    <div class="team-item-doljn">
                                        <a href="">Должность</a>
                                    </div>
                                </div>
                            </div>-->
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-4.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-5">Копырин Марк</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-5">Менеджер по продажам</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-6.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-6">Максут</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-6">Режиссер</a>
                                    </div>
                                </div>
                            </div>                            
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-10.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-8">Анастасия</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-8">HR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-8.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-9">Руслан Курманов</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-9">Системный Администратор</a>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-9.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="">Нелли Тажибаева</a></div>
                                    <div class="team-item-doljn">
                                        <a href="">Маркетолог</a>
                                    </div>
                                </div>
                            </div>-->
                            <!--<div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-12.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-10">Боброва Владислава</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-10">Руководитель digital направления</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-13.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-11">Шмакова Лиана</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-11">Журналист, копирайтер</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-carousel-item">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-14.png" alt="" />
                                <div class="team-item-info">
                                <div class="team-item-name"><a href="#" data-remodal-target="team-12">Высокая Анастасия</a></div>
                                    <div class="team-item-doljn">
                                    <a href="#" data-remodal-target="team-12">Дизайнер, SMM-специалист</a>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>  
            </div>
            <!--Модальные окна--->
            <div class="remodal" data-remodal-id="team-1">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-1.png" alt="" />
                        <ul>
                            <li><a href="https://m-f.kz/legal-support/">Готовый бизнес</a></li>
                        </ul>
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Елена Лионенко</h3>
                        <p>Основательница Mind Futures</p>
                        <div class="modal__bio_text-scroll">
                            <p>20 лет в бизнесе - 3 высших образования.</p>
                            <p>Проходит обучение в МВА по маркетингу.</p>
                            <p>Успешно развивает несколько направлений бизнеса в условиях кризиса.</p>
                            <p>Знания логистики, строительства, экспорта, участия в тендерах.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-2">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-2.png" alt="" />
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Виктория Мотрич</h3>
                        <p>Project-Менеджер</p>
                        <div class="modal__bio_text-scroll">
                            <p>В прошлом переводчик, сейчас ключевой специалист MF.</p>
                            <p>Ее приятный голос слышат наши клиенты, именно она общается с клиентами во время работы с MF.</p>
                            <p>Прошла обучение: «Практика управления проектами на основе стандарта PMI PMBOK Guide 6th edition» .</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-3">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-3.png" alt="" />
                        <ul>
                            <li><a href="https://m-f.kz/investment-support/">Инвестиционное сопровождение</a></li>
                            <li><a href="https://m-f.kz/business-planning/">Бизнес планирование</a></li>
                            <li><a href="https://m-f.kz/digital-marketing/">Маркетинг</a></li>
                            <li><a href="https://m-f.kz/personal/">Оценка персонала</a></li>
                            <li><a href="https://m-f.kz/educational-programs/">Обучение</a></li>
                        </ul>
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Денис Педенко</h3>
                        <p>Директор по маркетингу</p>
                        <div class="modal__bio_text-scroll">
                            <p>Окончил МВА - специалист по бизнес администрированию.</p>
                            <p>Более 6 лет помогает предпринимателям масштабировать бизнес.</p>
                            <p>Внедряет системы эффективного управления и маркетинга в бизнес процессы.</p>
                            <p>Каравай.KZ, Санжар Моторс, АРТ БЕТОН, Әділет Құрылыс</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-4">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-5.png" alt="" />
                        <ul>
                            <li><a href="https://m-f.kz/buhgalteria/">Бухгалтерия</a></li>
                        </ul>
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Ирина Зорина</h3>
                        <p>Бухгалтер</p>
                        <div class="modal__bio_text-scroll">
                            <p>Финансы это кровь компании, а бухгалтер - сердце. Все финансовые потоки, как кровь по жилам проходят через бухгалтера.</p>
                            <p>Есть устоявшееся выражение: «точно, как в аптеке», про Ирину говорят. «точно, как у Ирины Михайловны»</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-5">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-4.png" alt="" />
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Копырин Марк</h3>
                        <p>Менеджер по продажам</p>
                        <div class="modal__bio_text-scroll">
                            <p>Зарекомендовал себя, как ответственного и целеустремленого сотрудника.</p>
                            <p>Помогает клиентам найти оптимальное решение их проблемы.</p>
                            <p>Учится в ЮКГУ на фаультете менеджемента.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-6">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-6.png" alt="" />
                        <ul>
                            <li><a href="https://m-f.kz/video-production/">Видеопродакшн</a></li>
                        </ul>
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Максут</h3>
                        <p>Режиссер</p>
                        <div class="modal__bio_text-scroll">
                            <!--<p>Mark Sinatra is the CEO of Aspen HR where he leads the strategic direction and growth of the company. Prior to Aspen HR, Mark was CEO of Staff One HR where he led the company through a period of substantial growth highlighted by achieving the Inc. 5000 list of fastest-growing companies for four years in a row, and 
                            сulminating in Staff One HR’s sale to its largest privately-held competitor, Oasis Outsourcing, in December 2017.  Mark oversaw the Western half of the country for Oasis Outsourcing until its sale to Paychex for $1.3bn in December 2018.  Prior to his leadership experience in the HR industry, Mark worked as a consultant and investment banker.</p>
                            <p>Actively involved in his community and industry, Mark has served as a Board director for NAPEO and ESAC and two non-profit organizations. He is also an active member of Young Presidents’ 
                            Association.</p>
                            <p>Mark is an MBA graduate of the Wharton School of Business, and holds a BA in Economics from Fordham University.  He has earned the SHRM-CP designation, is a Certified Predictive Index analyst, and is a graduate of the Stagen Integral 
                            Leadership Academy.
                            </p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-8">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-10.png" alt="" />
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Анастасия</h3>
                        <p>HR</p>
                        <div class="modal__bio_text-scroll">
                            <!--<p>Mark Sinatra is the CEO of Aspen HR where he leads the strategic direction and growth of the company. Prior to Aspen HR, Mark was CEO of Staff One HR where he led the company through a period of substantial growth highlighted by achieving the Inc. 5000 list of fastest-growing companies for four years in a row, and 
                            сulminating in Staff One HR’s sale to its largest privately-held competitor, Oasis Outsourcing, in December 2017.  Mark oversaw the Western half of the country for Oasis Outsourcing until its sale to Paychex for $1.3bn in December 2018.  Prior to his leadership experience in the HR industry, Mark worked as a consultant and investment banker.</p>
                            <p>Actively involved in his community and industry, Mark has served as a Board director for NAPEO and ESAC and two non-profit organizations. He is also an active member of Young Presidents’ 
                            Association.</p>
                            <p>Mark is an MBA graduate of the Wharton School of Business, and holds a BA in Economics from Fordham University.  He has earned the SHRM-CP designation, is a Certified Predictive Index analyst, and is a graduate of the Stagen Integral 
                            Leadership Academy.
                            </p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-9">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-8.png" alt="" />
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Руслан Курманов</h3>
                        <p>Системный Администратор</p>
                        <div class="modal__bio_text-scroll">
                            <p>Находчивый, интеллектуальный и оперативный.</p>
                            <p>Сходу принимает решения, от которых зависит полное и бесперебойное функционирование всех IT коммуникаций компании.</p>
                            <p>Интересуется последними тенденциями компьютерного мира.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-10">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-12.png" alt="" />
                        <ul>
                            <li><a href="https://m-f.kz/smm-marketing/">SMM</a></li>
                        </ul>
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Боброва Владислава</h3>
                        <p>Руководитель digital направления</p>
                        <div class="modal__bio_text-scroll">
                            <p>Уже 11 лет изучает маркетинг.</p>
                            <p>7 лет опыта работы в онлайн и офлайн маркетинге в разных компаниях.</p>
                            <p>Хорошие организаторские навыки. Организовала квест на 500 человек.</p>
                            <p>Вложила в обучение по маркетингу 10000$</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-11">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-13.png" alt="" />
                        <ul>
                            
                        </ul>
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Шмакова Лиана</h3>
                        <p>Журналист, копирайтер</p>
                        <div class="modal__bio_text-scroll">
                            <p>Умеет найти «нужных людей» и «договориться» о чем-либо.</p>
                            <p>Написала более 3500 постов и 40 статей за 4 года.</p>
                            <p>Прочитала 24 книги по копирайтингу / оформлению текста.</p>
                            <p>Высокий уровень ответсвенности, организованности и коммуникабельности</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="remodal" data-remodal-id="team-12">
                <a data-remodal-action="close" class="remodal-close"></a>
                <div class="modal-blocks">
                    <div class="modal-blocks__left">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/team/team-14.png" alt="" />
                        <ul>
                            <li><a href="https://m-f.kz/smm-marketing/">SMM</a></li>
                        </ul>
                    </div>
                    <div class="modal-blocks__right">
                        <h3>Высокая Анастасия</h3>
                        <p>Дизайнер, SMM-специалист</p>
                        <div class="modal__bio_text-scroll">
                            <p>Максимально развиты эстетика и вкус.</p>
                            <p>Следит за последними тенденциями в дизайне. Завсегдатай всех курсов по дизайну.</p>
                            <p>Занимается мобильной фотографией и умеет «поймать крутой кадр»</p>
                            <p>Из переводчика в CMM-специалисты</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

    <?php get_footer(); ?>