
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
	util: {
		splitAt: function (str,ix) {
			return [str.substring(0,ix),str.substring(ix)];
		},
		// hexify: function(n) {
		// 	n = parseInt(n,10);
		// 	if (isNaN(n)) return "00";
		// 	n = Math.max(0,Math.min(n,255));
		// 	return "0123456789ABCDEF".charAt((n-n%16)/16) + "0123456789ABCDEF".charAt(n%16);
		// },
		// rgb2hex: function(R,G,B) {return '#'+_.util.hexify(R)+_.util.hexify(G)+_.util.hexify(B)},
	},
	init: {
		pre: {
			// get_theme_colors: function(){
			// 	window.theme = {};
			// 	$('#theme-colors > [class*="ui-c-"]')
			// 	.each(function(i,e) {
			// 		col = $(this).attr('data-themecolor');
			// 		rgb = $(this).css('background-color');
			// 		rgb = rgb.split(')')[0].split('rgb(')[1].split(',');
			// 		rgb = $.map(rgb,function(o){return parseInt($.trim(o));});;
			// 		window.theme[col] = _.util.rgb2hex(rgb[0],rgb[1],rgb[2]);
			// 	});
			// },
			split_brand: function(){
				$('.brand').each(function(i,o){
					var split = _.util.splitAt($(this).text(),1);
					$(this).html('<span class="overline">'+split[0]+'</span>'+split[1]);
				});
			},
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
