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

?>