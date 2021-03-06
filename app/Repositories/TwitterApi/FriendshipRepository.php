<?php

namespace App\Repositories\TwitterApi;

class FriendshipRepository extends AbstractRepository
{

    public function follow(int $userId): void
    {
        $this->twitterClient->post(
            'friendships/create', 
            ['user_id' => $userId]
        );
        if ($this->twitterClient->getLastHttpCode() !== 200) {
            // FIXME: 例外を発生させるかは検討
            throw new \Exception('Twitter API Exception : friendships/create - user_id = ' . $userId);
        }
    }

    
    public function unfollow(int $userId): void
    {
        $this->twitterClient->post(
            'friendships/destroy', 
            ['user_id' => $userId]
        );
        if ($this->twitterClient->getLastHttpCode() !== 200) {
            // FIXME: 例外を発生させるかは検討
            throw new \Exception('Twitter API Exception : friendships/create - user_id = ' . $userId);
        }
    }

    public function following(int $userId): bool
    {
        $friendships = $this->twitterClient->get(
            'friendships/show',
            ['target_id' => $userId]
        );

        if ($this->twitterClient->getLastHttpCode() !== 200) {
            // FIXME: 例外を発生させるかは検討
            throw new \Exception('Twitter API Exception : friendships/show - user_id = ' . $userId);
        }

        return isset($friendships->relationship->source->following) && $friendships->relationship->source->following;
    }
}
