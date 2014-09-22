@layout('layouts.master')

{{--
{{-- Template Name: Content Feed
{{--}}

@section('top')
	@include('views.top-box',array('content'=>get_field('top--box',$post)[0]))
@endsection

@section('main')
	@include('views.feed',array('q'=>get_field('archive--query')[0]))
@endsection