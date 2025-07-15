<?php
// Register Custom Post Type: Exhausts
function create_exhausts_cpt() {
    $labels = array(
        'name'                  => __('Exhausts', 'wheelsboutique'),
        'singular_name'         => __('Exhaust', 'wheelsboutique'),
        'menu_name'             => __('Exhausts', 'wheelsboutique'),
        'name_admin_bar'        => __('Exhaust', 'wheelsboutique'),
        'archives'              => __('Exhaust Archives', 'wheelsboutique'),
        'attributes'            => __('Exhaust Attributes', 'wheelsboutique'),
        'parent_item_colon'     => __('Parent Exhaust:', 'wheelsboutique'),
        'all_items'             => __('All Exhausts', 'wheelsboutique'),
        'add_new_item'          => __('Add New Exhaust', 'wheelsboutique'),
        'add_new'               => __('Add New', 'wheelsboutique'),
        'new_item'              => __('New Exhaust', 'wheelsboutique'),
        'edit_item'             => __('Edit Exhaust', 'wheelsboutique'),
        'update_item'           => __('Update Exhaust', 'wheelsboutique'),
        'view_item'             => __('View Exhaust', 'wheelsboutique'),
        'view_items'            => __('View Exhausts', 'wheelsboutique'),
        'search_items'          => __('Search Exhaust', 'wheelsboutique'),
        'not_found'             => __('Not found', 'wheelsboutique'),
        'not_found_in_trash'    => __('Not found in Trash', 'wheelsboutique'),
        'featured_image'        => __('Featured Image', 'wheelsboutique'),
        'set_featured_image'    => __('Set featured image', 'wheelsboutique'),
        'remove_featured_image' => __('Remove featured image', 'wheelsboutique'),
        'use_featured_image'    => __('Use as featured image', 'wheelsboutique'),
        'insert_into_item'      => __('Insert into exhaust', 'wheelsboutique'),
        'uploaded_to_this_item' => __('Uploaded to this exhaust', 'wheelsboutique'),
        'items_list'            => __('Exhausts list', 'wheelsboutique'),
        'items_list_navigation' => __('Exhausts list navigation', 'wheelsboutique'),
        'filter_items_list'     => __('Filter exhausts list', 'wheelsboutique'),
    );

    $args = array(
        'label'                 => __('Exhaust', 'wheelsboutique'),
        'description'           => __('Custom post type for Exhausts', 'wheelsboutique'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('exhaust_brand'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-generic',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'products/exhausts', 'with_front' => false),
    );

    register_post_type('exhausts', $args);
}
add_action('init', 'create_exhausts_cpt');
