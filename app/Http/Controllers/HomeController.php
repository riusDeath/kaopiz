<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Model\Test;
use App\Model\User;

class HomeController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function postlogin(LoginRequest $request)
    {
    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

    		return redirect(route('dashboard'));
    	}
    	return view('login')->width('mess', 'Error email or password');
    }

    public function index()
    {
        return view('index');
    }

    
}
