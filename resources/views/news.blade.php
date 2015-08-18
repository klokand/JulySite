@extends('app')

@section('content')
<section id="newsList">
   <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- News Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    News
                </h1>
				@if(count($news))
					@foreach($news as $item)
						<div class="news row">
						<img class="img-responsive col-md-4 col-sm-4" src="/uploads/news/{{$item->coverImage}}" alt="">
						<div class="col-md-8 col-sm-8 content">
						<a class="title" href="{{url('/')}}/news/{!!$item->id!!}">{{$item->title}}</a>
						<p class="author">
						By {{$item->author}}
						</p>
						<p class="date"><span class="glyphicon glyphicon-time"></span> Posted on {{$item->created_at}}</p>
						</div>
						</div>
						<hr>
					@endforeach
					<div class="col-md-7">
					{!!$news->render()!!}
					</div>
				@else
				<p>No article at the moment</p>
				@endif
            </div>

            <!-- News Sidebar Widgets Column -->
            <div id="newsRightBar" class="col-md-offset-1 col-md-3">
                <!-- News Categories Well -->
                <div class="well">
                    <h4>Latest news</h4>
					<hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
								@if(count($newsTitles))
								@foreach($newsTitles as $title)
                                <li><a href="{{url('/')}}/news/{!!$title->id!!}">{{$title->title}}</a>
                                </li>
								@endforeach
								@else
								<li>No article </li>
								@endif
                                
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
</section>
@endsection