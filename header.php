<?php 
      /**
      * The header for our theme
      * 
      * @package blog-space
      */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
      <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php wp_head(); ?>
      </head>
      <body <?php body_class(); ?>>
            <?php wp_body_open(); ?>
            <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog-space' ); ?></a>
            <header id="masthead" class="blog-space-header site-header">
                  <div class="container">
                        <div class="bs-header__inner">
                              <div class="bs-site-branding">
                              <?php
                                    if( has_custom_logo() ) {
                                          the_custom_logo();
                                    } else {
                              ?>
                              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                              <?php } ?>
                              </div><!-- .bs-site-branding -->
                              <div class="bs-navigation-menu">
                              <nav id="site-navigation" class="main-navigation">
                                    <button class="menu-toggle " aria-label="Menu" aria-controls="primary-menu" aria-expanded="false"><svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px"><path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"/></svg></button>
                                    <div class="blog-space-menu">
                                          <?php
                                          wp_nav_menu(
                                                array(
                                                      'theme_location' => 'primary',
                                                      'menu_id' => 'primary-menu',
                                                )
                                          );
                                          ?>
                                    </div>
                              </nav><!-- #site-navigation -->
                              </div>
                        </div>
                  </div>
            </header><!-- #masthead -->