<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part4;
use App\Model\Level;
use App\Model\Test;
use App\Model\part;

class Part4Controller extends Controller
{
    public function delete(Request $request)
    {
    	$model = Part4::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function add(Request $request)
    {

    	$model = part::mediaUpload($request);

    	foreach ($request->question as $key => $value) {
    		$part4 = new part4();
    		$part4->media_id = $model->id;
    		$part4->test_id = $request->test_id;
    		$part4->level_id = $request->level_id;
    		$part4->question = $value;
    		$part4->optionA = $request->optionA[$key];
    		$part4->optionB = $request->optionB[$key];
    		$part4->optionC = $request->optionC[$key];
    		$part4->optionD = $request->optionD[$key];
    		$part4->answer = $request->answer[$key];
    		$part4->save();
    	}

        return redirect()->back()->with('msg', 'Create successfully!');
    }

    public function index()
    {
        $level = Level::all();
        $model = Part4::paginate(12);
        $test = Test::orderBy('id', 'desc')->get();
        return view('admin.question.part4', compact('level', 'test', 'model'));
    }

    public function edit(Request $request)
    {
        $level = Level::all();
        $part4 = Part4::findOrFail($request->id);
        $test = Test::orderBy('id', 'desc')->get();

        return view('admin.question.edit.part4', compact('level', 'test', 'part4'));
    }

    public function update(Request $request)
    {

        $part = Part4::findOrFail($request->id);
        $media_id = $part->media_id;
        // save picture
        $part->fill($request->all());
       
        $part->media_id = $media_id;

        $part->save();

        return redirect(route('part4.index'));
    }
}
