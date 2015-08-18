@extends('admin.layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
	<div class="col-md-4 col-sm-8"><img class="img-responsive" src="/uploads/news/{{$news->coverImage}}" alt=""></div>
		{!!Form::model($news,['url'=>'news/'.$news->id,'method'=>'PATCH','files' => true,'id'=>'createNews_form'])!!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="content" value="{{ $news->content }}">
			<div class="form-group">	{!!Form::text('title',Input::get('title'),['class'=>'form-control','placeholder'=>'title'])!!}
			{!!Form::text('author',Input::get('author'),['class'=>'form-control','placeholder'=>'author'])!!}	{!!Form::select('types',['news'=>'News','development'=>'Development'],Input::get('state'),['class'=>'form-control'])!!}
			<label for="coverImage">CoverImage:</label>
			{!! Form::file('coverImage', ['class' => 'form-control']) !!}
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