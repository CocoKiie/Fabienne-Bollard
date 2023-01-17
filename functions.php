<?php
//Load css sur touuuuuuuuutes les pages
function add_style() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/app.css', false);
}
add_action( 'wp_enqueue_scripts', 'add_style' );
