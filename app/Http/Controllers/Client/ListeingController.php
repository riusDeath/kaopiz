<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part1;
use App\Model\Level;

class ListeingController extends Controller
{
    public function index()
    {
    	return view('client.listening.index');
    }

    public function part1()
    {
    	$levels = Level::all();

    	return view('client.listening.part1.index', compact('levels'));
    }

    public function part1test(Request $request)
    {
    	$part1s = Part1::where('level_id', $request->id)->take(10)->get();

    	return view('client.listening.part1.test', compact('part1s'));
    }

    public function part1test(Request $request)
    {
    	$part2s = Part2::where('level_id', $request->id)->take(10)->get();

    	return view('client.listening.part2.test', compact('part2s'));
    }
}
