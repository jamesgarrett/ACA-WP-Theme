<a class="brand" href="{{home_url()}}">
	<h1>{{ bloginfo('name') }}</h1>
</a>
<div class="menu">
	<?$menu = array(
		"title_li"    => "",
		"exclude"     => get_option('page_on_front'),
		"link_before" => '<span class="menu--item">',
		"link_after"  => '</span>',
		"depth"       => '1',
	);?>
	<ul>{{ wp_list_pages($menu) }}</ul>
</div>
