@extends('client.listening.layouts.master')
@section('title', 'contest')
@section('test-content')
<?php 
$dem = 0;
$index = $dem;
?>
<form method="post" id="fulltest_part_head" action="#" data-part="part3">
    <input type="hidden" value="part3" name="part"/>
    <div  data-media="media_{{ $medias->get(0)->id }}"  class="question fullest_page_{{ $index+1 }} part3_{{ $medias->get(0)->id }}" data-page="{{ $index+1 }}"  data-id="{{ $medias->get(0)->id }}" data-part="part3">
        <div class="text-center col-md-12" >
            <audio controls>
                <source src="medias/{{ $medias->get(0)->mediaFile }}" type="audio/mpeg">
                </audio>
            <div class="text-center script_answer_{{ $index+1 }}" style="backgroud:red; display: none">
                <p>{!! $medias->get(0)->script_answer !!}</p>   
            </div>
        </div>
        <?php 
        foreach ($part3s[0] as $part3){
        ?>
        <div  class="question  media_{{ $part3->id }}" data-page="{{ $dem+1 }}"   data-part="3">
            <p>Question: {{ $dem+1 }} <strong>{{ $part3->question }}</strong></p>
             <ol id="que" type="A"  >
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_a{{ $part3->id }}{{ $part3->media_id }}">
                    <label for="">{{ $part3->optionA }}</label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_b{{ $part3->id }}{{ $part3->media_id }}"> 
                    <label>{{ $part3->optionB }}
                    </label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_c{{ $part3->media_id }}"> 
                    <label>{{ $part3->optionC }}
                    </label>
                </li>
                <li>
                    <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_d{{ $part3->id }}{{ $part3->media_id }}"> 
                    <label>{{ $part3->optionD }}
                    </label>
                </li>
            </ol> 
        </div>
    </div>
    <?php $dem++; } ?> 
    <?php
    for ($i = 1; $i < count($medias); $i++) {
        $media = $medias->get($i);
        $index++;
    ?>
    <div  data-media="media_{{ $media->id }} " style="display:none" class="question fullest_page_{{ $index+1 }} part3_{{ $media->id }}" data-page="{{ $index+1 }}"  data-id="{{ $media->id }}" data-part="part3">
        <div class="text-center col-md-12" >
            <audio controls>
                <source src="medias/{{ $media->mediaFile }}" type="audio/mpeg">
            </audio>
            <div class="text-center script_answer_{{ $index+1 }}" style="backgroud:red; display: none">
                <p>{{ $media->script_answer }}</p>   
            </div>
        </div>
    </div>
    <?php } ?>
    <?php
    for ($idx = 1; $idx < 5; $idx++) {
        foreach ($part3s[$idx] as $part3) {
            $dem++;
    ?>
    <div  style="display:none" class="question  media_{{ $part3->media_id }}" data-page="{{ $dem+1 }}"  data-part="3">
        <p>Question: {{ $dem+1 }} <strong>{{ $part3->question }}</strong></p>
        <ol id="que" type="A"  >
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_a{{ $part3->id }}{{ $part3->media_id }}">
                <label for="">{{ $part3->optionA }}</label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_b{{ $part3->id }}{{ $part3->media_id }}"> 
                <label>{{ $part3->optionB }}
                </label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_c{{ $part3->id }}{{ $part3->media_id }}"> 
                <label>{{ $part3->optionC }}
                </label>
            </li>
            <li>
                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $dem }}]" value="{{ $part3->id }}" class="sg-replace-icons radio_answer_d{{ $part3->id }}{{ $part3->media_id }}"> 
                <label>{{ $part3->optionD }}
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