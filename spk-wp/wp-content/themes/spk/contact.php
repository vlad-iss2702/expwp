<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
    <section class="vk-content">
        <div class="vk-banner vk-background-image-3">
            <div class="vk-background-overlay vk-background-black-1 _80"></div>
            <div class="container wrapper">
                <div class="page-heading">
                    Контакты
                </div>
            </div>
        </div>
        <!--./vk-banner-->

        <div class="vk-breadcrumb">
            <nav class="container">
                <ul>
                    <li><a href="http://shymspkwp.inte.kz/">Главная</a></li>

                    <li class="active">Контакты</li>
                </ul>
            </nav>
        </div>
        <!--./vk-breadcrumb-->
        <div class="vk-page vk-page-contact">
            <div class="container">
                <!--<div class="vk-map">
                    <div id="map" style="width:100%;height:500px;background-color: rgba(0,0,0,.5);"></div>
                </div>-->


                <div class="vk-contact" style="padding-top: 60px">
                    <div class="row">
                        <div class="col-md-9 left-content">
                            <h4 class="vk-heading text-uppercase">НАПИШИТЕ НАМ ЕСЛИ ЕСТЬ ВОПРОСЫ И ПРЕДЛОЖЕНИЯ </h4><div id="message-contact"></div>
                            <form  action="mail/contact.php" id="contactform" autocomplete="off">
                                <div class="vk-contact-form">
                                    <div class="user-info">
                                        <div class="form-group">
                                            <i class="fa fa-user"></i>
                                            <input type="text" id="name_contact" name="name_contact"  placeholder="Ваше имя *" class="form-control validate-required">
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-phone"></i>
                                            <input type="tel" id="phone_contact" name="phone_contact" placeholder="Телефон" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" id="email_contact" name="email_contact" placeholder="Email адресс *" class="form-control validate-required validate-email">
                                        </div>
                                        <!--<div class="form-group">-->
                                        <!--<i class="fa fa-pencil-square-o"></i>-->
                                        <!--<input type="text" id="subject" name="subject" placeholder="Subject" class="form-control">-->
                                        <!--</div>-->
                                    </div>
                                    <!-- /.user-info -->

                                    <div class="message-content">
                                        <div class="form-group">
                                            <textarea id="message_contact" name="message_contact" placeholder="Ваше сообщение" class="form-control validate-required"></textarea>
                                        </div>
                                    </div>
                                    <!-- /.message-content -->

                                    <div class="vk-buttons">
                                        <button type="submit" class="btn_1 rounded vk-btn vk-btn-default vk-btn-l vk-fullwidth">
                                            <i class="fa fa-paper-plane" id="submit-contact"></i>ОТПРАВИТЬ
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- ./left-->

                        <div class="col-md-3 right-content">
                            <div class="contact-info" style="padding-bottom: 9px">
                                <h4 class="vk-heading text-uppercase">Контакты приемной </h4>
                                <ul class="vk-list vk-office">
                                    <li><i class="fa fa-map-marker"></i>Республика Казахстан, г. Шымкент, <br/> Бизнес -центр “Кайнар”</li>

                                    <li><i class="fa fa-envelope"></i><a href="mailto:info@openspk.kz">info@openspk.kz</a></li>

                                    <li><i class="fa fa-phone"></i><a href="tel:+77252392022">+7 (7252) 392 022</a></li>

                                </ul>
                                <!--./vk-office--><ul class="vk-list vk-office">
                                    <h5 class="vk-heading text-uppercase" style="margin-bottom: 10px">Пресс-секретарь</h5>
                                    <!--<li><i class="fa fa-map-marker"></i>Somerset County, PA, USA</li>-->

                                    <li><i class="fa fa-envelope"></i><a href="mailto:d.mirsiyeva.spk@gmail.com">d.mirsiyeva.spk@gmail.com</a></li>

                                    <li><i class="fa fa-phone"></i><a href="tel:+77252392022">+7 (7252) 392 022</a></li>

                                </ul>
                                <!--./vk-office-->                        </div>
                            <!-- /.contact-info -->

                            <div class="business-hours">
                                <h5 class="vk-heading text-uppercase" style="margin-bottom: 10px">График Работы </h5>
                                <ul class="vk-list vk-office">
                                    <li><i class="fa fa-calendar"></i>Понедельник - Пятница</li>

                                    <li><i class="fa fa-clock-o"></i>9:00 - 18:00</li>

                                </ul>
                                <!--./vk-office-->                        </div>
                            <!-- /.business-hours -->
                        </div>
                        <!-- ./right-->
                    </div>
                    <!--./row-->
                </div>
                <!--./vk-contact-->
                <div class="vk-map">
                    <div  style="background-color: rgba(0,0,0,.5);">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa783e322823fc71f0e18981140562325fe28d02e3b00a3f6f0f152886d6fc876&amp;width=1170&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
                <!-- ./map-->
            </div>
            <!--./container-->
        </div>
        <!--./vk-page-->
    </section>

<?php get_footer(); ?>