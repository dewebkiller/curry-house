<?php
add_action('init', 'dwk_register_principles');
add_action('init', 'dwk_register_objectives');
add_action('init', 'dwk_register_ourvalues');

function dwk_register_objectives() {
    $args = array(
        'labels' => array(
            'name' => _x('About Bsk', 'post type general name', 'bsk_objecive'),
            'singular_name' => _x('Objectives', 'post type singular name', 'bsk_objecive'),
            'menu_name' => __('About Bsk', 'bsk_objecive'),
            'parent_item_colon' => __('Parent Item:', 'bsk_objecive'),
            'all_items' => __('Objectives', 'bsk_objecive'),
            'view_item' => __('View Objectives', 'bsk_objecive'),
            'add_new_item' => __('Add New Objectives', 'bsk_objecive'),
            'add_new' => __('Add Objectives', 'bsk_objecive'),
            'edit_item' => __('Edit Objectives', 'bsk_objecive'),
            'update_item' => __('Update Objectives', 'bsk_objecive'),
            'search_items' => __('Search Objectives', 'bsk_objecive'),
            'not_found' => __('No Objectives found', 'bsk_objecive'),
            'not_found_in_trash' => __('No Objectives found in Trash', 'bsk_objecive'),
        ),
        'public' => false,
        'query_var' => true,
        'publicly_queryable' => false,
        //'taxonomies' => array('category'),
        'show_ui' => true,
        'has_archive' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        //'show_in_menu' => 'edit.php?post_type=dwk_hbooking',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-palmtree',
        'supports' => array('title','editor','thumbnail'),
        'hierarchical' => false,
        // 'can_export'         => false,
        'capabilities' => array(
        //'create_posts'  => 'do_not_allow'
        )
    );
    register_post_type('bsk_objecive', $args);
}

function dwk_register_principles() {
    $args = array(
        'labels' => array(
            'name' => _x('Principles', 'post type general name', 'bsk_principles'),
            'singular_name' => _x('Principles', 'post type singular name', 'bsk_principles'),
            'menu_name' => __('Principles', 'bsk_principles'),
            'parent_item_colon' => __('Parent Item:', 'bsk_principles'),
            'all_items' => __('Principles', 'bsk_principles'),
            'view_item' => __('View Principles', 'bsk_principles'),
            'add_new_item' => __('Add New Principles', 'bsk_principles'),
            'add_new' => __('Add Principles', 'bsk_principles'),
            'edit_item' => __('Edit Principles', 'bsk_principles'),
            'update_item' => __('Update Principles', 'bsk_principles'),
            'search_items' => __('Search Principles', 'bsk_principles'),
            'not_found' => __('No Principles found', 'bsk_principles'),
            'not_found_in_trash' => __('No Principles found in Trash', 'bsk_principles'),
        ),
        'public' => false,
        'query_var' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'has_archive' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'show_in_menu' => 'edit.php?post_type=bsk_objecive',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title','editor','thumbnail'),
        'hierarchical' => false,
        // 'can_export'         => false,
        'capabilities' => array(
        // 'create_posts'  => 'do_not_allow'
        )
    );

    register_post_type('bsk_principles', $args);
}

function dwk_register_ourvalues() {
    $args = array(
        'labels' => array(
            'name' => _x('Values', 'post type general name', 'our_values'),
            'singular_name' => _x('Values', 'post type singular name', 'our_values'),
            'menu_name' => __('Our Values', 'our_values'),
            'parent_item_colon' => __('Parent Item:', 'our_values'),
            'all_items' => __('Values', 'our_values'),
            'view_item' => __('View Values', 'our_values'),
            'add_new_item' => __('Add New Values', 'our_values'),
            'add_new' => __('Add Values', 'our_values'),
            'edit_item' => __('Edit Values', 'our_values'),
            'update_item' => __('Update Values', 'our_values'),
            'search_items' => __('Search Values', 'our_values'),
            'not_found' => __('No Values found', 'our_values'),
            'not_found_in_trash' => __('No Values found in Trash', 'our_values'),
        ),
        'public' => false,
        'query_var' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'has_archive' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
         'show_in_menu' => 'edit.php?post_type=bsk_objecive',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title','editor','thumbnail'),
        'hierarchical' => false,
        // 'can_export'         => false,
        'capabilities' => array(
        // 'create_posts'  => 'do_not_allow'
        )
    );

    register_post_type('our_values', $args);
}