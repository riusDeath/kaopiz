@extends('layouts.admin.admin-master')
@section('title', 'dashboard | part3: Short talk')
@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
          <!-- /.box-header -->
          @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 3: Short talk
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              <!-- /. tools -->
            </div>
        <div class="box-body pad" style="display: none">

            <form role="form" action="{{ route('part3.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
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
                        <div class="form-group">
                            <label>Test</label>
                            <select class="form-control" name="test_id">
                            @foreach($test as $tt)
                            <option value="{{ $tt->id }}" selected="">{{ $tt->name }}</option>
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
            </form>
            <div class="box">
        </div>
        </div>
        <table class="table table-bordered table-hover scroll" id="table_test3" >
            <tr>
                <th>#</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Level</th>
                <th>Test</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model as $part3)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $part3->question }}</td>
                <td>{{ $part3->answer }}</td>
                <td>{{ $part3->level['level'] }}</td>
                <td>{{ $part3->test['name'] }}</td>
                    <td class="text-center">
                        <a href="{{ route('part3.edit', ['id' => $part3->id]) }}" class="btn btn-sm btn-success" >
                            <i class="fa fa-fw fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part3->id }}" linkUrl="{{ route('part3.delete', ['id' => $part3->id])}}" data-table = "#table_test3">
                            <i class="fa fa-fw fa-times-circle" ></i>
                        </button>
                    </td>
            </tr>
            @endforeach
            {{ $model->links() }}
        </table>
@endsection
@section('script')
<script src="{{ asset('/admin-assets/js/admin-mytest.js') }}"></script>
@endsection