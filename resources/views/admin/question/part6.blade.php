@extends('layouts.admin.admin-master')
@section('title', 'dashboard | Part 6: Text completion')
@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
             @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
          <!-- /.box-header -->
          <!-- form start -->
            <div class="box-header">
                <h3 class="box-title">Add Question Part 6: Text completion
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
                        
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}">{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Test</label>
                            <select class="form-control" name="test_id">
                            @foreach($test as $lev)
                            <option value="{{ $lev->id }}">{{ $lev->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <div class="box">
            
            <!-- /.box-header -->
                
                <h3 class="box-title">Content</h3>
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
                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title: </label>
                    <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="detail" >
                </div>
                <div class="questionPart6">
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
                <div id="addPart6"></div>
                </div>
                </div>
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
            @foreach($model as $part6)
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
            {{ $model->links() }}
        </table>
@endsection
@section('script')
<script src="{{ asset('/admin-assets/js/admin-mytest.js') }}"></script>
@endsection