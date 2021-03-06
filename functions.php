<?php
if ( ! isset( $content_width ) ) {
  $content_width = 960;
}


// Featured Image support
add_theme_support( 'post-thumbnails' );

// Image sizes
//add_image_size( '640x360', 640, 360, true);

// Menu
register_nav_menus( array(
    'main' => 'Menú Principal',
    'submenu' => 'Sub Menú'
) );

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
function wc_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wc_add_editor_styles' );

// Enqueue Styles
function wc_enqueue_style() {
    wp_enqueue_style(
        'owl-css',
        get_template_directory_uri() . '/lib/owl-carousel/owl.carousel.css',
        null,
        '1.3.3'
    );
    wp_enqueue_style(
        'owl-theme',
        get_template_directory_uri() . '/lib/owl-carousel/owl.theme.css',
        null,
        '1.3.3'
    );
    wp_enqueue_style(
        'wc-css',
        get_template_directory_uri() . '/css/styles.css',
        null,
        '1.0.0'
    );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wc_enqueue_style' );

// Enqueue Scripts
function wc_enqueue_scripts() {
    //jQuery
    wp_enqueue_script('jquery');
    //wp_enqueue_script('jquery-masonry');

    wp_enqueue_script('owl-js', get_bloginfo('template_url') . '/lib/owl-carousel/owl.carousel.min.js', null, '1.3.3', true);
    wp_enqueue_script('bootstrap', get_bloginfo('template_url') . '/js/bootstrap.min.js', null, '3.3.7', true);
    wp_enqueue_script('wc-scripts', get_bloginfo('template_url') . '/js/scripts.js', null, '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'wc_enqueue_scripts' );

// Text Domain
load_theme_textdomain( 'wpclean', get_template_directory().'/languages' );

// Customize login
function my_login_logo() { ?>
    <style type="text/css">
      #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
        height:65px;
        width:320px;
        background-size: 320px 65px;
        background-repeat: no-repeat;
      	padding-bottom: 30px;
      }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
