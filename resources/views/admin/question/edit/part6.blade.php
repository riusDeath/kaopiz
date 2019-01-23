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
                <h3 class="box-title">Update Question Part 6: Text completion
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

            <form role="form" action="{{ route('part6.edit', ['id' => $part6->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}" {{ $part6->level_id==$lev->id?"selected":"" }}>{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Test</label>
                            <select class="form-control" name="test_id">
                            @foreach($test as $tt)
                            <option value="{{ $tt->id }}" {{ $part6->test_id==$tt->id?"selected":"" }}>{{ $tt->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <div class="box">
            
            <!-- /.box-header -->
                
                <h3 class="box-title">Content</h3>
                <textarea class="ckeditor" name="content" cols="80" rows="10">{!! $part6->passage['content'] !!}</textarea>
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
                
                  <div class="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Empty {{ $index }}</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionA: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionA" name="optionA" value="{{ $part6->optionA }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionB: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionB" name="optionB" value="{{ $part6->optionB }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionC: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionC" name="optionC" value="{{ $part6->optionC }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionD: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionD" name="optionD" value="{{ $part6->optionD }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Answer</label>
                            <select name="answer" id="">
                                <option value="A" {{ $part6->answer=="A"?"selected":"" }}>A</option>
                                <option value="B" {{ $part6->answer=="B"?"selected":"" }}>B</option>
                                <option value="C" {{ $part6->answer=="C"?"selected":"" }}>C</option>
                                <option value="D" {{ $part6->answer=="D"?"selected":"" }}>D</option>
                            </select>
                        </div>
                </div>
                </div>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer col-md-6">
                    <button type="submit" class="btn btn-primary " >Update</button>
                </div>
            </form>
        </div>
        </div>
@endsection
@section('script')
<script src="{{ asset('/admin-assets/js/admin-mytest.js') }}"></script>
@endsection