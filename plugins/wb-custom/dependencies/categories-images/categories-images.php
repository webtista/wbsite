<?php
/**
 * Plugin Name: Categories Images
 * Plugin URI: http://zahlan.net/blog/2012/06/categories-images/
 * Description: Add images to categories or custom terms.
 * Author: Muhammad Said El Zahlan
 * Version: 2.5.4
 * Author URI: http://zahlan.net/
 * Text Domain: categories-images
 * Domain Path: /languages
 */

if (!defined('Z_PLUGIN_URL')) {
    define('Z_PLUGIN_URL', untrailingslashit(plugins_url('', __FILE__)));
}

define('Z_IMAGE_PLACEHOLDER', Z_PLUGIN_URL . "/images/placeholder.png");

// Load plugin textdomain
add_action('plugins_loaded', function() {
    load_plugin_textdomain('categories-images', false, dirname(plugin_basename(__FILE__)) . '/languages');
});

// Initialize plugin
add_action('admin_init', 'z_init');
function z_init() {
    $taxonomies = get_taxonomies();
    if (is_array($taxonomies)) {
        $zci_options = get_option('zci_options', array('excluded_taxonomies' => array()));

        foreach ($taxonomies as $taxonomy) {
            if (in_array($taxonomy, $zci_options['excluded_taxonomies'])) {
                continue;
            }
            add_action("{$taxonomy}_add_form_fields", 'z_add_taxonomy_field');
            add_action("{$taxonomy}_edit_form_fields", 'z_edit_taxonomy_field');
            add_filter("manage_edit-{$taxonomy}_columns", 'z_taxonomy_columns');
            add_filter("manage_{$taxonomy}_custom_column", 'z_taxonomy_column', 10, 3);
        }
    }
}

// Enqueue media uploader and add styles
add_action('admin_enqueue_scripts', function($hook_suffix) {
    if ($hook_suffix === 'edit-tags.php' || $hook_suffix === 'term.php') {
        wp_enqueue_media();
        add_action('admin_head', 'z_add_style');
    }
});

function z_add_style() {
    ?>
    <style type="text/css">
        th.column-thumb {width:60px;}
        .form-field img.taxonomy-image,
        .column-thumb img {max-width:300px; max-height:300px;}
    </style>
    <?php
}

// Add image field in add form
function z_add_taxonomy_field() {
    echo '<div class="form-field">
            <label for="taxonomy_image">' . __('Image', 'categories-images') . '</label>
            <input type="text" name="taxonomy_image" id="taxonomy_image" value="" />
            <br/>
            <button class="z_upload_image_button button">' . __('Upload/Add image', 'categories-images') . '</button>
        </div>' . z_script();
}

// Add image field in edit form
function z_edit_taxonomy_field($taxonomy) {
    $image_url = z_taxonomy_image_url($taxonomy->term_id, null, true) ?: '';
    echo '<tr class="form-field">
            <th scope="row" valign="top"><label for="taxonomy_image">' . __('Image', 'categories-images') . '</label></th>
            <td>
                <img class="taxonomy-image" src="' . esc_url(z_taxonomy_image_url($taxonomy->term_id, 'medium', true)) . '"/><br/>
                <input type="text" name="taxonomy_image" id="taxonomy_image" value="' . esc_attr($image_url) . '" /><br />
                <button class="z_upload_image_button button">' . __('Upload/Add image', 'categories-images') . '</button>
                <button class="z_remove_image_button button">' . __('Remove image', 'categories-images') . '</button>
            </td>
        </tr>' . z_script();
}

// JavaScript for media uploader
function z_script() {
    ob_start();
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".z_upload_image_button").click(function(e) {
                e.preventDefault();
                var button = $(this),
                    custom_uploader = wp.media({
                        title: 'Insert image',
                        library : {
                            type : 'image'
                        },
                        button: {
                            text: 'Use this image'
                        },
                        multiple: false
                    }).on('select', function() {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        $('#taxonomy_image').val(attachment.url);
                    })
                    .open();
            });

            $(".z_remove_image_button").click(function(e) {
                e.preventDefault();
                $('#taxonomy_image').val('');
            });
        });
    </script>
    <?php
    return ob_get_clean();
}

// Save taxonomy image on term edit or create
add_action('edit_term', 'z_save_taxonomy_image');
add_action('create_term', 'z_save_taxonomy_image');
function z_save_taxonomy_image($term_id) {
    if (isset($_POST['taxonomy_image'])) {
        update_option('z_taxonomy_image' . $term_id, $_POST['taxonomy_image']);
    }
}

// Get taxonomy image URL
function z_taxonomy_image_url($term_id = null, $size = 'full', $return_placeholder = false) {
    $taxonomy_image_url = get_option('z_taxonomy_image' . $term_id);
    if ($taxonomy_image_url) {
        // Check if the URL is an SVG
        if (strpos($taxonomy_image_url, '.svg') !== false) {
            return $taxonomy_image_url; // Return the SVG URL directly
        }

        $attachment_id = attachment_url_to_postid($taxonomy_image_url);
        if ($attachment_id) {
            $image = wp_get_attachment_image_src($attachment_id, $size);
            $taxonomy_image_url = $image[0];
        }
    }

    if ($return_placeholder) {
        return $taxonomy_image_url ?: Z_IMAGE_PLACEHOLDER;
    }

    return $taxonomy_image_url;
}


// Add image column to taxonomy list
add_filter('manage_edit-category_columns', 'z_taxonomy_columns');
function z_taxonomy_columns($columns) {
    $new_columns = $columns;
    $new_columns['thumb'] = __('Image', 'categories-images');
    return $new_columns;
}

// Render image column content
add_filter('manage_category_custom_column', 'z_taxonomy_column', 10, 3);
function z_taxonomy_column($content, $column_name, $term_id) {
    if ($column_name === 'thumb') {
        $content = '<img src="' . esc_url(z_taxonomy_image_url($term_id, 'thumbnail', true)) . '" alt="" style="max-width:50px; max-height:50px;">';
    }
    return $content;
}

// Plugin options and settings
//include 'plugin-options.php';
