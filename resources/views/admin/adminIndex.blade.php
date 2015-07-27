@extends('app')
@section('content')
<h1>
	This is the Admin Panel
</h1>

@if($user->inGroup($admin))
<h2>This is the super admin</h2>
@else
<h2>This is admin </h2>
@endif
@endsection