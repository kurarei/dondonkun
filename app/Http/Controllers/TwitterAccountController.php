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
}
