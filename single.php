<?php
/**
 * The child template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package idc
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<a id="button-all-news" href="<?php echo esc_url( home_url( '/news/' ) ); ?>" rel="news">
						<div class="screen-reader-text">
							<?php printf( esc_html__('Go to the News page of %1$s', 'idc'), $site_title ); ?>
						</div>

				See All News
			</a>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
