@extends('layouts.admin.admin-master')
@section('title', 'Giudes')
@section('style')
<script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<style>
	.postbox{
		    min-width: 255px;
		    padding: 20px;
		    border: 1px solid #e5e5e5;
		    background: #fff;
	}
</style>
@endsection
@section('content')
<div class="box-body pad">
	 @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	<form role="form" action="{{ route('post.add') }}" method="post" enctype="multipart/form-data">
		<div class="col-md-9">
				@csrf
				<div class="box-body">
					<div class="col-md-12">
						<div class="box">
							<div class="form-group">
								<label for="">Post excerpt:</label>
								<textarea name="post_excerpt" class="textarea" placeholder="Place some text here"
								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> 
							</div>
							<!-- /.box-header -->
							<div class="form-group">
			                  <label for="exampleInputFile">File input</label>
			                  <input type="file" id="exampleInputFile" name="picture">

			                  <p class="help-block">Choose avatar</p>
			                </div>
							<h3 class="box-title">Content</h3>
							<textarea class="ckeditor" name="content" cols="80" rows="10">{{ old('content') }}</textarea>
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
							<input required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Question" name="title" >
						</div>
					</div>
				</div>
				
				
</div>
<div class="col-md-3">
	<div id="submitdiv" class="postbox ">
			<div class="submitbox" id="submitpost">

			<div id="minor-publishing">

			<div style="display:none;">

			<p class="submit"><input type="submit" name="save" id="save" class="button" value="Save"></p></div>
			<div class="form-group">
					<div class="radio">
						<div>View mode:</div>
						<label>
							<input type="radio" name="status" id="optionsRadios1" value="0" checked="">
							Show
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="status" id="optionsRadios2" value="1">
							Hide
						</label>
					</div>

				</div>

			<div id="minor-publishing-actions">
			<div id="save-action">
				<input type="submit" name="save" id="save-post" value="post date" class="button">
				<span class="spinner"></span>
			</div>
			</div>
			</div><!-- .misc-pub-section -->

			<div class="misc-pub-section curtime misc-pub-curtime">
				<input type="date" name="post_date">
				<p>
				<a href="#edit_timestamp" class="save-timestamp hide-if-no-js button">OK</a>
				<a href="#edit_timestamp" class="cancel-timestamp hide-if-no-js button-cancel">Cancel</a>
				</p>
			</div>

			</div>
			<div class="clear"></div>

			<div id="major-publishing-actions">
			<div id="delete-action">
			<a class="submitdelete deletion" href="http://localhost:8888/wordpress/wp-admin/post.php?post=4&amp;action=trash&amp;_wpnonce=cd3a9c672e">Move to Trash</a></div>

			<div id="publishing-action">
			<span class="spinner"></span>
				<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Publish"></div>
			<div class="clear"></div>
			</div>
		</div>

    	<div id="categorydiv" class="postbox ">
    		<button type="button" class="handlediv" aria-expanded="true"><span class="screen-reader-text"></span><span class="toggle-indicator" aria-hidden="true"></span></button><h2 class="hndle ui-sortable-handle"><span>Category</span></h2>
    		<div class="inside">
    			<div id="taxonomy-category" class="categorydiv">

    				<div id="category-all" class="tabs-panel" style="display: block;">
    					<input type="hidden" name="post_category[]" value="0">			
    					<ul id="categorychecklist" data-wp-lists="list:category" class="categorychecklist form-no-clear">
    						@if(count($categories) > 0)
    						<select name="category_id" id="select-category" class="form-control select-category" required="required">
    						@foreach($categories as $category)
    							<option value="{{ $category->id }}">{{ $category->name }}</option>
    						@endforeach
    						</select>
    						@else
    						<li id="category-1" class="popular-category"><label class="selectit"><input value="1" type="checkbox" name="post_category[]" id="in-category-1"> Chưa được phân loại</label></li>
    						@endif
    					</ul>
    				</div>
    				<div id="category-adder" class="">
    					<a id="category-add-toggle " href="#category-add" class="newcategory hide-if-no-js taxonomy-add-new">
    					+ Add New Category</a>
    					<p id="category-add" class="category-add wp-hidden-child" style="display: none">
    						<input type="text" name="newcategory" id="newcategory" class="form-required" placeholder =" New Category" aria-required="true"><span class="text-red validate-category"></span>
    						<label class="screen-reader-text" for="newcategory_parent">
    						</label>
    						<select name="category_parent" id="category_parent" class="form-control  select-category" required="required">
    						<option value="0">Parent Category</option>
 	    					@foreach($category_parents as $category)
    							<option value="{{ $category->id }}">{{ $category->name }}</option>
    						@endforeach
    						</select>
    						<input type="button" id="category-add-submit" data-wp-lists="add:categorychecklist:category-add" class="button category-add-submit" value="+ Add New Category" href="{{ route('category.add') }}">
    						<input type="hidden" id="_ajax_nonce-add-category" name="_ajax_nonce-add-category" value="6c0a6798e5"><span id="category-ajax-response"></span>
    					</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</form>
</div>
@endsection
@section('script')
<script>
	$(document).ready(function(){

		$('.newcategory').on('click', function(e){
			e.preventDefault();
			var showshow = $(this).attr('href');
			$(showshow).toggle();
		})

		$('.category-add-submit').on('click', function(e){
			e.preventDefault();
			var category = $('#newcategory').val();
			var category_parent = $('.category_parent').val();
			if (category.length == 0) {
				$('.validate-category').text('Not empty category!');
			} else {
				$.ajax({
					url: $(this).attr('href'),
					data: { 
						name: category,
						category_parent: category_parent,
					},
					type: "GET",
					dataType: 'JSON',
					success: function(data) {
						 $('#select-category').load(location.href +' #select-category>*');
						 $('#category_parent').load(location.href +' #category_parent>*');
					}	
				});
			}
		})

		$('#newcategory').on('keyup', function(){
			if ($(this).val().length == 0) {
				$('.validate-category').text('Not empty category!');
			} else {
				$('.validate-category').empty();
			}
		})
	});
</script>
@endsection
