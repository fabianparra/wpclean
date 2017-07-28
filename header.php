<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicon.png" />

        <?php if (is_front_page()) : ?>
          <title><?php bloginfo('name'); ?></title>
        <?php else: ?>
          <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
        <?php endif; ?>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
        </nav>
    </header>
