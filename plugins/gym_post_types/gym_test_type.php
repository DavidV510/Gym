<?php 
 /*
    Plugin Name: Gym Testimonials- Post Types,
    Plugin URI:
    Description:New Post For Gym,
    Version:1.0.0,
    Author:David Vinter,
    
    */   


function gymfitness_testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Testimonials', 'gymfitness' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
		'archives'              => __( 'Archive', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Parent Testimonial ', 'gymfitness' ),
		'all_items'             => __( 'All Testimonials', 'gymfitness' ),
		'add_new_item'          => __( 'Add Testimonial', 'gymfitness' ),
		'add_new'               => __( 'Add Testimonial', 'gymfitness' ),
		'new_item'              => __( 'New Testimonial', 'gymfitness' ),
		'edit_item'             => __( 'Edit Testimonial', 'gymfitness' ),
		'update_item'           => __( 'Update Testimonial', 'gymfitness' ),
		'view_item'             => __( 'View Testimonial', 'gymfitness' ),
		'view_items'            => __( 'View Testimonials', 'gymfitness' ),
		'search_items'          => __( 'Search Testimonial', 'gymfitness' ),
		'not_found'             => __( 'Not found in Trash', 'gymfitness' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert Into Testimonial', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Add At Testimonial', 'gymfitness' ),
		'items_list'            => __( 'Testimonial List', 'gymfitness' ),
		'items_list_navigation' => __( 'Navigate toTestimonials', 'gymfitness' ),
		'filter_items_list'     => __( 'Filter Testimonials', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'gymfitness' ),
		'description'           => __( 'Testimonials para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'gymfitness_testimonials', 0 );

?>