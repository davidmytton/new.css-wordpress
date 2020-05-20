<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WordPress Theme: https://github.com/davidmytton/new.css-wordpress -->
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'newcss' ); ?></a>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <nav>
        <?php
        echo $nav_menu = strip_tags(wp_nav_menu(
            array(
                'menu' => 'primary',
                'depth' => 0,
                'container' => false,
                'echo' => false
            )
        ), '<a>'); ?>
        </nav>
    </header>