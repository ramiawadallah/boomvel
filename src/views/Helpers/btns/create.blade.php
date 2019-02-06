<?php 

	$href = !empty($url) ? $url : url()->current().'/create';
?>

@if(!empty($attr))

	<a href="{{ $href }}" class="btn btn-secondary"

	@foreach($attr as $key => $value)
	{{ $key }}="{{ $value }}" &nbsp
	@endforeach

	>
	<i class="far fa-plus-square"></i> 
	</a>

@else
	<a href="{{ $href }}" class="btn btn-secondary">
	<i class="far fa-plus-square"></i>
	{{ trans('lang.create')}}
	</a>

@endif

