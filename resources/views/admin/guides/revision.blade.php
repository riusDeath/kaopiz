@extends('layouts.admin.admin-master')
@section('title', 'post.revision')
@section('content')
<section class="content">
        <div class="callout callout-info">
          <h4>Revision last by {{ $model->getauthor['name'] }}</h4>
      	</div>
      	<ul class="timeline">
      		@foreach($model->Revisions() as $post_parent)
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    {{ $post_parent->created_at }}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>

              <div class="timeline-item">
               <div class="box">
				<div class="wp-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 100px;"><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span></div>
	        <div class="box-header with-border">
	          	<h3 class="box-title">Title:  </h3>
				<p>{{ $post_parent->title }}</p>
		        <div class="box-tools pull-right" >
		            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
		              <i class="fa fa-plus"></i></button>
		            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
		              <i class="fa fa-times"></i></button>
		          </div>
		    </div>
	        <div class="box-body" style="display: none">
	          	{!! $post_parent->content !!}
	        </div>
      		</div>
      		<div class="timeline-footer">
      			@if($post_parent->status == 2)
                  <a href="{{ route('post.restore', ['id' => $post_parent->id]) }}" class="btn btn-primary btn-xs">Restore editor</a>
                </div>
                @endif
              </div>
            </li>
            <!-- END timeline item -->
			@endforeach
          </ul>
      
</section>
@endsection
@section('script')
@endsection