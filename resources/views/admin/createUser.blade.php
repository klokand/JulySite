@extends('app')
@section('content')
<div class="container">
<h1>Create User form</h1>
{!!Form::open(['url'=>'createUser','method'=>'post'])!!}
<div class="form-group">
	<label for="first_name">First Name:</label>
	{!!Form::text('first_name',Input::get('first_name'),['class'=>'form-control'])!!}
</div>
<div class="form-group">
	<label for="last_name">Last Name:</label>
	{!!Form::text('last_name',Input::get('last_name'),['class'=>'form-control'])!!}
</div>
<div class="form-group">
	<label for="email">Email address:</label>
	{!!Form::email('email',Input::get('email'),['class'=>'form-control'])!!}
</div>
<div class="form-group">
	<label for="password">Password:</label>
	{!!Form::password('password',['class'=>'form-control'])!!}
</div>
<div class="form-group">
	<label for="re_password">Re-password:</label>
	{!!Form::password('re_password',['class'=>'form-control'])!!}
</div>
<div class="form-group">
	<label for="user_type">User type:</label>
	{!!Form::select('user_type',['superAdmin'=>'SuperAdmin','admin'=>'Admin'],['class'=>'form-control'])!!}
</div>
	{!!Form::submit('Register now!',['class'=>'btn btn-default'])!!}
{!!Form::close()!!}
</div>
@endsection