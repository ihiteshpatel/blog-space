<?php
// Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) {
      exit;
}

class Blog_Menus {
      public function __construct() {
            add_action( 'after_setup_theme', array( $this, 'register_menus' ) );
      }

      public function register_menus() {
            register_nav_menus(
                  array(
                        'primary' => __( 'Primary Menu', 'blog-space' ),
                        'footer' => __( 'Footer Menu', 'blog-space' )
                  )
            );
      }
}