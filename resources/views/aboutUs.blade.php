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
			<h2 class="page-header">Our team</h2>			
			@include('layout.teamInfo')
		</div>
	</div>		
</section>
@endsection