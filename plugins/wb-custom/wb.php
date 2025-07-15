<?php
/*
Plugin Name: WB Custom Plugin
Plugin URI:  https://pixelsventures.com
Description: Custom Plugin for Wheels Boutique
Version:     1.0
Author:      https://pixelsventures.com
Author URI:  https://pixelsventures.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wheelsboutique
*/

//POST TYPES ////////////////////////////////////////////////////////////////

foreach (glob(plugin_dir_path(__FILE__) . '/post-types/*.php') as $post_types) {
    if (file_exists($post_types)) {
        include $post_types;
    }
}


//TAXONOMIES//////////////////////////////////////////////////////////////////
foreach (glob(plugin_dir_path(__FILE__) . '/taxonomies/*.php') as $taxonomies) {
    if (file_exists($taxonomies)) {
        include $taxonomies;
    }
}

//METABOXES/////////////////////////////////////////////////////////////////
require_once plugin_dir_path(__FILE__) . '/metaboxes/metaboxes.php';
//require plugin_dir_path(__FILE__) . '/dependencies/categories-images/categories-images.php';
//OTHER PLUGIN DEPENDENCIES////////////////////////////////////////////////
//require_once plugin_dir_path(__FILE__) . '/dependencies/meta-box/meta-box.php';
require_once plugin_dir_path(__FILE__) . '/dependencies/categories-images/categories-images.php';
