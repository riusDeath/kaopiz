<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\part;
use App\Model\Part5;
use App\Model\Level;
use App\Model\Test;

class Part5Controller extends Controller
{
    public function delete(Request $request)
    {
    	$model = Part5::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function add(Request $request)
    {
        $part5 = new Part5();
        $part5->fill($request->all());
        $part5->save();

        return redirect()->back()->with('msg', 'Create successfully!');
    }

    public function index()
    {
        $level = Level::all();
        $model = Part5::paginate(12);
        $test = Test::orderBy('id', 'desc')->get();
        return view('admin.question.part5', compact('level', 'test', 'model'));
    }

    public function edit(Request $request)
    {
        $level = Level::all();
        $part5 = Part5::findOrFail($request->id);
        $test = Test::orderBy('id', 'desc')->get();

        return view('admin.question.edit.part5', compact('level', 'test', 'part5'));
    }

    public function update(Request $request)
    {

        $part = Part5::findOrFail($request->id);
        $part->fill($request->all());
        $part->save();

        return redirect(route('part5.index'));
    }
}
