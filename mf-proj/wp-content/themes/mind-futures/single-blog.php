<?php get_header(); ?>
<main>
    <div class="services-banner" style="background-image: url('<?php the_field('background__banner'); ?>')">
        <div class="container">
            <div class="services-banner__info">
                <h2><?php the_title(); ?></h2>
                <div class="services-breadcrumb">
                    <p><a href="https://m-f.kz/">Главная</a><i class="icon-cheveron-right"></i> <a href="https://m-f.kz/news/"> Новости</a> <i class="icon-cheveron-right"></i> <?php the_title(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="services-text">
                <!--<div class="services-text__img" style="background-image: url('img/services-banner/services-1.jpg')"></div>-->
                <div class="services-text__info">

                </div>
            </div>
        </div>
    <div class="subscribe">
        <div class="container">
            <div class="subscribe-form">
                <form>
                    <label>
                        Получать свежие инсайты, статьи,<br /> видео и методические материалы
                    </label>
                    <input type="text" placeholder="Ваше имя*" />
                    <input type="email" placeholder="E-mail*" />
                    <input class="subscribe-button btn-one" type="submit" placeholder="Подписаться">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contacts-title">
            <h2>Контакты</h2>
        </div>
        <div class="contact-block">
            <div class="contacts-map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor:e3388768c4e387fb2d8056ddd8f71fcdd0427b9a02007702d3d656853a628b17&amp;source=constructor" width="90%" height="373" frameborder="0"></iframe>
            </div>
            <div class="contacts-info">
                <h5>Казахстан, г. Шымкент, ул. Жансугирова 40</h5>
                <p>Заказать исследование</p>
                <a href="mailto:info@m-f.kz">info@m-f.kz</a>
                <div class="contacts-info__phone">
                    <div class="contacts-info__phones">
                        <a href="tel:+77027003040">+7 (702) 700-30-40</a><br />
                        <a href="tel:+77027005060">+7 (702) 700-50-60</a><br />
                        <a href="tel:+77252922024">+7 (7252) 92 20 24</a><br />
                        <p>номер в США:</p>
                        <a href="tel:+41321260008">+4 (132) 126-0008</a><br />
                    </div>
                    <div class="contacts-info__phones">
                        <p>график работы:</p>
                        <p><span>пн-пт с 9:00 до 18:00</span></p>
                        <p><span>сб, вс – выходной</span></p>
                        <p><span>работаем онлайн 24/7</span></p>
                        <a href="tel:+77027005060">+7 (702) 700-50-60</a><br />
                        <a href="tel:+77252922024">+7 (7252) 92 20 24</a><br />
                    </div>
                </div>
                <ul>
                    <li class="icon-fcbk"><a href=""><i class="icon-facebook"></i></a></li>
                    <li class="icon-inst"><a href=""><i class="icon-instagram1"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

    <?php get_footer(); ?>