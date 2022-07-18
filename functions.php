<?php 

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );


function getIcon($name){
    
    $facebook = '<svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.4008 18L3.375 10.125H0V6.75H3.375V4.5C3.375 1.4634 5.25545 0 7.9643 0C9.26187 0 10.3771 0.0966038 10.7021 0.139781V3.3132L8.82333 3.31406C7.35011 3.31406 7.06485 4.01411 7.06485 5.04139V6.75H11.25L10.125 10.125H7.06484V18H3.4008Z" fill="#1A1A1A"/>
</svg>';

    $linkedIn = '<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.9698 0H1.64687C1.19966 0 0.864258 0.335404 0.864258 0.782609V17.2174C0.864258 17.5528 1.19966 17.8882 1.64687 17.8882H18.0816C18.5289 17.8882 18.8643 17.5528 18.8643 17.1056V0.782609C18.7525 0.335404 18.4171 0 17.9698 0ZM3.54749 15.205V6.70807H6.23072V15.205H3.54749ZM4.8891 5.59006C3.99469 5.59006 3.32389 4.80745 3.32389 4.02484C3.32389 3.13043 3.99469 2.45963 4.8891 2.45963C5.78351 2.45963 6.45432 3.13043 6.45432 4.02484C6.34252 4.80745 5.67171 5.59006 4.8891 5.59006ZM16.0692 15.205H13.386V11.0683C13.386 10.0621 13.386 8.8323 12.0444 8.8323C10.7028 8.8323 10.4792 9.95031 10.4792 11.0683V15.3168H7.79593V6.70807H10.3674V7.82609C10.7028 7.15528 11.5972 6.48447 12.827 6.48447C15.5102 6.48447 15.9574 8.27329 15.9574 10.5093V15.205H16.0692Z" fill="#1A1A1A"/>
</svg>';

	return $$name;

}

function stylus_customize_register($wp_customize)
{
    $wp_customize->add_section( 'esgi-custom', [
        'title' => __('Personnalisation du thème'),
        'description' => __('Paramètres du thème.'),
        'priority' => 1,
        'capability' => 'edit_theme_options',
    ] );

    $wp_customize->add_setting('url_facebook', [
        'default' => null,
    ]);

    $wp_customize->add_control('url_facebook', [
        'type' => 'text',
        'section' => 'esgi-custom', // Add a default or your own section
        'label' => __('url du facebook'),
        'description' => __('url du facebook'),
    ]);

    $wp_customize->add_setting( 'url_linkedin', [
        'default' => null,
    ] );

    $wp_customize->add_control( 'url_linkedin', [
        'type' => 'text',
        'section' => 'esgi-custom', // Add a default or your own section
        'label' => __( 'url du linkedin' ),
        'description' => __( 'url du linkedin' ),
    ] );
}

add_action('customize_register', 'stylus_customize_register');

function ajax_load_posts(){
    // page demandée
    $paged = $_POST['page']; 
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'post_status' => 'publish',
        'paged' => $paged
    ];
    $the_query = new WP_Query($args);
    // Mise en buffer
    ob_start(); // ouverture du buffer
    include('template-parts/post-list.php');
    // Récupération du contenu du buffer
    echo ob_get_clean(); // fermeture du buffer
    wp_die();
}

    





