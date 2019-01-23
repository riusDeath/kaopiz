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
            $filename = $request->file('picture')->getClientOriginalName('picture');
            // save media
            $path = $request->picture->storeAs('images', $filename);
            $part->picture = $filename;
        }

        $part->media_id = $media->id;
        $part->save();
        
        return redirect()->back()->with('msg', 'Create successfully!');
    }

    public function edit(Request $request)
    {
        $level = Level::all();
        $part1 = Part1::findOrFail($request->id);
        $test = Test::orderBy('id', 'desc')->get();

        return view('admin.question.edit.part1', compact('level', 'test', 'part1'));
    }

    public function update(Request $request)
    {

        $part = Part1::findOrFail($request->id);
        $picture = $part->picture;
        $media_id = $part->media_id;
        // save picture
        $part->fill($request->all());
        
        if($request->hasFile('picture')){
            // name picture
            $filename = $request->file('picture')->getClientOriginalName('picture');
            // save media
            $path = $request->picture->storeAs('images', $filename);
            $part->picture = $filename;
        } else {
            $part->picture = $picture;
        }
        if ($request->hasFile('mediaFile')) {
            $media = part::mediaUpload($request);
            $part->media_id = $media->id;
        } else {
            $media = $media_id;
        }

        $part->save();

        return redirect(route('part1.index'));
    }
}
