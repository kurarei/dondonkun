<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;


class TwitterAccount extends Model
{

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
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
