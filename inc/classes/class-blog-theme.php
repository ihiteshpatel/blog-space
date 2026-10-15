<?php
// Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Main theme class.
 * 
 * This is the central place to hook into WordPress.
 */
class Blog_Theme {
      protected static $instance = null;

      public static function get_instance() {
            if( null === self::$instance ) {
                  self::$instance = new self();
            }
            return self::$instance;
      }
}