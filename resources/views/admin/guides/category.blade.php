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
		<h3 class="box-title">Category</h3>
	</div>
	<div class="col-md-3">
		<form action="" method="GET">
			<div class="box-tools">
				<div class="input-group input-group-sm" style="width: 200px; margin: 12px">
					<input type="text" name="search" class="form-control pull-right" placeholder="Search" value="{{ isset($search)?$search:"" }}">
		
					<div class="input-group-btn">
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					</div>
					<a href="{{ route('post.category.edit', ['id' => -1]) }}"></a>
				</div>
			</div>
		</form>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table class="table table-bordered table-hover" id="table_test">
			<tbody><tr>
				<th>index</th>
				<th>name</th>
				<th>slug</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($categories as $category)
			<tr>
				<td>{{ ($categories ->currentpage()-1) * $categories ->perpage() + $loop->index + 1 }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ $category->slug }}</td>
				<td>
					@if($category->status == 1)
					<span class="badge bg-red">Show</span>
					@else
					<span>Hide</span>
					@endif
				</td>
				<td class="text-center">
                    <a href="{{ route('post.category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-success">
                        <i class="fa fa-fw fa-edit"></i>
                    </a>
				</td>
				<td class="text-center">
					<button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $category->id }}" linkUrl="{{ route('post.category.delete', ['id' => $category->id])}}" data-table="table_test">
                        <i class="fa fa-fw fa-times-circle" ></i>
                    </button>
				</td>
			</tr>
			@foreach($category->category_child as $cat_ch)
                <tr>
                	<td></td>
				<td>{{ $cat_ch->name }}</td>
				<td>{{ $cat_ch->slug }}</td>
				<td>
					@if($cat_ch->status == 1)
					<span class="badge bg-red">Show</span>
					@else
					<span>Hide</span>
					@endif
				</td>
				<td class="text-center">
                    <a href="{{ route('post.category.edit', ['id' => $cat_ch->id]) }}" class="btn btn-sm btn-success">
                        <i class="fa fa-fw fa-edit"></i>
                    </a>
				</td>
				<td class="text-center">
					<button type="button" class="btn btn-sm btn-danger btn-remove"  data-id="{{ $cat_ch->id }}" linkUrl="{{ route('post.category.delete', ['id' => $cat_ch->id])}}" data-table="table_test">
                        <i class="fa fa-fw fa-times-circle" ></i>
                    </button>
				</td>
			</tr>
			@endforeach
			@endforeach
			
		</tbody>
		<div class="box-footer clearfix">
			<ul class="pagination pagination-sm no-margin pull-right">
				{{ $categories->links() }}
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