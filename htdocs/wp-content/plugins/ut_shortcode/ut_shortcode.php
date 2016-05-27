<?php

/**
 * @package UT_shortcode
 * @version 0.1
 */
/*
Plugin Name: UT shortcode
Plugin URI: http://www.utrepo.com
Description: No desciption right now.
Author: UT Kong
Version: 0.1
Author URI: http://www.utrepo.com
*/

define( 'UTSC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function button_style_shortcode($atts, $content = null) {
	$a = shortcode_atts( array( 
			'title' => 'Submit' 
	), $atts );

	$content = 'Sample Page';

	return '<a href="' . 
		esc_url( get_permalink( get_page_by_title( $content ) ) ) . '">' . 
		esc_attr($a['title']) . '</span>';
}

function slider_shortcode($slidertype) {

}

function load_script() {
	if (is_admin()) return;
	wp_enqueue_script( 'jquery.bxslider',
					UTSC_PLUGIN_DIR . '/libs/jquery.bxslider.min.js', array('jquery') );
}

add_shortcode( 'ubutton', 'button_style_shortcode' );

add_action('init', 'load_script');