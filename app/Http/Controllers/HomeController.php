<?php

namespace App\Http\Controllers;

use App\Funder;
use App\PetOwner;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('news_feed.news_feed');
    }
    public function profile($user_name)
    {
       $user = User::where('user_name',$user_name)->first();
        return view('profile.profile')->with('user',$user);
    }

    public function editProfile()
    {
        $user =  Auth::user();
        return view('profile.edit_profile')->with('user', $user);
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();
        UserProfile::where('user_id', $user->id)
            ->update([
                'phone' => $request->phone,
                'address' => $request->address,
                'bio' => $request->bio,
                'city' => $request->city,
                'country' => $request->country,
                'profile_pic' => $request->hasFile('profile_pic') ?
                    $this->uploadImage($request->file('profile_pic'),'/images/user/profile_pic') : '',
                'cover_pic' => $request->hasFile('cover_pic') ?
                    $this->uploadImage($request->file('cover_pic'),'/images/user/cover_pic') : '',

            ]);
        return redirect()->route('show.profile',['user_name' => $user->user_name]);
    }

    private function uploadImage($image,$directory)
    {
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path($directory);
        $image->move($destinationPath, $image_name);
        return $image_name;
    }
}
