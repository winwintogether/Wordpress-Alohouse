<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */

function acadia_register_staff_metabox() {
	$prefix = '_acadia_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Staff Options', 'cmb2' ),
		'object_types'  => array( 'staff', ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

	$meta_boxes->add_field( array(
			'name' => __( 'Staff Title', 'cmb' ),
				'desc' => __( 'Add staff title and credentials here', 'cmb' ),
				'id'   => $prefix . 'staff_title',
				'type' => 'text',
	) );

}

function acadia_register_home_page_meta() {
	$prefix = '_acadia_';

	$home_options = new_cmb2_box( array(
        'id'           => $prefix . 'home_content',
        'title'        => 'Home Page Content',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/home-page.php' ),
        'show_names'   => true, // Show field names on the left
    ) );

    $home_options->add_field( array(
    'name'    => 'First Section Content',
    'desc'    => '',
    'id'      => $prefix . 'first_section_content',
    'type'    => 'wysiwyg'
) );

    $home_options->add_field( array(
    'name'    => 'First Section Title',
    'desc'    => '',
    'id'      => $prefix . 'first_section_title',
    'type'    => 'text'
) );

    $home_options->add_field( array(
    'name'    => 'Second Section Content',
    'desc'    => '',
    'id'      => $prefix . 'second_section_content',
    'type'    => 'wysiwyg'
) );

    $home_options->add_field( array(
    'name'    => 'Third Section Content',
    'desc'    => '',
    'id'      => $prefix . 'third_section_content',
    'type'    => 'wysiwyg'
) );

}

function acadia_register_page_metabox() {
	$prefix = '_acadia_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$page_options = new_cmb2_box( array(
		'id'            => $prefix . 'page_metabox',
		'title'         => __( 'Page Options', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
	) );


	$page_options->add_field( array(
    'name'    => 'Header Large Image',
    'desc'    => 'Max Width 1300px',
    'id'      => 'large_header_image',
    'type'    => 'file',
    'options' => array(
        'url' => false, 
        'add_upload_file_text' => 'Upload File' 
    ),
) );

	$page_options->add_field( array(
    'name'    => 'Header Medium Image',
    'desc'    => 'Max Width 768px',
    'id'      => 'medium_header_image',
    'type'    => 'file',
    'options' => array(
        'url' => false, 
        'add_upload_file_text' => 'Upload File' 
    ),
) );

	$page_options->add_field( array(
    'name'    => 'Header Small Image',
    'desc'    => 'Max Width 500px',
    'id'      => 'small_header_image',
    'type'    => 'file',
    'options' => array(
        'url' => false, 
        'add_upload_file_text' => 'Upload File' 
    ),
) );

}

function acadia_register_slider_metabox() {
    $prefix = '_acadia_';
    
    $slider_options = new_cmb2_box( array(
        'id'            => $prefix . 'slider_metabox',
        'title'         => __( 'Page Options', 'cmb2' ),
        'object_types'  => array( 'home-slider', ), // Post type
    ) );


    $slider_options->add_field( array(
            'name' => __( 'Headline', 'cmb2' ),
                'desc' => __( 'Add staff title and credentials here', 'cmb' ),
                'id'   => $prefix . 'headline',
                'type' => 'text',
    ) );

    $slider_options->add_field( array(
            'name' => __( 'Secondary Text', 'cmb2' ),
                'desc' => __( 'Add staff title and credentials here', 'cmb' ),
                'id'   => $prefix . 'secondary_text',
                'type' => 'text',
    ) );

}

add_action( 'cmb2_admin_init', 'acadia_register_home_page_meta' );
add_action( 'cmb2_admin_init', 'acadia_register_staff_metabox' );
add_action( 'cmb2_admin_init', 'acadia_register_page_metabox' );
add_action( 'cmb2_admin_init', 'acadia_register_slider_metabox' );



