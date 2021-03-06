@extends('layouts.admin.admin-master')
@section('title', 'dashboard | part4: Short talk')
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
                <h3 class="box-title">Update Question Part 3: Short talk
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
        <div class="box-body pad" >

            <form role="form" action="{{ route('part4.edit', ['id' => $part4->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputEmail1">File Media</label>
                            <audio controls class="media">
                                <source src="{{ asset('medias/') }}/{{ $part4->media->mediaFile }}" type="audio/mpeg" >
                            </audio>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}" {{ $part4->level_id==$lev->id?"selected":"" }}>{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Test</label>
                            <select class="form-control" name="test_id">
                            @foreach($test as $tt)
                            <option value="{{ $tt->id }}" {{ $part4->test_id==$tt->id?"selected":"" }} >{{ $tt->name }}</option>
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
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $part4->media->script_answer }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 questionPart4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Question: </label>
                            <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="question" value="{{ $part4->question }}">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionA: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionA" name="optionA" value="{{ $part4->optionA }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionB: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionB" name="optionB" value="{{ $part4->optionB }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionC: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionC" name="optionC" value="{{ $part4->optionC }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">optionD: </label>
                                <input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="optionD" name="optionD" value="{{ $part4->optionD }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Answer</label>
                            <select name="answer" id="">
                                <option value="A" {{ $part4->answer=="A"?"selected":"" }}>A</option>
                                <option value="B" {{ $part4->answer=="B"?"selected":"" }}>B</option>
                                <option value="C" {{ $part4->answer=="C"?"selected":"" }}>C</option>
                                <option value="C" {{ $part4->answer=="D"?"selected":"" }}>D</option>
                            </select>
                        </div>

                        </div>
                    </div>
                  
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>
            <div class="box">
        </div>
        </div>
        
@endsection
@section('script')
<script src="{{ asset('/admin-assets/js/admin-mytest.js') }}"></script>
@endsection