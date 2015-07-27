@extends('app')
@section('content')
@include('layout.slider')
<div class="section_about_us">
	<div class="wrap">
	<h1>Welcome to our site!</h1>
	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
	<p>" consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat "</p>
	<p><a class="btn btn-default" href="#" role="button">View details »</a></p>
	</div>
</div>
<div class="section_properties ss-style-foldedcorner">
	<div class="container">
	<div class="row">
	<div class="col-md-6 property">	
		  <img src="/img/property1.jpg" />
          <h2>Property1</h2>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
    </div>
	<div class="col-md-6 property">
		  <img src="/img/property2.jpg" />
          <h2>Property1</h2>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
    </div>
	</div>
</div>
</div>
<div class="section_news">
	<div class="container">
	<div class="row">
	<div class="col-md-4">
          <h2>News1</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
    </div>
	<div class="col-md-4">
          <h2>News2</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
    </div>
	<div class="col-md-4">
          <h2>News3</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
    </div>
	</div>
</div>
</div>



@endsection
