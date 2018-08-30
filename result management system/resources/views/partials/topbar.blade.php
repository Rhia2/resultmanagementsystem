<div class="header">
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="{{url('assets/img/FUNAAB-LOGO.jpg')}}" class='img-responsive' style="max-height:50px" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>Result management System</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown">
						<a href="{{url('/users/profile')}}" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="{{url('assets/img/user.jpg')}}" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>{{ Auth::user()->roles[0]->name }}</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{url('/users/profile')}}">My Profile</a></li>
							<li><a href="{{url('/users/editProfile',[Auth::user()->id])}}">Edit Profile</a></li>
							<li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="{{url('/users/profile')}}">My Profile</a></li>
						<li><a href="edit-profile.html">Edit Profile</a></li>
						<li><a href="settings.html">Settings</a></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
            </div>