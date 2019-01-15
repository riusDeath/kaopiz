<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part3;

class Part3Controller extends Controller
{
    public function delete(Request $request)
    {
    	$model = Part3::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }
}
