@layout('layouts.master')
<?
$all  = get_fields();
foreach ($all as $k => $f) : switch ($k){
	case 'top--box':
		?> @section('top')
			@include('views.top-box',array("content"=>$f[0]))
		@endsection <?
		break;
	case 'content--feature':
		?> @section('main')
			@include('partials.feature',array("content"=>$f))
		@endsection <?
		break;
	default:
} endforeach;
?>