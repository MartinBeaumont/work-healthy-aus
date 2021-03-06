<?php
  /*-----------------------------------------------------------------------------
    Register Custom Post Types
  -----------------------------------------------------------------------------*/

  // Register Custom Post Type for Services
  function services() {

  	$labels = array(
  		'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
  		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
  		'menu_name'             => __( 'Services', 'text_domain' ),
  		'name_admin_bar'        => __( 'Services', 'text_domain' ),
  		'archives'              => __( 'Service Archives', 'text_domain' ),
  		'attributes'            => __( 'Service Attributes', 'text_domain' ),
  		'parent_item_colon'     => __( 'Parent Service:', 'text_domain' ),
  		'all_items'             => __( 'All Services', 'text_domain' ),
  		'add_new_item'          => __( 'Add New Service', 'text_domain' ),
  		'add_new'               => __( 'Add New', 'text_domain' ),
  		'new_item'              => __( 'New Service', 'text_domain' ),
  		'edit_item'             => __( 'Edit Service', 'text_domain' ),
  		'update_item'           => __( 'Update Service', 'text_domain' ),
  		'view_item'             => __( 'View Service', 'text_domain' ),
  		'view_items'            => __( 'View Service', 'text_domain' ),
  		'search_items'          => __( 'Search Service', 'text_domain' ),
  		'not_found'             => __( 'Not found', 'text_domain' ),
  		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  		'featured_image'        => __( 'Featured Image', 'text_domain' ),
  		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
  		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
  		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
  		'insert_into_item'      => __( 'Insert into Service', 'text_domain' ),
  		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'text_domain' ),
  		'items_list'            => __( 'Services list', 'text_domain' ),
  		'items_list_navigation' => __( 'Services list navigation', 'text_domain' ),
  		'filter_items_list'     => __( 'Filter Services list', 'text_domain' ),
  	);
  	$rewrite = array(
  		'slug'                  => 'individual-services',
  		'with_front'            => true,
  		'pages'                 => true,
  		'feeds'                 => true,
  	);
  	$args = array(
  		'label'                 => __( 'Service', 'text_domain' ),
  		'description'           => __( 'Posts that belong to the Services branch.', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', 'excerpt' ),
  		'taxonomies'            => array( 'services_category' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'menu_icon'             => 'dashicons-exerpt-view',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => false,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'rewrite'               => $rewrite,
  		'capability_type'       => 'page',
  		'show_in_rest'          => true,
  	);
  	register_post_type( 'services', $args );

  }
  add_action( 'init', 'services', 0 );

  // Register Custom Taxonomy for Services
function services_category() {

	$labels = array(
		'name'                       => _x( 'Service Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Service Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Service Category', 'text_domain' ),
		'all_items'                  => __( 'Service Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Service Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Service Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Service Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Service Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Service Category', 'text_domain' ),
		'update_item'                => __( 'Update Service Category', 'text_domain' ),
		'view_item'                  => __( 'View Service Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Service Categories with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Service Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Service Categories', 'text_domain' ),
		'search_items'               => __( 'Search Service Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Service Categories', 'text_domain' ),
		'items_list'                 => __( 'Service Category list', 'text_domain' ),
		'items_list_navigation'      => __( 'Service Category list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'service-category',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'services_category', array( 'services' ), $args );

}
add_action( 'init', 'services_category', 0 );

/*
**
**    Resources Custom Post Type
**
*/

// Register Custom Post Type
function resources_cpt() {

	$labels = array(
		'name'                  => _x( 'Resources', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Resources', 'text_domain' ),
		'name_admin_bar'        => __( 'Resource', 'text_domain' ),
		'archives'              => __( 'Resource Archives', 'text_domain' ),
		'attributes'            => __( 'Resource Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Resource:', 'text_domain' ),
		'all_items'             => __( 'All Resources', 'text_domain' ),
		'add_new_item'          => __( 'Add New Resource', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Resource', 'text_domain' ),
		'edit_item'             => __( 'Edit Resource', 'text_domain' ),
		'update_item'           => __( 'Update Resource', 'text_domain' ),
		'view_item'             => __( 'View Resource', 'text_domain' ),
		'view_items'            => __( 'View Resources', 'text_domain' ),
		'search_items'          => __( 'Search Resource', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Resource', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Resource', 'text_domain' ),
		'items_list'            => __( 'Resources list', 'text_domain' ),
		'items_list_navigation' => __( 'Resources list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Resources list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'resources',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Resource', 'text_domain' ),
		'description'           => __( 'A custom post type for resources.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'            => array( 'resource_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'resources', $args );

}
add_action( 'init', 'resources_cpt', 0 );

if ( ! function_exists( 'resource_category' ) ) {

// Register Custom Taxonomy
function resource_category() {

	$labels = array(
		'name'                       => _x( 'Resource Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Resource Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Resource Category', 'text_domain' ),
		'all_items'                  => __( 'All Resource Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Resource Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Resource Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Resource Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Resource Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Resource Category', 'text_domain' ),
		'update_item'                => __( 'Update Resource Category', 'text_domain' ),
		'view_item'                  => __( 'View Resource Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Resource Category with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Resource Category', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Resource Categories', 'text_domain' ),
		'search_items'               => __( 'Search Resource Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Resource Categories', 'text_domain' ),
		'items_list'                 => __( 'Resource Categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'Resource Categories list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'resource-category',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'resource_category', array( 'resources' ), $args );

}
add_action( 'init', 'resource_category', 0 );

}
