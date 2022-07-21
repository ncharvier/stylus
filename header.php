<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="py-2 px-5" id="site-header">
    <div class="d-flex justify-content-between">
        <span>
            <?=$logo = get_custom_logo()?>
        </span>
        <button id="menu-btn">
            <?=getIcon('menu')?>
        </button>
    </div>
    <nav>
        <div>
            <?php get_search_form(); ?>
        </div>
        <div>

        </div>
    </nav>
</header>

<script>
    const header = $("#site-header");
    $("#menu-btn").click(function (){
        if (header.hasClass("open")){
            header.removeClass("open");
        } else {
            header.addClass("open");
        }
    });
</script>