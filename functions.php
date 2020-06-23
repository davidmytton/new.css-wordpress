<?php
/**
 * The functions and definitions.
 *
 * @package    newcss
 * @copyright  Copyright (c) 2020, David Mytton <david@davidmytton.co.uk> (https://davidmytton.blog)
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

if ( ! function_exists( 'newcss_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function newcss_setup() {

        /**
         * First, let's set the maximum content width based on the theme's design and stylesheet.
         * This will limit the width of all uploaded images and embeds.
         */
        if ( ! isset( $content_width ) )
        $content_width = 750; /* pixels */
     
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
     
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 750 );

        /**
         * Remove the CSS classes and IDs from the nav menu
         * https://wordpress.stackexchange.com/a/15725
         */
        add_filter( 'nav_menu_item_id', '__return_null', 10, 3 );
        add_filter( 'nav_menu_css_class', '__return_empty_array', 10, 3 );
     
        /**
         * Add support for navigation menu.
         */
        register_nav_menu( 'primary', 'Navigation Menu' );
    }
}

add_action( 'after_setup_theme', 'newcss_setup' );

function newcss_css() {
	wp_enqueue_style( 'newcss', get_stylesheet_uri(), array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'newcss_css' );
?>