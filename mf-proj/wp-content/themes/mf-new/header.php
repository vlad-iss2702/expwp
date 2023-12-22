<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="facebook-domain-verification" content="oe3329rhc0xs5mkx9clg9w8cwl1aik" />
    <!--<title><?php the_title(); ?><?php echo(' | ') ?><?php bloginfo('name'); ?></title>-->

    <!--<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/assets/plugin/slick/slick-theme.css"/>-->
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-top">
                <div class="header-top__logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/valenti-logo-20.png" alt="Логотип" />
                </div>
                <div class="header-top__banner">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/15zine-da-l.png" alt="Баннер в шапке" />
                </div>
            </div>
            <div class="header-menu">
                <ul>
                    <li><a href="#">Features<i class="icon-add"></i></a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Fashion<i class="icon-add"></i></a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Homepages</a></li>
                    <li><a href="#">Shop<i class="icon-add"></i></a></li>
                </ul>
            </div>
            <div class="header-breaking">
                <div class="breaking__title">Breaking</div>
                <div class="breaking__icon"><i class="icon-long-arrow-right"></i></div>
                <div class="owl-carousel owl-theme breaking__slider">
                    <div class="breaking__slider-item"><a href="">Services One</a></div>
                    <div class="breaking__slider-item"><a href="">Services Twho</a></div>
                    <div class="breaking__slider-item"><a href="">Services Three</a></div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-mobile">
  <button class="mobile-button-open"><i class="icon-list"></i></button>
  <button class="mobile-button-close"><i class="icon-close"></i></button>
  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/valenti-logo-footer.png" alt="Логотип" />
</div>
<div class="mobile-menu">
  <div class="mobile-menu-logo">
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/valenti-logo-20.png" alt="">
  </div>
    <ul>
      <li><a href="#">Features<i class="icon-add"></i></a></li>
      <li><a href="#">Music</a></li>
      <li><a href="#">Fashion<i class="icon-add"></i></a></li>
      <li><a href="#">Design</a></li>
      <li><a href="#">Homepages</a></li>
      <li><a href="#">Shop<i class="icon-add"></i></a></li>
    </ul>
</div>