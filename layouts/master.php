<!--
 ||| Master
 -->

@include('partials.pre')

<header id="header" role="banner">
	<div class="container vertical-align-middle">@include("partials.head")</div>
</header>

<div id="app">
	<section id="top">@yield('top')</section>
	<main class="container">
		<article class="grid-8 centered">@yield('main')</article>
	</main>
	<section id="bottom">@yield('bottom')</section>
</div>

<footer id="footer">
	@include('partials.foot')
</footer>

@include('partials.post')