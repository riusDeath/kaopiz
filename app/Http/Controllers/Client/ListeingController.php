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
use App\Model\Media;
use App\Model\Passage;
use App\Model\Level;

class ListeingController extends Controller
{
    public function index()
    {
    	return view('client.listening.index');
    }

    public function part1()
    {
        $part1s = Part1::groupBy('level_id')->get();

        return view('client.listening.part1.index', compact('part1s'));
    }

    public function part2()
    {
        $part2s = Part2::groupBy('level_id')->get();

        return view('client.listening.part2.index', compact('part2s'));
    }

    public function part3()
    {
    	$part3s = Part3::groupBy('level_id')->get();

    	return view('client.listening.part3.index', compact('part3s'));
    }

    public function part1test(Request $request)
    {
        $part1s = Part1::where('level_id', $request->id)->take(10)->get();

        return view('client.listening.part1.test', compact('part1s'));
    }

    public function part2test(Request $request)
    {
        $part2s = Part2::where('level_id', $request->id)->take(10)->get();

        return view('client.listening.part2.test', compact('part2s'));
    }

    public function part3test(Request $request)
    {
        $medias = Level::find($request->id)->listMediaPart3();
        $part3s = [];
        foreach ($medias as $value) {
            $part3 = Part3::where('media_id', $value->id)->get();
            array_push($part3s, $part3);
        }
        
        return view('client.listening.part3.test', compact('medias', 'part3s'));
    }

}
