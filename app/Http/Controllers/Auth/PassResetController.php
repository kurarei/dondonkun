<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class PassResetController extends Controller
{
  use SendsPasswordResetEmails;

  public function __construct()
  {
    $this->middleware('guest');
  }

  public function sendResetLinkEmail(Request $request)
  {
    $this->validateEmail($request);

    $response = $this->broker()->sendResetLink(
      $request->only('email')
    );

    return $response == Password::RESET_LINK_SENT
      ? response()->json(['message' => 'Reset link sent to your email.', 'status' => true], 201)
      : response()->json(['message' => 'Unable to send reset link', 'status' => false], 401);
  }
}
