<?php
add_action('wp_ajax_load_gallery_models', 'load_gallery_models');
add_action('wp_ajax_nopriv_load_gallery_models', 'load_gallery_models');

function load_gallery_models() {
    check_ajax_referer('gallery_ajax_nonce', 'nonce');

    $make_id = intval($_POST['make_id']);
    $parent = get_term($make_id, 'galleries');
    $child_terms = get_terms([
        'taxonomy' => 'galleries',
        'parent' => $make_id,
        'hide_empty' => true
    ]);

    if (is_wp_error($parent)) {
        wp_send_json_error('Invalid parent term');
    }

    $options = '<option value="">Select Model</option>';
    // Add "View All" option
    $options .= '<option value="" data-slug="' . esc_attr($parent->slug) . '">View All ' . esc_html($parent->name) . '</option>';

    foreach ($child_terms as $term) {
        $options .= '<option value="' . $term->term_id . '" data-slug="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
    }

    wp_send_json_success($options);
}
