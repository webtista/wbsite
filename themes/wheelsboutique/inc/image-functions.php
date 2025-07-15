<?php
// Define only the desired image sizes
function wb_custom_image_sizes() {
    // Used in galleries (thumbnail grid view)
    add_image_size('gallery-thumb', 480, 320, true);

    // Used in single gallery view (lightbox or featured image)
    add_image_size('gallery-single', 1280, 960, false);

    // Used in wheel product archive (grid view)
    add_image_size('wheel-grid', 600, 600, true);

    // Used in single wheel product (detail page)
    add_image_size('wheel-single', 1200, 900, false);

    // Logo cloud - small and clean
    add_image_size('logo-cloud', 240, 120, false);

    // Square product (accessories, etc)
    add_image_size('product-square', 500, 500, true);
}
add_action('after_setup_theme', 'wb_custom_image_sizes');

// Remove default WordPress image sizes
function wb_disable_default_image_sizes() {
    remove_image_size('thumbnail');
    remove_image_size('medium');
    remove_image_size('medium_large');
    remove_image_size('large');
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');
}
add_action('init', 'wb_disable_default_image_sizes');

// Restrict generation to only the defined custom sizes
add_filter('intermediate_image_sizes', function($sizes) {
    return [
        'gallery-thumb',
        'gallery-single',
        'wheel-grid',
        'wheel-single',
        'logo-cloud',
        'product-square'
    ];
});
