<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">

	<link rel="stylesheet" href="{{get_stylesheet_directory_uri()}}/gridle/grid.css">
	<link rel="stylesheet" href="{{get_stylesheet_uri()}}">

	@include('partials.meta')

	{{ wp_head() }}
</head>
<body {{body_class()}}>
