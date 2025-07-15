<?php
// Register Taxonomy: Exhaust Brand
function create_exhaust_brand_tax() {
    $labels = array(
        'name'                       => _x('Exhaust Brands', 'taxonomy general name', 'wheelsboutique'),
        'singular_name'              => _x('Exhaust Brand', 'taxonomy singular name', 'wheelsboutique'),
        'search_items'               => __('Search Exhaust Brands', 'wheelsboutique'),
        'popular_items'              => __('Popular Exhaust Brands', 'wheelsboutique'),
        'all_items'                  => __('All Exhaust Brands', 'wheelsboutique'),
        'parent_item'                => __('Parent Exhaust Brand', 'wheelsboutique'),
        'parent_item_colon'          => __('Parent Exhaust Brand:', 'wheelsboutique'),
        'edit_item'                  => __('Edit Exhaust Brand', 'wheelsboutique'),
        'update_item'                => __('Update Exhaust Brand', 'wheelsboutique'),
        'add_new_item'               => __('Add New Exhaust Brand', 'wheelsboutique'),
        'new_item_name'              => __('New Exhaust Brand Name', 'wheelsboutique'),
        'separate_items_with_commas' => __('Separate exhaust brands with commas', 'wheelsboutique'),
        'add_or_remove_items'        => __('Add or remove exhaust brands', 'wheelsboutique'),
        'choose_from_most_used'      => __('Choose from the most used exhaust brands', 'wheelsboutique'),
        'not_found'                  => __('No exhaust brands found.', 'wheelsboutique'),
        'menu_name'                  => __('Exhaust Brands', 'wheelsboutique'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Brands for Exhaust Systems', 'wheelsboutique'),
        'public'             => true,
        'publicly_queryable' => true,
        'hierarchical'       => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_rest'       => true,
        'rewrite'            => array('slug' => 'exhaust-brand', 'with_front' => true),
    );

    register_taxonomy('exhaust_brand', array('exhausts'), $args);
}
add_action('init', 'create_exhaust_brand_tax');
