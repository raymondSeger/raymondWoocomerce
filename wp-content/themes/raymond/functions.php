<?php

// enqueue scripts and styles
if(!function_exists('get_scripts_and_styles')) {
    function get_scripts_and_styles() {
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap-3.3.5/css/bootstrap.min.css' );
        wp_enqueue_script( 'jquery', false, array(), false, false);
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap-3.3.5/js/bootstrap.min.js', array('jquery'), false, true);
    }
}
add_action( 'wp_enqueue_scripts', 'get_scripts_and_styles' );