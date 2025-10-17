<?php
function noticias_alexander_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(array(
        'header-menu' => 'Menú Principal',
        'social-menu' => 'Redes Sociales',
        'footer-menu' => 'Menú Legal',
    ));
}
add_action('after_setup_theme', 'noticias_alexander_setup');

function noticias_alexander_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'noticias_alexander_styles');
?>
