@extends('app')

@section('content')
<section id="developmentDetail">
   <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- News Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    {{$news->title}}
                </h1>
						<div class="development row">
						<div class="col-md-12 content">
						<p class="col-md-4 col-lg-4 date text-left"><span class="glyphicon glyphicon-time"></span> Posted on {{$news->created_at}}</p>
						</div>
						<hr>
						{!!$news->content!!}
						</div>
            </div>
			<div id="contactForm" class="col-xs-12 col-sm-12 col-md-4">
				<h2>Ask about this property</h2>
				<form>
					<input type="hidden" name="property" value="{{Request::url()}}">
					<div class="form-group">
						<label for="contactName">Name</label>
						<input type="text" class="form-control" id="contactName" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="contactEmail">Email Adress</label>
						<input type="email" class="form-control" id="contactEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="contactSubject">Subject</label>
						<input type="email" class="form-control" id="contactEmail" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Message" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					<button type="reset" class="btn btn-default btn-lg">Clear Form</button>
				</form>
			</div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
</section>
@endsection