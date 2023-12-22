<?php
/*
Template Name: Singe Project
*/
?>
<?php get_header(); ?>
<section class="vk-content">
        <div class="vk-banner vk-background-image-3">
            <div class="vk-background-overlay vk-background-black-1 _80"></div>
            <div class="container wrapper">
            	<?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="page-heading">
                    <?php the_field('project_preview_title'); ?>
                </div>
                	<?php endwhile;
                    endif; ?>
                <?php  wp_reset_postdata(); ?>
            </div>	
        </div>
        <!--./vk-banner-->
        <div class="vk-breadcrumb">
            <nav class="container">
                <ul>

                    <li><a href="index.html">Главная</a></li>

                    <li><a href="#">Проекты</a></li>

                    <li class="active">Индустриальная Зона "Жулдыз"</li>
                </ul>
            </nav>
        </div>
        <!--./vk-breadcrumb-->
        <div class="vk-page vk-page-project vk-single-project">
            <div class="container">
                <div class="vk-slider-project">

                    <div class="slider-for">

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-1.jpg" alt="">

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-2.jpg" alt="">

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-3.jpg" alt="">

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-4.jpg" alt="">

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-5.jpg" alt="">

                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-6.jpg" alt="">


                    </div>
                    <div class="slider-nav row">

                        <div class="col-md-2">
                            <div class="vk-img-frame">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-thumb-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="vk-img-frame">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-thumb-2.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="vk-img-frame">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-thumb-3.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="vk-img-frame">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-thumb-4.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="vk-img-frame">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-thumb-5.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="vk-img-frame">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/project/single-project/img-thumb-6.jpg" alt="">
                            </div>
                        </div>

                    </div>

                </div>
                <!--./vk-slider-project-->

                <div class="vk-content-single-project">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info">
                                <h4 class="vk-title text-uppercase">Информация о проекте</h4>
                                <table>
                                    <tbody>
                                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                                        <tr>
                                            <th>Проект:</th>
                                            <td><?php the_title(); ?></td>
                                        </tr>
                                        <?php endwhile;
                                            endif; ?>
                                        <?php  wp_reset_postdata(); ?>
                                        
                                        <?php if( get_field("project_industry") ): ?>
                                        <tr>
                                            <th>Отрасль:</th>
                                            <td><?php the_field( "project_industry" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_date") ): ?>
                                        <tr>
                                            <th>Сроки проекта:</th>
                                            <td><?php the_field( "project_date" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_initiar") ): ?>
                                        <tr>
                                            <th>Инициатор:</th>
                                            <td><?php the_field( "project_initiar" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_person") ): ?>
                                        <tr>
                                            <th>Ответственное лицо:</th>
                                            <td><?php the_field( "project_person" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_place") ): ?>
                                        <tr>
                                            <th>Место реализации:</th>
                                            <td><?php the_field( "project_place" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_square") ): ?>
                                        <tr>
                                            <th>Площадь:</th>
                                            <td><?php the_field( "project_square" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_directions") ): ?>
                                        <tr>
                                            <th>Направления:</th>
                                            <td>
                                                <?php the_field( "project_directions" ); ?>
                                            </td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_state_vnt") ): ?>
                                        <tr>
                                            <th>Текущее состояние:</th>
                                            <td><?php the_field( "project_state_vnt" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_planned_investments") ): ?>
                                        <tr>
                                            <th>Планируемые инвестиции:</th>
                                            <td><?php the_field( "project_planned_investments" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_job") ): ?>
                                        <tr>
                                            <th>Создание рабочих мест:</th>
                                            <td><?php the_field( "project_job" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_result") ): ?>
                                        <tr>
                                            <th>Ожидаемый результат:</th>
                                            <td><?php the_field( "project_result" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_phone") ): ?>
                                        <tr>
                                            <th>Тел:</th>
                                            <td><?php the_field( "project_phone" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                        <?php if( get_field("project_email") ): ?>
                                        <tr>
                                            <th>E-mail:</th>
                                            <td><?php the_field( "project_email" ); ?></td>
                                        </tr>
                                        <?php else :?>
                                        <?php endif; ?>

                                </tbody></table>
                            </div>
                            <!-- ./info-->
                        </div>
                        <!-- ./left-->

                        <div class="col-md-6">
                            <div class="info description">
                                <h4 class="vk-title text-uppercase">Цель проекта</h4>
                                <?php if( get_field("project_objective") ): ?>
                                    <?php the_field('project_objective'); ?>
                                <?php else :?>
                                <?php endif; ?>
                            </div>
                            <!-- ./des-->
                        </div>
                        <!-- ./right-->
                    </div>
                    <!-- ./row-->
                </div>
                <!-- ./vk-content-single-project-->
            </div>
            <!-- ./container-->
        </div>
        <!-- ./vk-page-->

    </section>

    <?php get_footer(); ?>