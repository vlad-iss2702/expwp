
  <div class="remodal remodal-form" data-remodal-id="form">
        <a data-remodal-action="close" class="remodal-close"></a>
        <div class="modal-form">
            <!--<form action="">
              <input type="text" placeholder="Имя">
              <input type="tel" placeholder="+7 (___) ___ - ____">
              <input type="text" placeholder="Компания">
              <input type="email" placeholder="E-mail">
              <textarea placeholder="Сообщение"></textarea>
              <input class="modal-form-submit" type="submit" placeholder="Отправить">
            </form>-->
            <?php echo do_shortcode( '[contact-form-7 id="349" title="Модальная форма"]' ); ?>
        </div>
    </div>
  <footer>
    <div class="container">
      <div class="footer-contact">
        <div class="footer-contact-info">
          <h3>
            Контакты
          </h3>
          <ul>
            <li><i class="icon-location"></i> Казахстан, г. Шымкент, ул. Жансугурова 40</li>
            <li><a href="mailto:info@m-f.kz"><i class="icon-envelope"></i> info@m-f.kz</a></li>
            <li><a href="tel:+77027003040"><i class="icon-mobile"></i> +7 (702) 700-30-40</a></li>
            <li><a href="tel:+77777783040"><i class="icon-mobile"></i> +7 (777) 778-30-40</a></li>
            <li><a href="tel:+77252952024"><i class="icon-phone"></i> +7 (7252) 95-20-24</a></li>
            <li>номер в США:</li>
            <li><a href="tel:+41321260008"><i class="icon-phone"></i> +4 (132) 126-0008</a></li>
          </ul>
          <div class="footer-social">
            <ul>
              <li class="icon-tik-tok"><a href="https://vm.tiktok.com/ZMexDcYDE/"><i class="icon-tiktok"></i></a></li>
              <li class="icon-tg"><a href="https://t.me/mind_futures1"><i class="icon-paper-plane"></i></a></li>
              <li class="icon-fcbk"><a href="https://www.facebook.com/Mind-Futures-103374604849844/?hc_ref=ARR_pRnRDITSUlo7pzUa03qlgWi5mXYohwl9r4Kadz9YNq5_WARA02gBCZqzchWw8rM&amp;ref=nf_target&amp;__tn__=kC-R"><i class="icon-facebook"></i></a></li>
              <li class="icon-inst"><a href="https://www.instagram.com/mind_futures/"><i class="icon-instagram11"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="footer-contact-map">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor:e3388768c4e387fb2d8056ddd8f71fcdd0427b9a02007702d3d656853a628b17&amp;source=constructor" width="100%" height="280" frameborder="0"></iframe>
        </div>
      </div>
      <div class="footer-menu">
        <ul>
          <li><p>2019-2021 © Mind Futures</p></li>
          <li><a href="https://m-f.kz/limitation-of-liability/">Ограничение ответственности</a></li>
          <li><a href="https://m-f.kz/privacy-policy/">Политика конфиденциальности</a></li>
          <li><a href="https://m-f.kz/anti-corruptions/">Антикоррупционная политика</a></li>
        </ul>  
      </div>
    </div>
  </footer>
      
      <?php wp_footer(); ?>
      <script>
        $("#phone").mask("+7 (999) 999 - 9999",{autoclear:false});
      </script>
      <script>
        $('.team-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          navText : ["<i class=\"icon-chevron-left\"></i> ", "<i class=\"icon-chevron-right\"></i>"],
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:4
              },
              1000:{
                  items:4
              }
          }
      })
      </script>
      <script>
          $("#toggle > li > div").click(function() {
              if (false == $(this).next().is(':visible')) {
                  $('#toggle ul').slideUp();
              }

              var $currIcon = $(this).find("span.the-btn > i")

              $("span.the-btn > i").not($currIcon).addClass('icon-chevrons-down').removeClass('icon-chevrons-up');

              $currIcon.toggleClass('icon-chevrons-up icon-chevrons-down');

              $(this).next().slideToggle();

              $("#toggle > li > div").removeClass("active");
              $(this).addClass('active');
          });
      </script>
      <script>
          jQuery(document).ready(function() {
              var accordionsMenu = $('.cd-accordion-menu');

              if (accordionsMenu.length > 0) {

                  accordionsMenu.each(function() {
                      var accordion = $(this);
                      //detect change in the input[type="checkbox"] value
                      accordion.on('change', 'input[type="checkbox"]', function() {
                          var checkbox = $(this);
                          console.log(checkbox.prop('checked'));
                          (checkbox.prop('checked')) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300): checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);
                      });
                  });
              }
          });
      </script>
      <script>
          $(window).scroll(function() {
              if ($(this).scrollTop() > 80){  
                  $('.header-fixed').addClass("header-sticky-fixed");
              }
              else{
                  $('.header-fixed').removeClass("header-sticky-fixed");
              }
          });
          $(window).scroll(function() {
              if ($(this).scrollTop() > 80){  
                  $('.header-main').addClass("header-sticky-nav");
              }
              else{
                  $('.header-main').removeClass("header-sticky-nav");
              }
          });
      </script>
      <script>
        $(".js-video-button").modalVideo({
          youtube:{
            controls:0,
            nocookie: true
          }
        });
      </script>
  </body>
</html>
