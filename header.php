<?php
/**
 * The header for our child theme.
 *
 * This is the child template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idc
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<?php 
	$url = explode('/', $_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';
?>


<body <?php body_class(); ?> id="<?php echo $dir ?>">
<div id="page" class="hfeed site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'idc' ); ?></a>

	<?php
		if ( get_header_image() ) { ?>
			<header id="masthead" class="site-header header-background-image" style="background-image: url(<?php echo get_header_image(); ?>) " role="banner">
		<?php } else { ?>
			<header id="masthead" class="site-header" role="banner">
		<?php }
		?>

		<div class="site-branding<?php if ( !is_front_page() && is_singular() ) { echo ' screen-reader-text'; } ?>">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">

				<div class="site-logo">
					<?php $site_title = get_bloginfo( 'name' ); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<div class="screen-reader-text">
							<?php printf( esc_html__('Go to the home page of %1$s', 'idc'), $site_title ); ?>
						</div>
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="custom-logo-link">
						<img class="custom-logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/idc_pink_v6.svg"/>
					</a>
				</div>

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'idc' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>

				<!-- Search Exit button -->
				<img id="search-x" class="search-hide" src="<?php echo get_stylesheet_directory_uri() ?>/images/x-out.svg"/>
			</nav><!-- #site-navigation -->
		<?php endif; ?>


	</header><!-- #masthead -->
		<?php if ($dir == 'research'): ?>
			<?php echo do_shortcode('[slick-slider category="5" design="design-3" arrows="false" sliderheight="419" speed="1000" autoplay_interval="4000"]'); ?>
			<div class="research-caption">
				<a href=""><img id="link-arrow" src="<?php get_stylesheet_directory_uri() ?>/images/chevron_right_black.svg""></a>
				<h3 class="research-caption-title"> Research Title </h3>
				<p class="research-caption-text">Research caption</p>
			</div>
		<?php endif; ?>

	<div id="content" class="site-content">
