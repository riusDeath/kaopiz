@extends('layouts.admin.admin-master')
@section('title', 'dashboard | part2: Qu-Response')
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
                <h3 class="box-title">Update Question Part 2: Qu-Response
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

            <form role="form" action="{{ route('part2.edit', ['id' => $part2->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="exampleInputEmail1">File Media</label>
                            <input type="file" data-media="media" name="mediaFile" data-link="media" value="{{ $part2->media->mediaFile }}">
                            <audio controls class="media">
                                <source src="{{ asset('medias/') }}/{{ $part2->media->mediaFile }}" type="audio/mpeg" >
                            </audio>
                        </div>
                        
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level_id">
                            @foreach($level as $lev)
                            <option value="{{ $lev->id }}" {{ $part2->level_id==$lev->id?"selected":"" }}>{{ $lev->level }}</option>
                            @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Test</label>
                            <select class="form-control" name="test_id">
                            @foreach($test as $tt)
                            <option value="{{ $tt->id }}" {{ $part2->test_id==$tt->id?"selected":"" }} >{{ $tt->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Answer</label>
                            <select name="answer" id="">
                                <option value="A" {{ $part2->answer=="A"?"selected":"" }}>A</option>
                                <option value="B" {{ $part2->answer=="B"?"selected":"" }}>B</option>
                                <option value="C" {{ $part2->answer=="C"?"selected":"" }}>C</option>
                            </select>
                        </div>
                        <div class="box">
            
            <!-- /.box-header -->
                <h3 class="box-title">Script answer
                </h3>
                <textarea name="script_answer" class="textarea" placeholder="Please enter script asnwer here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $part2->media->script_answer }}</textarea>
                </div>
                    </div>
                
                </div>
                <!-- /.box-body -->
                <div class="box-footer col-md-6">
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
                
            </form>
        </div>
        </div>
@endsection
@section('script')
<script src="{{ asset('/admin-assets/js/admin-mytest.js') }}"></script>
@endsection