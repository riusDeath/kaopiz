@extends('layouts.master')
@section('title', 'full test')
@section('style')
<link rel="stylesheet" href="assets/css/contest.css">
<link rel="stylesheet" href="assets/css/radio.css">       
<link rel="stylesheet" href="assets/css/test.css">     
<link rel="stylesheet" href="assets/css/answersheet.css"> 
@endsection
@section('content')

<?php 
$dem = 0; 
?>
<section class="how-it-works red-bg ptb-100">
<div class="container">
        <div class="col-md-8">
        <div class="panel-body" id="check">
            <label for="">Practice Full TEST TOEIC Reading, Listening </label>
            <form data-testid=""  action="" id="fulltest_part_head" method="post" >
                <input type="hidden" name="test_id" value="{{ $model->id }}" >
                    
                <div class="col-md-1.2 btn  btn-warning action part part1" data-part="part1" data-start="1" >Part 1</div>
                <div class="col-md-1.2 btn  btn-warning part part2" data-part="part2" data-start="{{ count($model->part1)+1 }}" >Part 2</div>
                <div class="col-md-1.2 btn  btn-warning part part3" data-part="part3" data-start="{{ count($model->part1)+count($model->part2)+1 }}" >Part 3</div>
                <div class="col-md-1.2 btn  btn-warning part part4" data-part="part4" data-start="{{ count($model->part1)+count($model->part2)+count($model->part3)+1 }}" >Part 4</div>
                <div class="col-md-1.2 btn btn-warning part part5" data-part="part5" data-start="{{ count($model->part1)+count($model->part2)+count($model->part3)+count($model->part4)+1 }}" >Part 5</div>
                <div class="col-md-1.2 btn  btn-warning part part6" data-part="part6" data-start="{{ count($model->part1)+count($model->part2)+count($model->part3)+count($model->part4)+count($model->part5)+1 }}" >Part 6</div>
                <div class="col-md-1.2 btn  btn-warning part part7" data-part="part7" data-start="{{ count($model->part1)+count($model->part2)+count($model->part3)+count($model->part4)+count($model->part5)+count($model->part6)+1 }}" >Part 7</div>
                <div class="alert">
                        Look at the picture and listen to the sentences. Choose the sentence that best describes the picture:
                </div>

                <div id="fulltest_content">
                    <div class="question fullest_page_{{ $dem+1 }} part1_{{ $dem+1 }}" data-page="1"  id="test_question_{{ $model->part1->get(0)->id }}" data-part="part1">
                        <div class="text-center" >
                            <img src="images/{{ $model->part1->get(0)->picture }}" alt="" width="400px">
                            <audio controls>
                                <source src="medias/{{ $model->part1->get(0)->media->mediaFile }}" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $dem+1 }}" style="backgroud:red; display: none">
                            <pre>{{ $model->part1->get(0)->media->script_answer }}</pre>   
                        </div>
                        <p>Question: {{ $dem+1 }}</p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get(0)->id }}" name="answer[{{ $model->part1->get(0)->id }}][0]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get(0)->id }}" name="answer[{{ $model->part1->get(0)->id }}][0]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get(0)->id }}" name="answer[{{ $model->part1->get(0)->id }}][0]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get(0)->id }}" name="answer[{{ $model->part1->get(0)->id }}][0]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                        </ol>
                    </div> 
                    <?php 
                        for ($idx = 1; $idx < count($model->part1); $idx++)  {
                            $dem++;
                    ?>
                    <div  style="display:none" class="question fullest_page_{{ $dem+1 }} part1_{{ $dem+1 }}" data-page="{{ $dem+1 }}"  id="test_question_{{ $model->part1->get($idx)->id }}" data-part="part1">
                        <div class="text-center" >
                            <img src="images/{{ $model->part1->get($idx)->picture }}" alt="" width="400px">
                            <audio controls>
                                <source src="medias/{{ $model->part1->get($idx)->media->mediaFile }}" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $dem+1 }}  " style="backgroud:red; display: none">
                            <pre>{{ $model->part1->get($idx)->media->script_answer }}</pre>   
                        </div>
                        <p>Question: {{ $dem+1 }}</p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get($idx)->id }}" name="answer[{{ $model->part1->get($idx)->id }}][0]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get($idx)->id }}" name="answer[{{ $model->part1->get($idx)->id }}][0]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get($idx)->id }}" name="answer[{{ $model->part1->get($idx)->id }}][0]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $model->part1->get($idx)->id }}" name="answer[{{ $model->part1->get($idx)->id }}][0]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                        </ol>
                    </div>
                    <?php } ?>
  <!--------------------------------------------------------------------->
                    <?php 
                        foreach($model->part2 as $p) {
                            $dem++;
                    ?>
                    <div  style="display:none" class="question fullest_page_{{ $dem+1 }} part2_{{ $dem+1 }}" data-page="{{ $dem+1 }}"  id="test_question_{{ $p->id }}" data-part="part2">
                        <div class="text-center" >
                            <audio controls>
                                <source src="medias/{{ $p->media->mediaFile }}" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $dem+1 }}" style="backgroud:red; display: none">
                            <pre>{{ $p->media->script_answer }}</pre>   
                        </div>    
                        <p>Question: {{ $dem+1 }}</p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio"  data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][1]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][1]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][1]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                        </ol>
                    </div>
                    <?php } ?>

 <!--------------------------------------------------------------------->
               
                    <?php 
                        $index = $dem;
                        foreach ($model->listMediaPart3() as $media) {
                            $index++;
                    ?>
                    <div  data-media="media_{{ $media->id }}" style="display:none" class="question fullest_page_{{ $index+1 }} part3_{{ $media->id }}" data-page="{{ $index+1 }}"  id="test_question_{{ $media->id }}" data-part="part3">
                        <div class="text-center" >
                            <audio controls>
                                <source src="/medias/{{ $media->mediaFile }}" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $index+1 }}" style="backgroud:red; display: none">
                            <pre>{{ $media->script_answer }}</pre>   
                        </div>
                    </div>
                    <?php }
                        foreach ($model->part3 as $part3) {
                           $dem++;
                    ?>
                    <div  style="display:none" class="question  media_{{ $part3->media_id }}" data-page="<%=dem+1%>"  id="test_question_{{ $part3->id }}" data-part="3">
                        <p>Question: {{ $dem+1 }} <strong>{{ $part3->question }}</strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $part3->id }}][2]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""> {{ $part3->optionA }}</label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $part3->id }}][2]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label> {{ $part3->optionB }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $part3->id }}][2]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label> {{ $part3->optionC }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part3->id }}" name="answer[{{ $part3->id }}][2]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label> {{ $part3->optionD }}
                                </label>
                            </li>
                        </ol>
                    </div>
                    <?php } ?>
 <!--------------------------------------------------------------------->
                   {{--  <?php 
                        foreach ($model->listMediaPart4() as $media) {
                            $index++;
                    ?>
                    <div  data-media="media_{{ $media->id }}" style="display:none" class="question fullest_page_{{ $index+1 }} part4_{{ $media->id }}" data-page="{{ $index+1 }}"  id="test_question_{{ $media->id }}" data-part="part4">
                        <div class="text-center" >
                            <audio controls>
                                <source src="medias/{{ $media->mediaFile }}" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $dem+1 }}" style="backgroud:red; display: none">
                            <pre>{{ $media->script_answer }}</pre>   
                        </div>
                    </div>
                    <?php } ?>
                   
                    <?php 
                        foreach($model->part4 as $part4){
                            $dem++;
                    ?>
                    <div  style="display:none" class="question  media_{{ $part4->media_id }}" data-page="{{ $dem+1 }}"  id="test_question_{{ $part4->id }}" data-part="4">
                        <p>Question: {{ $dem+1 }} <strong>{{ $part4->question }}</strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part4->id }}" name="answer[{{ $part4->id }}][3]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""> {{ $part4->optionA }}</label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part4->id }}" name="answer[{{ $part4->id }}][3]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label> {{ $part4->optionB }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="{{ $part4->id }}" name="answer[{{ $part4->id }}][3]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>  {{ $part4->optionC }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-part="1" data-cau="{{ $dem+1 }}"  data-question="{{ $part4->id }}" name="answer[{{ $part4->id }}][3]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label> {{ $part4->optionD }}
                                </label>
                            </li>
                        </ol>
                    </div>
                    <?php } ?>
 <!--------------------------------------------------------------------->
                    <?php 
                        foreach($model->part5 as $p) {
                            $dem++;
                            $index++;
                    ?>
                    <div  style="display:none" class="question fullest_page_{{ $index+1 }} part5_{{ $dem+1 }}" data-page="{{ $index+1 }}"  id="test_question_{{ $p->id }}" data-part="part5">
                        <p>Question: {{ $dem+1 }} <strong>{{ $p->question }}</strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="5" data-cau="{{ $index++ }}" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][4]" value="A" class="sg-replace-icons radio_answer_read_a{{ $dem+1 }}">
                                <label for="">{{ $p->optionA }}</label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}"  data-part="5"data-cau="{{ $index++ }}" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][4]" value="B" class="sg-replace-icons radio_answer_read_b{{ $dem+1 }}"> 
                                <label>{{ $p->optionB }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="5" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][4]" value="C" class="sg-replace-icons radio_answer_read_c{{ $dem+1 }}"> 
                                <label>{{ $p->optionC }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="5" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][4]" value="D" class="sg-replace-icons radio_answer_read_d{{ $dem+1 }}"> 
                                <label>{{ $p->optionD }}
                                </label>
                            </li>
                        </ol>
                        <div class="text-center script_answer_{{ $index+1 }} " style="backgroud:red; display: none">
                            <pre>{{ $p->script_answer }}</pre>   
                        </div>
                    </div>
                    <?php } ?>
<!-------------------------------------------------------------------------------------->     
                    <?php 
                        foreach ($model->listPassagePart6() as $passage) {
                           $index++;
                    ?>
                    <div  data-media="Pass_{{ $passage->id }}" style="display:none" class="question fullest_page_{{ $index+1 }} part6_{{ $passage->id }}" data-page="{{ $index+1 }}"  id="test_question_{{ $passage->id }}" data-part="part6">
                        <div class="text-center" style="padding:30px; background: #a6e1ec; font-size: 16px; margin-bottom: 10px">
                            {{ $passage->content }}
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php 
                        foreach ($model->part6 as $p) {
                           $dem++;
                    ?>
                    <div  style="display:none" class="question  Pass_{{ $p->passage_id }}" data-page="{{ $dem+1 }}"  id="test_question_{{ $p->id }}" data-part="part6">
                        <p>Question: {{ $dem+1 }} </p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][5]" value="A" class="sg-replace-icons radio_answer_read_a{{ $dem+1 }}">
                                <label for=""> {{ $p->optionA }}</label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][5]" value="B" class="sg-replace-icons radio_answer_read_b{{ $dem+1 }}"> 
                                <label> {{ $p->optionB }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][5]" value="C" class="sg-replace-icons radio_answer_read_c{{ $dem+1 }}"> 
                                <label>  {{ $p->optionC }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][5]" value="D" class="sg-replace-icons radio_answer_read_d{{ $dem+1 }}"> 
                                <label> {{ $p->optionD }}
                                </label>
                            </li>
                        </ol>
                    </div>
                    <?php } ?>
                    
<!-------------------------------------------------------------------------------------->     
                    <?php 
                        foreach ($model->listPassagePart7() as $passage) {
                           $index++;
                    ?>
                    <div  data-media="Pass_{{ $passage->id }}" style="display:none" class="question fullest_page_{{ $index++ }} part7_{{ $passage->id }}" data-page="{{ $index++ }}"  id="test_question_{{ $passage->id }}" data-part="part7">
                        <div class="text-center" style="padding:30px; background: #a6e1ec; font-size: 16px; margin-bottom: 10px">
                            {{ $passage->content }}
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php 
                        foreach ($model->part7 as $p) {
                           $dem++;
                    ?>
                    <div  style="display:none" class="question  Pass_{{ $p->passage_id }}" data-page="{{ $dem+1 }}"  id="test_question_{{ $p->id }}" data-part="part7">
                        <p>Question: {{ $dem+1 }} <strong>{{ $p->question }}</strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][6]" value="A" class="sg-replace-icons radio_answer_read_a{{ $dem+1 }}">
                                <label for=""> {{ $p->optionA }}</label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][6]" value="B" class="sg-replace-icons radio_answer_read_b{{ $dem+1 }}"> 
                                <label> {{ $p->optionB }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][6]" value="C" class="sg-replace-icons radio_answer_read_c{{ $dem+1 }}"> 
                                <label>  {{ $p->optionC }}
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="{{ $p->id }}" name="answer[{{ $p->id }}][6]" value="D" class="sg-replace-icons radio_answer_read_d{{ $dem+1 }}"> 
                                <label> {{ $p->optionD }}
                                </label>
                            </li>
                        </ol>
                    </div>
                    <?php } ?>
                    
<!---------------------------------------------------------------->
                    </div>
                     --}}
</div>                
                <div class="pageing" id="fulltest_page" data-page="1" data-limit="{{ $dem }}" >
                    <div>Score:0/0 <input type="button" class="btn btn-default " id="btn-script-answer" value="Script" style="display: none"></div>
                    <div class="script-answer"></div>
                    <div class="text-center">
                        
                        <a class="btn btn-success change_page change_page_back" data-type="-1" style="display: none">Back</a>
                        <input type="button" value="Scope" id="submitTest" class="stop">
                        <a data-type="1" class="change_page_next change_page btn btn-danger">Next </a>
                    </div>
                </div>
            </form>
    </div>
    <div class="box_ketqua" id="test_ketqua" style="position: absolute; left: 15px; right: 15px; margin: 10px;">
       <div class="head">
            <div class="clockmob">
                        <input type="hidden" value="7200" id="timeStart">
                        <h3 style="color:#000000" align="center">
                            <span id='timer'></span>
                        </h3>
            </div>
                <!--<input type="button" value="stop" class="stop btn btn-danger">-->
              
            <div class="clearfix"></div>
        </div>
        <div class="list" style="height: 557px;">
            
            <div class="scrollbar-inner" id="fulltest_question_shortcut">
                <?php 
                    $i = 0;
                    foreach ($model->part1 as $part) {
                        $i++;
                ?>
                <div class="cau cau_{{ $i }}" data-iquestion="part1_{{ $i }}" data-page="{{ $i }}" data-question="{{ $part->id }}">
                    <a href="javascript:void(0)">{{ $i }}</a>
                </div>
                <?php } ?>
                
                <?php 
                    foreach ($model->part2 as $part) {
                        $i++;
                ?>
                <div class="cau cau_{{ $i }}" data-iquestion="part2_{{ $i }}" data-page="{{ $i }}" data-question="{{ $part->id }}">
                    <a href="javascript:void(0)">{{ $i }}</a>
                </div>
                <?php } ?>
                <?php 
                    foreach ($model->part3 as $part) {
                        $i++;
                ?>
                <div class="cau cau_{{ $i }}" data-iquestion="part3_{{ $part->media_id }}" data-page="{{ $i }}" data-question="{{ $part->id }}">
                    <a href="javascript:void(0)">{{ $i }}</a>
                </div>
                <?php } ?>
                
                <?php 
                    foreach ($model->part4 as $part) {
                        $i++;
                ?>
                <div class="cau cau_{{ $i }}" data-iquestion="part4_{{ $part->media_id }}" data-page="{{ $i }}" data-question="{{ $part->id }}">
                    <a href="javascript:void(0)">{{ $i }}</a>
                </div>
                <?php } ?>
                
                <?php 
                    foreach ($model->part5 as $part) {
                        $i++;
                ?>
                <div class="cau cau_{{ $i }}" data-iquestion="part5_{{ $i }}" data-page="{{ $i }}" data-question="{{ $part->id }}">
                    <a href="javascript:void(0)">{{ $i }}</a>
                </div>
                    <?php } ?>
                
                <?php 
                    foreach ($model->part6 as $part) {
                        $i++;
                ?>
                <div class="cau cau_{{ $i }}" data-iquestion="part6_{{ $part->passage_id }}" data-page="{{ $i }}" data-question="{{ $part->id }}">
                    <a href="javascript:void(0)">{{ $i }}</a>
                </div>
                <?php } ?>
                
                <?php 
                    foreach ($model->part7 as $part) {
                        $i++;
                ?>
                <div class="cau cau_{{ $i }}" data-iquestion="part7_{{ $part->passage_id }}" data-page="{{ $i }}" data-question="{{ $part->id }}">
                    <a href="javascript:void(0)">{{ $i }}</a>
                </div>
                <?php } ?>
            </div>      
        </div>
    </div>
</div>

 <div class="modal fade" id="modal-message" >
    <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
            </div>
        </div>
    </div>
</div>
       
</section>
        <!--<script src="<%=request.getContextPath()%>templates/js/time.js"></script>-->
<!--        <script src="<%=request.getContextPath()%>/templates/js/demNguoc.js"></script> 
        <script src="<%=request.getContextPath()%>/templates/js/resultTest.js"></script>-->

@endsection
@section('script')
<script src="assets/js/question_answer.js"></script>
<script>
    
    var c = localStorage.getItem("timer");
    if(c == null || c==0){
        c = $('#timeStart').val();
    }   
    var t;
    timedCount();

    function timedCount()
    {

        var hours = parseInt( c / 3600 ) % 24;
        var minutes = parseInt( c / 60 ) % 60;
        var seconds = c % 60;

        var result = (hours < 0 ? "0" + hours : hours) + ":" + (minutes <        10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);

        $('#timer').html(result);
        if(c == 0 )
        {
            window.localStorage.removeItem("timer");
            stop();
        var form = $('#fulltest_part_head');
    var total = $("input[type=radio]:checked").length;
    if (total == 0){
        alert("Answer is empty....");
        return false;
    }
        var id = form.data("testid");
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'JSON',
            success: function(data){
                $("input[type=radio]:checked").addClass("false");
                $('input[type=radio][name^="answer"]').attr('disabled', true);
                var dem = 0;
                console.log(data);
                var listen = 0;
                var read = 0;
                $('.cau').find("a").css("background-color", "#ff6666");
                $.each(data, function(key, value){
                    dem++;
                    var radio_answer_read = "radio_answer_read_"+value+dem;
                    var radio_answer_listen = "radio_answer_listen_"+value+dem;
                    radio_answer_read = radio_answer_read.toLowerCase();
                    radio_answer_listen = radio_answer_listen.toLowerCase();
                    $('.'+radio_answer_read).removeClass("false");
                    $('.'+radio_answer_read).addClass("true");
                    $('.'+radio_answer_listen).removeClass("false");
                    $('.'+radio_answer_listen).addClass("true");
                    if($('.'+radio_answer_read).is(':checked')){
                        read++;
                        $('.cau_'+dem).find("a").css("background-color", "#10e810");
                    }
                    if($('.'+radio_answer_listen).is(':checked')){
                        listen++;
                        $('.cau_'+dem).find("a").css("background-color", "#10e810");
                    }
                    $('.script_answer_'+dem).addClass('script_answer'+dem);
                    $('.script_answer_'+dem).addClass('script_answer');
                });
                var page = $('#fulltest_page').data("page");
                $('.fullest_page_'+page).find(".script_answer").show();
                var detail = '<table class="table table-striped table-hover"><thead><tr><th>Listening</th><th>Reading</th><th>Score</th></tr></thead><tbody><tr><td>'+listen*5+'</td><td>'+read*5+'</td><td>'+(listen*5+read*5)+'</td></tr></tbody></table>';
                $('.modal-header').html(detail);
                $('#modal-message').modal();
            }
        });
        }
        c = c - 1;
        localStorage.setItem("timer", c);
        t = setTimeout(function()
        {
            timedCount()
        },1000);

    }
    function stop(){
        window.localStorage.removeItem("timer");
        var result = "00" + ":" + "00" + ":" +"00";
        $('#timer').html(result);
        $('#timeStart').val(0);
        clearTimeout(t);
    }

$(document).ready(function(){
    $(document).on('click', '#submitTest', function(e){
        e.preventDefault();
        stop();
        var form = $('#fulltest_part_head');
    var total = $("input[type=radio]:checked").length;
    if (total == 0){
        alert("Answer is empty....");
        return false;
    }
        var id = form.data("testid");
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'JSON',
            success: function(data){
                $("input[type=radio]:checked").addClass("false");
                $('input[type=radio][name^="answer"]').attr('disabled', true);
                var dem = 0;
                console.log(data);
                var listen = 0;
                var read = 0;
                $('.cau').find("a").css("background-color", "#ff6666");
                $.each(data, function(key, value){
                    dem++;
                    var radio_answer_read = "radio_answer_read_"+value+dem;
                    var radio_answer_listen = "radio_answer_listen_"+value+dem;
                    radio_answer_read = radio_answer_read.toLowerCase();
                    radio_answer_listen = radio_answer_listen.toLowerCase();
                    $('.'+radio_answer_read).removeClass("false");
                    $('.'+radio_answer_read).addClass("true");
                    $('.'+radio_answer_listen).removeClass("false");
                    $('.'+radio_answer_listen).addClass("true");
                    if($('.'+radio_answer_read).is(':checked')){
                        read++;
                        $('.cau_'+dem).find("a").css("background-color", "#10e810");
                    }
                    if($('.'+radio_answer_listen).is(':checked')){
                        listen++;
                        $('.cau_'+dem).find("a").css("background-color", "#10e810");
                    }
                    $('.script_answer_'+dem).addClass('script_answer'+dem);
                    $('.script_answer_'+dem).addClass('script_answer');
                });
                var page = $('#fulltest_page').data("page");
                $('.fullest_page_'+page).find(".script_answer").show();
                var detail = '<table class="table table-striped table-hover"><thead><tr><th>Listening</th><th>Reading</th><th>Score</th></tr></thead><tbody><tr><td>'+listen*5+'</td><td>'+read*5+'</td><td>'+(listen*5+read*5)+'</td></tr></tbody></table>';
                $('.modal-header').html(detail);
                $('#modal-message').modal();
            }
        });
    });
});


</script>
@endsection
