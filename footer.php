<?php
/**
 * The child template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idc
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<nav class="site-info">
			<ul>
				<li><a href="<?php echo esc_url( __( 'https://idc.mit.edu', 'idc' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/IDC_Long_logo.svg" alt="MIT IDC Logo"></a></li>
				<!-- Logo -->
				<li id="mailing-address">265 Massachusetts Ave., Cambridge, MA 02139</li>
				<li class="social-icons">
					<ul>
						<li><a href="<?php echo esc_url( __( 'https://www.facebook.com/MIT-International-Design-Center-1576596442600209/', 'idc' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/fb_black.svg" alt="Facebook icon"></a></li>
						<li><a href="<?php echo esc_url( __( 'https://twitter.com/idcMIT', 'idc' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/twitter_black.svg" alt="Twitter icon"></a></li>
						<li><a href="<?php echo esc_url( __( 'https://www.instagram.com/mitidc/', 'idc' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/ig_black.svg" alt="Instagram icon"></a></li>
					</ul>
				</li>
				<li><a href="<?php echo esc_url( __( 'http://web.mit.edu/', 'idc' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/MIT.svg" alt="MIT logo"></a></li>
			</ul>
		</nav><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
