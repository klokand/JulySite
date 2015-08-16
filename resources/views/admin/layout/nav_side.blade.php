<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
						<li><a>LUCKY COUNTRY PROPERTY INVESTMENTS</a></li>
                        <li>
                            <a href="{{url('adminPanel')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Properties<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('createProperty')}}"><i class="fa fa-plus-circle fa-fw"></i>Add Property</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/propertyList')}}"><i class ="fa fa-pencil fa-fw"></i>Update Properties</a>
                                </li>
								<li>
                                    <a href="{{route('propertiesSoldTable')}}"><i class ="fa fa-check-square fa-fw"></i>Sold Properties</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-globe fa-fw"></i>News<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-plus-circle fa-fw"></i>Add News</a>
                                </li>
                                <li>
                                    <a href="#"><i class ="fa fa-pencil fa-fw"></i>Update News</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-file-text fa-fw"></i>Modify Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="{{url('admin/indexSlider')}}"><i class ="fa fa-camera-retro fa-fw"></i>Index Sliders</a>
                                </li>
								<!--
                                <li>
                                    <a href="{{url('admin/projects')}}"><i class ="fa fa-table fa-fw"></i>Property Grid</a>
                                </li>
								-->
                                <li>
                                    <a href="{{url('admin/loadableOffer')}}"><i class ="fa fa-download fa-fw"></i>Loadable Offer</a>
                                </li>
								<li>
                                    <a href="{{url('admin/teamMembers')}}"><i class ="fa fa-child fa-fw"></i>Team Members</a>
                                </li>
								<li>
                                    <a href="{{url('admin/quote')}}"><i class ="fa fa-comment fa-fw"></i>Quote</a>
                                </li>
								<li>
                                    <a href="{{url('admin/partnership')}}"><i class ="fa fa-thumbs-o-up fa-fw"></i>Partnership</a>
                                </li>
								<li>
                                    <a href="{{url('admin/contact')}}"><i class ="fa fa-phone-square fa-fw"></i>Contact</a>
                                </li>
								<li>
                                    <a href="{{url('admin/aboutUs')}}"><i class ="fa fa-book fa-fw"></i>About Us</a>
                                </li>
								<li>
                                    <a href="{{url('admin/queryEmail')}}"><i class ="fa fa-envelope fa-fw"></i>QueryEmail</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						@if(Sentry::getUser()->hasAccess('createAdmin'))
						<li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('createUser')}}"><i class="fa fa-plus-circle fa-fw"></i>Add User</a>
                                </li>
                                <li>
                                    <a href="{{url('adminList')}}"><i class ="fa fa-pencil fa-fw"></i>Update Users</a>
                                </li>
                            </ul>
                        </li>
						@endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->