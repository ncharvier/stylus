<?php get_header(); ?>

<h1>
    <?php the_title(); ?>
</h1>
<div class="content">
    <div class="container-featured">
        <?php the_post_thumbnail(); ?>
        <div class="text">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<h2 class="ml-2 mb-4">Our Services</h2>
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

<h2 class="ml-2 mt-6 mb-4">Our Partners</h2>
<div class="partners">
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<img src=" . get_theme_mod("img-upload$i", 'No partner image has been saved yet.') . ">";
    }
    ?>
</div>

<?php get_footer(); ?>