
@if (isset($query))
	@wpquery($query[0])
		<section>
			<a href="{{the_permalink()}}">{{the_title()}}</a>
		</section>
	@wpempty
		<section class="ctx-warn">
			<h2 class="txt-warn">No Posts Found!</h2>
		</section>
	@wpend

@endif