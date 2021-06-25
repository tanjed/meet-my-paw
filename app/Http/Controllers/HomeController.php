<?php

namespace App\Http\Controllers;

use App\Funder;
use App\PetOwner;
use App\UserProfile;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('news_feed.news_feed');
    }
    public function profile()
    {
        if (Auth::guard('pet_owner')->check()) {
            $user = UserProfile::where('user_id',Auth::guard('pet_owner')->user()->id)->first();
            if(!$user){
                $user =  Auth::guard('pet_owner')->user();
            }
        } elseif (Auth::guard('funder')->check()) {
            $user = UserProfile::where('user_id',Auth::guard('funder')->user()->id)->first();
            if(!$user){
             $user =  Auth::guard('funder')->user();
            }
        }
        return view('profile.profile')->with('user',$user);
    }

    public function editProfile()
    {
        if (Auth::guard('pet_owner')->check()) {
            $user = UserProfile::where('user_id',Auth::guard('pet_owner')->user()->id)->first();
            if(!$user){
                $user =  Auth::guard('pet_owner')->user();
            }
        } elseif (Auth::guard('funder')->check()) {
            $user = UserProfile::where('user_id',Auth::guard('funder')->user()->id)->first();
            if(!$user){
             $user =  Auth::guard('funder')->user();
            }
        }
        return view('profile.edit_profile')->with('user', $user);
    }

    public function updateProfile(Request $request, $id)
    {
        if (Auth::guard('pet_owner')->check()) {
            // return $request->all();
            $pet_owner = PetOwner::where('id', $id)->first();
            $pet_owner->first_name = $request->first_name;
            $pet_owner->last_name = $request->last_name;
            $pet_owner->email = $request->email;
            $pet_owner->save();
            // return $pet_owner;
            $user_data = UserProfile::where('user_id', $pet_owner->id)->first();
            if ($user_data) {
                $user_data->first_name = $pet_owner->first_name;
                $user_data->last_name = $pet_owner->last_name;
                $user_data->email = $pet_owner->email;
                $user_data->phone = $request['phone'];
                $user_data->bio = $request['bio'];
                $user_data->city = $request['city'];
                $user_data->country = $request['country'];
                $user_data->address = $request['address'];
                $user_data->user_name = $pet_owner->user_name;
                $user_data->uuid = $pet_owner->uuid;
                $user_data->user_role = $pet_owner->user_role;
                $user_data->user_id = $pet_owner->id;
                if ($request->hasFile('profile_pic')) {
                    $image = $request->file('profile_pic');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/user/profile_pic');
                    $image->move($destinationPath, $image_name);
                    $user_data->profile_pic = $image_name;
                }
                if ($request->hasFile('cover_pic')) {
                    $image2 = $request->file('cover_pic');
                    $image_name2 = time() . '.' . $image2->getClientOriginalExtension();
                    $destinationPath = public_path('/images/user/cover_pic');
                    $image2->move($destinationPath, $image_name2);
                    $user_data->cover_pic = $image_name2;
                }

                $user_data->save();
            }else {

                $user_data = new UserProfile();
                $user_data->first_name = $pet_owner->first_name;
                $user_data->last_name = $pet_owner->last_name;
                $user_data->email = $pet_owner->email;
                $user_data->phone = $request['phone'];
                $user_data->bio = $request['bio'];
                $user_data->city = $request['city'];
                $user_data->country = $request['country'];
                $user_data->address = $request['address'];
                $user_data->user_name = $pet_owner->user_name;
                $user_data->uuid = $pet_owner->uuid;
                $user_data->user_role = $pet_owner->user_role;
                $user_data->user_id = $pet_owner->id;

                if ($request->hasFile('profile_pic')) {
                    $image = $request->file('profile_pic');
                    $image_name = 'profile'.time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/user/profile_pic');
                    $image->move($destinationPath, $image_name);
                    $user_data->profile_pic = $image_name;
                }

                if ($request->hasFile('cover_pic')) {
                    $image2 = $request->file('cover_pic');
                    $image_name2 = 'cover'.time() . '.' . $image2->getClientOriginalExtension();
                    $destinationPath2 = public_path('/images/user/cover_pic');
                    $image2->move($destinationPath2, $image_name2);
                    $user_data->cover_pic = $image_name2;
                }
                // dd($user_data);
                $user_data->save();
            }
        }elseif (Auth::guard('funder')->check()) {
            $funder = Funder::where('id', $id)->first();
            $funder->first_name = $request->first_name;
            $funder->last_name = $request->last_name;
            $funder->email = $request->email;
            $funder->save();
            // return $funder;
            $user_data = UserProfile::where('user_id', $funder->id)->first();
            if ($user_data) {
                $user_data->first_name = $funder->first_name;
                $user_data->last_name = $funder->last_name;
                $user_data->email = $funder->email;
                $user_data->phone = $request['phone'];
                $user_data->bio = $request['bio'];
                $user_data->city = $request['city'];
                $user_data->country = $request['country'];
                $user_data->address = $request['address'];
                $user_data->user_name = $funder->user_name;
                $user_data->uuid = $funder->uuid;
                $user_data->user_role = $funder->user_role;
                $user_data->user_id = $funder->id;
                if ($request->hasFile('profile_pic')) {
                    $image = $request->file('profile_pic');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/user/profile_pic');
                    $image->move($destinationPath, $image_name);
                    $user_data->profile_pic = $image_name;
                }
                if ($request->hasFile('cover_pic')) {
                    $image2 = $request->file('cover_pic');
                    $image_name2 = time() . '.' . $image2->getClientOriginalExtension();
                    $destinationPath = public_path('/images/user/cover_pic');
                    $image2->move($destinationPath, $image_name2);
                    $user_data->cover_pic = $image_name2;
                }
                $user_data->save();
            } else {
                $user_data = new UserProfile();
                $user_data->first_name = $funder->first_name;
                $user_data->last_name = $funder->last_name;
                $user_data->email = $funder->email;
                $user_data->phone = $request['phone'];
                $user_data->bio = $request['bio'];
                $user_data->city = $request['city'];
                $user_data->country = $request['country'];
                $user_data->address = $request['address'];
                $user_data->user_name = $funder->user_name;
                $user_data->uuid = $funder->uuid;
                $user_data->user_role = $funder->user_role;
                $user_data->user_id = $funder->id;
                if ($request->hasFile('profile_pic')) {
                    $image = $request->file('profile_pic');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/user/profile_pic');
                    $image->move($destinationPath, $image_name);
                    $user_data->profile_pic = $image_name;
                }
                if ($request->hasFile('cover_pic')) {
                    $image2 = $request->file('cover_pic');
                    $image_name2 = time() . '.' . $image2->getClientOriginalExtension();
                    $destinationPath = public_path('/images/user/cover_pic');
                    $image2->move($destinationPath, $image_name2);
                    $user_data->cover_pic = $image_name2;
                }
                $user_data->save();
            }
        }
        return redirect()->back();
    }
}
