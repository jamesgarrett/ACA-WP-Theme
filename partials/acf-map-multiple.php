<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
<script src="{{get_stylesheet_directory_uri()}}/lib/scripts/modules/acf-map.js"></script>
<div class="acf-map">
@wpquery(array('post_type' => $posttype))
	<? $l = get_field('location'); ?>
	<div class="marker" data-lat="{{$l['lat']}}" data-lng="{{$l['lng']}}">
		<div class="location-meta">
			<header role="header bdr-b">
				<h4 class="txt-display p-b">{{get_the_title($post->ID)}}</h4>
				<small class="txt-lbl d-b">
					{{$l['address']}}
				</small>
			</header>
		</div>
	</div>
@wpempty
@wpend
</div>