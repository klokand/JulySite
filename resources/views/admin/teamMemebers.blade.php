@extends('admin.layout.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
		<div class="col-md-6 teamMember">
			<h4>Team Member 1</h4>	
			<img src="{{'/'.\Config::get('image.page_image').$page->team_member1_image}}" class="img-responsive"></img>
			{!!Form::model($page,['url'=>'admin/teamMembers','method'=>'post','files' => true])!!}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="memberId" value="1">
			<div class="form-group">
			{!!Form::text('team_member1_name',Input::old('team_member1_name'),['class'=>'form-control','placeholder'=>'Name'])!!}
			{!!Form::text('team_member1_position',Input::old('team_member1_position'),['class'=>'form-control','placeholder'=>'position'])!!}
			{!!Form::textArea('team_member1_summary',Input::old('team_member1_summary'),['class'=>'form-control','placeholder'=>'summary'])!!}
			{!! Form::file('team_member1_image', ['class' => 'form-control']) !!}
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		{!!Form::close()!!}
		</div>
		<div class="col-md-6 teamMember">
			<h4>Team Member 2</h4>	
			<img src="{{'/'.\Config::get('image.page_image').$page->team_member2_image}}" class="img-responsive"></img>
			{!!Form::model($page,['url'=>'admin/teamMembers','method'=>'post','files' => true])!!}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="hidden" name="memberId" value="2">
			<div class="form-group">
			{!!Form::text('team_member2_name',Input::old('team_member2_name'),['class'=>'form-control','placeholder'=>'Name'])!!}
			{!!Form::text('team_member2_position',Input::old('team_member2_position'),['class'=>'form-control','placeholder'=>'position'])!!}
			{!!Form::textArea('team_member2_summary',Input::old('team_member2_summary'),['class'=>'form-control','placeholder'=>'summary'])!!}
			{!! Form::file('team_member2_image', ['class' => 'form-control']) !!}
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		{!!Form::close()!!}
		</div>
	</div>
</div>
@endsection