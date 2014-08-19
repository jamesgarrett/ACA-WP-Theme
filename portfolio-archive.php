@layout('layouts.archive')

{{--
{{-- Template Name: Portfolio
{{--}}

@section('main')
<ul>
	@wpquery( array('post_type'=>"projects") )
		<a href="{{the_permalink()}}"><li>
			<h6>{{the_title()}}</h6>
			{{the_excerpt()}}
		</li></a>
	@wpempty
        <li>{{ __( 'Sorry, no posts matched your criteria.' ) }}</li>
	@wpend
</ul>
@endsection