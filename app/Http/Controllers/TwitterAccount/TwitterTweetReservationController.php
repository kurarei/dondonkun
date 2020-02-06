<?php

namespace App\Http\Controllers\TwitterAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TwitterTweetReservation\CreateRequest;
use Auth;

class TwitterTweetReservationController extends Controller
{

    public function create(CreateRequest $request, $twitterAccountId)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $account->twitterTweetReservations()->create($request->validated());
        return Auth::user()
            ->twitterAccounts()
            ->with(
                'targetTwitterAccounts',
                'targetTwitterFollowKeywords',
                'targetTwitterLikeKeywords',
                'twitterTweetReservations'
            )
            ->findOrFail($twitterAccountId)
        ;
    }
}
