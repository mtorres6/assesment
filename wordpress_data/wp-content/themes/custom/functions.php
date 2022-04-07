<?php
// Register styles
function custom_styles() {
    wp_register_style('customcss', get_template_directory_uri() . '/styles.css', array(),'1.0');
    
    wp_enqueue_style( 'customcss' );
}

// Register js
function custom_js() {
    //Custom JS
    wp_register_script( 'customjs', get_template_directory_uri() . '/js/main.js', array(), '1.0' );
    
    wp_enqueue_script( 'customjs' );

    // Webpack JS
    wp_register_script( 'webpackjs', get_template_directory_uri() . '/src/index.js', array(), '1.0' );
    
    wp_enqueue_script( 'webpackjs' );
}

// Actions
add_action( 'wp_enqueue_scripts', 'custom_styles' ); 
add_action( 'wp_enqueue_scripts', 'custom_js' ); 
?>