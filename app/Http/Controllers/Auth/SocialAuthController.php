<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;

class SocialAuthController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */
    public function callback()
    {
        $twitterUser = Socialite::driver('twitter')->user();
        $user = Auth::user();
        if (!$user->twitterAccounts()->where('uid', $twitterUser->id)->exists()) {
            $user->twitterAccounts()->create([
                'token'     => $twitterUser->token,
                'secret'    => $twitterUser->tokenSecret,
                'uid'       => $twitterUser->id,
                'name'      => $twitterUser->name,
                'nickname'  => $twitterUser->nickname,
                'email'     => $twitterUser->email,
                'avatar'    => $twitterUser->user->profile_image_url_https,
                'user_json' => json_encode($twitterUser->user),
            ]);
        }

        return redirect('/mypage');
    }
}
