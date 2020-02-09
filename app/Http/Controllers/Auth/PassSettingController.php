<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Traits\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class PassSettingController extends Controller
{
  use ResetsPasswords;

  public function __construct()
  {
    //ログイン後にパスワード変更するため不要
    //$this->middleware('guest');
  }


}

