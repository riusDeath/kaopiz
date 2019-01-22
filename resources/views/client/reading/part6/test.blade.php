@extends('client.listening.layouts.master')
@section('title', 'contest')
@section('test-content')
<?php 
$dem = 0;
$index = $dem;
?>
<form method="post" id="fulltest_part_head" action="{{ route('test.result') }}" data-part="part6">
    <input type="hidden" value="part6" name="part"/>
    <div  data-media="media_{{ $passages->get(0)->id }}"  class="question fullest_page_{{ $index+1 }} part6_{{ $passages->get(0)->id }}" data-page="{{ $index+1 }}"  data-id="{{ $passages->get(0)->id }}" data-part="part6">
        <div class="text-center" >
            <p>{{ $passages->get(0)->content }}</p>
        </div>
    </div>
    <?php 
        foreach ($part6s[0] as $part6){
        ?>
        <div  class="question  media_{{ $part6->passage_id }}" data-page="{{ $dem+1 }}"   data-part="3">
            <p>Question: {{ $dem+1 }} </p>
             <ol id="que" type="A"  >
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="A" class="sg-replace-icons radio_answer_a{{ $part6->id }}{{ $part6->passage_id }}">
                    <label for="">{{ $part6->optionA }}</label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="B" class="sg-replace-icons radio_answer_b{{ $part6->id }}{{ $part6->passage_id }}"> 
                    <label>{{ $part6->optionB }}
                    </label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="C" class="sg-replace-icons radio_answer_c{{ $part6->passage_id }}"> 
                    <label>{{ $part6->optionC }}
                    </label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="D" class="sg-replace-icons radio_answer_d{{ $part6->id }}{{ $part6->passage_id }}"> 
                    <label>{{ $part6->optionD }}
                    </label>
                </li>
            </ol> 
        </div>
        <?php $dem++; } ?> 
    <?php
    for ($i = 1; $i < count($passages); $i++) {
        $media = $passages->get($i);
        $index++;
    ?>
    <div  data-media="media_{{ $media->id }} " style="display:none" class="question fullest_page_{{ $index+1 }} part6_{{ $media->id }}" data-page="{{ $index+1 }}"  data-id="{{ $media->id }}" data-part="part6">
        <div class="text-center" >
            <p>{{ $media->content }}</p>
        </div>
    </div>
    <?php } ?>
    <?php
    for ($idx = 1; $idx < count($part6s); $idx++) {
        foreach ($part6s[$idx] as $part6) {
            $dem++;
    ?>
    <div  style="display:none" class="question  media_{{ $part6->passage_id }}" data-page="{{ $dem+1 }}"  data-part="3">
        <p>Question: {{ $dem+1 }} </p>
        <ol id="que" type="A"  >
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="A" class="sg-replace-icons radio_answer_a{{ $part6->id }}{{ $part6->passage_id }}">
                <label for="">{{ $part6->optionA }}</label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="B" class="sg-replace-icons radio_answer_b{{ $part6->id }}{{ $part6->passage_id }}"> 
                <label>{{ $part6->optionB }}
                </label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="C" class="sg-replace-icons radio_answer_c{{ $part6->id }}{{ $part6->passage_id }}"> 
                <label>{{ $part6->optionC }}
                </label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part6->id }}" name="answer[{{ $dem }}]" value="D" class="sg-replace-icons radio_answer_d{{ $part6->id }}{{ $part6->passage_id }}"> 
                <label>{{ $part6->optionD }}
                </label>
            </li>
        </ol>
    </div>
    <?php } }?>
    <div class="pageing" id="fulltest_page" data-page="1" data-limit="{{ $index+1 }}" >
        <div class="text-center">
            <input type="button" class="btn btn-default submitagain1 btn-again "  value="Again"   style="display: none">  
            <input type="button" class="btn btn-default"  value="Scope" id="submitTest">
            <a class="btn btn-success change_page change_page_back" data-type="-1" style="display: none">Back</a>
            <a data-type="1" class="change_page_next change_page btn btn-danger">Next </a>
        </div>
    </div>
</form> 
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
                        console.log(data['answer']);
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
                        console.log(data);
                        $.each(data['answers'], function(key, value){
                            var radio_answer = "radio_answer_"+value+id;
                            console.log(radio_answer);
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