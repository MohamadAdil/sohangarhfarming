<?php
function mytheme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue styles and scripts
function mytheme_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Additional stylesheets
    wp_enqueue_style('mytheme-font-style', get_template_directory_uri() . '/assets/css/font.css');
    wp_enqueue_style('mytheme-bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('mytheme-custom-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('mytheme-responsive-style', get_template_directory_uri() . '/assets/css/responsive.css');

    // JavaScript files
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/jquery-3.7.1.slim.min.js', array('jquery'), null, true);
    wp_enqueue_script('mytheme-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('mytheme-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
?>
