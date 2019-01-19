@extends('layouts.admin.admin-master')
@section('title', 'Giudes')
@section('style')
<script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
@endsection
@section('content')
<div class="box box-primary">
	<div class="col-md-9">
		<div class="box-header with-border">
			<h3 class="box-title"></h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<div class="box-header">
			<h3 class="box-title">Add Post: Grammar Giudes
			</h3>
		
			<!-- /. tools -->
		</div>
		<div class="box-body pad">
		
			<form role="form" action="{{ route('part6.add') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="box-body">
					<div class="col-md-12">
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
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Title: </label>
							<input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="detail" >
						</div>
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
    <div class="col-md-3">
    	<div id="categorydiv" class="postbox ">
    		<button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text">Chuyển đổi bảng điều khiển: Chuyên mục</span><span class="toggle-indicator" aria-hidden="true"></span></button><h2 class="hndle ui-sortable-handle"><span>Chuyên mục</span></h2>
    		<div class="inside">
    			<div id="taxonomy-category" class="categorydiv">
    				<ul id="category-tabs" class="category-tabs">
    					<li class="tabs"><a href="#category-all">Tất cả chuyên mục</a></li>
    					<li class="hide-if-no-js"><a href="#category-pop">Dùng nhiều nhất</a></li>
    				</ul>

    				<div id="category-pop" class="tabs-panel" style="display: none;">
    					<ul id="categorychecklist-pop" class="categorychecklist form-no-clear">

    						<li id="popular-category-1" class="popular-category">
    							<label class="selectit">
    								<input id="in-popular-category-1" type="checkbox" value="1">
    							Chưa được phân loại			</label>
    						</li>

    					</ul>
    				</div>

    				<div id="category-all" class="tabs-panel" style="display: block;">
    					<input type="hidden" name="post_category[]" value="0">			<ul id="categorychecklist" data-wp-lists="list:category" class="categorychecklist form-no-clear">

    						<li id="category-1" class="popular-category"><label class="selectit"><input value="1" type="checkbox" name="post_category[]" id="in-category-1"> Chưa được phân loại</label></li>
    					</ul>
    				</div>
    				<div id="category-adder" class="">
    					<a id="category-add-toggle" href="#category-add" class="hide-if-no-js taxonomy-add-new">
    					+ Thêm chuyên mục				</a>
    					<p id="category-add" class="category-add wp-hidden-child">
    						<label class="screen-reader-text" for="newcategory">Thêm chuyên mục</label>
    						<input type="text" name="newcategory" id="newcategory" class="form-required" value="Tên danh mục mới" aria-required="true">
    						<label class="screen-reader-text" for="newcategory_parent">
    						Chuyên mục hiện tại:					</label>
    						<select name="newcategory_parent" id="newcategory_parent" class="postform">
    							<option value="-1">— Chuyên mục hiện tại —</option>
    							<option class="level-0" value="1">Chưa được phân loại</option>
    						</select>
    						<input type="button" id="category-add-submit" data-wp-lists="add:categorychecklist:category-add" class="button category-add-submit" value="Thêm chuyên mục">
    						<input type="hidden" id="_ajax_nonce-add-category" name="_ajax_nonce-add-category" value="6c0a6798e5">					<span id="category-ajax-response"></span>
    					</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    @endsection
    @section('script')

    @endsection
