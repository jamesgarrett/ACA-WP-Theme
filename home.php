@layout('layouts.master')

@section('main')
<ul>
	@wpposts
		<a href="{{the_permalink()}}"><li>
			<h6>{{the_title()}}</h6>
			{{the_excerpt()}}
		</li></a>
	@wpempty
        <li>{{ __( 'Sorry, no posts matched your criteria.' ) }}</li>
	@wpend
</ul>
@endsection