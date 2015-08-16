@extends('admin.layout.admin')
@section('content')
<div class="row">
	 <div class="col-lg-12">
		<a href="{{asset('uploads/pdf/'.$page->download_offer)}}" download>{{$page->download_offer}}</a>
		{!!Form::model($page,['url'=>'admin/loadableOffer','method'=>'post','files' => true])!!}
			<h4>New Pdf</h4>	
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="form-group">
			{!! Form::file('download_offer', ['class' => 'form-control']) !!}
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
			{!!Form::close()!!}
		</div>
	 </div>
</div>
@endsection