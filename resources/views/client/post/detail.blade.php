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
<section class="about-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-12">
				<div class="about-text">
					<h3> <span>{{ $model->title }}</span></h3>

					<h5>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h5>

					<p>{!! $model->content !!}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="about-slider owl-carousel owl-theme owl-responsive--1 owl-loaded">
					<div class="owl-stage-outer">
							<div class="item">
								<img src="images/{{ $model->avatar }}" alt="about">
							</div>
					</div>	
				</div>
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
								<img alt="" src="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=100&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=200&amp;d=mm&amp;r=g 2x" class="avatar avatar-100 photo" height="100" width="100">						
								<b class="fn"><a href="https://wordpress.org/" rel="external nofollow" class="url">Một người bình luận WordPress</a></b> <span class="says">says:</span>					
							</div><!-- .comment-author -->
							<div class="comment-metadata">
									<a href="http://localhost:8888/wordpress/2018/12/06/chao-moi-nguoi/#comment-1">
										<time datetime="2018-12-06T09:04:42+00:00">
										6 December, 2018 at 9:04 am							</time>
									</a>
									<span class="edit-link"><a class="comment-edit-link" href="http://localhost:8888/wordpress/wp-admin/comment.php?action=editcomment&amp;c=1">Edit</a></span>					</div><!-- .comment-metadata -->

						</footer>
						<!-- .comment-meta -->
						<div class="comment-content">
							<p>
								<br>Hello, this is a comment
									To get started with the comment administrator, edit or delete comments,<br> please visit the Comments area in the admin page.Xin chào, đây là một bình luận<br>
								<a href="https://gravatar.com">Gravatar</a>.
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
				<form action="http://localhost:8888/wordpress/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
					<p class="logged-in-as">
						<a href="http://localhost:8888/wordpress/wp-admin/profile.php" aria-label="Logged in as thuyvu. Edit your profile.">Logged in as thuyvu</a>. 
						<a href="http://localhost:8888/wordpress/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Flocalhost%3A8888%2Fwordpress%2F2018%2F12%2F06%2Fchao-moi-nguoi%2F&amp;_wpnonce=cce4fe4c21">Log out?</a>
					</p>
					<p class="comment-form-comment">
						<label for="comment">Comment</label> 
						<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
					</p>
					<p class="form-submit">
						<input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
						<input type="hidden" name="comment_parent" id="comment_parent" value="0">
					</p>
					<input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="7e197f4b1b"><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
				</form>
			</div>
			<!-- #respond -->
		</div>
	</div>
</section>
@endsection