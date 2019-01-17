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
	<div class="col-md-3">
		<form action="" method="GET">
			<div class="box-tools">
				<div class="input-group input-group-sm" style="width: 200px; margin: 12px">
					<input type="text" name="search" class="form-control pull-right" placeholder="Search" value="{{ isset($search)?$search:"" }}">
		
					<div class="input-group-btn">
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="input-group col-md-9" style="width: 200px; margin: 12px">
		<button type="button" class="btn btn-sm btn-success add" data-toggle="modal" data-target="#modal-add">
            <i class="fa fa-fw fa-user-plus"></i>
        </button>
		{{-- <a href="{{ route('test.add') }}">Create New Test</a> --}}
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table table-bordered table-hover" id="table_test">
			<tbody><tr>
				<th>index</th>
				<th>Name</th>
				<th>email</th>
				<th>role</th>
				<th>Status</th>
				<th>updated</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($model as $t)
			<tr>
				<td>{{ ($model ->currentpage()-1) * $model ->perpage() + $loop->index + 1 }}</td>
				<td>{{ $t->name }}</td>
				<td>{{ $t->email }}</td>
				<td>
					@if($t->role == 1000)
					<span class="badge bg-red">Admin</span>
					@else
					<span>user</span>
					@endif
				</td>
				<td>
					@if($t->status == 1)
					<span class="badge bg-red">Show</span>
					@else
					<span>Hide</span>
					@endif
				</td>
				<td>
					{{ $t->updated_at }}
				</td>
				{{-- <td class="text-center">
					<a href="{{ route('user.view', ['id' => $t->id]) }}" class="btn btn-info"><i class="fa fa-fw fa-eye"></i></a>
				</td> --}}
				<td class="text-center">
					<button type="button" class="btn btn-sm btn-success edit" data-toggle="modal" data-target="#modal-add" data-id="{{ $t->id }}" data-status="{{ $t->status }}" data-role="{{ $t->role }}">
                        <i class="fa fa-fw fa-edit"></i>
                    </button>
				</td>
				<td class="text-center">
					@if($t->role < Auth::user()->role)
					<button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $t->id }}" linkUrl="{{ route('user.delete', ['id' => $t->id])}}" >
                        <i class="fa fa-fw fa-user-times"></i>
                    </button>
                    @endif
				</td>
			</tr>
			@endforeach
			
		</tbody>
		<div class="box-footer clearfix">
			<ul class="pagination pagination-sm no-margin pull-right">
				{{ $model->links() }}
			</ul>
		</div>
	</table>
</div>
<div class="modal fade" id="modal-add" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
				<h3 class="box-title model-title">SAVE USER</h3>
            </div>
 			<div class="modal-body" >
 				<div class="box box-primary">
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form" method="get" id="form-update" action="{{ route('user.save') }}">
						<input type="hidden" value="-1" name="id">
						@csrf
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Enter Name <span class="text-danger validate-name"></span></label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" required="">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="email" class="form-control" id="exampleInputPassword1" placeholder="email" name="email" required="">
							</div>
						</div>
						<div class="form-group">
							Status: 
							<span class="text-danger validate-status"></span>
				            <div class="radio">
				            	<label>
				                    <input type="radio"  id="optionsRadios1"   name="status" value="1" required="" class="status1 status">Show
				                </label>
				            </div>
				            <div class="radio">
				                <label>
				                    <input type="radio"  id="optionsRadios1"   name="status" value="0" required="" class="status0 status" >Hide
				                </label>
				            </div>
				        </div>
				        <div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Password: <span class="text-danger validate-name"></span></label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="password" required="" value="123456">
							</div>
						</div>
				        <div class="form-group edit-role">
		                  	<label>Role</label>
		                  	<div class="radio">
				            	<label>
				                    <input type="radio"  id="optionsRadios1"   name="role" value="1000" required="" class="role1000 role">Admin
				                </label>
				            </div>
				            <div class="radio">
				                <label>
				                    <input type="radio"  id="optionsRadios1"   name="role" value="1" required="" class="role0 role" >Customer
				                </label>
				            </div>
		                </div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-save">Save</button>
						</div>
					</form>
				</div>
 			</div>
 		</div>
 	</div>
 </div>

@endsection
@section('script')
<script>
	$('.add').on('click', function(){
			$('input[name=name]').val("");
			$('input[name=id]').val("-1");
	        $('input[name=email]').val("");
	        $('.status').attr("checked", true);
	        $('.role').attr("checked", true);
	});

	$("#table_test").on('click','.edit',function(){

			var currentRow=$(this).closest("tr"); 
	        // var col1=currentRow.find("td:eq(0)").text();
	        var col1 = currentRow.find("td:eq(1)").text(); // get name
	        var col2 = currentRow.find("td:eq(2)").text(); // get title
	        var id = currentRow.find("td:eq(6)").find('.edit').data('id'); // get id test 
	        var status = currentRow.find("td:eq(6)").find('.edit').data('status');  // get status test
	        var role = currentRow.find("td:eq(6)").find('.edit').data('role');  // get status test


	        $('input[name=name]').val(col1);
	        $('input[name=email]').val(col2);
	        // $('input[value='+status+']').prop("checked", true);
	        $('.status'+status).attr("checked", true);
	        $('input[name=id]').val(id);
	        $('.role'+role).attr("checked", true);
	        $('input[name=id]').val(id);

	        $('input[name=email]').keyup(function(){
	        	if($(this).val() == "") {
	        		$('input[name=email]').val(col2);
	        	}
	        });
	       
		});
	$('.btn-remove').on('click', function(){
                var url = $(this).attr('linkUrl');
                var del = confirm('You want to delete user!');
                if (del == true) {
		            $.ajax({
		            	url: url,
		            	type: 'GET',
		            	success: function(data) {
	                        alert(data);
			                $('#table_test').load(location.href +' #table_test>*');
		            	}
		            });  
                }
            });	
</script>
@endsection