<?
/*
|| REGISTER OPTIONS PAGES
*/
if( function_exists('acf_add_options_page') ) { 
	// Metadata options page
    $meta = array(
        'page_title' => 'Metadata Settings',
        'menu_title' => 'Meta',
        'icon_url'   => 'dashicons-tag',
        'menu_slug'  => 'meta-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    );
    acf_add_options_page($meta);
}
/*
|| ADD ICONS TO SELECT2
*/
function octiconize(){ ?>
    <style>
	.select2-container .select2-choice .select2-arrow b {
		background-position: 0 11px;
	}
	.select2-container .select2-choice {
		height: 50px;
	}
	.rg--vwrap {
		display: table;
	}
	.rg--vwrap .rg--vc {
		display: table-cell;
		vertical-align: middle;
	}
	.rg--vwrap .rg--vc:first-child {
		width: 4em;
		text-align: center;
	}
	.select2-chosen .rg--vwrap {
		position: absolute;
		height: 100%;
	}
    </style>
    <script type="text/javascript">
	(function($) {
	    function format_octicon_s2(opt){
	    	var icn = '<span class="rg--vc"><i class="octicon mega-octicon '+opt.id+'"></i></span>',
		    	txt = '<span class="rg--vc">'+opt.text+'</span>';
		    return '<div class="rg--vwrap">'+icn+txt+'</div>';
	    }
		acf.add_filter('select2_args', function( args, $select, settings ){
		    args.formatResult    = format_octicon_s2;
		    args.formatSelection = format_octicon_s2;
		    args.escapeMarkup    = function(m){return m;};
			return args;
		});
	})(jQuery);
    </script>
<? }
add_action('acf/input/admin_head', 'octiconize');



?>