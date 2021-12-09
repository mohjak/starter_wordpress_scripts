<?php

function starter_wordpress_scripts_files() {
    wp_enqueue_script('main-starter-wordpress-scripts-js', get_theme_file_uri('/build/index.js'), array(), time(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('starter_wordpress_scripts_main_styles', get_theme_file_uri('/build/style-index.css'), array(), time());
    wp_enqueue_style('starter_wordpress_scripts_extra_styles', get_theme_file_uri('/build/index.css'), array(), time());
}

add_action('wp_enqueue_scripts', 'starter_wordpress_scripts_files');