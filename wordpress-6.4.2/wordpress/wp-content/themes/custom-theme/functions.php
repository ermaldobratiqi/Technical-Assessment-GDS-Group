<?php

function enqueue_styles_and_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');


function register_menus() {
    register_nav_menu('header-menu', 'Header Menu');
}
add_action('after_setup_theme', 'register_menus');


if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        
    ));
}
