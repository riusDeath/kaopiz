@extends('layouts.admin.admin-master')
@section('content')

<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Category</h3>
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
	
</div>

<div class="container">
	<div class="body" >
		<div class="box box-primary">
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" method="post" id="form-update" action="{{ route('post.category.save') }}">
			@csrf
           </div>
			<input type="hidden" value="{{ $category->id }}" name="id">
			@csrf
			<div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Name <span class="text-danger validate-name"></span></label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" required="" value="{{ $category->name }}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Slug</label>
					<input type="test" class="form-control" id="slug" placeholder="email" name="slug" required="" value="{{ $category->slug }}">
				</div>
			</div>
			<input type="hidden" name="status" value="1">
	        <div class="radio">
						<div>Status: </div>
						<label>
							<input type="radio" name="status" id="optionsRadios1" value="1" required="" {{ $category->status==1?"checked":"" }}>
							Show
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="status" id="optionsRadios2" value="0" required="" {{ $category->status==0?"checked":"" }}>
							Hide
						</label>
					</div>
			<div class="form-group">
				<select name="category_parent" id="select-category" class="form-control select-category" required="required">
				<option value="0">Parent Category</option>
				@foreach($categories as $cate)
					<option value="{{ $cate->id }}">{{ $cate->name }}</option>
				@endforeach
				</select>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-primary btn-save">Update</button>
			</div>
		</form>
	</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/tinymce.min.js') }}"></script>
<script src="{{ asset('js/config.js') }}"></script>
@endsection