<?
/*
|| REGISTER OPTIONS PAGES
*/
if( function_exists('acf_add_options_page') ) { 
	// Metadata options page
    $meta = array(
        'page_title' => 'Metadata Settings',
        'menu_title' => 'Meta',
        'icon_url'   => 'dashicons-tag',
        'menu_slug'  => 'meta-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    );
    acf_add_options_page($meta);
}
?>