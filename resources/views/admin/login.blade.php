@extends('app')
@section('content')
<div class="container">
<h1>Login</h1>
{!!Form::open(['url'=>'admin/login','method'=>'post'])!!}
						<div class="form-group">
							<label class="col-md-3 col-md-offset-3 text-right control-label">E-Mail Address:</label>
							<div class="col-md-3">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 col-md-offset-3 text-right control-label">Password:</label>
							<div class="col-md-3">
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3 col-md-offset-6">
							{!!Form::submit('Login!',['class'=>'btn btn-default'])!!}
						</div>
						</div>
{!!Form::close()!!}
</div>
@endsection