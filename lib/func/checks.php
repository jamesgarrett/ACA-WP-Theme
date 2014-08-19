<?

function on_home(){
	return (is_home()||is_front_page() ? true : false);
}

?>