<?php 

	$href = !empty($url) ? $url : url()->current().'/'.$id.'/edit';	

?>

@if(!empty($attr))
	
		<a href="{{ $href }}" class="btn btn-primary" 

		@foreach($attr as $key => $value)
		{{ $key }}="{{ $value }}" &nbsp

		@endforeach
		<i class="far fa-edit"></i>
		</a>
@else
		<a href="{{ $href }}" title="{{ trans('lang.edit') }}" class="btn btn-warning" >
			<i class="far fa-edit"></i>
		</a>
@endif


