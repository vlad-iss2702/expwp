<?php
/*
Template Name: Why
*/
?>
<?php get_header(); ?>
<main>
        <div class="container">
             <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <h2 class="why__title">
                    <?php the_title(); ?>
                </h2>
                <div class="why__text">
                    <div class="blog__list_date">
                        <?php the_time('m.d.Y'); ?>
                    </div>
                    <?php the_content(); ?>
                </div>  
             <?php endwhile; ?> 
             <?php endif; ?>
             <div class="template__form">
                    <div class="template__form_logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="Логотип">
                    </div>
                    <div class="template__form_info">
                        <!--<form>
                            <div class="form_info-input">
                                <input type="text" name="name" placeholder="Имя">
                                <input type="text" name="company" placeholder="Компания">
                            </div>
                            <input type="text" name="name" placeholder="Телефон или почта"><br />
                            <textarea placeholder="Введите сообщение"></textarea><br/>
                            <input type="submit" value="отправить" class="wpcf7-form-control wpcf7-submit form-button" disabled="">
                        </form>-->
                        <?php echo do_shortcode('[contact-form-7 id="115" title="Обратная связь"]'); ?>
                    </div>
                </div>
            <!--<div class="why__title">
                Почему кружка с логотипом боится посудомоечной машины?
            </div>
            <div class="why__text">
                <div class="blog__list_date">
                    08.09.2020
                </div>
                <p>Полезный подарок для сотрудников, дополнение к подарочному корпоративному набору, эффективный носитель бренда… </p>
                <p>Это они — кружки с логотипом. Но чтобы контакт бренда с целевой аудитория сохранялся как можно дольше, необходимо выбрать подходящее нанесение логотипа на кружки и правильно за ними ухаживать. </p>
                <p>Мы провели эксперимент, как брендированные кружки с деколью, сублимацией, гравировкой, тампопечатью, а также с покрытиями «хамелеон» и софт-тач переносят мытье в посудомойке, и делимся с вами его результатами.</p>
                <p><strong>1. Кружки с логотипом, которым не страшна посудомойка.</strong></p>
                <p><strong>Нанесение на кружки деколью</strong></p>
                <p>Лепили в детстве переводные татуировки из жвачек себе и другу? Тогда вы уже знакомы с технологией деколирования. Подготовленную «переводную картинку» из нескольких слоев разных цветов вымачивают в воде, прижимают к брендируемому изделию и осторожно снимают, чтобы не осталось неровностей и пузырьков. Кружки с логотипом, выполненным деколированием, сушат и отправляют на обжиг в муфельную печь. Изделие готово!</p>
                <div class="why__text_img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/why-1.png" />
                </div>
                <p><strong>Нанесение на кружки сублимацией</strong></p>
                <p>Технология сублимации отчасти похожа на деколирование: изображение переносят на изделие при помощи бумаги, но сначала кружки под нанесение логотипа обрабатывают особым полимерным покрытием, на который и ложится краска. </p>
                <div class="why__text_img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/why-2.png" />
                </div>
                <p><strong>Нанесение на кружки лазерной гравировкой</strong></p>
                <p>Тонкие линии, мелкие детали, высокая точность и скорость нанесения — все это о лазерной гравировке. Ее выполняет компьютер по загруженному изображению, поэтому ошибки в процессе нанесения исключены, а результат выглядит впечатляюще.</p>
                <div class="why__text_video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/IN9XFXfNSgQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>-->
        </div>
    </main>

    <?php get_footer(); ?>