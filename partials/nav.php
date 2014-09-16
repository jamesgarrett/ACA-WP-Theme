<div class="navigation" role="navigation">
	<?$menu = array(
		"title_li"    => "",
		"exclude"     => get_option('page_on_front'),
		"link_before" => '<span class="menu--item" role="menuitem">',
		"link_after"  => '</span>',
		"depth"       => '1',
	);?>
	<ul class="inline-list" role="menu">
		{{ wp_list_pages($menu) }}
	</ul>
</div>