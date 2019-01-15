@extends('layouts.admin.admin-master')
@section('title', 'View Test')
@section('content')
<input type="hidden" value="" id="defaultImage">
<div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#main-info">Information</a></li>
        <li><a href="#tab_1" data-toggle="tab" aria-expanded="false">Part 1: Photographs</a></li>
        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Part 2: Question-Response</a></li>
        <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Part 3: Short conversation</a></li>
    </ul>
    <div class="tab-content">
        <div id="main-info" class="tab-pane fade in active">
        <div class="col-md-6">
            <p class="text-center">
                <strong>Review</strong>
            </p>

        <div class="progress-group" id="part1">
            <span class="progress-text">Part 1: Photographs</span>
            <span class="progress-number"><b>{{ count($model->part1) }}</b> question</span>
            <div class="progress sm">
                <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->
        <div class="progress-group">
            <span class="progress-text">Part 2: Question-Response</span>
            <span class="progress-number"><b>{{ count($model->part2) }}</b> question</span>

            <div class="progress sm">
                <div class="progress-bar progress-bar-red" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->
        <div class="progress-group">
            <span class="progress-text">Part 3: Short conversation</span>
            <span class="progress-number"><b>{{ count($model->part3) }}</b> question</span>
            <div class="progress sm">
                <div class="progress-bar progress-bar-green" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->
        <div class="progress-group">
            <span class="progress-text">Part 4: Short talk</span>
            <span class="progress-number"><b>{{ count($model->part4) }}</b> question</span>
            <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->
        <div class="progress-group">
            <span class="progress-text">Part 4: Short talk</span>
            <span class="progress-number"><b>{{ count($model->part5) }}</b> question</span>
            <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->
        <div class="progress-group">
            <span class="progress-text">Part 5: Incomplete sentence</span>
            <span class="progress-number"><b>{{ count($model->part5) }}</b> question</span>
            <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->
        <div class="progress-group">
            <span class="progress-text">Part 6: Text completion</span>
            <span class="progress-number"><b>{{ count($model->part6) }}</b> question</span>
            <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
            </div>
        </div>
        <!-- /.progress-group -->
        <div class="progress-group">
            <span class="progress-text">Part 7: Reading comprehen</span>
            <span class="progress-number"><b>{{ count($model->part7) }}</b> question</span>
            <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
            </div>
        </div>
        </div>
        </div>
{{-- /////tab 2 --}}
    <div class="tab-pane" id="tab_1">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 1: PHOTO
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              <!-- /. tools -->
            </div>
        <div class="box-body pad">

            <form role="form" action="{{ route('part1.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        <input type="hidden" value="{{ $model->id }}" name="test_id">
                        <div class="form-group ">
                            <label for="exampleInputEmail1">File Media</label>
                            <input type="file" data-media="media" name="mediaFile" data-link="media" required="">
                            <audio controls class="media">
                                <source src="" type="audio/mpeg" >
                            </audio>
                        </div>
                        
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}">{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Answer</label>
                            <select name="answer" id="">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        <div class="box">
            
            <!-- /.box-header -->
                <h3 class="box-title">Script answer
                </h3>
                <textarea name="script_answer" class="textarea" placeholder="Please enter script asnwer here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                    </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputFile">File Picture</label>
                    <input type="file" id="insert-media-button" class="button insert-media add_media" data-editor="content" name="picture" data-link="picture" required="">
                    <img src="" alt="" class="picture" width="200px">
                    <p class="help-block">Choose picture.</p>
                </div>
                
                </div>
                <!-- /.box-body -->
                <div class="box-footer col-md-6">
                    <button type="submit" class="btn btn-primary " name="add">Add</button>
                </div>
                {{-- <div class="box-footer col-md-6">
                    <button type="button" class="btn btn-primary  name="update" title="You can choose a row table!">Update</button><span class="text-red">Please select a row in the table to edit!</span>
                </div> --}}
            </form>
        </div>
        </div>
        <table class="table table-bordered table-hover scroll" id="table_test">
            <tr>
                <th>#</th>
                <th>Media</th>
                <th>Picture</th>
                <th>Answer</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model->part1 as $part1)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="c-Edit">{{ $part1->media['mediaFile'] }}</td>
                <td><img src="{{ $part1->picture }}" alt="" width="50px">{{ $part1->picture }}</td>
                <td>{{ $part1->answer }}</td>
                <td>{{ $part1->level['level'] }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $part1->id }}" data-status="{{ $part1->status }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part1->id }}" linkUrl="{{ route('part1.delete', ['id' => $part1->id])}}" >
                            <i class="fa fa-fw fa-times-circle" ></i>
                        </button>
                    </td>
            </tr>
            @endforeach
        </table>
        </div>
    <div class="tab-pane" id="tab_2">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 2: QUESTION-RESPONSE
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              <!-- /. tools -->
            </div>
        <div class="box-body pad">
            <form role="form" action="{{ route('part2.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        <input type="hidden" value="{{ $model->id }}" name="test_id">
                        <div class="form-group ">
                            <label for="exampleInputEmail1">File Media</label>
                            <input type="file" data-media="media" name="mediaFile" data-link="media" required="">
                            <audio controls class="media">
                                <source src="" type="audio/mpeg" >
                            </audio>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}">{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Answer</label>
                            <select name="answer" id="">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="box">
                    <!-- /.box-header -->
                        <h3 class="box-title">Script answer
                        </h3>
                        <textarea name="script_answer" class="textarea" placeholder="Please enter script asnwer here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer col-md-6">
                    <button type="submit" class="btn btn-primary " name="add">Add</button>
                </div>
                {{-- <div class="box-footer col-md-6">
                    <button type="button" class="btn btn-primary  name="update" title="You can choose a row table!">Update</button><span class="text-red">Please select a row in the table to edit!</span>
                </div> --}}
            </form>
        </div>
        </div>
        <table class="table table-bordered table-hover scroll" id="table_test">
        <tr>
            <th>#</th>
            <th>Media</th>
            <th>Answer</th>
            <th>Level</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($model->part2 as $part2)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="c-Edit">{{ $part2->media['mediaFile'] }}</td>
            <td>{{ $part2->answer }}</td>
            <td>{{ $part2->level['level'] }}</td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $part2->id }}" data-status="{{ $part2->status }}">
                        <i class="fa fa-fw fa-edit"></i>
                    </button>
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part2->id }}" linkUrl="{{ route('part2.delete', ['id' => $part2->id])}}" >
                        <i class="fa fa-fw fa-times-circle" ></i>
                    </button>
                </td>
        </tr>
        @endforeach
        </table> 
    </div>
    <div class="tab-pane" id="tab_3">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 3: SHORT CONVERSATION
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              <!-- /. tools -->
            </div>
        <div class="box-body pad">
            <form role="form" action="{{ route('part2.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        <input type="hidden" value="{{ $model->id }}" name="test_id">
                        <div class="form-group ">
                            <label for="exampleInputEmail1">File Media</label>
                            <input type="file" data-media="media" name="mediaFile" data-link="media" required="">
                            <audio controls class="media">
                                <source src="" type="audio/mpeg" >
                            </audio>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}">{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">
                    <div class="box">
                    <!-- /.box-header -->
                        <h3 class="box-title">Script answer
                        </h3>
                        <textarea name="script_answer" class="textarea" placeholder="Please enter script asnwer here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 questionPart3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question: </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="question[]">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionA: </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="optionA" name="optionA[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionB: </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="optionB" name="optionB[]">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionC: </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="optionC" name="optionC[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionD: </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="optionD" name="optionD[]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Answer</label>
                            <select name="answer[]" id="">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <div id="addPart3"></div>
                    <button class="btn btn-success"><i class="fa fa-fw fa-plus-square btn-addQuestionPart3"></i></button>
                </div>
                <!-- /.box-body -->
                <div class="box-footer col-md-6">
                    <button type="submit" class="btn btn-primary " name="add">Add</button>
                </div>
                {{-- <div class="box-footer col-md-6">
                    <button type="button" class="btn btn-primary  name="update" title="You can choose a row table!">Update</button><span class="text-red">Please select a row in the table to edit!</span>
                </div> --}}
            </form>
        </div>
        </div>
        <table class="table table-bordered table-hover scroll" id="table_test">
            <tr>
                <th>#</th>
                <th>Media</th>
                <th>Picture</th>
                <th>Answer</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model->part3 as $part3)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="c-Edit">{{ $part3->media['mediaFile'] }}</td>
                <td><img src="{{ $part3->picture }}" alt="" width="50px">{{ $part3->picture }}</td>
                <td>{{ $part3->answer }}</td>
                <td>{{ $part3->level['level'] }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $part3->id }}" data-status="{{ $part3->status }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part3->id }}" linkUrl="{{ route('part3.delete', ['id' => $part3->id])}}" >
                            <i class="fa fa-fw fa-times-circle" ></i>
                        </button>
                    </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('.btn-addQuestionPart3').on('click', function(e){
            e.preventDefault();
            $('#addPart3').clone().appendTo('.addQuestionPart3');
            alert('ok');
        });

        $('.c-Edit').dblclick(function(){
            // $('')
            alert('ok');
        });

        $('.btn-remove').on('click', function(){
                var url = $(this).attr('linkUrl');
                var del = confirm('You want to delete part1!');
                if (del == true) {
                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                            alert(data);
                            $('#table_test').load(location.href +' #table_test>*');
                            $('#part1').load(location.href +' #part1>*');
                        }
                    });  
                }
            }); 
        $('input[type=file]').change(function() {
        var link = $(this).data("link");
        var file = $(this).get(0).files[0];
        var reader  = new FileReader();

        reader.addEventListener("load", function () {
            $('.'+link).attr("src",reader.result )  ;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
        
    });
    });
</script>
@endsection