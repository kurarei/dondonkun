<?php

namespace App\Http\Controllers\TwitterAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TwitterApi\UserRepository as UserApiRepository;
use Auth;

class TargetTwitterAccountController extends Controller
{

    private $userApiRepository;

    public function __construct(UserApiRepository $userApiRepository)
    {
        $this->userApiRepository = $userApiRepository;   
    }

    public function checkByName($twitterAccountId, string $name)
    {
        $account = Auth::user()->twitterAccounts()->findOrFail($twitterAccountId);
        $this->userApiRepository->setCredential($account->token, $account->secret);
        $twitterUser = $this->userApiRepository->showByUsername($name);
        return $account->targetTwitterAccounts()->make([
            'uid' => $twitterUser->id,
            'name' => $twitterUser->name,
            'nickname' => $twitterUser->screen_name,
            'description' => $twitterUser->description,
            'avatar' => $twitterUser->profile_image_url_https,
        ]);
    }
}
