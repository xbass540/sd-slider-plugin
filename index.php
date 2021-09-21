<?php

/*
*
* Plugin Name: Solomon Designs Slider Plugin
* Version: 1.0
* Author: Kostas Mavrokefalos
* Description: This is the standard custom Plugin we use in Solomon Designs
*/
$plugin_url = plugin_dir_url( __FILE__ );

/** Step 2 (from text above). */
add_action( 'admin_menu', 'sd_slider_settings' );

/** Step 1. */
function sd_slider_settings() {
	add_options_page( 'SD Slider Settings', 'SD Slider', 'manage_options', 'my-unique-identifier', 'sd_plugin_options' );
}

/** Step 3. */
function sd_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>SD Slider Plugin Options</p>';
	echo '</div>';
}

wp_enqueue_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');

wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js');



wp_enqueue_script('app',plugin_dir_url(__FILE__).'app.js');

wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css');


wp_enqueue_style('style',$plugin_url.'style.css');
wp_enqueue_style('style',$plugin_url.'carousel.css');
wp_enqueue_style('style',$plugin_url.'carousel.rtl.css');



add_shortcode('cookie-plugin-shortcode', 'functionExecuted');

function functionExecuted(){

    echo("<div class='alert alert-primary' role='alert'>code executed using shortcodes</div>");
}

wp_enqueue_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');

?>


