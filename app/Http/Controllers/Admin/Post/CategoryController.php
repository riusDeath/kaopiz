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
}
