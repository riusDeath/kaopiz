<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part7;
use App\Model\Level;
use App\Model\Test;
use App\Model\Passage;

class Part7Controller extends Controller
{
    public function delete(Request $request)
    {
    	$model = Part7::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function add(Request $request)
    {
    	// dd($request->all());
    	$passage = new Passage();
    	// $passage->flll($request->all());
    	$passage->content = $request->content;

    	$passage->save();
    	foreach ($request->optionA as $key => $value) {
    		$part7 = new Part7();
    		$part7->passage_id = $passage->id;
    		$part7->test_id = $request->test_id;
    		$part7->level_id = $request->level_id;
    		$part7->optionA = $value;
    		$part7->question = $request->question[$key];
    		$part7->optionB = $request->optionB[$key];
    		$part7->optionC = $request->optionC[$key];
    		$part7->optionD = $request->optionD[$key];
    		$part7->answer = $request->answer[$key];
    		$part7->save();
    	}

        return redirect()->back()->with('msg', 'Create successfully!');
    }

    public function index()
    {
        $level = Level::all();
        $model = Part7::paginate(12);
        $test = Test::orderBy('id', 'desc')->get();
        return view('admin.question.part7', compact('level', 'test', 'model'));
    }

    public function edit(Request $request)
    {
        
    }
}
