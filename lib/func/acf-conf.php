<?

require_once get_template_directory().'/lib/plugins/acf/acf.php';

add_filter('acf/settings/path', 'acf_settings_path');

function acf_settings_path( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/lib/plugins/acf/';
	jsl($path,"path");
	// return
	return $path;
}

add_filter('acf/settings/dir', 'acf_settings_dir');

function acf_settings_dir( $dir ) {
	// update path
	$dir = get_stylesheet_directory_uri() . '/lib/plugins/acf/';
	jsl($dir,"dir");
	// return
	return $dir;
}

// add_filter('acf/settings/show_admin', '__return_false');


?>