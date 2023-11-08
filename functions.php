<?php
/**
 * ACF Options Page 
 *
 */
function be_acf_options_page() {
    if (!function_exists('acf_add_options_page'))
        return;

    acf_add_options_page(array(
        'title' => 'Site Options',
        'capability' => 'manage_options',
    ));
}
add_action('init', 'be_acf_options_page');
add_theme_support('post-thumbnails');
add_image_size('banner', 1350, 500, true);
add_image_size('dewebkiller', 830, 340, true);
add_image_size('admin-thumbnail', 50, 50, true);
add_image_size('dwk_service', 700, 480, true);
add_image_size('team', 500, 500, true);

//require_once('wp_bootstrap_navwalker.php');
/* ---- Register Menus ---- */

function register_glasseye_menus() {
    register_nav_menus(
            array(
                
                'primary' => __('Main Menu'),
                'footer-menu' => __('Footer Menu'),
                'sidebar-menu' => __('Sidebar Menu'),
            )
    );
}

add_action('init', 'register_glasseye_menus');



//Include external files
require_once(TEMPLATEPATH . '/inc/custom-post.php');
require_once(TEMPLATEPATH . '/inc/khmenu_type.php');
require_once(TEMPLATEPATH . '/inc/enqueues.php');



// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path($path) {

    // update path
    $path = get_stylesheet_directory() . '/acf/';

    // return
    return $path;
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir($dir) {

    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';

    // return
    return $dir;
}

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

function posts_columns($defaults) {
    $defaults['riv_post_thumbs'] = __('Thumbs');
    return $defaults;
}

function posts_custom_columns($column_name, $id) {
    if ($column_name === 'riv_post_thumbs') {
        echo the_post_thumbnail('admin-thumbnail');
    }
}


