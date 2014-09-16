@layout('layouts.master')

@section('main')
	<h2>{{the_title()}}</h2>
	<code>Single</code>
	<section>
		{{the_content()}}
	</section>
@endsection