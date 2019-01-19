@extends('layouts.master')
@section('title', 'full test')
@section('style')
<link rel="stylesheet" href="assets/css/contest.css">
<link rel="stylesheet" href="assets/css/radio.css">       
<link rel="stylesheet" href="assets/css/test.css">     
<link rel="stylesheet" href="assets/css/answersheet.css"> 
@endsection
@section('content')

<title>TOEIC- TEST</title>
           
<%
    ArrayList<Part1> listPart1 = (ArrayList<Part1>) request.getAttribute("part1"); 
    ArrayList<Part2> listPart2 = (ArrayList<Part2>) request.getAttribute("part2"); 
    ArrayList<Part3_4> listPart3 = (ArrayList<Part3_4>) request.getAttribute("part3"); 
    ArrayList<Part3_4> listPart4 = (ArrayList<Part3_4>) request.getAttribute("part4"); 
    ArrayList<Part6> listPart6 = (ArrayList<Part6>) request.getAttribute("part6"); 
    ArrayList<Part5> listPart5 = (ArrayList<Part5>) request.getAttribute("part5"); 

    ArrayList<Part7> listPart7 = (ArrayList<Part7>) request.getAttribute("part7"); 
    ArrayList<mediaforlisten> listMediaPart3 = (ArrayList<mediaforlisten>) request.getAttribute("listMediaPart3");
    ArrayList<mediaforlisten> listMediaPart4 = (ArrayList<mediaforlisten>) request.getAttribute("listMediaPart4");
    ArrayList<passages> getPassagesPart6 = (ArrayList<passages>) request.getAttribute("getPassagesPart6");
    ArrayList<passages> getPassagesPart7 = (ArrayList<passages>) request.getAttribute("getPassagesPart7");
    int size1 = listPart1.size();
    int size2 = listPart2.size();
    int size3 = listMediaPart3.size();
    int size4 = listMediaPart4.size();
    int size5 = listPart5.size();
    int size6 = getPassagesPart6.size();
    int size7 = getPassagesPart7.size();
    
    Part1 part1 = listPart1.get(0);
    int dem = 0;
%>
<?php 
$dem = 0; 
?>
<div class="main">
    <div class="container">
    <div class="col-md-8">
            <div class="panel-body" id="check">
                <label for="">Practice Full TEST TOEIC Reading, Listening </label>
                <form data-testid=""  action="" id="fulltest_part_head" method="post" >
                    <input type="hidden" name="test_id" value="{{ $model->id }}" >
                    
                    <div class="col-md-1.7 btn  btn-warning action part part1" data-part="part1" data-start="1" >Part 1</div>
                    <div class="col-md-1.7 btn  btn-warning part part2" data-part="part2" data-start="{{ count($model->test1)+1 }}" >Part 2</div>
                    <div class="col-md-1.7 btn  btn-warning part part3" data-part="part3" data-start="{{ count($model->test1)+count($model->test2)+1 }}" >Part 3</div>
                    <div class="col-md-1.7 btn  btn-warning part part4" data-part="part4" data-start="{{ count($model->test1)+count($model->test2)+count($model->test3)+1 }}" >Part 4</div>
                    <div class="col-md-1.7 btn btn-warning part part5" data-part="part5" data-start="{{ count($model->test1)+count($model->test2)+count($model->test3)+count($model->test4)+1 }}" >Part 5</div>
                    <div class="col-md-1.7 btn  btn-warning part part6" data-part="part6" data-start="{{ count($model->test1)+count($model->test2)+count($model->test3)+count($model->test4)+count($model->test5)+1 }}" >Part 6</div>
                    <div class="col-md-1.7 btn  btn-warning part part7" data-part="part7" data-start="{{ count($model->test1)+count($model->test2)+count($model->test3)+count($model->test4)+count($model->test5)+count($model->test6)+1 }}" >Part 7</div>
                    <div class="alert">
                        Look at the picture and listen to the sentences. Choose the sentence that best describes the picture:
                    </div>
                    <div id="fulltest_content">
                    <div class="question fullest_page_{{ $dem+1 }} part1_{{ $dem+1 }}" data-page="1"  id="test_question_{{ $model->part1->get(0)->id }}" data-part="part1">
                        <div class="text-center" >
                            <img src="{{ $model->part1->get(0)->picture }}" alt="" width="400px">
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
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=part1.getId()%>" name="answer[<%=part1.getId()%>][0]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=part1.getId()%>" name="answer[<%=part1.getId()%>][0]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=part1.getId()%>" name="answer[<%=part1.getId()%>][0]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=part1.getId()%>" name="answer[<%=part1.getId()%>][0]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                        </ol>
                    </div> 
                    @for($idx = 1; $idx < count($model->part1); $idx++)
                    <div  style="display:none" class="question fullest_page_{{ $dem+1 }} part1_{{ $dem+1 }}" data-page="{{ $dem+1 }}"  id="test_question_{{ $model->part1->get($idx)->id }}" data-part="part1">
                        <div class="text-center" >
                            <img src="{{ $model->part1->get($idx)->picture }}" alt="" width="400px">
                            <audio controls>
                                <source src={{ $model->part1->get($idx)->media->mediaFile }}" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $dem+1 }}  " style="backgroud:red; display: none">
                            <pre>{{ $model->part1->get($idx)->media->script_answer }}</pre>   
                        </div>
                        <p>Question: {{ $dem+1 }}</p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p1.getId()%>" name="answer[<%=p1.getId()%>][0]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p1.getId()%>" name="answer[<%=p1.getId()%>][0]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p1.getId()%>" name="answer[<%=p1.getId()%>][0]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p1.getId()%>" name="answer[<%=p1.getId()%>][0]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                        </ol>
                    </div>
                    @endofreach
  <!--------------------------------------------------------------------->
                    @foreach($model->part2 as $p)
                    <div  style="display:none" class="question fullest_page_{{ $dem+1 }} part2_{{ $dem+1 }}" data-page="{{ $dem+1 }}"  id="test_question_<%=part1.getId()%>" data-part="part2">
                        <div class="text-center" >
                            <audio controls>
                                <source src="{{ $p->meida->mediaFile }}" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $dem+1 }}" style="backgroud:red; display: none">
                            <pre>{{ $p->meida->script_answer }}/pre>   
                        </div>    
                        <p>Question: {{ $dem+1 }}</p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio"  data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][1]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][1]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][1]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>
                                </label>
                            </li>
                        </ol>
                    </div>
                    @endforeach
 <!--------------------------------------------------------------------->
                    <%
                        int index = dem;
                        for (mediaforlisten media : listMediaPart3) {
                            index++;
                    %>
                    <?php 
                        $index = $dem;
                    ?>
                    <div  data-media="media_<%=media.getId()%> " style="display:none" class="question fullest_page_<%=index+1%> part3_<%=media.getId()%>" data-page="<%=index+1%>"  id="test_question_<%=media.getId()%>" data-part="part3">
                        <div class="text-center" >
                            <audio controls>
                                <source src="<%=request.getContextPath()%>/templates/uploads/<%=media.getMediaFile()%>" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_<%=index+1%>" style="backgroud:red; display: none">
                            <pre><%=media.getScript_answer()!=null?media.getScript_answer():""%></pre>   
                        </div>
                    </div>
                    @endforeach
                    <%
                        for (Part3_4 p : listPart3) {
                            dem++;
                    %>
                    <div  style="display:none" class="question  media_<%=p.getMedia_id()%>" data-page="{{ $dem+1 }}"  id="test_question_<%=part1.getId()%>" data-part="3">
                        <p>Question: {{ $dem+1 }} <strong><%=p.getQuestion()%><strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][2]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""> <%=p.getA()%></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][2]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label> <%=p.getB()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][2]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>  <%=p.getC()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][2]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label> <%=p.getD()%>
                                </label>
                            </li>
                        </ol>
                    </div>
                    <%}%>
 <!--------------------------------------------------------------------->
                    <%
                        for (mediaforlisten media : listMediaPart4) {
                            index++;
                    %>
                    <div  data-media="media_<%=media.getId()%> " style="display:none" class="question fullest_page_<%=index+1%> part4_<%=media.getId()%>" data-page="<%=index+1%>"  id="test_question_<%=media.getId()%>" data-part="part4">
                        <div class="text-center" >
                            <audio controls>
                                <source src="<%=request.getContextPath()%>/templates/uploads/<%=media.getMediaFile()%>" type="audio/mpeg">
                            </audio>
                        </div>
                        <div class="text-center script_answer_{{ $dem+1 }}" style="backgroud:red; display: none">
                            <pre><%=media.getScript_answer()!=null?media.getScript_answer():""%></pre>   
                        </div>
                    </div>
                    <%}%>
                    <%
                        for (Part3_4 p : listPart4) {
                            dem++;
                    %>
                    <div  style="display:none" class="question  media_<%=p.getMedia_id()%>" data-page="{{ $dem+1 }}"  id="test_question_<%=part1.getId()%>" data-part="4">
                        <p>Question: {{ $dem+1 }} <strong><%=p.getQuestion()%><strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][3]" value="A" class="sg-replace-icons radio_answer_listen_a{{ $dem+1 }}">
                                <label for=""> <%=p.getA()%></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][3]" value="B" class="sg-replace-icons radio_answer_listen_b{{ $dem+1 }}"> 
                                <label> <%=p.getB()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="1" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][3]" value="C" class="sg-replace-icons radio_answer_listen_c{{ $dem+1 }}"> 
                                <label>  <%=p.getC()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-part="1" data-cau="{{ $dem+1 }}"  data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][3]" value="D" class="sg-replace-icons radio_answer_listen_d{{ $dem+1 }}"> 
                                <label> <%=p.getD()%>
                                </label>
                            </li>
                        </ol>
                    </div>
                    <%}%>
 <!--------------------------------------------------------------------->
                    <% 
                        for (Part5 p : listPart5) {
                            dem++;
                            index++;
                    %>
                    <div  style="display:none" class="question fullest_page_<%=index+1%> part5_{{ $dem+1 }}" data-page="<%=index+1%>"  id="test_question_<%=part1.getId()%>" data-part="part5">
                        <p>Question: {{ $dem+1 }} <strong><%=p.getQuestion()%><strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="5" data-cau="<%=index+1%>" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][4]" value="A" class="sg-replace-icons radio_answer_read_a{{ $dem+1 }}">
                                <label for=""><%=p.getA()%></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}"  data-part="5"data-cau="<%=index+1%>" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][4]" value="B" class="sg-replace-icons radio_answer_read_b{{ $dem+1 }}"> 
                                <label><%=p.getB()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="5" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][4]" value="C" class="sg-replace-icons radio_answer_read_c{{ $dem+1 }}"> 
                                <label><%=p.getC()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="5" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][4]" value="D" class="sg-replace-icons radio_answer_read_d{{ $dem+1 }}"> 
                                <label><%=p.getD()%>
                                </label>
                            </li>
                        </ol>
                        <div class="text-center script_answer_<%=index+1%> " style="backgroud:red; display: none">
                            <pre><%=p.getScript_answer()!=null?p.getScript_answer():""%></pre>   
                        </div>
                    </div>
                    <%}%>
<!-------------------------------------------------------------------------------------->     
<%
                        for (passages pass : getPassagesPart6) {
                            index++;
                    %>
                    <div  data-media="media_<%=pass.getId()%>" style="display:none" class="question fullest_page_<%=index+1%> part6_<%=pass.getId()%>" data-page="<%=index+1%>"  id="test_question_<%=pass.getId()%>" data-part="part6">
                        <div class="text-center" style="padding:30px; background: #a6e1ec; font-size: 16px; margin-bottom: 10px">
                            <%=pass.getContent()%>
                        </div>
                    </div>
                    <%}%>
                    <%
                        for (Part6 p : listPart6) {
                            dem++;
                    %>
                    <div  style="display:none" class="question  media_<%=p.getPassage_id()%>" data-page="{{ $dem+1 }}"  id="test_question_<%=part1.getId()%>" data-part="part6">
                        <p>Question: {{ $dem+1 }} </p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][5]" value="A" class="sg-replace-icons radio_answer_read_a{{ $dem+1 }}">
                                <label for=""> <%=p.getA()%></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][5]" value="B" class="sg-replace-icons radio_answer_read_b{{ $dem+1 }}"> 
                                <label> <%=p.getB()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][5]" value="C" class="sg-replace-icons radio_answer_read_c{{ $dem+1 }}"> 
                                <label>  <%=p.getC()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="6" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][5]" value="D" class="sg-replace-icons radio_answer_read_d{{ $dem+1 }}"> 
                                <label> <%=p.getD()%>
                                </label>
                            </li>
                        </ol>
                    </div>
                    <%}%>
<!-------------------------------------------------------------------------------------->     
<%
                        for (passages pass : getPassagesPart7) {
                            index++;
                    %>
                    <div  data-media="media_<%=pass.getId()%>" style="display:none" class="question fullest_page_<%=index+1%> part7_<%=pass.getId()%>" data-page="<%=index+1%>"  id="test_question_<%=pass.getId()%>" data-part="part7">
                        <div class="text-center" style="padding:30px; background: #a6e1ec; font-size: 16px; margin-bottom: 10px">
                            <%=pass.getContent()%>
                        </div>
                    </div>
                    <%}%>
                    <%
                        for (Part7 p : listPart7) {
                            dem++;
                    %>
                    <div  style="display:none" class="question  media_<%=p.getPasages_id()%>" data-page="{{ $dem+1 }}"  id="test_question_<%=part1.getId()%>" data-part="part7">
                        <p>Question: {{ $dem+1 }} <strong><%=p.getQuestion()%><strong></p>
                        <ol id="que" type="A"  >
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][6]" value="A" class="sg-replace-icons radio_answer_read_a{{ $dem+1 }}">
                                <label for=""> <%=p.getA()%></label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][6]" value="B" class="sg-replace-icons radio_answer_read_b{{ $dem+1 }}"> 
                                <label> <%=p.getB()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][6]" value="C" class="sg-replace-icons radio_answer_read_c{{ $dem+1 }}"> 
                                <label>  <%=p.getC()%>
                                </label>
                            </li>
                            <li>
                                <input type="radio" data-cau="{{ $dem+1 }}" data-part="7" data-question="<%=p.getId()%>" name="answer[<%=p.getId()%>][6]" value="D" class="sg-replace-icons radio_answer_read_d{{ $dem+1 }}"> 
                                <label> <%=p.getD()%>
                                </label>
                            </li>
                        </ol>
                    </div>
                    <%}%>
<!---------------------------------------------------------------->
                    </div>
                    
                
                <div class="pageing" id="fulltest_page" data-page="1" data-limit="<%=dem%>" >
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
   </div>
 <div class="modal fade" id="modal-message" >
    <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12" id="test_col_right" style="position: relative; height: 1423.81px;">
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
                <%
                    int i = 0;
                    for (Part1 part11 : listPart1) {
                        i++;
                %>
                <div class="cau cau_<%=i%>" data-iquestion="part1_<%=i%>" data-page="<%=i%>" data-question="<%=part11.getId()%>">
                    <a href="javascript:void(0)"><%=i%></a>
                </div>
                <%}%>
                <%
                    for (Part2 part2 : listPart2) {
                        i++;
                %>
                <div class="cau cau_<%=i%>" data-iquestion="part2_<%=i%>" data-page="<%=i%>" data-question="<%=part2.getId()%>">
                    <a href="javascript:void(0)"><%=i%></a>
                </div>
                <%}%>
                <%
                    
                    for (Part3_4 part3 : listPart3) {
                        i++;
                %>
                <div class="cau cau_<%=i%>" data-iquestion="part3_<%=part3.getMedia_id()%>" data-page="<%=i%>" data-question="<%=part3.getId()%>">
                    <a href="javascript:void(0)"><%=i%></a>
                </div>
                <%}%>
                <%
                    for (Part3_4 part4 : listPart4) {
                        i++;
                %>
                <div class="cau cau_<%=i%>" data-iquestion="part4_<%=part4.getMedia_id()%>" data-page="<%=i%>" data-question="<%=part4.getId()%>">
                    <a href="javascript:void(0)"><%=i%></a>
                </div>
                <%}%>
                <%
                    for (Part5 part5 : listPart5) {
                        i++;
                %>
                <div class="cau cau_<%=i%>" data-iquestion="part5_<%=i%>" data-page="<%=i%>" data-question="<%=part5.getId()%>">
                    <a href="javascript:void(0)"><%=i%></a>
                </div>
                <%}%>
                <%
                    for (Part6 part6 : listPart6) {
                        i++;
                %>
                <div class="cau cau_<%=i%>" data-iquestion="part6_<%=part6.getPassage_id()%>" data-page="<%=i%>" data-question="<%=part6.getId()%>">
                    <a href="javascript:void(0)"><%=i%></a>
                </div>
                <%}%>
                <%
                    for (Part7 part7 : listPart7) {
                        i++;
                %>
                <div class="cau cau_<%=i%>" data-iquestion="part7_<%=part7.getPasages_id()%>" data-page="<%=i%>" data-question="<%=part7.getId()%>">
                    <a href="javascript:void(0)"><%=i%></a>
                </div>
                <%}%>
            </div>      
        </div>
      
    </div>
</div>
            
        </div>
    </div>
</div>

        <a class="up" href="#topnav">
        <img src="templates/images/up.png" alt="">
    </a>
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
