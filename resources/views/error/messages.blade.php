@include('_partials.js')
@include('_partials.sweetalert')


@if($errors->count() > 0)
@foreach($errors->all() as $error)
	<div class="alert alert-danger" style="display: none;" id="ERROR_COPY">
		{{$error}}
	</div>
@endforeach
@endif

