<?php
/** custom category type */
add_action( 'init', 'create_brands_type' );

function create_brands_type() {
	register_taxonomy(
		'brands_type',
		'brands',
		array(
			'label' => __( 'Brands Type' ),
			'rewrite' => array( 'slug' => 'brands_type' ),
			'hierarchical' => true,
			'show_admin_column' => true,
	
		)
	);
}

