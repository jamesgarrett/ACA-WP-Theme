<div id="brand" class="grid-3">
	<a href="{{home_url()}}" >
		<h1 class="brand">{{bloginfo('title')}}</h1>
	</a>
</div>

<div id="site-nav" class="grid-9">
	<? $menu = array(
		"title_li"    => "",
		// "exclude"     => get_option('page_on_front'),
		"depth"       => '1',
	); ?>
	<ul role="navigation" class="menu">
		{{ wp_list_pages($menu) }}
	</ul>
</div>