<?php

function dwk_enqueues() {
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1');
    wp_enqueue_style('bootstrap');

    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.3.6');
    wp_enqueue_style('reset');

    wp_register_style('hover', get_template_directory_uri() . '/css/hover.css', array(), '2.3.2');
    wp_enqueue_style('hover');
    
    wp_register_style('layout', get_template_directory_uri() . '/css/layout.css', array(), '1.3.6');
    wp_enqueue_style('layout');

    wp_register_style('tabs', get_template_directory_uri() . '/css/tabs.css', array(), '1.3.6');
    wp_enqueue_style('tabs');
    
    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.3.6');
    wp_enqueue_style('carousel');
    
    wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.css', array(), '1.3.6');
    wp_enqueue_style('owl-theme');
    
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/all.css', array(), '1.3.6');
    wp_enqueue_style('font-awesome');
    
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css', array(), '4.1.1');
    wp_enqueue_style('animate');
    


    wp_register_style('preloader', get_template_directory_uri() . '/css/preloader.css', array(), '1.0');
    wp_enqueue_style('preloader');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0');
    wp_enqueue_style('responsive');

    wp_register_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css', array(), '1.3.6');
    wp_enqueue_style('fancybox');

    wp_register_style('opensans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap', false, '4.7.0', null);
    wp_enqueue_style('opensans');

    wp_register_style('Courgette', 'https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans:wght@400;600;700&display=swap', false, '4.7.0', null);
    wp_enqueue_style('Courgette');

    /* Scripts */

    //wp_enqueue_script('jquery');
    /* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
      https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null, true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', false, null, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('owljs', get_template_directory_uri() . '/js/owl.carousel.js', false, null, true);
    wp_enqueue_script('owljs');
    
    wp_register_script('waypoints',  get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, '4.0', true);
    wp_enqueue_script('waypoints');

    wp_register_script('wow',  get_template_directory_uri() . '/js/wow.min.js', false, '4.0', true);
    wp_enqueue_script('wow');

    wp_register_script('fancybox',  'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js', false, '4.0', true);
    wp_enqueue_script('fancybox');

    //wp_register_script('scrollspy',  'https://gitcdn.xyz/repo/thesmart/jquery-scrollspy/0.1.3/scrollspy.js', false, '4.0', true);
    //wp_enqueue_script('scrollspy');
    
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', false, null, true);
    wp_enqueue_script('custom');

    wp_register_script('tabs', get_template_directory_uri() . '/js/tabs.js', false, null, true);
    wp_enqueue_script('tabs');
}

add_action('wp_enqueue_scripts', 'dwk_enqueues', 100);
