@layout('layouts.master')

@section('main')
	<h2>{{the_title()}}</h2>
	<section>
		{{the_content()}}
	</section>
@endsection