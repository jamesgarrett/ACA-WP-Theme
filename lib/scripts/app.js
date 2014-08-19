// 
//  PRE: mdnzr, jQuery
// 
var _ = {
	$: {
		// Saved DOM objects like:
		w   : $(window)
	},
	// util: {},
	init: {
		loaded: function() {
			$('body').addClass('loaded');
		}
	},
	// events : {}
};
// 
// POST: run.js
// 