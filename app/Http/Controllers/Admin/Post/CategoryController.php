<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
    	$category = new Category();
    	$category->fill($request->all());
    	$category->save();
    	return response()->json('ok');
    }

    public function index(Request $request)
    {
    	if($request->search == "") {
    		$categories = Category::where('category_parent', 0)->paginate(12);
    	} else {
    		$categories = Category::where('name', 'link', '%'.$request->search.'%')->paginate(12)->appends($request->search);
    		dd($categories);
    	}
    	
    	return view('admin.guides.category', compact('categories'));
    }

    public function edit(Request $request)
    {
    	$categories = Category::where('category_parent', 0)->get();
    	if ($request->id == -1) {
    		return view('admin.guides.category.add', compact('categories'));
    	} 
    		
    	$category = Category::findOrFail($request->id);
    	return view('admin.guides.category.edit', compact('category', 'categories'));
    }

    public function save(Request $request)
    {
    	if ($request->id == -1) {
    		$category = new Category();
    	} else {
    		$category = Category::find($request->id);
    	}
    	$category->fill($request->all());
    	$category->save();

    	return redirect(route('post.category'));
    }

    public function delete(Request $request)
    {
    	$category = Category::find($request->id);
    	$category->delete();

    	return response()->json('Delete Successfully!');
    }
}
