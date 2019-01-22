@extends('layouts.master')
@section('title', 'contest')
@section('style')
<link rel="stylesheet" href="assets/css/contest.css">
<link rel="stylesheet" href="assets/css/radio.css">       
<link rel="stylesheet" href="assets/css/test.css">     
<link rel="stylesheet" href="assets/css/answersheet.css"> 
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<?php 
$dem = 0;
?>
<div class="" style="margin:200px">
	<div class="container"> 
		<div class="row">
			<div class="col-md-9 colQuestion">
				<form   action="{{ route('test.result') }}" id="fulltest_part_head" method="GET" data-part="part5">
					<input type="hidden" value="part5" name="part"/>
					<div class="question fullest_page_{{ $dem+1 }} part5_{{ $dem+1 }}" data-page="1"  data-id="{{ $part5s->get(0)->id }}" data-part="part5">
							<div class="text-center script_answer_{{ $dem+1 }}" style="backgroud:red; display: none">
								<p>{{ $part5s->get(0)->script_answer }}/p>   
								</div>
								<p>Question {{ $dem+1 }}: {{ $part5s->get(0)->question }}</p>
								<ol id="que" type="A"  >
									<li>
										<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5s->get(0)->id }}" name="answer[{{ $dem }}]" value="{{ $part5s->get(0)->id }}" class="sg-replace-icons radio_answer_a{{ $dem+1 }}">
										<label for="">
											{{ $part5s->get(0)->optionA }}
										</label>
									</li>
									<li>
										<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5s->get(0)->id }}" name="answer[{{ $dem }}]" value="{{ $part5s->get(0)->id }}" class="sg-replace-icons radio_answer_b{{ $dem+1 }}"> 
										<label>
											{{ $part5s->get(0)->optionB }}
										</label>
									</li>
									<li>
										<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5s->get(0)->id }}" name="answer[{{ $dem }}]" value="{{ $part5s->get(0)->id }}" class="sg-replace-icons radio_answer_c{{ $dem+1 }}"> 
										<label> {{ $part5s->get(0)->optionC }}
										</label>
									</li>
									<li>
										<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5s->get(0)->id }}" name="answer[{{ $dem }}]" value="{{ $part5s->get(0)->id }}" class="sg-replace-icons radio_answer_d{{ $dem+1 }}"> 
										<label> {{ $part5s->get(0)->optionD }}
										</label>
									</li>
								</ol>
							</div> 
							<?php
							for ($idx = 1; $idx < count($part5s); $idx++) {
								$part5  = $part5s->get($idx);
								$dem++;
								?>
								<div  style="display:none" class="question fullest_page_{{ $dem+1 }} part5_{{ $dem+1 }}" data-page="{{ $dem+1 }}"   data-part="part5" data-id="{{ $part5->id }}">
										<div class="text-center script_answer_{{ $dem+1 }} " style="backgroud:red; display: none">
											<p>{!! $part5->script_answer !!}</p>   
										</div>
										<p>Question{{ $dem+1 }}: {{ $part5->question }} </p>
										<ol id="que" type="A"  >
											<li>
												<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5->id }}" name="answer[{{ $dem }}]" value="{{ $part5->id }}" class="sg-replace-icons radio_answer_a{{ $dem+1 }}">
												<label for=""> {{ $part5->optionA }} </label>
											</li>
											<li>
												<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5->id }}" name="answer[{{ $dem }}]" value="{{ $part5->id }}" class="sg-replace-icons radio_answer_b{{ $dem+1 }}"> 
												<label> {{ $part5->optionB }}
												</label>
											</li>
											<li>
												<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5->id }}" name="answer[{{ $dem }}]" value="{{ $part5->id }}" class="sg-replace-icons radio_answer_c{{ $dem+1 }}"> 
												<label> {{ $part5->optionC }}
												</label>
											</li>
											<li>
												<input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part5->id }}" name="answer[{{ $dem }}]" value="{{ $part5->id }}" class="sg-replace-icons radio_answer_d{{ $dem+1 }}"> 
												<label> {{ $part5->optionD }}
												</label>
											</li>
										</ol>
									</div>
									<?php } ?>
									<div class="pageing" id="fulltest_page" data-page="1" data-limit="{{ $dem-1 }}" >
										<div class="text-center">
											<input type="button" class="btn btn-default submitagain1 btn-again "  value="Again"   style="display: none">  
											<input type="button" class="btn btn-default submitScript1 btn-script "  value="Script Answer"  style="display: none">  
											<input type="button" class="btn btn-default"  value="Scope" id="submitTest">
											<a class="btn btn-success change_page change_page_back" data-type="-1" style="display: none">Back</a>
											<a data-type="1" class="change_page_next change_page btn btn-danger">Next </a>
										</div>
									</div>
								</form>
							</div>
							<div class="left col-md-3">
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
										<a href="{{ route('contest.reading.part5') }}">TOEIC TEST PART 1</a>
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
<script>
	$(document).ready(function(){
    //change page in score
    $("#fulltest_page").find(".change_page").bind("click",function(e){
        e.preventDefault();
        var page = $("#fulltest_page").data("page"); 
        var type = $(this).data("type");
        var btnScriptNow = "submitScript"+(page-type);
        var btnAgainNow = "submitagain"+(page-type);
        var btnAgain = "submitagain"+page;
        var btnScript = "submitScript"+page;
        $('.btn-again').removeClass(btnAgainNow);
        $('.btn-again').addClass(btnAgain);
        $('.'+btnAgain).hide();
        $('.btn-script').removeClass(btnScriptNow);
        $('.btn-script').addClass(btnScript);
        $('.btn-script').hide();
        
    });

    //submit score
    $(document).on('click', '#submitTest', function(e){
        e.preventDefault();
        var part = $('#fulltest_part_head').data("part");
        var page = $('#fulltest_page').data("page");
        var id = $(".fullest_page_"+page).data("id");
        var media = "media_"+id;
        if (part == "part1" || part == "part2" || part == "part5") {
            if ($(".fullest_page_"+page).find("input:radio").is(':checked')){
                var idQuestion = $(".fullest_page_"+page).find("input:radio").val();
                $(".fullest_page_"+page).find("input[type=radio]:checked").addClass("false");
                $.ajax({
                    type: "GET",
                    url: $('#fulltest_part_head').attr('action'),
                    data: {part: part, id: idQuestion},
                    dataType: 'JSON',
                    success: function(data){
                        var radio_answer = "radio_answer_"+data['answer']+page;
                        radio_answer = radio_answer.toLowerCase();
                        $('.'+radio_answer).removeClass("false");
                        $('.'+radio_answer).addClass("true");
                        // console.log(data['answer']);
                    }
                });
            $('.fullest_page_'+page).find(".submitagain").show();
            $("#fulltest_page").find('.submitagain'+page).show();
            $("#fulltest_page").find('.submitScript'+page).show();
            } else {
                alert("Answer is empty....");
                return false;
            } 
        } else {
            if ($("."+media).find("input:radio").is(':checked')){
                $("."+media).find("input[type=radio]:checked").addClass("false");
                $.ajax({
                    type: "GET",
                    url: $('#fulltest_part_head').attr('action'),
                    data: {part: part, id: id},
                    dataType: 'JSON',
                    success: function(data){

                        $.each(data, function(key, value){
                            var radio_answer = "radio_answer_"+value+id;
                            radio_answer = radio_answer.toLowerCase();
                            $('.'+radio_answer).removeClass("false");
                            $('.'+radio_answer).addClass("true");
                        });
                    }
                });
                $('.fullest_page_'+page).find(".submitagain").show();
                $("#fulltest_page").find('.submitagain'+page).show();
                $("#fulltest_page").find('.submitScript'+page).show();
            } else {
                alert("Answer is empty....");
                return false;
            } 
        }
    });

    //again
    $(document).on('click', '.btn-again', function(e){
        e.preventDefault();
        var page = $('#fulltest_page').data("page");
        var id = $(".fullest_page_"+page).data("id");
        $(".fullest_page_"+page).find("input[type=radio]").removeClass("false");
        $(".fullest_page_"+page).find("input[type=radio]").removeClass("true");
        var media = "media_"+id;
        $("."+media).find("input[type=radio]").removeClass("false");
        $("."+media).find("input[type=radio]").removeClass("true");
        $('.script_answer_'+page).hide();
        $('.submitScript'+page).hide();
        $(this).hide();
    });

    //script-answer
    $(document).on('click', '.btn-script', function(e){
        e.preventDefault();
        var page = $('#fulltest_page').data("page");
        $('.script_answer_'+page).show();
        $(this).hide();
    });
});

</script>
@endsection