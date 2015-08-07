@extends('admin.layout.admin')
@section('content')


<label for="property_type">Add property images:</label>
{!!Form::open(['url'=>'property/image/upload','class'=>'dropzone','id'=>'my-awesome-dropzone'])!!}
<input name="propertyId" type="hidden" value={{$id}}/>
{!!Form::close()!!}
<br/><hr/>
{!!Form::open(['url'=>'createProperty','method'=>'post'])!!}
<input name="propertyId" type="hidden" value={{$id}}/>
<div class="form-group">
{!!Form::text('name',Input::get('name'),['class'=>'form-control','placeholder'=>'Name'])!!}
</div>
<div class="form-group">
	<label for="property_type">Type:</label>
	{!!Form::select('property_type',['house'=>'House','unit'=>'Unit','land'=>'Land','apartment'=>'Apartment','town house'=>'Town House'],['class'=>'form-control'])!!}
</div>
<div class="form-group">
{!!Form::text('address',Input::get('address'),['class'=>'form-control','placeholder'=>'Adress'])!!}
</div>
<div class="form-group">
{!!Form::text('price',Input::get('price'),['class'=>'form-control','placeholder'=>'Price'])!!}
</div>
<div class="form-group">
{!!Form::text('bedNo',Input::get('bedNo'),['class'=>'form-control','placeholder'=>'Bed Number'])!!}

</div>
<div class="form-group">
{!!Form::text('bathNo',Input::get('bathNo'),['class'=>'form-control','placeholder'=>'Bathroom Number'])!!}
</div>

<div class="form-group">
{!!Form::text('garageCarNo',Input::get('garageCarNo'),['class'=>'form-control','placeholder'=>'Garage Car Number'])!!}
</div>

<div class="form-group">
{!!Form::text('landSize',Input::get('landSize'),['class'=>'form-control','placeholder'=>'Land Size'])!!}
</div>

<div class="form-group">
{!!Form::text('buildingSize',Input::get('buildingSize'),['class'=>'form-control','placeholder'=>'Building Size'])!!}
</div>

<div class="form-group">
{!!Form::text('floorPlan',Input::get('floorPlan'),['class'=>'form-control','placeholder'=>'Floor Plan'])!!}
</div>
<div class="form-group">
{!!Form::textArea('summary',Input::get('summary'),['class'=>'form-control','placeholder'=>'summary'])!!}
</div>
<div class="form-group">
{!!Form::textArea('description',Input::get('description'),['class'=>'form-control','placeholder'=>'description'])!!}
</div>
<div class="form-group">
{!!Form::textArea('featureList',Input::get('featureList'),['class'=>'form-control','placeholder'=>'featureList'])!!}
</div>
<input name="createUserId" type="hidden" value={{Sentry::getUser()->id}}>
{!!Form::submit('Create!',['class'=>'btn btn-primary btn-lg btn-block'])!!}
{!!Form::close()!!}
@endsection