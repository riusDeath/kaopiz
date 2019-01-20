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

<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">POST</h3>
	</div>
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
                New Test
        </button>
		{{-- <a href="{{ route('test.add') }}">Create New Test</a> --}}
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table table-bordered table-hover" id="table_test">
			<tbody><tr>
				<th>index</th>
				<th>Title</th>
				<th>Status</th>
				<th>View</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($posts as $post)
			<tr>
				<td>{{ ($posts ->currentpage()-1) * $posts ->perpage() + $loop->index + 1 }}</td>
				<td>{{ $post->title }}</td>
				<td>
					@if($post->status == 1)
					<span class="badge bg-red">Show</span>
					@else
					<span>Hide</span>
					@endif
				</td>
				<td>
					{{ $post->created_at }}
				</td>
				<td class="text-center">
                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-success edit">
                        <i class="fa fa-fw fa-edit"></i>
                    </a>
				</td>
				<td class="text-center">
					<button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $post->id }}" linkUrl="{{ route('posts.delete', ['id' => $post->id])}}" >
                        <i class="fa fa-fw fa-times-circle" ></i>
                    </button>
				</td>
			</tr>
			@endforeach
			
		</tbody>
		<div class="box-footer clearfix">
			<ul class="pagination pagination-sm no-margin pull-right">
				{{ $posts->links() }}
			</ul>
		</div>
	</table>
</div>
<!-- /.box-body -->

</div>
!
@endsection
@section('script')
@endsection