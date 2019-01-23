<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', '<>', 2)->paginate(12);
        return view('admin.guides.index', compact('posts'));
    }

    public function add()
    {
    	$categories = Category::all();
    	$category_parents = Category::categoryParent();

    	return view('admin.guides.add', compact('categories', 'category_parents'));
    }

    public function create(PostRequest $request)
    {
    	$post = new Post();
    	$post->fill($request->all());
        if($request->hasFile('picture')){
            // name avatar
            $filename = uniqid(). "." . $request->file('picture')->getClientOriginalName('picture');
            // save media
            $path = $request->picture->storeAs('images/', $filename);
            $post->avatar = $filename;
        }
        $post->author = Auth::user()->id;

        $post->save();

    	return redirect(route('post.index'));
    }

    public function edit($id)
    {
        $model = Post::findOrFail($id);
        $categories = Category::orderBy('id')->get();
        $category_parents = Category::categoryParent();

        return view('admin.guides.edit', compact('model', 'categories', 'category_parents'));
    }

    public function update(PostRequest $request)
    {
        $postid = Post::findOrFail($request->id);
        $postid->status = 2;
        $postid->save();
        $post = new Post();
        $post->fill($request->all());
        if($request->hasFile('picture')){
            // name avatar
            $filename = uniqid(). "." . $request->file('picture')->getClientOriginalName('picture');
            // save media
            $path = $request->picture->storeAs('images/', $filename);
            $post->avatar = $filename;
        }
        $post->author = Auth::user()->id;

        $post->post_modified = $postid->id;

        $post->save();

        return redirect(route('post.index'));
    } 

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        return response()->json('Delete successfully!');
    }

    public function revision(Request $request)
    {
        $model = Post::findOrFail($request->id);
        return view('admin.guides.revision', compact('model'));
    }    

    public function restore(Request $request)
    {
        $model = Post::findOrFail($request->id);

        foreach ($model->Revisions() as $post_parent) {
            $parent = Post::where('status', '<>', 2)
                    ->where('post_modified', $post_parent->post_modified)
                    ->orWhere('id', $post_parent->post_modified)
                    ->orWhere('post_modified', $post_parent->id)
                    ->first();
            $parent->status = 2;
            $parent->save();
        }
        $model->updated_at = date('Y-m-d H:i:s');
        $model->status = 1;
        $model->save();

        return redirect(route('post.index'));
    }
}
