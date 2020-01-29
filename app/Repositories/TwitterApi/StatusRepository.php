<?php

namespace App\Repositories\TwitterApi;

class StatusRepository extends AbstractRepository
{

    public function tweet(string $text): void
    {
        $this->twitterClient->post(
            'statuses/update', 
            ['status' => $text]
        );
        if ($this->twitterClient->getLastHttpCode() !== 200) {
            // FIXME: 例外を発生させるかは検討
            throw new \Exception('Twitter API Exception : statuses/update - text = ' . $text);
        }
    }
    
}
