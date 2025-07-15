<?php
// Register Custom Taxonomy: Exterior Brand
function wb_register_exterior_brand_taxonomy() {
    $labels = array(
        'name'                       => _x('Exterior Brands', 'Taxonomy General Name', 'wheelsboutique'),
        'singular_name'              => _x('Exterior Brand', 'Taxonomy Singular Name', 'wheelsboutique'),
        'menu_name'                  => __('Exterior Brands', 'wheelsboutique'),
        'all_items'                  => __('All Brands', 'wheelsboutique'),
        'parent_item'                => __('Parent Brand', 'wheelsboutique'),
        'parent_item_colon'          => __('Parent Brand:', 'wheelsboutique'),
        'new_item_name'              => __('New Brand Name', 'wheelsboutique'),
        'add_new_item'               => __('Add New Brand', 'wheelsboutique'),
        'edit_item'                  => __('Edit Brand', 'wheelsboutique'),
        'update_item'                => __('Update Brand', 'wheelsboutique'),
        'view_item'                  => __('View Brand', 'wheelsboutique'),
        'separate_items_with_commas' => __('Separate brands with commas', 'wheelsboutique'),
        'add_or_remove_items'        => __('Add or remove brands', 'wheelsboutique'),
        'choose_from_most_used'      => __('Choose from the most used', 'wheelsboutique'),
        'popular_items'              => __('Popular Brands', 'wheelsboutique'),
        'search_items'               => __('Search Brands', 'wheelsboutique'),
        'not_found'                  => __('Not Found', 'wheelsboutique'),
        'no_terms'                   => __('No brands', 'wheelsboutique'),
        'items_list'                 => __('Brands list', 'wheelsboutique'),
        'items_list_navigation'      => __('Brands list navigation', 'wheelsboutique'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('exterior_brand', array('exterior'), $args);
}
add_action('init', 'wb_register_exterior_brand_taxonomy', 0);
