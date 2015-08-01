@extends('app')

@section('content')
<section id="contactUs">
	<div class="container">
		<div class="row">
			<h1 class="page-header">
                Contact Us
            </h1>
			<div id="methods" class="col-xs-12 col-sm-12 col-md-6">
			<div class="address">
				<div class="label label-default col-xs-12 col-sm-12 col-md-12">
				<h4><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Head office:</h4>
				<p>No.9 , the example road, North Beach West Australia 6020</p>
				</div>
				<img src="img/map1.jpg" class=" img-responsive"/>
			</div>
			<div class="phone">
				<div class="label label-default col-xs-12 col-sm-12 col-md-12">
				<h4><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Tel:</h4>
				<a href="tel:999-999-9999"><p>999 999 9999</p></a>
				</div>
			</div>
			<div class="email">
				<div class="label label-default col-xs-12 col-sm-12 col-md-12">
				<h4><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Email:</h4>
				<a href="mailto:info@luckycountryInvestments.com.au"><p>info@luckycountryInvestments.com.au</p></a>
				</div>
			</div>
			</div>
			<div id="contactForm" class="col-xs-12 col-sm-12 col-md-6">
				<h2>Contact Us Form</h2>
				<form>
					<div class="form-group">
						<label for="contactName">Name</label>
						<input type="text" class="form-control" id="contactName" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="contactEmail">Email Adress</label>
						<input type="email" class="form-control" id="contactEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="contactSubject">Subject</label>
						<input type="email" class="form-control" id="contactEmail" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Message" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					<button type="reset" class="btn btn-default btn-lg">Clear Form</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection