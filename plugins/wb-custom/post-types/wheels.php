<?php
// Register Custom Post Type: Wheels
function create_wheels_cpt() {
    $labels = array(
        'name'          => __('Wheel', 'wheelsboutique'),
        'singular_name' => __('Wheel', 'wheelsboutique'),
        'menu_name'     => __('Wheels', 'wheelsboutique'),
        // Add more labels as needed
    );

    $args = array(
        'label'               => __('Wheels', 'wheelsboutique'),
        'description'         => __('Custom post type for Wheels', 'wheelsboutique'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'revisions'),
        'public'              => false,
        'menu_icon'           => 'dashicons-admin-generic',
        'has_archive'         => true,
        'rewrite' => array(
            'slug' => 'products/wheels', // Archive URL: wheels/
            'with_front' => false,
        ),
        'hierarchical'        => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'capability_type'     => 'post',
    );

    register_post_type('wheels', $args);
}
add_action('init', 'create_wheels_cpt');
