    <!--<div class="subscribe">
        <div class="container">
            <div class="subscribe-form">
                <div class="subscribe-left">
                    <p>Закажите бесплатный звонок<br /> или консультацию сейчас</p>
                    <p><a data-remodal-target="form">Получить консультацию</a></p>
                </div>
                <div class="subscribe-right">
                    <p><a data-remodal-target="form"><i class="icon-phone"></i></a></p>
                </div>
            </div>
        </div>
    </div>-->
    <?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
    <div class="subscribe-link__crumb">
        <a data-remodal-target="form">Получить консультацию</a>
    </div>
    <div class="container">
        <div class="services-contact">
            <p>Написать на нашу почту: <a href="mailto:info@m-f.kz">info@m-f.kz</a></p>
            <!--<p>Общий прайс услуг: <a href="#">Скачать прайс <i class="icon-document-file-pdf"></i></a></p>-->
        </div>
    </div>
    <?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
        <div class="subscribe-link__crumb">
            <a data-remodal-target="form">Кеңес алу</a>
        </div>
        <div class="container">
            <div class="services-contact">
                <p>Біздің хатқа жазыңыз: <a href="mailto:info@m-f.kz">info@m-f.kz</a></p>
                <!--<p>Общий прайс услуг: <a href="#">Скачать прайс <i class="icon-document-file-pdf"></i></a></p>-->
            </div>
        </div>
    <?php endif; ?>