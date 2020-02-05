<?php

namespace App\Repositories\TwitterApi;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\TwitterAccount;

class AbstractRepository
{

    protected $twitterClient;

    public function setCredential(string $token, string $secret)
    {
        $this->twitterClient = new TwitterOAuth(
            config('services.twitter.client_id'),
            config('services.twitter.client_secret'),
            $token,
            $secret
        );
    }

}
