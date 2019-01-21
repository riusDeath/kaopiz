@extends('layouts.master')
@section('title', 'contest')
@section('style')
@endsection
@section('content')
<!-- Start Featured Courses Area -->
        <section class="featured-courses ptb-100">
            <div class="container">
                <div class="section-title">
                    <h3>Featured Courses</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco . </p>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-courses">
                            <div class="icon bg-1">
                                <i class="icofont-pen-holder"></i>
                            </div>
                            
                            <h3>Full Test</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a href="{{ route('contest.full-test') }}" class="read-more">
                                <span class="left"><i class="icofont-rounded-double-right"></i></span> 
                                Test
                                <span class="right"><i class="icofont-rounded-double-right"></i></span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="single-courses">
                            <div class="icon bg-2">
                                <i class="icofont-architecture-alt"></i>
                            </div>
                            
                            <h3>Listening Test</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a href="#" class="read-more">
                                <span class="left"><i class="icofont-rounded-double-right"></i></span> 
                                Read More 
                                <span class="right"><i class="icofont-rounded-double-right"></i></span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="single-courses">
                            <div class="icon bg-3">
                                <i class="icofont-database"></i>
                            </div>
                            
                            <h3>Reading Test</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a href="#" class="read-more">
                                <span class="left"><i class="icofont-rounded-double-right"></i></span> 
                                Read More 
                                <span class="right"><i class="icofont-rounded-double-right"></i></span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="single-courses">
                            <div class="icon bg-4">
                                <i class="icofont-fax"></i>
                            </div>
                            
                            <h3>Project Management</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a href="#" class="read-more">
                                <span class="left"><i class="icofont-rounded-double-right"></i></span> 
                                Read More 
                                <span class="right"><i class="icofont-rounded-double-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Courses Area -->
@endsection
@section('script')
@endsection