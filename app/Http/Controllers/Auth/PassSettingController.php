<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PassSettingController extends Controller
{
  use ResetsPasswords;

  public function __construct()
  {
    $this->middleware('guest');
  }

  protected function rules()
  {
    return [
      'password' => 'required|confirmed|min:8',
    ];
  }


}
