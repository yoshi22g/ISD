<?php

function isd_setup() {
	//prepare theme for translation
	load_child_theme_textdomain('isd', get_stylesheet_director() . '/languages');
}
add_action('after_setup_theme','isd_setup');