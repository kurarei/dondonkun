<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ResetsEmail;

class UserSettingController extends Controller
{
  use ResetsEmail;

  public function __construct()
  {
    //ログイン後にパスワード変更するため不要
    //$this->middleware('guest');
  }
}
