<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog Space
 */

// Exit if accessed directly.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Define theme constants.
 */
if( ! defined( 'BLOG_THEME_VERSION' ) ) {
    define( 'BLOG_THEME_VERSION', '1.0.0' );
}

if( ! defined( 'BLOG_THEME_PATH' ) ) {
    define( 'BLOG_THEME_PATH', __DIR__ );
}

if( ! defined( 'BLOG_THEME_URL' ) ) {
    define( 'BLOG_THEME_URL', get_template_directory_uri() );
}

add_theme_support( 'widgets' );

/**
 * Load theme classes
 */
require_once BLOG_THEME_PATH . '/inc/classes/Autoloader.php';

// Register theme autoloader.
Autoloader::register();

// Initialize the theme.
Blog_Theme::get_instance();