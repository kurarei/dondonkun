<?php

namespace App\Http\Controllers\TwitterAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ChangeUnfollowingController extends Controller
{

    public function __invoke(Request $request, $twitterAccountId)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $account->unfollowing = !$account->unfollowing;
        $account->save();

        // TODO: Workerを使ってバッチを実行
        // 停止はバッチの中でunfollowingの値から判断
        if ($account->unfollowing) {
        }

        return response('', 200);
    }

}
