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
				<?php 
						$url = explode('/', $_SERVER['REQUEST_URI']);
						$dir = $url[1] ? $url[1] : 'home';
					?>
				<li><a href="<?php echo esc_url( __( 'https://idc.mit.edu', 'idc' ) ); ?>">

					<?php if (isset($dir) && $dir == 'events'): ?>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/IDC_Long_logo_white.svg" alt="MIT IDC Logo"></a>
					<?php else: ?>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/IDC_Long_logo.svg" alt="MIT IDC Logo"></a>
					<?php endif; ?>
				</li>
				<!-- Logo -->
				<li id="mailing-address">265 Massachusetts Ave., <br class="rwd-break">Cambridge, MA 02139</li>
				<li class="social-icons">
					<ul>
						<li><a href="<?php echo esc_url( __( 'https://www.facebook.com/MIT-International-Design-Center-1576596442600209/', 'idc' ) ); ?>">
							<?php if (isset($dir) && $dir == 'events'): ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/fb_white.svg" alt="Facebook icon"></a>
							<?php else: ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/fb_black.svg" alt="Facebook icon"></a>
							<?php endif; ?>
						</li>
						<li><a href="<?php echo esc_url( __( 'https://twitter.com/idcMIT', 'idc' ) ); ?>">
							<?php if (isset($dir) && $dir == 'events'): ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/twitter_white.svg" alt="Twitter icon"></a>
							<?php else: ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/twitter_black.svg" alt="Twitter icon"></a>
							<?php endif; ?>
						</li>
						<li><a href="<?php echo esc_url( __( 'https://www.instagram.com/mitidc/', 'idc' ) ); ?>">
							<?php if (isset($dir) && $dir == 'events'): ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/ig_white.svg" alt="Instagram icon"></a>
							<?php else: ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/ig_black.svg" alt="Instagram icon"></a></a>
							<?php endif; ?>
						</li>
					</ul>
				</li>
				<li id='mit-logo'>				
					<a href="<?php echo esc_url( __( 'http://web.mit.edu/', 'idc' ) ); ?>">
					<!-- check if this is the events page by confirming the $dir variable from header.php -->
					
					<?php if (isset($dir) && $dir == 'events'): ?>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/MIT_white.svg" alt="MIT logo"></a>
					<?php else: ?>

						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/MIT.svg" alt="MIT logo"></a>
					<?php endif; ?>
				</li>
			</ul>
		</nav><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
