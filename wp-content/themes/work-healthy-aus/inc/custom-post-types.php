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
  		'slug'                  => 'services',
  		'with_front'            => true,
  		'pages'                 => true,
  		'feeds'                 => true,
  	);
  	$args = array(
  		'label'                 => __( 'Service', 'text_domain' ),
  		'description'           => __( 'Posts that belong to the Services branch.', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', ),
  		'taxonomies'            => array( 'category', 'post_tag' ),
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
