<?php
// Recursively load all PHP files in the functions directory and its subdirectories
function webtista_load_functions($dir = null) {
    // Set the default directory if not provided
    if (!$dir) {
        $dir = realpath(get_template_directory() . '/inc');
    }

    // Ensure the directory exists
    if (!is_dir($dir)) {
        return;
    }

    // Scan the directory for files and folders
    $files = glob($dir . '/*');

    foreach ($files as $file) {
        if (is_dir($file)) {
            // Recursively call the function for subdirectories
            webtista_load_functions($file);
        } elseif (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            require_once $file; // Load the PHP file only once
        }
    }
}
webtista_load_functions();
