@extends('layouts.admin.admin-master')
@section('title', 'View Test')
@section('style')
<script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('content')
<input type="hidden" value="" id="defaultImage">
<div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#main-info">Information</a></li>
        <li><a href="#tab_1" data-toggle="tab" aria-expanded="false">Part 1: Photographs</a></li>
        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Part 2: Question-Response</a></li>
        <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Part 3: Short conversation</a></li>
        <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Part 4: Short talk</a></li>
        <li><a href="#tab_5" data-toggle="tab" aria-expanded="false">Part 5: Incomplete sentence</a></li>
        <li><a href="#tab_6" data-toggle="tab" aria-expanded="false">Part 6: Text completion</a></li>
        <li><a href="#tab_7" data-toggle="tab" aria-expanded="false">Part 7: Reading comprehen</a></li>
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
{{-- /////tab 1 --}}
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
        <table class="table table-bordered table-hover scroll" id="table_test1" >
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
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part1->id }}" linkUrl="{{ route('part1.delete', ['id' => $part1->id])}}" data-table = "#table_test1">
                            <i class="fa fa-fw fa-times-circle" ></i>
                        </button>
                    </td>
            </tr>
            @endforeach
        </table>
        </div>
    {{-- tab 2 --}}
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
        <table class="table table-bordered table-hover scroll" id="table_test2" >
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
                    <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part2->id }}" linkUrl="{{ route('part2.delete', ['id' => $part2->id])}}" data-table = "#table_test2">
                        <i class="fa fa-fw fa-times-circle" ></i>
                    </button>
                </td>
        </tr>
        @endforeach
        </table> 
    </div>
    {{-- tab 3 --}}
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
                        <i class="fa fa-plus"></i>
                    </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              <!-- /. tools -->
            </div>
        <div class="box-body pad" style="">
            <form role="form" action="{{ route('part3.add') }}" method="post" enctype="multipart/form-data">
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
                            <option value="{{ $lev->id }}" selected="">{{ $lev->level }}</option>
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
                            <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="question[]">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionA: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionA" name="optionA[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionB: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionB" name="optionB[]">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionC: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionC" name="optionC[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionD: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionD" name="optionD[]">
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

                    <button class="btn btn-success btn-addQuestionPart" data-dblPart="questionPart3" data-div="#addPart3"><i class="fa fa-fw fa-plus-square"></i></button>
                    <button class="btn btn-danger btn-removeQuestionPart" style="" data-dblPart="questionPart3" data-div="#addPart3"><i class="fa fa-fw fa-remove"></i></button>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary " name="add">Add</button>
                </div>
                {{-- <div class="box-footer col-md-6">
                    <button type="button" class="btn btn-primary  name="update" title="You can choose a row table!">Update</button><span class="text-red">Please select a row in the table to edit!</span>
                </div> --}}
            </form>
        </div>
        </div>
        <table class="table table-bordered table-hover scroll" id="table_test3" >
            <tr>
                <th>#</th>
                <th>Media</th>
                <th>Answer</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model->part3 as $part3)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="c-Edit">{{ $part3->media['mediaFile'] }}</td>
                <td>{{ $part3->answer }}</td>
                <td>{{ $part3->level['level'] }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $part3->id }}" data-status="{{ $part3->status }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part3->id }}" linkUrl="{{ route('part3.delete', ['id' => $part3->id])}}" data-table = "#table_test3">
                            <i class="fa fa-fw fa-times-circle" ></i>
                        </button>
                    </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{-- tab 4 --}}
    <div class="tab-pane" id="tab_4">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 4: SHORT TALK
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fa fa-plus"></i>
                    </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              <!-- /. tools -->
            </div>
        <div class="box-body pad" style="display: none">
            <form role="form" action="{{ route('part4.add') }}" method="post" enctype="multipart/form-data">
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
                            <option value="{{ $lev->id }}" selected="">{{ $lev->level }}</option>
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
                    <div class="col-md-12 questionPart4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question: </label>
                            <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="question[]">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionA: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionA" name="optionA[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionB: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionB" name="optionB[]">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionC: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionC" name="optionC[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionD: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionD" name="optionD[]">
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
                    <div id="addPart4"></div>
                    <button class="btn btn-success btn-addQuestionPart" data-dblPart="questionPart4" data-div="#addPart4"><i class="fa fa-fw fa-plus-square"></i></button>
                    <button class="btn btn-danger btn-removeQuestionPart" style="display: none" data-dblPart="questionPart4" data-div="#addPart4"><i class="fa fa-fw fa-remove"></i></button>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary " name="add">Add</button>
                </div>
                {{-- <div class="box-footer col-md-6">
                    <button type="button" class="btn btn-primary  name="update" title="You can choose a row table!">Update</button><span class="text-red">Please select a row in the table to edit!</span>
                </div> --}}
            </form>
        </div>
        </div>
        <table class="table table-bordered table-hover scroll" id="table_test4" >
            <tr>
                <th>#</th>
                <th>Media</th>
                <th>Answer</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model->part4 as $part4)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="c-Edit">{{ $part4->media['mediaFile'] }}</td>
                <td>{{ $part4->answer }}</td>
                <td>{{ $part4->level['level'] }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $part4->id }}" data-status="{{ $part4->status }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part4->id }}" linkUrl="{{ route('part4.delete', ['id' => $part4->id])}}" data-table = "#table_test4">
                            <i class="fa fa-fw fa-times-circle" ></i>
                        </button>
                    </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{-- tab 5 --}}
    <div class="tab-pane" id="tab_5">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 5: Incomplete sentence
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

            <form role="form" action="{{ route('part5.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        <input type="hidden" value="{{ $model->id }}" name="test_id">
                        
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}">{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <div class="box">
            
            <!-- /.box-header -->
                <h3 class="box-title">Script answer
                </h3>
                <textarea name="script_answer" class="textarea" placeholder="Please enter script asnwer here"
                          style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question: </label>
                            <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="question">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionA: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionA" name="optionA">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionB: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionB" name="optionB">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionC: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionC" name="optionC">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionD: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionD" name="optionD">
                            </div>
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
        <table class="table table-bordered table-hover scroll" id="table_test5"  >
            <tr>
                <th>#</th>
                <th>Question</th>
                <th>optionA</th>
                <th>optionB</th>
                <th>optionC</th>
                <th>optionD</th>
                <th>Answer</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model->part5 as $part5)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $part5->question }}</td>
                <td>{{ $part5->optionA }}</td>
                <td>{{ $part5->optionB }}</td>
                <td>{{ $part5->optionC }}</td>
                <td>{{ $part5->optionD }}</td>
                <td>{{ $part5->answer }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $part5->id }}" data-status="{{ $part5->status }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part5->id }}" linkUrl="{{ route('part5.delete', ['id' => $part5->id])}}" data-table = "#table_test5">
                            <i class="fa fa-fw fa-times-circle" ></i>
                        </button>
                    </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{-- tab 6 --}}
    <div class="tab-pane" id="tab_6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 6: Incomplete sentence
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

            <form role="form" action="{{ route('part6.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        <input type="hidden" value="{{ $model->id }}" name="test_id">
                        
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}">{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <div class="box">
            
            <!-- /.box-header -->
                <h3 class="box-title">Script answer
                </h3>
                <textarea class="ckeditor" name="content" cols="80" rows="10">{{ old('description') }}</textarea>
                <script>
                    CKEDITOR.replace( 'content', {
                            filebrowserBrowseUrl: 'http://localhost:8888/web-toeic/public/ckfinder/ckfinder.html',
                            filebrowserUploadUrl: 'http://localhost:8888/web-toeic/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                    } );
                </script>
                {{-- <textarea name="script_answer" class="textarea" placeholder="Please enter script asnwer here"
                          style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> --}}
                </div>
                </div>
                <div class="col-md-6 questionPart6">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionA: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionA" name="optionA[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionB: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionB" name="optionB[]">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionC: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionC" name="optionC[]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionD: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionD" name="optionD[]">
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
                </div>
                <div id="addPart6"></div>
                    <button class="btn btn-success btn-addQuestionPart" data-dblPart="questionPart6" data-div="#addPart6"><i class="fa fa-fw fa-plus-square"></i></button>
                    <button class="btn btn-danger btn-removeQuestionPart" style="display: none" data-dblPart="questionPart6" data-div="#addPart6"><i class="fa fa-fw fa-remove"></i></button>
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
        <table class="table table-bordered table-hover scroll" id="table_test6"  >
            <tr>
                <th>#</th>
                <th>Type Passage</th>
                <th>optionA</th>
                <th>optionB</th>
                <th>optionC</th>
                <th>optionD</th>
                <th>Answer</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model->part6 as $part6)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $part6->passage->detail }}</td>
                <td>{{ $part6->optionA }}</td>
                <td>{{ $part6->optionB }}</td>
                <td>{{ $part6->optionC }}</td>
                <td>{{ $part6->optionD }}</td>
                <td>{{ $part6->answer }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $part6->id }}" data-status="{{ $part6->status }}">
                            <i class="fa fa-fw fa-edit"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part6->id }}" linkUrl="{{ route('part6.delete', ['id' => $part6->id])}}" data-table = "#table_test6">
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
        // // add remove question part 
        $('.btn-addQuestionPart').on('click', function(e){
            e.preventDefault();
            var dbl = $(this).attr('data-dblPart');
            var divid = $(this).attr('data-div');
            $('.'+dbl).clone().appendTo(''+divid);
            // $('.questionPart4').clone().appendTo('#addPart3');
            $('.btn-removeQuestionPart').show();
            $(divid+' .'+dbl+':last-child input').val(null);
        });

        $('.btn-removeQuestionPart').on('click', function(e){
            var dbl = $(this).attr('data-dblPart');
            var divid = $(this).attr('data-div');
            $(divid+' .'+dbl+':last-child').remove();
        });

        $('.c-Edit').dblclick(function(){
            // $('')
            alert('ok');
        });

        $('.btn-remove').on('click', function(){
                var idtable = $(this).attr('data-table');
                var url = $(this).attr('linkUrl');
                var del = confirm('You want to delete question!');
                if (del == true) {
                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(data) {
                            $(''+idtable).load(location.href +' '+idtable+'>*');
                            $('#part1').load(location.href +' #part1>*');
                            alert(data);
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