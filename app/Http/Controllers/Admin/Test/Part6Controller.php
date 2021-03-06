<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part6;
use App\Model\Passage;
use App\Model\Test;
use App\Model\Level;

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
    	// dd($request->all());
    	$passage = new Passage();
    	// $passage->flll($request->all());
    	$passage->content = $request->content;

    	$passage->save();
    	foreach ($request->optionA as $key => $value) {
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

    public function index()
    {
        $level = Level::all();
        $model = Part6::paginate(12);
        $test = Test::orderBy('id', 'desc')->get();
        return view('admin.question.part6', compact('level', 'test', 'model'));
    }

    public function edit(Request $request)
    {
        $level = Level::all();
        $part6 = Part6::findOrFail($request->id);
        $test = Test::orderBy('id', 'desc')->get();
        $passage = Passage::find($part6->passage_id);
        $part6s = $passage->Part6;
        $index = 0;
        foreach ($part6s as $value) {
            if ($part6->id == $value->id) {
                return view('admin.question.edit.part6', compact('level', 'test', 'part6', 'index'));
            } 
            $index++;
        }
    }

    public function update(Request $request)
    {

        $part = Part6::findOrFail($request->id);
        $part->fill($request->all());
        $part->save();

        return redirect(route('part6.index'));
    }
}
