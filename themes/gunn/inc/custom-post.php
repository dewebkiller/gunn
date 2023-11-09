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
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => __('service')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-editor-ol',
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
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

    register_post_type('brands', array(
        'labels' => array(
            'name' => __('Brands'),
            'singular_name' => __('brand')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'rewrite' => array('slug' => 'brands'),
        'supports' => array('title', 'thumbnail'),
            )
    );
}
