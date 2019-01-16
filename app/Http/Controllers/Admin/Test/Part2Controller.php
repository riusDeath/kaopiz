<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part2;
use App\Model\part;
use App\Model\Level;
use App\Model\Test;

class Part2Controller extends Controller
{
    public function add(Request $request)
    {
    	$model = part::mediaUpload($request);
    	$part = new Part2();
        $part->fill($request->all());
        $part->media_id = $model->id;
        $part->save();
        
        return redirect()->back()->with('msg', 'Create successfully!');
    }

    public function delete(Request $request)
    {
    	$model = Part2::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function index()
    {
        $level = Level::all();
        $model = Part2::paginate(12);
        $test = Test::orderBy('id', 'desc')->get();
        return view('admin.question.part2', compact('level', 'test', 'model'));
    }
    
}
