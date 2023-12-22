<footer class="footer__mobile">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="footer__logo text-center">
                    <picture>
                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/logo-white.gif" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-white.gif" alt="" />
                    </picture>
                </div>
                <div class="footer__copyright"> 2020/Все права защищены © </div>
            </div>
            <div class="col-6">
                <div class="footer__menu">
                    <div class="footer__menu_contact">
                        <p>
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-white.svg" alt="" />
                            </picture> Наш телефон:
                        </p>
                        <p><a href="tel:+74132620844">+ 7 (4132) 620844</a></p>
                    </div>
                    <div class="footer__menu_contact">
                        <p>
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/message-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/message-white.svg" alt="" />
                            </picture> Email:</a>
                        </p>
                        <p><a href="mailto:rcmz49@mail.ru">rcmz49@mail.ru</a></p>
                    </div>
                    <div class="footer__menu_contact">
                        <p>
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/marker-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/marker-white.svg" alt="" />
                            </picture> Адрес:
                        </p> <span>г. Магадан, ул. Лукса, 8-а, каб. 107, (1 этаж)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="footer__dekstop">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-2">
                <div class="footer__logo text-center">
                    <picture>
                        <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/logo-white.gif" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-white.gif" alt="" />
                    </picture>
                </div>
            </div>
            <div class="col-md-12 col-lg-2">
                <div class="footer__menu">
                    <div class="footer__menu_title"> Информация </div>
                    <?php wp_nav_menu([
                            'theme_location' => 'info_menu',
                            'container' => null,
                            'items_wrap' => '<ul class="">%3$s</ul>',
                        ]) 
                    ?>
                    <!--<ul>
                        <li><a href="#">Федеральный проект</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Структура</a></li>
                        <li><a href="#">Документы</a></li>
                        <li><a href="#">Общеобразовательные организации</a></li>
                    </ul>-->
                </div>
            </div>
            <div class="col-md-12 col-lg-2">
                <div class="footer__menu">
                    <div class="footer__menu_title"> Деятельность </div>
                    <ul>
                        <li><a href="https://www.rcmz49.ru/activity/">Деятельность</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-2">
                <div class="footer__menu">
                    <div class="footer__menu_title"> Медиагалерея </div>
                    <?php wp_nav_menu([
                            'theme_location' => 'partners_menu',
                            'container' => null,
                            'items_wrap' => '<ul class="">%3$s</ul>',
                        ]) 
                    ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-2">
                <div class="footer__menu">
                    <div class="footer__menu_title"> Партнеры </div>
                    <ul>
                        <li><a href="https://www.rcmz49.ru/partners/">Партнеры</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-2">
                <div class="footer__menu">
                    <div class="footer__menu_title"> Контакты </div>
                    <div class="footer__menu_contact">
                        <p>
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/phone-white.svg" alt="" />
                            </picture> Наш телефон:
                        </p>
                        <p><a href="tel:+74132620844">+ 7 (4132) 620844</a></p>
                    </div>
                    <div class="footer__menu_contact">
                        <p>
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/message-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/message-white.svg" alt="" />
                            </picture> Email:</a>
                        </p>
                        <p><a href="mailto:rcmz49@mail.ru">rcmz49@mail.ru</a></p>
                    </div>
                    <div class="footer__menu_contact">
                        <p>
                            <picture>
                                <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/icon/marker-white.svg" type="image/webp"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/marker-white.svg" alt="" />
                            </picture> Адрес:
                        </p> <span>г. Магадан, ул. Лукса, 8-а, каб. 107, (1 этаж)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-2">
                <div class="footer__copyright"> 2020/Все права защищены © </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="myModalSearch" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content modal-search">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/close.svg"></button>
        </div>
        <div class="modal-body modal-body-search">
            <form action="<?php bloginfo( 'url' ); ?>" method="get">
                <input  type="text" name="s" placeholder="Введите запрос..." value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
                <button type="submit" value="Найти"/>Найти  <img src="https://www.rcmz49.ru/wp-content/themes/rcmz49/assets/img/icon/search-white.svg" alt=""></form>
            </form>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/close.svg"></button>
    </div>
    <div class="modal-body">
      <p><a href="<?php the_field('document_file');?>"></a></p>
      <div id="modalcontent">
        <h4>Вы уверены что хотите скачать “Полное наименование документа”?</h4>
      </div>
    </div>
    <div class="modal-footer">
    <a id="myfile" href="#">Скачать</a>
      <button type="button" class="" data-dismiss="modal">Закрыть</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/close.svg"></button>
    </div>
    <div class="modal-body">
      <h4>Скачивание началось</h4>
    </div>
    <div class="modal-footer modal__justify_left">
      <button type="button" class="" data-dismiss="modal">Закрыть</button>
    </div>
  </div>
</div>
</div>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls " style="display: none;">
    <div class="slides" style="width: 7680px;"></div>
    <h3 class="title">Фотогалерея</h3> <a class="prev">‹</a> <a class="next">›</a> <a class="close">×</a> <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
    
    <?php wp_footer(); ?>
    <!--<script src="js/vnd/jquery/jquery-3.5.1.min.js"></script>
    <script src="js/vnd/owl/owl.carousel.min.js"></script>
    <script src="/js/vnd/idtabs/jquery.idTabs.min.js"></script>
    <script src="/js/vnd/blueimp/blueimp-gallery.min.js"></script>
    <script src="js/vnd/sticky/sticky.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>-->
</body>

</html>
