<? $location = get_field( isset($field) ? $field : 'location' ); ?>
@if (!empty($location))
	<!--
	–––– Module Includes
	–-->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="{{get_stylesheet_directory_uri()}}/lib/scripts/modules/min/acf-map.min.js"></script>
	<!--
	–––– Render Map
	–-->
	<div class="acf-map">
		<div class="marker" data-lat="<? echo $location['lat']; ?>" data-lng="<? echo $location['lng']; ?>"></div>
	</div>
@endif