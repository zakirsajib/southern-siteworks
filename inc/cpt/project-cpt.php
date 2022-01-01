<?php
// Register Custom Post Type
function projects_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Southern Siteworks Projects', 'Post Type General Name', 'THEME_TEXTDOMAIN' ),
		'singular_name'         => _x( 'Southern Siteworks Project', 'Post Type Singular Name', 'THEME_TEXTDOMAIN' ),
		'menu_name'             => __( 'Southern Projects', 'THEME_TEXTDOMAIN' ),
		'name_admin_bar'        => __( 'Southern Siteworks Projects', 'THEME_TEXTDOMAIN' ),
		'archives'              => __( 'Project Archives', 'THEME_TEXTDOMAIN' ),
		'attributes'            => __( 'Project Attributes', 'THEME_TEXTDOMAIN' ),
		'parent_item_colon'     => __( 'Parent Project:', 'THEME_TEXTDOMAIN' ),
		'all_items'             => __( 'All Projects', 'THEME_TEXTDOMAIN' ),
		'add_new_item'          => __( 'Add New Project', 'THEME_TEXTDOMAIN' ),
		'add_new'               => __( 'Add New', 'THEME_TEXTDOMAIN' ),
		'new_item'              => __( 'New Project', 'THEME_TEXTDOMAIN' ),
		'edit_item'             => __( 'Edit Project', 'THEME_TEXTDOMAIN' ),
		'update_item'           => __( 'Update Project', 'THEME_TEXTDOMAIN' ),
		'view_item'             => __( 'View Project', 'THEME_TEXTDOMAIN' ),
		'view_items'            => __( 'View Projects', 'THEME_TEXTDOMAIN' ),
		'search_items'          => __( 'Search Project', 'THEME_TEXTDOMAIN' ),
		'not_found'             => __( 'Not found', 'THEME_TEXTDOMAIN' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'THEME_TEXTDOMAIN' ),
		'featured_image'        => __( 'Featured Image', 'THEME_TEXTDOMAIN' ),
		'set_featured_image'    => __( 'Set featured image', 'THEME_TEXTDOMAIN' ),
		'remove_featured_image' => __( 'Remove featured image', 'THEME_TEXTDOMAIN' ),
		'use_featured_image'    => __( 'Use as featured image', 'THEME_TEXTDOMAIN' ),
		'insert_into_item'      => __( 'Insert into item', 'THEME_TEXTDOMAIN' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'THEME_TEXTDOMAIN' ),
		'items_list'            => __( 'Projects list', 'THEME_TEXTDOMAIN' ),
		'items_list_navigation' => __( 'Projects list navigation', 'THEME_TEXTDOMAIN' ),
		'filter_items_list'     => __( 'Filter items list', 'THEME_TEXTDOMAIN' ),
	);
	$args = array(
		'label'                 => __( 'Southern Siteworks Project', 'THEME_TEXTDOMAIN' ),
		'description'           => __( 'Southern Siteworks Projects Description', 'THEME_TEXTDOMAIN' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'taxonomies'            => array( 'projectcategory' ),
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
	register_post_type( 'southern_projects', $args );

}
add_action( 'init', 'projects_custom_post_type', 0 );


// Register Custom Taxonomy
function project_category() {

	$labels = array(
		'name'                       => _x( 'Project Categories', 'Taxonomy General Name', 'THEME_TEXTDOMAIN' ),
		'singular_name'              => _x( 'Project Category', 'Taxonomy Singular Name', 'THEME_TEXTDOMAIN' ),
		'menu_name'                  => __( 'Project Category', 'THEME_TEXTDOMAIN' ),
		'all_items'                  => __( 'All Project Categories', 'THEME_TEXTDOMAIN' ),
		'parent_item'                => __( 'Parent Project Category', 'THEME_TEXTDOMAIN' ),
		'parent_item_colon'          => __( 'Parent Project Category:', 'THEME_TEXTDOMAIN' ),
		'new_item_name'              => __( 'New Project Category Name', 'THEME_TEXTDOMAIN' ),
		'add_new_item'               => __( 'Add New Project Category', 'THEME_TEXTDOMAIN' ),
		'edit_item'                  => __( 'Edit Project Category', 'THEME_TEXTDOMAIN' ),
		'update_item'                => __( 'Update Project Category', 'THEME_TEXTDOMAIN' ),
		'view_item'                  => __( 'View Project Category', 'THEME_TEXTDOMAIN' ),
		'separate_items_with_commas' => __( 'Separate Project Categories with commas', 'THEME_TEXTDOMAIN' ),
		'add_or_remove_items'        => __( 'Add or remove Project Categories', 'THEME_TEXTDOMAIN' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'THEME_TEXTDOMAIN' ),
		'popular_items'              => __( 'Popular Project Categories', 'THEME_TEXTDOMAIN' ),
		'search_items'               => __( 'Search Project Categories', 'THEME_TEXTDOMAIN' ),
		'not_found'                  => __( 'Not Found', 'THEME_TEXTDOMAIN' ),
		'no_terms'                   => __( 'No Project Categories', 'THEME_TEXTDOMAIN' ),
		'items_list'                 => __( 'Project Categories list', 'THEME_TEXTDOMAIN' ),
		'items_list_navigation'      => __( 'Project Categories list navigation', 'THEME_TEXTDOMAIN' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'projectcategory', array( 'southern_projects' ), $args );

}
add_action( 'init', 'project_category', 0 );
