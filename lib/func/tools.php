<?

//————————————————————————————————————————————————
// THEME URI
// 
function get_uri($trail='/') {
	return get_stylesheet_directory_uri().($trail!=='/' ? '/'.$trail : '/');
}
function uri($trail='/') {
	  echo get_stylesheet_directory_uri().($trail!=='/' ? '/'.$trail : '/');
}

//————————————————————————————————————————————————
// LOGGING
// 
function jsl($arr,$tag=false){
	if ($tag) {
		echo "<script class='PHP2JS'>console.log('".$tag."',".json_encode($arr).")</script>";
	}
	else {
		echo "<script class='PHP2JS'>console.log(".json_encode($arr).")</script>";
	}
}

//————————————————————————————————————————————————
// PARTIALS
// 
function part($file=false,$end=false) {
	if ($file) {
		get_template_part('partials/_'.$file,$end?$end:'');
	}
}


?>