<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use App\Model\Comment;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function detail(Request $request)
    {
    	$model = Post::findOrFail($request->id);
  
        $comment_parents = $model->comments();
        $comment_childs = $model->comment_childs();

    	return view('client.post.detail', compact('model', 'comment_parents', 'comment_childs'));
    }

    public function category(Request $request)
    {
    	$category = Category::find($request->id);
        $mess = $category['name'];
        $ids = [];
        array_push($ids, $request->id);       
        $cat_con = Category::where('category_parent', $request->id)->get();

        if ($cat_con->count()) {
            foreach ( $cat_con as $con) {
                array_push($ids, $con->id);
            }
        }

        $posts = Post::where('status', '1')->whereIn('category_id', $ids)->paginate(12)->appends('category_id', $request->id);
        return view('index', compact('posts', 'mess'));
    }

    public function addcomment(Request $request)
    {

        $comment = Comment::create([
            'post_id' => $request->id,
            'content' => $request->content,
            'comment_parent' => isset($request->comment_parent)?$request->comment_parent:0,
            'user_id' => Auth::user()->id,
            'author' => Auth::user()->name,
        ]); 
        if(Auth::user()->role != 1) {
            $comment->satus = 1;
            $comment->save();
            return response()->json(compact('1'));
        } else {
            return response()->json(compact('0'));
        }
    }
}
