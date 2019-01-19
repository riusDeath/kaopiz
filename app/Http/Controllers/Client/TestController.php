<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Test;

class TestController extends Controller
{
    public function index()
    {
    	return view('client.contest');
    }

    public function fulltest()
    {
        $model = Test::where('status', '1')->paginate(12);
        return view('client.fulltest.index', compact('model'));
    }

    public function test(Request $request)
    {
    	$model = Test::findOrFail($request->id);
    	// dd(count($model->listMediaPart3()));
    	return view('client.fulltest.test', compact('model'));
    }
}
