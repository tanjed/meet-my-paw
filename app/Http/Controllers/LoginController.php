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
        switch ($request->login_as){
            case 'pet_seekers' :
                $guard = 'pet_seekers';
                break;
            default :
                $guard = 'pet_owners';
                break;
        }
        if (Auth::guard($guard)->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->to('/');
        } else {
            return back()->withInput($request->only('email', 'remember'))->with('failed', 'Invalid email or password.');
        }
    }

    public function logout(Request $request)
    {
       \Illuminate\Support\Facades\Auth::logout();

        return redirect()->to('/login');
    }
}
