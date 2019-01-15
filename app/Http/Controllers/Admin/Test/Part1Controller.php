<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part1;
use App\Model\Media;
use App\Http\Requests\Part1Request;

class Part1Controller extends Controller
{
    public function delete(Request $request)
    {
    	$model = Part1::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function add(Part1Request $request)
    {
    	// dd($request->all());
    	$media = new Media();
    	$media->fill($request->all());

    	// save media
        if($request->hasFile('mediaFile')){
            // name media
            $filename = uniqid(). "." . $request->mediaFile->extension();
            // save media
            $path = $request->mediaFile->storeAs('medias/part1', $filename);
            $media->mediaFile = $path;
        }
        $media->save();

        $part = new Part1();
		// save picture
        if($request->hasFile('picture')){
            // name picture
            $filename = uniqid(). "." . $request->picture->extension();
            // save media
            $path = $request->picture->storeAs('images/part1', $filename);
            $part->picture = $path;
        }

        $part->media_id = $media->id;
        $part->test_id = '1';
        $part->answer = $request->answer ;
        // $part->fill($request->all());
        $part->save();
        
        return redirect()->back()->with('msg', 'Create successfully!');
    }
}