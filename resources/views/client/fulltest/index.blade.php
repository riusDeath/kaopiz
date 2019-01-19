@extends('layouts.master')
@section('title', 'full test')
@section('style')
@endsection
@section('content')
<section class="how-it-works red-bg ptb-100">
           
            <div class="top-divider"></div>
            <div class="bottom-divider"></div>
           
            <div class="container">
                <div class="section-title">
                    <h3>Choose test<span>?</span></h3>
                </div>
                
                <div class="row">
                	@foreach($model as $test)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('contest.fulltest.test', ['id' => $test->id]) }}">
                        	<div class="work-process">
                        	    <i class="icofont-search-document"></i>
                        	    <h3>{{ $test->name }}</h3>
                        	    <p>{{ $test->title }}</p>
                        	</div>
                        </a>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <div class="view-all text-center">
                            <a href="#" class="btn btn-primary">{{ $test->links }}<i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
