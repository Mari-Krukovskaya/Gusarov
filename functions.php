<?php

add_action( 'wp_enqueue_scripts', function()  {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );




	wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), 'null', true );
});

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>

