<?php


function sweet_baby_files() {
    wp_enqueue_script('main-sweet-baby-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('sweet_baby_styles', get_theme_file_uri('/build/style-index.css'));

    wp_enqueue_style('sweet_baby_more_styles', get_theme_file_uri('/build/index.css'));

    wp_enqueue_style( 'block-testimonial', get_stylesheet_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css');
}

add_action('wp_enqueue_scripts', 'sweet_baby_files');

function sweet_baby_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sweet_baby_features');


// ACF Custom Blocks **************************************************************************************
// function register_acf_block_types() {

//     // register a testimonial block.
//     acf_register_block_type(array(
//        'name'              => 'testimonial',
//        'title'             => __('Testimonial'),
//        'description'       => __('A custom testimonial block.'),
//        'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
//        'category'          => 'formatting',
//        'icon'              => 'admin-comments',
//        'keywords'          => array( 'testimonial', 'quote' ),
//     ));
//  }

//  // Check if function exists and hook into setup.
//  if( function_exists('acf_register_block_type') ) {
//     add_action('acf/init', 'register_acf_block_types');
//  }



?>
