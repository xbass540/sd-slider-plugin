<?php

/*
*
* Plugin Name: Solomon Designs Slider Plugin
* Version: 1.0
* Author: Kostas Mavrokefalos
* Description: This is the standard custom Plugin we use in Solomon Designs
*/
$plugin_url = plugin_dir_url( __FILE__ );

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


