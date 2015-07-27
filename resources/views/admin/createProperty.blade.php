@extends('app')
@section('content')
<form action="{{url('user/upload')}}" class="dropzone" id="my-awesome-dropzone"></form>
@endsection