<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TargetTwitterAccount extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'twitter_account_id',
        'uid',
        'name',
        'nickname',
        'description',
        'avatar',
        'user_json',
    ];

    protected $hidden = [
        'user_json',
        'deleted_at',
    ];

    protected $casts = [
        'user_json' => 'json',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function twitterAccount(): BelongsTo
    {
        return $this->belongsTo(TwitterAccount::class);
    }
}
