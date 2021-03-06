@extends('admin.layout.admin')
@section('content')

{!!Form::model($property,['route'=>'property.edit','method'=>'post',$property->id,'files' => true])!!}
<input name="propertyId" type="hidden" value={{$property->id}}>
<div class="form-group">
{!!Form::text('name',Input::get('name'),['class'=>'form-control','placeholder'=>'Name'])!!}
</div>
<div class="form-group">
	<label for="state">State:</label>	{!!Form::select('state',['available'=>'available','sold'=>'sold','underContract'=>'underContract','unavailable'=>'unavailable'],Input::get('state'),['class'=>'form-control'])!!}
</div>
<div class="form-group">
	<label for="type">Type:</label>
	{!!Form::select('type',['House'=>'House','Unit'=>'Unit','Land'=>'Land','Apartment'=>'Apartment','Town House'=>'Town House','Home Land Package'=>'Home Land Package','Display Home'=>'Display Home','Off-the-plan'=>'Off-the-plan','Completed Units'=>'Completed Units'],Input::get('type'),['class'=>'form-control'])!!}
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
<label for="pdf">PDF: <a href="{{asset('uploads/pdf/'.$property->pdf)}}" download>{{$property->pdf}}</a></label>
{!! Form::file('pdf', ['class' => 'form-control']) !!}
</div>

<div class="form-group">	{!!Form::textArea('description',Input::get('description'),['id'=>'description-textarea','class'=>'form-control','placeholder'=>'description'])!!}
</div>
<input name="descriptionHTML" id="description-input" type="hidden" >
<input name="createUserId" type="hidden" value={{Sentry::getUser()->id}}>
{!!Form::submit('update',['id'=>'submit',	'class'=>'btn btn-primary btn-lg btn-block'])!!}
{!!Form::close()!!}
@endsection