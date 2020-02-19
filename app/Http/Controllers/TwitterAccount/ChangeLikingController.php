<?php

namespace App\Http\Controllers\TwitterAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ChangeLikingController extends Controller
{

    public function __invoke(Request $request, $twitterAccountId)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $account->liking = !$account->liking;
        $account->save();

        // TODO: Workerを使ってバッチを実行
        // 停止はバッチの中でlikingの値から判断
        if ($account->liking) {
        }

        return response('', 200);
    }

}
