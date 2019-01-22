@extends('layouts.master')
@section('title', 'contest')
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
			<div class="col-lg-3 col-md-6">
				<a href="{{ route('contest.listeing.part1') }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>Partr1: Photographs</h3>
						<p>....</p>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a href="{{ route('contest.listeing.part2') }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>Partr2: Question-Response</h3>
						<p>....</p>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a href="{{ route('contest.listeing.part3') }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>Partr3: Short conversation</h3>
						<p>....</p>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a href="{{ route('contest.listeing.part1') }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>Partr4: Short talk</h3>
						<p>....</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection