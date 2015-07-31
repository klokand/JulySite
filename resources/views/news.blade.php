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

                <!-- First News Post -->
				<div class="news row">
				<img class="img-responsive col-md-4 col-sm-4" src="img/news1.jpg" alt="">
				<div class="col-md-8 col-sm-8 content">
                    <a class="title" href="#">Tiny apartment transforms to meet your needs</a>
				<p class="author">
					By Christina Zhou
				</p>
                <p class="date"><span class="glyphicon glyphicon-time"></span> Posted on July 30, 2015 at 10:00 PM</p>
                <p class="summary">A smart apartment with all the amenities of a two-bedroom house proves that a small space can have big potential.sdfsdf sdfw erdfs dfsdfsd fsdfsdf werwerwfsd fsdfsdf sdfsdf sdfsd fsdf sdf sdfsdfsa sdf ds  sdfsdfs  sdfsdfsw ersd fsd sdf sdfsdf </p>
				</div>
				</div>
				<hr>
                <!-- Second News Post -->
                <div class="news row">
				<img class="img-responsive col-md-4 col-sm-4" src="img/news2.jpg" alt="">
				<div class="col-md-8 col-sm-8 content">
                    <a class="title" href="#">Canberra Airport owners to deliver 2000 dwellings in new suburb of Denman</a>
				<p class="author">
					By Meredith Clisby
				</p>
                <p class="date"><span class="glyphicon glyphicon-time"></span> Posted on July 28, 2015 at 10:00 PM</p>
                <p class="summary">The owners of Canberra Airport have been selected to develop about 2000 dwellings in the new suburb of Denman in Molonglo Valley.

The ACT government announced the successful tender for the first stage of the new suburb on Tuesday. </p>
				</div>
				</div>
				<hr>

                <!-- Third News Post -->
				<div class="news row">
				<img class="img-responsive col-md-4 col-sm-4" src="img/news3.jpg" alt="">
				<div class="col-md-8 col-sm-8 content">
                    <a class="title" href="#">Developer pays $1.5 million over reserve for rundown Granville house</a>
				<p class="author">
					By Anna Anderson
				</p>
                <p class="date"><span class="glyphicon glyphicon-time"></span> Posted on July 25, 2015 at 10:00 PM</p>
                <p class="summary">Frenzied bidding between six developers resulted in an unrenovated Granville house selling $1.53 million over reserve at auction on Saturday morning.</p>
				</div>
				</div>
				<hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

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
                                <li><a href="#">Tiny apartment transforms to meet your needs</a>
                                </li>
                                <li><a href="#">Canberra Airport owners to deliver 2000 dwellings in new suburb of Denman</a>
                                </li>
                                <li><a href="#">Developer pays $1.5 million over reserve for rundown Granville house</a>
                                </li>
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