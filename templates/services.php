<?php
/*
Template Name: Our Services
*/
?>

<?php get_header(); ?>

<h1>
    <?php the_title(); ?>
</h1>
<div>
    <div class="services">
        <?php
        for ($i = 1; $i <= 4; $i++) :
            if (get_theme_mod("image_service$i", "") !== "") :
                if(get_theme_mod("url$i", "") !== "") :
                    echo "<a href=\"" . get_theme_mod("url$i") . "\">";
                endif;
                echo "<img class=\"image-service\" src=" . get_theme_mod("image_service$i") . ">";
                if(get_theme_mod("url$i", "") !== "") :
                    echo "</a>";
                endif;
            elseif (get_theme_mod("url$i", "") !== "") : ?>
                    <a href="<?= get_theme_mod("url$i") ?>">
                <?php if (get_theme_mod("image_service$i", "") !== "") :
                            echo "<img src=" . get_theme_mod("img$i") . ">";
                    elseif (get_theme_mod("title_service$i", "") !== "") :
                            echo "<span class=\"title-service\">" . get_theme_mod("title_service$i") . "</span>";
                    endif; ?>
                    </a>
            <?php
            elseif (get_theme_mod("title_service$i", "") !== "") :
                if(get_theme_mod("url$i", "") !== "") :
                    echo "<a class=\"resize-link\" href=\"" . get_theme_mod("url$i") . "\">";
                endif;
                echo "<div class=\"title-service\"><span class=\"highlight linear\">" . get_theme_mod("title_service$i") . "</span></div>";
                if(get_theme_mod("url$i", "") !== "") :
                    echo "<a href=\"" . get_theme_mod("url$i") . "\">";
                endif;
            endif;

        endfor;
        ?>
    </div>
    <div class="emph-text">
    <?php the_content(); ?>
    </div>
    
</div>

<?php get_footer(); ?>