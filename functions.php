<?php
/**
 * redhat2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package redhat2
 */

function bbkmotors_scripts() {
	wp_enqueue_style( 'bbkmotors-style', get_stylesheet_uri());
	wp_enqueue_style( 'bbkmotors-main-style', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}	
add_action( 'wp_enqueue_scripts', 'bbkmotors_scripts' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


