<?php
/*
Plugin Name: Custom JavaScript and CSS Plugin
Description: Adds custom JavaScript and CSS code to the WordPress site.
Version: 1.0
Author: Asif Zulfiqar
*/

// Enqueue custom JavaScript file
function custom_enqueue_scripts() {
    wp_enqueue_script( 'custom-script', plugins_url( 'js/custom-script.js', __FILE__ ), array(), '1.0', false );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts', 1 );

// Enqueue custom CSS file
function custom_enqueue_styles() {
    wp_enqueue_style( 'custom-style', plugins_url( 'css/custom-style.css', __FILE__ ), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles', 1 ); 
