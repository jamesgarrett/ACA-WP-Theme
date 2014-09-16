@layout('layouts.master')

@section('main')
	{{jsl(get_fields($post->id))}}
@endsection