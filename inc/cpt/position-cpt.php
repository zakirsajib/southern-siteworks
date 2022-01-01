<?php
// Register Custom Post Type
function position_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Southern Siteworks Positions', 'Post Type General Name', 'THEME_TEXTDOMAIN' ),
		'singular_name'         => _x( 'Southern Siteworks Position', 'Post Type Singular Name', 'THEME_TEXTDOMAIN' ),
		'menu_name'             => __( 'Southern Positions', 'THEME_TEXTDOMAIN' ),
		'name_admin_bar'        => __( 'Southern Siteworks Positions', 'THEME_TEXTDOMAIN' ),
		'archives'              => __( 'Position Archives', 'THEME_TEXTDOMAIN' ),
		'attributes'            => __( 'Position Attributes', 'THEME_TEXTDOMAIN' ),
		'parent_item_colon'     => __( 'Parent Position:', 'THEME_TEXTDOMAIN' ),
		'all_items'             => __( 'All Positions', 'THEME_TEXTDOMAIN' ),
		'add_new_item'          => __( 'Add New Position', 'THEME_TEXTDOMAIN' ),
		'add_new'               => __( 'Add New', 'THEME_TEXTDOMAIN' ),
		'new_item'              => __( 'New Position', 'THEME_TEXTDOMAIN' ),
		'edit_item'             => __( 'Edit Position', 'THEME_TEXTDOMAIN' ),
		'update_item'           => __( 'Update Position', 'THEME_TEXTDOMAIN' ),
		'view_item'             => __( 'View Position', 'THEME_TEXTDOMAIN' ),
		'view_items'            => __( 'View Positions', 'THEME_TEXTDOMAIN' ),
		'search_items'          => __( 'Search Position', 'THEME_TEXTDOMAIN' ),
		'not_found'             => __( 'Not found', 'THEME_TEXTDOMAIN' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'THEME_TEXTDOMAIN' ),
		'featured_image'        => __( 'Featured Image', 'THEME_TEXTDOMAIN' ),
		'set_featured_image'    => __( 'Set featured image', 'THEME_TEXTDOMAIN' ),
		'remove_featured_image' => __( 'Remove featured image', 'THEME_TEXTDOMAIN' ),
		'use_featured_image'    => __( 'Use as featured image', 'THEME_TEXTDOMAIN' ),
		'insert_into_item'      => __( 'Insert into item', 'THEME_TEXTDOMAIN' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'THEME_TEXTDOMAIN' ),
		'items_list'            => __( 'Positions list', 'THEME_TEXTDOMAIN' ),
		'items_list_navigation' => __( 'Positions list navigation', 'THEME_TEXTDOMAIN' ),
		'filter_items_list'     => __( 'Filter items list', 'THEME_TEXTDOMAIN' ),
	);
	$args = array(
		'label'                 => __( 'Southern Siteworks Position', 'THEME_TEXTDOMAIN' ),
		'description'           => __( 'Southern Siteworks Positions Description', 'THEME_TEXTDOMAIN' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'southern_positions', $args );

}
add_action( 'init', 'position_custom_post_type', 0 );
