<?php
/**
 * The template for displaying the header.
 *
 * @package    newcss
 * @copyright  Copyright (c) 2020, David Mytton <david@davidmytton.co.uk> (https://davidmytton.blog)
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'newcss' ); ?></a>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <nav>
        <?php
        echo $nav_menu = strip_tags(wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'depth' => 0,
                'container' => false,
                'echo' => false
            )
        ), '<a>'); ?>
        </nav>
    </header>