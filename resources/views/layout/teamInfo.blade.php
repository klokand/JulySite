<section id="teamInfo">
	 <div class="container">
      <div class="row text-center" >
       <div class="col-md-12">
        <div class="row text-center pad-row  ">
			<div class="col-md-4 col-sm-4 ">
                <img class="img-circle" src="/img/team3.jpg" alt="" />
                <h3><strong>Hugh Jackman</strong> </h3>
				@if(Request::path() == '/')
                <a href="{{url('aboutUs')}}" class="btn btn-primary" >Read Details</a>
				@endif
				@if(Request::path() == 'aboutUs')
                <p>
                   Hugh Michael Jackman is an Australian actor and producer. Jackman has won international recognition for his roles in major films, notably as superhero, period, and romance characters</p>
				@endif
            </div>
            <div class="col-md-4 col-sm-4 ">
                <img class="img-circle" src="/img/team4.jpg" alt="" />
                <h3><strong>Nicole Kidman</strong></h3>
				@if(Request::path() == '/')
                <a href="{{url('aboutUs')}}" class="btn btn-primary" >Read Details</a>
				@endif
				@if(Request::path() == 'aboutUs')
                <p>Kidman was born in Honolulu, Hawaii, while her Australian parents were temporarily in the United States on educational visas. Her father was Antony David Kidman (1938–2014), a biochemist, clinical psychologist, and author who died of a heart attack when he was in Singapore at the age of 75 Her mother, Janelle Ann (née Glenny), is a nursing instructor who edited her husband's books and was a member of the Women's Electoral Lobby. Kidman's ancestry includes Irish, Scottish, and English heritage.</p>
				@endif
            </div>
            <div class="col-md-4 col-sm-4" >
                <img class="img-circle" src="/img/team5.jpg" alt="" />
                <h3><strong>Charles Teo</strong> </h3>
				@if(Request::path() == '/')
                <a href="{{url('aboutUs')}}" class="btn btn-primary" >Read Details</a>
				@endif
				@if(Request::path() == 'aboutUs')
                <p>Charlie Teo trained in Sydney but worked for a decade in the United States, where he still teaches. His sub-speciality is paediatric neurosurgery. He is the director of the Centre for Minimally Invasive Neurosurgery at Prince of Wales Hospital.[2] and the founder of Cure Brain Cancer Foundation (formerly Cure For Life Foundation</p>
				@endif
    
            </div>
                      
         </div>
       </div>   
      </div>
	 </div>
    </section>

    <!--/.teamInfor end-->