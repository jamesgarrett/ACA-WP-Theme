<!--
 ||| Master
 -->

@include('partials.pre')

<header id="header" role="banner">
	@include("partials.head")
</header>

<div id="app">
	<section>
		@yield('top')
	</section>
	<main>
		@yield('main')
		<aside> @yield('side') </aside>
	</main>
	<section>
		@yield('bottom')
	</section>
</div>

<footer id="footer">
	@include('partials.foot')
</footer>

@include('partials.post')