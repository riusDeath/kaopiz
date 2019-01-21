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
                                   
                                    <li><a href="#">Courses</a>
                                        <ul class="dropdown">
                                            <li><a href="courses-style-one.html">Courses Style One</a></li>
                                            <li><a href="courses-style-two.html">Courses Style Two</a></li>
                                            <li><a href="single-courses.html">Courses Details</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#">Events</a>
                                        <ul class="dropdown">
                                            <li><a href="event-style-one.html">Events Style One</a></li>
                                            <li><a href="event-style-two.html">Events Style Two</a></li>
                                            <li><a href="single-events.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                    
									<li><a href="{{ route('contest') }}">Contest</a></li>
									
									<li><a href="#">Blog</a>
										<ul class="dropdown">
											<li><a href="blog-style-one.html">Blog Style One</a></li>
                                            <li><a href="blog-style-two.html">Blog Style Two</a></li>
                                            <li><a href="blog-style-three.html">Blog Style Three</a></li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
										</ul>
									</li>
									
									<li><a href="#">Shop</a>
										<ul class="dropdown">
											<li><a href="shop-style-one.html">Shop Style One</a></li>
                                            <li><a href="shop-style-two.html">Shop Style Two</a></li>
                                            <li><a href="single-shop.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
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