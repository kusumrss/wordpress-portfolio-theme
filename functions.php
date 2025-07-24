<?php
function portfolio_theme_setup() {
    // Load CSS
    wp_enqueue_style('style', get_stylesheet_uri());

    // Load JS (optional, if needed)
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);

    // Register Navigation Menu
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('wp_enqueue_scripts', 'portfolio_theme_setup');
