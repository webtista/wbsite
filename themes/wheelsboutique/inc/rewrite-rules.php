<?php
add_filter('post_type_link', function ($post_link, $post) {
    if ($post->post_type !== 'gallery') {
        return $post_link;
    }

    $terms = wp_get_post_terms($post->ID, 'galleries');
    if (empty($terms) || is_wp_error($terms)) {
        return $post_link;
    }

    $make = '';
    $model = '';

    foreach ($terms as $term) {
        if ($term->parent === 0) {
            $make = $term->slug;
        } else {
            $parent = get_term($term->parent, 'galleries');
            if (!is_wp_error($parent)) {
                $make = $parent->slug;
                $model = $term->slug;
            }
        }
    }

    if ($make && $model) {
        return home_url("/customer-vehicles/$make/$model/{$post->post_name}/");
    } elseif ($make) {
        return home_url("/customer-vehicles/$make/{$post->post_name}/");
    }

    return home_url("/customer-vehicles/{$post->post_name}/");
}, 10, 2);



function register_customer_vehicle_rewrites() {
    // Single post: /customer-vehicles/make/model/post
    add_rewrite_rule(
        '^customer-vehicles/([^/]+)/([^/]+)/([^/]+)/?$',
        'index.php?post_type=gallery&name=$matches[3]',
        'top'
    );

    // FIX: Add post_type to taxonomy rules
    add_rewrite_rule(
        '^customer-vehicles/([^/]+)/([^/]+)/?$',
        'index.php?taxonomy=galleries&term=$matches[2]&post_type=gallery',
        'top'
    );

    add_rewrite_rule(
        '^customer-vehicles/([^/]+)/?$',
        'index.php?taxonomy=galleries&term=$matches[1]&post_type=gallery',
        'top'
    );
}
add_action('init', 'register_customer_vehicle_rewrites');


function enforce_galleries_term_hierarchy() {
    if (is_tax('galleries')) {
        $term = get_queried_object();

        // Only run on customer-vehicles URLs
        if (!isset($_SERVER['REQUEST_URI']) || strpos($_SERVER['REQUEST_URI'], '/customer-vehicles/') === false) {
            return;
        }

        // If it's a child term but accessed as top-level: redirect to correct hierarchical URL
        if ($term && $term->parent) {
            $parent = get_term($term->parent, 'galleries');
            if (!is_wp_error($parent)) {
                $current_url = trim($_SERVER['REQUEST_URI'], '/');
                $segments = explode('/', $current_url);

                // Expected structure: /customer-vehicles/parent/child/
                if (!isset($segments[2]) || $segments[1] !== $parent->slug || $segments[2] !== $term->slug) {
                    $correct_url = home_url("/customer-vehicles/{$parent->slug}/{$term->slug}/");
                    wp_redirect($correct_url, 301);
                    exit;
                }
            }
        }
    }
}
add_action('template_redirect', 'enforce_galleries_term_hierarchy');
