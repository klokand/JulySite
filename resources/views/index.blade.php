@extends('app')

@section('content')
@if ($page->isEmpty())
    Nothing Here
@else 
    @include('layout.slider')
	@include('layout.projects')
	@include('layout.offers')
	@include('layout.teamInfo')
	@include('layout.quotes')
	@include('layout.clients')
@endif


@endsection