<?php
// Register Taxonomy: Wheel Construction
function create_wheel_construction_tax() {
    $labels = array(
        'name'          => _x('Wheel Construction', 'taxonomy general name', 'wheelsboutique'),
        'singular_name' => _x('Wheel Construction', 'taxonomy singular name', 'wheelsboutique'),
        'search_items'  => __('Search Wheel Constructions', 'wheelsboutique'),
        'all_items'     => __('All Wheel Constructions', 'wheelsboutique'),
        'edit_item'     => __('Edit Wheel Construction', 'wheelsboutique'),
        'view_item'     => __('View Wheel Construction', 'wheelsboutique'),
        'update_item'   => __('Update Wheel Construction', 'wheelsboutique'),
        'add_new_item'  => __('Add New Wheel Construction', 'wheelsboutique'),
        'new_item_name' => __('New Wheel Construction Name', 'wheelsboutique'),
        'menu_name'     => __('Wheel Construction', 'wheelsboutique'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Wheel Construction types for Wheels', 'wheelsboutique'),
        'public'             => true,
        'publicly_queryable' => true,
        'hierarchical'       => false, // Set to false to make it non-hierarchical like tags
        'show_ui'            => true,
        'rewrite'            => array(
            'slug'       => 'wheel-construction',
            'with_front' => true,
        ),
        'show_in_menu'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_rest'       => true,
    );

    register_taxonomy('wheel_construction', array('wheels'), $args);
}
add_action('init', 'create_wheel_construction_tax');
