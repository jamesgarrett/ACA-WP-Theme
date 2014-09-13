<?
//====================
// METADATA VARIABLES
//====================
$url         = (is_home()||is_front_page()) ? get_bloginfo('url') : get_permalink();
$type        = (is_home()||is_front_page()) ? 'website' : 'article';

$site_name   = (get_field('alt_title','options')) ? get_field('alt_title','options') : get_bloginfo('name');
$title       = (is_single() || is_page()) ? single_post_title('',false).' | '.$site_name : $site_name;

$site_desc   = (get_field('site_description','options')) ? get_field('site_description','options') : get_bloginfo('description');
$description = (is_single() || is_page()) ? get_field('meta_description') : $site_desc;
$description = str_replace(array("\r\n","\r","\n"), "", $description);
$description = strip_tags(apply_filters('the_excerpt_rss', $description));

$images      = get_field('images','options')[0];
$profiles    = array_map('trim',get_field('social_profiles','options')[0]);

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
	<link rel="author"                      href="https://plus.google.com/{{$profiles['google']}}/posts"/>
	<!-- GOOGLE+ -->
	<meta itemprop="name"                   content="{{$title}}">
	<meta itemprop="description"            content="{{$description}}">
	<meta itemprop="image"                  content="{{$images['thumb']['url']}}">
	<!-- TWITTER -->
 	@if (isset($images['large']))
		<meta name="twitter:card"               content="summary">
		<meta name="twitter:image:src"          content="{{$images[large]['url']}}">
	@else
		<meta name="twitter:card"               content="summary_large_image">
		<meta name="twitter:image:src"          content="{{$images['thumb']['url']}}">
	@endif
	<meta name="twitter:site"               content="{{$profiles['twitter']}}">
	<meta name="twitter:creator"            content="{{$profiles['twitter']}}">
	<meta name="twitter:title"              content="{{$title}}">
	<meta name="twitter:description"        content="{{$description}}">
	<!-- FACEBOOK -->
	<meta property="og:title"               content="{{$title}}"/>
	<meta property="og:type"                content="{{$type}}"/>
	<meta property="og:url"                 content="{{$url}}"/>
	<meta property="og:image"               content="{{$images['thumb']['url']}}"/>
	<meta property="og:description"         content="{{$description}}"/>
	<meta property="og:site_name"           content="{{$site_name}}"/>
	<meta property="article:published_time" content="{{$time['pub']}}"/>
	<meta property="article:modified_time"  content="{{$time['mod']}}"/>
	<meta property="fb:admins"              content="{{$profiles['facebook']}}"/>
<!--
 === END
 -->