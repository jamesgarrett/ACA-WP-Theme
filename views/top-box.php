@if($content)
<section style="text-align:{{$content['text-align']}};background-image:url({{$content['background-image']}});background-position-x:{{$content['background-position-x']}};background-position-y:{{$content['background-position-y']}};" class="overlay-wrap">
	<div class="overlay">
		<div class="txt-box"> <h1>{{$content['title']}}</h1> </div>
	</div>
</section>
@endif