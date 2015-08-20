@extends('app')

@section('content')
<section id="property">
	<div class="container">
		<div class="row">
			<h1 class="page-header">
				{!!$property->address!!}
			</h1>
			<div class="col-md-8">
			 <div id="property-images" class="page-images-slider">
				@foreach ($property->propertyImages as $image)
					<a href="{{url('/')}}/uploads/properties/{{$image->image}}">
					<img src="/uploads/properties/{{$image->image}}" />
					</a>
				@endforeach
			 </div>
			 <div id="property-detail">
				<h2>{!!$property->type!!} {!!$property->price!!}</h2>
				<span class="list-detail-icon icon-house">{!!$property->buildingSize!!}</span>sqm
					<span class="list-detail-icon icon-land">{!!$property->landSize!!}</span>sqm
					<span class="list-detail-icon icon-bed">{!!$property->bedNo!!}</span>
					<span class="list-detail-icon icon-shower">{!!$property->bathNo!!}</span>
					<span class="list-detail-icon icon-garage">{!!$property->garageCarNo!!}</span>
					<div class="description">
					@if($property->pdf!=null)
					<a href="{{asset('uploads/pdf/'.$property->pdf)}}" download><i class="fa fa-file-pdf-o fa-2x"></i>Floor-plan_download</a>
					@endif
					{!!$property->summary!!}
					<br/>
					{!!$property->description!!}
					 <br>
				</div>
			<div class="feature">
				{!!$property->featureList!!}
			</div>
			
			 </div>

        </div>
			<div id="contactForm" class="col-xs-12 col-sm-12 col-md-4">
				<h2>Ask about this property</h2>
				<form>
					<input type="hidden" name="property" value="{{Request::url()}}">
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