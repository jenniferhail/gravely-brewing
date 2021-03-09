<?php

// Register Custom Taxonomy
function gravely_beer_types() {

	$labels = array(
		'name'                       => _x( 'Beer Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Beer Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Beer Types', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Beer Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Beer Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Beer Type', 'text_domain' ),
		'update_item'                => __( 'Update Beer Type', 'text_domain' ),
		'view_item'                  => __( 'View Beer Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'gravely_beer_types', array( 'gravely_beers' ), $args );

}
add_action( 'init', 'gravely_beer_types', 0 );

// Register Custom Post Type
function gravely_beers() {

	$labels = array(
		'name'                  => _x( 'Beers', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Beer', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Beers', 'text_domain' ),
		'name_admin_bar'        => __( 'Beers', 'text_domain' ),
		'archives'              => __( 'Beer Archives', 'text_domain' ),
		'attributes'            => __( 'Beer Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Beers', 'text_domain' ),
		'add_new_item'          => __( 'Add New Beer', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Beer', 'text_domain' ),
		'edit_item'             => __( 'Edit Beer', 'text_domain' ),
		'update_item'           => __( 'Update Beer', 'text_domain' ),
		'view_item'             => __( 'View Beer', 'text_domain' ),
		'view_items'            => __( 'View Beers', 'text_domain' ),
		'search_items'          => __( 'Search Beer', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Beers list', 'text_domain' ),
		'items_list_navigation' => __( 'Beers list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Beers list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Beer', 'text_domain' ),
		'description'           => __( 'Full listing of beers', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'gravely_beer_types' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'gravely_beer', $args );

}
add_action( 'init', 'gravely_beers', 0 );

// Register Custom Taxonomy
function gravely_event_types() {

	$labels = array(
		'name'                       => _x( 'Event Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Event Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Event Types', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Event Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Event Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Event Type', 'text_domain' ),
		'update_item'                => __( 'Update Event Type', 'text_domain' ),
		'view_item'                  => __( 'View Event Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'gravely_event_types', array( 'gravely_events' ), $args );

}
add_action( 'init', 'gravely_event_types', 0 );

// Register Custom Post Type
function gravely_events() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Events', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Events list', 'text_domain' ),
		'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Events list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'Full listing of events', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'gravely_event_types' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'gravely_events', $args );

}
add_action( 'init', 'gravely_events', 0 );

?>
