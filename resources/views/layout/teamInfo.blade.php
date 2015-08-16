<section id="teamInfo">
	 <div class="container">
      <div class="row text-center" >
       <div class="col-md-12">
        <div class="row text-center pad-row  ">
			@if($page->team_member1_image !=null)
			<div class="col-md-4 col-sm-4 ">
                <img class="img-circle" src="{{'/'.\Config::get('image.page_image').$page->team_member1_image}}" alt="" />
                <h3><strong>{{$page->team_member1_name}}</strong> </h3>
				<h4>{{$page->team_member1_position}}</h4>
				@if(Request::path() == '/')
                <a href="{{url('aboutUs')}}" class="btn btn-primary" >Read Details</a>
				@endif
				@if(Request::path() == 'aboutUs')
                <p>
                   {{$page->team_member1_summary}}</p>
				@endif
            </div>
			@endif
			@if($page->team_member2_image !=null)
            <div class="col-md-4 col-sm-4 ">
                <img class="img-circle" src="{{'/'.\Config::get('image.page_image').$page->team_member2_image}}" alt="" />
                <h3><strong>{{$page->team_member2_name}}</strong></h3>
				<h4>{{$page->team_member2_position}}</h4>
				@if(Request::path() == '/')
                <a href="{{url('aboutUs')}}" class="btn btn-primary" >Read Details</a>
				@endif
				@if(Request::path() == 'aboutUs')
                <p>{{$page->team_member2_summary}}</p>
				@endif
            </div>
			@endif
			@if($page->team_member3_image !=null)
            <div class="col-md-4 col-sm-4" >
                <img class="img-circle" src="{{'/'.\Config::get('image.page_image').$page->team_member3_image}}" alt="" />
                <h3><strong>{{$page->team_member3_name}}</strong> </h3>
				<h4>{{$page->team_member3_position}}</h4>
				@if(Request::path() == '/')
                <a href="{{url('aboutUs')}}" class="btn btn-primary" >Read Details</a>
				@endif
				@if(Request::path() == 'aboutUs')
                <p>{{$page->team_member3_summary}}</p>
				@endif
    
            </div>
			@endif
                      
         </div>
       </div>   
      </div>
	 </div>
    </section>

    <!--/.teamInfor end-->