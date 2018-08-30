<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
						@if(!Auth::user()->hasRole('student'))
							<li class="active"> 
								<a href="{{url('/')}}">Dashboard</a>
							</li>
							
							<li class="submenu"> 
								<a href="#"><span> Students</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="{{url('/students/add')}}">Add students</a></li>
									<li><a href="{{url('/students-list')}}">All students</a></li>
								</ul>
							</li>
							
							<li class="submenu"> 
								<a href="#"><span> Colleges</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="{{url('/colleges')}}">All colleges</a></li>
									<li><a href="{{url('/departments')}}">Departments</a></li>
									<li><a href="{{url('/staffs')}}">Staffs</a></li>
								</ul>
							</li>
							<li> 
								<a href="{{url('/courses')}}">Courses</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Results</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="{{url('/results/add')}}">Enter Results</a></li>
									<li><a href="{{url('/results')}}">All Results</a></li>
								</ul>
							</li>
							
							<!-- <li> 
								<a href="{{url('/reports')}}">Reports</a>
							</li> -->
							<li> 
								<a href="{{url('/users')}}">Users</a>
							</li>
							<li> 
								<a href="{{url('/transcripts')}}">Transcripts</a>
							</li>
							@endif
							@role('student')
							<li> 
								<a href="{{url('/courseReg')}}">Course Registration</a>
							</li>
							<li> 
								<a href="{{url('/results/view',[Auth::user()->id])}}">My result</a>
							</li>
							@endrole
						</ul>
					</div>
                </div>
            </div>