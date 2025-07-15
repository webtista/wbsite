<?php
// Add filter to register Metabox.io metaboxes
add_filter('rwmb_meta_boxes', 'wb_register_metaboxes');

function wb_register_metaboxes($meta_boxes) {
    // Define an array of custom post types and their respective metaboxes
    $custom_post_types = array(
        'gallery' => array(
            'title' => __('Gallery Info', 'wheelsboutique'),
            'fields' => array(
                array(
                    'name' => __('Gallery Specs', 'wheelsboutique'),
                    'id' => 'wb_vehicle_specs',
                    'type' => 'textarea'
                ),
                array(
                    'name' => __('Gallery Images', 'wheelsboutique'),
                    'id' => 'wb_vehicle_gallery',
                    'type' => 'image_advanced'
                )
            )
        ),
        'exterior' => array(
            'title' => __('Exterior Info', 'wheelsboutique'),
            'fields' => array(
                array(
                    'name' => __('Exterior Specs', 'wheelsboutique'),
                    'id' => 'exterior_vehicle_specs',
                    'type' => 'textarea'
                ),
                array(
                    'name' => __('Exterior Images', 'wheelsboutique'),
                    'id' => 'exterior_vehicle_gallery',
                    'type' => 'image_advanced'
                )
            )
        )
    );

    // Loop through the custom post types and metaboxes to register them
    foreach ($custom_post_types as $post_type => $metabox) {
        $meta_boxes[] = array(
            'id' => 'wb_' . $post_type . '_gallery',
            'title' => $metabox['title'],
            'post_types' => array($post_type),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => $metabox['fields']
        );
    }

    return $meta_boxes;
}
