<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img alt="Brand" src="/img/blank.png">
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
				@if(!Sentry::check())
						<li><a href="/">Home</a></li>
						<li><a href="/about_us">About Us</a></li>
						<li><a href="/news">News</a></li>
						<li><a href="/properties">Properties</a></li>
						<li><a href="/contact_us">Contact Us</a></li>
				@else
						<li><a href="#">Hello {{Sentry::getUser()->first_name}} {{Sentry::getUser()->last_name}}</a></li>
						<li><a href="admin/logout">Logout</a></li>
				@endif
				</ul>
			</div>
		</div>
	</nav>