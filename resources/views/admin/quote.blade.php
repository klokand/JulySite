@extends('admin.layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
		<div class="col-md-6 teamMember">
			<h4>Current Quote background Image</h4>	
			<img src="{{'/'.\Config::get('image.page_image').$page->quote_image}}" class="img-responsive"></img>
			{!!Form::model($page,['url'=>'admin/quote','method'=>'post','files' => true])!!}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="form-group">
			{!!Form::text('quote_author',Input::old('quote_author'),['class'=>'form-control','placeholder'=>'quote author'])!!}
			{!!Form::textArea('quote',Input::old('quote'),['class'=>'form-control','placeholder'=>'Quote'])!!}
			{!! Form::file('quote_image', ['class' => 'form-control']) !!}
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection