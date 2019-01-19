<?php

namespace App\Http\Controllers\Admin\Guides;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrammarGuidesController extends Controller
{
    public function index()
    {
    	return view('admin.guides.index');
    }
}
