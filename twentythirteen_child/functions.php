<?php
/*** Child Theme Function  ***/
add_action('wp_enqueue_scripts', 'twentythirteen_child_theme_enqueue_scripts', 11);

function  twentythirteen_child_theme_enqueue_scripts() {
	// Styles
	wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
	// Scripts
	wp_enqueue_script('landing-page-js', get_stylesheet_directory_uri(). '/js/scripts.js');
}
