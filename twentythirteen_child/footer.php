<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<?php if(is_page_template('template-landing-page.php')) {?>
			<footer>
				<div class="footer-left">
					<a class="brand" href="#">
						<img src="<?php echo get_stylesheet_directory_uri()?>/img/logo-small.png" alt="DataRobot" />
						<span>DataRobot, Inc. © 2012</span>
					</a>
				</div>
				<div class="footer-center footer-social">
					<div class="img-wrapper"><img src="<?php echo get_stylesheet_directory_uri()?>/img/facebook.png" alt="Facebook" /></div>
					<div class="img-wrapper"><img src="<?php echo get_stylesheet_directory_uri()?>/img/linkedin.png" alt="LinkedIn" /></div>
					<div class="img-wrapper"><img src="<?php echo get_stylesheet_directory_uri()?>/img/tweeter.png" alt="Tweeter" /></div>
					<div class="img-wrapper"><img src="<?php echo get_stylesheet_directory_uri()?>/img/google-plus.png" alt="Google Plus" /></div>
				</div>
				<div class="footer-right">
					<span class="slogan">Better predictions. Faster.</span>
				</div>
			</footer>
		<?php } else {?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php get_sidebar( 'main' ); ?>

				<div class="site-info">
					<?php do_action( 'twentythirteen_credits' ); ?>
					<?php
					if ( function_exists( 'the_privacy_policy_link' ) ) {
						the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
					}
					?>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" class="imprint">
						<?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?>
					</a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		<?php }?>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
