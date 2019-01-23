<?php

namespace App\Http\Controllers\Admin\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentController extends Controller
{
    public function index(Request $request)
    {
    	$tablecomments = Comment::orderBy('status')->orderBy('id', 'desc')->paginate(12); 
    	// dd($comments);

    	return view('admin.comment.index', compact('tablecomments'));
    }

    public function edit(Request $request)
    {
    	$comment = Comment::findOrFail($request->id);

    	if ($comment->status == 1) {
    		$comment->status = 0;
    	} else {
    		$comment->status = 1;
    	}

    	$comment->save();
    	return redirect()->back();
    }

    public function delete(Request $request)
    {
		$comment = Comment::findOrFail($request->id);
		$comment->delete();
		return redirect()->back();
    }
}
