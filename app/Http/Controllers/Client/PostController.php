<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;

class PostController extends Controller
{
    public function detail(Request $request)
    {
    	$model = Post::findOrFail($request->id);

    	return view('client.post.detail', compact('model'));
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
}
