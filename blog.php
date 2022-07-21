<?php

/*
 * Template Name: blog.php
 * */

?>
<?php get_header(); ?>

    <main id="site-content">
        <div class="container">
            <h1>Blog.</h1>
            <div class="row">
                <div class="sidebar col-3">
                    <div class="sidebar-title">Search</div>
                    <?php get_search_form(); ?>
                    <div class="sidebar-title">Recent posts</div>
                    <div class="sidebar-title">Archive</div>
                    <div class="sidebar-title">Catégories</div>
                    <?php get_all_categories();?>
                    <div class="sidebar-title">Tags</div>
                </div>
                <div class="article col-9">
                    <?php 
                    if (have_posts()) :
                        while (have_posts()): the_post();
                            /* if (!is_single()) :  */
                                the_title('<h3>', '</h3>');
                                /* the_content(); */
                            /* endif; */
                            /* get_template_part('template-part/article-content'); */
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
