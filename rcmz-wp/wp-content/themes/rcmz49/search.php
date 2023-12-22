<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="search__result">
                <h4>По запросу: "<?php echo $_GET['s'];?>"</h4>
                <div class="search__result_list">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="search__result_item">
                         <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                         <div class="search__result_content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile; else: ?>
                    <div class="search__result_item">
                        <p>Поиск не дал результатов</p>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>