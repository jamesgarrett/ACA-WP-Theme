<? 
/*
|| Inject admin stylesheets
*/
add_action( 'admin_enqueue_scripts', 'register_custom_admin_styles' );
function register_custom_admin_styles() {
    wp_register_style( 'admin',get_stylesheet_directory_uri().'/admin/admin-theme.css');
    wp_enqueue_style( 'admin' );
    // ^ global
}
add_action( 'admin_enqueue_scripts', 'register_admin_component_styles' );
function register_admin_component_styles() {
    wp_register_style( 'octicons',get_stylesheet_directory_uri().'/bower_components/octicons/octicons/octicons.css');
    wp_enqueue_style( 'octicons' );
    // ^ global
}
/*
|| 'Gallery' postformat to 'Keynote'
*/
function rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Gallery' )
        return 'Keynote';
    return $safe_text;
}
add_filter( 'esc_html', 'rename_post_formats' );
function live_rename_formats() { 
    global $current_screen;
    if ( $current_screen->id == 'edit-post' ) : ?>
        <script type="text/javascript">
        jQuery('document').ready(function() {
            jQuery("span.post-state-format").each(function() { 
                if ( jQuery(this).text() == "Gallery" )
                    jQuery(this).text("Keynote");
                });
        });      
        </script>
	<? endif;
}
add_action('admin_head', 'live_rename_formats');
add_theme_support('post-formats',array('quote','video','gallery'));
?> 