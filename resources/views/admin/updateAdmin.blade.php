@extends('admin.layout.admin')
@section('content')
{{$user->first_name}}
{{$user->last_name}}
<hr>
<a href="{{url('resetPassWord/'.$user->id)}}" class="btn btn-primary" disabled="disabled" role="button">reset Password</a>
@endsection