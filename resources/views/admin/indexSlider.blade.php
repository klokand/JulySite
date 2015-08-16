@extends('admin.layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
		<div class="col-md-4 sliderImageThumb">
		{!!Form::model($page,['url'=>'admin/indexSlider','method'=>'post','files' => true])!!}
			<h4>Slider 1</h4>	
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="sliderId" value="1">
			<div class="form-group">
			{!!Form::text('caption1',Input::old('caption1'),['class'=>'form-control','placeholder'=>'Caption'])!!}
			{!!Form::text('slider1_link',Input::old('slider1_link'),['class'=>'form-control','placeholder'=>'Link'])!!}	
			{!! Form::file('sliderImage1', ['class' => 'form-control']) !!}
			</div>
			<img src="{{'/'.\Config::get('image.page_image').$page->sliderImage1}}" class="img-responsive"></img>
			<button type="submit" class="btn btn-primary">Update</button>
		{!!Form::close()!!}
		</div>
		<div class="col-md-4 sliderImageThumb">
			<h4>Slider 2</h4>
			{!!Form::model($page,['url'=>'admin/indexSlider','method'=>'post','files' => true])!!}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="sliderId" value="2">
			<div class="form-group">
			{!!Form::text('caption2',Input::old('caption'),['class'=>'form-control','placeholder'=>'Caption'])!!}
			{!!Form::text('slider2_link',Input::old('slider_link'),['class'=>'form-control','placeholder'=>'Link'])!!}	
			{!! Form::file('sliderImage2', ['class' => 'form-control']) !!}
			</div>
			<img src="{{'/'.\Config::get('image.page_image').$page->sliderImage2}}" class="img-responsive"></img>
			<button type="submit" class="btn btn-primary">Update</button>
			{!!Form::close()!!}
		</div>
		<div class="col-md-4 sliderImageThumb">
			<h4>Slider 3</h4>
			{!!Form::model($page,['url'=>'admin/indexSlider','method'=>'post','files' => true])!!}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="sliderId" value="3">
			<div class="form-group">
			{!!Form::text('caption3',Input::old('caption'),['class'=>'form-control','placeholder'=>'Caption'])!!}
			{!!Form::text('slider3_link',Input::old('slider_link'),['class'=>'form-control','placeholder'=>'Link'])!!}	
			{!! Form::file('sliderImage3', ['class' => 'form-control']) !!}
			</div>
			<img src="{{'/'.\Config::get('image.page_image').$page->sliderImage3}}" class="img-responsive"></img>
			<button type="submit" class="btn btn-primary">Update</button>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection