@extends('layouts.admin.admin-master')
@section('content')

<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">User</h3>
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
		<form role="form" method="get" id="form-update" action="{{ route('user.save') }}">
			<input type="hidden" value="{{ Auth::user()->id }}" name="id">
			@csrf
			<div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Enter Name <span class="text-danger validate-name"></span></label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" required="" value="{{ Auth::user()->name }}">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="email" name="email" required="" value="{{ Auth::user()->email }}">
				</div>
			</div>
			<input type="hidden" name="status" value="1">
	        <div class="box-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Password: <span class="text-danger validate-name"></span></label>
					<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Name" name="password" required="" value="123456">
				</div>
			</div>
            <input type="hidden"  id="optionsRadios1"   name="role" value="1000">Admin
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
@endsection