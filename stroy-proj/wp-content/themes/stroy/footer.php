
  <div class="remodal modal-form" data-remodal-id="modal-form">
    <a data-remodal-action="close" class="remodal-close"></a>
    <div class="modal-info">
        <h3>Обратиться к нашим специалистам</h3>
        <!--<form action="">
            <label>Ваше имя</label><br />
            <input type="text" placeholder="Имя"><br />
            <label>Телефон</label><br />
            <input type="tel" placeholder="+7 (___) ___ - ____"><br />
            <input class="modal-button" type="submit" placeholder="Отправить">
        </form>-->
        <?php echo do_shortcode( '[contact-form-7 id="70" title="Модальная форма"]' ); ?>
        <!--<p>Нажимая на кнопку «Отправить», <a href="" class="modal-link">вы соглашаетесь на обработку персональных данных</a></p>-->
    </div>
</div>
<footer>
    <div class="container-header">
    <div class="footer-list">
            <div class="footer-item">
                <div class="footer-title">Каталог</div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="">Тачки</a></li>
                        <li><a href="">Стремянки</a></li>
                        <li><a href="">Электроды</a></li>
                        <li><a href="">Гвозди</a></li>
                        <li><a href="">Проволока</a></li>                    
                    </ul>
                    <ul>
                        <li><a href="">Сухие смеси</a></li>
                        <li><a href="">Гипсокартон</a></li>
                        <li><a href="">Краска</a></li>
                        <li><a href="">Шурупы</a></li>
                        <li><a href="">Электроинструмент</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Главная</a></li>
                        <li><a href="">О нас</a></li>
                        <li><a href="">Каталог</a></li>
                        <li><a href="">Партнеры</a></li>
                        <li><a href="">Прайс лист</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-title">Контакты</div>
                <a class="dg-widget-link" href="http://2gis.kz/shymkent/firm/70000001042078537/center/69.61864471435548,42.30524518303302/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Шымкента</a><div class="dg-widget-link"><a href="http://2gis.kz/shymkent/firm/70000001042078537/photos/70000001042078537/center/69.61864471435548,42.30524518303302/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kz/shymkent/center/69.618642,42.304942/zoom/16/routeTab/rsType/bus/to/69.618642,42.304942╎Строй Снабжение, оптово-розничный склад строительных материалов?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Строй Снабжение, оптово-розничный склад строительных материалов</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":500,"height":200,"borderColor":"#a3a3a3","pos":{"lat":42.30524518303302,"lon":69.61864471435548,"zoom":16},"opt":{"city":"shymkent"},"org":[{"id":"70000001042078537"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                <!--<div class="footer-social">
                    <ul>
                        <li><a href=""><img src="img/icon/vk-white.svg" /></a></li>
                        <li><a href=""><img src="img/icon/youtube-white.svg" /></a></li>
                        <li><a href=""><img src="img/icon/instagram-white.svg" /></a></li>
                    </ul>
                </div>-->
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Строй Снабжение. Все права защищены</p>
        </div>
    </div> 
</footer>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls " style="display: none;">
    <div class="slides" style="width: 7680px;"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
      <?php wp_footer(); ?>
    <script>
        $("#phone").mask("+7 (999) 999 - 9999",{autoclear:false});
    </script>
      <script>
    $(".js-video-button").modalVideo({
        youtube:{
            controls:0,
            nocookie: true
        },
  url: "https://developer.a-blogcms.jp/themes/developer/movies/280.mp4"
    });
</script>
<script>
    $('.header-mobile > i').click(function(){
        $('.mobile-block').toggleClass('opened');
        $('body').toggleClass('mobile-active');
	});
    $('.mobile-block-header > i').click(function(){
        $('.mobile-block').removeClass('opened');
        $('body').removeClass('mobile-active');
	});
</script>
    </div>
  </body>
</html>
