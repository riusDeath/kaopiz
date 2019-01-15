<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part2;
use App\Model\part;

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
    
}
