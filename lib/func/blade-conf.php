<?
// Include Blade
require_once get_template_directory().'/lib/plugins/blade/blade.php';

// set blade cache (hidden in Sublime project)
if(function_exists('blade_set_storage_path')){
    blade_set_storage_path(get_template_directory().'/.bladecache');
}

?>