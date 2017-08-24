<?php
/** 
* Plugin Name: Number Input Buttons
* Author: Liam Bailey (Webby Scots)
* Description: Adds nice Font Awesome buttons to number inputs on the site
* Author URI: https://webbyscots.com
**/

add_action('wp_enqueue_scripts', 'wswp_add_scripts');

function wswp_add_scripts() {
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/9f67fc414e.js');
	wp_enqueue_style('my-plugin-css', plugins_url('css/style.css', __FILE__), NULL, time());
   	wp_enqueue_script('my-plugin-js', plugins_url('scripts/script.js',__FILE__), array('jquery'), time());
}