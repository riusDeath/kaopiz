<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Test;
use App\Model\Post;
use App\Model\Comment;

class DashboardController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	$tests = Test::all();
    	$posts = Post::all();
    	$tbcomments = Comment::all();

    	return view('admin.dashboard', compact('users', 'tests', 'posts', 'tbcomments'));
    }
}
