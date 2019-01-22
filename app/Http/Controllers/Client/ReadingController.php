<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Part5;
use App\Model\Part6;
use App\Model\Part7;
use App\Model\Passage;
use App\Model\Level;

class ReadingController extends Controller
{
    public function index()
    {
    	return view('client.reading.index');
    }

    public function part5()
    {
        $part5s = Part5::groupBy('level_id')->get();

        return view('client.reading.part5.index', compact('part5s'));
    }

    public function part6()
    {
        $part6s = Part6::groupBy('level_id')->get();

        return view('client.reading.part6.index', compact('part6s'));
    }

    public function part7()
    {
        $part7s = Part7::groupBy('level_id')->get();

        return view('client.reading.part7.index', compact('part7s'));
    }

    public function part5test(Request $request)
    {
    	$part5s = Part5::where('level_id', $request->id)->take(10)->get();

        return view('client.reading.part5.test', compact('part5s'));
    }
}
