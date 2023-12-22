
  <footer>
        <div class="container">
            <div class="footer">
                <div class="footer-item">
                    <div class="footer-logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/valenti-logo-footer.png" alt="" />
                    </div>
                    <div class="footer-info">
                        <p>Valenti is a much loved premium WordPress review magazine theme. Take your site to the next level. Vestibulum et aliquet nisi dapibus non velit sit amet, enean pretium sodales orci ultrices.</p>
                    </div>
                    <div class="footer-title">
                        <p><span>VALENTI WIDGET</span></p>
                    </div>
                    <div class="footer-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/valenti-da-widget.png" alt="" />
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/valenti-da-widget.png" alt="" />
                    </div>
                </div>
                <div class="footer-item">
                    <div class="footer-title">
                        <p><span>VALENTI WIDGET</span></p>
                    </div>
                    <div class="footer-services">
                        <?php $top_query = new WP_Query('showposts=4&cat=28'); ?>
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                            <div class="sidebar-black__vertical">
                                <div class="sidebar-black__vertical-img">
                                    <a href="<?php the_field('services_new_link'); ?>">
                                        <div style="background-image: url('<?php the_field('services_new_img'); ?>')"></div>
                                    </a>
                                </div>
                                <div class="sidebar-black__vertical-info">
                                    <a href="<?php the_field('services_new_img'); ?>"><h4><?php the_title(); ?></h4></a>
                                    <p><?php the_field('services_new_post_title'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="footer-title">
                        <p><span>VALENTI WIDGET</span></p>
                    </div>
                    <div class="owl-carousel owl-theme footer__latest-carousel">
                        <?php $top_query = new WP_Query('showposts=4&cat=29'); ?>
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                        <a href="<?php the_field('sercices_new_link'); ?>" class="footer__latest--item" style="background-image: url('<?php the_field('services_new_img'); ?>')">
                            <span class="footer__carousel-overlay"></span>
                            <h4><?php the_title(); ?></h4>
                            <span class="bottom-overlay"></span>
                        </a>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                    <div class="footer-title">
                        <p><span>Search</span></p>
                    </div>
                    <div class="footer-search">
                        <input type="search" placeholder="Search">
                        <button class="tipi-i-search-thin search-submit" type="submit" value="" aria-label="search"><i class="icon-magnifier_magnifying_glass_icon_149435"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
      <?php wp_footer(); ?>
      <script>
          $('.mobile-button-open').click(function(){
		    $('.header-mobile, main, .mobile-menu').toggleClass('translate-right');
            $('body, html').toggleClass('overflow-hidden');
	    });
        $('.mobile-button-close').click(function(){
            $('.header-mobile, main, .mobile-menu').removeClass('translate-right');
            $('body, html').removeClass('overflow-hidden');
        });
      </script>
  </body>
</html>
