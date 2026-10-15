<?php
/**
 * Theme autoloader.
 * 
 * Provides a minimal class autoloader for the Blog Space theme.
 * It supports:
 *  - WordPress-style file names: `class-theme-class.php`
 *  - Legacy class-name file mapping: `Theme_Class.php`
 * 
 * @package Blog_Space
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Loads theme classes from the `inc/classes` directory.
 * 
 * @package Blog_Space
 */
class Autoloader {
      public static function register() {
            spl_autoload_register( array( __CLASS__, 'autoload' ) );
      }

      public static function autoload( $class ) {
            if( ! is_string( $class ) || ! preg_match( '/^[A-Za-z_][A-Za-z0-9_]*$/', $class ) ) {
                  return;
            }

            $class_slug = strtolower( str_replace( '_', '-', $class ) );

            $candidates = array(
                  BLOG_THEME_PATH . '/inc/classes/class-' . $class_slug . '.php',
                  BLOG_THEME_PATH . '/inc/classes/' . $class . '.php'
            );

            foreach( $candidates as $file ) {
                  if( file_exists( $file ) ) {
                        require_once $file;
                        return;
                  }
            }
      }
}