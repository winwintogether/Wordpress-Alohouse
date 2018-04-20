<?php 

function create_post_type_staff()
{
    register_taxonomy_for_object_type('category', 'staff'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'staff');
    register_post_type('staff', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Staff', 'riviera4media'), // Rename these to suit
            'singular_name' => __('Staff', 'riviera4media'),
            'add_new' => __('Add New', 'riviera4media'),
            'add_new_item' => __('Add New Staff', 'riviera4media'),
            'edit' => __('Edit', 'riviera4media'),
            'edit_item' => __('Edit Staff', 'riviera4media'),
            'new_item' => __('New Staff', 'riviera4media'),
            'view' => __('View Staff', 'riviera4media'),
            'view_item' => __('View Staff', 'riviera4media'),
            'search_items' => __('Search Staff', 'riviera4media'),
            'not_found' => __('No Staff', 'riviera4media'),
            'not_found_in_trash' => __('No Staff in Trash', 'riviera4media')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'slug' => 'staff',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'show_in_rest' => true,
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

function wpa_show_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'testimonials' ){
        $terms = wp_get_object_terms( $post->ID, 'testimonial_cat' );
        if( $terms ){
            return str_replace( '%testimonial_cat%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_show_permalinks', 1, 2 );

function create_post_type_testimonials()
{
    register_taxonomy_for_object_type('category', 'testimonials'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'testimonials');
    register_post_type('testimonials', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Testimonials', 'riviera4media'), // Rename these to suit
            'singular_name' => __('Testimonial', 'riviera4media'),
            'add_new' => __('Add New', 'riviera4media'),
            'add_new_item' => __('Add New Testimonial', 'riviera4media'),
            'edit' => __('Edit', 'riviera4media'),
            'edit_item' => __('Edit Testimonial', 'riviera4media'),
            'new_item' => __('New Testimonial', 'riviera4media'),
            'view' => __('View Testimonial', 'riviera4media'),
            'view_item' => __('View Testimonial', 'riviera4media'),
            'search_items' => __('Search Testimonial', 'riviera4media'),
            'not_found' => __('No Testimonial', 'riviera4media'),
            'not_found_in_trash' => __('No Testimonials in Trash', 'riviera4media')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'show_in_rest' => true,
        'rewrite' => array( 'slug' => 'testimonials/%testimonial_cat%', 'with_front' => false ),
        'has_archive' => 'testimonials',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

function tesimonials_cat_init() {
    // create a new taxonomy
    register_taxonomy(
        'testimonial_cat',
        'testimonials',
        array(
            'label' => __( 'Testimonial Category' ),
            'rewrite' => array( 'slug' => 'testimonials', 'with_front' => false ),
            'hierarchical' => true,
        )
    );
}

add_action( 'init', 'tesimonials_cat_init' );

function create_post_type_activities()
{
    register_taxonomy_for_object_type('category', 'activities'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'activities');
    register_post_type('activities', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Activities', 'riviera4media'), // Rename these to suit
            'singular_name' => __('Activity', 'riviera4media'),
            'add_new' => __('Add New', 'riviera4media'),
            'add_new_item' => __('Add New Activity', 'riviera4media'),
            'edit' => __('Edit', 'riviera4media'),
            'edit_item' => __('Edit Activity', 'riviera4media'),
            'new_item' => __('New Activity', 'riviera4media'),
            'view' => __('View Activity', 'riviera4media'),
            'view_item' => __('View Activity', 'riviera4media'),
            'search_items' => __('Search Activity', 'riviera4media'),
            'not_found' => __('No Activity', 'riviera4media'),
            'not_found_in_trash' => __('No Activity in Trash', 'riviera4media')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'slug' => 'activities',
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), 
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

function create_post_type_modalities()
{
    register_taxonomy_for_object_type('category', 'modalities'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'modalities');
    register_post_type('treatment-modalities', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Modalities', 'riviera4media'), // Rename these to suit
            'singular_name' => __('Modality', 'riviera4media'),
            'add_new' => __('Add New', 'riviera4media'),
            'add_new_item' => __('Add New Modality', 'riviera4media'),
            'edit' => __('Edit', 'riviera4media'),
            'edit_item' => __('Edit Modality', 'riviera4media'),
            'new_item' => __('New Modality', 'riviera4media'),
            'view' => __('View Modality', 'riviera4media'),
            'view_item' => __('View Modality', 'riviera4media'),
            'search_items' => __('Search Modality', 'riviera4media'),
            'not_found' => __('No Modality', 'riviera4media'),
            'not_found_in_trash' => __('No Modality in Trash', 'riviera4media')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'slug' => 'treatment-modalities',
        'rewrite' => 'treatment-modalities',
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), 
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

function create_post_type_slider()
{
    register_taxonomy_for_object_type('category', 'home-slider'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'home-slider');
    register_post_type('home-slider', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Slider', 'riviera4media'), // Rename these to suit
            'singular_name' => __('Slider', 'riviera4media'),
            'add_new' => __('Add New', 'riviera4media'),
            'add_new_item' => __('Add New Slider', 'riviera4media'),
            'edit' => __('Edit', 'riviera4media'),
            'edit_item' => __('Edit Slider', 'riviera4media'),
            'new_item' => __('New Slider', 'riviera4media'),
            'view' => __('View Slider', 'riviera4media'),
            'view_item' => __('View Slider', 'riviera4media'),
            'search_items' => __('Search Slider', 'riviera4media'),
            'not_found' => __('No Slider', 'riviera4media'),
            'not_found_in_trash' => __('No Slider in Trash', 'riviera4media')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'thumbnail'
        ), 
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

add_action('init', 'create_post_type_staff'); // Add our HTML5 Blank Custom Post Type
add_action('init', 'create_post_type_testimonials');
add_action('init', 'create_post_type_activities');
add_action('init', 'create_post_type_modalities');
add_action('init', 'create_post_type_slider');