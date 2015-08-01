@extends('app')

@section('content')
<section id="contactUs">
	<div class="container">
		<div class="row">
			<h1 class="page-header">
                About Us
            </h1>
			<p>Welcome to Best Australia Property Investments, one of the leading property investment companies specialising in the provision of quality investment opportunities with minimum risk. Our aim is to provide you with a quality portfolio of properties that offer the combined benefits of low capital outlay, strong capital appreciation and excellent net yields.

We believe that the genuine net yields we are able to source will not be bettered by our competitors and all returns quoted are based upon investors total capital outlay not just the purchase price.

Please click on the relevant photos below to see our current selection and do not hesitate to contact us with any questions.</p>
			<h2 class="page-header">
                Our Mission
            </h2>
			<img src="/img/mission1.jpg" class="col-md-4 img-responsive"/>
			<p class="col-md-8">Best Australia Property Investments is a division of Best Overseas Property Investments Ltd,  a well established company specialising in sourcing the very best investment opportunities throughout the Australia.
			
The directors have been in the overseas property business for numerous years and undertake comprehensive due diligence to ensure all client purchases are safe and secure.Ã‚Â  Over 80% of our business is repeat and on the recommendation of existing clients, a figure which speaks for itself.

As an independent family company, we seek to give you an honest, friendly and reliable service at all times. The numerous opportunities available can appear confusing but our experience will guide you through the best options which meet both your budget and criteria.

Our staff are fully trained and access to a director is available to clients 24:7.

We look forward to being of assistance to you.</p>
			<h2 class="page-header">Our team</h2>			
			@include('layout.teamInfo')
		</div>
	</div>		
</section>
@endsection