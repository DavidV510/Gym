
<?php 
 /*
    Plugin Name: Gym Instructors- Post Types,
    Plugin URI:
    Description:New Post For Gym,
    Version:1.0.0,
    Author:David Vinter,
    
    */   

function gymfitness_instructors() {

	$labels = array(
		'name'                  => _x( 'Instructors', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Instructors', 'gymfitness' ),
		'name_admin_bar'        => __( 'Instructor', 'gymfitness' ),
		'archives'              => __( 'Archive', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Parent Instructor', 'gymfitness' ),
		'all_items'             => __( 'All Instructors', 'gymfitness' ),
		'add_new_item'          => __( 'Add Instructor', 'gymfitness' ),
		'add_new'               => __( 'Add Instructor', 'gymfitness' ),
		'new_item'              => __( 'New Instructor', 'gymfitness' ),
		'edit_item'             => __( 'Edit Instructor', 'gymfitness' ),
		'update_item'           => __( 'Update Instructor', 'gymfitness' ),
		'view_item'             => __( 'View Instructor', 'gymfitness' ),
		'view_items'            => __( 'View Instructors', 'gymfitness' ),
		'search_items'          => __( 'Search Instructor', 'gymfitness' ),
		'not_found'             => __( 'Not Found', 'gymfitness' ),
		'not_found_in_trash'    => __( 'Not Found in Trash', 'gymfitness' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert in Instructor', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Add in Instructor', 'gymfitness' ),
		'items_list'            => __( 'List Instructors', 'gymfitness' ),
		'items_list_navigation' => __( 'Navigate to Instructors', 'gymfitness' ),
		'filter_items_list'     => __( 'Filter Instructors', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Instructors', 'gymfitness' ),
		'description'           => __( 'Instructors for website', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('instructors', $args );

}
add_action( 'init', 'gymfitness_instructors', 0 );

?>