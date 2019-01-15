<?php

namespace App\Http\Controllers\Admin\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Test;
use App\Model\Part1;
use App\Model\Level;

class TestController extends Controller
{
    public function index(Request $request)
    {
    	$search = isset($request->search)?$request->search:"";
    	$test = Test::search($search)->orderBy('updated_at')->orderBy('id')->paginate(12)->appends(['search'=> $search]);

    	return view('admin.test.index', compact('test'));
    }

    public function create()
    {
    	return view('admin.test.create');
    }

    /**
     * Update and Create new test
     * @author ThuyVu
     * @date 12/01/2019
     * @param $id - id test 
     * @return json result  | view list test
     */
    public function save(Request $request)
    {
        if($request->ajax()) {
        	if (isset($request->id) && $request->id > -1) {
        		$model = Test::find($request->id);
                if (!$model) {
                    return response()->json("404 Not found Test");
                }

        		$model->fill($request->all());
        		$model->save();

        		return response()->json("Update successfully!");
        	} else {
            	Test::create($request->all());
            	return  response()->json("create successfully!");
            }
        }
        else {
            Test::create($request->all());
            return  redirect(route('test.index'));
        }
    }

    public function delete(Request $request)
    {
        $model = Test::find($request->id);

        if ($model != null) {
            $model->delete();
            return response()->json("delete successfully!");
        } 

        return response()->json("Error!");
    }

    public function view(Request $request)
    {
        $model = Test::findOrFail($request->id);
        $level = Level::all();

        return view('admin.test.view', compact('model', 'level'));
    }

}
