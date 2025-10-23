<?php
function hola_mundo() {
    echo "Hola Mundo";
}

function raycothemess_menus_register() {
    register_nav_menus(array(
        'main-menu' => 'Menú Principal',
        'footer-menu' => 'Menú de Pie de Página',
        'latera-menu' => 'Menú Lateral'
    ));

}
add_action('init', 'raycothemess_menus_register');

function raycothemess_scripts_styles() {
    wp_enqueue_style('raycothemess-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'raycothemess_scripts_styles');

function raycothemess_setup() {
    //imagen destacada
    add_theme_support('post-thumbnails');
    //títulos dinámicos
    add_theme_support('title-tag');
    /*
    add_theme_support('html5', array('search-form'));
    */
}
add_action('after_setup_theme', 'raycothemess_setup');

?>