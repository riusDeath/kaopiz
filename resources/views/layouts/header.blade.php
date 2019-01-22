<div class="main-header-area header-sticky">
            <div class="container">
				<div class="classy-nav-container breakpoint-off">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between" id="EduStudyNav">

						<!-- Logo -->
						<a class="nav-brand" href="{{ route('home') }}"><img src="assets/img/logo.png" alt="logo"></a>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu">

							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
                                   
                                    <li><a href="#">Account</a>
                                        <ul class="dropdown">
                                        	@if(Auth::check())
                                        		@if(Auth::user()->role == 0)
                                            	<li><a href="#">{{ Auth::user()->name }}</a></li>
                                            	@else
                                            	<li><a href="{{ route('dashboard') }}">Admin</a></li>
                                            	@endif
                                            	<li><a href="{{ route('logout') }}">Log out</a></li>
                                            @else
                                            <li><a href="{{ route('login') }}">Log in</a></li>
                                            <li><a href="admission.html">Register</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                   
                                    <li class="cn-dropdown-item has-down pr12"><a href="#">Categories</a>
										<ul class="dropdown">
											@foreach($categories as $category)
											<li class="has-down"><a href="{{ route('client.post.category', ['id', $category->id]) }}">{{ $category->name }}</a>
												<ul class="dropdown">
													@foreach($category->category_child as $category_child)
													<li><a href="{{ route('client.post.category', ['id', $category_child->id]) }}">{{ $category_child->name }}</a></li>
													@endforeach
												</ul>
												<span class="dd-trigger"></span><span class="dd-arrow"></span>
											</li>
											@endforeach
										</ul>
									</li>
								</li>
                                    
                                    
									<li><a href="{{ route('contest') }}">Contest</a>
										<ul class="dropdown">
											<li><a href="{{ route('contest.full-test') }}">Full Test</a></li>
                                            <li><a href="{{ route('contest.listeing.index') }}">Listening Test</a></li>
                                            <li><a href="{{ route('contest.reading.index') }}">Reading Test</a></li>
										</ul>
									</li>
									
									<li><a href="#">Contact</a>
										<ul class="dropdown">
											<li><a href="contact-style-one.html">Contact Style One</a></li>
                                            <li><a href="contact-style-two.html">Contact Style Two</a></li>
										</ul>
									</li>
									
									<li><a href="#search" class="search-btn"><i class="icofont-search-2"></i></a></li>
								</ul>
							</div>
							<!-- Nav End -->
						</div>
					</nav>
				</div>
			</div>
        </div>