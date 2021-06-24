<?php

namespace App\Http\Controllers;

use App\Funder;
use App\PetOwner;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

        // dd($request->all());
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
            if ($request['type'] == 'pet_owner') {
                $user = PetOwner::where('email', $request->email)->first();
                if ($user) {
                    return back()->with('failed', "Email is already taken. ");
                } else {
                    $uuid = (string) Uuid::generate();
                    $user_name = $request['first_name'] . '~' . strtotime(Carbon::now()->format('h:i:s')) . rand(0, 9);
                    $pet_owner  = new PetOwner();
                    $pet_owner->first_name = $request['first_name'];
                    $pet_owner->last_name = $request['last_name'];
                    $pet_owner->user_name = $user_name;
                    $pet_owner->uuid = $uuid;
                    $pet_owner->user_role = 'Pet Owner';
                    $pet_owner->email = $request['email'];
                    $pet_owner->password = Hash::make($request['password']);
                    $pet_owner->save();
                    return redirect()->to('/login');
                }
            } else {
                $user = PetOwner::where('email', $request->email)->first();
                if ($user) {
                    return back()->with('failed', "Email is already taken. ");
                } else {
                    $uuid = (string) Uuid::generate();
                    $user_name = $request['first_name'] . '~' . strtotime(Carbon::now()->format('h:i:s')) . rand(0, 9);
                    $funder  = new Funder();
                    $funder->first_name = $request['first_name'];
                    $funder->last_name = $request['last_name'];
                    $funder->user_name = $user_name;
                    $funder->uuid = $uuid;
                    $funder->user_role = 'Funder';
                    $funder->email = $request['email'];
                    $funder->password = Hash::make($request['password']);
                    $funder->save();
                    return redirect()->to('/login');
                }
            }
        }
    }
}
