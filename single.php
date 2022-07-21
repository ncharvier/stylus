<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <header><h1><?php the_title();?></h1></header>
            <div class="text ml-2 mb-4">
            <?php the_content(); ?>
            </div>
            
        </article>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>