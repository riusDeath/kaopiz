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
				<a href="{{ route('contest.reading.part5') }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>Partr5: Incomplete sentence</h3>
						<p>....</p>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a href="{{ route('contest.reading.part6') }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>Partr6: Text completion</h3>
						<p>....</p>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a href="{{ route('contest.reading.part7') }}">
					<div class="work-process">
						<i class="icofont-checked"></i>
						<h3>Partr7: Reading comprehen</h3>
						<p>....</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection