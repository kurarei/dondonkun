<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TwitterTweetReservation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'twitter_account_id',
        'message',
        'reservation_datetime',
    ];

    protected $hidden = [
        'user_json',
        'deleted_at',
    ];

    protected $dates = [
        'reservation_datetime',
        'deleted_at',
    ];

    public function twitterAccount(): BelongsTo
    {
        return $this->belongsTo(TwitterAccount::class);
    }
}
