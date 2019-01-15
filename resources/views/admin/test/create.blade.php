@extends('layouts.admin.admin-master')
@section('content')

<div class="box">
	<form role="form" method="post" id="form-update" action="">
		{{-- @csrf --}}
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Enter Name</label>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Title</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title" required="">
			</div>
		</div>
		<div class="form-group">
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"  name="status" value="1" required="" class="status1">Show
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"  name="status" value="0" required="" class="status0">Hide
				</label>
			</div>
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			<button type="submit" class="btn btn-primary btn-save">Save</button>
		</div>
	</form>
	
</div>

@endsection
@section('script')
@endsection