@extends('app')

@section('content')
<section id="properties">
	<div class="container">
		<div class="row clearfix">
			<h1 class="page-header">
				Properties List
			</h1>
			<div class="property col-md-5"> 
					<img class="img-responsive" src="/img/property1.jpg"/> 
					<div class="detail">
					<h4>Crimson 1500</h4>
					<span class="list-detail-icon icon-house">200</span>sqm
					<span class="list-detail-icon icon-land">500</span>sqm
					<span class="list-detail-icon icon-bed">3</span>
					<span class="list-detail-icon icon-shower">2</span>
					<span class="list-detail-icon icon-garage">2</span>
					</div>
			</div> 
			<div class="property col-md-5 col-md-offset-1"> 
				<img class="img-responsive" src="/img/property2.jpg"/> 
					<div class="detail">
					<h4>Crimson 1500</h4>
					<span class="list-detail-icon icon-house">280</span>sqm
					<span class=" list-detail-icon icon-land">550</span>sqm
					<span class="list-detail-icon icon-bed">3</span>
					<span class="list-detail-icon icon-shower">2</span>
					<span class="list-detail-icon icon-garage">2</span>
					</div>
			</div> 
			<div class="property sold col-md-5"> 
					<img class="img-responsive" src="/img/property3.jpg"/> 
					<div class="detail">
					<h4>Crimson 1500</h4>
					<span class="list-detail-icon icon-house">250</span>sqm
					<span class="list-detail-icon icon-land">600</span>sqm
					<span class="list-detail-icon icon-bed">4</span>
					<span class="list-detail-icon icon-shower">2</span>
					<span class="list-detail-icon icon-garage">2</span>
					</div>
			</div> 
			<div class="property col-md-5 col-md-offset-1"> 
				<img class="img-responsive" src="/img/property4.jpg"/> 
					<div class="detail">
					<h4>Crimson 1500</h4>
					<span class="list-detail-icon icon-house">300</span>sqm
					<span class=" list-detail-icon icon-land">800</span>sqm
					<span class="list-detail-icon icon-bed">5</span>
					<span class="list-detail-icon icon-shower">3</span>
					<span class="list-detail-icon icon-garage">2</span>
					</div>
			</div> 
		</div>
	</div>
</section>
@endsection