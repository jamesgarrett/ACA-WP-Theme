@if(isset($map))
	<!--
	———— SCRIPTS
	———— |—> Included via CDK:
	————     <script src="{{get_stylesheet_directory_uri()}}/lib/scripts/modules/min/map.acf.min.js"></script>
	—-->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<div class="overlay-wrap">
		<div class="acf-map underlay">
			<div class="marker" data-lat="{{$map['lat']}}" data-lng="{{$map['lng']}}"></div>
		</div>
		@if(isset($txt))
			<span class="overlay bdr-a">
				<span class="overlay-inner p-t-1"> @if(isset($icn))
					<span class="octicon beta octicon-before {{$icn}}"></span>
				@endif <span class="txt-box">{{$txt}}</span> </span>
			</span>
		@endif
	</div>
@endif