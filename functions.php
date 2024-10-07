<?php
// Funkce pro nastavení šablony
function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    
    // Registrace menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gym-tabletka'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

function nase_enqueue_styles() {
    wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tailwind-css', get_template_directory_uri() . '/tailwind-output.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'nase_enqueue_styles' );

function disable_gutenberg_for_home_page( $use_block_editor, $post_type ) {
    if ( 'page' === $post_type ) {
        // Get the current post
        $post_id = isset( $_GET['post'] ) ? $_GET['post'] : $_POST['post_ID'] ?? null;
        
        // Check if the current post uses the "Home Page" template
        if ( $post_id && 'Home Page' === get_page_template_slug( $post_id ) ) {
            return false;
        }
    }

    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg_for_home_page', 10, 2 );
