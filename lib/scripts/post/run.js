$(document).ready(function() {
	// APP INITIALIZER
	$.each( _.init.pre ,function(i,o){o();});
	// REGISTER EVENTS
	$.each(_.events, function(i, o) {
		_.$.w.on(i,function(event){
			$.each(o,function(x,f){
				f(event);
			});
		});
	});
	// POST-INITIALIZE
	$.each( _.init.post ,function(i,o){o();});
	$(window).trigger('resize');
});