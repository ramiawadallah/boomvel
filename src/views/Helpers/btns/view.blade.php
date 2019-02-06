<?php 

	$href = !empty($url) ? $url : url()->current().'/'.$id;

		

?>
@if(!empty($attr))
		<a href="{{ $href }}" class="btn btn-primary" 
			@foreach($attr as $key => $value)
			{{ $key }}="{{ $value }}" &nbsp

			@endforeach

			class="btn btn-info btn-sm btn-icon icon-left"
			>
			<i class="far fa-eye"></i>
		</a>
@else
		<a href="{{ $href }}"  class="btn btn-primary">
		    <i class="far fa-eye"></i>
		</a>

@endif




