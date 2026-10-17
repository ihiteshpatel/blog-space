<?php
/**
 * The footer template.
 * 
 * @package blog-space
 */
?>
<footer id="colophon" class="blog-space-footer site-footer">
      <div class="footer-bottom">
            <div class="container">
                  <div class="footer-bottom__inner">
                        <div class="footer-copyright">
                              <span>
                                    &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                                    <?php echo esc_html( get_bloginfo( 'name' ) ); ?>.
                                    <?php esc_html_e( 'All Rights Reserved.', 'blog-space' ); ?>
                              </span>
                        </div>
                        <?php if ( get_privacy_policy_url() ) : ?>
                        <div class="footer-links">
                              <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">
                                    <?php esc_html_e( 'Privacy Policy', 'blog-space' ); ?>
                              </a>
                        </div>
                        <?php endif; ?>
                  </div>
            </div>
      </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>