<footer class="vk-footer t1-footer">
        <div class="container">
            <div class="row">
                <div class="footer-top">
                    <div class="col-md-4 col-sm-12 col-xs-12 item-footer-top">
                        <div class="footer-top-item">
                            <div class="col-md-3 col-sm-3 col-xs-3 icon">
                                <i class="uni-icomoon icon-placeholder"></i>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 text-number">
                                <p>Адресс</p>
                                <p>Шымкент, Бизнес-центр “Кайнар”</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 item-footer-top">
                        <div class="footer-top-item">
                            <div class="col-md-3 col-sm-3 col-xs-3 icon">
                                <i class="uni-icomoon icon-smartphone"></i>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 text-number">
                                <p>Телефон</p>
                                <p>+7 (7252) 392 022</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 item-footer-top">
                        <div class="footer-top-item">
                            <div class="col-md-3 col-sm-3 col-xs-3 icon">
                                <i class="uni-icomoon icon-email"></i>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 text-number">
                                <p>Email</p>
                                <p>info@openspk.kz</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="t-footer">
                    <div class="col-md-4 footer-item about">
                        <div class="heading">
                            <div class="box"></div>
                            <h4 class="vk-heading text-uppercase">О корпорации</h4>
                        </div>
                        <div class="img">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo2.png">
                        </div>
                        <p class="vk-text">
                            Акционерное общество «СПК «Shymkent» образована 13.09.2018 года в соответствии с Приказом №10. Учредителем и акционером Общества является Акимат г. Шымкент в лице ГУ «Управление финансов города Шымкент»
                        </p>
                        <ul class="vk-list vk-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>



                        </ul>
                    </div>
                    <!--./about-->


                    <div class="col-md-4 footer-item home-builder-quick-link">
                        <div class="heading">
                            <div class="box"></div>
                            <h4 class="vk-heading text-uppercase">Ссылки</h4>

                        </div>
                        <ul class="vk-list vk-quick-link text-capitalize">
                            <li><a href="about.html">О корпорации</a></li>

                            <li><a href="#">Услуги</a></li>

                            <li><a href="project.html">Проекты</a></li>

                            <li><a href="#">FAQ's</a></li>

                            <li><a href="#">Контакты</a></li>

                        </ul>
                    </div>
                    <!--./quick-link-->

                    <div class="col-md-4 footer-item home-builder-recent">
                        <div class="heading">
                            <div class="box"></div>
                            <h4 class="vk-heading text-uppercase">Последние новости</h4>

                        </div>
                        <ul class="recent-item-ul">
                            <?php
                              $query_args = array(      // Полная документация здесь (wp-kama.ru/function/wp_query)
                                'cat' => '1',           // Из какой категории выводим
                                'posts_per_page' => 3,  // Количество анонсов
                                'offset' => 2,          // Отступ постов (аккуратнее с пагинацией)    
                              )
                            ?>
                            <?php $query = new WP_Query( $query_args ); ?>
                                <?php if ( $query->have_posts() ) : ?>
                                  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <li class="recent-item">
                                        <div class="recent-img">
                                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="builder-img">
                                                <img src="<?php the_field('post_preview_images'); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="recent-text">
                                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_field('previeu_title'); ?></a>
                                            <p><?php the_time('j F Y'); ?></p>
                                        </div>
                                    </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                  <?php else : ?>
                              <p><?php _e( 'Нет записей для отображения' ); ?></p>
                            <?php endif; ?>
                            <!--<li class="recent-item">
                                <div class="recent-img">
                                    <a href="single-blog.html" class="builder-img">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/home-builder/resent2.png" alt="">
                                    </a>
                                </div>
                                <div class="recent-text">
                                    <a href="single-blog.html"> Миллион квадратных метров первичного жилья строят в Шымкенте</a>
                                    <p>03/06/2020</p>
                                </div>
                            </li>
                            <li class="recent-item">
                                <div class="recent-img">
                                    <a href="single-blog.html" class="builder-img">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/home-builder/resent2.png" alt="">
                                    </a>
                                </div>
                                <div class="recent-text">
                                    <a href="single-blog.html">Мурат Айтенов провел рабочую встречу с АО «СПК «Shymkent»</a>
                                    <p>27/06/2020</p>
                                </div>
                            </li>-->
                        </ul>

                    </div>
                    <!--./latest-works-->
                </div>
            </div>
            <!--./row-->

        </div>
        <!--./container-->
        <div class="footer-bot">
            <div class="container">
                <p class="vk-text"><a class="vk-text-color-yellow-1" href="">АО «СПК «Shymkent»</a>@<span class="vk-text-color-yellow-1">2020</span>.
                </p>

                <p class="vk-text">
                    Все права защищены.
                </p>
            </div>
        </div>
        <!--./footer-bot-->
    </footer>
    <!--./vk-footer-->
</div>
<!--./main-wrapper-->

<!-- BEGIN: SCRIPT -->
    <?php wp_footer(); ?>
<!--<script src="<?php echo bloginfo('template_url'); ?>/assets/plugin/jquery/jquery-2.0.2.min.js"></script>-->
<script src="<?php echo bloginfo('template_url'); ?>/assets/plugin/plugin.min.js"></script>

<script src="<?php echo bloginfo('template_url'); ?>/assets/plugin/main.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/plugin/custom.js"></script>
<!-- END: SCRIPT -->
</body>
</html>