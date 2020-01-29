<?php

namespace App\Repositories\TwitterApi;

class UserRepository extends AbstractRepository
{

    public function show(int $userId)
    {
        $result = $this->twitterClient->get(
            'users/show', 
            ['user_id' => $userId]
        );
        if ($this->twitterClient->getLastHttpCode() !== 200) {
            // FIXME: 例外を発生させるかは検討
            throw new \Exception('Twitter API Exception : users/show - user_id = ' . $userId);
        }
        return $result;
    }
    
}
