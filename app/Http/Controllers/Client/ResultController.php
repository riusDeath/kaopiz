<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part1;
use App\Model\Part2;
use App\Model\Part3;
use App\Model\Part4;
use App\Model\Part5;
use App\Model\Part6;
use App\Model\Part7;

class ResultController extends Controller
{
    public function result(Request $request)
    {
    	$part = $request->part;
    	$id = $request->id;
    	
    	if ($part == "part1") {
    		$part = Part1::find($id);
    		$answer = $part->answer;
    		return response()->json(compact('answer'));
    	} else if ($part == "part2") {
    		$part = Part2::find($id);
    		return response()->json(compact('answer'));
    	} else if ($part == "part3") {
    		$part3 = Part3::where('media_id', $id)->get();
    		$answers = [];
    		foreach ($part3 as $value) {
    			array_push($answers, $value->answer);
    		}

    		return response()->json(compact('answers'));
    	} else if ($part == "part4") {
    		$part4 = Part4::where('media_id', $id)->get();
    		$answers = [];
    		foreach ($part4 as $value) {
    			array_push($answers, $value->answer);
    		}

    		return response()->json(compact('answers'));
    	} else  if ($part == "part5") {
    		$part = Part5::find($id);
    		$answer = $part->answer;
    		return response()->json(compact('answer'));
    	} else if ($part == "part6") {
    		$part6 = Part6::where('passage_id', $id)->get();
    		$answers = [];
    		foreach ($part6 as $value) {
    			array_push($answers, $value->answer);
    		}

    		return response()->json(compact('answers'));
    	} else {
    		$part7 = Part7::where('passage_id', $id)->get();
    		$answers = [];
    		foreach ($part7 as $value) {
    			array_push($answers, $value->answer);
    		}

    		return response()->json(compact('answers'));
    	}
    	
    }
}
