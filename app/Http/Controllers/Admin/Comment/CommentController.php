<?php

namespace App\Http\Controllers\Admin\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentController extends Controller
{
    public function index(Request $request)
    {
    	$comments = Comment::paginate(12); 
    	// dd($comments);

    	return view('admin.comment.index', compact('comments'));
    }

    public function edit(Request $request)
    {
    	
    }

    public function delete(Request $request)
    {

    }
}
