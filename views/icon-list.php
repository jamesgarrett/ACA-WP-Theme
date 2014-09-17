@if(isset($list))
<ul class="icon-list inline-list ta-c p-a-6">
	@foreach($list as $i)
	<li class="m-h-8 ta-c">
	@if($i['use-link-type']!=='link--disabled')
		<a href="{{$i[$i['use-link-type']]}}">
	@else
		<a disabled>
	@endif
			<div>
				<i class="octicon beta {{$i['icon']}}"></i>
			</div>
			<h6 class="p-t-4">{{$i['title']}}</h6>
			@if($i['description'])
				<small class="ta-c">{{$i['description']}}</small>
			@endif
		</a>
	</li>
	@endforeach
</ul>
@endif