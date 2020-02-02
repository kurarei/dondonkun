<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TwitterAccountController extends Controller
{
    public function index()
    {
        return Auth::user()->twitterAccounts;
    }

    public function show($id)
    {
        return  Auth::user()->twitterAccounts()->findOrFail($id);
    }

    public function delete($id)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($id);
        $account->delete();

        return Auth::user()->twitterAccounts;
    }
}
