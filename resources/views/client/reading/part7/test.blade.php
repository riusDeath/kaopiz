@extends('client.listening.layouts.master')
@section('title', 'contest')
@section('test-content')
<?php 
$dem = 0;
$index = $dem;
?>
<form method="post" id="fulltest_part_head" action="#" data-part="part7">
    <input type="hidden" value="part7" name="part"/>
    <div  data-media="media_{{ $passages->get(0)->id }}"  class="question fullest_page_{{ $index+1 }} part7_{{ $passages->get(0)->id }}" data-page="{{ $index+1 }}"  data-id="{{ $passages->get(0)->id }}" data-part="part7">
        <div class="text-center" >
            {{ $passages->get(0)->content }}
        </div>
    </div>
    <?php 
        foreach ($part7s[0] as $part7){
        ?>
        <div  class="question  media_{{ $part7->passage_id }}" data-page="{{ $dem+1 }}"   data-part="3">
            <p>Question {{ $dem+1 }}: <strong>{{ $part7->question }}</strong></p>
             <ol id="que" type="A"  >
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_a{{ $part7->id }}{{ $part7->passage_id }}">
                    <label for="">{{ $part7->optionA }}</label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_b{{ $part7->id }}{{ $part7->passage_id }}"> 
                    <label>{{ $part7->optionB }}
                    </label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_c{{ $part7->passage_id }}"> 
                    <label>{{ $part7->optionC }}
                    </label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_d{{ $part7->id }}{{ $part7->passage_id }}"> 
                    <label>{{ $part7->optionD }}
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
    <div  data-media="media_{{ $media->id }} " style="display:none" class="question fullest_page_{{ $index+1 }} part7_{{ $media->id }}" data-page="{{ $index+1 }}"  data-id="{{ $media->id }}" data-part="part7">
        <div class="text-center" >
            {{ $media->content }}
        </div>
    </div>
    <?php } ?>
    <?php
    for ($idx = 1; $idx < count($part7s); $idx++) {
        foreach ($part7s[$idx] as $part7) {
            $dem++;
    ?>
    <div  style="display:none" class="question  media_{{ $part7->passage_id }}" data-page="{{ $dem+1 }}"  data-part="3">
        <p>Question{{ $dem+1 }}:  <strong>{{ $part7->question }}</strong></p>
        <ol id="que" type="A"  >
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_a{{ $part7->id }}{{ $part7->passage_id }}">
                <label for="">{{ $part7->optionA }}</label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_b{{ $part7->id }}{{ $part7->passage_id }}"> 
                <label>{{ $part7->optionB }}
                </label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_c{{ $part7->id }}{{ $part7->passage_id }}"> 
                <label>{{ $part7->optionC }}
                </label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part7->id }}" name="answer[{{ $dem }}]" value="{{ $part7->id }}" class="sg-replace-icons radio_answer_d{{ $part7->id }}{{ $part7->passage_id }}"> 
                <label>{{ $part7->optionD }}
                </label>
            </li>
        </ol>
    </div>
    <?php } }?>
    <div class="pageing" id="fulltest_page" data-page="1" data-limit="{{ $index+1 }}" >
        <div class="text-center">
            <input type="button" class="btn btn-default submitagain1 btn-again "  value="Again"   style="display: none">  
            <input type="button" class="btn btn-default submitScript1 btn-script "  value="Script Answer"  style="display: none">  
            <input type="button" class="btn btn-default"  value="Scope" id="submitTest">
            <a class="btn btn-success change_page change_page_back" data-type="-1" style="display: none">Back</a>
            <a data-type="1" class="change_page_next change_page btn btn-danger">Next </a>
        </div>
    </div>
</form> 
@endsection
@section('script')
<script src="assets/js/question_answer.js"></script>
@endsection