@extends('app')

@section('content')
<section id="developmentList">
   <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- News Entries Column -->
            <div class="col-md-12">
                <h1 class="page-header">
                    Developments
                </h1>
				@if(count($news))
					@foreach($news as $item)
						<div class="development row">
						<div class="col-md-12 content">
						<a class="title col-md-8 col-lg-8" href="{{url('/')}}/news/{!!$item->id!!}">{{$item->title}}</a>
						<p class="col-md-4 col-lg-4 date text-right"><span class="glyphicon glyphicon-time"></span> Posted on {{$item->created_at}}</p>
						</div>
						<hr>
						<a class="image" href="{{url('/')}}/news/{!!$item->id!!}">
						<img class="img-responsive col-md-12 col-sm-12 col-lg-12" src="/uploads/news/{{$item->coverImage}}" alt=""></a>
						</div>
						
					@endforeach
					<div class="col-md-7">
					{!!$news->render()!!}
					</div>
				@else
				<p>No article at the moment</p>
				@endif
            </div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
</section>
@endsection