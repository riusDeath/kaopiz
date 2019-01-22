@extends('layouts.master')
@section('title', 'contest')
@section('style')
@endsection
@section('content')
<section class="courses-area ptb-100">

	<div class="top-divider"></div>
	<div class="bottom-divider"></div>

	<div class="container">
		<div class="section-title">
			<h3>Choose test<span>?</span></h3>
		</div>
		<div class="row">
			@foreach($part4s as $part4)
			<div class="col-lg-12 col-md-12">
				<a href="{{ route('contest.listeing.part4.test', ['id' => $part4->level_id]) }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>{{ $part4->level->level }}</h3>
						<p>....</p>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection