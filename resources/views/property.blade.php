@extends('app')

@section('content')
<section id="property">
	<div class="container">
		<div class="row">
			<h1 class="page-header">
				130 Dorking Road Box Hill North Vic 3129
			</h1>
			<div class="col-md-8">
			 <div id="property-images" class="page-images-slider">
				<a href="{{url('/')}}/img/property/15-1-1.jpg">
                <img src="/img/property/15-1-1.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-2.jpg">
				<img src="/img/property/15-1-2.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-3.jpg">
				<img src="/img/property/15-1-3.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-4.jpg">
				<img src="/img/property/15-1-4.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-5.jpg">
				<img src="/img/property/15-1-5.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-6.jpg">
				<img src="/img/property/15-1-6.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-7.jpg">
				<img src="/img/property/15-1-7.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-8.jpg">
				<img src="/img/property/15-1-8.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-9.jpg">
				<img src="/img/property/15-1-9.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-10.jpg">
				<img src="/img/property/15-1-10.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-11.jpg">
				<img src="/img/property/15-1-11.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-12.jpg">
				<img src="/img/property/15-1-12.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-13.jpg">
				<img src="/img/property/15-1-13.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-14.jpg">
				<img src="/img/property/15-1-14.jpg" />
				</a>
				<a href="{{url('/')}}/img/property/15-1-15.jpg">
				<img src="/img/property/15-1-15.jpg" />
				</a>
			 </div>
			 <div id="property-detail">
				<h2>$650,000 Negotiable</h2>
				<span class="list-detail-icon icon-house">200</span>sqm
					<span class="list-detail-icon icon-land">500</span>sqm
					<span class="list-detail-icon icon-bed">3</span>
					<span class="list-detail-icon icon-shower">2</span>
					<span class="list-detail-icon icon-garage">2</span>
					<div class="description">INSPECTION BY APPOINTMENT. The one you have been waiting for is now on offer. A limited opportunity waits for you to secure this exceptional property/development site (S.T.C.A.) within the most sort after lucrative “Growth Zone” and the “Box Hill Activity Centre Transit City Structure Plan”, situated on an elevated Station Street allotment with rear Right of Way (ROW).<br/>
					Renovate to your hearts content or knock it down and build the brand new home of your dreams the decision is up to you. If you were looking to renovate the current home has a lot of potential with beautiful cornices and fantastic hardwood floors that are just itching to get a good varnishing. <br>

3 bedroom (master with full ensuite and walk in robe) plus office/garage setup, fully renovated period Edwardian 9 room character home.
Offering arched entrance hallway, high & decorative ceilings, wide skirtings & cornices, rosettes, picture railings, polished timber flooring, period fireplace(s) & mantelpiece(s), separate lounge, separate dining renovated kitchen with granite bench tops and magnificent family room & meals area leading out through French doors onto undercover decking overlooking landscaped gardens and triple garage accommodation at rear and off street parking, plus single garage via driveway at front. 
<br>
</div>
		<div class="feature">
			<ul>
				<li>Growth Zone</li>
				<li>Side Boundary 48.3m</li>
				<li>Quality kitchen with stone benches overlooking the expansive meals/family area</li>
				<li>Under house rumpus that is ideal for a music room or home office</li>
				<li>Double remote garage with internal access into the home</li>
				<li>Gas ducted heating (NEST home automation), split system cooling & alarm system</li>
					
			</ul>
		</div>
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
	</div>
</section>
@endsection