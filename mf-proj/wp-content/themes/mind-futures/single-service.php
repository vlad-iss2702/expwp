<?php get_header(); ?>
<main>
    <div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
            <div class="services-banner__info">
                <h2><?php the_title(); ?></h2>
                <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
                <div class="services-breadcrumb">
                    <p><a href="https://m-f.kz/">Главная</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/services/"> Услуги</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                </div>
                <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
                <div class="services-breadcrumb">
                    <p><a href="https://m-f.kz/">Басты бет</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/services/"> Қызметтер</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                </div>
                <?php endif; ?>

                <?php get_template_part( 'crumb-link' ); ?>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="services-text">
                <!--<div class="services-text__img" style="background-image: url('img/services-banner/services-1.jpg')"></div>-->
                <div class="services-text__info">

                    <?php the_content(); ?>
                    <!--<h2>Юридический консалтинг и аутсорсинг</h2>
                    <p>Начало и ведение собственного бизнеса всегда сопряжено с необходимостью контролировать множество юридических аспектов деятельности и соответствующих процедур.</p>
                    <p>Предпринимателю, а особенно инвестору так же следует учитывать, что Казахстанское законодательство в области коммерческих отношений и налогового права достаточно динамичное.  Именно поэтому часто представители бизнеса просто не успевают среагировать на изменения, что вызывает серьезные штрафные санкции со стороны контролирующих органов.</p>
                    <p>Аутсорсинговое обслуживание в юридической области, выстроенное на долгосрочных партнерских отношениях поможет избежать множества проблем на старте, что особенно актуально для начинающих предпринимателей, для которых содержание юридического отдела является нерентабельным.</p>
                    <p>Задачи компетентного юридический аутсорсинга состоят не только в решении острых вопросов в области законодательства, но и в предотвращении проблем касающихся вопросов собственности, взаимоотношений с клиентами и партнерами, инвесторами поставщиками, сотрудниками, а также в вопросах права собственности и защиты ваших предпринимательских интересов.</p>
                    <p>Предложенные решения, от профессиональных консультантов «Mind Futures» в области законодательства и права позволят Вам концентрироваться только на основных стратегических вопросах бизнеса и эффективного управления предприятием.</p>
                    <p>Залог безупречной репутации «Mind Futures» основан на искренних отношениях с партнерами и на сотрудничестве с исключительно компетентными консультантами, каждый из которых является признанным отраслевым экспертом, а также их первоклассным юристом.</p>
                    <p>Наши специалисты в области коммерческого права работают в тесном сотрудничестве с широким кругом предприятий частного сектора, государственных органов и прочих организаций, предоставляя экспертные консультации практически по всем аспектам права.</p>
                    <h5>Комплексное решение юридического аусторсинга может состоять из следующих услуг и сервисов:</h5>
                    <p><strong>Формирование и сопровождение коммерческих отношений</strong></p>
                    <ul>
                        <li>подготовка договоров, контрактов, соглашений, оферт экспертный анализ документов: договоров, контрактов, соглашений с целью выявления и оценки рисков и их нивелированию;</li>
                        <li>ведение работы по согласованию условий договоров, соглашений, контрактов с контрагентами (составление протоколов разногласий, участие в переговорах, сопровождение соответствующей деловой переписки);</li>
                        <li>полное юридическое сопровождение сложных сделок в сфере купли-продажи бизнеса и инвестирования;</li>                        
                    </ul>
                    <p><strong>Формирование и сопровождение коммерческих отношений</strong></p>
                    <ul>
                        <li>подготовка договоров, контрактов, соглашений, оферт экспертный анализ документов: договоров, контрактов, соглашений с целью выявления и оценки рисков и их нивелированию;</li>
                        <li>ведение работы по согласованию условий договоров, соглашений, контрактов с контрагентами (составление протоколов разногласий, участие в переговорах, сопровождение соответствующей деловой переписки);</li>
                        <li>полное юридическое сопровождение сложных сделок в сфере купли-продажи бизнеса и инвестирования;</li>                        
                    </ul>
                    <p><strong>Формирование и сопровождение коммерческих отношений</strong></p>
                    <ul>
                        <li>подготовка договоров, контрактов, соглашений, оферт экспертный анализ документов: договоров, контрактов, соглашений с целью выявления и оценки рисков и их нивелированию;</li>
                        <li>ведение работы по согласованию условий договоров, соглашений, контрактов с контрагентами (составление протоколов разногласий, участие в переговорах, сопровождение соответствующей деловой переписки);</li>
                        <li>полное юридическое сопровождение сложных сделок в сфере купли-продажи бизнеса и инвестирования;</li>                        
                    </ul>
                    <p><strong>Формирование и сопровождение коммерческих отношений</strong></p>
                    <ul>
                        <li>подготовка договоров, контрактов, соглашений, оферт экспертный анализ документов: договоров, контрактов, соглашений с целью выявления и оценки рисков и их нивелированию;</li>
                        <li>ведение работы по согласованию условий договоров, соглашений, контрактов с контрагентами (составление протоколов разногласий, участие в переговорах, сопровождение соответствующей деловой переписки);</li>
                        <li>полное юридическое сопровождение сложных сделок в сфере купли-продажи бизнеса и инвестирования;</li>                        
                    </ul>
                    <h5>Аутсорсинг юридических услуг в Mind Futures имеет ряд неоспоримых преимуществ, ключевыми из которых являются:</h5>
                    <ol>
                        <li><p><strong>Экономия и оптимизация расходов.</strong></p>
                            <p>Одним из наиболее значительных преимуществ аутсорсинга юридических услуг является его рентабельность. Поскольку существует значительная разница в стоимости штатного специалиста, (в которую кроме заработной платы входят обязательные выплаты страховых взносов, отпускных, больничных и прочих выплат), и оплаты услуг по договору с компанией, которые абсолютно легально оптимизируют налог на прибыль.</p>
                        </li>
                        <li><p><strong>Экономия и оптимизация расходов.</strong></p>
                            <p>Одним из наиболее значительных преимуществ аутсорсинга юридических услуг является его рентабельность. Поскольку существует значительная разница в стоимости штатного специалиста, (в которую кроме заработной платы входят обязательные выплаты страховых взносов, отпускных, больничных и прочих выплат), и оплаты услуг по договору с компанией, которые абсолютно легально оптимизируют налог на прибыль.</p>
                        </li>
                        <li><p><strong>Экономия и оптимизация расходов.</strong></p>
                            <p>Одним из наиболее значительных преимуществ аутсорсинга юридических услуг является его рентабельность. Поскольку существует значительная разница в стоимости штатного специалиста, (в которую кроме заработной платы входят обязательные выплаты страховых взносов, отпускных, больничных и прочих выплат), и оплаты услуг по договору с компанией, которые абсолютно легально оптимизируют налог на прибыль.</p>
                        </li>
                        <li><p><strong>Экономия и оптимизация расходов.</strong></p>
                            <p>Одним из наиболее значительных преимуществ аутсорсинга юридических услуг является его рентабельность. Поскольку существует значительная разница в стоимости штатного специалиста, (в которую кроме заработной платы входят обязательные выплаты страховых взносов, отпускных, больничных и прочих выплат), и оплаты услуг по договору с компанией, которые абсолютно легально оптимизируют налог на прибыль.</p>
                        </li>
                        <li><p><strong>Экономия и оптимизация расходов.</strong></p>
                            <p>Одним из наиболее значительных преимуществ аутсорсинга юридических услуг является его рентабельность. Поскольку существует значительная разница в стоимости штатного специалиста, (в которую кроме заработной платы входят обязательные выплаты страховых взносов, отпускных, больничных и прочих выплат), и оплаты услуг по договору с компанией, которые абсолютно легально оптимизируют налог на прибыль.</p>
                        </li>
                    </ol>-->
                    <!--<h4>Ответы на часто задаваемые вопросы</h4>
                    <p><strong>Когда и кому может понадобиться юридическое обслуживание на условиях аутсорсинга?</strong></p>
                    <ul>
                        <li>Компании, которым могут понадобится услуги правового аутсорсинга можно условно разделить на 2 категории.</li>
                        <li>К первой категории относятся небольшие компании и стартапы с выстроенными бизнес – процессами, для которых нет необходимости содержать собственного юриста в штате, так как нет потребности в его ежедневной загрузке.</li>
                    </ul>
                    <p><strong>Когда и кому может понадобиться юридическое обслуживание на условиях аутсорсинга?</strong></p>
                    <ul>
                        <li>Компании, которым могут понадобится услуги правового аутсорсинга можно условно разделить на 2 категории.</li>
                        <li>К первой категории относятся небольшие компании и стартапы с выстроенными бизнес – процессами, для которых нет необходимости содержать собственного юриста в штате, так как нет потребности в его ежедневной загрузке.</li>
                    </ul>
                    <p><strong>Когда и кому может понадобиться юридическое обслуживание на условиях аутсорсинга?</strong></p>
                    <ul>
                        <li>Компании, которым могут понадобится услуги правового аутсорсинга можно условно разделить на 2 категории.</li>
                        <li>К первой категории относятся небольшие компании и стартапы с выстроенными бизнес – процессами, для которых нет необходимости содержать собственного юриста в штате, так как нет потребности в его ежедневной загрузке.</li>
                    </ul>
                    <p>Если у Вас еще остались вопросы то заполните форму, и наш менеджер свяжется с Вами чтобы уточнить детали сотрудничества.</p>-->
                </div>
                <!--<div class="services-pdf__download">
                    <a href=""><i class="icon-document-file-pdf"></i> <span>Юридический консалтинг и аутсорсинг</span></a>
                </div>-->
            </div>
        </div>
        <?php get_template_part( 'contact-block' ); ?>
</main>

    <?php get_footer(); ?>