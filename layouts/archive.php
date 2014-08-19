<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.meta-head')
</head>
<body>
	<div id="app">
		<header>@include('partials.header')</header>
		@yield('pre')
		<main id="content" class="content" role="content">
			<article>
				@yield('main')
			</article>
			<aside>
				@yield('side')
			</aside>
		</main>
		@yield('post')
		<footer>@include('partials.footer')</footer>
	</div>
	@include('partials.meta-foot')
</body>
</html>

