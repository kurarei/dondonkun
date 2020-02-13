<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Log;

trait ResetsPasswords
{
//    use RedirectsUsers;

  public function reset(Request $request)
  {
    $request->validate($this->rules(), $this->validationErrorMessages());

    $response = $this->exec(
      $this->credentials($request), function ($user, $password) {
      $this->resetPassword($user, $password);
    }
    );

    Log::error(print_r($response, true));

    $result = array();
    if ($response == Password::PASSWORD_RESET) {
      $result['status '] = 'OK';
    } else {
      $result['status '] = 'NG';
    }
    return $result;
  }

  private function exec(array $credentials, $callback)
  {
    $user = Auth::user();
    $password = $credentials['password'];

    $callback($user, $password);

    return Password::PASSWORD_RESET;
  }

  /**
   * Get the password reset validation rules.
   *
   * @return array
   */
  protected function rules()
  {
    return [
      'password' => 'required|confirmed|min:8',
    ];
  }

  /**
   * Get the password reset validation error messages.
   *
   * @return array
   */
  protected function validationErrorMessages()
  {
    return [];
  }

  /**
   * Get the password reset credentials from the request.
   *
   * @param \Illuminate\Http\Request $request
   * @return array
   */
  protected function credentials(Request $request)
  {
    return $request->only(
      'password', 'password_confirmation'
    );
  }

  /**
   * Reset the given user's password.
   *
   * @param \Illuminate\Contracts\Auth\CanResetPassword $user
   * @param string $password
   * @return void
   */
  protected function resetPassword($user, $password)
  {
    $user->password = Hash::make($password);
    $user->save();

    event(new PasswordReset($user));

    $this->guard()->login($user);
  }

  /**
   * Get the broker to be used during password reset.
   *
   * @return \Illuminate\Contracts\Auth\PasswordBroker
   */
  public function broker()
  {
    return Password::broker();
  }

  /**
   * Get the guard to be used during password reset.
   *
   * @return \Illuminate\Contracts\Auth\StatefulGuard
   */
  protected function guard()
  {
    return Auth::guard();
  }


}
