<?php
function logo_customizer_register($wp_customize){
    //Header Area Function
    $wp_customize->add_section('asif_header_area',array(
        'title' => __('Header Area', 'freshBloom'),
        'description' => 'If you interested to update header area',
    ));

    $wp_customize->add_setting('asif_logo', array(
        'default' => get_template_directory_uri() . '/img/Freshbloom_logo0.png',
    ));
    
    

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'asif_logo', array(
        'label' => 'Logo Upload',
        'description' => 'Upload your image',
        'setting' => 'asif_logo',
        'section' => 'asif_header_area',
        )
    ));
    // Menu Position  Option
    $wp_customize-> add_section('asif_menu_option', array(
        'title' =>__('Menu Option', 'freshBloom'),
        'description' => 'If you interested to change you menu position',
    ));
    $wp_customize->add_setting('asif_menu_option', array(
        'default' =>'right_menu',
    ));
    $wp_customize->add_control('asif_menu_option', array(
        'label' => 'Menu Position',
        'description' => 'Select Your Menu Position',
        'setting' => 'asif_menu_option',
        'section' => 'asif_menu_option',
        'type' =>'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));

// Footer Option 
$wp_customize->add_section('asif_footer',array(
    'title'=> __('Footer Option', 'freshBloom' ),
    'description' => 'If you interested to change footer option',
));
$wp_customize-> add_setting('asif_copyright_section',array(
    'default' =>'&copy; Copyright 2024 | FreshBloom',
));
$wp_customize-> add_control('asif_copyright_section',array(
    'label' =>'Copyright Text',
    'description' =>'Change your Copyright Text',
    'section' => 'asif_footer',
    'setting' => 'asif_copyright_section',
));
}
add_action('customize_register', 'logo_customizer_register');