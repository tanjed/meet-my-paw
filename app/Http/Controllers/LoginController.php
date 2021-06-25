<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:pet_owner')->except('logout');
        $this->middleware('guest:funder')->except('logout');
    }
    public function loginView()
    {

        return view('authentication.login');
    }

    public function authLogin(Request $request)
    {
        //    return $request->all();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->to('/');
        } else {
            return back()->withInput($request->only('email', 'remember'))->with('failed', 'Login Error, Use Valid Credentials!');
        }
    }

    public function logout(Request $request)
    {
       \Illuminate\Support\Facades\Auth::logout();

        return redirect()->to('/login');
    }
}
