<?php
/*
Template Name: About us
*/
?>

<?php get_header(); ?>

<h1>
    <?php the_title(); ?>
</h1>
<div class="content">
    <div class="featured">
        <!-- <div class="text"> -->
        <!-- Title -->
        <?php $post = get_page_by_title('about us'); ?>

        <!-- Content -->
        <?php
        $blocks = parse_blocks($post->post_content);
        echo "<div class=\"container-featured\"><div class= \"w-60\">";
        the_post_thumbnail();
        echo "<div class=\"text-featured\">";
        echo $blocks[0]['innerContent'][0];
        echo $blocks[2]['innerContent'][0];
        echo "</div></div></div>";
        ?>

        <div class="side-content">
            <?php $blocks = parse_blocks($post->post_content); ?>
            <div class="container-figure">
                <?= $blocks[4]['innerContent'][0]; ?>
            </div>

            <div class="bullet-items">
                <?php
                for ($i = 6; $i <= 16; $i++) :
                    echo $blocks[$i]['innerContent'][0];
                endfor;
                ?>
            </div>



        </div>
    </div>
</div>

<?php get_footer(); ?>