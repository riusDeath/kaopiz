@extends('layouts.master')
@section('title', 'contest')
@section('style')
<link rel="stylesheet" href="assets/css/contest.css">
<link rel="stylesheet" href="assets/css/radio.css">       
<link rel="stylesheet" href="assets/css/test.css">     
<link rel="stylesheet" href="assets/css/answersheet.css"> 
<meta name="csrf-token" content="{{ csrf_token() }}">
@yield('style')
@endsection
@section('content')
    <div class="" style="margin:200px">
    <div class="container"> 
        <div class="row">
            <div class="col-md-9 colQuestion">
                @yield('test-content')
            </div>
            <div class="col-md-3">
                <div class="panel  myList">
                    <div class="panel-heading myList-header">
                        <h3 class="panel-title"> <span class="glyphicon">&#xe032; </span> TOEIC SESSION</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="session.html">Session 1: Hiện tại đơn, Hiện tại hoàn thành</a></li>
                            <li class="list-group-item"><a href="#">Session 1: Hiện tại đơn, Hiện tại hoàn thành</a></li>
                            <li class="list-group-item"><a href="#">Session 1: Hiện tại đơn, Hiện tại hoàn thành</a></li>
                            <li class="list-group-item"><a href="#">Session 1: Hiện tại đơn, Hiện tại hoàn thành</a></li>
                        </ul>
                    </div>
                </div> 
                <div class="panel my-advertisment">
                    <div class="panel-body">
                        <a href="{{ route('contest.listeing.part1') }}">TOEIC TEST PART 1</a>
                    </div>
                </div>
                <div class="panel my-advertisment">
                    <div class="panel-body">
                        <a href="#">TOEIC TEST PART 2</a>
                    </div>
                </div>
                <div class="panel my-advertisment">
                    <div class="panel-body">
                        <a href="#">TOEIC TEST PART 3</a>
                    </div>
                </div>
                <div class="panel my-advertisment">
                    <div class="panel-body">
                        <a href="#">TOEIC TEST PART 4</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="assets/js/question_answer.js"></script>
@yield('script')
@endsection