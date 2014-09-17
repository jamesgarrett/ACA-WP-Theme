<? $menu = array(
	"title_li"    => "",
	"exclude"     => get_option('page_on_front'),
	"link_before" => '<span class="menu--item" role="menuitem">',
	"link_after"  => '</span>',
	"depth"       => '1',
); ?>
<ul class="navigation" role="navigation">
	<li id="brand">
		<a href="{{home_url()}}">
			<h1 class="brand">{{bloginfo('title')}}</h1>
		</a>
	</li>
	{{ wp_list_pages($menu) }}
</ul>