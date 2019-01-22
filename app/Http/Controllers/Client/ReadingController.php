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

    public function part6test(Request $request)
    {
    	$passages = Level::find($request->id)->listPassagePart6();
        $part6s = [];
		foreach ($passages as $value) {
            $part6 = Part6::where('passage_id', $value->id)->get();
            array_push($part6s, $part6);
        }

        return view('client.reading.part6.test', compact('passages', 'part6s'));

    }

    public function part7test(Request $request)
    {
		$passages = Level::find($request->id)->listPassagePart7();
        $part7s = [];
		foreach ($passages as $value) {
            $part7 = Part7::where('passage_id', $value->id)->get();
            array_push($part7s, $part7);
        }

        return view('client.reading.part7.test', compact('passages', 'part7s'));
    }
}
