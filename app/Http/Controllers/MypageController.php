<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function mypage(){
        return view('mypage.mypage');
    }

    public function setting(){
        return view('mypage.setting');
    }

    public function tweet(){
        return view('mypage.tweet');
    }

    public function account(){
        return view('mypage.account');
    }
}
