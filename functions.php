<?php
if ( ! isset( $content_width ) ) {
  $content_width = 960;
}


// Featured Image support
add_theme_support( 'post-thumbnails' );

// Feed Links
add_theme_support( 'automatic-feed-links' );

// Title Tag
add_theme_support( "title-tag" );


// Sidebar
function sidebar_widgets_init() {
  register_sidebar( array(
    'name'          => 'Main Sidebar',
    'id'            => 'main_sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'sidebar_widgets_init' );

// Custom Header
add_theme_support( "custom-header");

// Custom Background
add_theme_support( "custom-background");

// Editor Stylesheet
function wpclean_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wpclean_add_editor_styles' );

// Customizer
function wpclean_customize_register($wp_customize)
{
  $wp_customize->add_section("ads", array(
    "title" => __("Advertising", "customizer_ads_sections"),
    "priority" => 30,
  ));
}

add_action("customize_register","wpclean_customize_register");

// Text Domain
load_theme_textdomain( 'wpclean', get_template_directory().'/languages' );
