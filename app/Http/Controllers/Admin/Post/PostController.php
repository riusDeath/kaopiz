<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(12);
        return view('admin.giudes.index', compact('posts'));
    }

    public function add()
    {
    	$categories = Category::orderBy('id')->get();
    	$category_parents = Category::categoryParent();

    	return view('admin.guides.add', compact('categories', 'category_parents'));
    }

    public function create(Request $request)
    {
    	$post = new Post();
    	$post->fill($request->all());
        if($request->hasFile('avatar')){
            // name avatar
            $filename = uniqid(). "." . $request->file('avatar')->getClientOriginalName('avatar');
            // save media
            $path = $request->picture->storeAs('images/', $filename);
            $post->avatar = $path;
        }

        $post->save();

    	return redirect()->back();
    }

    public function edit(Request $request)
    {
        $post = Post::findOrFail($request->id);

        return view('admin.giudes.edit', compact('post'));
    }
}
