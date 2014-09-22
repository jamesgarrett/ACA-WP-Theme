@if($content)
	<section class="overlay-wrap">
		<div class="underlay" style="text-align:{{$content['text-align']}};background-image:url({{$content['background-image']}});background-position-x:{{$content['background-position-x']}};background-position-y:{{$content['background-position-y']}};"></div>
		<div class="overlay">
			<div class="container">
				<h1>{{$content['title']}}</h1>
			</div>
		</div>
	</section>
@endif 