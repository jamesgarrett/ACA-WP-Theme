<? // Register Custom Post Type

function register_portfolio() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Portfolio', 'text_domain' ),
		'parent_item_colon'   => __( 'Main Project', 'text_domain' ),
		'all_items'           => __( 'All Projects', 'text_domain' ),
		'view_item'           => __( 'View Project', 'text_domain' ),
		'add_new_item'        => __( 'New Project', 'text_domain' ),
		'add_new'             => __( 'New', 'text_domain' ),
		'edit_item'           => __( 'Edit Project', 'text_domain' ),
		'update_item'         => __( 'Update Project', 'text_domain' ),
		'search_items'        => __( 'Search Projects', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'projects', 'text_domain' ),
		'description'         => __( 'Past Work Showcase', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'clients' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'projects', $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_portfolio', 0 );

?>