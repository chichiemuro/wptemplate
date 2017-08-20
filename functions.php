<?php
define('theme_root', get_stylesheet_directory_uri());

/* linking style and scripts*/
function portfoliotheme_enqueue_style() {
    wp_enqueue_style( 'core', theme_root.'/style.css' );
    wp_enqueue_style( 'custom', theme_root.'/assets/css/portfolio.css' );

}

function portfoliotheme_enqueue_script() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'my-js', theme_root.'/assets/js/portfolio.js',array('jQuery') ,false );
}

add_action( 'wp_enqueue_scripts', 'portfoliotheme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'portfoliotheme_enqueue_script' );

/*adding theme support functions*/
function portfolio_setup()
{
    require 'resources/library/mylib.php';

    load_theme_textdomain('portfolio');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('portfolio-featured-image', 2000, 1200, true);
    add_image_size('portfolio-thumbnail-avatar', 100, 100, true);
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'top' => __('Top Menu', 'portfolio'),
        'footer' => __('footer Menu', 'portfolio'),
    ));
    add_theme_support('html5');
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));
    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('custom-logo');
}
add_action( 'after_setup_theme', 'portfolio_setup' );

