<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Ajouter la fonctionnalité de logo custom
add_theme_support('custom-logo');

// Add menu support
function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
    )
  );
}
add_action('init', 'register_my_menus');

// Style sheet loading
wp_enqueue_scripts('style', get_stylesheet_uri());
wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, '1.1', 'all');


$esgi_includes = array(
  '/enqueue.php',                         // Enqueue scripts and styles.
);

function wpc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

foreach ($esgi_includes as $file) {
  require_once get_theme_file_path($file);
}

function themename_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Primary Sidebar', 'esgi'),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Secondary Sidebar', 'esgi'),
    'id'            => 'sidebar-2',
    'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li></ul>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}

function customizer($wp_customize)
{
  $wp_customize->add_section(
    'example_section_one',
    array(
      'title' => 'Partners Section',
      'description' => 'Set up 6 images as partners of your brand.',
      'priority' => 35,
    )
  );

  $wp_customize->add_setting('img-upload1');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'img-upload1',
      array(
        'label' => 'Brand Partner 1',
        'section' => 'example_section_one',
        'settings' => 'img-upload1'
      )
    )
  );

  $wp_customize->add_setting('img-upload2');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'img-upload2',
      array(
        'label' => 'Brand Partner 2',
        'section' => 'example_section_one',
        'settings' => 'img-upload2'
      )
    )
  );

  $wp_customize->add_setting('img-upload3');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'img-upload3',
      array(
        'label' => 'Brand Partner 3',
        'section' => 'example_section_one',
        'settings' => 'img-upload3'
      )
    )
  );

  $wp_customize->add_setting('img-upload4');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'img-upload4',
      array(
        'label' => 'Brand Partner 4',
        'section' => 'example_section_one',
        'settings' => 'img-upload4'
      )
    )
  );

  $wp_customize->add_setting('img-upload5');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'img-upload5',
      array(
        'label' => 'Brand Partner 5',
        'section' => 'example_section_one',
        'settings' => 'img-upload5'
      )
    )
  );

  $wp_customize->add_setting('img-upload6');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'img-upload6',
      array(
        'label' => 'Brand Partner 6',
        'section' => 'example_section_one',
        'settings' => 'img-upload6',
      )
    )
  );

  $wp_customize->add_section(
    'example_section_two',
    array(
      'title' => 'Socials',
      'description' => 'Add up to 2 social contacts for your footer.',
      'priority' => 45,
    )
  );

  $wp_customize->add_setting('social-link1');
  $wp_customize->add_setting('social-image1');

  $wp_customize->add_control(
    'social-link1',
    array(
      'label' => 'Social link 1',
      'section' => 'example_section_two',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'social-image1',
      array(
        'label' => 'Social Image 1',
        'section' => 'example_section_two',
        'settings' => 'social-image1',
      )
    )
  );

  $wp_customize->add_setting('social-link2');
  $wp_customize->add_setting('social-image2');

  $wp_customize->add_control(
    'social-link2',
    array(
      'label' => 'Social link 2',
      'section' => 'example_section_two',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'social-image2',
      array(
        'label' => 'Social Image 2',
        'section' => 'example_section_two',
        'settings' => 'social-image2',
      )
    )
  );

  $wp_customize->add_section(
    'example_section_three',
    array(
      'title' => 'Contacts',
      'description' => 'Add up to 2 professional contacts for your footer.',
      'priority' => 47,
    )
  );

  $wp_customize->add_setting('title1');
  $wp_customize->add_setting('phone1');
  $wp_customize->add_setting('mail1');

  $wp_customize->add_control(
    'title1',
    array(
      'label' => 'Work title 1',
      'section' => 'example_section_three',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'phone1',
    array(
      'label' => 'Phone number 1',
      'section' => 'example_section_three',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'mail1',
    array(
      'label' => 'Email adress 1',
      'section' => 'example_section_three',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting('title2');
  $wp_customize->add_setting('phone2');
  $wp_customize->add_setting('mail2');

  $wp_customize->add_control(
    'title2',
    array(
      'label' => 'Work title 2',
      'section' => 'example_section_three',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'phone2',
    array(
      'label' => 'Phone number 2',
      'section' => 'example_section_three',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'mail2',
    array(
      'label' => 'Email adress 2',
      'section' => 'example_section_three',
      'type' => 'text',
    )
  );

  $wp_customize->add_section(
    'example_section_four',
    array(
      'title' => 'Services',
      'description' => 'Add up to 4 services to display to your clients.',
      'priority' => 49,
    )
  );

  $wp_customize->add_setting('image_service1');
  $wp_customize->add_setting('title_service1');
  $wp_customize->add_setting('url1');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image-service1',
      array(
        'label' => 'Image Service 1',
        'section' => 'example_section_four',
        'settings' => 'image_service1',
      )
    )
  );

  $wp_customize->add_control(
    'title_service1',
    array(
      'label' => 'Replacement text for service 1',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'url1',
    array(
      'label' => 'Link for image',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting('image_service2');
  $wp_customize->add_setting('title_service2');
  $wp_customize->add_setting('url2');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image-service2',
      array(
        'label' => 'Image Service 2',
        'section' => 'example_section_four',
        'settings' => 'image_service2',
      )
    )
  );

  $wp_customize->add_control(
    'title_service2',
    array(
      'label' => 'Replacement text for service 2',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'url2',
    array(
      'label' => 'Link for image',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting('image_service3');
  $wp_customize->add_setting('title_service3');
  $wp_customize->add_setting('url3');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image-service3',
      array(
        'label' => 'Image Service 3',
        'section' => 'example_section_four',
        'settings' => 'image_service3',
      )
    )
  );

  $wp_customize->add_control(
    'title_service3',
    array(
      'label' => 'Replacement text for service 3',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'url3',
    array(
      'label' => 'Link for image',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting('image_service4');
  $wp_customize->add_setting('title_service4');
  $wp_customize->add_setting('url4');

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'image-service4',
      array(
        'label' => 'Image Service 4',
        'section' => 'example_section_four',
        'settings' => 'image_service4',
      )
    )
  );

  $wp_customize->add_control(
    'title_service4',
    array(
      'label' => 'Replacement text for service 4',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );

  $wp_customize->add_control(
    'url4',
    array(
      'label' => 'Link for image',
      'section' => 'example_section_four',
      'type' => 'text',
    )
  );
}
add_action('customize_register', 'customizer');

function html5_search_form( $form ) {
  $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
  <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
   <input type="search" value="' . get_search_query() . '" name="s" id="searchinput" placeholder="Type to search" />
   <input type="submit" id="searchsubmit" value="'. esc_attr__('Go', 'domain') .'" />
   </form></section>';
  return $form;
}


add_filter( 'get_search_form', 'html5_search_form' );
