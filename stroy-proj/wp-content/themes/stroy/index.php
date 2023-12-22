<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<main>
            <div class="main-slider">
                <div class="owl-carousel owl-theme main-carousel">
                    <a href="" class="main-carousel-item">
                        <div class="main-carousel-media">
                            <video autoplay loop muted data-src="<?php echo bloginfo('template_url'); ?>/assets/img/video/stroy-video.mp4" src="<?php echo bloginfo('template_url'); ?>/assets/img/video/stroy-video.mp4"></video>
                        </div>
                        <div class="main-carousel-info">
                            <h2>Производство и оптовая продажа строительных материалов</h2>
                            <p>Наша компания занимается продажей оптово-розничных строительных материалов. На рынке мы более 20 лет, успели зарекомендовать себя только с положительной стороны. </p>
                            <p>У нас собственное производство строительных тачек и стремянок. Мы гарантируем качество нашей продукции.</p>
                            <span data-remodal-target="modal-form">Узнать подробнее  <i class="icon-angle-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>        
            <div class="main-news">
                <div class="container">
                    <h2 class="main-title">Наши <span>преимущества</span></h2>
                    <div class="owl-carousel owl-theme aidar-slider">
                        <div class="aidar-slider-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/services1.jpg" alt="">
                        </div>
                        <div class="aidar-slider-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/services2.jpg" alt="">
                        </div>
                        <div class="aidar-slider-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/services3.jpg" alt="">
                        </div>
                        <div class="aidar-slider-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/services4.jpg" alt="">
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="main-tabs">
                <h2 class="main-title"><span>Каталог</span> Строй снабжения</h2>
                <div class="container">
                    <div class="notab-catalog-links">
                    <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array (
                                'posts_per_page' => 20,
                                'order'      => 'ASC',
                                'post_type'  => array( 'catalog' ),
                                'paged' => $paged
                            );
                        ?>
                        <?php $MY_QUERY = new WP_Query( $args); if ( $MY_QUERY->have_posts() ) : while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <!--<p><a href="#" data-remodal-target="modal-cat-<?php the_id(); ?>"><img class="links-icon-main" src="<?php the_field('catalog_icon'); ?>"> <img class="links-icon-hover" src="<?php the_field('catalog_icon_hover'); ?>"><?php the_title(); ?></a></p>-->
                            <p><a href="#"><img class="links-icon-main" src="<?php the_field('catalog_icon'); ?>"> <img class="links-icon-hover" src="<?php the_field('catalog_icon_hover'); ?>"><?php the_title(); ?></a></p>
                        <div class="remodal modal-cat" data-remodal-id="modal-cat-<?php the_id(); ?>">
                            <a data-remodal-action="close" class="remodal-close"></a>
                            <div class="modal-category-info">
                                <h5><?php the_title(); ?></h5>
                                <p><strong><?php the_field('catalog_subtitle'); ?></strong></p>
                                <?php the_field('catalog_info'); ?>
                                <div class="modal-category-gallery">
                                    <div id="sync1" class="gallery-product-carousel owl-carousel gallery-init">
                                        <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" class="gallery-product-item gallery__list_item photo-gallery__thumb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></a>
                                        <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" class="gallery-product-item gallery__list_item photo-gallery__thumb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></a>
                                        <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" class="gallery-product-item gallery__list_item photo-gallery__thumb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></a>
                                        <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" class="gallery-product-item gallery__list_item photo-gallery__thumb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></a>
                                        <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" class="gallery-product-item gallery__list_item photo-gallery__thumb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></a>
                                        <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" class="gallery-product-item gallery__list_item photo-gallery__thumb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></a>
                                        <a href="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" class="gallery-product-item gallery__list_item photo-gallery__thumb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></a>
                                    </div>
                                    <div id="sync2" class="navigation-thumbs owl-carousel">                   
                                        <button class="owl-thumb-item"> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></button>
                                        <button class="owl-thumb-item"> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></button>
                                        <button class="owl-thumb-item"> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></button>
                                        <button class="owl-thumb-item"> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></button>
                                        <button class="owl-thumb-item"> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></button>
                                        <button class="owl-thumb-item"> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></button>
                                        <button class="owl-thumb-item"> <img src="<?php echo bloginfo('template_url'); ?>/assets/img/img-category.jpg" alt=""></button>
                                    </div>
                                </div>
                                <div class="catalog-price">
                                    <a href="http://aidar.m-f.kz/wp-content/themes/stroy/assets/img/price-2021-december.pdf" target="_blank">Скачать прайс</a>
                                </div>
                            </div>
                        </div>    
                        <?php endwhile; endif; ?>
                        
                        
                        
                        <!--<p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-2.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-2-hover.png">Стремянки</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-3.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-3-hover.png">Электроды</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-4.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-4-hover.png">Гвозди</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-5.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-5-hover.png">Проволока</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-6.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-6-hover.png">Сухие смеси</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-7.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-7-hover.png">Гипсокартон</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-8.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-8-hover.png">Краска</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-9.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-9-hover.png">Шурупы</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-10.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-10-hover.png">Электроинструмент</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-11.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-11-hover.png">Рубероид</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-12.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-12-hover.png">Битум</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-13.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-13-hover.png">Грунтовка</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-14.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-14-hover.png">Растворитель</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-15.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-15-hover.png">Отрезные диски</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-16.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-16-hover.png">Перчатки</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-17.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-17-hover.png">Лопаты/Топоры</a></p>
                        <p><a href=""><img class="links-icon-main" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-18.png"> <img class="links-icon-hover" src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/icon-18-hover.png">Молотки</a></p>-->
                    </div>
                    <div class="catalog-price">
                        <a href="http://aidar.m-f.kz/wp-content/themes/stroy/assets/img/price-2021-december.pdf" target="_blank">Скачать прайс</a>
                    </div>
                </div>
            </div>  
            <div class="main-news">
                <div class="container">
                    <div class="main-dillers__flex">
                        <h2>Официальные <span>диллеры</span></h2>
                        <div class="dillers-images">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/diller-1.jpg" alt="" />
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/diller-2.jpg" alt="" />
                        </div>                       
                    </div>
                </div>
            </div>       
            <div class="main-feedback">
                <div class="container">
                    <h2 class="main-title">Оставайтесь на связи</h2>
                    <div class="main-feedback-list">
                        <div class="feedback-item-one">
                            <section class="feedback-item__info">
                                <h5>Социальные сети</h5>
                                <p>Мы в социальных сетях.</p>
                            </section>
                            <ul>
                                <!--<li><a href=""><img src="img/icon/social-vk.svg" alt=""></a></li>-->
                                <li><a href=""><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/social-instagram.svg" alt=""></a></li>
                                <!--<li><a href=""><img src="img/icon/social-facebook.svg" alt=""></a></li>
                                <li><a href=""><img src="img/icon/social-youtube.svg" alt=""></a></li>
                                <li><a href=""><img src="img/icon/social-ya.svg" alt=""></a></li>-->
                            </ul>
                        </div>
                        <div class="feedback-item-one">
                            <section class="feedback-item__info">
                                <h5>Обратная связь</h5>
                                <p>Оставьте заявку и мы с вами свяжемся</p>
                            </section>
                            <p class="popular-link" data-remodal-target="modal-form">Оставить заявку  <i class="icon-angle-right"></i></p>    
                        </div>
                        <div class="feedback-item-two">
                            <section class="feedback-item__info">
                                <h5>Связаться с <br /> консультантом</h5>
                                <a href="tel:+77754196993">+7 775 419-69-93</a><br />
                                <a href="tel:+77757068555">+7 775 706-85-55</a>
                            </section> 
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="remodal" data-remodal-id="modal">
            <a data-remodal-action="close" class="remodal-close"></a>
            <div class="modal-info">
                <h3>Обратиться к нашим специалистам</h3>
                <form action="">
                    <label>Ваше имя</label><br />
                    <input type="text" placeholder="Имя"><br />
                    <label>Телефон</label><br />
                    <input type="tel" placeholder="+7 (___) ___ - ____"><br />
                    <input class="modal-button" type="submit" placeholder="Отправить">
                </form>
                <p>Нажимая на кнопку «Отправить», <a href="" class="modal-link">вы соглашаетесь на обработку персональных данных</a></p>
            </div>
        </div>
<?php get_footer(); ?>