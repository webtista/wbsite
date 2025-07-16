<?php
/**
 * Optimize head output and front-end assets for performance and SEO.
 */

// 1. Clean <head> output and remove unnecessary WP styles/scripts
function wheelsboutique_optimize_scripts_styles() {
    if (is_admin()) return;

    // Remove junk from <head>
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // Prevent global styles from rendering
    remove_filter('wp_body_open', 'wp_global_styles_render_svg_filters');
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_footer', 'the_block_template_skip_link');

    // Remove default jQuery and jQuery Migrate
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
    wp_dequeue_script('jquery-migrate');
    wp_deregister_script('jquery-migrate');

    // Re-register local jQuery from theme
    wp_register_script(
        'jquery',
        get_template_directory_uri() . '/js/jquery.min.js',
        [],
        '3.7.1',
        true
    );
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'wheelsboutique_optimize_scripts_styles', 100);

// 2. Disable emojis completely
function wheelsboutique_disable_emojis() {
    remove_action('init', 'smilies_init', 5);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    add_filter('emoji_svg_url', '__return_false');
    add_filter('tiny_mce_plugins', function($plugins) {
        return is_array($plugins) ? array_diff($plugins, ['wpemoji']) : [];
    });
}
add_action('init', 'wheelsboutique_disable_emojis', 1);

// 3. Improve SEO meta robots defaults
add_filter('wp_robots', function($robots) {
    if (is_search() || is_404()) {
        return [
            'noindex' => true,
            'nofollow' => true,
        ];
    }

    return [
        'index'  => true,
        'follow' => true,
    ];
});

function wb_enqueue_block_editor_assets() {
  wp_enqueue_style('wp-block-library'); // Core block styles
  wp_enqueue_style('wp-block-library-theme'); // Theme support styles (like button styles, etc.)
}
add_action('wp_enqueue_scripts', 'wb_enqueue_block_editor_assets');
