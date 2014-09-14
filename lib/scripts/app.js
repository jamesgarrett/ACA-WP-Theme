
/*
||—> scripts/pre
*/

var _ = {
	$: {
		win : $(window)   ,
		top : $('#top')   ,
		app : $('#app')   ,
		btm : $('#bottom'),
	},
	util: {},
	init: {
		pre: {
			loaded: function() {
				$('body').addClass('loaded');
			}
		},
		post: {},
	},
	events : {},
};

/*
||—> scripts/post
||—>        /modules
*/
