<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TwitterAccount\UpdateRequest;
use Auth;

class TwitterAccountController extends Controller
{
    public function index()
    {
        return Auth::user()->twitterAccounts;
    }

    public function show($id)
    {
        return  Auth::user()
            ->twitterAccounts()
            ->with(
                'targetTwitterAccounts',
                'targetTwitterFollowKeywords',
                'targetTwitterLikeKeywords'
            )
            ->findOrFail($id)
        ;
    }

    public function update(UpdateRequest $request, $id)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($id);
        $form = $request->validated();
        $account->update($form);
        
        return $this->show($id);
    }

    public function delete($id)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($id);
        $account->delete();

        return Auth::user()->twitterAccounts;
    }
}
