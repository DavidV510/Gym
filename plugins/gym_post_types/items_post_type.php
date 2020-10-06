<?php 

    /*
    Plugin Name: Gym Items- Post Types,
    Plugin URI:
    Description:New Post For Gym,
    Version:1.0.0,
    Author:David Vinter,
    
    */   


    function gym_item_post_type() {

        $labels = array(
            'name'                  => _x( 'items', 'Post Type General Name', 'gym' ),
            'singular_name'         => _x( 'item', 'Post Type Singular Name', 'gym' ),
            'menu_name'             => __( 'items', 'gym' ),
            'name_admin_bar'        => __( 'items', 'gym' ),
            'archives'              => __( 'Archive', 'gym' ),
            'attributes'            => __( 'Attributes', 'gym' ),
            'parent_item_colon'     => __( 'Parent item', 'gym' ),
            'all_items'             => __( 'All items', 'gym' ),
            'add_new_item'          => __( 'Add item', 'gym' ),
            'add_new'               => __( 'Add item', 'gym' ),
            'new_item'              => __( 'New item', 'gym' ),
            'edit_item'             => __( 'Edit item', 'gym' ),
            'update_item'           => __( 'Update item', 'gym' ),
            'view_item'             => __( 'View item', 'gym' ),
            'view_items'            => __( 'View item', 'gym' ),
            'search_items'          => __( 'Search item', 'gym' ),
            'not_found'             => __( 'Not found', 'gym' ),
            'not_found_in_trash'    => __( 'Not found in trash', 'gym' ),
            'featured_image'        => __( 'Featured Image', 'gym' ),
            'set_featured_image'    => __( 'Save Featured Image', 'gym' ),
            'remove_featured_image' => __( 'Remove Featured Image', 'gym' ),
            'use_featured_image'    => __( 'Use as Featured Image', 'gym' ),
            'insert_into_item'      => __( 'Insert in item', 'gym' ),
            'uploaded_to_this_item' => __( 'Add in item', 'gym' ),
            'items_list'            => __( 'items List', 'gym' ),
            'items_list_navigation' => __( 'Navigate to items', 'gym' ),
            'filter_items_list'     => __( 'Filter items', 'gym' ),
        );
        $args = array(
            'label'                 => __( 'item', 'gym' ),
            'description'           => __( 'items for gym Website', 'gym' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 6,
            'menu_icon'             => 'dashicons-welcome-learn-more',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'gym_items', $args );
    
    }
    add_action( 'init', 'gym_item_post_type', 0 );
?>