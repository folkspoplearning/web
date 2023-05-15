<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enjoyvideo
 */

?>
		</div><!-- .clear -->

	</div><!-- #content .site-content -->

	
	<footer id="colophon" class="site-footer">

		<?php if ( is_active_sidebar( 'footer' ) ) { ?>

			<div class="footer-columns clear">
	
				<div class="container clear">

					<?php dynamic_sidebar( 'footer' ); ?>															

				</div><!-- .container -->

			</div><!-- .footer-columns -->

		<?php } ?>
				
	</footer><!-- #colophon -->


	<div id="site-bottom" class="clear">
		
		<div class="container">

			<div class="site-info">

				<?php
					$enjoyvideo_theme = wp_get_theme();
				?>

				&copy; <?php echo esc_html( date("o") ); ?> <?php echo esc_html( get_bloginfo('name') ); ?> - <a href="<?php echo esc_url( $enjoyvideo_theme->get( 'AuthorURI' ) ); ?>"><?php esc_html_e('WordPress Theme', 'enjoyvideo'); ?></a> <?php esc_html_e('by', 'enjoyvideo'); ?> <a href="<?php echo esc_url( $enjoyvideo_theme->get( 'AuthorURI' ) ); ?>"><?php esc_html_e('WPEnjoy', 'enjoyvideo'); ?></a>

			</div><!-- .site-info -->

			<?php 
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-nav' ) );
				}
			?>	

		</div><!-- .container -->

	</div><!-- #site-bottom -->

</div><!-- #page -->

<div id="back-top">
	<a href="#top" title="<?php esc_attr_e('Back to top', 'enjoyvideo'); ?>"><span class="genericon genericon-collapse"></span></a>
</div>

<?php wp_footer(); ?>

</body>
</html>
