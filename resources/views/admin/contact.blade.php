@extends('admin.layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
		<div class="col-md-6 teamMember">
			<h4>Current Quote background Image</h4>	
			<img src="{{'/'.\Config::get('image.page_image').$page->location_image}}" class="img-responsive"></img>
			{!!Form::model($page,['url'=>'admin/contact','method'=>'post','files' => true])!!}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="form-group">
			{!!Form::text('location',Input::old('location'),['class'=>'form-control','placeholder'=>'Address'])!!}
			{!!Form::text('telephone',Input::old('telephone'),['class'=>'form-control','placeholder'=>'phone Number'])!!}
			{!!Form::text('email',Input::old('email'),['class'=>'form-control','placeholder'=>'Email'])!!}
			{!! Form::file('location_image', ['class' => 'form-control']) !!}
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection