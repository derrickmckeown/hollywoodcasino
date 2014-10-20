<?php
/**
 * Event Post Type Example
 * This page walks you through creating
 * a Event post type and taxonomies.
 *
 * You should copy this to a new file to
 * create your Event type.
 *
 * Make sure to include it in functions.php
 */

// Registered handles for Event Post Type and Event Taxonomies
define( 'Event_POST_TYPE', 'Event_type' );
define( 'Event_TAXONOMY_CAT', 'Event_cat' );
define( 'Event_TAXONOMY_TAG', 'Event_tag' );


// let's create the function for the Event type
function scaffolding_Event_post_example() {

	/**
	 * Register Event Post Type (CPT)
	 * http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	
	register_post_type( Event_POST_TYPE,
	 	// let's now add all the options for this post type
		array(
			'labels' => array(
				'name'               => __( 'Events', 'scaffolding' ),                   // This is the Title of the Group
				'singular_name'      => __( 'Event Post', 'scaffolding' ),                    // This is the individual type
				'all_items'          => __( 'All Event Posts', 'scaffolding' ),               // the all items menu item
				'add_new'            => __( 'Add New', 'scaffolding' ),                        // The add new menu item
				'add_new_item'       => __( 'Add New Event Type', 'scaffolding' ),            // Add New Display Title
				'edit'               => __( 'Edit', 'scaffolding' ),                           // Edit Dialog
				'edit_item'          => __( 'Edit Event Types', 'scaffolding' ),                // Edit Display Title
				'new_item'           => __( 'New Event Type', 'scaffolding' ),                  // New Display Title
				'view_item'          => __( 'View Event Type', 'scaffolding' ),                 // View Display Title
				'search_items'       => __( 'Search Event Type', 'scaffolding' ),               // Search Event Type Title
				'not_found'          => __( 'Nothing found in the Database.', 'scaffolding' ), // This displays if there are no entries yet
				'not_found_in_trash' => __( 'Nothing found in Trash', 'scaffolding' ),         // This displays if there is nothing in the trash
				'parent_item_colon'  => ''
			),
			'description'         => __( 'This is the example Event post type', 'scaffolding' ), // Event Type Description
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'menu_position'       => 8,                       // where CPT appars in primary admin menu
			'menu_icon'           => 'dashicons-portfolio',   // icon for CPT - use handle from http://melchoyce.github.io/dashicons/ - only 3.9+
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'has_archive'         => 'Event-type',           // you can rename the archive slug here
			'rewrite'	          => array(
				'slug' => __( 'Event-type', 'scaffolding' ), // you can specify the url slug
				'with_front' => false
			),
			'query_var'           => true,

			// the next one is important, it tells what's enabled in the post editor
			'supports'            => array( 'title',  'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'Event-fields', 'comments', 'revisions', 'sticky' ),

			// register taxonomies for CPT, edit if new CT's defined above
			'taxonomies'          => array( 'category', 'post_tag', Event_TAXONOMY_CAT, Event_TAXONOMY_TAG )
	 	)
	); /* end of register post type */


	/**
	 * Register Event Taxonomies
	 * http://codex.wordpress.org/Function_Reference/register_taxonomy
	 */

	// now let's add Event categories (these act like categories)
	register_taxonomy( Event_TAXONOMY_CAT,
		array( Event_POST_TYPE ),  // CPT handle defined above
		array(
			'hierarchical' => true, // if this is true, it acts like categories
			'labels' => array(
				'name'              => __( 'Event Categories', 'scaffolding' ),        // name of the Event taxonomy
				'singular_name'     => __( 'Event Category', 'scaffolding' ),          // single taxonomy name
				'search_items'      => __( 'Search Event Categories', 'scaffolding' ), // search title for taxomony
				'all_items'         => __( 'All Event Categories', 'scaffolding' ),    // all title for taxonomies
				'parent_item'       => __( 'Parent Event Category', 'scaffolding' ),   // parent title for taxonomy
				'parent_item_colon' => __( 'Parent Event Category:', 'scaffolding' ),  // parent taxonomy title
				'edit_item'         => __( 'Edit Event Category', 'scaffolding' ),     // edit Event taxonomy title
				'update_item'       => __( 'Update Event Category', 'scaffolding' ),   // update title for taxonomy
				'add_new_item'      => __( 'Add New Event Category', 'scaffolding' ),  // add new title for taxonomy
				'new_item_name'     => __( 'New Event Category Name', 'scaffolding' )  // name title for taxonomy
			),
			'show_admin_column' => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => __( 'Event-category', 'scaffolding' ) )
		)
	);

	// now let's add Event tags (these act like tags)
	register_taxonomy( Event_TAXONOMY_TAG,
		array( Event_POST_TYPE ),   // CPT handle defined above
		array(
			'hierarchical' => false, // if this is false, it acts like tags
			'labels' => array(
				'name'              => __( 'Event Tags', 'scaffolding' ),        // name of the Event taxonomy
				'singular_name'     => __( 'Event Tag', 'scaffolding' ),         // single taxonomy name
				'search_items'      => __( 'Search Event Tags', 'scaffolding' ), // search title for taxomony
				'all_items'         => __( 'All Event Tags', 'scaffolding' ),    // all title for taxonomies
				'parent_item'       => __( 'Parent Event Tag', 'scaffolding' ),  // parent title for taxonomy
				'parent_item_colon' => __( 'Parent Event Tag:', 'scaffolding' ), // parent taxonomy title
				'edit_item'         => __( 'Edit Event Tag', 'scaffolding' ),    // edit Event taxonomy title
				'update_item'       => __( 'Update Event Tag', 'scaffolding' ),  // update title for taxonomy
				'add_new_item'      => __( 'Add New Event Tag', 'scaffolding' ), // add new title for taxonomy
				'new_item_name'     => __( 'New Event Tag Name', 'scaffolding' ) // name title for taxonomy
			),
			'show_admin_column' => true,
			'show_ui'           => true,
			'query_var'         => true
		)
	);

	// For Event meta boxes, use the Advanced Event Fields plugin from http://www.advancedEventfields.com
}

// adding the function to the Wordpress init
add_action( 'init', 'scaffolding_Event_post_example' );