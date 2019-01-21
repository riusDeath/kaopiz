@extends('layouts.master')
@section('title', 'TOEIC')
@section('banner')
	@include('layouts.banner')
@endsection
@section('content')
<!-- Start Why Choose Us Area CSS -->
        <!-- Start Upcoming Events Area -->
        <section class="upcoming-events-area events-two ptb-100">
            <div class="container">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-lg-12 col-md-12">
                        <div class="single-event mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <figure>
                                        <a href="#">
                                            <span class="image" style="background-image: url(assets/img/event-one.jpg);"></span>
                                            <img src="{{ $post->avatar }}" alt="event">
                                        </a>
                                        
                                        <div class="date">
                                            <span>{{ date_format($post->created_at) }}</span>
                                        </div>
                                    </figure>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="event-content">
                                        <h3>{{ $post->title }}</h3>
                                        <p>{{ $post->post_excerpt }}</p>
                                        
                                        <div class="where-when">
                                            <ul class="pull-left">
                                                <li><span>Where</span></li>
                                                <li>Fort Mason Center Victoria City, Canada</li>
                                            </ul>
                                            
                                            <ul>
                                                <li><span>When</span></li>
                                                <li>Sunday</li>
                                                <li>3.30 pm - 6.30 pm</li>
                                            </ul>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary">View Details <i class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="single-event mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="event-content">
                                        <h3>Ruby on Rails Framework</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        
                                        <div class="where-when">
                                            <ul class="pull-left">
                                                <li><span>Where</span></li>
                                                <li>Fort Mason Center Victoria City, Canada</li>
                                            </ul>
                                            
                                            <ul>
                                                <li><span>When</span></li>
                                                <li>Sunday</li>
                                                <li>3.30 pm - 6.30 pm</li>
                                            </ul>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary">View Details <i class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 p-0">
                                    <figure>
                                        <a href="#">
                                            <span class="image" style="background-image: url(assets/img/event-two.jpg);"></span>
                                            <img src="assets/img/event-two.jpg" alt="event">
                                        </a>
                                        
                                        <div class="date">
                                            <span>18 Jan, 2019</span>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="single-event mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <figure>
                                        <a href="#">
                                            <span class="image" style="background-image: url(assets/img/event-three.jpg);"></span>
                                            <img src="assets/img/event-three.jpg" alt="event">
                                        </a>
                                        
                                        <div class="date">
                                            <span>18 Jan, 2019</span>
                                        </div>
                                    </figure>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="event-content">
                                        <h3>WordPress Framework</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        
                                        <div class="where-when">
                                            <ul class="pull-left">
                                                <li><span>Where</span></li>
                                                <li>Fort Mason Center Victoria City, Canada</li>
                                            </ul>
                                            
                                            <ul>
                                                <li><span>When</span></li>
                                                <li>Sunday</li>
                                                <li>3.30 pm - 6.30 pm</li>
                                            </ul>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary">View Details <i class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="single-event mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="event-content">
                                        <h3>Ruby on Rails Framework</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        
                                        <div class="where-when">
                                            <ul class="pull-left">
                                                <li><span>Where</span></li>
                                                <li>Fort Mason Center Victoria City, Canada</li>
                                            </ul>
                                            
                                            <ul>
                                                <li><span>When</span></li>
                                                <li>Sunday</li>
                                                <li>3.30 pm - 6.30 pm</li>
                                            </ul>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary">View Details <i class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 p-0">
                                    <figure>
                                        <a href="#">
                                            <span class="image" style="background-image: url(assets/img/event-two.jpg);"></span>
                                            <img src="assets/img/event-two.jpg" alt="event">
                                        </a>
                                        
                                        <div class="date">
                                            <span>18 Jan, 2019</span>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="single-event mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <figure>
                                        <a href="#">
                                            <span class="image" style="background-image: url(assets/img/event-one.jpg);"></span>
                                            <img src="assets/img/event-one.jpg" alt="event">
                                        </a>
                                        
                                        <div class="date">
                                            <span>18 Jan, 2019</span>
                                        </div>
                                    </figure>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="event-content">
                                        <h3>Web Development</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        
                                        <div class="where-when">
                                            <ul class="pull-left">
                                                <li><span>Where</span></li>
                                                <li>Fort Mason Center Victoria City, Canada</li>
                                            </ul>
                                            
                                            <ul>
                                                <li><span>When</span></li>
                                                <li>Sunday</li>
                                                <li>3.30 pm - 6.30 pm</li>
                                            </ul>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary">View Details <i class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="single-event mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="event-content">
                                        <h3>WordPress Framework</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        
                                        <div class="where-when">
                                            <ul class="pull-left">
                                                <li><span>Where</span></li>
                                                <li>Fort Mason Center Victoria City, Canada</li>
                                            </ul>
                                            
                                            <ul>
                                                <li><span>When</span></li>
                                                <li>Sunday</li>
                                                <li>3.30 pm - 6.30 pm</li>
                                            </ul>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary">View Details <i class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 p-0">
                                    <figure>
                                        <a href="#">
                                            <span class="image" style="background-image: url(assets/img/event-three.jpg);"></span>
                                            <img src="assets/img/event-three.jpg" alt="event">
                                        </a>
                                        
                                        <div class="date">
                                            <span>18 Jan, 2019</span>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Upcoming Events Area -->
@endsection
@section('script')
@endsection