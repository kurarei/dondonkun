<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\User;


class TwitterAccount extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'token',
        'secret',
        'uid',
        'name',
        'nickname',
        'email',
        'avatar',
        'user_json',
        'unfollow_range',
    ];

    protected $hidden = [
        'uid',
        'token',
        'secret',
        'user_json',
        'deleted_at',
    ];

    protected $casts = [
        'user_json' => 'json',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function targetTwitterAccounts(): HasMany
    {
        return $this->hasMany(TargetTwitterAccount::class);
    }

    public function targetTwitterFollowKeywords(): HasMany
    {
        return $this->hasMany(TargetTwitterFollowKeyword::class);
    }

    public function targetTwitterLikeKeywords(): HasMany
    {
        return $this->hasMany(TargetTwitterLikeKeyword::class);
    }

    public function twitterTweetReservations(): HasMany
    {
        return $this->hasMany(TwitterTweetReservation::class);
    }


    public function update(array $attribute = [], array $options = [])
    {
        $this->fill($attribute)->save($options);

        foreach(['target_twitter_accounts', 'target_twitter_follow_keywords', 'target_twitter_like_keywords'] as $relationshipKey) {
            if (isset($attribute[$relationshipKey]) && is_array($attribute[$relationshipKey])) {
                $data = collect($attribute[$relationshipKey]);
                $ids = $data->filter(function ($childAttribute) {
                    return isset($childAttribute['id']) && $childAttribute['id'];
                })->map(function ($childAttribute) {
                    return $childAttribute['id'];
                });

                $relationship = Str::camel($relationshipKey);
                $this->{ $relationship }()->whereNotIn('id', $ids)->delete();
    
                $data->each(function ($childAttribute) use ($relationship) {
                    if (isset($childAttribute['id'])) {
                        $this->{ $relationship }()->find($childAttribute['id'])->fill($childAttribute)->save();
                    } else {
                        $this->{ $relationship }()->create($childAttribute);
                    }
                });
            }
    
        }
        return $this;
    }
}
