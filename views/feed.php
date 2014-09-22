
@wpquery($q)
	<a href="{{the_permalink()}}">
		<h1>{{the_title()}}</h1>
		<p>{{the_excerpt()}}</p>
	</a>
@wpempty
@wpend
