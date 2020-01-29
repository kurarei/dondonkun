<?php

namespace App\Repositories\TwitterApi;

class FavoriteRepository extends AbstractRepository
{

    public function like(int $postId): void
    {
        $this->twitterClient->post(
            'favorites/create', 
            ['id' => $postId]
        );
        if ($this->twitterClient->getLastHttpCode() !== 200) {
            // FIXME: 例外を発生させるかは検討
            throw new \Eception('Twitter API Exception : favorites/create - id = ' . $postId);
        }
    }

    public function unlike(int $postId): void
    {
        $this->twitterClient->post(
            'favorites/destroy', 
            ['id' => $postId]
        );
        if ($this->twitterClient->getLastHttpCode() !== 200) {
            // FIXME: 例外を発生させるかは検討
            throw new \Eception('Twitter API Exception : favorites/create - id = ' . $postId);
        }
    }
    
}
