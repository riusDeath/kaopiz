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
                                            <span class="image" style="background-image: url(images/{{ $post->avatar }});"></span>
                                            <img src="assets/img/event-one.jpg" alt="event">
                                        </a>
                                        
                                        <div class="date">
                                            <span>{{ $post->created_at }}</span>
                                        </div>
                                    </figure>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 p-0">
                                    <div class="event-content">
                                        <h3>{{ $post->title }}</h3>
                                        <p>{{ $post->post_excerpt }}</p>
                                        <a href="{{ route('client.post.detail', ['id' => $post->id]) }}" class="btn btn-primary">View Details <i class="icofont-rounded-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Upcoming Events Area -->
@endsection
@section('script')
@endsection