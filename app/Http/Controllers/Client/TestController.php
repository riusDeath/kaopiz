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
    	// dd($model->listMediaPart4());
    	return view('client.fulltest.test', compact('model'));
    }

    public function result(Request $request)
    {
        $model = Test::find($request->id);
        $answer = [];
        foreach ($model->part1 as $part1) {
            array_push($answer, $part1->answer);
        }
        foreach ($model->part2 as $part2) {
            array_push($answer, $part2->answer);
        }
        foreach ($model->part3 as $part3) {
            array_push($answer, $part3->answer);
        }
        foreach ($model->part4 as $part4) {
            array_push($answer, $part4->answer);
        }
        foreach ($model->part5 as $part5) {
            array_push($answer, $part5->answer);
        }
        foreach ($model->part6 as $part6) {
            array_push($answer, $part6->answer);
        }
        foreach ($model->part7 as $part7) {
            array_push($answer, $part7->answer);
        }
        return response()->json(compact('answer'));
    }
}
