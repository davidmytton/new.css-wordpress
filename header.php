<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WordPress Theme: https://github.com/davidmytton/new.css-wordpress -->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <style type="text/css">
    header h1 a {
        color: var(--nc-tx-1);
    }

    article h2 a {
        color: var(--nc-tx-1);
        text-decoration: none;
    }
    
    nav a {
        padding-right: 0.5em;
    }

    figcaption {
        font-size: small;
    }
    </style>
    <?php wp_head(); ?>
</head>
<body>
    <header>    
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