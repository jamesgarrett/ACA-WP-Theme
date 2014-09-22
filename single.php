@layout('layouts.master')

@section('main')
	<h2>{{the_title()}}</h2>
	<code>Single</code>
	@wpposts
		<section>
			{{the_content()}}
		</section>
	@wpempty
	@wpend
@endsection