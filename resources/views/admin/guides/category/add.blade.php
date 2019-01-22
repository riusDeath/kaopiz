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
			<input type="hidden" value="-1" name="id">
			<div class="box-body">
				<div class="form-group">
               <label for="">{{ __('form.name') }}</label>
               <input type="text" class="form-control" name="name" placeholder="{{ __('form.name') }} " id="name">
               @if($errors->has('name'))
               <div class="help-block">
                   {{ $errors->first('name') }}
               </div>
               @endif
           </div>
            <div class="form-group">
               <label for="">{{ __('form.slug') }}</label>
               <input type="text" class="form-control" name="slug" placeholder="{{ __('form.slug') }}" id="slug">
               @if($errors->has('slug'))
               <div class="help-block">
                   {{ $errors->first('slug') }}
               </div>
               @endif
           </div>
			</div>
			<input type="hidden" name="status" value="1">
	        <div class="radio">
						<div>Status: </div>
						<label>
							<input type="radio" name="status" id="optionsRadios1" value="1" required="">
							Show
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="status" id="optionsRadios2" value="0" required="">
							Hide
						</label>
					</div>
			<div class="form-group">
				<select name="category_parent" id="select-category" class="form-control select-category" required="required">
				<option value="0">Parent Category</option>
				@foreach($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
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