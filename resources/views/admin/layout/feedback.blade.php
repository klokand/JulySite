{{-- Showing the Error and Success Messages--}}
<div class="row">
    <div class="col-lg-12">
			@if(Session::has('error'))
				<div class="bg-danger">{{Session::get('error')}}</div>
			@endif

			@if(Session::has('success'))
				<div class="bg-success">{!!Session::get('success')!!}</div>
			@endif
	</div>
</div>