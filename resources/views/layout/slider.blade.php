 <!--/SLIDESHOW start-->    
       <section id="slider" class="text-center">
         
                <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
					@if($page->sliderImage1 !=null)
                        <div class="item active">
							<a href="{{$page->slider1_link}}">
                            <img src="{{'/'.\Config::get('image.page_image').$page->sliderImage1}}" alt="" />
                            <div class="carousel-caption" >
                                <h4 class="back-light">{{$page->caption1}}</h4>
                            </div>
							</a>
                        </div>
					@endif
					@if($page->sliderImage2 !=null)
                        <div class="item">
                            <a href="{{$page->slider2_link}}">
							<img src="{{'/'.\Config::get('image.page_image').$page->sliderImage2}}" alt="" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">{{$page->caption2}}</h4>
                            </div>
							</a>
                        </div>
					@endif
					@if($page->sliderImage3 !=null)
                        <div class="item">
							<a href="{{$page->slider3_link}}">
                            <img src="{{'/'.\Config::get('image.page_image').$page->sliderImage3}}" alt="" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">{{$page->caption3}}</h4>
                            </div>
							</a>
                        </div>
					@endif
                    </div>

                    <ol class="carousel-indicators">
					@if($page->sliderImage1 !=null)
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
					@endif
					@if($page->sliderImage2 !=null)
                        <li data-target="#carousel-example" data-slide-to="1"></li>
					@endif
					@if($page->sliderImage3 !=null)
                        <li data-target="#carousel-example" data-slide-to="2"></li>
					@endif
                    </ol>
                </div>
           
       </section>
    <!--/.SLIDESHOW END-->