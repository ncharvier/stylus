<?php get_header(); ?>

<h1>
    <?php the_title(); ?>
</h1>
<div class="ml-2 emph-text w-auto">
    <?php the_content(); ?>
</div>
<div class="content">
        <?php the_post_thumbnail(); ?>
</div>

<?php get_footer(); ?>