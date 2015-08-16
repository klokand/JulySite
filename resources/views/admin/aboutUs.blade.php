@extends('admin.layout.admin')
@section('content')
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<section id="editor">
	<div id="aboutUs_edit">
		Your editable content goes here
	</div>
</section>
<a type="button" id="aboutUs_saveButton" class="btn btn-primary btn-lg btn-block">Save</a>

<section id="contactUs">
	<div class="container">
		<div class="row">
			<h1 class="page-header">
                About Us
            </h1>
			<div class="col-md-10">
			{!!$page->aboutus!!}
			</div>
		</div>
	</div>
</section>
@endsection