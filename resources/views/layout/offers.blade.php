<section id="offer"  >
           <div class="container">
           <div class="row   alert alert-info" >
                 <div class="col-md-8 col-sm-8">
                      <h1>  Download Now For Our Latest Offers</h1>
                 </div>
                 <div class="col-md-4 col-sm-4" style="padding-top: 15px;">
					@if($page->download_offer!=null)
                     <a href="{{asset('uploads/pdf/'.$page->download_offer)}}" class=" btn btn-primary btn-lg" download>GRAB IT HERE NOW</a> 
					 @else
					 <a href="#" class=" btn btn-primary btn-lg">GRAB IT HERE NOW</a>
					 @endif
                 </div>
                          
               </div>
               </div>
      </section>