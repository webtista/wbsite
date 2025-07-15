<?php
// Register Taxonomy: Brand
function create_brand_tax() {
    $labels = array(
        'name'          => _x('Brand', 'taxonomy general name', 'wheelsboutique'),
        'singular_name' => _x('Brand', 'taxonomy singular name', 'wheelsboutique'),
        'search_items'  => __('Search Brands', 'wheelsboutique'),
        // Add more labels as needed
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Brands for Wheels', 'wheelsboutique'),
        'public'             => true,
        'publicly_queryable' => true,
        'hierarchical'       => true, // Make taxonomy hierarchical
        'show_ui'            => true,
        'rewrite' => array(
             'slug' => 'products/wheels', // Rewrites to wheels/<brand-slug>
             'hierarchical' => true, // Enables support for child terms

         ),
        'show_in_menu'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_rest'       => true,
    );

    register_taxonomy('brand', array('wheels','gallery'), $args);
}
add_action('init', 'create_brand_tax');
?>
