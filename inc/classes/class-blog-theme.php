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

      protected function __construct() {
            $this->setup_hooks();
      }

      protected function setup_hooks() {
            add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
            add_action( 'wp_head', array( $this, 'pingback_header' ) );
      }

      public function setup_theme() {
            /**
		 * Add default posts and comments RSS feed links to head.
		 */
		add_theme_support( 'automatic-feed-links' );

            /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );
        
            /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

            /**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
            add_theme_support(
                  'custom-logo',
                  array(
                        'height' => 100,
                        'width' => 300,
                        'flex-height' => true,
                        'flex-width' => true
                  )
            );

            /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
      }

      /**
	 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function pingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}
}