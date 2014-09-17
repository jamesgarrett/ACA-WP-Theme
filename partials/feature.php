

@if(isset($content))
@foreach($content as $row)
	<? switch ($row['acf_fc_layout']) {
		case 'paragraph':
			// jsl($row['text']);
			break;
		case 'icon-list':
			$data = array("list"=>$row['list']);
			?>@include('views.icon-list',$data)<?
			break;
		case 'map':
			$data = array(
				"map" => $row['map'],
				"txt" => $row['map']['address'],
				"icn" => $row['icon'],
			);
			?> @include('views.map',$data) <?
			break;
		default:
			break;
	}?>
@endforeach
@endif