<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('esgi_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function esgi_scripts()
    {
        // Get the theme data.
        $the_theme         = wp_get_theme();
        $theme_version     = $the_theme->get( 'Version' );

        // Grab asset urls.
        $theme_styles  = "/css/theme.css";
        $theme_scripts = "/js/theme.js";

        $css_version = filemtime(get_template_directory() . $theme_styles);
        wp_enqueue_style('esgi-styles', get_template_directory_uri() . $theme_styles, array(), $css_version);
        
        $js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
		wp_enqueue_script( 'esgi-scripts', get_template_directory_uri() . $theme_scripts, array(), $js_version, true );
    }
} // End of if function_exists( 'esgi_scripts' ).

add_action('wp_enqueue_scripts', 'esgi_scripts');