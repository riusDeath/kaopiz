@extends('layouts.admin.admin-master')
@section('title', 'dashboard | part5: Incomplete sentence')
@section('content')
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
                            @foreach($test as $tt)
                            <option value="{{ $tt->id }}">{{ $tt->name }}</option>
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
            @foreach($model as $part5)
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
@endsection
@section('script')
<script src="{{ asset('/admin-assets/js/admin-mytest.js') }}"></script>
@endsection