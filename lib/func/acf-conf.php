<?
/*
|| Include ACF plugin
*/
require_once get_stylesheet_directory().'/lib/plugins/acf/acf.php';

/*
|| Define settings
*/
add_filter('acf/settings/path', 'acf_settings_path');
function acf_settings_path( $path ) {
	$path = get_stylesheet_directory() . '/lib/plugins/acf/';
	return $path;
}

add_filter('acf/settings/dir', 'acf_settings_dir');
function acf_settings_dir( $dir ) {
	$dir = get_stylesheet_directory_uri() . '/lib/plugins/acf/';
	return $dir;
}

/*
|| Customize local JSON 
*/
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // 
    // SAVE DIRECTORY
    // 
    $path = get_stylesheet_directory() . '/.acf-cache';
    return $path;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // 
    // LOAD DIRECTORY
    // 
    unset($paths[0]); // remove original load point
    $paths[] = get_stylesheet_directory() . '/.acf-cache';
    return $paths;
}

/*
|| Toggle ACF admin screen
*/
// add_filter('acf/settings/show_admin', '__return_false');
?>