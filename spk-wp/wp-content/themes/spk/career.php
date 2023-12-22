<?php
/*
Template Name: Карьера
*/
?>
<?php get_header(); ?>
    <section class="vk-content">

        <div class="vk-banner vk-background-image-3">
            <div class="vk-background-overlay vk-background-black-1 _80"></div>
            <div class="container wrapper">
                <div class="page-heading">
                    Вакансии
                </div>
            </div>
        </div>
        <!--./vk-banner-->


        <div class="vk-breadcrumb">
            <nav class="container">
                <ul>

                    <li><a href="http://shymspkwp.inte.kz/">Главная</a></li>

                    <li><a href="#">О Корпорации</a></li>

                    <li class="active">Вакансии</li>
                </ul>
            </nav>
        </div>
        <!--./vk-breadcrumb-->
        <div class="vk-page vk-page-career">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="content-top">

                            <div class="vk-section-style-7">
                                <div class="content">
                                    <h4 class="vk-title text-uppercase ">Карьера в АО «СПК «Shymkent» – это больше, чем карьера!</h4>
                                    <p>АО «СПК «Шымкент» – бизнес-структура, осуществляющая свою деятельность с целью получения прибыли от производства и продажи товаров и услуг, которая реинвестируется для реализации социальных, экономических или культурных целей населения региона.
                                        <br><br>
                                    <h5 class="vk-title text-uppercase ">Наша цель</h5>
                                    исполнение миссии Корпорации с помощью эффективной работы квалифицированных и мотивированных работников, разделяющих общие ценности, способных отдать больше, чем просто опыт и знания, окрыленных идеей создания нового Шымкента с уникальными возможностями для развития.
                                    <br><br><br><br>
                                    <h4 class="vk-title text-uppercase" style="text-align:center;">Мы - на пороге новых открытий. Хотите с нами?</h4>
                                    <p style="text-align: center;">Мы ищем людей с креативной моделью мышления. Если Ваша кандидатура будет соответствовать нашим ожиданиям, мы обязательно с Вами свяжемся.</p>
                                </div>
                            </div>
                            <!--./vk-section-style-7-->
                        </div>
                        <!--./content-top-->

                        <!--./content-mid-->

                        <div class="content-bot">
                            <div id="message-career"></div>
                            <div class="vk-contact-form" style="margin-bottom: 50px;">
                                <form method="post" action="mail/contact-career.php" id="contactcareer" autocomplete="off">
                                    <h4 class="vk-title text-uppercase">Присоединяйтесь к нашей команде</h4>
                                    <div class="vk-divider"></div>
                                    <div class="user-info">
                                        <div class="form-group">
                                            <i class="fa fa-user"></i>
                                            <input type="text" id="name_career" name="name_career"  placeholder="Ваше имя *" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-phone"></i>
                                            <input type="tel" id="phone_career" name="phone_career" placeholder="Номер" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" id="email_career" name="email_career" placeholder="Email адресс *" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-file"></i>
                                            <input type="file" name="file[]" id="file" class="vk-input-file" data-multiple-caption="{count} files selected" multiple="">
                                            <label for="file" class="input-label">
                                                <span class="input-text">Загрузите <br> свое резюме *</span>
                                                <i class="fa fa-upload"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.user-info -->

                                    <div class="message-content">
                                        <div class="form-group">
                                            <textarea id="message_career" name="message_career" placeholder="Сообщение" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <!-- /.message-content -->

                                    <div class="vk-buttons">
                                        <button type="submit" class="vk-btn vk-btn-default vk-btn-l vk-fullwidth">
                                            <i class="fa fa-paper-plane"></i>ОТПРАВИТЬ
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!--./content-bot-->
                    </div>
                    <!--./left-->

                    <!--<div class="col-md-4 right">-->

                    <!--<ul class="vk-list vk-menu-right">-->

                    <!--<li><a href="#">Construction engineer</a></li>-->

                    <!--<li><a href="#">Furniture Designer</a></li>-->

                    <!--<li><a href="#">Construction Leader</a></li>-->

                    <!--<li><a href="#">Manager</a></li>-->

                    <!--</ul>-->
                    <!--&lt;!&ndash;./vk-menu-right&ndash;&gt;-->
                    <!--</div>-->
                    <!--./right-->
                </div>
                <!--./row-->
            </div>
            <!--./container-->
        </div>
        <!--./vk-page-->

    </section>

<?php get_footer(); ?>