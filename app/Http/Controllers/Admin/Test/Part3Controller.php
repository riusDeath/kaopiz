<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part3;
use App\Model\part;
use App\Model\Level;
use App\Model\Test;

class Part3Controller extends Controller
{
    public function delete(Request $request)
    {
    	$model = Part3::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function add(Request $request)
    {

    	$model = part::mediaUpload($request);

    	foreach ($request->question as $key => $value) {
    		$part3 = new Part3();
    		$part3->media_id = $model->id;
    		$part3->test_id = $request->test_id;
    		$part3->level_id = $request->level_id;
    		$part3->question = $value;
    		$part3->optionA = $request->optionA[$key];
    		$part3->optionB = $request->optionB[$key];
    		$part3->optionC = $request->optionC[$key];
    		$part3->optionD = $request->optionD[$key];
    		$part3->answer = $request->answer[$key];
    		$part3->save();
    		echo $part3;
    	}

        return redirect()->back()->with('msg', 'Create successfully!');
    }

    public function index()
    {
        $level = Level::all();
        $model = Part3::paginate(12);
        $test = Test::orderBy('id', 'desc')->get();
        return view('admin.question.part3', compact('level', 'test', 'model'));
    }

    public function edit(Request $request)
    {
        $level = Level::all();
        $part3 = Part3::findOrFail($request->id);
        $test = Test::orderBy('id', 'desc')->get();

        return view('admin.question.edit.part3', compact('level', 'test', 'part3'));
    }

    public function update(Request $request)
    {

        $part = Part3::findOrFail($request->id);
        $media_id = $part->media_id;
        // save picture
        $part->fill($request->all());
       
        $part->media_id = $media_id;

        $part->save();

        return redirect(route('part3.index'));
    }
}
