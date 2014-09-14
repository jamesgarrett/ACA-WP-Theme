<? 
function rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Gallery' )
        return 'Slider';
    return $safe_text;
}
add_filter( 'esc_html', 'rename_post_formats' );

//rename Aside in posts list table
function live_rename_formats() { 
    global $current_screen;
    if ( $current_screen->id == 'edit-post' ) : ?>
        <script type="text/javascript">
        jQuery('document').ready(function() {
            jQuery("span.post-state-format").each(function() { 
                if ( jQuery(this).text() == "Gallery" )
                    jQuery(this).text("Slider");
                });
        });      
        </script>
	<? endif;
}
add_action('admin_head', 'live_rename_formats');
add_theme_support('post-formats',array('quote','video','gallery'));
?> 