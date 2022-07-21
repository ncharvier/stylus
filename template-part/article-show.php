<?php
/**
 * Template part for article in blog.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $post = get_post(the_ID());?>
    <?=$post->post_title;?>
    <?=$post->post_content;?>
</article><!-- #post-<?php the_ID(); ?> -->
