<?php

/* -----------Banner----------- */
add_action('init', 'utte_banner', 9);

function utte_banner() {

    register_post_type('banner', array(
        'labels' => array(
            'name' => __('banner'),
            'singular_name' => __('Banner')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-image',
        'rewrite' => array('slug' => 'banner'),
        'supports' => array('title', 'thumbnail'),
            )
    );
    register_post_type('kh_menu', array(
        'labels' => array(
            'name' => __('KH Menu'),
            'singular_name' => __('kh_menu')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-editor-ol',
        'rewrite' => array('slug' => 'kh_menu'),
        'supports' => array('title', 'thumbnail', 'editor'),
            )
    );

    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials'),
            'singular_name' => __('testimonial')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-quote',
        'rewrite' => array('slug' => 'testimonials'),
        'supports' => array('title', 'editor', 'thumbnail'),
            )
    );

    register_post_type('features', array(
        'labels' => array(
            'name' => __('Features'),
            'singular_name' => __('features')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'rewrite' => array('slug' => 'features'),
        'supports' => array('title', 'editor'),
            )
    );
}
