<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part1;
use App\Model\part;
use App\Model\Level;
use App\Model\Test;
use App\Model\Media;
use App\Http\Requests\Part1Request;

class Part1Controller extends Controller
{
    public function index()
    {
        $level = Level::all();
        $model = Part1::paginate(12);
        $test = Test::orderBy('id', 'desc')->get();
        return view('admin.question.part1', compact('level', 'test', 'model'));
    }

    public function delete(Request $request)
    {
    	$model = Part1::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function add(Part1Request $request)
    {
    	$media = part::mediaUpload($request);
        $part = new Part1();
		// save picture
        $part->fill($request->all());
        
        if($request->hasFile('picture')){
            // name picture
            $filename = uniqid(). "." . $request->file('picture')->getClientOriginalName('picture');
            // save media
            $path = $request->picture->storeAs('images/part1', $filename);
            $part->picture = $path;
        }

        $part->media_id = $media->id;
        $part->save();
        
        return redirect()->back()->with('msg', 'Create successfully!');
    }
}
