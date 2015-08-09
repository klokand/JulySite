<!--NAVBAR Start-->
    <div class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
					<div class="logo1">LUCKY COUNTRY</div>
				</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li><a href="{{url('aboutUs')}}">About Us</a></li>
                    <li class="dropdown"><a href="{{url('properties/All')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Land <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{url('properties/All')}}">Redevelopment</a></li>
						<li><a href="{{url('properties/Home Land Package')}}">Home Land Package</a></li>
					</ul>
				</li>
				<li><a href="{{url('properties/All')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">House <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{url('properties/Display Home')}}">Display Home</a></li>
						<li><a href="{{url('properties/Off-the-plan')}}">Off-the-plan</a></li>
						<li><a href="{{url('properties/Completed Units')}}">Completed Units</a></li>
					</ul>
				</li>
				<li><a href="{{url('properties/Sold')}}">Sold</a></li>
				<li><a href="{{url('news')}}">News</a></li>
				<li><a href="{{url('contactUs')}}">Contact Us</a></li>
                </ul>
            </div>
           
        </div>
    </div>
    <!--/.NAVBAR END-->