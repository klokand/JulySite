@extends('app')

@section('content')
<section id="contactUs">
	<div class="container">
		<div class="row">
			<h1 class="page-header">
                About Us
            </h1>
			<div class="col-md-12">
			{!!$page->aboutus!!}
			</div>
			<h2 class="page-header">
                Our Mission
            </h2>
			<div class="col-md-12">
			{!!$page->mission!!}
			</div>			
			@include('layout.teamInfo')
			<h2 class="page-header">
                Our Partners
            </h2>
			<div class="col-md-12">
			{!!$page->partners!!}
			</div>
			<h2 class="page-header">
                Our Projects
            </h2>
			<div class="col-md-12">
			{!!$page->projects!!}
			</div>	
		</div>
	</div>		
</section>
@endsection