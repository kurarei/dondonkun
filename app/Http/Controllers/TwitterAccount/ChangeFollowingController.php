<?php

namespace App\Http\Controllers\TwitterAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ChangeFollowingController extends Controller
{

    public function __invoke(Request $request, $twitterAccountId)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $account->following = !$account->following;
        $account->save();

        // TODO: Workerを使ってバッチを実行
        // 停止はバッチの中でfollowingの値から判断
        if ($account->following) {
        }

        return response('', 200);
    }

}
