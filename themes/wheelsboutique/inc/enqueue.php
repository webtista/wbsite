<?php
function wheelsboutique_enqueue_assets() {
    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'tailwind-output',
        get_template_directory_uri() . '/css/output.css',
        array(),
        filemtime(get_template_directory() . '/css/output.css')
    );



    // Alpine Focus plugin – must load first
    wp_enqueue_script(
        'alpine-focus',
        'https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js',
        array(),
        null,
        true
    );

    // Alpine Core – must load after any plugins
    wp_enqueue_script(
        'alpine-core',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        array('alpine-focus'),
        null,
        true
    );

    // Main JS (depends on jQuery)
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );

    // AJAX variables
    wp_localize_script('main-js', 'gallery_ajax_obj', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('gallery_ajax_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'wheelsboutique_enqueue_assets');


function enqueue_google_fonts() {
    // Preconnect links for performance
    add_action('wp_head', function() {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    }, 0);

    // Enqueue Open Sans and Special Gothic Expanded One
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Special+Gothic+Expanded+One&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');
