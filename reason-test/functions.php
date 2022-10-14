<?php
// Menus
add_action( 'after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => __( 'Primary Menu', 'text_domain' ),
    ) );  
}, 0 );

// Add Tailwind classes to nav 
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}, 1, 3);

// Create events post type
add_action( 'init', function() {
    register_post_type( 'events',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'events'),
            'show_in_rest' => true,
        )
    );
} );