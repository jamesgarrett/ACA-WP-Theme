<?
//====================
// METADATA VARIABLES
//====================

$url         = (is_home()||is_front_page()) ? get_bloginfo('url') : get_permalink();
$type        = (is_home()||is_front_page()) ? 'website' : 'article';

$site_name   = (get_field('meta--name','options')) ? get_field('meta--name','options') : get_bloginfo('name');
$title       = (is_single() || is_page()) ? single_post_title('',false).' :: '.$site_name : $site_name;

$site_desc   = (get_field('meta--excerpt','options')) ? get_field('meta--excerpt','options') : get_bloginfo('description');
$description = (is_single() || is_page()) ? get_field('meta--excerpt_override') : $site_desc;
$description = str_replace(array("\r\n","\r","\n"), "", $description);
$description = strip_tags(apply_filters('the_excerpt_rss', $description));

$images      = get_field('meta--images','options')[0];
$profiles    = get_field('meta--profiles','options')[0];
$profiles    = $profiles ? array_map('trim',$profiles) : false;
$time        = array(
	"pub" => get_the_date(),
	"mod" => get_the_modified_date(),
);
?>
<!--
 === METADATA
 -->
 	<title>{{$title}}</title>
	<meta name="description"                content="{{$description}}"/>
	<!-- GOOGLE AUTH -->
 	@if (isset($profiles) && isset($profiles['google']))
		<link rel="author"                      href="https://plus.google.com/{{$profiles['google']}}/posts"/>
	@endif
	<!-- GOOGLE+ -->
	<meta itemprop="name"                   content="{{$title}}">
	<meta itemprop="description"            content="{{$description}}">
	<meta itemprop="image"                  content="{{$images['thumb']['url']}}">
	<!-- TWITTER -->
 	@if (isset($images['large']))
		<meta name="twitter:card"           content="summary">
		<meta name="twitter:image:src"      content="{{$images[large]['url']}}">
	@else
		<meta name="twitter:card"           content="summary_large_image">
		<meta name="twitter:image:src"      content="{{$images['thumb']['url']}}">
	@endif
 	@if (isset($profiles) && isset($profiles['twitter']))
		<meta name="twitter:site"           content="{{$profiles['twitter']}}">
		<meta name="twitter:creator"        content="{{$profiles['twitter']}}">
	@endif
	<meta name="twitter:title"              content="{{$title}}">
	<meta name="twitter:description"        content="{{$description}}">
	<!-- FACEBOOK -->
	<meta property="og:title"               content="{{$title}}"/>
	<meta property="og:type"                content="{{$type}}"/>
	
	<meta property="og:image"               content="{{$images['thumb']['url']}}"/>
	<meta property="og:description"         content="{{$description}}"/>
	<meta property="og:site_name"           content="{{$site_name}}"/>
	<meta property="article:published_time" content="{{$time['pub']}}"/>
	<meta property="article:modified_time"  content="{{$time['mod']}}"/>
 	@if (isset($profiles) && isset($profiles['facebook']))
		<meta property="fb:admins"          content="{{$profiles['facebook']}}"/>
	@endif

<!--
 === END
 -->