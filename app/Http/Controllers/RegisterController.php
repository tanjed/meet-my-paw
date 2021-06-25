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
            $user_name = $request->first_name . '~' . strtotime(Carbon::now()->format('h:i:s')) . rand(0, 9);
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_name' => $user_name,
                'type' => $request->type == 'pet_owner' ? "PET_OWNER" : "FUNDER",
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            UserProfile::create(['user_id' => $user->id]);
            Auth::login($user);
            return redirect('/');
        }
    }
}
