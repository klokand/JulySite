@extends('app')

@section('content')
<section id="properties">
	<div class="container">
		<div class="row clearfix">
			<h1 class="page-header">
				Properties List
			</h1>
			@if(count($properties))
				@foreach($properties as $property)
					@if($property->state=='sold')
						<div class="property sold col-md-6">
					@else
						<div class="property col-md-6">
					@endif
					<a href="{{url('/')}}/property/{!!$property->id!!}">
					<img class="img-responsive" src="/uploads/properties/{{$property->coverImage}}"/> </a>
					<div class="detail">
					<h4>{{$property->name}}</h4>
					<span class="list-detail-icon icon-house">{{$property->buildingSize}}</span>sqm
					<span class="list-detail-icon icon-land">{{$property->landSize}}</span>sqm
					<span class="list-detail-icon icon-bed">{{$property->bedNo}}</span>
					<span class="list-detail-icon icon-shower">{{$property->bathNo}}</span>
					<span class="list-detail-icon icon-garage">{{$property->garageCarNo}}</span>
					</div>	
					</div> 
					@endforeach
					<div class="col-md-7">
					{!!$properties->render()!!}
					</div>
			@else
				<p>No Property at the moment</p>
			@endif
		</div>
	</div>
</section>
@endsection