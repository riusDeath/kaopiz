@extends('layouts.admin.admin-master')
@section('title', 'dashboard | part1: photo')
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
                <h3 class="box-title">Add Question Part 1: PHOTO
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

            <form role="form" action="{{ route('part1.add') }}" method="POST" enctype="multipart/form-data">
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
                <th>Answer</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($model as $part1)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $part1->answer }}</td>
                <td>{{ $part1->level['level'] }}</td>
                    <td class="text-center">
                        <a href="{{ route('part1.edit', ['id' => $part1->id]) }}" class="btn btn-sm btn-success"  >
                            <i class="fa fa-fw fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $part1->id }}" linkUrl="{{ route('part1.delete', ['id' => $part1->id])}}" data-table = "#table_test1">
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