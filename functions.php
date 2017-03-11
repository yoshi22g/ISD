<?php

function idc_setup() {
	//prepare theme for translation
	load_child_theme_textdomain('idc', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme','idc_setup');

function idc_scripts() {
	wp_dequeue_style( 'popper-fira-sans' );
	wp_dequeue_style( 'popper-merriweather' );
}
add_action('wp_enqueue_scripts','idc_scripts');


/**
 * Prints HTML with meta information for post-date/time and author on index pages.
 */
function popper_index_posted_on() {

	$author_id = get_the_author_meta( 'ID' );

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = ('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'idc' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<div class="meta-content">';
	echo '<span class="posted-on">' . $posted_on . ' </span>'; // WPCS: XSS OK.
	echo '</div><!-- .meta-content -->';

}

function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_action( 'wp_loaded', 'wpse_76959_register_widget_area' );
function wpse_76959_register_widget_area()
{
    register_sidebar(
        array (
            'name'          => __(
                'Widgets on page Index Page',
                'idc'
                ),
            'description'   => __(
                'Will be used on a Index page only.',
                'idc'
                ),
            'id'            => 'index-only',
            'before_widget' => '<div id="index-only-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );
}


function wpse_76959_render_widget()
{
    is_home() && dynamic_sidebar( 'index-only' );
    remove_action( current_filter(), __FUNCTION__ );
}
add_action( 'show_index_widget', 'wpse_76959_render_widget' );




?>