<?php

require_once 'class-wp-bootstrap-navwalker.php';

function theme_setup() {
    // Featured Image Support
    add_theme_support( 'post-thumbnails' );

    // Nav Menus
    register_nav_menus( [
        'primary' => __( 'Primary Menu' )
    ] );
}

add_action( 'after_setup_theme', 'theme_setup' );

// Widget Locations
function init_widgets( $id ) {
    register_sidebar( [
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div class="card card-default">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="card-heading"><h3 class="card-title">',
        'after_title'   => '</h3></div><div class="card-body">'

    ] );
}

add_action( 'widgets_init', 'init_widgets' );