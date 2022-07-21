<?php
/*
Template Name: Partners
*/
?>

<?php get_header(); ?>

<h1>
    <?php the_title(); ?>
</h1>

<div class="partners">
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<img src=" . get_theme_mod("img-upload$i", 'No partner image has been saved yet.') . ">";
    }
    ?>
</div>

<?php get_footer(); ?>