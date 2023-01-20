<?php
//Load css sur touuuuuuuuutes les pages
function add_style() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/app.css', false);
}
add_action( 'wp_enqueue_scripts', 'add_style' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'En-tête',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Pied de page',
        'parent_slug'   => 'theme-general-settings',
    ));
}

function register_my_menus() {
    register_nav_menus(
      array(
        'Menu-principal' => __( 'Menu principal' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
