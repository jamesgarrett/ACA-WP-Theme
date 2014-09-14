<?
// 
// Register Podcast CPT
// 
function register_podcasts() {
	$labels = array(
		'name'                => _x( 'Episodes', 'Post Type General Name', 'episode' ),
		'singular_name'       => _x( 'Episode', 'Post Type Singular Name', 'episode' ),
		'menu_name'           => __( 'Podcast', 'episode' ),
		'parent_item_colon'   => __( 'Parent:', 'episode' ),
		'all_items'           => __( 'All Episodes', 'episode' ),
		'view_item'           => __( 'View Episode', 'episode' ),
		'add_new_item'        => __( 'Add Episode', 'episode' ),
		'add_new'             => __( 'Add New', 'episode' ),
		'edit_item'           => __( 'Edit Item', 'episode' ),
		'update_item'         => __( 'Update Item', 'episode' ),
		'search_items'        => __( 'Search Item', 'episode' ),
		'not_found'           => __( 'Not found', 'episode' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'episode' ),
	);
	$args = array(
		'label'               => __( 'episode', 'episode' ),
		'description'         => __( 'Manage podcast episodes.', 'episode' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions', 'post-formats', ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-microphone',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'episode', $args );

}
add_action( 'init', 'register_podcasts', 0 );

// 
// Append ACF metadata to the_content if field
// |
// |—> localhost/dev/mulhern/?feed=rss&post_type=episode
// 
function custom_fields_in_feed($content) {
    // if(is_feed()) {
        $post_id = get_the_ID();

        $podcast_url = get_field('episode')['url'];
        $_url_split  = explode('localhost',$podcast_url);

        $output  = "<ul class='inline-list'>";
        $output .= "<a href='itpc://localhost/$_url_split[1]'><li>Listen in iTunes</li></a>";
        $output .= "<a href=\"$podcast_url\"><li>Download Audio</li></a>";
    	$output .= "</ul>";
        $content = $content.$output;
    // }
    return $content;
}
add_filter('the_content','custom_fields_in_feed');

?>