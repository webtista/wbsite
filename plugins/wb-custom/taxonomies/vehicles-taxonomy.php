<?php
// Register Taxonomies: Galleries and Wheel on Car
function create_vehicles_tax() {
    $labels = array(
        'name'          => _x('Vehicle', 'taxonomy general name', 'wheelsboutique'),
        'singular_name' => _x('Vehicle', 'taxonomy singular name', 'wheelsboutique'),
        'search_items'  => __('Search Vehicle', 'wheelsboutique'),
        // Add more labels as needed
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Vehicle', 'wheelsboutique'),
        'public'             => true,
        'publicly_queryable' => true,
        'hierarchical'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_rest'       => true,
        'rewrite'            => array('slug' => 'vehicles'),
    );

    register_taxonomy('vehicles', array('exhausts','exterior'), $args);
}
add_action('init', 'create_vehicles_tax');
