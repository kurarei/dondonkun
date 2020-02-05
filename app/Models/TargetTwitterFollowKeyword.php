<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TargetTwitterFollowKeyword extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'twitter_account_id',
        'condition',
        'word',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function twitterAccount(): BelongsTo
    {
        return $this->belongsTo(TwitterAccount::class);
    }
}
