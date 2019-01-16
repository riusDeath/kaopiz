<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part6;
use App\Model\Passage;

class Part6Controller extends Controller
{
    public function delete(Request $request)
    {
    	$model = Part6::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function add(Request $request)
    {
    	$passage = new Passage();
    	$passage->flll($request->all());

    	$passage->save();
    	foreach ($optionA as $key => $value) {
    		$part6 = new Part6();
    		$part6->passage_id = $passage->id;
    		$part6->test_id = $request->test_id;
    		$part6->level_id = $request->level_id;
    		$part6->optionA = $value;
    		$part6->optionB = $request->optionB[$key];
    		$part6->optionC = $request->optionC[$key];
    		$part6->optionD = $request->optionD[$key];
    		$part6->answer = $request->answer[$key];
    		$part6->save();

    	}

        return redirect()->back()->with('msg', 'Create successfully!');
    }
}
