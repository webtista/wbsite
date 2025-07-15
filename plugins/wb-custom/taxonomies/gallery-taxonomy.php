<?php
// Update Taxonomy: Galleries ➜ Better SEO Slug
function update_galleries_tax() {
    $labels = array(
        'name'          => _x('Vehicle Categories', 'taxonomy general name', 'wheelsboutique'),
        'singular_name' => _x('Vehicle Category', 'taxonomy singular name', 'wheelsboutique'),
        'search_items'  => __('Search Vehicle Categories', 'wheelsboutique'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Groupings by make/model/theme.', 'wheelsboutique'),
        'public'             => true,
        'publicly_queryable' => true,
        'hierarchical'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_rest'       => true,
        'rewrite'            => array(
            'slug'         => 'customer-vehicles',  // NEW: now URL is /customer-cars/<term>/
            'with_front'   => false,
            'hierarchical' => true,
        ),
    );

    register_taxonomy('galleries', array('gallery'), $args); // keep 'galleries' name
}
add_action('init', 'update_galleries_tax');



// Update Taxonomy: wheel-galleries ➜ Better SEO Slug
function update_wheel_galleries_tax() {
    $labels = array(
        'name'          => _x('Wheels Used', 'taxonomy general name', 'wheelsboutique'),
        'singular_name' => _x('Wheel Used', 'taxonomy singular name', 'wheelsboutique'),
        'search_items'  => __('Search Wheels', 'wheelsboutique'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Wheels featured in each customer car.', 'wheelsboutique'),
        'public'             => true,
        'publicly_queryable' => true,
        'hierarchical'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_rest'       => true,
        'rewrite'            => array(
            'slug'         => 'products-on-customer-car',  // NEW: now URL is /wheels-used/<term>/
            'with_front'   => false,
            'hierarchical' => true,
        ),
    );

    register_taxonomy('wheel-galleries', array('gallery'), $args); // keep 'wheel-galleries' name
}
add_action('init', 'update_wheel_galleries_tax');
