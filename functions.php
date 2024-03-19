<?php
/*
My Theme Function
*/

// Theme Title
add_theme_support('title-tag');

// Theme css and js file calling
function asif_css_js_file() {
    wp_enqueue_style('asif_style', get_stylesheet_uri());

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');

    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '5.0.2', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    //Jquary
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');

    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

}
add_action('wp_enqueue_scripts', 'asif_css_js_file');

// Enqueue Bootstrap CSS from CDN
function enqueue_bootstrap_css() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_css');

// Enqueue Bootstrap JS from CDN and jQuery as dependency
function enqueue_bootstrap_js() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_js');

// Google Fonts Enqueue
function asif_add_google_fonts(){
    wp_enqueue_style('asif_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&family=Poppins:wght@100;200;400;700&display=swap', false );
        add_action('wp_enqueue_scripts', 'asif_add_google_fonts');
} 

//Theme function
function logo_customizer_register($wp_customize){
    $wp_customize->add_section('asif_header_area',array(
        'title' => __('Header Area', 'freshBloom'),
        'description' => 'If you interested to update header area',
    ));

    $wp_customize->add_setting('asif_logo', array(
        'default' => get_bloginfo('template_directory').'/img/Freshbloom_logo.webp',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'asif_logo', array(
        'label' => 'Logo Upload',
        'description' => 'Upload your image',
        'setting' => 'asif_logo',
        'section' => 'asif_header_area',
        )
    ));
}

add_action('customize_register', 'logo_customizer_register');