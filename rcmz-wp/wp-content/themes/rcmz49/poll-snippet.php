        <!-- Это часть кода для вставки при смене вопросов в блоке с Опросом -->
        <div class="activity__test mb-5" style="background-image: url(<?php the_field('snippet__background'); ?>);">
          <div class="activity__test_overlay"></div>
          <!-- Место вставки кода для формирования нового Опроса -->
          <style>
            /* Стили для опроса */
            .activity__test {
              overflow: hidden;
              height: 100% !important;
              position: relative;
              padding: 0 0 !important;
            }
            .activity__test_overlay {
              position: absolute;
              width: 100%;
              height: 100%;
              background-color: #0000004a;
            }
            .activity__iframe {
              max-width: 500px;
              max-height: 595px;
              margin-top: 0px;
              margin-right: auto;
              margin-left: auto;
              position: relative;
            }
            iframe {
              width: 100%;
              min-width: 320px;
              max-width: 600px;

              border: 0;
            }
          </style>
          <div class="activity__iframe"
            style="max-width:500px; margin-top: 0px; margin-left: auto; margin-right: auto;">
            <!--<script src="https://yastatic.net/q/forms-frontend-ext/_/embed.js"></script>
            <iframe src="https://forms.yandex.ru/u/6009e5c78249656ce4849f7c/?iframe=1" frameborder="0"
              name="ya-form-6009e5c78249656ce4849f7c"></iframe>-->
              <?php the_field('snippet__script'); ?>
          </div>
          <!-- End Место вставки кода для формирования нового Опроса -->
        </div>