<?php
/*
====================================================================
Enable Style, JS, Bootstrap, Fontawesome etc
=====================================================================
 */
function q_script_enqueue()
{
    $theme = wp_get_theme();
    $ver = $theme->get('Version');
    $themecsspath = get_stylesheet_directory() . '/style.css';
    $style_ver = filemtime($themecsspath);
    /*
    ================================================== CSS =====================================================================
     */
    //BOOTSTRAP CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), 20141119);
    //Theme CSS
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), $style_ver, 'all');

    wp_enqueue_script('main-script', get_template_directory_uri() . '/script.js', array(), 1.1, true);
}

add_action('wp_enqueue_scripts', 'q_script_enqueue');

/*
====================================================================
Add Menu Support
=====================================================================
 */
function q_theme_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Main Menu');
}

add_action('init', 'q_theme_setup');
/*
====================================================================
Add Logo Function to Theme Customize
=====================================================================
 */
add_theme_support('custom-logo');
function q_custom_logo_setup()
{
    $defaults = array(
        'height' => 500,
        'width' => 500,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'q_custom_logo_setup');
/*
====================================================================
Add Post Thumbnails
=====================================================================
 */
add_theme_support('post-thumbnails');
/*
====================================================================
Movies Gutenberg blocks
====================================================================
 */
require get_template_directory() . '/inc/gutenberg.php';

?>