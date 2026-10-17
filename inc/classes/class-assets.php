<?php
/**
 * Enqueue theme assets
 * 
 * @package blog-space
 */

/**
 * Class Assets
 */
class Assets {
      /**
      * Construct method.
      */
      public function __construct() {
            $this->setup_hooks();
      }

      /**
      * To register action/filter.
      * 
      * @return void
      * @since 1.0.0
      */
      public function setup_hooks() {
            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
      }

      /**
      * Enqueue scripts.
      * 
      * @action wp_enqueue_scripts
      * @return void
      * @since 1.0.0
      */
      public function enqueue_scripts() {
            wp_enqueue_style( 'custom-style', BLOG_THEME_URL . '/assets/css/main.css', array(), BLOG_THEME_VERSION );
      }
}