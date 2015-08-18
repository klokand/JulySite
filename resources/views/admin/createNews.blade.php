@extends('admin.layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
		{!!Form::open(['url'=>'news','method'=>'post','files' => true,'id'=>'createNews_form'])!!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="content" value="{{ old('content') }}">
			<div class="form-group">	{!!Form::text('title',Input::old('title'),['class'=>'form-control','placeholder'=>'title'])!!}
			{!!Form::text('author',Input::old('author'),['class'=>'form-control','placeholder'=>'author'])!!}
			<label for="coverImage">CoverImage:</label>
			{!! Form::file('coverImage', ['class' => 'form-control']) !!}
			{!!Form::select('types',['news'=>'News','development'=>'Development'],['class'=>'form-control'])!!}
			</div>
		{!!Form::close()!!}
		<section id="editor">
			<div id="news_edit">
				
			</div>
		</section>
		<a type="button" id="news_saveButton" class="btn btn-primary btn-lg btn-block">Save</a>
	</div>
</div>

@endsection