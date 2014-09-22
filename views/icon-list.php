{{jsl($size)}}
@if(isset($list))
<div class="section-box">
	<ul class="icon-list inline-list icon-list-{{$size?$size:'beta'}} parent">
		@foreach($list as $i)
		<li class="list-item grid-6">
		@if($i['use-link-type']!=='link--disabled')
			<a class="list-item--link" href="{{$i[$i['use-link-type']]}}">
		@else
			<a class="list-item--link" disabled>
		@endif
				<h6 class="list-item--title"><i class="list-item--icon octicon {{$i['icon']}}"></i>{{$i['title']}}</h6>
				@if($i['description'])
					<small class="list-item--text">{{$i['description']}}</small>
				@endif
			</a>
		</li>
		@endforeach
	</ul>
</div>
@endif