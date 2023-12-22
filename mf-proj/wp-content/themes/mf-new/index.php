<?php get_header(); ?>
<main>
        <div class="container">
            <div class="main-back">
                <div class="main-services">
                    <?php $top_query = new WP_Query('showposts=2&cat=18'); ?>
                    <div class="main-services__top">
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                            <div class="main-services__top-item">
                                <a class="main-services__link" href="<?php the_field('services_new_link');?>" style="background-image: url('<?php the_field('services_new_img');?>')"></a>
                                <div class="main-services__name">
                                    <a href="<?php the_field('services_new_link');?>"><p><?php the_title(); ?></p></a>
                                </div>
                            </div>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                    <?php $top_query = new WP_Query('showposts=4&cat=18&offset=2'); ?>
                    <div class="main-services__bottom">
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                        <div class="main-services__bottom-item">
                            <a class="main-services__link-bottom" href="<?php the_field('services_new_link');?>" style="background-image: url('<?php the_field('services_new_img');?>')"></a>
                            <div class="main-services__name-bottom">
                               <a href="<?php the_field('services_new_link');?>"><p><?php the_title(); ?></p></a>
                            </div>
                        </div>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                </div>
                <div class="services-slider">
                    <div class="services-slider-back">
                        <div class="services-slider__title">
                            <h3>LATEST MUSIC</h3>
                            <p>This is an optional category description</p>
                        </div>
                    </div>
                    <?php $top_query = new WP_Query('showposts=2&cat=19'); ?>
                    <div class="owl-carousel owl-theme services__carousel">
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                        <div class="services__carousel-item">
                            <a href="<?php the_field('services_new_link');?>" class="services__carousel-link" style="background-image: url('<?php the_field('services_new_img'); ?>')">
                                <div class="services__carousel-overlay"></div>
                            </a>
                            <h4><a href="<?php the_field('services_new_link');?>"><?php the_title(); ?></a></h4>
                        </div>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                </div>
                <div class="services-black">
                    <div class="services-black-back">
                        <div class="services-black__title">
                            <h3>FASHIONISTAS</h3>
                            <p>This is an optional subtitle</p>
                        </div>
                    </div>
                    <?php $top_query = new WP_Query('showposts=3&cat=20'); ?>
                    <div class="services-black__list">
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                        <div class="services-black__item">
                            <a class="services-black__images" href="<?php the_field('services_new_link');?>">
                                <img src="<?php the_field('services_new_img'); ?>" alt="" />
                            </a>
                            <a href="<?php the_field('services_new_link');?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <p><?php the_field('services_newpre_text');?></p>
                        </div>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/15zine-da-xl.png" alt="" style="margin: 40px auto 0 auto; text-align: center; display: block;">
                </div>
                <div class="services-sidebar">
                    <div class="services-black__left">
                        <div class="services-sidebar__item background-black">
                            <div class="services-sidebar__title">
                                <h4>ROCK & ROLL</h4>
                                <p>This is an optional subtitle</p>
                            </div>
                            <?php $top_query = new WP_Query('showposts=1&cat=21'); ?>
                            <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                            <div class="sidebar__item-black-one">
                                <a class="sidebar-black__images" href="">
                                    <img src="<?php the_field('services_new_img'); ?>" alt="" />
                                </a>
                                <div class="sidebar-black__info">
                                    <a href="">
                                        <h4><?php the_title(); ?></h4>
                                    </a>
                                    <p><?php the_field('services_newpre_text'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?><?php endif; ?>
                            <?php $top_query = new WP_Query('showposts=4&cat=21&offset=1'); ?>
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
                        <div class="services-sidebar__item background-gray">
                            <div class="services-sidebar__title">
                                <h4>GAMES</h4>
                                <p>This is an optional subtitle</p>
                            </div>
                            <?php $top_query = new WP_Query('showposts=5&cat=22&'); ?>
                            <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                            <div class="background-gray__item">
                                <a href="<?php the_field('services_new_img'); ?>"><h4><?php the_title(); ?></h4></a>
                                <p><?php the_field('services_newpre_text'); ?></p>
                            </div>
                            <?php endwhile; ?><?php endif; ?>
                        </div>
                    </div>
                    <div class="services-black__right">
                        <div class="services-black__title black__right">
                            <h3>VALENTI SOCIAL MEDIA</h3>
                        </div>
                        <div class="sidebar__icons">
                            <ul>
                                <li>
                                    <a class="sidebar__icons-facebook" href="">
                                        <span><i class="icon-facebook"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidebar__icons-twitter" href="">
                                        <span><i class="icon-twitter"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidebar__icons-youtube" href="">
                                        <span><i class="icon-youtube"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="services-black__title black__right">
                            <h3>TAGS</h3>
                        </div>
                        <div class="sidebar__tags">
                            <ul>
                                <li><a href="">Arts</a></li>
                                <li><a href="">Beats</a></li>
                                <li><a href="">Beauty</a></li>
                                <li><a href="">Design</a></li>
                                <li><a href="">Exotic</a></li>
                                <li><a href="">Gadgets</a></li>
                                <li><a href="">Games</a></li>
                                <li><a href="">Outdoors</a></li>
                                <li><a href="">Retro</a></li>
                                <li><a href="">Reviews</a></li>
                                <li><a href="">Rock & Roll</a></li>
                                <li><a href="">Travel</a></li>
                                <li><a href="">Trendy</a></li>
                                <li><a href="">Valenti</a></li>
                            </ul>
                        </div>
                        <div class="services-black__title black__right">
                            <h3>VALENTI LATEST SLIDER</h3>
                        </div>
                        <div class="sidebar__latest">
                            <div class="owl-carousel owl-theme sidebar__latest-carousel">
                                <?php $top_query = new WP_Query('showposts=5&cat=23'); ?>
                                <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                                <a href="<?php the_field('services_new_link');?>" class="sidebar__latest-item" style="background-image: url('<?php the_field('services_new_img');?>')">
                                    <span class="latest__carousel-overlay"></span>
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <?php endwhile; ?><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="services__unical">
                    <?php $top_query = new WP_Query('showposts=1&cat=24&offset=0'); ?>
                    <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                    <div class="services__unical-one">
                        <a class="services__unical-link" href="<?php the_field('services_new_link'); ?>" style="background-image: url('<?php the_field('services_new_img'); ?>')"></a>
                        <div class="services__unical-name-bottom">
                            <a href="<?php the_field('services_new_link'); ?>">
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?><?php endif; ?>

                    <div class="services__unical-two">
                        <?php $top_query = new WP_Query('showposts=2&cat=24&offset=1'); ?>
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                            <div class="unical-two-item">
                                <a class="services__unical-link" href="<?php the_field('services_new_link'); ?>" style="background-image: url('<?php the_field('services_new_img'); ?>')"></a>
                                <div class="services__unical-name-bottom">
                                    <a href="<?php the_field('services_new_link'); ?>">
                                        <p><?php the_title(); ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?><?php endif; ?>

                    </div>
                    <div class="services__unical-two">
                        <?php $top_query = new WP_Query('showposts=2&cat=24&offset=3'); ?>
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                        <div class="unical-two-item">
                            <a class="services__unical-link" href="<?php the_field('services_new_link'); ?>" style="background-image: url('<?php the_field('services_new_img'); ?>')"></a>
                            <div class="services__unical-name-bottom">
                                <a href="<?php the_field('services_new_link'); ?>">
                                    <p><?php the_title(); ?></p>
                                </a>
                            </div>
                        </div>
                        <?php endwhile; ?><?php endif; ?>   
                    </div>
                    <?php $top_query = new WP_Query('showposts=1&cat=24&offset=5'); ?>
                    <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                    <div class="services__unical-one">
                        <a class="services__unical-link" href="<?php the_field('services_new_link'); ?>" style="background-image: url('<?php the_field('services_new_img'); ?>')"></a>
                        <div class="services__unical-name-bottom">
                            <a href="<?php the_field('services_new_link'); ?>">
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?><?php endif; ?>
                </div>
                <div class="services__bottom">
                    <div class="services__bottom-left">
                        <div class="services__bottom-title">
                            <h4>Places</h4>
                            <p>This is an optional subtitle</p>
                        </div>
                        <div class="owl-carousel owl-theme services__bottom-carousel">
                            <?php $top_query = new WP_Query('showposts=12 &cat=25'); ?>
                            <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                            <a href="<?php the_field('services_new_link'); ?>" class="services__bottom-carousel-item" style="background-image: url('<?php the_field('services_new_img'); ?>')">
                                <span class="latest__carousel-overlay"></span>
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <?php endwhile; ?><?php endif; ?>
                        </div>
                        <div class="services__bottom-items">
                            <?php $top_query = new WP_Query('showposts=2&cat=26'); ?>
                            <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                            <div class="services__bottom-item">
                                <a href="<?php the_field('services_new_link'); ?>"><img src="<?php the_field('services_new_img'); ?>" alt="" /></a>
                                <a class="services__bottom-link" href="<?php the_field('services_new_link'); ?>">
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <p><?php the_field('services_newpre_text'); ?></p>
                            </div>
                            <?php endwhile; ?><?php endif; ?>
                        </div>
                    </div>
                    <div class="services__bottom-right">
                        <div class="services-black__title black__right">
                            <h3>REVIEW WIDGET</h3>
                        </div>
                        <?php $top_query = new WP_Query('showposts=3&cat=27'); ?>
                        <?php if ( have_posts() ) : while ( $top_query->have_posts() ) : $top_query->the_post(); $first_post = $post->ID; ?>
                        <div class="bottom-right__item">
                            <a href="<?php the_field('services_new_link'); ?>">
                                <img src="<?php the_field('services_new_img'); ?>" alt="" />
                                <span class="bottom-overlay"></span>
                                <!--<span class="bottom-number">1</span>-->
                            </a>
                            <a class="services__bottom-item-link" href="<?php the_field('services_new_link'); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                        </div>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>