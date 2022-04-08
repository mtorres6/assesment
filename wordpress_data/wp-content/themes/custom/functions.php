<?php
// Register styles
function custom_styles() {
    wp_register_style('customcss', get_template_directory_uri() . '/styles.css', array(),'1.0');
    
    wp_enqueue_style( 'customcss' );

    wp_register_style('maincss', get_template_directory_uri() . '/src/css/general/main.css', array(),'1.0');
    
    wp_enqueue_style( 'maincss' ); 

    if( is_singular( 'franchise' ) || is_post_type_archive( 'franchises') || is_single()){
        wp_enqueue_style( 'Franchise', get_template_directory_uri() . '/src/css/cpt/main.css', array(),'1.0' );

        wp_register_script( 'customjs', get_template_directory_uri() . '/js/scripts.js', array(), '1.0' );
        wp_enqueue_script( 'customjs' );
    }
}

// Register js
function custom_js() {
    //Custom JS
    //wp_register_script( 'customjs', get_template_directory_uri() . '/js/main.js', array(), '1.0' );
    
    //wp_enqueue_script( 'customjs' );
}

// Register Custom Post Type
add_theme_support('post-thumbnails');
add_post_type_support( 'franchises', 'thumbnail' ); 

add_theme_support('author');
add_post_type_support( 'franchises', 'author' ); 

function custom_post_type() {
  
    register_post_type( 'franchises',
        array(
            'labels' => array(
                'name' => __( 'Franchises' ),
                'singular_name' => __( 'Franchise' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'franchises'),
            'show_in_rest' => true
        )
    );
}

// Actions
add_action( 'wp_enqueue_scripts', 'custom_styles' ); 
add_action( 'wp_enqueue_scripts', 'custom_js' ); 
add_action( 'init', 'custom_post_type' );
?>