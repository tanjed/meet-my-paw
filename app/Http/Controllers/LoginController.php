<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;

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
        $guard = detectGuard($request->login_as);
        if (Auth::guard($guard)->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            Session::put('guard',$guard);
            return redirect()->to('/');
        } else {
            return back()->withInput($request->only('email', 'remember'))->with('failed', 'Invalid email or password.');
        }
    }

    public function logout($guard,Request $request)
    {
        $guard = detectGuard($guard);
       \Illuminate\Support\Facades\Auth::guard($guard)->logout();

        return redirect()->to('/login');
    }
}
