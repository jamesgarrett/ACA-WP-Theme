var open_infowindow;
(function($) {
	function render_map( $el ) {
		var $markers = $el.find('.marker');

		var style_opts = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]}];
		var movables = {
			scrollwheel      : false,
			navigationControl: false,
			// mapTypeControl   : false,
			scaleControl     : false,
			draggable        : false,
		}
		var args = {
			zoom		    : 4,
			center		    : new google.maps.LatLng(0, 0),
			mapTypeId	    : google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true,
			styles          : style_opts,
		};
		var map = new google.maps.Map( $el[0], $.extend(movables,args));
		map.markers = [];
		$markers.each(function(){
	    	add_marker( $(this), map );
		});
		center_map( map );
		return map;
	}
	function add_marker( $marker, map ) {
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
		var marker = new google.maps.Marker({
			position	: latlng,
			map			: map
		});
		map.markers.push( marker );
		if( $marker.html() ) {
			var infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});
			google.maps.event.addListener(infowindow, 'closeclick', function() {
				center_map(map);
			});
			google.maps.event.addListener(marker, 'click', function() {
				if (typeof open_infowindow !== "undefined") {
					open_infowindow.close();
				}
				infowindow.open( map, marker );
				open_infowindow = infowindow;
			});
		}
	}
	center_map = function ( map ) {
		var bounds = new google.maps.LatLngBounds();
		$.each( map.markers, function( i, marker ){	 
			var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
			bounds.extend( latlng );
		});
		if( map.markers.length == 1 ) {
		    map.setCenter( bounds.getCenter() );
		    map.setZoom( 16 );
		}
		else {
			map.fitBounds( bounds );
		}
	}
	$(document).ready(function(){
		$('body').addClass($('.acf-map').length>0?'has-acf-map':'');
		$('.acf-map').each(function(){
			render_map($(this));
		});
	});
})(jQuery);