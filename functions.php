<?php

function idc_setup() {
	//prepare theme for translation
	load_child_theme_textdomain('idc', get_stylesheet_director() . '/languages');
}
add_action('after_setup_theme','idc_setup');