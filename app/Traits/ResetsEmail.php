<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait ResetsEmail
{
  public function reset(Request $request)
  {
    $request->validate($this->rules(), $this->validationErrorMessages());

    $response = $this->exec(
      $this->credentials($request), function ($user, $email) {
        $this->resetEmail($user, $email);
      }
    );

    $result = array();
    if ($response == 'email_reset') {
      $result['status '] = 'OK';
    } else {
      $result['status '] = 'NG';
    }
    return $result;
  }

  private function exec(array $credentials, $callback)
  {
    $user = Auth::user();
    $email = $credentials['email'];

    $callback($user, $email);

    return 'email_reset';
  }

  protected function rules()
  {
    return [
      'email' => ["required", "regex:/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"],
    ];
  }

  protected function validationErrorMessages()
  {
    return [];
  }

  protected function credentials(Request $request)
  {
    return $request->only(
      'email'
    );
  }

  protected function resetEmail($user, $email)
  {
    $user->email = $email;
    $user->save();

    $this->guard()->login($user);
  }

  protected function guard()
  {
    return Auth::guard();
  }
}
