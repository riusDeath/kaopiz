@extends('layouts.master')
@section('title', 'contest')
@section('style')
@endsection
@section('content')
<div class="page-title">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<h3>Welcome To </h3>
			</div>
		</div>
	</div>
</div>
<section class="">
	<div class="container" style="margin-top:20px">
		<div class="row">
			<div class="col-lg-9 col-md-12">
				<div class="about-text">
					<h3> <span>{{ $model->title }}</span></h3>

					<h5>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h5>

					<p>{!! $model->content !!}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				
			</div>
		</div>
	</div>
</section>
<section class="teacher-area ptb-100">
	<div class="container">
		<div id="comments" class="comments-area">

			<h2 class="comments-title">
				One Reply to “Chào tất cả mọi người!”		
			</h2>
			<ol class="comment-list">
				<li id="comment-1" class="comment even thread-even depth-1">
					<article id="div-comment-1" class="comment-body">
						<footer class="comment-meta">
							<div class="comment-author vcard">
								<i class="icofont-teacher"></i>						
								<span class="says">says:</span>					
							</div><!-- .comment-author -->
							<div class="comment-metadata">
									<a href="http://localhost:8888/wordpress/2018/12/06/chao-moi-nguoi/#comment-1">
										<time datetime="2018-12-06T09:04:42+00:00">
										6 December, 2018 at 9:04 am
										</time>
									</a>
									<span class="edit-link"><a class="comment-edit-link" href="http://localhost:8888/wordpress/wp-admin/comment.php?action=editcomment&amp;c=1">Edit</a></span>
							</div><!-- .comment-metadata -->
						</footer>
						<!-- .comment-meta -->
						<div class="comment-content">
							<p>
								<br>Hello, this is a comment
									To get started with the comment administrator, edit or delete comments,<br> please visit the Comments area in the admin page.<br>
							</p>
						</div>
						<!-- .comment-content -->
						<div class="reply">Reply</div>
					</article>
					<!-- .comment-body -->
				</li>
				<!-- #comment-## -->
			</ol>
			<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress/2018/12/06/chao-moi-nguoi/#respond" style="display:none;">Cancel reply</a></small></h3>			
				<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                    <div class="form-add-tags">
                        <div class="input-box">
                            <label for="productTagName"> </label>
                           
                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            @if(Auth::check())
                            <div class="form-group">
                                <textarea placeholder="enter comment" rows="5" maxlength="300" type="text" height="100%" data-id="{{ $model->id }}" name="comment" style="border-radius: 20px" class="form-control text-comment"></textarea>
                            </div>
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            @endif
                            @if(Auth::check())
                            <button type="button" href="{{ route('post.comment.add', ['id' => $model->id]) }}" class="next-btn next-btn-primary next-btn-medium qna-ask-btn" data-id = "{{ $model->id }}" class="btn_comment">Comment</button>
                            @else
                            <a href="{{ route('login') }}">
                            Please sign in for further interaction                              
                            </a>
                            @endif
                        </div>
                    </div>
				</form>
				<div class="show-comment" style="margin: 10px;  padding: 10px">
                            <div class="comment_parent scroll table_comment">
                                @foreach($comment_parents as $comment)
                                @if($comment->comment_parent == 0)
                                <div class="media " data-spy="scroll">
                                    <div class="media-body">
                                        <h4 class="media-heading">{{  $comment->author  }}</h4>
                                        <p>{{ $comment->content }}</p>
                                    </div> 
                                    @if (Auth::check())
                                    <button style="button" class="reply" comment_id = "{{ $comment->id }}">
                                    	<i class="glyphicon glyphicon-pencil">Reply</i>
                                    </button>
                                    @endif    
                                    <div style="display: none" class="replies{{ $comment->id }} container comment_child{{ $comment->id }}" style="border: 1px solid #726460;">
                                        <form action="" method="POST" role="form" class="form-inline container">
                                            <div class="form-group">
                                                <textarea placeholder="Reply" rows="5" maxlength="300" type="text" height="100%" data-id="{{ $model->id }}" name="comment" style="border-radius: 20px" class="form-control comment{{ $comment->id }}"></textarea>
                                            </div>                       
                                            <button href="{{ route('post.comment.add', ['id' => $model->id]) }}"  type="button" class="btn btn-primary reply_comment" comment_id="{{ $comment->id }}">Send</button>
                                        </form>
                                        @foreach ($comment_childs as $reply)
                                        @if($reply->comment_parent == $comment->id)
                                        <div class="media-body ">
                                            <h4 class="media-heading">  {{ $reply->author }}</h4>
                                            <p>{{ $reply->content }}</p>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>

                                </div>
                                @endif
                                @endforeach
                            </div>
                        <div>
                            {{ $comment_parents->links() }}
                        </div>  
                    </div>
			</div>
			<!-- #respond -->
		</div>
	</div>
</section>
@endsection
@section('script')
<script>
$(document).ready(function(){
    var href = $('.qna-ask-btn').attr('href');
     $(document).on('click', '.qna-ask-btn',function(e){
            var comment = $('.text-comment').val();
            console.log(comment);
            $.ajax({
                url : href,
                type : "GET",
                dataType : 'JSON',
                data: {'content' : comment },
                success: function(res) {
                    if(res == 1) {
                        $('.table_comment').load(location.href + ' .table_comment>*');
                    } else {
                        $('.text-comment').val("");
                        alert('Comments are pending approval! ');
                    }
                }
        });
    });
    
    $(document).on('click', '.reply',function(e){
        var id = $(this).attr('comment_id');
        var replies = '.replies'+id;
        $(replies).toggle();
    });

    $(document).on('click', '.reply_comment', function(){
        var comment_id = $(this).attr('comment_id');
        var com = '.comment'+comment_id;
        var comment_child = '.comment_child'+comment_id;
        var comment = $(com).val();
        $.ajax({
            url : href,
            type : "GET",
            data : {'content' : comment, 'comment_parent' : comment_id},
            success: function(res){
                if(res == 1) {
                    $('.table_comment').load(location.href + ' .table_comment>*');
                } else {
                    $('.text-comment').val("");
                    alert('Comments are pending approval! ');
                }
            }
        });
    });

    $(document).on('click', '.delete_comment', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        alert(href);
        var del = confirm('Bạn muốn xóa comment ');
        if (del) {
            $.ajax({
                url: href,              
                type: 'GET',
                success:function(res){
                    if(res == 'ok'){
                        $('.table_comment').load(location.href + ' .table_comment>*');
                    } 
                }
            });
        } 
    });
});
</script>
@endsection