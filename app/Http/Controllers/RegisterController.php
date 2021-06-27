<?php

namespace App\Http\Controllers;

use App\Funder;
use App\PetOwner;
use App\User;
use App\UserProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function registerView()
    {
        return view('authentication.register');
    }
    protected function createAuth(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'first_name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = getUserModelFromGuard($request->type);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->user_name = generateUserName($request->first_name);
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->profile->create([
                'user_id' => $user->id,
                'profile_pic' => '',
                'cover_pic' => ''
            ]);
            Auth::guard(detectGuard($request->type))->login($user);
            return redirect('/');
        }
    }
}
