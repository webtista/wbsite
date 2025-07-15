<?php
// Register Custom Post Type: Gallery (used for Customer Vehicles)
function create_gallery_cpt() {
    $labels = array(
        'name'               => _x('Customer Vehicles', 'Post Type General Name', 'wheelsboutique'),
        'singular_name'      => _x('Customer Vehicle', 'Post Type Singular Name', 'wheelsboutique'),
        'menu_name'          => __('Customer Vehicles', 'wheelsboutique'),
        'name_admin_bar'     => __('Customer Vehicle', 'wheelsboutique'),
        'add_new'            => __('Add New Vehicle', 'wheelsboutique'),
        'add_new_item'       => __('Add New Customer Vehicle', 'wheelsboutique'),
        'edit_item'          => __('Edit Customer Vehicle', 'wheelsboutique'),
        'new_item'           => __('New Customer Vehicle', 'wheelsboutique'),
        'view_item'          => __('View Vehicle', 'wheelsboutique'),
        'search_items'       => __('Search Vehicles', 'wheelsboutique'),
        'not_found'          => __('No cars found', 'wheelsboutique'),
        'not_found_in_trash' => __('No cars found in Trash', 'wheelsboutique'),
    );

    $args = array(
        'label'               => __('Customer Vehicles', 'wheelsboutique'),
        'description'         => __('Gallery of customer vehicles featuring our products.', 'wheelsboutique'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-car',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_in_rest'        => true,
        'capability_type'     => 'post',
        'rewrite'             => array(
            'slug' => 'customer-vehicles',  // NEW SEO-friendly slug
            'with_front' => false,
        ),
    );

    register_post_type('gallery', $args); // keep name = gallery
}
add_action('init', 'create_gallery_cpt');
