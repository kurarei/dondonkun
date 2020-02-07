<?php

namespace App\Http\Controllers\TwitterAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TwitterTweetReservation\CreateRequest;
use App\Http\Requests\TwitterTweetReservation\UpdateRequest;
use Auth;

class TwitterTweetReservationController extends Controller
{

    public function create(CreateRequest $request, $twitterAccountId)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $account->twitterTweetReservations()->create($request->validated());
        return Auth::user()->findTargetTwitterAccountById($twitterAccountId);
    }

    public function update(UpdateRequest $request, $twitterAccountId, $id)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $reservation = $account->twitterTweetReservations()->findOrFail($id);
        $reservation->fill($request->validated())->save();
        return Auth::user()->findTargetTwitterAccountById($twitterAccountId);
    }

    public function delete($twitterAccountId, $id)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $reservation = $account->twitterTweetReservations()->findOrFail($id);
        $reservation->delete();
        return Auth::user()->findTargetTwitterAccountById($twitterAccountId);
    }
}
