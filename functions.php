<?php
/*
My Theme Function
*/

// Theme Title
add_theme_support('title-tag');

// Theme css and js file calling
function asif_css_js_file() {
    wp_enqueue_style('asif_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'asif_css_js_file');
