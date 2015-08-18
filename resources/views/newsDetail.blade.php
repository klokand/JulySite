@extends('app')

@section('content')
<section id="developmentDetail">
   <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- News Entries Column -->
            <div class="col-md-12">
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
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
</section>
@endsection