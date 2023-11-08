<?php
/** custom category type */
add_action( 'init', 'creat_khmenu_type' );

function creat_khmenu_type() {
	register_taxonomy(
		'kh_menu_cat',
		'kh_menu',
		array(
			'label' => __( 'Menu Type' ),
			'rewrite' => array( 'slug' => 'kh_menu' ),
			'hierarchical' => true,
			'show_admin_column' => true,
	
		)
	);
}

