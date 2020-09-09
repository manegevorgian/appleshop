<?php
/**
 * Enqueue script and styles for child theme
 */
function woodmart_child_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );

function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        'Currency',
        'Currency',
        'manage_options',
        'currency',
        'custom_menu_callback'
    );
    function custom_menu_callback(){
        require_once 'currency.php';
    }

}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );