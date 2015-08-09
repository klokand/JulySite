@extends('admin.layout.admin')
@section('content')
<label for="property_type">Add property images:</label>
{!!Form::open(['url'=>'property/image/upload','class'=>'dropzone','id'=>'myDropzone'])!!}
<input name="propertyId" type="hidden" value={{$id}}>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
{!!Form::close()!!}
<br/><hr/>
<a href="{{url('admin/propertyList')}}" class="btn btn-primary btn-lg btn-block">Finish</a>
@endsection