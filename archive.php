@layout('layouts.archive')

{{--
{{-- Template Name: Archive
{{--}}

@section('main')

	<? $loop_archive_data = array(

		'query'=>get_field('archive_query')
		
	);?>

	@include('views.loop-archive',$loop_archive_data)

@endsection