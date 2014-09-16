@layout('layouts.archive')

@section('main')
	<h2>{{the_title()}}</h2>
	<code>Archive</code>
	<?$arch_query = array(
		'query' => get_field('archive_query')
	);?>
	@include('views.loop',$arch_query)
@endsection