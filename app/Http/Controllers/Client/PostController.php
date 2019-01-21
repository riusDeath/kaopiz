<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;

class PostController extends Controller
{
    public function detail(Request $request)
    {
    	$model = Post::findOrFail($request->id);

    	return view('client.post.detail', compact('model'));
    }
}
