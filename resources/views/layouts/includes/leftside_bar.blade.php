<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="{!! asset('img/user.png') !!}" alt="" /></a>
						</div>
						<div class="info">
							{!! $user->first_name !!}&nbsp;{!! $user->middle_name !!}&nbsp;{!! $user->last_name !!}
							<small>{!! $user->email !!}</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="{!! URL::to('dashboard') !!}">
						    <i class="fa fa-desktop"></i>
						    <span class="active">Dashboard</span>
					    </a>
					</li>
					<li class="has-sub">
						<a href="{!! URL::to('customers') !!}">
							<i class="fa fa-group"></i> 
							<span>Customers</span>
						</a>
					</li>
					@if ($user->role_id == 1)
					<li class="has-sub">
						<a href="{!! URL::to('employees') !!}">
							<i class="fa fa-user"></i> 
							<span>Employees</span>
						</a>
					</li>
					@endif
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-briefcase"></i>
						    <span>Loans</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="{!! URL::to('loans') !!}">Loan Applications</a></li>
						    <li><a href="{!! route('returns') !!}">Return Loan</a></li>
						</ul>
					</li>
					
					<li class="has-sub">
					    <a href="{!! url('logout') !!}">					        
					        <i class="fa fa-power-off"></i>
					        <span>Logout</span>
					    </a>					    
					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		