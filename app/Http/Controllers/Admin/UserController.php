<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $model = User::search()->orderBy('id', 'desc')
        				->paginate(12);            

    	return view('admin.user.index', compact('model'));
    }

    public function delete(Request $request)
    {
    	$model = User::find($request->id);
    	$model->delete();
    	return response()->json('Delete successfully!');
    }

    public function save(UserRequest $request)
    {
    	// dd($request->id);
    	if($request->id > -1) {
    		$user = User::findOrFail($request->id);
    		$user->update($request->all());
            $user->password = bcrypt($request->password);
    		$user->save();
    		return redirect()->back()->with('msg', 'successfully!');
    	}
    	$user = new User();
    	$user->fill($request->all());
    	$user->password =  bcrypt($request->password);
    	$user->save();
    	return redirect()->back()->with('msg', 'successfully!');
    }

    public function account()
    {
        return view('admin.user.account');
    }

    public function view(Request $request)
    {
        $user = User::findOrFail($request->id);

        return view('admin.user.view', compact('user'));
    }
}
