<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('news_feed.news_feed');
    }
    public function profile(){
        return view('profile.profile');
    }
}
