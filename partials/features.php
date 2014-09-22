@if(isset($content))
	@foreach($content as $row)
		<? switch ($row['acf_fc_layout']) {
			case 'paragraph':
				?> {{$row['text']}} <?
				break;
			case 'icon-list':
				$data = array(
					"list"=>$row['list'],
					"size"=>$row['octicon-size'],
				);
				?> @include('views.icon-list',$data) <?
				break;
			case 'map':
				$data = array(
					"map" => $row['map'],
					"txt" => $row['map']['address'],
					"icn" => $row['icon'],
				);
				?> @section('bottom')
					@include('views.map',$data)
				@endsection <?
				break;
			default:
				break;
		}?>
	@endforeach
@endif