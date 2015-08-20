@extends('admin.layout.admin')
@section('content')
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<section id="editor">
	<h4>About Us</h4>
	<div id="aboutUs_edit">
		{!!$page->aboutus!!}
	</div>
</section>
<a type="button" id="aboutUs_saveButton" class="btn btn-primary btn-lg btn-block">Save</a>
<hr>
<section id="editor">
	<h4>mission</h4>
	<div id="mission_edit">
		{!!$page->mission!!}
	</div>
</section>
<a type="button" id="mission_saveButton" class="btn btn-primary btn-lg btn-block">Save</a>
<hr>
<section id="editor">
	<h4>partners</h4>
	<div id="partners_edit">
		{!!$page->partners!!}
	</div>
</section>
<a type="button" id="partners_saveButton" class="btn btn-primary btn-lg btn-block">Save</a>
<hr>
<section id="editor">
	<h4>projects</h4>
	<div id="projects_edit">
		{!!$page->projects!!}
	</div>
</section>
<a type="button" id="projects_saveButton" class="btn btn-primary btn-lg btn-block">Save</a>

@endsection