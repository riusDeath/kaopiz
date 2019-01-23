@extends('layouts.admin.admin-master')
@section('title', 'Comment')
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
		<h3 class="box-title">ALL Comments</h3>
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
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table table-bordered table-hover" id="table_test">
			<tbody><tr>
				<th>id</th>
				<th>Post</th>
				<th>author</th>
				<th>Content</th>
				<th>Status</th>
				<th>Delete</th>
			</tr>
			@foreach($comments as $comment)
			<tr>
				<td>{{ $comment->id }}</td>
				<td><a href="{{ route('post.edit', ['id' => $comment->post_id]) }}">{{ $comment->post->title }}</a></td>
				<td><a href="{{ route('user.view', ['id' => $comment->user_id]) }}">{{ $comment->author }}</a></td>
				<td>{{ $comment->content }}</td>
				<td>
					@if($comment->status == 1)
					<a href="{{ route('comment.edit', ['id' => $comment->id])}}"><span>Approved</span></a>
					@else
					<a href="{{ route('comment.edit', ['id' => $comment->id])}}"><span class="badge bg-red">UnApproved</span></a>
					@endif
				</td>
				<td class="text-center">
					<button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $comment->id }}" linkUrl="{{ route('comment.delete', ['id' => $comment->id])}}" data-table="table_test">
                        <i class="fa fa-fw fa-times-circle" ></i>
                    </button>
				</td>
			</tr>
			@endforeach
			
		</tbody>
		<div class="box-footer clearfix">
			<ul class="pagination pagination-sm no-margin pull-right">
				{{-- {{ $comments->links() }} --}}
			</ul>
		</div>
	</table>
</div>
<!-- /.box-body -->

</div>
@endsection
@section('script')
<script src="{{ asset('/admin-assets/js/admin-mytest.js') }}"></script>
@endsection