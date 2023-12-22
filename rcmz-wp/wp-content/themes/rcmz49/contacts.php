<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="main__title">
                <h2>Контакты</h2>
            </div>
        </div>
        <div class="container">
            <div class="contacts">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="contacts__info">
                            <ul>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/marker-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/marker-red.svg" alt="" />
                                    </picture>
                                    <p><strong>Адрес:</strong> <br /><span><?php the_field('contact__address'); ?></span></p>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-red.svg" alt="" />
                                    </picture>
                                    <p><strong>Телефон:</strong> <br /> <a href="tel:<?php the_field('contact_phone_link'); ?>"><?php the_field('contact_phone_text'); ?></a></p>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/gmail-red.svg" alt="" />
                                    </picture>
                                    <p><strong>Электронная почта:</strong> <br /> <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/clock-icon.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/clock-icon.svg" alt="" />
                                    </picture>
                                    <p><strong>График работы:</strong> <br /> <span> <?php the_field('contact_time'); ?></span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="contacts__map mb-5">
                            <?php the_field('snippet__script'); ?>
                            <!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afa7948932968dc66d7e7bdefa59e88d0163cd369939b538fe64813c179487163&amp;width=100%&amp;height=364&amp;lang=ru_RU&amp;scroll=true"></script>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>